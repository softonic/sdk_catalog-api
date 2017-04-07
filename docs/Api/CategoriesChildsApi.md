# Softonic\CatalogApiSdk\CategoriesChildsApi

All URIs are relative to *http://v2.catalog.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategoryChild**](CategoriesChildsApi.md#createCategoryChild) | **POST** /categories/{id_category}/childs | Creates a new CategoryChild
[**findCategoryChild**](CategoriesChildsApi.md#findCategoryChild) | **GET** /categories/{id_category}/childs | List of CategoryChilds
[**readCategoryChild**](CategoriesChildsApi.md#readCategoryChild) | **GET** /categories/{id_category}/childs/{id_child} | Fetches a single CategoryChild


# **createCategoryChild**
> createCategoryChild($id_category, $body)

Creates a new CategoryChild

Creates a new CategoryChild

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

$api_instance = new Softonic\CatalogApiSdk\Api\CategoriesChildsApi();
$id_category = "id_category_example"; // string | Parent category identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\CategoryChild(); // \Softonic\CatalogApiSdk\Client\Model\CategoryChild | 

try {
    $api_instance->createCategoryChild($id_category, $body);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesChildsApi->createCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_category** | **string**| Parent category identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\CategoryChild**](../Model/\Softonic\CatalogApiSdk\Client\Model\CategoryChild.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCategoryChild**
> \Softonic\CatalogApiSdk\Client\Model\CategoryChild[] findCategoryChild($id_category)

List of CategoryChilds

List of CategoryChilds

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

$api_instance = new Softonic\CatalogApiSdk\Api\CategoriesChildsApi();
$id_category = "id_category_example"; // string | Parent category identifier

try {
    $result = $api_instance->findCategoryChild($id_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesChildsApi->findCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_category** | **string**| Parent category identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\CategoryChild[]**](../Model/CategoryChild.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCategoryChild**
> \Softonic\CatalogApiSdk\Client\Model\CategoryChild readCategoryChild($id_category, $id_child)

Fetches a single CategoryChild

Fetches a single CategoryChild

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

$api_instance = new Softonic\CatalogApiSdk\Api\CategoriesChildsApi();
$id_category = "id_category_example"; // string | Parent category identifier
$id_child = "id_child_example"; // string | Child category identifier

try {
    $result = $api_instance->readCategoryChild($id_category, $id_child);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesChildsApi->readCategoryChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_category** | **string**| Parent category identifier |
 **id_child** | **string**| Child category identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\CategoryChild**](../Model/CategoryChild.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

