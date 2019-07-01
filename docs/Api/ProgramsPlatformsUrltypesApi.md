# Softonic\CatalogApiSdk\ProgramsPlatformsUrltypesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformUrltype**](ProgramsPlatformsUrltypesApi.md#createprogramplatformurltype) | **POST** /programs/{id_program}/platforms/{id_platform}/urltypes | Creates a ProgramPlatformUrltype
[**deleteProgramPlatformUrltype**](ProgramsPlatformsUrltypesApi.md#deleteprogramplatformurltype) | **DELETE** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype} | Deletes a ProgramPlatformUrltype
[**findProgramPlatformUrltype**](ProgramsPlatformsUrltypesApi.md#findprogramplatformurltype) | **GET** /programs/{id_program}/platforms/{id_platform}/urltypes | Gets a ProgramPlatformUrltype list
[**readProgramPlatformUrltype**](ProgramsPlatformsUrltypesApi.md#readprogramplatformurltype) | **GET** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype} | Fetches a single ProgramPlatformUrltype
[**replaceProgramPlatformUrltype**](ProgramsPlatformsUrltypesApi.md#replaceprogramplatformurltype) | **PUT** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype} | Entirely replaces a ProgramPlatformUrltype

# **createProgramPlatformUrltype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformUrltype($body, $id_program, $id_platform)

Creates a ProgramPlatformUrltype

Creates a ProgramPlatformUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformUrltype to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->createProgramPlatformUrltype($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesApi->createProgramPlatformUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformUrltype to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformUrltype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformUrltype($id_program, $id_platform, $id_urltype)

Deletes a ProgramPlatformUrltype

Deletes a ProgramPlatformUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->deleteProgramPlatformUrltype($id_program, $id_platform, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesApi->deleteProgramPlatformUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformUrltype**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltype[] findProgramPlatformUrltype($id_program, $id_platform)

Gets a ProgramPlatformUrltype list

Gets a ProgramPlatformUrltype list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->findProgramPlatformUrltype($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesApi->findProgramPlatformUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltype[]**](../Model/ProgramPlatformUrltype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformUrltype**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltype readProgramPlatformUrltype($id_program, $id_platform, $id_urltype)

Fetches a single ProgramPlatformUrltype

Fetches a single ProgramPlatformUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->readProgramPlatformUrltype($id_program, $id_platform, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesApi->readProgramPlatformUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltype**](../Model/ProgramPlatformUrltype.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformUrltype**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformUrltype($id_program, $id_platform, $id_urltype)

Entirely replaces a ProgramPlatformUrltype

Entirely replaces a ProgramPlatformUrltype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->replaceProgramPlatformUrltype($id_program, $id_platform, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesApi->replaceProgramPlatformUrltype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

