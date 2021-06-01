<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Item
 */
class Item extends ModelAbstract
{
    const ORDER_ITEM_ID = 'OrderItemId';
    const SHOP_ID = 'ShopId';
    const ORDER_ID = 'OrderId';
    const NAME = 'Name';
    const SKU = 'Sku';
    const SHOP_SKU = 'ShopSku';
    const SHIPPING_TYPE = 'ShippingType';
    const ITEM_PRICE = 'ItemPrice';
    const PAID_PRICE = 'PaidPrice';
    const WALLET_CREDITS = 'WalletCredits';
    const TAX_AMOUNT = 'TaxAmount';
    const SHIPPING_AMOUNT = 'ShippingAmount';
    const VOUCHER_AMOUNT = 'VoucherAmount';
    const VOUCHER_CODE = 'VoucherCode';
    const STATUS = 'Status';
    const SHIPMENT_PROVIDER = 'ShipmentProvider';
    const IS_DIGITAL = 'IsDigital';
    const DIGITAL_DELIVERY_INFO = 'DigitalDeliveryInfo';
    const TRACKING_CODE = 'TrackingCode';
    const REASON = 'Reason';
    const REASON_DETAIL = 'ReasonDetail';
    const PURCHASE_ORDER_ID = 'PurchaseOrderId';
    const PURCHASE_ORDER_NUMBER = 'PurchaseOrderNumber';
    const PACKAGE_ID = 'PackageId';
    const PROMISED_SHIPPING_TIMES = 'PromisedShippingTimes';
    const SHIPPING_PROVIDER_TYPE = 'ShippingProviderType';
    const EXTRA_ATTRIBUTES = 'ExtraAttributes';
    const CREATED_AT = 'CreatedAt';
    const UPDATED_AT = 'UpdatedAt';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::ORDER_ITEM_ID => self::TYPE_INT,
        self::SHOP_ID => self::TYPE_INT,
        self::ORDER_ID => self::TYPE_INT,
        self::NAME => self::TYPE_STRING,
        self::SKU => self::TYPE_STRING,
        self::SHOP_SKU => self::TYPE_STRING,
        self::SHIPPING_TYPE => self::TYPE_STRING,
        self::ITEM_PRICE => self::TYPE_STRING,
        self::PAID_PRICE => self::TYPE_STRING,
        self::WALLET_CREDITS => self::TYPE_STRING,
        self::TAX_AMOUNT => self::TYPE_STRING,
        self::SHIPPING_AMOUNT => self::TYPE_STRING,
        self::VOUCHER_AMOUNT => self::TYPE_STRING,
        self::VOUCHER_CODE => self::TYPE_STRING,
        self::STATUS => self::TYPE_STRING,
        self::SHIPMENT_PROVIDER => self::TYPE_STRING,
        self::IS_DIGITAL => self::TYPE_BOOL,
        self::DIGITAL_DELIVERY_INFO => self::TYPE_STRING,
        self::TRACKING_CODE => self::TYPE_STRING,
        self::REASON => self::TYPE_STRING,
        self::REASON_DETAIL => self::TYPE_STRING,
        self::PURCHASE_ORDER_ID => self::TYPE_INT,
        self::PURCHASE_ORDER_NUMBER => self::TYPE_STRING,
        self::PACKAGE_ID => self::TYPE_STRING,
        self::PROMISED_SHIPPING_TIMES => self::TYPE_DATETIME,
        self::SHIPPING_PROVIDER_TYPE => self::TYPE_STRING,
        self::EXTRA_ATTRIBUTES => self::TYPE_STRING,
        self::CREATED_AT => self::TYPE_DATETIME,
        self::UPDATED_AT => self::TYPE_DATETIME
    ];

    /**
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->data[self::ORDER_ITEM_ID];
    }

    /**
     * @return int
     */
    public function getShopId()
    {
        return $this->data[self::SHOP_ID];
    }

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
    public function getName()
    {
        return $this->data[self::NAME];
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->data[self::SKU];
    }

    /**
     * @return string
     */
    public function getShopSku()
    {
        return $this->data[self::SHOP_SKU];
    }

    /**
     * @return string
     */
    public function getShippingType()
    {
        return $this->data[self::SHIPPING_TYPE];
    }

    /**
     * @return string
     */
    public function getItemPrice()
    {
        return $this->data[self::ITEM_PRICE];
    }

    /**
     * @return string
     */
    public function getPaidPrice()
    {
        return $this->data[self::PAID_PRICE];
    }

    /**
     * @return string
     */
    public function getWalletCredits()
    {
        return $this->data[self::WALLET_CREDITS];
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->data[self::TAX_AMOUNT];
    }

    /**
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->data[self::SHIPPING_AMOUNT];
    }

    /**
     * @return string
     */
    public function getVoucherAmount()
    {
        return $this->data[self::VOUCHER_AMOUNT];
    }

    /**
     * @return string
     */
    public function getVoucherCode()
    {
        return $this->data[self::VOUCHER_CODE];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->data[self::STATUS];
    }

    /**
     * @return string
     */
    public function getShipmentProvider()
    {
        return $this->data[self::SHIPMENT_PROVIDER];
    }

    /**
     * @return boolean
     */
    public function isDigital()
    {
        return $this->data[self::IS_DIGITAL];
    }

    /**
     * @return string
     */
    public function getDigitalDeliveryInfo()
    {
        return $this->data[self::DIGITAL_DELIVERY_INFO];
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->data[self::TRACKING_CODE];
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->data[self::REASON];
    }

    /**
     * @return string
     */
    public function getReasonDetail()
    {
        return $this->data[self::REASON_DETAIL];
    }

    /**
     * @return int
     */
    public function getPurchaseOrderId()
    {
        return $this->data[self::PURCHASE_ORDER_ID];
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->data[self::PURCHASE_ORDER_NUMBER];
    }

    /**
     * @return string
     */
    public function getPackageId()
    {
        return $this->data[self::PACKAGE_ID];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPromisedShippingTimes()
    {
        return $this->data[self::PROMISED_SHIPPING_TIMES];
    }

    /**
     * @return string
     */
    public function getShippingProviderType()
    {
        return $this->data[self::SHIPPING_PROVIDER_TYPE];
    }

    /**
     * @return string
     */
    public function getExtraAttributes()
    {
        return $this->data[self::EXTRA_ATTRIBUTES];
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
}
