# Softonic\CatalogApiSdk\PlatformsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findPlatform**](PlatformsApi.md#findPlatform) | **GET** /platforms | List of Platforms
[**readPlatform**](PlatformsApi.md#readPlatform) | **GET** /platforms/{id_platform} | Fetches a single Platform


# **findPlatform**
> \Softonic\CatalogApiSdk\Model\Platform[] findPlatform()

List of Platforms

List of Platforms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsApi();

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

[**\Softonic\CatalogApiSdk\Model\Platform[]**](../Model/Platform.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatform**
> \Softonic\CatalogApiSdk\Model\Platform readPlatform($id_platform)

Fetches a single Platform

Fetches a single Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsApi();
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

[**\Softonic\CatalogApiSdk\Model\Platform**](../Model/Platform.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

