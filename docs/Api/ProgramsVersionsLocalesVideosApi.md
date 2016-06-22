# Softonic\CatalogApiSdk\ProgramsVersionsLocalesVideosApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#createProgramVersionLocaleVideo) | **POST** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos | Creates a new ProgramVersionLocaleVideo
[**deleteProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#deleteProgramVersionLocaleVideo) | **DELETE** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos/{id_video} | Deletes a ProgramVersionLocaleVideo
[**findProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#findProgramVersionLocaleVideo) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos | List of ProgramVersionLocaleVideos
[**readProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#readProgramVersionLocaleVideo) | **GET** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos/{id_video} | Fetches a single ProgramVersionLocaleVideo
[**replaceProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#replaceProgramVersionLocaleVideo) | **PUT** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos/{id_video} | Entirely replaces a ProgramVersionLocaleVideo
[**updateProgramVersionLocaleVideo**](ProgramsVersionsLocalesVideosApi.md#updateProgramVersionLocaleVideo) | **PATCH** /programs/{id_program}/versions/{id_version}/locales/{id_locale}/videos/{id_video} | Partially updates a ProgramVersionLocaleVideo


# **createProgramVersionLocaleVideo**
> createProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $body)

Creates a new ProgramVersionLocaleVideo

Creates a new ProgramVersionLocaleVideo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$body = new \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo(); // \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo | 

try {
    $api_instance->createProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->createProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo**](../Model/\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramVersionLocaleVideo**
> deleteProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video)

Deletes a ProgramVersionLocaleVideo

Deletes a ProgramVersionLocaleVideo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_video = "id_video_example"; // string | Video Identifier

try {
    $api_instance->deleteProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->deleteProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_video** | **string**| Video Identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramVersionLocaleVideo**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo[] findProgramVersionLocaleVideo($id_program, $id_version, $id_locale)

List of ProgramVersionLocaleVideos

List of ProgramVersionLocaleVideos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier

try {
    $result = $api_instance->findProgramVersionLocaleVideo($id_program, $id_version, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->findProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo[]**](../Model/ProgramVersionLocaleVideo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramVersionLocaleVideo**
> \Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo readProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video)

Fetches a single ProgramVersionLocaleVideo

Fetches a single ProgramVersionLocaleVideo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_video = "id_video_example"; // string | Video Identifier

try {
    $result = $api_instance->readProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->readProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_video** | **string**| Video Identifier |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramVersionLocaleVideo**](../Model/ProgramVersionLocaleVideo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramVersionLocaleVideo**
> replaceProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video)

Entirely replaces a ProgramVersionLocaleVideo

Entirely replaces a ProgramVersionLocaleVideo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_video = "id_video_example"; // string | Video Identifier

try {
    $api_instance->replaceProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->replaceProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_video** | **string**| Video Identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramVersionLocaleVideo**
> updateProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video)

Partially updates a ProgramVersionLocaleVideo

Partially updates a ProgramVersionLocaleVideo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsVersionsLocalesVideosApi();
$id_program = "id_program_example"; // string | Program UUID
$id_version = "id_version_example"; // string | Version identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$id_video = "id_video_example"; // string | Video Identifier

try {
    $api_instance->updateProgramVersionLocaleVideo($id_program, $id_version, $id_locale, $id_video);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsVersionsLocalesVideosApi->updateProgramVersionLocaleVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_version** | **string**| Version identifier |
 **id_locale** | **string**| Locale identifier |
 **id_video** | **string**| Video Identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

