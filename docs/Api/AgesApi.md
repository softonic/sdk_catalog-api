# Softonic\CatalogApiSdk\AgesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAge**](AgesApi.md#createAge) | **POST** /ages | Creates a new Age
[**deleteAge**](AgesApi.md#deleteAge) | **DELETE** /ages/{id_age} | Deletes a Age
[**findAge**](AgesApi.md#findAge) | **GET** /ages | List of Ages
[**readAge**](AgesApi.md#readAge) | **GET** /ages/{id_age} | Fetches a single Age


# **createAge**
> createAge($body)

Creates a new Age

Creates a new Age

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\AgesApi();
$body = new \Softonic\CatalogApiSdk\Model\Age(); // \Softonic\CatalogApiSdk\Model\Age | 

try {
    $api_instance->createAge($body);
} catch (Exception $e) {
    echo 'Exception when calling AgesApi->createAge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Model\Age**](../Model/\Softonic\CatalogApiSdk\Model\Age.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAge**
> deleteAge($id_age)

Deletes a Age

Deletes a Age

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\AgesApi();
$id_age = 56; // int | Ages identifier.

try {
    $api_instance->deleteAge($id_age);
} catch (Exception $e) {
    echo 'Exception when calling AgesApi->deleteAge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_age** | **int**| Ages identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAge**
> \Softonic\CatalogApiSdk\Model\Age[] findAge()

List of Ages

List of Ages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\AgesApi();

try {
    $result = $api_instance->findAge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgesApi->findAge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\CatalogApiSdk\Model\Age[]**](../Model/Age.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAge**
> \Softonic\CatalogApiSdk\Model\Age readAge($id_age)

Fetches a single Age

Fetches a single Age

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\AgesApi();
$id_age = 56; // int | Ages identifier.

try {
    $result = $api_instance->readAge($id_age);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgesApi->readAge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_age** | **int**| Ages identifier. |

### Return type

[**\Softonic\CatalogApiSdk\Model\Age**](../Model/Age.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

