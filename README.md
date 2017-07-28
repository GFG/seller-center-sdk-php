## 1) Requirements

PHP 5.5 and later.

### Composer
You can install the sdk via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require rocket-labs/sellercenter-sdk-php
```

To use the sdk code, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## 2) Implemented methods

These methods can be accessed through `RocketLabs\SellerCenterSdk\Endpoint\Endpoints` class:

- Order endpoint - `Endpoints::order()`
  - GetOrders
  - GetOrder
  - GetDocument
  - GetOrderItems
  - SetStatusToCanceled
  - SetStatusToPackedByMarketplace
  - SetStatusToReadyToShip

All another methods you can call with `GenericRequest`, for more information please look at [this sample](samples/genericGetter.php) for GET-methods or [this one](samples/genericPost.php) for POST-methods.

## 3) Samples
To understand how to work with the SDK, please look at [samples](samples/).
To make the samples work, change the API settings in [samples/config/config.php](samples/config/config.php).
You need to set up the SellerCenter URL (only https is supported), your login and API key.
> **API key** can be found in your SellerCenter account under Settings > Manage Users. If a given user has no API key yet, generate it by clicking a corresponding link.

After this you can run any sample and see the real results requests.

> **Please note**, that POST requests could affect on your real products, orders etc. Make sure that SKUs or Order IDs
in samples are not intersect with data in your SellerCenter account.

### 3.1) Generic Samples
You can access every API Method by using the GenericRequest class and the core implementation.

**see sample in action**
```bash
cd samples
php ./genericGetter.php
```

### 3.1) Endpoints Samples
For the most important API endpoints the SDK provides facades for simple API usage. See [endpoint samples here](samples/endpoint/).

The following code describes the pattern how to use the endpoints implementation:
```php
<?php
    require __DIR__ . '/vendor/autoload.php';

    use RocketLabs\SellerCenterSdk\Core\Client;
    use RocketLabs\SellerCenterSdk\Core\Configuration;
    use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

    // create client instance with your credetials
    $client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

    // get response for a certain api call with fluent interface:
    // Endpoints - name of endpoint - api method to call - call($client)
    $response = Endpoints::order()->getOrder(12)->call($client);

    // Or, for some complex methods, RequestBuilders can be used,
    // In such cases API command will have following structure:
    // Endpoints - name of endpoint - api method to call - some builder's setters - build - call($client)
    $response = Endpoints::order()->getOrders()->setSorting('created_at', 'ASC')->setLimit(12)->build()->call($client);
```

**see a sample in action**

open file of a sample. For example `samples/endpoint/order/getOrder.php`, and change the variable `$orderId` to contain order id of your seller.
Then run it in the console:

```bash
php ./samples/endpoint/order/getOrder.php
```

