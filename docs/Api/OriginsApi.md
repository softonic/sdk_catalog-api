# Softonic\CatalogApiSdk\OriginsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrigin**](OriginsApi.md#findOrigin) | **GET** /origins | List of Origins
[**readOrigin**](OriginsApi.md#readOrigin) | **GET** /origins/{id_origin} | Fetches a single Origin
[**replaceOrigin**](OriginsApi.md#replaceOrigin) | **PUT** /origins/{id_origin} | Entirely replaces a Origin
[**updateOrigin**](OriginsApi.md#updateOrigin) | **PATCH** /origins/{id_origin} | Partially updates a Origin


# **findOrigin**
> \Softonic\CatalogApiSdk\Client\Model\Origin[] findOrigin()

List of Origins

List of Origins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\OriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findOrigin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->findOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\Origin[]**](../Model/Origin.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOrigin**
> \Softonic\CatalogApiSdk\Client\Model\Origin readOrigin($id_origin)

Fetches a single Origin

Fetches a single Origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\OriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origin = "id_origin_example"; // string | Origin ID

try {
    $result = $apiInstance->readOrigin($id_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->readOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origin** | **string**| Origin ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\Origin**](../Model/Origin.md)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOrigin**
> replaceOrigin($id_origin, $body)

Entirely replaces a Origin

Entirely replaces a Origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\OriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origin = "id_origin_example"; // string | Origin ID
$body = new \Softonic\CatalogApiSdk\Client\Model\Origin(); // \Softonic\CatalogApiSdk\Client\Model\Origin | 

try {
    $apiInstance->replaceOrigin($id_origin, $body);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->replaceOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origin** | **string**| Origin ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\Origin**](../Model/Origin.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrigin**
> updateOrigin($id_origin, $body)

Partially updates a Origin

Partially updates a Origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_access_code
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_implicit
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Api\OriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_origin = "id_origin_example"; // string | Origin ID
$body = new \Softonic\CatalogApiSdk\Client\Model\Origin(); // \Softonic\CatalogApiSdk\Client\Model\Origin | 

try {
    $apiInstance->updateOrigin($id_origin, $body);
} catch (Exception $e) {
    echo 'Exception when calling OriginsApi->updateOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origin** | **string**| Origin ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\Origin**](../Model/Origin.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_application](../../README.md#catalog_api_application), [catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_password](../../README.md#catalog_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

