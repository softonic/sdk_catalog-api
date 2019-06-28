# Swagger\Client\ProgramsPlatformsReviewtypesApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformReviewtype**](ProgramsPlatformsReviewtypesApi.md#createProgramPlatformReviewtype) | **POST** /programs/{id_program}/platforms/{id_platform}/reviewtypes | Creates a ProgramPlatformReviewtype
[**deleteProgramPlatformReviewtype**](ProgramsPlatformsReviewtypesApi.md#deleteProgramPlatformReviewtype) | **DELETE** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype} | Deletes a ProgramPlatformReviewtype
[**findProgramPlatformReviewtype**](ProgramsPlatformsReviewtypesApi.md#findProgramPlatformReviewtype) | **GET** /programs/{id_program}/platforms/{id_platform}/reviewtypes | Gets a ProgramPlatformReviewtype list
[**readProgramPlatformReviewtype**](ProgramsPlatformsReviewtypesApi.md#readProgramPlatformReviewtype) | **GET** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype} | Fetches a single ProgramPlatformReviewtype
[**replaceProgramPlatformReviewtype**](ProgramsPlatformsReviewtypesApi.md#replaceProgramPlatformReviewtype) | **PUT** /programs/{id_program}/platforms/{id_platform}/reviewtypes/{id_reviewtype} | Entirely replaces a ProgramPlatformReviewtype

# **createProgramPlatformReviewtype**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformReviewtype($body, $id_program, $id_platform)

Creates a ProgramPlatformReviewtype

Creates a ProgramPlatformReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformReviewtype to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->createProgramPlatformReviewtype($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesApi->createProgramPlatformReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformReviewtype to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformReviewtype**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype)

Deletes a ProgramPlatformReviewtype

Deletes a ProgramPlatformReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->deleteProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesApi->deleteProgramPlatformReviewtype: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformReviewtype**
> \Swagger\Client\Model\ProgramPlatformReviewtype[] findProgramPlatformReviewtype($id_program, $id_platform)

Gets a ProgramPlatformReviewtype list

Gets a ProgramPlatformReviewtype list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->findProgramPlatformReviewtype($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesApi->findProgramPlatformReviewtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformReviewtype[]**](../Model/ProgramPlatformReviewtype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformReviewtype**
> \Swagger\Client\Model\ProgramPlatformReviewtype readProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype)

Fetches a single ProgramPlatformReviewtype

Fetches a single ProgramPlatformReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->readProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesApi->readProgramPlatformReviewtype: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformReviewtype**](../Model/ProgramPlatformReviewtype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformReviewtype**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype)

Entirely replaces a ProgramPlatformReviewtype

Entirely replaces a ProgramPlatformReviewtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsReviewtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_reviewtype = "id_reviewtype_example"; // string | Review type ID

try {
    $result = $apiInstance->replaceProgramPlatformReviewtype($id_program, $id_platform, $id_reviewtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsReviewtypesApi->replaceProgramPlatformReviewtype: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

