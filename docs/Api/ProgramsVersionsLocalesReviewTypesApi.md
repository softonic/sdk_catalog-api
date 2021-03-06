# Softonic\CatalogApiSdk\ProgramsVersionsLocalesReviewTypesApi

All URIs are relative to *https://catalog-v2.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#createProgramVersionLocaleReviewType) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types | Creates a new ProgramVersionLocaleReviewType
[**deleteProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#deleteProgramVersionLocaleReviewType) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types/{id_review_type} | Deletes a ProgramVersionLocaleReviewType
[**findProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#findProgramVersionLocaleReviewType) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types | List of ProgramVersionLocaleReviewTypes
[**readProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#readProgramVersionLocaleReviewType) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types/{id_review_type} | Fetches a single ProgramVersionLocaleReviewType
[**replaceProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#replaceProgramVersionLocaleReviewType) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types/{id_review_type} | Entirely replaces a ProgramVersionLocaleReviewType
[**updateProgramVersionLocaleReviewType**](ProgramsVersionsLocalesReviewTypesApi.md#updateProgramVersionLocaleReviewType) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/review-types/{id_review_type} | Partially updates a ProgramVersionLocaleReviewType


# **createProgramVersionLocaleReviewType**
> createProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $body)

Creates a new ProgramVersionLocaleReviewType

Creates a new ProgramVersionLocaleReviewType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType | 

try {
    $apiInstance->createProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->createProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType**](../Model/ProgramVersionLocaleReviewType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleReviewType**
> deleteProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type)

Deletes a ProgramVersionLocaleReviewType

Deletes a ProgramVersionLocaleReviewType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_review_type = "id_review_type_example"; // string | Review owner type

try {
    $apiInstance->deleteProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->deleteProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_review_type** | **string**| Review owner type |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleReviewType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType[] findProgramVersionLocaleReviewType($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleReviewTypes

List of ProgramVersionLocaleReviewTypes

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier

try {
    $result = $apiInstance->findProgramVersionLocaleReviewType($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->findProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
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

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType[]**](../Model/ProgramVersionLocaleReviewType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleReviewType**
> \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType readProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type)

Fetches a single ProgramVersionLocaleReviewType

Fetches a single ProgramVersionLocaleReviewType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_review_type = "id_review_type_example"; // string | Review owner type

try {
    $result = $apiInstance->readProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->readProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_review_type** | **string**| Review owner type |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType**](../Model/ProgramVersionLocaleReviewType.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleReviewType**
> replaceProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type, $body)

Entirely replaces a ProgramVersionLocaleReviewType

Entirely replaces a ProgramVersionLocaleReviewType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_review_type = "id_review_type_example"; // string | Review owner type
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType | 

try {
    $apiInstance->replaceProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->replaceProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_review_type** | **string**| Review owner type |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType**](../Model/ProgramVersionLocaleReviewType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleReviewType**
> updateProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type, $body)

Partially updates a ProgramVersionLocaleReviewType

Partially updates a ProgramVersionLocaleReviewType

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_review_type = "id_review_type_example"; // string | Review owner type
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType(); // \Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType | 

try {
    $apiInstance->updateProgramVersionLocaleReviewType($id_program, $id_version, $id_locale, $id_review_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewTypesApi->updateProgramVersionLocaleReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_review_type** | **string**| Review owner type |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramVersionLocaleReviewType**](../Model/ProgramVersionLocaleReviewType.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

