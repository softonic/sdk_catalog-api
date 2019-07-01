# Softonic\CatalogApiSdk\ProgramsPlatformsVersionsLanguagesBinariesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionLanguageBinary**](ProgramsPlatformsVersionsLanguagesBinariesApi.md#createprogramplatformversionlanguagebinary) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/binaries | Creates a ProgramPlatformVersionLanguageBinary
[**deleteProgramPlatformVersionLanguageBinary**](ProgramsPlatformsVersionsLanguagesBinariesApi.md#deleteprogramplatformversionlanguagebinary) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/binaries/{id_binary} | Deletes a ProgramPlatformVersionLanguageBinary
[**findProgramPlatformVersionLanguageBinary**](ProgramsPlatformsVersionsLanguagesBinariesApi.md#findprogramplatformversionlanguagebinary) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/binaries | Gets a ProgramPlatformVersionLanguageBinary list
[**readProgramPlatformVersionLanguageBinary**](ProgramsPlatformsVersionsLanguagesBinariesApi.md#readprogramplatformversionlanguagebinary) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/binaries/{id_binary} | Fetches a single ProgramPlatformVersionLanguageBinary
[**replaceProgramPlatformVersionLanguageBinary**](ProgramsPlatformsVersionsLanguagesBinariesApi.md#replaceprogramplatformversionlanguagebinary) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/binaries/{id_binary} | Entirely replaces a ProgramPlatformVersionLanguageBinary

# **createProgramPlatformVersionLanguageBinary**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformVersionLanguageBinary($body, $id_program, $id_platform, $id_version, $id_language)

Creates a ProgramPlatformVersionLanguageBinary

Creates a ProgramPlatformVersionLanguageBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformVersionLanguageBinary to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->createProgramPlatformVersionLanguageBinary($body, $id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesBinariesApi->createProgramPlatformVersionLanguageBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguageBinary to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformVersionLanguageBinary**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary)

Deletes a ProgramPlatformVersionLanguageBinary

Deletes a ProgramPlatformVersionLanguageBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->deleteProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesBinariesApi->deleteProgramPlatformVersionLanguageBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionLanguageBinary**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageBinary[] findProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language)

Gets a ProgramPlatformVersionLanguageBinary list

Gets a ProgramPlatformVersionLanguageBinary list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->findProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesBinariesApi->findProgramPlatformVersionLanguageBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageBinary[]**](../Model/ProgramPlatformVersionLanguageBinary.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionLanguageBinary**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageBinary readProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary)

Fetches a single ProgramPlatformVersionLanguageBinary

Fetches a single ProgramPlatformVersionLanguageBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->readProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesBinariesApi->readProgramPlatformVersionLanguageBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageBinary**](../Model/ProgramPlatformVersionLanguageBinary.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionLanguageBinary**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary)

Entirely replaces a ProgramPlatformVersionLanguageBinary

Entirely replaces a ProgramPlatformVersionLanguageBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->replaceProgramPlatformVersionLanguageBinary($id_program, $id_platform, $id_version, $id_language, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesBinariesApi->replaceProgramPlatformVersionLanguageBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

