# Swagger\Client\PlatformsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findPlatform**](PlatformsApi.md#findPlatform) | **GET** /platforms | List of Platforms
[**readPlatform**](PlatformsApi.md#readPlatform) | **GET** /platforms/{id_platform} | Fetches a single Platform


# **findPlatform**
> \Swagger\Client\Model\Platform[] findPlatform()

List of Platforms

List of Platforms

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

$api_instance = new Swagger\Client\Api\PlatformsApi();

try {
    $result = $api_instance->findPlatform();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->findPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Platform[]**](../Model/Platform.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatform**
> \Swagger\Client\Model\Platform readPlatform($id_platform)

Fetches a single Platform

Fetches a single Platform

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

$api_instance = new Swagger\Client\Api\PlatformsApi();
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $api_instance->readPlatform($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->readPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\Platform**](../Model/Platform.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

