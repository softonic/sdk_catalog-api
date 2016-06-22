# Softonic\CatalogApiSdk\ProgramsUrlTypesUrlsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#createProgramUrlTypeUrl) | **POST** /programs/{id_program}/url-types/{id_url_type}/urls | Creates a new ProgramUrlTypeUrl
[**deleteProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#deleteProgramUrlTypeUrl) | **DELETE** /programs/{id_program}/url-types/{id_url_type}/urls/{id_url} | Deletes a ProgramUrlTypeUrl
[**findProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#findProgramUrlTypeUrl) | **GET** /programs/{id_program}/url-types/{id_url_type}/urls | List of ProgramUrlTypeUrls
[**readProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#readProgramUrlTypeUrl) | **GET** /programs/{id_program}/url-types/{id_url_type}/urls/{id_url} | Fetches a single ProgramUrlTypeUrl
[**replaceProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#replaceProgramUrlTypeUrl) | **PUT** /programs/{id_program}/url-types/{id_url_type}/urls/{id_url} | Entirely replaces a ProgramUrlTypeUrl
[**updateProgramUrlTypeUrl**](ProgramsUrlTypesUrlsApi.md#updateProgramUrlTypeUrl) | **PATCH** /programs/{id_program}/url-types/{id_url_type}/urls/{id_url} | Partially updates a ProgramUrlTypeUrl


# **createProgramUrlTypeUrl**
> createProgramUrlTypeUrl($id_program, $id_url_type, $body)

Creates a new ProgramUrlTypeUrl

Creates a new ProgramUrlTypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier
$body = new \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl(); // \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl | 

try {
    $api_instance->createProgramUrlTypeUrl($id_program, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->createProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl**](../Model/\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramUrlTypeUrl**
> deleteProgramUrlTypeUrl($id_program, $id_url, $id_url_type)

Deletes a ProgramUrlTypeUrl

Deletes a ProgramUrlTypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier

try {
    $api_instance->deleteProgramUrlTypeUrl($id_program, $id_url, $id_url_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->deleteProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramUrlTypeUrl**
> \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl[] findProgramUrlTypeUrl($id_program, $id_url_type)

List of ProgramUrlTypeUrls

List of ProgramUrlTypeUrls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url_type = "id_url_type_example"; // string | URL types identifier

try {
    $result = $api_instance->findProgramUrlTypeUrl($id_program, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->findProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url_type** | **string**| URL types identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl[]**](../Model/ProgramUrlTypeUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramUrlTypeUrl**
> \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl readProgramUrlTypeUrl($id_program, $id_url, $id_url_type)

Fetches a single ProgramUrlTypeUrl

Fetches a single ProgramUrlTypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier

try {
    $result = $api_instance->readProgramUrlTypeUrl($id_program, $id_url, $id_url_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->readProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl**](../Model/ProgramUrlTypeUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramUrlTypeUrl**
> replaceProgramUrlTypeUrl($id_program, $id_url, $id_url_type, $body)

Entirely replaces a ProgramUrlTypeUrl

Entirely replaces a ProgramUrlTypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier
$body = new \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl(); // \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl | 

try {
    $api_instance->replaceProgramUrlTypeUrl($id_program, $id_url, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->replaceProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl**](../Model/\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramUrlTypeUrl**
> updateProgramUrlTypeUrl($id_program, $id_url, $id_url_type, $body)

Partially updates a ProgramUrlTypeUrl

Partially updates a ProgramUrlTypeUrl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsUrlTypesUrlsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_url = "id_url_example"; // string | Url md5 with separators
$id_url_type = "id_url_type_example"; // string | URL types identifier
$body = new \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl(); // \Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl | 

try {
    $api_instance->updateProgramUrlTypeUrl($id_program, $id_url, $id_url_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsUrlTypesUrlsApi->updateProgramUrlTypeUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_url** | **string**| Url md5 with separators |
 **id_url_type** | **string**| URL types identifier |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl**](../Model/\Softonic\CatalogApiSdk\Model\ProgramUrlTypeUrl.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

