# Softonic\CatalogApiSdk\ProgramsPlatformsLanguagesApi

All URIs are relative to *https://catalog-v4.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#createprogramplatformlanguage) | **POST** /programs/{id_program}/platforms/{id_platform}/languages | Creates a ProgramPlatformLanguage
[**deleteProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#deleteprogramplatformlanguage) | **DELETE** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Deletes a ProgramPlatformLanguage
[**findProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#findprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages | Gets a ProgramPlatformLanguage list
[**readProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#readprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Fetches a single ProgramPlatformLanguage
[**replaceProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#replaceprogramplatformlanguage) | **PUT** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Entirely replaces a ProgramPlatformLanguage
[**updateProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#updateprogramplatformlanguage) | **PATCH** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Partially updates a ProgramPlatformLanguage

# **createProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse201 createProgramPlatformLanguage($body, $id_program, $id_platform)

Creates a ProgramPlatformLanguage

Creates a ProgramPlatformLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformLanguage to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->createProgramPlatformLanguage($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->createProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguage to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2001 deleteProgramPlatformLanguage($id_program, $id_platform, $id_language)

Deletes a ProgramPlatformLanguage

Deletes a ProgramPlatformLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->deleteProgramPlatformLanguage($id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->deleteProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage[] findProgramPlatformLanguage($id_program, $id_platform)

Gets a ProgramPlatformLanguage list

Gets a ProgramPlatformLanguage list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID

try {
    $result = $apiInstance->findProgramPlatformLanguage($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->findProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage[]**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage readProgramPlatformLanguage($id_program, $id_platform, $id_language)

Fetches a single ProgramPlatformLanguage

Fetches a single ProgramPlatformLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->readProgramPlatformLanguage($id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->readProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse200 replaceProgramPlatformLanguage($body, $id_program, $id_platform, $id_language)

Entirely replaces a ProgramPlatformLanguage

Entirely replaces a ProgramPlatformLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\null(); //  | ProgramPlatformLanguage to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->replaceProgramPlatformLanguage($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->replaceProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguage to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformLanguage**
> \Softonic\CatalogApiSdk\Client\Model\InlineResponse2002 updateProgramPlatformLanguage($body, $id_program, $id_platform, $id_language)

Partially updates a ProgramPlatformLanguage

Partially updates a ProgramPlatformLanguage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\CatalogApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\CatalogApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage(); // \Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage | ProgramPlatformLanguage to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->updateProgramPlatformLanguage($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->updateProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)| ProgramPlatformLanguage to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

