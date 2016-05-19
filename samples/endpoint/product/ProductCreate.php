<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$productCollectionRequest = Endpoints::product()->productCreate();

$brand = 'A Little 7'; // Please change the brand
$primaryCategory = 5588; // Please change the primary category
$sellerSku0 = 'Api test product'; // Please change SellerSku to your convenience
$sellerSku1 = 'Api test product again'; // Please change SellerSku to your convenience

$productCollectionRequest->newProduct()
    ->setName('New Product')
    ->setSellerSku($sellerSku0)
    ->setStatus('active')
    ->setVariation('XXL')
    ->setPrimaryCategory($primaryCategory)
    ->setDescription('<![CDATA[This is a <b>bold</b> product.]]')
    ->setBrand($brand)
    ->setPrice(40.00)
    ->setSalePrice(33)
    ->setSaleStartDate(new DateTime('now'))
    ->setSaleEndDate((new DateTime('now'))->modify('+5 day'))
    ->setTaxClass('default')
    ->setProductData(
        [
            'DescriptionEn' => 'I am a description for the new product',
            'NameEn' => 'I am a new product',
            'PackageType' => 'Parcel'
        ]
    );

$productCollectionRequest->newProduct()
    ->setName('New Product Again')
    ->setSellerSku($sellerSku1)
    ->setStatus('active')
    ->setVariation('XXS')
    ->setPrimaryCategory($primaryCategory)
    ->setDescription('<![CDATA[This is a <b>bold</b> product.]]')
    ->setBrand($brand)
    ->setPrice(41.00)
    ->setSalePrice(32)
    ->setSaleStartDate(new DateTime('now'))
    ->setSaleEndDate((new DateTime('now'))->modify('+5 day'))
    ->setTaxClass('default')
    ->setProductData(
        [
            'DescriptionEn' => 'I am a description for the new product again',
            'NameEn' => 'I am a new product Again',
            'PackageType' => 'Parcel'
        ]
    );

$response = $productCollectionRequest->build()->call($client);

if ($response instanceof ErrorResponse) {
    /** @var ErrorResponse $response */
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    printf("The feed `%s` has been created.\n", $response->getFeedId());
}
