<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class ProductTest
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider constructProvider
     * @param array $data
     */
    public function testConstruct(array $data)
    {
        $product = new Product($data);

        $this->assertEquals(
            $data,
            [
                Product::SHOP_SKU => $product->getShopSku(),
                Product::SELLER_SKU => $product->getSellerSku(),
                Product::NAME => $product->getName(),
                Product::BRAND => $product->getBrand(),
                Product::DESCRIPTION => $product->getDescription(),
                Product::TAX_CLASS => $product->getTaxClass(),
                Product::VARIATION => $product->getVariation(),
                Product::PARENT_SKU => $product->getParentSku(),
                Product::QUANTITY => $product->getQuantity(),
                Product::FULFILLMENT_BY_NON_SELLABLE => $product->getFulfillmentByNonSellable(),
                Product::AVAILABLE => $product->getAvailable(),
                Product::PRICE => $product->getPrice(),
                Product::SALE_PRICE => $product->getSalePrice(),
                Product::SALE_START_DATE => $product->getSaleStartDate()->format(\DateTime::ISO8601),
                Product::SALE_END_DATE => $product->getSaleEndDate()->format(\DateTime::ISO8601),
                Product::STATUS => $product->getStatus(),
                Product::PRODUCT_ID => $product->getProductId(),
                Product::PRIMARY_CATEGORY => $product->getPrimaryCategory(),
                Product::CATEGORIES => $product->getCategories(),
                Product::MAIN_IMAGE => $product->getMainImage(),
                Product::IMAGES => $product->getImages(),
                Product::PRODUCT_DATA => $product->getProductData(),
                Product::URL => $product->getUrl(),
            ]
        );
    }

    /**
     * @return array
     */
    public function constructProvider()
    {

        $now = new \DateTime('now');

        return [
            [
                'data' => [
                    Product::SHOP_SKU => '41053821ret',
                    Product::SELLER_SKU => '41053821e4',
                    Product::NAME => 'New Product',
                    Product::BRAND => 'A Little 7',
                    Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                    Product::TAX_CLASS => 'default',
                    Product::VARIATION => 'XXL',
                    Product::PARENT_SKU => '4218we2323',
                    Product::QUANTITY => 2,
                    Product::FULFILLMENT_BY_NON_SELLABLE => 'fulfillment',
                    Product::AVAILABLE => 'yes',
                    Product::PRICE => 40.00,
                    Product::SALE_PRICE => 33,
                    Product::SALE_START_DATE => $now->format(\DateTime::ISO8601),
                    Product::SALE_END_DATE => $now->modify('+5 day')->format(\DateTime::ISO8601),
                    Product::STATUS => 'active',
                    Product::PRODUCT_ID => '1',
                    Product::PRIMARY_CATEGORY => 5588,
                    Product::CATEGORIES => '1,2',
                    Product::MAIN_IMAGE => 1,
                    Product::IMAGES => [
                        'https://seller.image.net/1'
                    ],
                    Product::PRODUCT_DATA => [
                        'DescriptionEn' => 'I am a description for the new product',
                        'NameEn' => 'I am a new product',
                        'PackageType' => 'Parcel'
                    ],
                    Product::URL => 'https://seller.product.net/1',
                ]
            ]
        ];
    }
}
