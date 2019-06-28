# Swagger\Client\PlatformsVersionsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatformVersion**](PlatformsVersionsApi.md#createPlatformVersion) | **POST** /platforms/{id_platform}/versions | Creates a PlatformVersion
[**deletePlatformVersion**](PlatformsVersionsApi.md#deletePlatformVersion) | **DELETE** /platforms/{id_platform}/versions/{id_version} | Deletes a PlatformVersion
[**findPlatformVersion**](PlatformsVersionsApi.md#findPlatformVersion) | **GET** /platforms/{id_platform}/versions | Gets a PlatformVersion list
[**readPlatformVersion**](PlatformsVersionsApi.md#readPlatformVersion) | **GET** /platforms/{id_platform}/versions/{id_version} | Fetches a single PlatformVersion
[**replacePlatformVersion**](PlatformsVersionsApi.md#replacePlatformVersion) | **PUT** /platforms/{id_platform}/versions/{id_version} | Entirely replaces a PlatformVersion
[**updatePlatformVersion**](PlatformsVersionsApi.md#updatePlatformVersion) | **PATCH** /platforms/{id_platform}/versions/{id_version} | Partially updates a PlatformVersion

# **createPlatformVersion**
> \Swagger\Client\Model\InlineResponse201 createPlatformVersion($body, $id_platform)

Creates a PlatformVersion

Creates a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | PlatformVersion to be created
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->createPlatformVersion($body, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->createPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| PlatformVersion to be created |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatformVersion**
> \Swagger\Client\Model\InlineResponse2001 deletePlatformVersion($id_platform, $id_version)

Deletes a PlatformVersion

Deletes a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $apiInstance->deletePlatformVersion($id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->deletePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatformVersion**
> \Swagger\Client\Model\PlatformVersion[] findPlatformVersion($id_platform)

Gets a PlatformVersion list

Gets a PlatformVersion list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->findPlatformVersion($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->findPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\PlatformVersion[]**](../Model/PlatformVersion.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatformVersion**
> \Swagger\Client\Model\PlatformVersion readPlatformVersion($id_platform, $id_version)

Fetches a single PlatformVersion

Fetches a single PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $apiInstance->readPlatformVersion($id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->readPlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\PlatformVersion**](../Model/PlatformVersion.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatformVersion**
> \Swagger\Client\Model\InlineResponse200 replacePlatformVersion($body, $id_platform, $id_version)

Entirely replaces a PlatformVersion

Entirely replaces a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | PlatformVersion to be replaced
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $apiInstance->replacePlatformVersion($body, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->replacePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| PlatformVersion to be replaced |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformVersion**
> \Swagger\Client\Model\InlineResponse2002 updatePlatformVersion($body, $id_platform, $id_version)

Partially updates a PlatformVersion

Partially updates a PlatformVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PlatformVersion(); // \Swagger\Client\Model\PlatformVersion | PlatformVersion to be updated
$id_platform = "id_platform_example"; // string | Platform ID
$id_version = "id_version_example"; // string | Platform version ID

try {
    $result = $apiInstance->updatePlatformVersion($body, $id_platform, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsVersionsApi->updatePlatformVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PlatformVersion**](../Model/PlatformVersion.md)| PlatformVersion to be updated |
 **id_platform** | **string**| Platform ID |
 **id_version** | **string**| Platform version ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

