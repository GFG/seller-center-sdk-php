<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Document;

/**
 * Class GetDocument
 */
class GetDocument extends GenericResponse
{
    const DOCUMENTS_KEY = 'Documents';
    const DOCUMENT_KEY = 'Document';

    /** @var  Document */
    private $document;

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        if (isset($this->body[static::DOCUMENTS_KEY][static::DOCUMENT_KEY])) {
            $this->document = new Document($this->body[static::DOCUMENTS_KEY][static::DOCUMENT_KEY]);
        }
    }
}
