# GeoService\GeocodingApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geoCoding**](GeocodingApi.md#geoCoding) | **GET** /geocode | GeoCoding


# **geoCoding**
> \GeoService\Model\GeoDataModel geoCoding($city, $iso_country, $zipcode, $street, $house_nr)

GeoCoding

GeoCoding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiuser-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\GeocodingApi();
$city = "city_example"; // string | City
$iso_country = "iso_country_example"; // string | Country in ISO 3166-1 alpha 2
$zipcode = "zipcode_example"; // string | Zipcode
$street = "street_example"; // string | Street
$house_nr = "house_nr_example"; // string | House Number

try {
    $result = $api_instance->geoCoding($city, $iso_country, $zipcode, $street, $house_nr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->geoCoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| City |
 **iso_country** | **string**| Country in ISO 3166-1 alpha 2 |
 **zipcode** | **string**| Zipcode | [optional]
 **street** | **string**| Street | [optional]
 **house_nr** | **string**| House Number | [optional]

### Return type

[**\GeoService\Model\GeoDataModel**](../Model/GeoDataModel.md)

### Authorization

[apiuser-apikey](../../README.md#apiuser-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
