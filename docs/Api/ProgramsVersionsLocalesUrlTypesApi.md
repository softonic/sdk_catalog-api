# Softonic\CatalogApiSdk\ProgramsVersionsLocalesUrlTypesApi

All URIs are relative to *https://v2.catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#createProgramVersionLocaleUrlType) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types | Creates a new ProgramVersionLocaleUrlType
[**deleteProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#deleteProgramVersionLocaleUrlType) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type} | Deletes a ProgramVersionLocaleUrlType
[**findProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#findProgramVersionLocaleUrlType) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types | List of ProgramVersionLocaleUrlTypes
[**readProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#readProgramVersionLocaleUrlType) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type} | Fetches a single ProgramVersionLocaleUrlType
[**replaceProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#replaceProgramVersionLocaleUrlType) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type} | Entirely replaces a ProgramVersionLocaleUrlType
[**updateProgramVersionLocaleUrlType**](ProgramsVersionsLocalesUrlTypesApi.md#updateProgramVersionLocaleUrlType) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type} | Partially updates a ProgramVersionLocaleUrlType


# **createProgramVersionLocaleUrlType**
> createProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $body)

Creates a new ProgramVersionLocaleUrlType

Creates a new ProgramVersionLocaleUrlType

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType | 

try {
    $api_instance->createProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->createProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleUrlType**
> deleteProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type)

Deletes a ProgramVersionLocaleUrlType

Deletes a ProgramVersionLocaleUrlType

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->deleteProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->deleteProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleUrlType**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType[] findProgramVersionLocaleUrlType($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleUrlTypes

List of ProgramVersionLocaleUrlTypes

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID

try {
    $result = $api_instance->findProgramVersionLocaleUrlType($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->findProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType[]**](../Model/ProgramVersionLocaleUrlType.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleUrlType**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType readProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type)

Fetches a single ProgramVersionLocaleUrlType

Fetches a single ProgramVersionLocaleUrlType

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $result = $api_instance->readProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->readProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlType**](../Model/ProgramVersionLocaleUrlType.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleUrlType**
> replaceProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type)

Entirely replaces a ProgramVersionLocaleUrlType

Entirely replaces a ProgramVersionLocaleUrlType

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->replaceProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->replaceProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleUrlType**
> updateProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type)

Partially updates a ProgramVersionLocaleUrlType

Partially updates a ProgramVersionLocaleUrlType

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->updateProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->updateProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

