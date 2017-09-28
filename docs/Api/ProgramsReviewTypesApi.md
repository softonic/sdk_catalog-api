# Softonic\CatalogApiSdk\ProgramsReviewTypesApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProgramReviewType**](ProgramsReviewTypesApi.md#findProgramReviewType) | **GET** /programs/{id_program}/review-types | List of ProgramReviewTypes
[**readProgramReviewType**](ProgramsReviewTypesApi.md#readProgramReviewType) | **GET** /programs/{id_program}/review-types/{id_review_type} | Fetches a single ProgramReviewType


# **findProgramReviewType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewType[] findProgramReviewType($id_program)

List of ProgramReviewTypes

List of ProgramReviewTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID

try {
    $result = $api_instance->findProgramReviewType($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesApi->findProgramReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewType[]**](../Model/ProgramReviewType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramReviewType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewType readProgramReviewType($id_program, $id_review_type)

Fetches a single ProgramReviewType

Fetches a single ProgramReviewType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type

try {
    $result = $api_instance->readProgramReviewType($id_program, $id_review_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesApi->readProgramReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewType**](../Model/ProgramReviewType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

