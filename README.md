# Megaport API client in PHP
This package contains a simple API client on top of the API delivered by Megaport as part of their services.
It abstracts away the necessity of building the client code and will use plain object oriented techniques 
in PHP to communicate from your application written in PHP with their API.

This package is not written by Megaport employees and therefore needs the community to help complete and
update the package as Megaport will do changes to their API as well.

## Megaport
Megaport is a cloud service provider that delivers connectivity between datacenters and clouds worldwide.
See for more information http://www.megaport.com. For the API documentation see: https://dev.megaport.com

## Basics
The code is all encapsulated in Client objects. Each client object that is instantiated is constructed with
two variables: `$login` and `root_uri`. The login variable is either `null` in case of a login client or the 
Login instance returned from the login client if you want to do anything else. This is necessary as the
encapsulated code will add necessary header information for logging in to the Megaport API.
The `root_uri` variable by default points to the staging environment of megaport. Change this parameter to
the production URL in your implementation will make sure the code is executed against the production API.

## Security Functions

The login functionality is present on the MegaportClient object.

### Login
```php
<?php
use Megaport\Client\MegaportClient;
use Megaport\Component\Environment;

$client = new MegaportClient(Environment::ENV_STAGING);
$client->auth('MY_MEGAPORT_USERNAME', 'MY_MEGAPORT_PASSWORD');
```

## Product details
The following methods are available on the `MegaportClient`:
* getProducts
* getProduct

These methods allow you to retrieve detailed information regarding the products you have available in Megaport.

*Example for getting all product information*
```php
<?php
use Megaport\Client\MegaportClient;
use Megaport\Component\Environment;

$client = new MegaportClient(Environment::ENV_STAGING);
$client->auth('MY_MEGAPORT_USERNAME', 'MY_MEGAPORT_PASSWORD');
$products = $client->getProducts();
```

*Example for getting product information for a specific product*
```php
<?php
use Megaport\Client\MegaportClient;
use Megaport\Component\Environment;

$client = new MegaportClient(Environment::ENV_STAGING);
$client->auth('MY_MEGAPORT_USERNAME', 'MY_MEGAPORT_PASSWORD');
$product = $client->getProduct('PRODUCT_UUID');
```


## Lists used for ordering functions
For these functions a seperate client is available called `ListClient` in the ordering namespace.

These functions include the functions for getting locations, PartnerMegaports and InternetExchanges.

*Example for getting list ordering data*
```php
<?php
use Megaport\Model\Order\Location;
use Megaport\Client\MegaportClient;
use Megaport\Component\Environment;

$client = new MegaportClient(Environment::ENV_STAGING);
$client->auth('MY_MEGAPORT_USERNAME', 'MY_MEGAPORT_PASSWORD');

try {
    $locations = $client->getLocations();

    /**
     * @var Location $dutchLocation Dutch location.
     */

    $partnerMps = $client->getPartnerMegaports();
    $ix = $client->getInternetExchanges($locations[0]->getId());
} catch (Exception $e) {
    die('an error occurred');
}
```

*To be completed with more clients and data elements*

## Standard API order

* Buy port
* Buy VXC
* Buy IX
* Service keys


## Cloud partner API Orders

* AWS (order)
* Azure (lookup and order)
* Oracle (lookup and order)
* Alibaba (order)
* Google (lookup and order) 
* Nutanix (lookup and order)

## Pricing

## Invoices

## General APIs

## Documents

## Service metrics