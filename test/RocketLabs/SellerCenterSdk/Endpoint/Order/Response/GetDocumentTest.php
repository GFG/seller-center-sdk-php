<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Document;

class GetDocumentTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructEmpty()
    {
        $response = new GetDocument(
            [
                'Head' => [],
                'Body' => []
            ]
        );
        $this->assertNull($response->getDocument());
    }

    public function testConstruct()
    {
        $response = new GetDocument($this->dataProvider());
        $this->assertInstanceOf(Document::class, $response->getDocument());
    }

    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            'Head' => [],
            'Body' => [
                'Documents' => [
                    'Document' => [
                        'DocumentType' => 'parcel',
                        'MimeType' => 'text/html',
                        'File' => 'YTM0NZomIzI2OTsmIzM0NTueYQ==',
                    ]
                ]
            ]
        ];
    }
}
