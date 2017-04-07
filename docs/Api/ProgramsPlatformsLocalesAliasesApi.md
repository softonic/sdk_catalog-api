# Softonic\CatalogApiSdk\ProgramsPlatformsLocalesAliasesApi

All URIs are relative to *http://v2.catalog.sftapi.com.sft-staging.com*

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_alias = "id_alias_example"; // string | Program alias

try {
    $api_instance->deleteProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias);
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

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLocaleAlias**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLocaleAlias[] findProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $last_updated)

List of ProgramPlatformLocaleAliass

List of ProgramPlatformLocaleAliass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$last_updated = 56; // int | Use it to return just the active program alias

try {
    $result = $api_instance->findProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $last_updated);
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
 **last_updated** | **int**| Use it to return just the active program alias | [optional]

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLocaleAlias[]**](../Model/ProgramPlatformLocaleAlias.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsPlatformsLocalesAliasesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_alias = "id_alias_example"; // string | Program alias

try {
    $api_instance->replaceProgramPlatformLocaleAlias($id_program, $id_platform, $id_locale, $id_alias);
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

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

