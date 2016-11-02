# Swagger\Client\ProgramsVersionsLanguagesApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLanguage**](ProgramsVersionsLanguagesApi.md#createProgramVersionLanguage) | **POST** /programs/{id_program}/versions/{id_version}/languages | Creates a new ProgramVersionLanguage
[**deleteProgramVersionLanguage**](ProgramsVersionsLanguagesApi.md#deleteProgramVersionLanguage) | **DELETE** /programs/{id_program}/versions/{id_version}/languages/{id_language} | Deletes a ProgramVersionLanguage
[**findProgramVersionLanguage**](ProgramsVersionsLanguagesApi.md#findProgramVersionLanguage) | **GET** /programs/{id_program}/versions/{id_version}/languages | List of ProgramVersionLanguages
[**readProgramVersionLanguage**](ProgramsVersionsLanguagesApi.md#readProgramVersionLanguage) | **GET** /programs/{id_program}/versions/{id_version}/languages/{id_language} | Fetches a single ProgramVersionLanguage
[**replaceProgramVersionLanguage**](ProgramsVersionsLanguagesApi.md#replaceProgramVersionLanguage) | **PUT** /programs/{id_program}/versions/{id_version}/languages/{id_language} | Entirely replaces a ProgramVersionLanguage


# **createProgramVersionLanguage**
> createProgramVersionLanguage($id_program, $id_version, $body)

Creates a new ProgramVersionLanguage

Creates a new ProgramVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramsVersionsLanguagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$body = new \Swagger\Client\Model\ProgramVersionLanguage(); // \Swagger\Client\Model\ProgramVersionLanguage | 

try {
    $api_instance->createProgramVersionLanguage($id_program, $id_version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLanguagesApi->createProgramVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **body** | [**\Swagger\Client\Model\ProgramVersionLanguage**](../Model/\Swagger\Client\Model\ProgramVersionLanguage.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLanguage**
> deleteProgramVersionLanguage($id_program, $id_version, $id_language)

Deletes a ProgramVersionLanguage

Deletes a ProgramVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramsVersionsLanguagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $api_instance->deleteProgramVersionLanguage($id_program, $id_version, $id_language);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLanguagesApi->deleteProgramVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_language** | **string**| Language identifier |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLanguage**
> \Swagger\Client\Model\ProgramVersionLanguage[] findProgramVersionLanguage($id_program, $id_version)

List of ProgramVersionLanguages

List of ProgramVersionLanguages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramsVersionsLanguagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier

try {
    $result = $api_instance->findProgramVersionLanguage($id_program, $id_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLanguagesApi->findProgramVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |

### Return type

[**\Swagger\Client\Model\ProgramVersionLanguage[]**](../Model/ProgramVersionLanguage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLanguage**
> \Swagger\Client\Model\ProgramVersionLanguage readProgramVersionLanguage($id_program, $id_version, $id_language)

Fetches a single ProgramVersionLanguage

Fetches a single ProgramVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramsVersionsLanguagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $result = $api_instance->readProgramVersionLanguage($id_program, $id_version, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLanguagesApi->readProgramVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_language** | **string**| Language identifier |

### Return type

[**\Swagger\Client\Model\ProgramVersionLanguage**](../Model/ProgramVersionLanguage.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLanguage**
> replaceProgramVersionLanguage($id_program, $id_version, $id_language)

Entirely replaces a ProgramVersionLanguage

Entirely replaces a ProgramVersionLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: catalog_api_implicit
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_access_code
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_password
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: catalog_api_application
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramsVersionsLanguagesApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Program version identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $api_instance->replaceProgramVersionLanguage($id_program, $id_version, $id_language);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLanguagesApi->replaceProgramVersionLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Program version identifier |
 **id_language** | **string**| Language identifier |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

