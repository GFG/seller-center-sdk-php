<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class DocumentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     *
     * @dataProvider constructProvider
     */
    public function testConstruct(array $data)
    {
        $document = new Document($data);

        $this->assertEquals(
            $data,
            [
                Document::DOCUMENT_TYPE_KEY => $document->getType(),
                Document::MIME_TYPE_KEY => $document->getMimeType(),
                Document::FILE_KEY => $document->getRawFile(),
            ]
        );
    }

    /**
     * @return array
     */
    public function constructProvider()
    {
        return [
            [
                'data' => [
                    Document::DOCUMENT_TYPE_KEY => 'parcel',
                    Document::MIME_TYPE_KEY => 'text/html',
                    Document::FILE_KEY => 'YTM0NZomIzI2OTsmIzM0NTueYQ==',
                ]
            ]
        ];
    }
}
