# 
Bumbal GeoService API documentation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/bumbal-geoservice-client-api-php.git"
    }
  ],
  "require": {
    "bumbal/bumbal-geoservice-client-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiuser-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\AddresssuggestionApi();
$iso_country = "iso_country_example"; // string | Country in ISO 3166-1 alpha 2
$zipcode = "zipcode_example"; // string | Zipcode
$house_nr = "house_nr_example"; // string | House Number

try {
    $result = $api_instance->addressSuggestion($iso_country, $zipcode, $house_nr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddresssuggestionApi->addressSuggestion: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddresssuggestionApi* | [**addressSuggestion**](docs/Api/AddresssuggestionApi.md#addresssuggestion) | **GET** /address-suggestion | Find GeoData based on zipcode, house_nr and iso_country
*ApiuserApi* | [**createApiUser**](docs/Api/ApiuserApi.md#createapiuser) | **POST** /admin/api-user | create an ApiUser
*ApiuserApi* | [**deleteApiUser**](docs/Api/ApiuserApi.md#deleteapiuser) | **DELETE** /admin/api-user/{id} | inactivate an ApiUser
*ApiuserApi* | [**listApiUser**](docs/Api/ApiuserApi.md#listapiuser) | **GET** /admin/api-user | retrieve a list of ApiUsers
*ApiuserApi* | [**retrieveApiUser**](docs/Api/ApiuserApi.md#retrieveapiuser) | **GET** /admin/api-user/{id} | retrieve a single ApiUser
*ApiuserApi* | [**updateApiUser**](docs/Api/ApiuserApi.md#updateapiuser) | **PATCH** /admin/api-user/{id} | update an ApiUser
*GeocodingApi* | [**geoCoding**](docs/Api/GeocodingApi.md#geocoding) | **GET** /geocode | GeoCoding
*GeodataApi* | [**createGeoData**](docs/Api/GeodataApi.md#creategeodata) | **POST** /admin/geodata | create a GeoData entry
*GeodataimportApi* | [**importGeoData**](docs/Api/GeodataimportApi.md#importgeodata) | **PUT** /admin/geodata-import/import-data | Import stored datafile
*GeodataimportApi* | [**retrieveGeoData**](docs/Api/GeodataimportApi.md#retrievegeodata) | **PUT** /admin/geodata-import/retrieve-data | retrieve and store datafile from provider
*ReportApi* | [**report**](docs/Api/ReportApi.md#report) | **GET** /admin/report | report service usage for an ApiUser
*ReversegeocodingApi* | [**reverseGeoCoding**](docs/Api/ReversegeocodingApi.md#reversegeocoding) | **GET** /geocode-reverse | Reverse GeoCoding


## Documentation For Models

 - [AddressModel](docs/Model/AddressModel.md)
 - [AddressSuggestionModel](docs/Model/AddressSuggestionModel.md)
 - [ApiErrorResponseModel](docs/Model/ApiErrorResponseModel.md)
 - [ApiSuccessResponseModel](docs/Model/ApiSuccessResponseModel.md)
 - [ApiUserListResponseModel](docs/Model/ApiUserListResponseModel.md)
 - [ApiUserModel](docs/Model/ApiUserModel.md)
 - [ApiUserResponseModel](docs/Model/ApiUserResponseModel.md)
 - [GeoDataListResponseModel](docs/Model/GeoDataListResponseModel.md)
 - [GeoDataModel](docs/Model/GeoDataModel.md)
 - [GeoDataProviderModel](docs/Model/GeoDataProviderModel.md)
 - [LocationModel](docs/Model/LocationModel.md)
 - [ReportModel](docs/Model/ReportModel.md)
 - [ReportResponseModel](docs/Model/ReportResponseModel.md)
 - [RetrieveGeoDataModel](docs/Model/RetrieveGeoDataModel.md)


## Documentation For Authorization


## admin-apikey

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: HTTP header

## apiuser-apikey

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: HTTP header


## Author

jurgen@bumbal.eu


