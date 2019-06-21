# GeoService\GeodataApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGeoData**](GeodataApi.md#createGeoData) | **POST** /admin/geodata | create a GeoData entry


# **createGeoData**
> \GeoService\Model\ApiSuccessResponseModel createGeoData($arguments)

create a GeoData entry

create a GeoData entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\GeodataApi();
$arguments = new \GeoService\Model\GeoDataModel(); // \GeoService\Model\GeoDataModel | GeoData

try {
    $result = $api_instance->createGeoData($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeodataApi->createGeoData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\GeoService\Model\GeoDataModel**](../Model/GeoDataModel.md)| GeoData |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

