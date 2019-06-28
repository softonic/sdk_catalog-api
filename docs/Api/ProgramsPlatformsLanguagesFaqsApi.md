# Swagger\Client\ProgramsPlatformsLanguagesFaqsApi

All URIs are relative to *http://my-default-host.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#createProgramPlatformLanguageFaq) | **POST** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs | Creates a ProgramPlatformLanguageFaq
[**deleteProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#deleteProgramPlatformLanguageFaq) | **DELETE** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs/{id_faq} | Deletes a ProgramPlatformLanguageFaq
[**findProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#findProgramPlatformLanguageFaq) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs | Gets a ProgramPlatformLanguageFaq list
[**readProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#readProgramPlatformLanguageFaq) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs/{id_faq} | Fetches a single ProgramPlatformLanguageFaq
[**replaceProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#replaceProgramPlatformLanguageFaq) | **PUT** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs/{id_faq} | Entirely replaces a ProgramPlatformLanguageFaq
[**updateProgramPlatformLanguageFaq**](ProgramsPlatformsLanguagesFaqsApi.md#updateProgramPlatformLanguageFaq) | **PATCH** /programs/{id_program}/platforms/{id_platform}/languages/{id_language}/faqs/{id_faq} | Partially updates a ProgramPlatformLanguageFaq

# **createProgramPlatformLanguageFaq**
> \Swagger\Client\Model\InlineResponse201 createProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language)

Creates a ProgramPlatformLanguageFaq

Creates a ProgramPlatformLanguageFaq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformLanguageFaq to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->createProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->createProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguageFaq to be created |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformLanguageFaq**
> \Swagger\Client\Model\InlineResponse2001 deleteProgramPlatformLanguageFaq($id_program, $id_platform, $id_language, $id_faq)

Deletes a ProgramPlatformLanguageFaq

Deletes a ProgramPlatformLanguageFaq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_faq = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Faq ID

try {
    $result = $apiInstance->deleteProgramPlatformLanguageFaq($id_program, $id_platform, $id_language, $id_faq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->deleteProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_faq** | [**string**](../Model/.md)| Faq ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLanguageFaq**
> \Swagger\Client\Model\ProgramPlatformLanguageFaq[] findProgramPlatformLanguageFaq($id_program, $id_platform, $id_language)

Gets a ProgramPlatformLanguageFaq list

Gets a ProgramPlatformLanguageFaq list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID

try {
    $result = $apiInstance->findProgramPlatformLanguageFaq($id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->findProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProgramPlatformLanguageFaq[]**](../Model/ProgramPlatformLanguageFaq.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformLanguageFaq**
> \Swagger\Client\Model\ProgramPlatformLanguageFaq readProgramPlatformLanguageFaq($id_program, $id_platform, $id_language, $id_faq)

Fetches a single ProgramPlatformLanguageFaq

Fetches a single ProgramPlatformLanguageFaq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_faq = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Faq ID

try {
    $result = $apiInstance->readProgramPlatformLanguageFaq($id_program, $id_platform, $id_language, $id_faq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->readProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_faq** | [**string**](../Model/.md)| Faq ID |

### Return type

[**\Swagger\Client\Model\ProgramPlatformLanguageFaq**](../Model/ProgramPlatformLanguageFaq.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformLanguageFaq**
> \Swagger\Client\Model\InlineResponse200 replaceProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language, $id_faq)

Entirely replaces a ProgramPlatformLanguageFaq

Entirely replaces a ProgramPlatformLanguageFaq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | ProgramPlatformLanguageFaq to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_faq = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Faq ID

try {
    $result = $apiInstance->replaceProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language, $id_faq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->replaceProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguageFaq to be replaced |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_faq** | [**string**](../Model/.md)| Faq ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformLanguageFaq**
> \Swagger\Client\Model\InlineResponse2002 updateProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language, $id_faq)

Partially updates a ProgramPlatformLanguageFaq

Partially updates a ProgramPlatformLanguageFaq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProgramsPlatformsLanguagesFaqsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProgramPlatformLanguageFaq(); // \Swagger\Client\Model\ProgramPlatformLanguageFaq | ProgramPlatformLanguageFaq to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program ID
$id_platform = "id_platform_example"; // string | Platform ID
$id_language = "id_language_example"; // string | Language ID
$id_faq = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Faq ID

try {
    $result = $apiInstance->updateProgramPlatformLanguageFaq($body, $id_program, $id_platform, $id_language, $id_faq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesFaqsApi->updateProgramPlatformLanguageFaq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProgramPlatformLanguageFaq**](../Model/ProgramPlatformLanguageFaq.md)| ProgramPlatformLanguageFaq to be updated |
 **id_program** | [**string**](../Model/.md)| Program ID |
 **id_platform** | **string**| Platform ID |
 **id_language** | **string**| Language ID |
 **id_faq** | [**string**](../Model/.md)| Faq ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

