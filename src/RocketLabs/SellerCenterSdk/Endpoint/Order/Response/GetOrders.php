<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Order;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\OrderCollection;

/**
 * Class GetOrders
 */
class GetOrders extends GenericResponse
{
    const ORDERS_KEY = 'Orders';
    const ORDER_KEY = 'Order';

    /**
     * @var OrderCollection
     */
    private $orders;

    /**
     * @return OrderCollection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $orders = [];
        if (isset($this->body[static::ORDERS_KEY][static::ORDER_KEY])) {
            $orders = $this->prepareOrders();
        }

        $this->orders = new OrderCollection($orders);
    }

    /**
     * @return Order[]
     */
    protected function prepareOrders()
    {
        if (isset($this->body[static::ORDERS_KEY][static::ORDER_KEY][Order::ORDER_ID])) {
            return [new Order($this->body[static::ORDERS_KEY][static::ORDER_KEY])];
        }

        return array_map(
            function ($orderData) {
                return new Order($orderData);
            },
            $this->body[static::ORDERS_KEY][static::ORDER_KEY]
        );
    }
}
