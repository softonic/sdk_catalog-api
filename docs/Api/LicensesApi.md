# Softonic\CatalogApiSdk\LicensesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLicense**](LicensesApi.md#createLicense) | **POST** /licenses | Creates a new License
[**deleteLicense**](LicensesApi.md#deleteLicense) | **DELETE** /licenses/{id_license} | Deletes a License
[**findLicense**](LicensesApi.md#findLicense) | **GET** /licenses | List of Licenses
[**readLicense**](LicensesApi.md#readLicense) | **GET** /licenses/{id_license} | Fetches a single License
[**replaceLicense**](LicensesApi.md#replaceLicense) | **PUT** /licenses/{id_license} | Entirely replaces a License
[**updateLicense**](LicensesApi.md#updateLicense) | **PATCH** /licenses/{id_license} | Partially updates a License


# **createLicense**
> createLicense($body)

Creates a new License

Creates a new License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$body = new \Softonic\CatalogApiSdk\Model\License(); // \Softonic\CatalogApiSdk\Model\License | 

try {
    $api_instance->createLicense($body);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->createLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Model\License**](../Model/\Softonic\CatalogApiSdk\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLicense**
> deleteLicense($id_license)

Deletes a License

Deletes a License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.

try {
    $api_instance->deleteLicense($id_license);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->deleteLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_license** | **string**| License acronym. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLicense**
> \Softonic\CatalogApiSdk\Model\License[] findLicense()

List of Licenses

List of Licenses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();

try {
    $result = $api_instance->findLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->findLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\CatalogApiSdk\Model\License[]**](../Model/License.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readLicense**
> \Softonic\CatalogApiSdk\Model\License readLicense($id_license)

Fetches a single License

Fetches a single License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.

try {
    $result = $api_instance->readLicense($id_license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->readLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_license** | **string**| License acronym. |

### Return type

[**\Softonic\CatalogApiSdk\Model\License**](../Model/License.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLicense**
> replaceLicense($id_license, $body)

Entirely replaces a License

Entirely replaces a License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.
$body = new \Softonic\CatalogApiSdk\Model\License(); // \Softonic\CatalogApiSdk\Model\License | 

try {
    $api_instance->replaceLicense($id_license, $body);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->replaceLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_license** | **string**| License acronym. |
 **body** | [**\Softonic\CatalogApiSdk\Model\License**](../Model/\Softonic\CatalogApiSdk\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLicense**
> updateLicense($id_license, $body)

Partially updates a License

Partially updates a License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.
$body = new \Softonic\CatalogApiSdk\Model\License(); // \Softonic\CatalogApiSdk\Model\License | 

try {
    $api_instance->updateLicense($id_license, $body);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->updateLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_license** | **string**| License acronym. |
 **body** | [**\Softonic\CatalogApiSdk\Model\License**](../Model/\Softonic\CatalogApiSdk\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

