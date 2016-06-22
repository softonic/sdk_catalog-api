# Softonic\CatalogApiSdk\ProgramsVersionsLocalesReviewsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#createProgramVersionLocaleReview) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews | Creates a new ProgramVersionLocaleReview
[**deleteProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#deleteProgramVersionLocaleReview) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews/{id_review} | Deletes a ProgramVersionLocaleReview
[**findProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#findProgramVersionLocaleReview) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews | List of ProgramVersionLocaleReviews
[**readProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#readProgramVersionLocaleReview) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews/{id_review} | Fetches a single ProgramVersionLocaleReview
[**replaceProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#replaceProgramVersionLocaleReview) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews/{id_review} | Entirely replaces a ProgramVersionLocaleReview
[**updateProgramVersionLocaleReview**](ProgramsVersionsLocalesReviewsApi.md#updateProgramVersionLocaleReview) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/reviews/{id_review} | Partially updates a ProgramVersionLocaleReview


# **createProgramVersionLocaleReview**
> createProgramVersionLocaleReview($id_program, $id_version, $id_locale, $body)

Creates a new ProgramVersionLocaleReview

Creates a new ProgramVersionLocaleReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview | 

try {
    $api_instance->createProgramVersionLocaleReview($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->createProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleReview**
> deleteProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review)

Deletes a ProgramVersionLocaleReview

Deletes a ProgramVersionLocaleReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id
$id_review = "id_review_example"; // string | Review identifier

try {
    $api_instance->deleteProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->deleteProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |
 **id_review** | **string**| Review identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleReview**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview[] findProgramVersionLocaleReview($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleReviews

List of ProgramVersionLocaleReviews

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id

try {
    $result = $api_instance->findProgramVersionLocaleReview($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->findProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview[]**](../Model/ProgramVersionLocaleReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleReview**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview readProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review)

Fetches a single ProgramVersionLocaleReview

Fetches a single ProgramVersionLocaleReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id
$id_review = "id_review_example"; // string | Review identifier

try {
    $result = $api_instance->readProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->readProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |
 **id_review** | **string**| Review identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleReview**](../Model/ProgramVersionLocaleReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleReview**
> replaceProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review)

Entirely replaces a ProgramVersionLocaleReview

Entirely replaces a ProgramVersionLocaleReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id
$id_review = "id_review_example"; // string | Review identifier

try {
    $api_instance->replaceProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->replaceProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |
 **id_review** | **string**| Review identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleReview**
> updateProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review)

Partially updates a ProgramVersionLocaleReview

Partially updates a ProgramVersionLocaleReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesReviewsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version id
$id_locale = "id_locale_example"; // string | Locales id
$id_review = "id_review_example"; // string | Review identifier

try {
    $api_instance->updateProgramVersionLocaleReview($id_program, $id_version, $id_locale, $id_review);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesReviewsApi->updateProgramVersionLocaleReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version id |
 **id_locale** | **string**| Locales id |
 **id_review** | **string**| Review identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

