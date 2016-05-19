<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Item;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\ItemCollection;

/**
 * Class GetOrderItems
 */
class GetOrderItems extends GenericResponse
{
    const ORDER_ITEM_KEY = 'OrderItem';
    const ORDER_ITEMS_KEY = 'OrderItems';

    /** @var  ItemCollection */
    private $items;

    /**
     * @return ItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $items = [];
        if (isset($this->body[static::ORDER_ITEMS_KEY])) {
            $items = $this->prepareOrderItems();
        }

        $this->items = new ItemCollection($items);
    }

    /**
     * @return Item[]
     */
    protected function prepareOrderItems()
    {
        if (isset($this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY][Item::ORDER_ITEM_ID])) {
            return [new Item($this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY])];
        }

        return array_map(
            function ($orderData) {
                return new Item($orderData);
            },
            $this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY]
        );
    }
}
