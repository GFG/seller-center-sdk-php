<?php

namespace RocketLabs\SellerCenterSdk\Core;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface as HttpRequestInterface;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Request\OutputFormatAdapter\OutputFormatAdapterInterface;
use RocketLabs\SellerCenterSdk\Core\Request\RequestInterface;
use RocketLabs\SellerCenterSdk\Core\Request\Signature\RequestSignatureProviderInterface;
use RocketLabs\SellerCenterSdk\Core\Request\Timestamp\TimestampFormatterInterface;
use RocketLabs\SellerCenterSdk\Core\Response\Factory;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    const URL = 'https://sc.api/';
    const USER = 'api@user.de';
    const SIGN = 'signature';
    const TIMESTAMP = '2016-03-16T11:52:08+0100';

    /**
     * @param RequestInterface $request
     * @param HttpRequestInterface $expectedHttpRequest
     * @dataProvider providerCall
     */
    public function testCall(RequestInterface $request, HttpRequestInterface $expectedHttpRequest)
    {
        $client = $this->getClientWithMocks($expectedHttpRequest);

        $client->call($request);
    }

    /**
     * @return array
     */
    public function providerCall()
    {
        return [
            'getter' => [
                'apiRequest' => new GenericRequest(
                    Client::GET,
                    'SomeAction',
                    RequestInterface::V1,
                    [
                        'Param' => 'value'
                    ]
                ),
                'expectedHttpRequest' => new Request(
                    Client::GET,
                    self::URL . '?Action=SomeAction&Format=JSON&Version=1.0&Param=value&UserID='
                    . urlencode(self::USER) . '&Timestamp='. urlencode(self::TIMESTAMP)
                    . '&Signature=' . self::SIGN,
                    ['Accept: application/json']
                )
            ],
            'getter with body' => [
                'apiRequest' => new GenericRequest(
                    Client::GET,
                    'SomeAction',
                    RequestInterface::V1,
                    [
                        'Param' => 'value'
                    ],
                    [
                        'BodyData' => [
                            'Val1' => 1,
                            'Val2' => 2
                        ]
                    ]
                ),
                'expectedHttpRequest' => new Request(
                    Client::GET,
                    self::URL . '?Action=SomeAction&Format=JSON&Version=1.0&Param=value&UserID='
                    . urlencode(self::USER) . '&Timestamp='. urlencode(self::TIMESTAMP) .'&Signature=' . self::SIGN,
                    ['Accept: application/json']
                )
            ],
            'post-request' => [
                'apiRequest' => new GenericRequest(
                    Client::POST,
                    'DoSomeAction',
                    RequestInterface::V2,
                    [
                        'Param' => 'value'
                    ],
                    [
                        'BodyData' => [
                            'Val1' => 1,
                            'Val2' => 2
                        ]
                    ]
                ),
                'expectedHttpRequest' => new Request(
                    Client::POST,
                    self::URL . '?Action=DoSomeAction&Format=JSON&Version=2.0&Param=value&UserID='
                    . urlencode(self::USER) . '&Timestamp='. urlencode(self::TIMESTAMP) .'&Signature=' . self::SIGN,
                    ['Accept: application/json'],
                    $this->getBodyStream()
                )
            ],
            'post-request without body' => [
                'apiRequest' => new GenericRequest(
                    Client::POST,
                    'DoSomeAction',
                    RequestInterface::V2,
                    [
                        'Param' => 'value'
                    ]
                ),
                'expectedHttpRequest' => new Request(
                    Client::POST,
                    self::URL . '?Action=DoSomeAction&Format=JSON&Version=2.0&Param=value&UserID='
                    . urlencode(self::USER) . '&Timestamp='. urlencode(self::TIMESTAMP) .'&Signature=' . self::SIGN,
                    ['Accept: application/json']
                )
            ],
        ];
    }

    /**
     * @param HttpRequestInterface $httpRequest
     * @return Client
     */
    protected function getClientWithMocks(HttpRequestInterface $httpRequest)
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|RequestSignatureProviderInterface $signerMock */
        $signerMock = $this->getMock(RequestSignatureProviderInterface::class);
        $signerMock->method('sign')->willReturn(self::SIGN);

        /** @var \PHPUnit_Framework_MockObject_MockObject|OutputFormatAdapterInterface $formatterMock */
        $formatterMock = $this->getMock(OutputFormatAdapterInterface::class);
        $formatterMock->method('convertToOutputFormat')->willReturn($this->getBodyStream());

        /** @var \PHPUnit_Framework_MockObject_MockObject|TimestampFormatterInterface $timestampMock */
        $timestampMock = $this->getMock(TimestampFormatterInterface::class);
        $timestampMock->method('getFormattedTimestamp')->willReturn(self::TIMESTAMP);

        /** @var \PHPUnit_Framework_MockObject_MockObject|Http\ClientInterface $httpMock */
        $httpMock = $this->getMock(Http\ClientInterface::class);
        $httpMock
            ->expects($this->once())
            ->method('send')
            ->with($httpRequest)
            ->willReturn(new Response());

        /** @var \PHPUnit_Framework_MockObject_MockObject|Factory $factoryMock */
        $factoryMock = $this->getMock(Factory::class);
        $factoryMock->expects($this->once())->method('buildResponse');

        return new Client(
            new Configuration(self::URL, self::USER, 'key'),
            $signerMock,
            $formatterMock,
            $timestampMock,
            $httpMock,
            $factoryMock
        );
    }

    /**
     * @return mixed
     */
    protected function getBodyStream()
    {
        static $bodyStream;

        if (empty($bodyStream)) {
            $bodyStream = \GuzzleHttp\Psr7\stream_for('<xml><d ok="true" /></xml>');
        }

        return $bodyStream;
    }
}
