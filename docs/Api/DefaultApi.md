# Softonic\CatalogApiSdk\DefaultApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**schemaGet**](DefaultApi.md#schemaget) | **GET** /schema | 

# **schemaGet**
> schemaGet()



OpenaAPI Schema

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->schemaGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->schemaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

