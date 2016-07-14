# Softonic\CatalogApiSdk\ProgramsVersionsLocalesImagesApi

All URIs are relative to *http://v2.catalog.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#createProgramVersionLocaleImage) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images | Creates a new ProgramVersionLocaleImage
[**deleteProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#deleteProgramVersionLocaleImage) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images/{id_image} | Deletes a ProgramVersionLocaleImage
[**findProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#findProgramVersionLocaleImage) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images | List of ProgramVersionLocaleImages
[**readProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#readProgramVersionLocaleImage) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images/{id_image} | Fetches a single ProgramVersionLocaleImage
[**replaceProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#replaceProgramVersionLocaleImage) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images/{id_image} | Entirely replaces a ProgramVersionLocaleImage
[**updateProgramVersionLocaleImage**](ProgramsVersionsLocalesImagesApi.md#updateProgramVersionLocaleImage) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/images/{id_image} | Partially updates a ProgramVersionLocaleImage


# **createProgramVersionLocaleImage**
> createProgramVersionLocaleImage($id_program, $id_version, $id_locale, $body)

Creates a new ProgramVersionLocaleImage

Creates a new ProgramVersionLocaleImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage | 

try {
    $api_instance->createProgramVersionLocaleImage($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->createProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleImage**
> deleteProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image)

Deletes a ProgramVersionLocaleImage

Deletes a ProgramVersionLocaleImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format

try {
    $api_instance->deleteProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->deleteProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_image** | **string**| Image identifier in SHA1-Hash format |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleImage**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage[] findProgramVersionLocaleImage($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleImages

List of ProgramVersionLocaleImages

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier

try {
    $result = $api_instance->findProgramVersionLocaleImage($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->findProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage[]**](../Model/ProgramVersionLocaleImage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleImage**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage readProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image)

Fetches a single ProgramVersionLocaleImage

Fetches a single ProgramVersionLocaleImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format

try {
    $result = $api_instance->readProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->readProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_image** | **string**| Image identifier in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage**](../Model/ProgramVersionLocaleImage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleImage**
> replaceProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image, $body)

Entirely replaces a ProgramVersionLocaleImage

Entirely replaces a ProgramVersionLocaleImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage | 

try {
    $api_instance->replaceProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->replaceProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_image** | **string**| Image identifier in SHA1-Hash format |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleImage**
> updateProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image, $body)

Partially updates a ProgramVersionLocaleImage

Partially updates a ProgramVersionLocaleImage

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesImagesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID
$id_version = "id_version_example"; // string | Program version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_image = "id_image_example"; // string | Image identifier in SHA1-Hash format
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage | 

try {
    $api_instance->updateProgramVersionLocaleImage($id_program, $id_version, $id_locale, $id_image, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesImagesApi->updateProgramVersionLocaleImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |
 **id_version** | **string**| Program version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_image** | **string**| Image identifier in SHA1-Hash format |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleImage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

