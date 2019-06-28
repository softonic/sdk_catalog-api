# Swagger\Client\ProgramsPlatformsVersionsLanguagesUrltypesApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#createProgramPlatformVersionLanguageUrltype) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes | Creates a ProgramPlatformVersionLanguageUrltype
[**deleteProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#deleteProgramPlatformVersionLanguageUrltype) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes/{id_urltype} | Deletes a ProgramPlatformVersionLanguageUrltype
[**findProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#findProgramPlatformVersionLanguageUrltype) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes | Gets a ProgramPlatformVersionLanguageUrltype list
[**readProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#readProgramPlatformVersionLanguageUrltype) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes/{id_urltype} | Fetches a single ProgramPlatformVersionLanguageUrltype
[**replaceProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#replaceProgramPlatformVersionLanguageUrltype) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes/{id_urltype} | Entirely replaces a ProgramPlatformVersionLanguageUrltype
[**updateProgramPlatformVersionLanguageUrltype**](ProgramsPlatformsVersionsLanguagesUrltypesApi.md#updateProgramPlatformVersionLanguageUrltype) | **PATCH** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language}/urltypes/{id_urltype} | Partially updates a ProgramPlatformVersionLanguageUrltype

# **createProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language)

Creates a ProgramPlatformVersionLanguageUrltype

Creates a ProgramPlatformVersionLanguageUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionLanguageUrltype to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->createProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->createProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguageUrltype to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language, $id_urltype)

Deletes a ProgramPlatformVersionLanguageUrltype

Deletes a ProgramPlatformVersionLanguageUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->deleteProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->deleteProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
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
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype[] findProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language)

Gets a ProgramPlatformVersionLanguageUrltype list

Gets a ProgramPlatformVersionLanguageUrltype list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
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
    $result = $apiInstance->findProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->findProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype[]**](../Model/ProgramPlatformVersionLanguageUrltype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype readProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language, $id_urltype)

Fetches a single ProgramPlatformVersionLanguageUrltype

Fetches a single ProgramPlatformVersionLanguageUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->readProgramPlatformVersionLanguageUrltype($id_program, $id_platform, $id_version, $id_language, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->readProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
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
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype**](../Model/ProgramPlatformVersionLanguageUrltype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language, $id_urltype)

Entirely replaces a ProgramPlatformVersionLanguageUrltype

Entirely replaces a ProgramPlatformVersionLanguageUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionLanguageUrltype to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->replaceProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->replaceProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguageUrltype to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformVersionLanguageUrltype**
> \Swagger\Client\Model\InlineResponse2002 updateProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language, $id_urltype)

Partially updates a ProgramPlatformVersionLanguageUrltype

Partially updates a ProgramPlatformVersionLanguageUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype(); // \Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype | ProgramPlatformVersionLanguageUrltype to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->updateProgramPlatformVersionLanguageUrltype($body, $id_program, $id_platform, $id_version, $id_language, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesUrltypesApi->updateProgramPlatformVersionLanguageUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformVersionLanguageUrltype**](../Model/ProgramPlatformVersionLanguageUrltype.md)| ProgramPlatformVersionLanguageUrltype to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

