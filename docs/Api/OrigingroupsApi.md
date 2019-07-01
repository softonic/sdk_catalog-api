# Softonic\CatalogApiSdk\OrigingroupsApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrigingroup**](OrigingroupsApi.md#createorigingroup) | **POST** /origingroups | Creates an Origingroup
[**deleteOrigingroup**](OrigingroupsApi.md#deleteorigingroup) | **DELETE** /origingroups/{id_origingroup} | Deletes an Origingroup
[**findOrigingroups**](OrigingroupsApi.md#findorigingroups) | **GET** /origingroups | Gets an Origingroup list
[**readOrigingroup**](OrigingroupsApi.md#readorigingroup) | **GET** /origingroups/{id_origingroup} | Fetches a single Origingroup
[**replaceOrigingroup**](OrigingroupsApi.md#replaceorigingroup) | **PUT** /origingroups/{id_origingroup} | Entirely replaces an Origingroup
[**updateOrigingroup**](OrigingroupsApi.md#updateorigingroup) | **PATCH** /origingroups/{id_origingroup} | Partially updates an Origingroup

# **createOrigingroup**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createOrigingroup($body)

Creates an Origingroup

Creates an Origingroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | Origingroup to be created

try {
    $result = $apiInstance->createOrigingroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->createOrigingroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| Origingroup to be created |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrigingroup**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteOrigingroup($id_origingroup)

Deletes an Origingroup

Deletes an Origingroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->deleteOrigingroup($id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->deleteOrigingroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrigingroups**
> \Softonic\CatalogApiSdk\Client\Model\Origingroup[] findOrigingroups()

Gets an Origingroup list

Gets an Origingroup list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findOrigingroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->findOrigingroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\Origingroup[]**](../Model/Origingroup.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOrigingroup**
> \Softonic\CatalogApiSdk\Client\Model\Origingroup readOrigingroup($id_origingroup)

Fetches a single Origingroup

Fetches a single Origingroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->readOrigingroup($id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->readOrigingroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\Origingroup**](../Model/Origingroup.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOrigingroup**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceOrigingroup($body, $id_origingroup)

Entirely replaces an Origingroup

Entirely replaces an Origingroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | Origingroup to be replaced
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->replaceOrigingroup($body, $id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->replaceOrigingroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| Origingroup to be replaced |
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrigingroup**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2002 updateOrigingroup($body, $id_origingroup)

Partially updates an Origingroup

Partially updates an Origingroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\OrigingroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\Origingroup(); // \Softonic\CatalogApiSdk\Client\Model\Origingroup | Origingroup to be updated
$id_origingroup = "id_origingroup_example"; // string | Origin group ID

try {
    $result = $apiInstance->updateOrigingroup($body, $id_origingroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigingroupsApi->updateOrigingroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\Origingroup**](../Model/Origingroup.md)| Origingroup to be updated |
 **id_origingroup** | **string**| Origin group ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

