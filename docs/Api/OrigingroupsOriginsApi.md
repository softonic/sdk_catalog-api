# Swagger\Client\OrigingroupsOriginsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrigingroupOrigin**](OrigingroupsOriginsApi.md#createOrigingroupOrigin) | **POST** /origingroups/{id_origingroup}/origins | Creates an OrigingroupOrigin
[**deleteOrigingroupOrigin**](OrigingroupsOriginsApi.md#deleteOrigingroupOrigin) | **DELETE** /origingroups/{id_origingroup}/origins/{id_origin} | Deletes an OrigingroupOrigin
[**findOrigingroupOrigin**](OrigingroupsOriginsApi.md#findOrigingroupOrigin) | **GET** /origingroups/{id_origingroup}/origins | Gets an OrigingroupOrigin list
[**readOrigingroupOrigin**](OrigingroupsOriginsApi.md#readOrigingroupOrigin) | **GET** /origingroups/{id_origingroup}/origins/{id_origin} | Fetches a single OrigingroupOrigin
[**replaceOrigingroupOrigin**](OrigingroupsOriginsApi.md#replaceOrigingroupOrigin) | **PUT** /origingroups/{id_origingroup}/origins/{id_origin} | Entirely replaces an OrigingroupOrigin
[**updateOrigingroupOrigin**](OrigingroupsOriginsApi.md#updateOrigingroupOrigin) | **PATCH** /origingroups/{id_origingroup}/origins/{id_origin} | Partially updates an OrigingroupOrigin

# **createOrigingroupOrigin**
> \Swagger\Client\Model\InlineResponse201 createOrigingroupOrigin($body, $id_origingroup)

Creates an OrigingroupOrigin

Creates an OrigingroupOrigin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | OrigingroupOrigin to be created
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->createOrigingroupOrigin($body, $id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->createOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| OrigingroupOrigin to be created |
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrigingroupOrigin**
> \Swagger\Client\Model\InlineResponse2001 deleteOrigingroupOrigin($id_origingroup, $id_origin)

Deletes an OrigingroupOrigin

Deletes an OrigingroupOrigin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origingroup = "id_origingroup_example"; // string | Origin group ID
$id_origin = "id_origin_example"; // string | OrigingroupOrigin ID

try {
    $result = $apiInstance->deleteOrigingroupOrigin($id_origingroup, $id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->deleteOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origingroup** | **string**| Origin group ID |
 **id_origin** | **string**| OrigingroupOrigin ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrigingroupOrigin**
> \Swagger\Client\Model\OrigingroupOrigin[] findOrigingroupOrigin($id_origingroup)

Gets an OrigingroupOrigin list

Gets an OrigingroupOrigin list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->findOrigingroupOrigin($id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->findOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Swagger\Client\Model\OrigingroupOrigin[]**](../Model/OrigingroupOrigin.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOrigingroupOrigin**
> \Swagger\Client\Model\OrigingroupOrigin readOrigingroupOrigin($id_origingroup, $id_origin)

Fetches a single OrigingroupOrigin

Fetches a single OrigingroupOrigin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origingroup = "id_origingroup_example"; // string | Origin group ID
$id_origin = "id_origin_example"; // string | OrigingroupOrigin ID

try {
    $result = $apiInstance->readOrigingroupOrigin($id_origingroup, $id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->readOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origingroup** | **string**| Origin group ID |
 **id_origin** | **string**| OrigingroupOrigin ID |

### Return type

[**\Swagger\Client\Model\OrigingroupOrigin**](../Model/OrigingroupOrigin.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOrigingroupOrigin**
> \Swagger\Client\Model\InlineResponse200 replaceOrigingroupOrigin($body, $id_origingroup, $id_origin)

Entirely replaces an OrigingroupOrigin

Entirely replaces an OrigingroupOrigin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | OrigingroupOrigin to be replaced
$id_origingroup = "id_origingroup_example"; // string | Origin group ID
$id_origin = "id_origin_example"; // string | OrigingroupOrigin ID

try {
    $result = $apiInstance->replaceOrigingroupOrigin($body, $id_origingroup, $id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->replaceOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| OrigingroupOrigin to be replaced |
 **id_origingroup** | **string**| Origin group ID |
 **id_origin** | **string**| OrigingroupOrigin ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrigingroupOrigin**
> \Swagger\Client\Model\InlineResponse2002 updateOrigingroupOrigin($body, $id_origingroup, $id_origin)

Partially updates an OrigingroupOrigin

Partially updates an OrigingroupOrigin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrigingroupsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrigingroupOrigin(); // \Swagger\Client\Model\OrigingroupOrigin | OrigingroupOrigin to be updated
$id_origingroup = "id_origingroup_example"; // string | Origin group ID
$id_origin = "id_origin_example"; // string | OrigingroupOrigin ID

try {
    $result = $apiInstance->updateOrigingroupOrigin($body, $id_origingroup, $id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsOriginsApi->updateOrigingroupOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrigingroupOrigin**](../Model/OrigingroupOrigin.md)| OrigingroupOrigin to be updated |
 **id_origingroup** | **string**| Origin group ID |
 **id_origin** | **string**| OrigingroupOrigin ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

