# Softonic\CatalogApiSdk\ProgramsPlatformsSourcesApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#createProgramPlatformSource) | **POST** /programs/{id_program}/platforms/{id_platform}/sources | Creates a new ProgramPlatformSource
[**deleteProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#deleteProgramPlatformSource) | **DELETE** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Deletes a ProgramPlatformSource
[**findProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#findProgramPlatformSource) | **GET** /programs/{id_program}/platforms/{id_platform}/sources | List of ProgramPlatformSources
[**readProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#readProgramPlatformSource) | **GET** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Fetches a single ProgramPlatformSource
[**replaceProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#replaceProgramPlatformSource) | **PUT** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Entirely replaces a ProgramPlatformSource
[**updateProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#updateProgramPlatformSource) | **PATCH** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Partially updates a ProgramPlatformSource


# **createProgramPlatformSource**
> createProgramPlatformSource($id_program, $id_platform, $body)

Creates a new ProgramPlatformSource

Creates a new ProgramPlatformSource

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource | 

try {
    $apiInstance->createProgramPlatformSource($id_program, $id_platform, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->createProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformSource**
> deleteProgramPlatformSource($id_program, $id_platform, $id_source)

Deletes a ProgramPlatformSource

Deletes a ProgramPlatformSource

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_source = "id_source_example"; // string | Source identifier

try {
    $apiInstance->deleteProgramPlatformSource($id_program, $id_platform, $id_source);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->deleteProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_source** | **string**| Source identifier |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource[] findProgramPlatformSource($id_program, $id_platform)

List of ProgramPlatformSources

List of ProgramPlatformSources

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier

try {
    $result = $apiInstance->findProgramPlatformSource($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->findProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource[]**](../Model/ProgramPlatformSource.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource readProgramPlatformSource($id_program, $id_platform, $id_source)

Fetches a single ProgramPlatformSource

Fetches a single ProgramPlatformSource

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_source = "id_source_example"; // string | Source identifier

try {
    $result = $apiInstance->readProgramPlatformSource($id_program, $id_platform, $id_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->readProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_source** | **string**| Source identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformSource**
> replaceProgramPlatformSource($id_program, $id_platform, $id_source, $body)

Entirely replaces a ProgramPlatformSource

Entirely replaces a ProgramPlatformSource

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_source = "id_source_example"; // string | Source identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource | 

try {
    $apiInstance->replaceProgramPlatformSource($id_program, $id_platform, $id_source, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->replaceProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_source** | **string**| Source identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformSource**
> updateProgramPlatformSource($id_program, $id_platform, $id_source, $body)

Partially updates a ProgramPlatformSource

Partially updates a ProgramPlatformSource

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_source = "id_source_example"; // string | Source identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource | 

try {
    $apiInstance->updateProgramPlatformSource($id_program, $id_platform, $id_source, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->updateProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_source** | **string**| Source identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

