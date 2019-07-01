# Softonic\CatalogApiSdk\ProgramsPlatformsVersionsLanguagesReviewtypesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#createprogramplatformversionlanguagereviewtype) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes | Creates a ProgramPlatformVersionLanguageReviewtype
[**deleteProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#deleteprogramplatformversionlanguagereviewtype) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes/{id_reviewtype} | Deletes a ProgramPlatformVersionLanguageReviewtype
[**findProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#findprogramplatformversionlanguagereviewtype) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes | Gets a ProgramPlatformVersionLanguageReviewtype list
[**readProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#readprogramplatformversionlanguagereviewtype) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes/{id_reviewtype} | Fetches a single ProgramPlatformVersionLanguageReviewtype
[**replaceProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#replaceprogramplatformversionlanguagereviewtype) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes/{id_reviewtype} | Entirely replaces a ProgramPlatformVersionLanguageReviewtype
[**updateProgramPlatformVersionLanguageReviewtype**](ProgramsPlatformsVersionsLanguagesReviewtypesApi.md#updateprogramplatformversionlanguagereviewtype) | **PATCH** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/reviewtypes/{id_reviewtype} | Partially updates a ProgramPlatformVersionLanguageReviewtype

# **createProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language)

Creates a ProgramPlatformVersionLanguageReviewtype

Creates a ProgramPlatformVersionLanguageReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformVersionLanguageReviewtype to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->createProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->createProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguageReviewtype to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language, $id_reviewtype)

Deletes a ProgramPlatformVersionLanguageReviewtype

Deletes a ProgramPlatformVersionLanguageReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->deleteProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->deleteProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype[] findProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language)

Gets a ProgramPlatformVersionLanguageReviewtype list

Gets a ProgramPlatformVersionLanguageReviewtype list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->findProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->findProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype[]**](../Model/ProgramPlatformVersionLanguageReviewtype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype readProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language, $id_reviewtype)

Fetches a single ProgramPlatformVersionLanguageReviewtype

Fetches a single ProgramPlatformVersionLanguageReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->readProgramPlatformVersionLanguageReviewtype($id_program, $id_platform, $id_version, $id_language, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->readProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype**](../Model/ProgramPlatformVersionLanguageReviewtype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language, $id_reviewtype)

Entirely replaces a ProgramPlatformVersionLanguageReviewtype

Entirely replaces a ProgramPlatformVersionLanguageReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformVersionLanguageReviewtype to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->replaceProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->replaceProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguageReviewtype to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformVersionLanguageReviewtype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2002 updateProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language, $id_reviewtype)

Partially updates a ProgramPlatformVersionLanguageReviewtype

Partially updates a ProgramPlatformVersionLanguageReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsVersionsLanguagesReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype | ProgramPlatformVersionLanguageReviewtype to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->updateProgramPlatformVersionLanguageReviewtype($body, $id_program, $id_platform, $id_version, $id_language, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesReviewtypesApi->updateProgramPlatformVersionLanguageReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformVersionLanguageReviewtype**](../Model/ProgramPlatformVersionLanguageReviewtype.md)| ProgramPlatformVersionLanguageReviewtype to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

