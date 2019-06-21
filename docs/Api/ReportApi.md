# GeoService\ReportApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**report**](ReportApi.md#report) | **GET** /admin/report | report service usage for an ApiUser


# **report**
> \GeoService\Model\ReportResponseModel report($apiuser_name, $datetime_from, $datetime_to)

report service usage for an ApiUser

report service usage for an ApiUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ReportApi();
$apiuser_name = "apiuser_name_example"; // string | name of ApiUser
$datetime_from = "datetime_from_example"; // string | Datetime from
$datetime_to = "datetime_to_example"; // string | Datetime to

try {
    $result = $api_instance->report($apiuser_name, $datetime_from, $datetime_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->report: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiuser_name** | **string**| name of ApiUser | [optional]
 **datetime_from** | **string**| Datetime from | [optional]
 **datetime_to** | **string**| Datetime to | [optional]

### Return type

[**\GeoService\Model\ReportResponseModel**](../Model/ReportResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

