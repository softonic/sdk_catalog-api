# Softonic\CatalogApiSdk\ProgramsVersionsLocalesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocale**](ProgramsVersionsLocalesApi.md#createProgramVersionLocale) | **POST** /programs/{id_program}/versions/{id_version}/locales | Creates a new ProgramVersionLocale
[**deleteProgramVersionLocale**](ProgramsVersionsLocalesApi.md#deleteProgramVersionLocale) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale} | Deletes a ProgramVersionLocale
[**findProgramVersionLocale**](ProgramsVersionsLocalesApi.md#findProgramVersionLocale) | **GET** /programs/{id_program}/versions/{id_version}/locales | List of ProgramVersionLocales
[**readProgramVersionLocale**](ProgramsVersionsLocalesApi.md#readProgramVersionLocale) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale} | Fetches a single ProgramVersionLocale
[**replaceProgramVersionLocale**](ProgramsVersionsLocalesApi.md#replaceProgramVersionLocale) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale} | Entirely replaces a ProgramVersionLocale
[**updateProgramVersionLocale**](ProgramsVersionsLocalesApi.md#updateProgramVersionLocale) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale} | Partially updates a ProgramVersionLocale


# **createProgramVersionLocale**
> createProgramVersionLocale($id_program, $id_version, $body)

Creates a new ProgramVersionLocale

Creates a new ProgramVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocale(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocale | 

try {
    $api_instance->createProgramVersionLocale($id_program, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->createProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocale**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocale.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocale**
> deleteProgramVersionLocale($id_program, $id_version, $id_locale)

Deletes a ProgramVersionLocale

Deletes a ProgramVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID
$id_locale = "id_locale_example"; // string | locale identifier.

try {
    $api_instance->deleteProgramVersionLocale($id_program, $id_version, $id_locale);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->deleteProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |
 **id_locale** | **string**| locale identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocale**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocale[] findProgramVersionLocale($id_program, $id_version)

List of ProgramVersionLocales

List of ProgramVersionLocales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID

try {
    $result = $api_instance->findProgramVersionLocale($id_program, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->findProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocale[]**](../Model/ProgramVersionLocale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocale**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocale readProgramVersionLocale($id_program, $id_version, $id_locale)

Fetches a single ProgramVersionLocale

Fetches a single ProgramVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID
$id_locale = "id_locale_example"; // string | locale identifier.

try {
    $result = $api_instance->readProgramVersionLocale($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->readProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |
 **id_locale** | **string**| locale identifier. |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocale**](../Model/ProgramVersionLocale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocale**
> replaceProgramVersionLocale($id_program, $id_version, $id_locale, $body)

Entirely replaces a ProgramVersionLocale

Entirely replaces a ProgramVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID
$id_locale = "id_locale_example"; // string | locale identifier.
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocale(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocale | 

try {
    $api_instance->replaceProgramVersionLocale($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->replaceProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |
 **id_locale** | **string**| locale identifier. |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocale**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocale.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocale**
> updateProgramVersionLocale($id_program, $id_version, $id_locale, $body)

Partially updates a ProgramVersionLocale

Partially updates a ProgramVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version UUID
$id_locale = "id_locale_example"; // string | locale identifier.
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocale(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocale | 

try {
    $api_instance->updateProgramVersionLocale($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesApi->updateProgramVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version UUID |
 **id_locale** | **string**| locale identifier. |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocale**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocale.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

