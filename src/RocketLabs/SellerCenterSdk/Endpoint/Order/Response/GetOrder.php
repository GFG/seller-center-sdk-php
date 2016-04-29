<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Order;

/**
 * Class GetOrder
 */
class GetOrder extends GenericResponse
{

    const ORDERS_KEY = 'Orders';
    const ORDER_KEY = 'Order';

    /**
     * @var Order
     */
    private $order;

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        if (isset($this->body[static::ORDERS_KEY][static::ORDER_KEY])) {
            $this->order = new Order($this->body[static::ORDERS_KEY][static::ORDER_KEY]);
        }
    }
}
