# Swagger\Client\ProgramsPlatformsVersionsPlatformversionsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionPlatformversion**](ProgramsPlatformsVersionsPlatformversionsApi.md#createProgramPlatformVersionPlatformversion) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/platformversions | Creates a ProgramPlatformVersionPlatformversion
[**deleteProgramPlatformVersionPlatformversion**](ProgramsPlatformsVersionsPlatformversionsApi.md#deleteProgramPlatformVersionPlatformversion) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/platformversions/{id_platformversion} | Deletes a ProgramPlatformVersionPlatformversion
[**findProgramPlatformVersionPlatformversion**](ProgramsPlatformsVersionsPlatformversionsApi.md#findProgramPlatformVersionPlatformversion) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/platformversions | Gets a ProgramPlatformVersionPlatformversion list
[**readProgramPlatformVersionPlatformversion**](ProgramsPlatformsVersionsPlatformversionsApi.md#readProgramPlatformVersionPlatformversion) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/platformversions/{id_platformversion} | Fetches a single ProgramPlatformVersionPlatformversion
[**replaceProgramPlatformVersionPlatformversion**](ProgramsPlatformsVersionsPlatformversionsApi.md#replaceProgramPlatformVersionPlatformversion) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/platformversions/{id_platformversion} | Entirely replaces a ProgramPlatformVersionPlatformversion

# **createProgramPlatformVersionPlatformversion**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformVersionPlatformversion($body, $id_program, $id_platform, $id_version)

Creates a ProgramPlatformVersionPlatformversion

Creates a ProgramPlatformVersionPlatformversion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsPlatformversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionPlatformversion to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->createProgramPlatformVersionPlatformversion($body, $id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsPlatformversionsApi->createProgramPlatformVersionPlatformversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionPlatformversion to be created |
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

# **deleteProgramPlatformVersionPlatformversion**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion)

Deletes a ProgramPlatformVersionPlatformversion

Deletes a ProgramPlatformVersionPlatformversion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsPlatformversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_platformversion = "id_platformversion_example"; // string | Platform version ID

try {
    $result = $apiInstance->deleteProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsPlatformversionsApi->deleteProgramPlatformVersionPlatformversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_platformversion** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionPlatformversion**
> \Swagger\Client\Model\ProgramPlatformVersionPlatformversion[] findProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version)

Gets a ProgramPlatformVersionPlatformversion list

Gets a ProgramPlatformVersionPlatformversion list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsPlatformversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->findProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsPlatformversionsApi->findProgramPlatformVersionPlatformversion: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformVersionPlatformversion[]**](../Model/ProgramPlatformVersionPlatformversion.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionPlatformversion**
> \Swagger\Client\Model\ProgramPlatformVersionPlatformversion readProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion)

Fetches a single ProgramPlatformVersionPlatformversion

Fetches a single ProgramPlatformVersionPlatformversion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsPlatformversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_platformversion = "id_platformversion_example"; // string | Platform version ID

try {
    $result = $apiInstance->readProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsPlatformversionsApi->readProgramPlatformVersionPlatformversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_platformversion** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformVersionPlatformversion**](../Model/ProgramPlatformVersionPlatformversion.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionPlatformversion**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion)

Entirely replaces a ProgramPlatformVersionPlatformversion

Entirely replaces a ProgramPlatformVersionPlatformversion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsPlatformversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_platformversion = "id_platformversion_example"; // string | Platform version ID

try {
    $result = $apiInstance->replaceProgramPlatformVersionPlatformversion($id_program, $id_platform, $id_version, $id_platformversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsPlatformversionsApi->replaceProgramPlatformVersionPlatformversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_platformversion** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

