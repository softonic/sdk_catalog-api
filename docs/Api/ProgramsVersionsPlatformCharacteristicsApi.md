# Softonic\CatalogApiSdk\ProgramsVersionsPlatformCharacteristicsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionPlatformCharacteristic**](ProgramsVersionsPlatformCharacteristicsApi.md#createProgramVersionPlatformCharacteristic) | **POST** /programs/{id_program}/versions/{id_version}/platform-characteristics | Creates a new ProgramVersionPlatformCharacteristic
[**deleteProgramVersionPlatformCharacteristic**](ProgramsVersionsPlatformCharacteristicsApi.md#deleteProgramVersionPlatformCharacteristic) | **DELETE** /programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic} | Deletes a ProgramVersionPlatformCharacteristic
[**findProgramVersionPlatformCharacteristic**](ProgramsVersionsPlatformCharacteristicsApi.md#findProgramVersionPlatformCharacteristic) | **GET** /programs/{id_program}/versions/{id_version}/platform-characteristics | List of ProgramVersionPlatformCharacteristics
[**readProgramVersionPlatformCharacteristic**](ProgramsVersionsPlatformCharacteristicsApi.md#readProgramVersionPlatformCharacteristic) | **GET** /programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic} | Fetches a single ProgramVersionPlatformCharacteristic
[**replaceProgramVersionPlatformCharacteristic**](ProgramsVersionsPlatformCharacteristicsApi.md#replaceProgramVersionPlatformCharacteristic) | **PUT** /programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic} | Entirely replaces a ProgramVersionPlatformCharacteristic


# **createProgramVersionPlatformCharacteristic**
> createProgramVersionPlatformCharacteristic($id_program, $id_version, $body)

Creates a new ProgramVersionPlatformCharacteristic

Creates a new ProgramVersionPlatformCharacteristic

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformCharacteristicsApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic | 

try {
    $api_instance->createProgramVersionPlatformCharacteristic($id_program, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformCharacteristicsApi->createProgramVersionPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic**](../Model/ProgramVersionPlatformCharacteristic.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionPlatformCharacteristic**
> deleteProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)

Deletes a ProgramVersionPlatformCharacteristic

Deletes a ProgramVersionPlatformCharacteristic

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformCharacteristicsApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_characteristic = "id_platform_characteristic_example"; // string | Platform Characteristic ID

try {
    $api_instance->deleteProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformCharacteristicsApi->deleteProgramVersionPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_characteristic** | **string**| Platform Characteristic ID |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[] findProgramVersionPlatformCharacteristic($id_program, $id_version)

List of ProgramVersionPlatformCharacteristics

List of ProgramVersionPlatformCharacteristics

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformCharacteristicsApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID

try {
    $result = $api_instance->findProgramVersionPlatformCharacteristic($id_program, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformCharacteristicsApi->findProgramVersionPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[]**](../Model/ProgramVersionPlatformCharacteristic.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionPlatformCharacteristic**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic readProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)

Fetches a single ProgramVersionPlatformCharacteristic

Fetches a single ProgramVersionPlatformCharacteristic

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformCharacteristicsApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_characteristic = "id_platform_characteristic_example"; // string | Platform Characteristic ID

try {
    $result = $api_instance->readProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformCharacteristicsApi->readProgramVersionPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_characteristic** | **string**| Platform Characteristic ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic**](../Model/ProgramVersionPlatformCharacteristic.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionPlatformCharacteristic**
> replaceProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)

Entirely replaces a ProgramVersionPlatformCharacteristic

Entirely replaces a ProgramVersionPlatformCharacteristic

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformCharacteristicsApi(new \Http\Adapter\Guzzle6\Client());
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_characteristic = "id_platform_characteristic_example"; // string | Platform Characteristic ID

try {
    $api_instance->replaceProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformCharacteristicsApi->replaceProgramVersionPlatformCharacteristic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_characteristic** | **string**| Platform Characteristic ID |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

