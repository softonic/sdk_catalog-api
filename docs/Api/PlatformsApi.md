# Swagger\Client\PlatformsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlatform**](PlatformsApi.md#createPlatform) | **POST** /platforms | Creates a Platform
[**deletePlatform**](PlatformsApi.md#deletePlatform) | **DELETE** /platforms/{id_platform} | Deletes a Platform
[**findPlatform**](PlatformsApi.md#findPlatform) | **GET** /platforms | Gets a Platform list
[**readPlatform**](PlatformsApi.md#readPlatform) | **GET** /platforms/{id_platform} | Fetches a single Platform
[**replacePlatform**](PlatformsApi.md#replacePlatform) | **PUT** /platforms/{id_platform} | Entirely replaces a Platform
[**updatePlatform**](PlatformsApi.md#updatePlatform) | **PATCH** /platforms/{id_platform} | Partially updates a Platform

# **createPlatform**
> \Swagger\Client\Model\InlineResponse201 createPlatform($body)

Creates a Platform

Creates a Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | Platform to be created

try {
    $result = $apiInstance->createPlatform($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->createPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| Platform to be created |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlatform**
> \Swagger\Client\Model\InlineResponse2001 deletePlatform($id_platform)

Deletes a Platform

Deletes a Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->deletePlatform($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->deletePlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPlatform**
> \Swagger\Client\Model\Platform[] findPlatform()

Gets a Platform list

Gets a Platform list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findPlatform();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->findPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Platform[]**](../Model/Platform.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPlatform**
> \Swagger\Client\Model\Platform readPlatform($id_platform)

Fetches a single Platform

Fetches a single Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->readPlatform($id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->readPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\Platform**](../Model/Platform.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePlatform**
> \Swagger\Client\Model\InlineResponse200 replacePlatform($body, $id_platform)

Entirely replaces a Platform

Entirely replaces a Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | Platform to be replaced
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->replacePlatform($body, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->replacePlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| Platform to be replaced |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatform**
> \Swagger\Client\Model\InlineResponse2002 updatePlatform($body, $id_platform)

Partially updates a Platform

Partially updates a Platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlatformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Platform(); // \Swagger\Client\Model\Platform | Platform to be updated
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->updatePlatform($body, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformsApi->updatePlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Platform**](../Model/Platform.md)| Platform to be updated |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

