# Softonic\\CatalogApiSdk\ProgramsUrlTypesApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProgramUrlType**](ProgramsUrlTypesApi.md#findProgramUrlType) | **GET** /programs/{id_program}/url-types | List of ProgramUrlTypes
[**readProgramUrlType**](ProgramsUrlTypesApi.md#readProgramUrlType) | **GET** /programs/{id_program}/url-types/{id_url_type} | Fetches a single ProgramUrlType


# **findProgramUrlType**
> \Softonic\\CatalogApiSdk\\Client\\Model\ProgramUrlType[] findProgramUrlType($id_program)

List of ProgramUrlTypes

List of ProgramUrlTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\\CatalogApiSdk\Api\ProgramsUrlTypesApi();
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

[**\Softonic\\CatalogApiSdk\\Client\\Model\ProgramUrlType[]**](../Model/ProgramUrlType.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramUrlType**
> \Softonic\\CatalogApiSdk\\Client\\Model\ProgramUrlType readProgramUrlType($id_program, $id_url_type)

Fetches a single ProgramUrlType

Fetches a single ProgramUrlType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\\CatalogApiSdk\Api\ProgramsUrlTypesApi();
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

[**\Softonic\\CatalogApiSdk\\Client\\Model\ProgramUrlType**](../Model/ProgramUrlType.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

