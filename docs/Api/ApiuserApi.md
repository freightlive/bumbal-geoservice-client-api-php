# GeoService\ApiuserApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApiUser**](ApiuserApi.md#createApiUser) | **POST** /admin/api-user | create an ApiUser
[**deleteApiUser**](ApiuserApi.md#deleteApiUser) | **DELETE** /admin/api-user/{id} | inactivate an ApiUser
[**listApiUser**](ApiuserApi.md#listApiUser) | **GET** /admin/api-user | retrieve a list of ApiUsers
[**retrieveApiUser**](ApiuserApi.md#retrieveApiUser) | **GET** /admin/api-user/{id} | retrieve a single ApiUser
[**updateApiUser**](ApiuserApi.md#updateApiUser) | **PATCH** /admin/api-user/{id} | update an ApiUser


# **createApiUser**
> \GeoService\Model\ApiSuccessResponseModel createApiUser($arguments)

create an ApiUser

create an ApiUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ApiuserApi();
$arguments = new \GeoService\Model\ApiUserModel(); // \GeoService\Model\ApiUserModel | ApiUser

try {
    $result = $api_instance->createApiUser($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiuserApi->createApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\GeoService\Model\ApiUserModel**](../Model/ApiUserModel.md)| ApiUser |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApiUser**
> \GeoService\Model\ApiSuccessResponseModel deleteApiUser($id)

inactivate an ApiUser

inactivate an ApiUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ApiuserApi();
$id = "id_example"; // string | ApiUser id

try {
    $result = $api_instance->deleteApiUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiuserApi->deleteApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ApiUser id |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApiUser**
> \GeoService\Model\ApiUserListResponseModel listApiUser($offset, $limit, $orderby, $order)

retrieve a list of ApiUsers

retrieve a list of ApiUsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ApiuserApi();
$offset = 0; // int | Offset in ApiUsers
$limit = 50; // int | Number of requested ApiUsers in list
$orderby = "created_at"; // string | Order by ApiUser field
$order = "desc"; // string | Order ascending or descending

try {
    $result = $api_instance->listApiUser($offset, $limit, $orderby, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiuserApi->listApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset in ApiUsers | [optional] [default to 0]
 **limit** | **int**| Number of requested ApiUsers in list | [optional] [default to 50]
 **orderby** | **string**| Order by ApiUser field | [optional] [default to created_at]
 **order** | **string**| Order ascending or descending | [optional] [default to desc]

### Return type

[**\GeoService\Model\ApiUserListResponseModel**](../Model/ApiUserListResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveApiUser**
> \GeoService\Model\ApiUserResponseModel retrieveApiUser($id)

retrieve a single ApiUser

retrieve a single ApiUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ApiuserApi();
$id = "id_example"; // string | ApiUser id

try {
    $result = $api_instance->retrieveApiUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiuserApi->retrieveApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ApiUser id |

### Return type

[**\GeoService\Model\ApiUserResponseModel**](../Model/ApiUserResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApiUser**
> \GeoService\Model\ApiSuccessResponseModel updateApiUser($id, $arguments)

update an ApiUser

update an ApiUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: admin-apikey
GeoService\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// GeoService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new GeoService\Api\ApiuserApi();
$id = "id_example"; // string | ApiUser id
$arguments = new \GeoService\Model\ApiUserModel(); // \GeoService\Model\ApiUserModel | ApiUser

try {
    $result = $api_instance->updateApiUser($id, $arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiuserApi->updateApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ApiUser id |
 **arguments** | [**\GeoService\Model\ApiUserModel**](../Model/ApiUserModel.md)| ApiUser |

### Return type

[**\GeoService\Model\ApiSuccessResponseModel**](../Model/ApiSuccessResponseModel.md)

### Authorization

[admin-apikey](../../README.md#admin-apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

