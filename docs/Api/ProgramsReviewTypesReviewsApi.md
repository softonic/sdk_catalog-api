# Softonic\CatalogApiSdk\ProgramsReviewTypesReviewsApi

All URIs are relative to *https://catalog-v2.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#createProgramReviewTypeReview) | **POST** /programs/{id_program}/review-types/{id_review_type}/reviews | Creates a new ProgramReviewTypeReview
[**deleteProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#deleteProgramReviewTypeReview) | **DELETE** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review} | Deletes a ProgramReviewTypeReview
[**findProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#findProgramReviewTypeReview) | **GET** /programs/{id_program}/review-types/{id_review_type}/reviews | List of ProgramReviewTypeReviews
[**readProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#readProgramReviewTypeReview) | **GET** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review} | Fetches a single ProgramReviewTypeReview
[**replaceProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#replaceProgramReviewTypeReview) | **PUT** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review} | Entirely replaces a ProgramReviewTypeReview
[**updateProgramReviewTypeReview**](ProgramsReviewTypesReviewsApi.md#updateProgramReviewTypeReview) | **PATCH** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review} | Partially updates a ProgramReviewTypeReview


# **createProgramReviewTypeReview**
> createProgramReviewTypeReview($id_program, $id_review_type, $body)

Creates a new ProgramReviewTypeReview

Creates a new ProgramReviewTypeReview

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview | 

try {
    $apiInstance->createProgramReviewTypeReview($id_program, $id_review_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->createProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview**](../Model/ProgramReviewTypeReview.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramReviewTypeReview**
> deleteProgramReviewTypeReview($id_program, $id_review_type, $id_review)

Deletes a ProgramReviewTypeReview

Deletes a ProgramReviewTypeReview

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID

try {
    $apiInstance->deleteProgramReviewTypeReview($id_program, $id_review_type, $id_review);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->deleteProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramReviewTypeReview**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[] findProgramReviewTypeReview($id_program, $id_review_type)

List of ProgramReviewTypeReviews

List of ProgramReviewTypeReviews

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type

try {
    $result = $apiInstance->findProgramReviewTypeReview($id_program, $id_review_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->findProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[]**](../Model/ProgramReviewTypeReview.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramReviewTypeReview**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview readProgramReviewTypeReview($id_program, $id_review_type, $id_review)

Fetches a single ProgramReviewTypeReview

Fetches a single ProgramReviewTypeReview

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID

try {
    $result = $apiInstance->readProgramReviewTypeReview($id_program, $id_review_type, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->readProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview**](../Model/ProgramReviewTypeReview.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramReviewTypeReview**
> replaceProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body)

Entirely replaces a ProgramReviewTypeReview

Entirely replaces a ProgramReviewTypeReview

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview | 

try {
    $apiInstance->replaceProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->replaceProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview**](../Model/ProgramReviewTypeReview.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramReviewTypeReview**
> updateProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body)

Partially updates a ProgramReviewTypeReview

Partially updates a ProgramReviewTypeReview

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

$apiInstance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview | 

try {
    $apiInstance->updateProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsApi->updateProgramReviewTypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview**](../Model/ProgramReviewTypeReview.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

