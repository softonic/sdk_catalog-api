# Softonic\CatalogApiSdk\PlatformsVersionsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findPlatformVersion**](PlatformsVersionsApi.md#findPlatformVersion) | **GET** /platforms/{id_platform}/versions | List of PlatformVersions
[**readPlatformVersion**](PlatformsVersionsApi.md#readPlatformVersion) | **GET** /platforms/{id_platform}/versions/{id_version} | Fetches a single PlatformVersion


# **findPlatformVersion**
> \Softonic\CatalogApiSdk\Client\Model\PlatformVersion[] findPlatformVersion($id_platform)

List of PlatformVersions

List of PlatformVersions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->findPlatformVersion($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->findPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\PlatformVersion[]**](../Model/PlatformVersion.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformVersion**
> \Softonic\CatalogApiSdk\Client\Model\PlatformVersion readPlatformVersion($id_platform, $id_version)

Fetches a single PlatformVersion

Fetches a single PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $apiInstance->readPlatformVersion($id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->readPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\PlatformVersion**](../Model/PlatformVersion.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

