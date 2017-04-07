# Softonic\CatalogApiSdk\ProgramsReviewTypesReviewsImagesApi

All URIs are relative to *http://v2.catalog.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#createProgramReviewTypeReviewImage) | **POST** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images | Creates a new ProgramReviewTypeReviewImage
[**deleteProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#deleteProgramReviewTypeReviewImage) | **DELETE** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images/{id_image} | Deletes a ProgramReviewTypeReviewImage
[**findProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#findProgramReviewTypeReviewImage) | **GET** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images | List of ProgramReviewTypeReviewImages
[**readProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#readProgramReviewTypeReviewImage) | **GET** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images/{id_image} | Fetches a single ProgramReviewTypeReviewImage
[**replaceProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#replaceProgramReviewTypeReviewImage) | **PUT** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images/{id_image} | Entirely replaces a ProgramReviewTypeReviewImage
[**updateProgramReviewTypeReviewImage**](ProgramsReviewTypesReviewsImagesApi.md#updateProgramReviewTypeReviewImage) | **PATCH** /programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}/images/{id_image} | Partially updates a ProgramReviewTypeReviewImage


# **createProgramReviewTypeReviewImage**
> createProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $body)

Creates a new ProgramReviewTypeReviewImage

Creates a new ProgramReviewTypeReviewImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage | 

try {
    $api_instance->createProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->createProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramReviewTypeReviewImage**
> deleteProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image)

Deletes a ProgramReviewTypeReviewImage

Deletes a ProgramReviewTypeReviewImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format derived from path

try {
    $api_instance->deleteProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->deleteProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **id_image** | **string**| Image identifier in SHA1-Hash format derived from path |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramReviewTypeReviewImage**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage[] findProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review)

List of ProgramReviewTypeReviewImages

List of ProgramReviewTypeReviewImages

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID

try {
    $result = $api_instance->findProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->findProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
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

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage[]**](../Model/ProgramReviewTypeReviewImage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramReviewTypeReviewImage**
> \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage readProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image)

Fetches a single ProgramReviewTypeReviewImage

Fetches a single ProgramReviewTypeReviewImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format derived from path

try {
    $result = $api_instance->readProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->readProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **id_image** | **string**| Image identifier in SHA1-Hash format derived from path |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage**](../Model/ProgramReviewTypeReviewImage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramReviewTypeReviewImage**
> replaceProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image, $body)

Entirely replaces a ProgramReviewTypeReviewImage

Entirely replaces a ProgramReviewTypeReviewImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format derived from path
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage | 

try {
    $api_instance->replaceProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->replaceProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **id_image** | **string**| Image identifier in SHA1-Hash format derived from path |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramReviewTypeReviewImage**
> updateProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image, $body)

Partially updates a ProgramReviewTypeReviewImage

Partially updates a ProgramReviewTypeReviewImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesReviewsImagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_review_type = "id_review_type_example"; // string | Review owner type
$id_review = "id_review_example"; // string | Review identifier as UUID
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format derived from path
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage(); // \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage | 

try {
    $api_instance->updateProgramReviewTypeReviewImage($id_program, $id_review_type, $id_review, $id_image, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesReviewsImagesApi->updateProgramReviewTypeReviewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_review_type** | **string**| Review owner type |
 **id_review** | **string**| Review identifier as UUID |
 **id_image** | **string**| Image identifier in SHA1-Hash format derived from path |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReviewImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

