# Softonic\CatalogApiSdk\RequirementsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRequirement**](RequirementsApi.md#createRequirement) | **POST** /requirements | Creates a new Requirement
[**deleteRequirement**](RequirementsApi.md#deleteRequirement) | **DELETE** /requirements/{id_requirement} | Deletes a Requirement
[**findRequirement**](RequirementsApi.md#findRequirement) | **GET** /requirements | List of Requirements
[**readRequirement**](RequirementsApi.md#readRequirement) | **GET** /requirements/{id_requirement} | Fetches a single Requirement
[**replaceRequirement**](RequirementsApi.md#replaceRequirement) | **PUT** /requirements/{id_requirement} | Entirely replaces a Requirement
[**updateRequirement**](RequirementsApi.md#updateRequirement) | **PATCH** /requirements/{id_requirement} | Partially updates a Requirement


# **createRequirement**
> createRequirement($body)

Creates a new Requirement

Creates a new Requirement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();
$body = new \Softonic\CatalogApiSdk\Model\Requirement(); // \Softonic\CatalogApiSdk\Model\Requirement | 

try {
    $api_instance->createRequirement($body);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->createRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Model\Requirement**](../Model/\Softonic\CatalogApiSdk\Model\Requirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRequirement**
> deleteRequirement($id_requirement)

Deletes a Requirement

Deletes a Requirement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();
$id_requirement = "id_requirement_example"; // string | Requirement ID as slug

try {
    $api_instance->deleteRequirement($id_requirement);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->deleteRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_requirement** | **string**| Requirement ID as slug |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findRequirement**
> \Softonic\CatalogApiSdk\Model\Requirement[] findRequirement()

List of Requirements

List of Requirements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();

try {
    $result = $api_instance->findRequirement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->findRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\CatalogApiSdk\Model\Requirement[]**](../Model/Requirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRequirement**
> \Softonic\CatalogApiSdk\Model\Requirement readRequirement($id_requirement)

Fetches a single Requirement

Fetches a single Requirement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();
$id_requirement = "id_requirement_example"; // string | Requirement ID as slug

try {
    $result = $api_instance->readRequirement($id_requirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->readRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_requirement** | **string**| Requirement ID as slug |

### Return type

[**\Softonic\CatalogApiSdk\Model\Requirement**](../Model/Requirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRequirement**
> replaceRequirement($id_requirement, $body)

Entirely replaces a Requirement

Entirely replaces a Requirement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();
$id_requirement = "id_requirement_example"; // string | Requirement ID as slug
$body = new \Softonic\CatalogApiSdk\Model\Requirement(); // \Softonic\CatalogApiSdk\Model\Requirement | 

try {
    $api_instance->replaceRequirement($id_requirement, $body);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->replaceRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_requirement** | **string**| Requirement ID as slug |
 **body** | [**\Softonic\CatalogApiSdk\Model\Requirement**](../Model/\Softonic\CatalogApiSdk\Model\Requirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRequirement**
> updateRequirement($id_requirement, $body)

Partially updates a Requirement

Partially updates a Requirement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\RequirementsApi();
$id_requirement = "id_requirement_example"; // string | Requirement ID as slug
$body = new \Softonic\CatalogApiSdk\Model\Requirement(); // \Softonic\CatalogApiSdk\Model\Requirement | 

try {
    $api_instance->updateRequirement($id_requirement, $body);
} catch (Exception $e) {
    echo 'Exception when calling RequirementsApi->updateRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_requirement** | **string**| Requirement ID as slug |
 **body** | [**\Softonic\CatalogApiSdk\Model\Requirement**](../Model/\Softonic\CatalogApiSdk\Model\Requirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

