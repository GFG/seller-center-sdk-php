<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Order
 */
class Order extends ModelAbstract
{
    const ORDER_ID = 'OrderId';
    const CUSTOMER_FIRST_NAME = 'CustomerFirstName';
    const CUSTOMER_LAST_NAME = 'CustomerLastName';
    const ORDER_NUMBER = 'OrderNumber';
    const PAYMENT_METHOD = 'PaymentMethod';
    const REMARKS = 'Remarks';
    const DELIVERY_INFO = 'DeliveryInfo';
    const PRICE = 'Price';
    const GIFT_OPTION = 'GiftOption';
    const GIFT_MESSAGE = 'GiftMessage';
    const VOUCHER_CODE = 'VoucherCode';
    const CREATED_AT = 'CreatedAt';
    const UPDATED_AT= 'UpdatedAt';
    const ADDRESS_BILLING = 'AddressBilling';
    const ADDRESS_SHIPPING = 'AddressShipping';
    const NATIONAL_REG_NUMBER = 'NationalRegistrationNumber';
    const ITEM_COUNT = 'ItemsCount';
    const PROMISED_SHIPPING_TIME = 'PromisedShippingTime';
    const EXTRA_ATTRIBUTES = 'ExtraAttributes';
    const STATUSES = 'Statuses';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::ORDER_ID => self::TYPE_INT,
        self::CUSTOMER_FIRST_NAME => self::TYPE_STRING,
        self::CUSTOMER_LAST_NAME => self::TYPE_STRING,
        self::ORDER_NUMBER => self::TYPE_STRING,
        self::PAYMENT_METHOD => self::TYPE_STRING,
        self::REMARKS => self::TYPE_STRING,
        self::DELIVERY_INFO => self::TYPE_STRING,
        self::PRICE => self::TYPE_STRING,
        self::GIFT_OPTION => self::TYPE_BOOL,
        self::GIFT_MESSAGE => self::TYPE_STRING,
        self::VOUCHER_CODE => self::TYPE_STRING,
        self::CREATED_AT => self::TYPE_DATETIME,
        self::UPDATED_AT=> self::TYPE_DATETIME,
        self::ADDRESS_BILLING => Address::class,
        self::ADDRESS_SHIPPING => Address::class,
        self::NATIONAL_REG_NUMBER => self::TYPE_STRING,
        self::ITEM_COUNT => self::TYPE_INT,
        self::PROMISED_SHIPPING_TIME => self::TYPE_DATETIME,
        self::EXTRA_ATTRIBUTES => self::TYPE_STRING,
        self::STATUSES => StatusCollection::class,
    ];

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->data[self::ORDER_ID];
    }

    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->data[self::CUSTOMER_FIRST_NAME];
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->data[self::CUSTOMER_LAST_NAME];
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->data[self::ORDER_NUMBER];
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->data[self::PAYMENT_METHOD];
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->data[self::REMARKS];
    }

    /**
     * @return string
     */
    public function getDeliveryInfo()
    {
        return $this->data[self::DELIVERY_INFO];
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->data[self::PRICE];
    }

    /**
     * @return boolean
     */
    public function isGiftOption()
    {
        return $this->data[self::GIFT_OPTION];
    }

    /**
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->data[self::GIFT_MESSAGE];
    }

    /**
     * @return string
     */
    public function getVoucherCode()
    {
        return $this->data[self::VOUCHER_CODE];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->data[self::CREATED_AT];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->data[self::UPDATED_AT];
    }

    /**
     * @return string
     */
    public function getNationalRegistrationNumber()
    {
        return $this->data[self::NATIONAL_REG_NUMBER];
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
        return $this->data[self::ITEM_COUNT];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPromisedShippingTime()
    {
        return $this->data[self::PROMISED_SHIPPING_TIME];
    }

    /**
     * @return string
     */
    public function getExtraAttributes()
    {
        return $this->data[self::EXTRA_ATTRIBUTES];
    }

    /**
     * @return Address
     */
    public function getAddressBilling()
    {
        return $this->data[self::ADDRESS_BILLING];
    }

    /**
     * @return Address
     */
    public function getAddressShipping()
    {
        return $this->data[self::ADDRESS_SHIPPING];
    }

    /**
     * @return StatusCollection
     */
    public function getStatuses()
    {
        return $this->data[self::STATUSES];
    }
}
