# Swagger\Client\ProgramsPlatformsReviewtypesReviewsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#createProgramPlatformReviewtypeReview) | **POST** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews | Creates a ProgramPlatformReviewtypeReview
[**deleteProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#deleteProgramPlatformReviewtypeReview) | **DELETE** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews/{id_review} | Deletes a ProgramPlatformReviewtypeReview
[**findProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#findProgramPlatformReviewtypeReview) | **GET** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews | Gets a ProgramPlatformReviewtypeReview list
[**readProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#readProgramPlatformReviewtypeReview) | **GET** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews/{id_review} | Fetches a single ProgramPlatformReviewtypeReview
[**replaceProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#replaceProgramPlatformReviewtypeReview) | **PUT** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews/{id_review} | Entirely replaces a ProgramPlatformReviewtypeReview
[**updateProgramPlatformReviewtypeReview**](ProgramsPlatformsReviewtypesReviewsApi.md#updateProgramPlatformReviewtypeReview) | **PATCH** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype}/reviews/{id_review} | Partially updates a ProgramPlatformReviewtypeReview

# **createProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype)

Creates a ProgramPlatformReviewtypeReview

Creates a ProgramPlatformReviewtypeReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformReviewtypeReview to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->createProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->createProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformReviewtypeReview to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype, $id_review)

Deletes a ProgramPlatformReviewtypeReview

Deletes a ProgramPlatformReviewtypeReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID
$id_review = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Review ID

try {
    $result = $apiInstance->deleteProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->deleteProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |
 **id_review** | [**string**](../Model/.md)| Review ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\ProgramPlatformReviewtypeReview[] findProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype)

Gets a ProgramPlatformReviewtypeReview list

Gets a ProgramPlatformReviewtypeReview list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->findProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->findProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformReviewtypeReview[]**](../Model/ProgramPlatformReviewtypeReview.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\ProgramPlatformReviewtypeReview readProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype, $id_review)

Fetches a single ProgramPlatformReviewtypeReview

Fetches a single ProgramPlatformReviewtypeReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID
$id_review = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Review ID

try {
    $result = $apiInstance->readProgramPlatformReviewtypeReview($id_program, $id_platform, $id_reviewtype, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->readProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |
 **id_review** | [**string**](../Model/.md)| Review ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformReviewtypeReview**](../Model/ProgramPlatformReviewtypeReview.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype, $id_review)

Entirely replaces a ProgramPlatformReviewtypeReview

Entirely replaces a ProgramPlatformReviewtypeReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformReviewtypeReview(); // \Swagger\Client\Model\ProgramPlatformReviewtypeReview | ProgramPlatformReviewtypeReview to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID
$id_review = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Review ID

try {
    $result = $apiInstance->replaceProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->replaceProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformReviewtypeReview**](../Model/ProgramPlatformReviewtypeReview.md)| ProgramPlatformReviewtypeReview to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |
 **id_review** | [**string**](../Model/.md)| Review ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformReviewtypeReview**
> \Swagger\Client\Model\InlineResponse2002 updateProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype, $id_review)

Partially updates a ProgramPlatformReviewtypeReview

Partially updates a ProgramPlatformReviewtypeReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformReviewtypeReview(); // \Swagger\Client\Model\ProgramPlatformReviewtypeReview | ProgramPlatformReviewtypeReview to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID
$id_review = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Review ID

try {
    $result = $apiInstance->updateProgramPlatformReviewtypeReview($body, $id_program, $id_platform, $id_reviewtype, $id_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesReviewsApi->updateProgramPlatformReviewtypeReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformReviewtypeReview**](../Model/ProgramPlatformReviewtypeReview.md)| ProgramPlatformReviewtypeReview to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_reviewtype** | **string**| Review type ID |
 **id_review** | [**string**](../Model/.md)| Review ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

