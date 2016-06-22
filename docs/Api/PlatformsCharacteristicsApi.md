# Softonic\CatalogApiSdk\PlatformsCharacteristicsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatformCharacteristic**](PlatformsCharacteristicsApi.md#createPlatformCharacteristic) | **POST** /platforms/{id_platform}/characteristics | Creates a new PlatformCharacteristic
[**deletePlatformCharacteristic**](PlatformsCharacteristicsApi.md#deletePlatformCharacteristic) | **DELETE** /platforms/{id_platform}/characteristics/{id_characteristic} | Deletes a PlatformCharacteristic
[**findPlatformCharacteristic**](PlatformsCharacteristicsApi.md#findPlatformCharacteristic) | **GET** /platforms/{id_platform}/characteristics | List of PlatformCharacteristics
[**readPlatformCharacteristic**](PlatformsCharacteristicsApi.md#readPlatformCharacteristic) | **GET** /platforms/{id_platform}/characteristics/{id_characteristic} | Fetches a single PlatformCharacteristic
[**replacePlatformCharacteristic**](PlatformsCharacteristicsApi.md#replacePlatformCharacteristic) | **PUT** /platforms/{id_platform}/characteristics/{id_characteristic} | Entirely replaces a PlatformCharacteristic
[**updatePlatformCharacteristic**](PlatformsCharacteristicsApi.md#updatePlatformCharacteristic) | **PATCH** /platforms/{id_platform}/characteristics/{id_characteristic} | Partially updates a PlatformCharacteristic


# **createPlatformCharacteristic**
> createPlatformCharacteristic($id_platform, $body)

Creates a new PlatformCharacteristic

Creates a new PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCharacteristic(); // \Softonic\CatalogApiSdk\Model\PlatformCharacteristic | 

try {
    $api_instance->createPlatformCharacteristic($id_platform, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->createPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCharacteristic**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCharacteristic.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatformCharacteristic**
> deletePlatformCharacteristic($id_platform, $id_characteristic)

Deletes a PlatformCharacteristic

Deletes a PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_characteristic = "id_characteristic_example"; // string | Platform characteristic ID

try {
    $api_instance->deletePlatformCharacteristic($id_platform, $id_characteristic);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->deletePlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_characteristic** | **string**| Platform characteristic ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Model\PlatformCharacteristic[] findPlatformCharacteristic($id_platform)

List of PlatformCharacteristics

List of PlatformCharacteristics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Softonic\CatalogApiSdk\Model\PlatformCharacteristic[]**](../Model/PlatformCharacteristic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Model\PlatformCharacteristic readPlatformCharacteristic($id_platform, $id_characteristic)

Fetches a single PlatformCharacteristic

Fetches a single PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Softonic\CatalogApiSdk\Model\PlatformCharacteristic**](../Model/PlatformCharacteristic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatformCharacteristic**
> replacePlatformCharacteristic($id_platform, $id_characteristic, $body)

Entirely replaces a PlatformCharacteristic

Entirely replaces a PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_characteristic = "id_characteristic_example"; // string | Platform characteristic ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCharacteristic(); // \Softonic\CatalogApiSdk\Model\PlatformCharacteristic | 

try {
    $api_instance->replacePlatformCharacteristic($id_platform, $id_characteristic, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->replacePlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_characteristic** | **string**| Platform characteristic ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCharacteristic**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCharacteristic.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformCharacteristic**
> updatePlatformCharacteristic($id_platform, $id_characteristic, $body)

Partially updates a PlatformCharacteristic

Partially updates a PlatformCharacteristic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCharacteristicsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_characteristic = "id_characteristic_example"; // string | Platform characteristic ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCharacteristic(); // \Softonic\CatalogApiSdk\Model\PlatformCharacteristic | 

try {
    $api_instance->updatePlatformCharacteristic($id_platform, $id_characteristic, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCharacteristicsApi->updatePlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_characteristic** | **string**| Platform characteristic ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCharacteristic**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCharacteristic.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

