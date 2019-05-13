# Softonic\CatalogApiSdk\ProgramsPlatformsLocalesAliasesApi

All URIs are relative to *https://catalog-v2.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProgramPlatformLocaleAlias**](ProgramsPlatformsLocalesAliasesApi.md#deleteProgramPlatformLocaleAlias) | **DELETE** /programs/{id_program}/platforms/{id_platform}/locales/{id_locale}/aliases/{id_alias} | Deletes a ProgramPlatformLocaleAlias
[**findProgramPlatformLocaleAlias**](ProgramsPlatformsLocalesAliasesApi.md#findProgramPlatformLocaleAlias) | **GET** /programs/{id_program}/platforms/{id_platform}/locales/{id_locale}/aliases | List of ProgramPlatformLocaleAliass
[**replaceProgramPlatformLocaleAlias**](ProgramsPlatformsLocalesAliasesApi.md#replaceProgramPlatformLocaleAlias) | **PUT** /programs/{id_program}/platforms/{id_platform}/locales/{id_locale}/aliases/{id_alias} | Entirely replaces a ProgramPlatformLocaleAlias


# **deleteProgramPlatformLocaleAlias**
> deleteProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias)

Deletes a ProgramPlatformLocaleAlias

Deletes a ProgramPlatformLocaleAlias

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_alias = "id_alias_example"; // string | Program alias

try {
    $apiInstance->deleteProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLocalesAliasesApi->deleteProgramPlatformLocaleAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_locale** | **string**| Locale identifier |
 **id_alias** | **string**| Program alias |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLocaleAlias**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLocaleAlias[] findProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $active, $last_updated)

List of ProgramPlatformLocaleAliass

List of ProgramPlatformLocaleAliass

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$active = 56; // int | Use it to return just the active program alias
$last_updated = 56; // int | Use it to return just the active program alias

try {
    $result = $apiInstance->findProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $active, $last_updated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLocalesAliasesApi->findProgramPlatformLocaleAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_locale** | **string**| Locale identifier |
 **active** | **int**| Use it to return just the active program alias | [optional]
 **last_updated** | **int**| Use it to return just the active program alias | [optional]

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLocaleAlias[]**](../Model/ProgramPlatformLocaleAlias.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformLocaleAlias**
> replaceProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias)

Entirely replaces a ProgramPlatformLocaleAlias

Entirely replaces a ProgramPlatformLocaleAlias

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_alias = "id_alias_example"; // string | Program alias

try {
    $apiInstance->replaceProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLocalesAliasesApi->replaceProgramPlatformLocaleAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_platform** | **string**| Platform identifier |
 **id_locale** | **string**| Locale identifier |
 **id_alias** | **string**| Program alias |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

