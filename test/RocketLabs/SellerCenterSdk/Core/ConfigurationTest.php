<?php

namespace RocketLabs\SellerCenterSdk\Core;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $url
     * @param string $user
     * @dataProvider providerConstructorWithValidConfig
     */
    public function testConstructorWithValidConfig($url, $user)
    {
        $config = new Configuration($url, $user, 'anything');

        $this->assertEquals($url, $config->getUrl());
        $this->assertEquals($user, $config->getUser());
        $this->assertEquals('anything', $config->getKey());
    }

    /**
     * @param string $url
     * @param string $user
     * @param string $expectedMessage
     * @dataProvider providerConstructorWithInvalidConfig
     */
    public function testConstructorWithInvalidConfig($url, $user, $expectedMessage)
    {
        $this->setExpectedException(\InvalidArgumentException::class, $expectedMessage);

        new Configuration($url, $user, 'anything');
    }

    /**
     * @return array
     */
    public function providerConstructorWithValidConfig()
    {
        return [
            'valid data' => [
                'url' => 'https://api.sellercenter.someventure.de/',
                'user' => 'api@someseller.de'
            ]
        ];
    }

    /**
     * @return array
     */
    public function providerConstructorWithInvalidConfig()
    {
        return [
            'invalid url (not an url)' => [
                'url' => 'not-an-url',
                'user' => 'api@someseller.de',
                'message' => 'Provided url for Seller Center Api "not-an-url" is invalid'
            ],
            'invalid url (url without host)' => [
                'url' => 'https:///api.php/',
                'user' => 'api@someseller.de',
                'message' => 'Provided url for Seller Center Api "https:///api.php/" is invalid'
            ],
            'invalid url (url without schema)' => [
                'url' => '//api.sellercenter.someventure.de/',
                'user' => 'api@someseller.de',
                'message' => 'Provided url for Seller Center Api "//api.sellercenter.someventure.de/" is invalid'
            ],
            'invalid schema' => [
                'url' => 'ftp://api.sellercenter.someventure.de',
                'user' => 'api@someseller.de',
                'message' => 'The scheme of provided url "ftp://api.sellercenter.someventure.de" is invalid, please use one of following schemas "http", "https"'
            ],
            'invalid user' => [
                'url' => 'https://api.sellercenter.someventure.de',
                'user' => 'api.someseller.de',
                'message' => 'Provided user for Seller Center Api "api.someseller.de" is invalid'
            ],
        ];
    }
}
