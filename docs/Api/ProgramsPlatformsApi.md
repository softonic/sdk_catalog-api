# Softonic\CatalogApiSdk\ProgramsPlatformsApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatform**](ProgramsPlatformsApi.md#createprogramplatform) | **POST** /programs/{id_program}/platforms | Creates a ProgramPlatform
[**deleteProgramPlatform**](ProgramsPlatformsApi.md#deleteprogramplatform) | **DELETE** /programs/{id_program}/platforms/{id_platform} | Deletes a ProgramPlatform
[**findProgramPlatform**](ProgramsPlatformsApi.md#findprogramplatform) | **GET** /programs/{id_program}/platforms | Gets a ProgramPlatform list
[**readProgramPlatform**](ProgramsPlatformsApi.md#readprogramplatform) | **GET** /programs/{id_program}/platforms/{id_platform} | Fetches a single ProgramPlatform
[**replaceProgramPlatform**](ProgramsPlatformsApi.md#replaceprogramplatform) | **PUT** /programs/{id_program}/platforms/{id_platform} | Entirely replaces a ProgramPlatform
[**updateProgramPlatform**](ProgramsPlatformsApi.md#updateprogramplatform) | **PATCH** /programs/{id_program}/platforms/{id_platform} | Partially updates a ProgramPlatform

# **createProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatform($body, $id_program)

Creates a ProgramPlatform

Creates a ProgramPlatform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatform to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID

try {
    $result = $apiInstance->createProgramPlatform($body, $id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->createProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatform to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatform($id_program, $id_platform)

Deletes a ProgramPlatform

Deletes a ProgramPlatform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->deleteProgramPlatform($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->deleteProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatform[] findProgramPlatform($id_program)

Gets a ProgramPlatform list

Gets a ProgramPlatform list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID

try {
    $result = $apiInstance->findProgramPlatform($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->findProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatform[]**](../Model/ProgramPlatform.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatform readProgramPlatform($id_program, $id_platform)

Fetches a single ProgramPlatform

Fetches a single ProgramPlatform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->readProgramPlatform($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->readProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatform**](../Model/ProgramPlatform.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatform($body, $id_program, $id_platform)

Entirely replaces a ProgramPlatform

Entirely replaces a ProgramPlatform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatform to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->replaceProgramPlatform($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->replaceProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatform to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatform**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2002 updateProgramPlatform($body, $id_program, $id_platform)

Partially updates a ProgramPlatform

Partially updates a ProgramPlatform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatform(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatform | ProgramPlatform to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->updateProgramPlatform($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsApi->updateProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatform**](../Model/ProgramPlatform.md)| ProgramPlatform to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

