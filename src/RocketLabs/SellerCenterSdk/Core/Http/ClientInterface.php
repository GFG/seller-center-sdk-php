<?php

namespace RocketLabs\SellerCenterSdk\Core\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array $options Request options to apply to the given request and to the transfer.
     *
     * @return ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []);
}
