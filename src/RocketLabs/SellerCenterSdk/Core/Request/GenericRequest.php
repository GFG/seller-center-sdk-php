<?php

namespace RocketLabs\SellerCenterSdk\Core\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;

/**
 * Class GenericRequest
 */
class GenericRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var array
     */
    protected $query;

    /**
     * @var array
     */
    protected $body;

    /**
     * @var
     */
    protected $version;

    /**
     * GenericRequest constructor.
     * @param string $method
     * @param string $action
     * @param string $version
     * @param array $query
     * @param array $body
     */
    public function __construct($method, $action, $version, array $query = [], array $body = [])
    {
        $this->method = $method;
        $this->action = $action;
        $this->version = $version;
        $this->query = $query;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getBodyData()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @return string[]
     */
    public function toArray()
    {
        return [
            static::FIELD_ACTION => $this->getAction(),
            static::FIELD_FORMAT => static::DEFAULT_RESPONSE_FORMAT,
            static::FIELD_VERSION => $this->getVersion(),
        ] + $this->query;
    }

    /**
     * @param Client $client
     * @return GenericResponse|ErrorResponse
     */
    public function call(Client $client)
    {
        return $client->call($this);
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GenericResponse::class;
    }
}
