# Softonic\CatalogApiSdk\ProgramsPlatformsLanguagesAliasesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformLanguageAlias**](ProgramsPlatformsLanguagesAliasesApi.md#createprogramplatformlanguagealias) | **POST** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/aliases | Creates a ProgramPlatformLanguageAlias
[**deleteProgramPlatformLanguageAlias**](ProgramsPlatformsLanguagesAliasesApi.md#deleteprogramplatformlanguagealias) | **DELETE** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/aliases/{id_alias} | Deletes a ProgramPlatformLanguageAlias
[**findProgramPlatformLanguageAlias**](ProgramsPlatformsLanguagesAliasesApi.md#findprogramplatformlanguagealias) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/aliases | Gets a ProgramPlatformLanguageAlias list
[**readProgramPlatformLanguageAlias**](ProgramsPlatformsLanguagesAliasesApi.md#readprogramplatformlanguagealias) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/aliases/{id_alias} | Fetches a single ProgramPlatformLanguageAlias
[**replaceProgramPlatformLanguageAlias**](ProgramsPlatformsLanguagesAliasesApi.md#replaceprogramplatformlanguagealias) | **PUT** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/aliases/{id_alias} | Entirely replaces a ProgramPlatformLanguageAlias

# **createProgramPlatformLanguageAlias**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformLanguageAlias($body, $id_program, $id_platform, $id_language)

Creates a ProgramPlatformLanguageAlias

Creates a ProgramPlatformLanguageAlias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformLanguageAlias to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->createProgramPlatformLanguageAlias($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesAliasesApi->createProgramPlatformLanguageAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguageAlias to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformLanguageAlias**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias)

Deletes a ProgramPlatformLanguageAlias

Deletes a ProgramPlatformLanguageAlias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_alias = "id_alias_example"; // string | Program alias

try {
    $result = $apiInstance->deleteProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesAliasesApi->deleteProgramPlatformLanguageAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_alias** | **string**| Program alias |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLanguageAlias**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguageAlias[] findProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $active)

Gets a ProgramPlatformLanguageAlias list

Gets a ProgramPlatformLanguageAlias list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$active = 56; // int | Use it to return just the active program alias

try {
    $result = $apiInstance->findProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesAliasesApi->findProgramPlatformLanguageAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **active** | **int**| Use it to return just the active program alias | [optional]

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguageAlias[]**](../Model/ProgramPlatformLanguageAlias.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformLanguageAlias**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguageAlias readProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias)

Fetches a single ProgramPlatformLanguageAlias

Fetches a single ProgramPlatformLanguageAlias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_alias = "id_alias_example"; // string | Program alias

try {
    $result = $apiInstance->readProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesAliasesApi->readProgramPlatformLanguageAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_alias** | **string**| Program alias |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguageAlias**](../Model/ProgramPlatformLanguageAlias.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformLanguageAlias**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias)

Entirely replaces a ProgramPlatformLanguageAlias

Entirely replaces a ProgramPlatformLanguageAlias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_alias = "id_alias_example"; // string | Program alias

try {
    $result = $apiInstance->replaceProgramPlatformLanguageAlias($id_program, $id_platform, $id_language, $id_alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesAliasesApi->replaceProgramPlatformLanguageAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_alias** | **string**| Program alias |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

