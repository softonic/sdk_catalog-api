# Softonic\CatalogApiSdk\ProgramsVersionsBinariesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionBinary**](ProgramsVersionsBinariesApi.md#createProgramVersionBinary) | **POST** /programs/{id_program}/versions/{id_version}/binaries | Creates a new ProgramVersionBinary
[**deleteProgramVersionBinary**](ProgramsVersionsBinariesApi.md#deleteProgramVersionBinary) | **DELETE** /programs/{id_program}/versions/{id_version}/binaries/{id_binary} | Deletes a ProgramVersionBinary
[**findProgramVersionBinary**](ProgramsVersionsBinariesApi.md#findProgramVersionBinary) | **GET** /programs/{id_program}/versions/{id_version}/binaries | List of ProgramVersionBinarys
[**readProgramVersionBinary**](ProgramsVersionsBinariesApi.md#readProgramVersionBinary) | **GET** /programs/{id_program}/versions/{id_version}/binaries/{id_binary} | Fetches a single ProgramVersionBinary
[**replaceProgramVersionBinary**](ProgramsVersionsBinariesApi.md#replaceProgramVersionBinary) | **PUT** /programs/{id_program}/versions/{id_version}/binaries/{id_binary} | Entirely replaces a ProgramVersionBinary
[**updateProgramVersionBinary**](ProgramsVersionsBinariesApi.md#updateProgramVersionBinary) | **PATCH** /programs/{id_program}/versions/{id_version}/binaries/{id_binary} | Partially updates a ProgramVersionBinary


# **createProgramVersionBinary**
> createProgramVersionBinary($id_program, $id_version, $body)

Creates a new ProgramVersionBinary

Creates a new ProgramVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionBinary(); // \Softonic\CatalogApiSdk\Model\ProgramVersionBinary | 

try {
    $api_instance->createProgramVersionBinary($id_program, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->createProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionBinary**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionBinary.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionBinary**
> deleteProgramVersionBinary($id_program, $id_version, $id_binary)

Deletes a ProgramVersionBinary

Deletes a ProgramVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program
$id_binary = "id_binary_example"; // string | Binary identifier in SHA1-Hash format.

try {
    $api_instance->deleteProgramVersionBinary($id_program, $id_version, $id_binary);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->deleteProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |
 **id_binary** | **string**| Binary identifier in SHA1-Hash format. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionBinary**
> \Softonic\CatalogApiSdk\Model\ProgramVersionBinary[] findProgramVersionBinary($id_program, $id_version)

List of ProgramVersionBinarys

List of ProgramVersionBinarys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program

try {
    $result = $api_instance->findProgramVersionBinary($id_program, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->findProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionBinary[]**](../Model/ProgramVersionBinary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionBinary**
> \Softonic\CatalogApiSdk\Model\ProgramVersionBinary readProgramVersionBinary($id_program, $id_version, $id_binary)

Fetches a single ProgramVersionBinary

Fetches a single ProgramVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program
$id_binary = "id_binary_example"; // string | Binary identifier in SHA1-Hash format.

try {
    $result = $api_instance->readProgramVersionBinary($id_program, $id_version, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->readProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |
 **id_binary** | **string**| Binary identifier in SHA1-Hash format. |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionBinary**](../Model/ProgramVersionBinary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionBinary**
> replaceProgramVersionBinary($id_program, $id_version, $id_binary, $body)

Entirely replaces a ProgramVersionBinary

Entirely replaces a ProgramVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program
$id_binary = "id_binary_example"; // string | Binary identifier in SHA1-Hash format.
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionBinary(); // \Softonic\CatalogApiSdk\Model\ProgramVersionBinary | 

try {
    $api_instance->replaceProgramVersionBinary($id_program, $id_version, $id_binary, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->replaceProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |
 **id_binary** | **string**| Binary identifier in SHA1-Hash format. |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionBinary**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionBinary.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionBinary**
> updateProgramVersionBinary($id_program, $id_version, $id_binary, $body)

Partially updates a ProgramVersionBinary

Partially updates a ProgramVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsBinariesApi();
$id_program = "id_program_example"; // string | Program Identifier.
$id_version = "id_version_example"; // string | Version from program
$id_binary = "id_binary_example"; // string | Binary identifier in SHA1-Hash format.
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionBinary(); // \Softonic\CatalogApiSdk\Model\ProgramVersionBinary | 

try {
    $api_instance->updateProgramVersionBinary($id_program, $id_version, $id_binary, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsBinariesApi->updateProgramVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program Identifier. |
 **id_version** | **string**| Version from program |
 **id_binary** | **string**| Binary identifier in SHA1-Hash format. |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionBinary**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionBinary.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

