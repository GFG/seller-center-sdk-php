<?php

namespace RocketLabs\SellerCenterSdk\Core\Response;

class AbstractResponse implements ResponseInterface
{
    /** @var string */
    protected $responseData;

    /** @var string|null Success or Error */
    protected $responseType;

    /** @var array */
    protected $body;

    /** @var array */
    protected $head;

    /**
     * @param array $responseData
     */
    public function __construct(array $responseData)
    {
        $this->responseData = $responseData;

        $this->processDecodedResponse($this->responseData);
    }

    /**
     * @return array
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param array $responseData
     * @throws \RuntimeException
     */
    protected function processDecodedResponse(array $responseData)
    {
        $this->head = $this->extractHead($responseData);
        $this->body = $this->extractBody($responseData);
    }

    /**
     * @param array $responseData
     * @return array
     */
    protected function extractBody(array $responseData)
    {
        $body = isset($responseData[static::KEY_BODY]) ? $responseData[static::KEY_BODY] : [];

        return (is_array($body) ? $body : [$body]);
    }

    /**
     * @param array $responseData
     * @return array
     */
    protected function extractHead(array $responseData)
    {
        $head = isset($responseData[static::KEY_HEAD]) ? $responseData[static::KEY_HEAD] : [];

        return (is_array($head) ? $head : [$head]);
    }
}
