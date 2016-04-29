<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Signature;

class HashHmacRequestSignatureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $algorithm
     * @param $salt
     * @param $subject
     * @param $expected
     *
     * @dataProvider signDataProvider
     */
    public function testSign($algorithm, $salt, $subject, $expected)
    {
        $signature = new HashHmacRequestSignature($algorithm, $salt);
        $signed = $signature->sign($subject);
        $this->assertEquals($expected, $signed);
    }

    /**
     * @return array
     */
    public function signDataProvider()
    {
        $salt = '67c7ef5fa5d408aed1';
        return [
            'sha256' => [
                'sha256',
                $salt,
                'param1=123&param2=ab%20cd',
                '1dff271f6157edfbfc592966a3b811efee46df45e002c25120e4c65e06990c7a'
            ],
            'sha256 salt matters' => [
                'sha256',
                $salt . 'diff',
                'param1=123&param2=ab%20cd',
                'fa95b6da10e5c6b59569627cc88a8f56d2b8d8a8db6543c3e307d6bf8e9cf1db'
            ],
            'sha256 2' => [
                'sha256',
                $salt,
                'param1=123&param2=ab%20cd&someother',
                '7e6782cabcc903dc9e03b10fcd61deafd42a72bbcc750db01819611ec11255b7'
            ],
        ];
    }

    /**
     * @param $algorithm
     * @param $salt
     * @param $subject
     * @param $expectedMessage
     *
     * @dataProvider signExceptionDataProvider
     */
    public function testSignException($algorithm, $salt, $subject, $expectedMessage)
    {
        $this->setExpectedException(\InvalidArgumentException::class, $expectedMessage);
        $signature = new HashHmacRequestSignature($algorithm, $salt);
        $signature->sign($subject);
    }

    /**
     * @return array
     */
    public function signExceptionDataProvider()
    {
        $salt = 'c903dc9e03b10fcd61';
        return [
            'wrong algo' => [
                'no_such_algo',
                $salt,
                'param1',
                'Unsupported hashing algorithm'
            ],
            'wrong subject type' => [
                'sha256',
                $salt,
                ['param1' => 'test', 'param2'],
                'String expected'
            ]
        ];
    }
}
