# GeoService\GeodataimportApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importGeoData**](GeodataimportApi.md#importGeoData) | **PUT** /admin/geodata-import/import-data | Import stored datafile
[**retrieveGeoData**](GeodataimportApi.md#retrieveGeoData) | **PUT** /admin/geodata-import/retrieve-data | retrieve and store datafile from provider


# **importGeoData**
> \GeoService\Model\ApiSuccessResponseModel importGeoData($arguments)

Import stored datafile

Import stored datafile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\GeodataimportApi();
$arguments = new \GeoService\Model\GeoDataProviderModel(); // \GeoService\Model\GeoDataProviderModel | GeoDataProviderModel

try {
    $result = $api_instance->importGeoData($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeodataimportApi->importGeoData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\GeoService\Model\GeoDataProviderModel**](../Model/GeoDataProviderModel.md)| GeoDataProviderModel |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveGeoData**
> \GeoService\Model\ApiSuccessResponseModel retrieveGeoData($arguments)

retrieve and store datafile from provider

Retrieve and store datafile from provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\GeodataimportApi();
$arguments = new \GeoService\Model\RetrieveGeoDataModel(); // \GeoService\Model\RetrieveGeoDataModel | RetrieveGeoDataModel

try {
    $result = $api_instance->retrieveGeoData($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeodataimportApi->retrieveGeoData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\GeoService\Model\RetrieveGeoDataModel**](../Model/RetrieveGeoDataModel.md)| RetrieveGeoDataModel |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

