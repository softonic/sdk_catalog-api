# Softonic\CatalogApiSdk\PlatformsCategoriesChildsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatformCategoryChild**](PlatformsCategoriesChildsApi.md#createPlatformCategoryChild) | **POST** /platforms/{id_platform}/categories/{id_category}/childs | Creates a new PlatformCategoryChild
[**deletePlatformCategoryChild**](PlatformsCategoriesChildsApi.md#deletePlatformCategoryChild) | **DELETE** /platforms/{id_platform}/categories/{id_category}/childs/{id_child} | Deletes a PlatformCategoryChild
[**findPlatformCategoryChild**](PlatformsCategoriesChildsApi.md#findPlatformCategoryChild) | **GET** /platforms/{id_platform}/categories/{id_category}/childs | List of PlatformCategoryChilds
[**readPlatformCategoryChild**](PlatformsCategoriesChildsApi.md#readPlatformCategoryChild) | **GET** /platforms/{id_platform}/categories/{id_category}/childs/{id_child} | Fetches a single PlatformCategoryChild
[**replacePlatformCategoryChild**](PlatformsCategoriesChildsApi.md#replacePlatformCategoryChild) | **PUT** /platforms/{id_platform}/categories/{id_category}/childs/{id_child} | Entirely replaces a PlatformCategoryChild
[**updatePlatformCategoryChild**](PlatformsCategoriesChildsApi.md#updatePlatformCategoryChild) | **PATCH** /platforms/{id_platform}/categories/{id_category}/childs/{id_child} | Partially updates a PlatformCategoryChild


# **createPlatformCategoryChild**
> createPlatformCategoryChild($id_platform, $id_category, $body)

Creates a new PlatformCategoryChild

Creates a new PlatformCategoryChild

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategoryChild(); // \Softonic\CatalogApiSdk\Model\PlatformCategoryChild | 

try {
    $api_instance->createPlatformCategoryChild($id_platform, $id_category, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->createPlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategoryChild**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategoryChild.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatformCategoryChild**
> deletePlatformCategoryChild($id_platform, $id_category, $id_child)

Deletes a PlatformCategoryChild

Deletes a PlatformCategoryChild

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$id_child = "id_child_example"; // string | Category child ID

try {
    $api_instance->deletePlatformCategoryChild($id_platform, $id_category, $id_child);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->deletePlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **id_child** | **string**| Category child ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatformCategoryChild**
> \Softonic\CatalogApiSdk\Model\PlatformCategoryChild[] findPlatformCategoryChild($id_platform, $id_category)

List of PlatformCategoryChilds

List of PlatformCategoryChilds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID

try {
    $result = $api_instance->findPlatformCategoryChild($id_platform, $id_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->findPlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\PlatformCategoryChild[]**](../Model/PlatformCategoryChild.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformCategoryChild**
> \Softonic\CatalogApiSdk\Model\PlatformCategoryChild readPlatformCategoryChild($id_platform, $id_category, $id_child)

Fetches a single PlatformCategoryChild

Fetches a single PlatformCategoryChild

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$id_child = "id_child_example"; // string | Category child ID

try {
    $result = $api_instance->readPlatformCategoryChild($id_platform, $id_category, $id_child);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->readPlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **id_child** | **string**| Category child ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\PlatformCategoryChild**](../Model/PlatformCategoryChild.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatformCategoryChild**
> replacePlatformCategoryChild($id_platform, $id_category, $id_child, $body)

Entirely replaces a PlatformCategoryChild

Entirely replaces a PlatformCategoryChild

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$id_child = "id_child_example"; // string | Category child ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategoryChild(); // \Softonic\CatalogApiSdk\Model\PlatformCategoryChild | 

try {
    $api_instance->replacePlatformCategoryChild($id_platform, $id_category, $id_child, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->replacePlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **id_child** | **string**| Category child ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategoryChild**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategoryChild.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformCategoryChild**
> updatePlatformCategoryChild($id_platform, $id_category, $id_child, $body)

Partially updates a PlatformCategoryChild

Partially updates a PlatformCategoryChild

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\PlatformsCategoriesChildsApi();
$id_platform = "id_platform_example"; // string | Platform ID
$id_category = "id_category_example"; // string | Category ID
$id_child = "id_child_example"; // string | Category child ID
$body = new \Softonic\CatalogApiSdk\Model\PlatformCategoryChild(); // \Softonic\CatalogApiSdk\Model\PlatformCategoryChild | 

try {
    $api_instance->updatePlatformCategoryChild($id_platform, $id_category, $id_child, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsCategoriesChildsApi->updatePlatformCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_category** | **string**| Category ID |
 **id_child** | **string**| Category child ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\PlatformCategoryChild**](../Model/\Softonic\CatalogApiSdk\Model\PlatformCategoryChild.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

