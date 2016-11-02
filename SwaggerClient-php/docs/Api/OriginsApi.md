# Swagger\Client\OriginsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrigin**](OriginsApi.md#findOrigin) | **GET** /origins | List of Origins
[**readOrigin**](OriginsApi.md#readOrigin) | **GET** /origins/{id_origin} | Fetches a single Origin
[**updateOrigin**](OriginsApi.md#updateOrigin) | **PATCH** /origins/{id_origin} | Partially updates a Origin


# **findOrigin**
> \Swagger\Client\Model\Origin[] findOrigin()

List of Origins

List of Origins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OriginsApi();

try {
    $result = $api_instance->findOrigin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->findOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Origin[]**](../Model/Origin.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOrigin**
> \Swagger\Client\Model\Origin readOrigin($id_origin)

Fetches a single Origin

Fetches a single Origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OriginsApi();
$id_origin = "id_origin_example"; // string | Origin ID

try {
    $result = $api_instance->readOrigin($id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->readOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origin** | **string**| Origin ID |

### Return type

[**\Swagger\Client\Model\Origin**](../Model/Origin.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrigin**
> updateOrigin($id_origin, $body)

Partially updates a Origin

Partially updates a Origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OriginsApi();
$id_origin = "id_origin_example"; // string | Origin ID
$body = new \Swagger\Client\Model\Origin(); // \Swagger\Client\Model\Origin | 

try {
    $api_instance->updateOrigin($id_origin, $body);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->updateOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origin** | **string**| Origin ID |
 **body** | [**\Swagger\Client\Model\Origin**](../Model/\Swagger\Client\Model\Origin.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

