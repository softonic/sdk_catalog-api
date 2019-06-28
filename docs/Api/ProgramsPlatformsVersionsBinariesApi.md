# Swagger\Client\ProgramsPlatformsVersionsBinariesApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#createProgramPlatformVersionBinary) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries | Creates a ProgramPlatformVersionBinary
[**deleteProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#deleteProgramPlatformVersionBinary) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries/{id_binary} | Deletes a ProgramPlatformVersionBinary
[**findProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#findProgramPlatformVersionBinary) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries | Gets a ProgramPlatformVersionBinary list
[**readProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#readProgramPlatformVersionBinary) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries/{id_binary} | Fetches a single ProgramPlatformVersionBinary
[**replaceProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#replaceProgramPlatformVersionBinary) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries/{id_binary} | Entirely replaces a ProgramPlatformVersionBinary
[**updateProgramPlatformVersionBinary**](ProgramsPlatformsVersionsBinariesApi.md#updateProgramPlatformVersionBinary) | **PATCH** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/binaries/{id_binary} | Partially updates a ProgramPlatformVersionBinary

# **createProgramPlatformVersionBinary**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version)

Creates a ProgramPlatformVersionBinary

Creates a ProgramPlatformVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionBinary to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->createProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->createProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionBinary to be created |
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

# **deleteProgramPlatformVersionBinary**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformVersionBinary($id_program, $id_platform, $id_version, $id_binary)

Deletes a ProgramPlatformVersionBinary

Deletes a ProgramPlatformVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->deleteProgramPlatformVersionBinary($id_program, $id_platform, $id_version, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->deleteProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionBinary**
> \Swagger\Client\Model\ProgramPlatformVersionBinary[] findProgramPlatformVersionBinary($id_program, $id_platform, $id_version)

Gets a ProgramPlatformVersionBinary list

Gets a ProgramPlatformVersionBinary list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->findProgramPlatformVersionBinary($id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->findProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformVersionBinary[]**](../Model/ProgramPlatformVersionBinary.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionBinary**
> \Swagger\Client\Model\ProgramPlatformVersionBinary readProgramPlatformVersionBinary($id_program, $id_platform, $id_version, $id_binary)

Fetches a single ProgramPlatformVersionBinary

Fetches a single ProgramPlatformVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->readProgramPlatformVersionBinary($id_program, $id_platform, $id_version, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->readProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Swagger\Client\Model\ProgramPlatformVersionBinary**](../Model/ProgramPlatformVersionBinary.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionBinary**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version, $id_binary)

Entirely replaces a ProgramPlatformVersionBinary

Entirely replaces a ProgramPlatformVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformVersionBinary(); // \Swagger\Client\Model\ProgramPlatformVersionBinary | ProgramPlatformVersionBinary to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->replaceProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->replaceProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformVersionBinary**](../Model/ProgramPlatformVersionBinary.md)| ProgramPlatformVersionBinary to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformVersionBinary**
> \Swagger\Client\Model\InlineResponse2002 updateProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version, $id_binary)

Partially updates a ProgramPlatformVersionBinary

Partially updates a ProgramPlatformVersionBinary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsBinariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformVersionBinary(); // \Swagger\Client\Model\ProgramPlatformVersionBinary | ProgramPlatformVersionBinary to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_binary = "id_binary_example"; // string | Binary ID in SHA1-Hash format

try {
    $result = $apiInstance->updateProgramPlatformVersionBinary($body, $id_program, $id_platform, $id_version, $id_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsBinariesApi->updateProgramPlatformVersionBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformVersionBinary**](../Model/ProgramPlatformVersionBinary.md)| ProgramPlatformVersionBinary to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_binary** | **string**| Binary ID in SHA1-Hash format |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

