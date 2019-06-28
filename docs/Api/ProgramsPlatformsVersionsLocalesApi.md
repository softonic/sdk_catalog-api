# Swagger\Client\ProgramsPlatformsVersionsLocalesApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionLocale**](ProgramsPlatformsVersionsLocalesApi.md#createProgramPlatformVersionLocale) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/locales | Creates a ProgramPlatformVersionLocale
[**deleteProgramPlatformVersionLocale**](ProgramsPlatformsVersionsLocalesApi.md#deleteProgramPlatformVersionLocale) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/locales/{id_locale} | Deletes a ProgramPlatformVersionLocale
[**findProgramPlatformVersionLocale**](ProgramsPlatformsVersionsLocalesApi.md#findProgramPlatformVersionLocale) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/locales | Gets a ProgramPlatformVersionLocale list
[**readProgramPlatformVersionLocale**](ProgramsPlatformsVersionsLocalesApi.md#readProgramPlatformVersionLocale) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/locales/{id_locale} | Fetches a single ProgramPlatformVersionLocale
[**replaceProgramPlatformVersionLocale**](ProgramsPlatformsVersionsLocalesApi.md#replaceProgramPlatformVersionLocale) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/locales/{id_locale} | Entirely replaces a ProgramPlatformVersionLocale

# **createProgramPlatformVersionLocale**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformVersionLocale($body, $id_program, $id_platform, $id_version)

Creates a ProgramPlatformVersionLocale

Creates a ProgramPlatformVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionLocale to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->createProgramPlatformVersionLocale($body, $id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLocalesApi->createProgramPlatformVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLocale to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformVersionLocale**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale)

Deletes a ProgramPlatformVersionLocale

Deletes a ProgramPlatformVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID

try {
    $result = $apiInstance->deleteProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLocalesApi->deleteProgramPlatformVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionLocale**
> \Swagger\Client\Model\ProgramPlatformVersionLocale[] findProgramPlatformVersionLocale($id_program, $id_platform, $id_version)

Gets a ProgramPlatformVersionLocale list

Gets a ProgramPlatformVersionLocale list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->findProgramPlatformVersionLocale($id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLocalesApi->findProgramPlatformVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformVersionLocale[]**](../Model/ProgramPlatformVersionLocale.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionLocale**
> \Swagger\Client\Model\ProgramPlatformVersionLocale readProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale)

Fetches a single ProgramPlatformVersionLocale

Fetches a single ProgramPlatformVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID

try {
    $result = $apiInstance->readProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLocalesApi->readProgramPlatformVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformVersionLocale**](../Model/ProgramPlatformVersionLocale.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionLocale**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale)

Entirely replaces a ProgramPlatformVersionLocale

Entirely replaces a ProgramPlatformVersionLocale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_locale = "id_locale_example"; // string | Locale ID

try {
    $result = $apiInstance->replaceProgramPlatformVersionLocale($id_program, $id_platform, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLocalesApi->replaceProgramPlatformVersionLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_locale** | **string**| Locale ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

