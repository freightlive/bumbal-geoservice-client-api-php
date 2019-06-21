# GeoService\ReversegeocodingApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reverseGeoCoding**](ReversegeocodingApi.md#reverseGeoCoding) | **GET** /geocode-reverse | Reverse GeoCoding


# **reverseGeoCoding**
> \GeoService\Model\GeoDataListResponseModel reverseGeoCoding($latitude, $longitude, $distance)

Reverse GeoCoding

Reverse GeoCoding, results are ordered by distance from search lat/lon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiuser-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ReversegeocodingApi();
$latitude = 3.4; // float | 
$longitude = 3.4; // float | 
$distance = 100; // int | Circular range in meters from lat/lon location to search

try {
    $result = $api_instance->reverseGeoCoding($latitude, $longitude, $distance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReversegeocodingApi->reverseGeoCoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **float**|  |
 **longitude** | **float**|  |
 **distance** | **int**| Circular range in meters from lat/lon location to search | [default to 100]

### Return type

[**\GeoService\Model\GeoDataListResponseModel**](../Model/GeoDataListResponseModel.md)

### Authorization

[apiuser-apikey](../../README.md#apiuser-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

