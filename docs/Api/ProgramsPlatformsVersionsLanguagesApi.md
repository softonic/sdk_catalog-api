# Swagger\Client\ProgramsPlatformsVersionsLanguagesApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#createProgramPlatformVersionLanguage) | **POST** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages | Creates a ProgramPlatformVersionLanguage
[**deleteProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#deleteProgramPlatformVersionLanguage) | **DELETE** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language} | Deletes a ProgramPlatformVersionLanguage
[**findProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#findProgramPlatformVersionLanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages | Gets a ProgramPlatformVersionLanguage list
[**readProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#readProgramPlatformVersionLanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language} | Fetches a single ProgramPlatformVersionLanguage
[**replaceProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#replaceProgramPlatformVersionLanguage) | **PUT** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language} | Entirely replaces a ProgramPlatformVersionLanguage
[**updateProgramPlatformVersionLanguage**](ProgramsPlatformsVersionsLanguagesApi.md#updateProgramPlatformVersionLanguage) | **PATCH** /programs/{id_program}/platforms/{id_platform}/versions/{id_version}/languages/{id_language} | Partially updates a ProgramPlatformVersionLanguage

# **createProgramPlatformVersionLanguage**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version)

Creates a ProgramPlatformVersionLanguage

Creates a ProgramPlatformVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionLanguage to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->createProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->createProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguage to be created |
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

# **deleteProgramPlatformVersionLanguage**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformVersionLanguage($id_program, $id_platform, $id_version, $id_language)

Deletes a ProgramPlatformVersionLanguage

Deletes a ProgramPlatformVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
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
    $result = $apiInstance->deleteProgramPlatformVersionLanguage($id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->deleteProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformVersionLanguage**
> \Swagger\Client\Model\ProgramPlatformVersionLanguage[] findProgramPlatformVersionLanguage($id_program, $id_platform, $id_version)

Gets a ProgramPlatformVersionLanguage list

Gets a ProgramPlatformVersionLanguage list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID

try {
    $result = $apiInstance->findProgramPlatformVersionLanguage($id_program, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->findProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformVersionLanguage[]**](../Model/ProgramPlatformVersionLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformVersionLanguage**
> \Swagger\Client\Model\ProgramPlatformVersionLanguage readProgramPlatformVersionLanguage($id_program, $id_platform, $id_version, $id_language)

Fetches a single ProgramPlatformVersionLanguage

Fetches a single ProgramPlatformVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
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
    $result = $apiInstance->readProgramPlatformVersionLanguage($id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->readProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformVersionLanguage**](../Model/ProgramPlatformVersionLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformVersionLanguage**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version, $id_language)

Entirely replaces a ProgramPlatformVersionLanguage

Entirely replaces a ProgramPlatformVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformVersionLanguage to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->replaceProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->replaceProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformVersionLanguage to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformVersionLanguage**
> \Swagger\Client\Model\InlineResponse2002 updateProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version, $id_language)

Partially updates a ProgramPlatformVersionLanguage

Partially updates a ProgramPlatformVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsVersionsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformVersionLanguage(); // \Swagger\Client\Model\ProgramPlatformVersionLanguage | ProgramPlatformVersionLanguage to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Version ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->updateProgramPlatformVersionLanguage($body, $id_program, $id_platform, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsVersionsLanguagesApi->updateProgramPlatformVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformVersionLanguage**](../Model/ProgramPlatformVersionLanguage.md)| ProgramPlatformVersionLanguage to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Version ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

