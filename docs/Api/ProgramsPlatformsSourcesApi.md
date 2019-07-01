# Softonic\CatalogApiSdk\ProgramsPlatformsSourcesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#createprogramplatformsource) | **POST** /programs/{id_program}/platforms/{id_platform}/sources | Creates a ProgramPlatformSource
[**deleteProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#deleteprogramplatformsource) | **DELETE** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Deletes a ProgramPlatformSource
[**findProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#findprogramplatformsource) | **GET** /programs/{id_program}/platforms/{id_platform}/sources | Gets a ProgramPlatformSource list
[**readProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#readprogramplatformsource) | **GET** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Fetches a single ProgramPlatformSource
[**replaceProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#replaceprogramplatformsource) | **PUT** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Entirely replaces a ProgramPlatformSource
[**updateProgramPlatformSource**](ProgramsPlatformsSourcesApi.md#updateprogramplatformsource) | **PATCH** /programs/{id_program}/platforms/{id_platform}/sources/{id_source} | Partially updates a ProgramPlatformSource

# **createProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformSource($body, $id_program, $id_platform)

Creates a ProgramPlatformSource

Creates a ProgramPlatformSource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformSource to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->createProgramPlatformSource($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->createProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformSource to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformSource($id_program, $id_platform, $id_source)

Deletes a ProgramPlatformSource

Deletes a ProgramPlatformSource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_source = "id_source_example"; // string | Source ID

try {
    $result = $apiInstance->deleteProgramPlatformSource($id_program, $id_platform, $id_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->deleteProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_source** | **string**| Source ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource[] findProgramPlatformSource($id_program, $id_platform)

Gets a ProgramPlatformSource list

Gets a ProgramPlatformSource list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

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
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource[]**](../Model/ProgramPlatformSource.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
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

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_source = "id_source_example"; // string | Source ID

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
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_source** | **string**| Source ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformSource($body, $id_program, $id_platform, $id_source)

Entirely replaces a ProgramPlatformSource

Entirely replaces a ProgramPlatformSource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformSource to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_source = "id_source_example"; // string | Source ID

try {
    $result = $apiInstance->replaceProgramPlatformSource($body, $id_program, $id_platform, $id_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->replaceProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformSource to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_source** | **string**| Source ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformSource**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2002 updateProgramPlatformSource($body, $id_program, $id_platform, $id_source)

Partially updates a ProgramPlatformSource

Partially updates a ProgramPlatformSource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource | ProgramPlatformSource to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_source = "id_source_example"; // string | Source ID

try {
    $result = $apiInstance->updateProgramPlatformSource($body, $id_program, $id_platform, $id_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsSourcesApi->updateProgramPlatformSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformSource**](../Model/ProgramPlatformSource.md)| ProgramPlatformSource to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_source** | **string**| Source ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

