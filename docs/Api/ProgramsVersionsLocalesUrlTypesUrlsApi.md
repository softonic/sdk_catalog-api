# Softonic\CatalogApiSdk\ProgramsVersionsLocalesUrlTypesUrlsApi

All URIs are relative to *https://v2.catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#createProgramVersionLocaleUrlTypeUrl) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls | Creates a new ProgramVersionLocaleUrlTypeUrl
[**deleteProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#deleteProgramVersionLocaleUrlTypeUrl) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls/{id_url} | Deletes a ProgramVersionLocaleUrlTypeUrl
[**findProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#findProgramVersionLocaleUrlTypeUrl) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls | List of ProgramVersionLocaleUrlTypeUrls
[**readProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#readProgramVersionLocaleUrlTypeUrl) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls/{id_url} | Fetches a single ProgramVersionLocaleUrlTypeUrl
[**replaceProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#replaceProgramVersionLocaleUrlTypeUrl) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls/{id_url} | Entirely replaces a ProgramVersionLocaleUrlTypeUrl
[**updateProgramVersionLocaleUrlTypeUrl**](ProgramsVersionsLocalesUrlTypesUrlsApi.md#updateProgramVersionLocaleUrlTypeUrl) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/url-types/{id_url_type}/urls/{id_url} | Partially updates a ProgramVersionLocaleUrlTypeUrl


# **createProgramVersionLocaleUrlTypeUrl**
> createProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url_type, $body)

Creates a new ProgramVersionLocaleUrlTypeUrl

Creates a new ProgramVersionLocaleUrlTypeUrl

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl | 

try {
    $api_instance->createProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->createProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleUrlTypeUrl**
> deleteProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type)

Deletes a ProgramVersionLocaleUrlTypeUrl

Deletes a ProgramVersionLocaleUrlTypeUrl

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->deleteProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->deleteProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleUrlTypeUrl**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl[] findProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url_type)

List of ProgramVersionLocaleUrlTypeUrls

List of ProgramVersionLocaleUrlTypeUrls

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $result = $api_instance->findProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->findProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
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

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl[]**](../Model/ProgramVersionLocaleUrlTypeUrl.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleUrlTypeUrl**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl readProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type)

Fetches a single ProgramVersionLocaleUrlTypeUrl

Fetches a single ProgramVersionLocaleUrlTypeUrl

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $result = $api_instance->readProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->readProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier. |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleUrlTypeUrl**](../Model/ProgramVersionLocaleUrlTypeUrl.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleUrlTypeUrl**
> replaceProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type)

Entirely replaces a ProgramVersionLocaleUrlTypeUrl

Entirely replaces a ProgramVersionLocaleUrlTypeUrl

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->replaceProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->replaceProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleUrlTypeUrl**
> updateProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type)

Partially updates a ProgramVersionLocaleUrlTypeUrl

Partially updates a ProgramVersionLocaleUrlTypeUrl

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier.

try {
    $api_instance->updateProgramVersionLocaleUrlTypeUrl($id_program, $id_version, $id_locale, $id_url, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesUrlsApi->updateProgramVersionLocaleUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier. |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

