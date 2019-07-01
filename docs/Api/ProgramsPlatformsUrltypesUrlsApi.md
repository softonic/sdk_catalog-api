# Softonic\CatalogApiSdk\ProgramsPlatformsUrltypesUrlsApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformUrltypeUrl**](ProgramsPlatformsUrltypesUrlsApi.md#createprogramplatformurltypeurl) | **POST** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype}/urls | Creates a ProgramPlatformUrltypeUrl
[**deleteProgramPlatformUrltypeUrl**](ProgramsPlatformsUrltypesUrlsApi.md#deleteprogramplatformurltypeurl) | **DELETE** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype}/urls/{id_url} | Deletes a ProgramPlatformUrltypeUrl
[**findProgramPlatformUrltypeUrl**](ProgramsPlatformsUrltypesUrlsApi.md#findprogramplatformurltypeurl) | **GET** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype}/urls | Gets a ProgramPlatformUrltypeUrl list
[**readProgramPlatformUrltypeUrl**](ProgramsPlatformsUrltypesUrlsApi.md#readprogramplatformurltypeurl) | **GET** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype}/urls/{id_url} | Fetches a single ProgramPlatformUrltypeUrl
[**replaceProgramPlatformUrltypeUrl**](ProgramsPlatformsUrltypesUrlsApi.md#replaceprogramplatformurltypeurl) | **PUT** /programs/{id_program}/platforms/{id_platform}/urltypes/{id_urltype}/urls/{id_url} | Entirely replaces a ProgramPlatformUrltypeUrl

# **createProgramPlatformUrltypeUrl**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformUrltypeUrl($body, $id_program, $id_platform, $id_urltype)

Creates a ProgramPlatformUrltypeUrl

Creates a ProgramPlatformUrltypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformUrltypeUrl to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->createProgramPlatformUrltypeUrl($body, $id_program, $id_platform, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesUrlsApi->createProgramPlatformUrltypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformUrltypeUrl to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformUrltypeUrl**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype, $id_url)

Deletes a ProgramPlatformUrltypeUrl

Deletes a ProgramPlatformUrltypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID
$id_url = "id_url_example"; // string | Url ID in SHA1-Hash format

try {
    $result = $apiInstance->deleteProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype, $id_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesUrlsApi->deleteProgramPlatformUrltypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |
 **id_url** | **string**| Url ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformUrltypeUrl**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltypeUrl[] findProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype)

Gets a ProgramPlatformUrltypeUrl list

Gets a ProgramPlatformUrltypeUrl list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID

try {
    $result = $apiInstance->findProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesUrlsApi->findProgramPlatformUrltypeUrl: ', $e->getMessage(), PHP_EOL;
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

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltypeUrl[]**](../Model/ProgramPlatformUrltypeUrl.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformUrltypeUrl**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltypeUrl readProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype, $id_url)

Fetches a single ProgramPlatformUrltypeUrl

Fetches a single ProgramPlatformUrltypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID
$id_url = "id_url_example"; // string | Url ID in SHA1-Hash format

try {
    $result = $apiInstance->readProgramPlatformUrltypeUrl($id_program, $id_platform, $id_urltype, $id_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesUrlsApi->readProgramPlatformUrltypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |
 **id_url** | **string**| Url ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformUrltypeUrl**](../Model/ProgramPlatformUrltypeUrl.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformUrltypeUrl**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformUrltypeUrl($body, $id_program, $id_platform, $id_urltype, $id_url)

Entirely replaces a ProgramPlatformUrltypeUrl

Entirely replaces a ProgramPlatformUrltypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsUrltypesUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformUrltypeUrl to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_urltype = "id_urltype_example"; // string | Url type ID
$id_url = "id_url_example"; // string | Url ID in SHA1-Hash format

try {
    $result = $apiInstance->replaceProgramPlatformUrltypeUrl($body, $id_program, $id_platform, $id_urltype, $id_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsUrltypesUrlsApi->replaceProgramPlatformUrltypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformUrltypeUrl to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_urltype** | **string**| Url type ID |
 **id_url** | **string**| Url ID in SHA1-Hash format |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

