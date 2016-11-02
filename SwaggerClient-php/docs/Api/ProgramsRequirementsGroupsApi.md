# Swagger\Client\ProgramsRequirementsGroupsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#createProgramRequirementGroup) | **POST** /programs/{id_program}/requirements-groups | Creates a new ProgramRequirementGroup
[**deleteProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#deleteProgramRequirementGroup) | **DELETE** /programs/{id_program}/requirements-groups/{id_requirements_group} | Deletes a ProgramRequirementGroup
[**findProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#findProgramRequirementGroup) | **GET** /programs/{id_program}/requirements-groups | List of ProgramRequirementGroups
[**readProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#readProgramRequirementGroup) | **GET** /programs/{id_program}/requirements-groups/{id_requirements_group} | Fetches a single ProgramRequirementGroup
[**replaceProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#replaceProgramRequirementGroup) | **PUT** /programs/{id_program}/requirements-groups/{id_requirements_group} | Entirely replaces a ProgramRequirementGroup


# **createProgramRequirementGroup**
> createProgramRequirementGroup($id_program, $body)

Creates a new ProgramRequirementGroup

Creates a new ProgramRequirementGroup

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

$api_instance = new Swagger\Client\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$body = new \Swagger\Client\Model\ProgramRequirementGroup(); // \Swagger\Client\Model\ProgramRequirementGroup | 

try {
    $api_instance->createProgramRequirementGroup($id_program, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->createProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **body** | [**\Swagger\Client\Model\ProgramRequirementGroup**](../Model/\Swagger\Client\Model\ProgramRequirementGroup.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramRequirementGroup**
> deleteProgramRequirementGroup($id_program, $id_requirements_group)

Deletes a ProgramRequirementGroup

Deletes a ProgramRequirementGroup

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

$api_instance = new Swagger\Client\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID

try {
    $api_instance->deleteProgramRequirementGroup($id_program, $id_requirements_group);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->deleteProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramRequirementGroup**
> \Swagger\Client\Model\ProgramRequirementGroup[] findProgramRequirementGroup($id_program)

List of ProgramRequirementGroups

List of ProgramRequirementGroups

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

$api_instance = new Swagger\Client\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID

try {
    $result = $api_instance->findProgramRequirementGroup($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->findProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |

### Return type

[**\Swagger\Client\Model\ProgramRequirementGroup[]**](../Model/ProgramRequirementGroup.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramRequirementGroup**
> \Swagger\Client\Model\ProgramRequirementGroup readProgramRequirementGroup($id_program, $id_requirements_group)

Fetches a single ProgramRequirementGroup

Fetches a single ProgramRequirementGroup

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

$api_instance = new Swagger\Client\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID

try {
    $result = $api_instance->readProgramRequirementGroup($id_program, $id_requirements_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->readProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |

### Return type

[**\Swagger\Client\Model\ProgramRequirementGroup**](../Model/ProgramRequirementGroup.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramRequirementGroup**
> replaceProgramRequirementGroup($id_program, $id_requirements_group)

Entirely replaces a ProgramRequirementGroup

Entirely replaces a ProgramRequirementGroup

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

$api_instance = new Swagger\Client\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID

try {
    $api_instance->replaceProgramRequirementGroup($id_program, $id_requirements_group);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->replaceProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

