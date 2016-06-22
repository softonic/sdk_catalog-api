# Softonic\CatalogApiSdk\ProgramsCategoriesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramCategory**](ProgramsCategoriesApi.md#createProgramCategory) | **POST** /programs/{id_program}/categories | Creates a new ProgramCategory
[**deleteProgramCategory**](ProgramsCategoriesApi.md#deleteProgramCategory) | **DELETE** /programs/{id_program}/categories/{id_category} | Deletes a ProgramCategory
[**findProgramCategory**](ProgramsCategoriesApi.md#findProgramCategory) | **GET** /programs/{id_program}/categories | List of ProgramCategorys
[**readProgramCategory**](ProgramsCategoriesApi.md#readProgramCategory) | **GET** /programs/{id_program}/categories/{id_category} | Fetches a single ProgramCategory
[**replaceProgramCategory**](ProgramsCategoriesApi.md#replaceProgramCategory) | **PUT** /programs/{id_program}/categories/{id_category} | Entirely replaces a ProgramCategory
[**updateProgramCategory**](ProgramsCategoriesApi.md#updateProgramCategory) | **PATCH** /programs/{id_program}/categories/{id_category} | Partially updates a ProgramCategory


# **createProgramCategory**
> createProgramCategory($id_program, $body)

Creates a new ProgramCategory

Creates a new ProgramCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID
$body = new \Softonic\CatalogApiSdk\Model\ProgramCategory(); // \Softonic\CatalogApiSdk\Model\ProgramCategory | 

try {
    $api_instance->createProgramCategory($id_program, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->createProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramCategory**](../Model/\Softonic\CatalogApiSdk\Model\ProgramCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramCategory**
> deleteProgramCategory($id_program, $id_category)

Deletes a ProgramCategory

Deletes a ProgramCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_category = "id_category_example"; // string | Category ID

try {
    $api_instance->deleteProgramCategory($id_program, $id_category);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->deleteProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_category** | **string**| Category ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramCategory**
> \Softonic\CatalogApiSdk\Model\ProgramCategory[] findProgramCategory($id_program)

List of ProgramCategorys

List of ProgramCategorys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID

try {
    $result = $api_instance->findProgramCategory($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->findProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramCategory[]**](../Model/ProgramCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramCategory**
> \Softonic\CatalogApiSdk\Model\ProgramCategory readProgramCategory($id_program, $id_category)

Fetches a single ProgramCategory

Fetches a single ProgramCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_category = "id_category_example"; // string | Category ID

try {
    $result = $api_instance->readProgramCategory($id_program, $id_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->readProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_category** | **string**| Category ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramCategory**](../Model/ProgramCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramCategory**
> replaceProgramCategory($id_program, $id_category)

Entirely replaces a ProgramCategory

Entirely replaces a ProgramCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_category = "id_category_example"; // string | Category ID

try {
    $api_instance->replaceProgramCategory($id_program, $id_category);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->replaceProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_category** | **string**| Category ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramCategory**
> updateProgramCategory($id_program, $id_category)

Partially updates a ProgramCategory

Partially updates a ProgramCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsCategoriesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_category = "id_category_example"; // string | Category ID

try {
    $api_instance->updateProgramCategory($id_program, $id_category);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsCategoriesApi->updateProgramCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_category** | **string**| Category ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

