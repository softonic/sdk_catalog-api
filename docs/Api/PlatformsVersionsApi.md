# Softonic\CatalogApiSdk\PlatformsVersionsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatformVersion**](PlatformsVersionsApi.md#createPlatformVersion) | **POST** /platforms/{id_platform}/versions | Creates a new PlatformVersion
[**deletePlatformVersion**](PlatformsVersionsApi.md#deletePlatformVersion) | **DELETE** /platforms/{id_platform}/versions/{id_version} | Deletes a PlatformVersion
[**findPlatformVersion**](PlatformsVersionsApi.md#findPlatformVersion) | **GET** /platforms/{id_platform}/versions | List of PlatformVersions
[**readPlatformVersion**](PlatformsVersionsApi.md#readPlatformVersion) | **GET** /platforms/{id_platform}/versions/{id_version} | Fetches a single PlatformVersion
[**replacePlatformVersion**](PlatformsVersionsApi.md#replacePlatformVersion) | **PUT** /platforms/{id_platform}/versions/{id_version} | Entirely replaces a PlatformVersion
[**updatePlatformVersion**](PlatformsVersionsApi.md#updatePlatformVersion) | **PATCH** /platforms/{id_platform}/versions/{id_version} | Partially updates a PlatformVersion


# **createPlatformVersion**
> createPlatformVersion($id_platform, $body)

Creates a new PlatformVersion

Creates a new PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformVersion(); // \Softonic\CatalogApiSdk\Model\PlatformVersion | 

try {
    $api_instance->createPlatformVersion($id_platform, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->createPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformVersion**](../Model/\Softonic\CatalogApiSdk\Model\PlatformVersion.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatformVersion**
> deletePlatformVersion($id_platform, $id_version)

Deletes a PlatformVersion

Deletes a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $api_instance->deletePlatformVersion($id_platform, $id_version);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->deletePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatformVersion**
> \Softonic\CatalogApiSdk\Model\PlatformVersion[] findPlatformVersion($id_platform)

List of PlatformVersions

List of PlatformVersions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $api_instance->findPlatformVersion($id_platform);
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

[**\Softonic\CatalogApiSdk\Model\PlatformVersion[]**](../Model/PlatformVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformVersion**
> \Softonic\CatalogApiSdk\Model\PlatformVersion readPlatformVersion($id_platform, $id_version)

Fetches a single PlatformVersion

Fetches a single PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $api_instance->readPlatformVersion($id_platform, $id_version);
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

[**\Softonic\CatalogApiSdk\Model\PlatformVersion**](../Model/PlatformVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatformVersion**
> replacePlatformVersion($id_platform, $id_version, $body)

Entirely replaces a PlatformVersion

Entirely replaces a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformVersion(); // \Softonic\CatalogApiSdk\Model\PlatformVersion | 

try {
    $api_instance->replacePlatformVersion($id_platform, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->replacePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformVersion**](../Model/\Softonic\CatalogApiSdk\Model\PlatformVersion.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformVersion**
> updatePlatformVersion($id_platform, $id_version, $body)

Partially updates a PlatformVersion

Partially updates a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsVersionsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformVersion(); // \Softonic\CatalogApiSdk\Model\PlatformVersion | 

try {
    $api_instance->updatePlatformVersion($id_platform, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->updatePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformVersion**](../Model/\Softonic\CatalogApiSdk\Model\PlatformVersion.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

