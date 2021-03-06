# Softonic\CatalogApiSdk\ProgramsVersionsPlatformVersionsApi

All URIs are relative to *https://catalog-v2.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionPlatformVersion**](ProgramsVersionsPlatformVersionsApi.md#createProgramVersionPlatformVersion) | **POST** /programs/{id_program}/versions/{id_version}/platform-versions | Creates a new ProgramVersionPlatformVersion
[**deleteProgramVersionPlatformVersion**](ProgramsVersionsPlatformVersionsApi.md#deleteProgramVersionPlatformVersion) | **DELETE** /programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version} | Deletes a ProgramVersionPlatformVersion
[**findProgramVersionPlatformVersion**](ProgramsVersionsPlatformVersionsApi.md#findProgramVersionPlatformVersion) | **GET** /programs/{id_program}/versions/{id_version}/platform-versions | List of ProgramVersionPlatformVersions
[**readProgramVersionPlatformVersion**](ProgramsVersionsPlatformVersionsApi.md#readProgramVersionPlatformVersion) | **GET** /programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version} | Fetches a single ProgramVersionPlatformVersion
[**replaceProgramVersionPlatformVersion**](ProgramsVersionsPlatformVersionsApi.md#replaceProgramVersionPlatformVersion) | **PUT** /programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version} | Entirely replaces a ProgramVersionPlatformVersion


# **createProgramVersionPlatformVersion**
> createProgramVersionPlatformVersion($id_program, $id_version, $body)

Creates a new ProgramVersionPlatformVersion

Creates a new ProgramVersionPlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion | 

try {
    $apiInstance->createProgramVersionPlatformVersion($id_program, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformVersionsApi->createProgramVersionPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion**](../Model/ProgramVersionPlatformVersion.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionPlatformVersion**
> deleteProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)

Deletes a ProgramVersionPlatformVersion

Deletes a ProgramVersionPlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_version = "id_platform_version_example"; // string | Platform Version ID

try {
    $apiInstance->deleteProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformVersionsApi->deleteProgramVersionPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_version** | **string**| Platform Version ID |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionPlatformVersion**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[] findProgramVersionPlatformVersion($id_program, $id_version)

List of ProgramVersionPlatformVersions

List of ProgramVersionPlatformVersions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID

try {
    $result = $apiInstance->findProgramVersionPlatformVersion($id_program, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformVersionsApi->findProgramVersionPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[]**](../Model/ProgramVersionPlatformVersion.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionPlatformVersion**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion readProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)

Fetches a single ProgramVersionPlatformVersion

Fetches a single ProgramVersionPlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_version = "id_platform_version_example"; // string | Platform Version ID

try {
    $result = $apiInstance->readProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformVersionsApi->readProgramVersionPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_version** | **string**| Platform Version ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion**](../Model/ProgramVersionPlatformVersion.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionPlatformVersion**
> replaceProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)

Entirely replaces a ProgramVersionPlatformVersion

Entirely replaces a ProgramVersionPlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsPlatformVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version ID
$id_platform_version = "id_platform_version_example"; // string | Platform Version ID

try {
    $apiInstance->replaceProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsPlatformVersionsApi->replaceProgramVersionPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version ID |
 **id_platform_version** | **string**| Platform Version ID |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

