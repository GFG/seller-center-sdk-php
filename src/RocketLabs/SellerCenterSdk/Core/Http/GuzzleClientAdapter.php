<?php

namespace RocketLabs\SellerCenterSdk\Core\Http;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Client as HttpClient;

class GuzzleClientAdapter implements ClientInterface
{
    /**
     * @var HttpClient
     */
    private $guzzleClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->guzzleClient = new HttpClient();
    }

    /**
     * @inheritdoc
     */
    public function send(RequestInterface $request, array $options = [])
    {
        return $this->guzzleClient->send($request, $options);
    }
}
