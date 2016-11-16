# Softonic\CatalogApiSdk\ProgramsRequirementsGroupsRequirementsApi

All URIs are relative to *https://catalog.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#createProgramRequirementGroupRequirement) | **POST** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements | Creates a new ProgramRequirementGroupRequirement
[**deleteProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#deleteProgramRequirementGroupRequirement) | **DELETE** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements/{id_requirement} | Deletes a ProgramRequirementGroupRequirement
[**findProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#findProgramRequirementGroupRequirement) | **GET** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements | List of ProgramRequirementGroupRequirements
[**readProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#readProgramRequirementGroupRequirement) | **GET** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements/{id_requirement} | Fetches a single ProgramRequirementGroupRequirement
[**replaceProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#replaceProgramRequirementGroupRequirement) | **PUT** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements/{id_requirement} | Entirely replaces a ProgramRequirementGroupRequirement
[**updateProgramRequirementGroupRequirement**](ProgramsRequirementsGroupsRequirementsApi.md#updateProgramRequirementGroupRequirement) | **PATCH** /programs/{id_program}/requirements-groups/{id_requirements_group}/requirements/{id_requirement} | Partially updates a ProgramRequirementGroupRequirement


# **createProgramRequirementGroupRequirement**
> createProgramRequirementGroupRequirement($id_program, $id_requirements_group, $body)

Creates a new ProgramRequirementGroupRequirement

Creates a new ProgramRequirementGroupRequirement

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement(); // \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement | 

try {
    $api_instance->createProgramRequirementGroupRequirement($id_program, $id_requirements_group, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->createProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramRequirementGroupRequirement**
> deleteProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement)

Deletes a ProgramRequirementGroupRequirement

Deletes a ProgramRequirementGroupRequirement

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID
$id_requirement = "id_requirement_example"; // string | Requirement ID

try {
    $api_instance->deleteProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->deleteProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |
 **id_requirement** | **string**| Requirement ID |

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramRequirementGroupRequirement**
> \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement[] findProgramRequirementGroupRequirement($id_program, $id_requirements_group)

List of ProgramRequirementGroupRequirements

List of ProgramRequirementGroupRequirements

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID

try {
    $result = $api_instance->findProgramRequirementGroupRequirement($id_program, $id_requirements_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->findProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement[]**](../Model/ProgramRequirementGroupRequirement.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramRequirementGroupRequirement**
> \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement readProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement)

Fetches a single ProgramRequirementGroupRequirement

Fetches a single ProgramRequirementGroupRequirement

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID
$id_requirement = "id_requirement_example"; // string | Requirement ID

try {
    $result = $api_instance->readProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->readProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |
 **id_requirement** | **string**| Requirement ID |

### Return type

[**\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement**](../Model/ProgramRequirementGroupRequirement.md)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramRequirementGroupRequirement**
> replaceProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement, $body)

Entirely replaces a ProgramRequirementGroupRequirement

Entirely replaces a ProgramRequirementGroupRequirement

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID
$id_requirement = "id_requirement_example"; // string | Requirement ID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement(); // \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement | 

try {
    $api_instance->replaceProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->replaceProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |
 **id_requirement** | **string**| Requirement ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramRequirementGroupRequirement**
> updateProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement, $body)

Partially updates a ProgramRequirementGroupRequirement

Partially updates a ProgramRequirementGroupRequirement

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

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsRequirementsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirements_group = "id_requirements_group_example"; // string | Requirements group UUID
$id_requirement = "id_requirement_example"; // string | Requirement ID
$body = new \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement(); // \Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement | 

try {
    $api_instance->updateProgramRequirementGroupRequirement($id_program, $id_requirements_group, $id_requirement, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsRequirementsApi->updateProgramRequirementGroupRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirements_group** | **string**| Requirements group UUID |
 **id_requirement** | **string**| Requirement ID |
 **body** | [**\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement**](../Model/\Softonic\CatalogApiSdk\Client\Model\ProgramRequirementGroupRequirement.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[catalog_api_implicit](../../README.md#catalog_api_implicit), [catalog_api_access_code](../../README.md#catalog_api_access_code), [catalog_api_password](../../README.md#catalog_api_password), [catalog_api_application](../../README.md#catalog_api_application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

