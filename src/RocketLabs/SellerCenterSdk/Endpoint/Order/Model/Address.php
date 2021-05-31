<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Address
 */
class Address extends ModelAbstract
{
    const FIRST_NAME = 'FirstName';
    const LAST_NAME = 'LastName';
    const PHONE = 'Phone';
    const PHONE2 = 'Phone2';
    const ADDRESS = 'Address1';
    const ADDRESS2 = 'Address2';
    const ADDRESS3 = 'Address3';
    const ADDRESS4 = 'Address4';
    const ADDRESS5 = 'Address5';
    const CITY = 'City';
    const WARD = 'Ward';
    const REGION = 'Region';
    const POST_CODE = 'PostCode';
    const COUNTRY = 'Country';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::FIRST_NAME => self::TYPE_STRING,
        self::LAST_NAME => self::TYPE_STRING,
        self::PHONE => self::TYPE_STRING,
        self::PHONE2 => self::TYPE_STRING,
        self::ADDRESS => self::TYPE_STRING,
        self::ADDRESS2 => self::TYPE_STRING,
        self::ADDRESS3 => self::TYPE_STRING,
        self::ADDRESS4 => self::TYPE_STRING,
        self::ADDRESS5 => self::TYPE_STRING,
        self::CITY => self::TYPE_STRING,
        self::WARD => self::TYPE_STRING,
        self::REGION => self::TYPE_STRING,
        self::POST_CODE => self::TYPE_STRING,
        self::COUNTRY => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->data[self::FIRST_NAME];
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->data[self::LAST_NAME];
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->data[self::PHONE];
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->data[self::PHONE2];
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->data[self::ADDRESS];
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->data[self::ADDRESS2];
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->data[self::ADDRESS3];
    }

    /**
     * @return string
     */
    public function getAddress4()
    {
        return $this->data[self::ADDRESS4];
    }

    /**
     * @return string
     */
    public function getAddress5()
    {
        return $this->data[self::ADDRESS5];
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->data[self::CITY];
    }

    /**
     * @return string
     */
    public function getWard()
    {
        return $this->data[self::WARD];
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->data[self::REGION];
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->data[self::POST_CODE];
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->data[self::COUNTRY];
    }
}
