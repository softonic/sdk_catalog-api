# Softonic\CatalogApiSdk\ProgramsVersionsLocalesUrlTypesApi

All URIs are relative to *http://catalog-v2.eu-west.sftapi.com*

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

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType | 

try {
    $apiInstance->createProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->createProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType**](../Model/ProgramVersionLocaleUrlType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

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

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_url_type = "id_url_type_example"; // string | URL types identifier

try {
    $apiInstance->deleteProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->deleteProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_url_type** | **string**| URL types identifier |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleUrlType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType[] findProgramVersionLocaleUrlType($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleUrlTypes

List of ProgramVersionLocaleUrlTypes

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier

try {
    $result = $apiInstance->findProgramVersionLocaleUrlType($id_program, $id_version, $id_locale);
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
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType[]**](../Model/ProgramVersionLocaleUrlType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleUrlType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType readProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type)

Fetches a single ProgramVersionLocaleUrlType

Fetches a single ProgramVersionLocaleUrlType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_url_type = "id_url_type_example"; // string | URL types identifier

try {
    $result = $apiInstance->readProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type);
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
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_url_type** | **string**| URL types identifier |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType**](../Model/ProgramVersionLocaleUrlType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleUrlType**
> replaceProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type, $body)

Entirely replaces a ProgramVersionLocaleUrlType

Entirely replaces a ProgramVersionLocaleUrlType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_url_type = "id_url_type_example"; // string | URL types identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType | 

try {
    $apiInstance->replaceProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->replaceProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_url_type** | **string**| URL types identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType**](../Model/ProgramVersionLocaleUrlType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleUrlType**
> updateProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type, $body)

Partially updates a ProgramVersionLocaleUrlType

Partially updates a ProgramVersionLocaleUrlType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesUrlTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_url_type = "id_url_type_example"; // string | URL types identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType | 

try {
    $apiInstance->updateProgramVersionLocaleUrlType($id_program, $id_version, $id_locale, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesUrlTypesApi->updateProgramVersionLocaleUrlType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_url_type** | **string**| URL types identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleUrlType**](../Model/ProgramVersionLocaleUrlType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

