# Softonic\CatalogApiSdk\PlatformsCharacteristicsApi

All URIs are relative to *http://v2.catalog.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findPlatformCharacteristic**](PlatformsCharacteristicsApi.md#findPlatformCharacteristic) | **GET** /platforms/{id_platform}/characteristics | List of PlatformCharacteristics
[**readPlatformCharacteristic**](PlatformsCharacteristicsApi.md#readPlatformCharacteristic) | **GET** /platforms/{id_platform}/characteristics/{id_characteristic} | Fetches a single PlatformCharacteristic


# **findPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[] findPlatformCharacteristic($id_platform)

List of PlatformCharacteristics

List of PlatformCharacteristics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $api_instance->findPlatformCharacteristic($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->findPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[]**](../Model/PlatformCharacteristic.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic readPlatformCharacteristic($id_platform, $id_characteristic)

Fetches a single PlatformCharacteristic

Fetches a single PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_characteristic = "id_characteristic_example"; // string | Platform characteristic ID

try {
    $result = $api_instance->readPlatformCharacteristic($id_platform, $id_characteristic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->readPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_characteristic** | **string**| Platform characteristic ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic**](../Model/PlatformCharacteristic.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

