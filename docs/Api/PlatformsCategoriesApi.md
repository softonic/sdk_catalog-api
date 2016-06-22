# Softonic\CatalogApiSdk\PlatformsCategoriesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatformCategory**](PlatformsCategoriesApi.md#createPlatformCategory) | **POST** /platforms/{id_platform}/categories | Creates a new PlatformCategory
[**deletePlatformCategory**](PlatformsCategoriesApi.md#deletePlatformCategory) | **DELETE** /platforms/{id_platform}/categories/{id_category} | Deletes a PlatformCategory
[**findPlatformCategory**](PlatformsCategoriesApi.md#findPlatformCategory) | **GET** /platforms/{id_platform}/categories | List of PlatformCategorys
[**readPlatformCategory**](PlatformsCategoriesApi.md#readPlatformCategory) | **GET** /platforms/{id_platform}/categories/{id_category} | Fetches a single PlatformCategory
[**replacePlatformCategory**](PlatformsCategoriesApi.md#replacePlatformCategory) | **PUT** /platforms/{id_platform}/categories/{id_category} | Entirely replaces a PlatformCategory
[**updatePlatformCategory**](PlatformsCategoriesApi.md#updatePlatformCategory) | **PATCH** /platforms/{id_platform}/categories/{id_category} | Partially updates a PlatformCategory


# **createPlatformCategory**
> createPlatformCategory($id_platform, $body)

Creates a new PlatformCategory

Creates a new PlatformCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategory(); // \Softonic\CatalogApiSdk\Model\PlatformCategory | 

try {
    $api_instance->createPlatformCategory($id_platform, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->createPlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategory**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatformCategory**
> deletePlatformCategory($id_platform, $id_category)

Deletes a PlatformCategory

Deletes a PlatformCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID

try {
    $api_instance->deletePlatformCategory($id_platform, $id_category);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->deletePlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatformCategory**
> \Softonic\CatalogApiSdk\Model\PlatformCategory[] findPlatformCategory($id_platform)

List of PlatformCategorys

List of PlatformCategorys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $api_instance->findPlatformCategory($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->findPlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\PlatformCategory[]**](../Model/PlatformCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformCategory**
> \Softonic\CatalogApiSdk\Model\PlatformCategory readPlatformCategory($id_platform, $id_category)

Fetches a single PlatformCategory

Fetches a single PlatformCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID

try {
    $result = $api_instance->readPlatformCategory($id_platform, $id_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->readPlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\PlatformCategory**](../Model/PlatformCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatformCategory**
> replacePlatformCategory($id_platform, $id_category, $body)

Entirely replaces a PlatformCategory

Entirely replaces a PlatformCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategory(); // \Softonic\CatalogApiSdk\Model\PlatformCategory | 

try {
    $api_instance->replacePlatformCategory($id_platform, $id_category, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->replacePlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategory**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformCategory**
> updatePlatformCategory($id_platform, $id_category, $body)

Partially updates a PlatformCategory

Partially updates a PlatformCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategory(); // \Softonic\CatalogApiSdk\Model\PlatformCategory | 

try {
    $api_instance->updatePlatformCategory($id_platform, $id_category, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesApi->updatePlatformCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategory**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

