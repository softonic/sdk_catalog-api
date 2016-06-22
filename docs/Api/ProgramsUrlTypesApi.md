# Softonic\CatalogApiSdk\ProgramsUrlTypesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramUrlType**](ProgramsUrlTypesApi.md#createProgramUrlType) | **POST** /programs/{id_program}/url-types | Creates a new ProgramUrlType
[**deleteProgramUrlType**](ProgramsUrlTypesApi.md#deleteProgramUrlType) | **DELETE** /programs/{id_program}/url-types/{id_url_type} | Deletes a ProgramUrlType
[**findProgramUrlType**](ProgramsUrlTypesApi.md#findProgramUrlType) | **GET** /programs/{id_program}/url-types | List of ProgramUrlTypes
[**readProgramUrlType**](ProgramsUrlTypesApi.md#readProgramUrlType) | **GET** /programs/{id_program}/url-types/{id_url_type} | Fetches a single ProgramUrlType
[**replaceProgramUrlType**](ProgramsUrlTypesApi.md#replaceProgramUrlType) | **PUT** /programs/{id_program}/url-types/{id_url_type} | Entirely replaces a ProgramUrlType
[**updateProgramUrlType**](ProgramsUrlTypesApi.md#updateProgramUrlType) | **PATCH** /programs/{id_program}/url-types/{id_url_type} | Partially updates a ProgramUrlType


# **createProgramUrlType**
> createProgramUrlType($id_program, $body)

Creates a new ProgramUrlType

Creates a new ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$body = new \Softonic\CatalogApiSdk\Model\ProgramUrlType(); // \Softonic\CatalogApiSdk\Model\ProgramUrlType | 

try {
    $api_instance->createProgramUrlType($id_program, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->createProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramUrlType**](../Model/\Softonic\CatalogApiSdk\Model\ProgramUrlType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramUrlType**
> deleteProgramUrlType($id_program, $id_url_type)

Deletes a ProgramUrlType

Deletes a ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->deleteProgramUrlType($id_program, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->deleteProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramUrlType**
> \Softonic\CatalogApiSdk\Model\ProgramUrlType[] findProgramUrlType($id_program)

List of ProgramUrlTypes

List of ProgramUrlTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID

try {
    $result = $api_instance->findProgramUrlType($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->findProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramUrlType[]**](../Model/ProgramUrlType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramUrlType**
> \Softonic\CatalogApiSdk\Model\ProgramUrlType readProgramUrlType($id_program, $id_url_type)

Fetches a single ProgramUrlType

Fetches a single ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $result = $api_instance->readProgramUrlType($id_program, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->readProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramUrlType**](../Model/ProgramUrlType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramUrlType**
> replaceProgramUrlType($id_program, $id_url_type)

Entirely replaces a ProgramUrlType

Entirely replaces a ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->replaceProgramUrlType($id_program, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->replaceProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramUrlType**
> updateProgramUrlType($id_program, $id_url_type)

Partially updates a ProgramUrlType

Partially updates a ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->updateProgramUrlType($id_program, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesApi->updateProgramUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

