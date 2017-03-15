# Softonic\CatalogApiSdk\LicensesApi

All URIs are relative to *https://catalog.sftapi.com*

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$body = new \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License(); // \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License | 

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
 **body** | [**\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License**](../Model/\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLicense**
> \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License[] findLicense()

List of Licenses

List of Licenses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

[**\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License[]**](../Model/License.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readLicense**
> \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License readLicense($id_license)

Fetches a single License

Fetches a single License

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

[**\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License**](../Model/License.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.
$body = new \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License(); // \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License | 

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
 **body** | [**\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License**](../Model/\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

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

// Configure OAuth2 access token for authorization: catalog_api_implicit
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\CatalogApiSdk\Api\LicensesApi();
$id_license = "id_license_example"; // string | License acronym.
$body = new \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License(); // \Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License | 

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
 **body** | [**\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License**](../Model/\Softonic\CatalogApiSdk\Softonic\CatalogApiSdk\Client\Model\License.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

