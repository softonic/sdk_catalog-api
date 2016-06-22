# Softonic\CatalogApiSdk\ProgramsRequirementsGroupsApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#createProgramRequirementGroup) | **POST** /programs/{id_program}/requirements-groups | Creates a new ProgramRequirementGroup
[**deleteProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#deleteProgramRequirementGroup) | **DELETE** /programs/{id_program}/requirements-groups/{id_requirements_group} | Deletes a ProgramRequirementGroup
[**findProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#findProgramRequirementGroup) | **GET** /programs/{id_program}/requirements-groups | List of ProgramRequirementGroups
[**readProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#readProgramRequirementGroup) | **GET** /programs/{id_program}/requirements-groups/{id_requirements_group} | Fetches a single ProgramRequirementGroup
[**replaceProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#replaceProgramRequirementGroup) | **PUT** /programs/{id_program}/requirements-groups/{id_requirements_group} | Entirely replaces a ProgramRequirementGroup
[**updateProgramRequirementGroup**](ProgramsRequirementsGroupsApi.md#updateProgramRequirementGroup) | **PATCH** /programs/{id_program}/requirements-groups/{id_requirements_group} | Partially updates a ProgramRequirementGroup


# **createProgramRequirementGroup**
> createProgramRequirementGroup($id_program, $body)

Creates a new ProgramRequirementGroup

Creates a new ProgramRequirementGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$body = new \Softonic\CatalogApiSdk\Model\ProgramRequirementGroup(); // \Softonic\CatalogApiSdk\Model\ProgramRequirementGroup | 

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
 **body** | [**\Softonic\CatalogApiSdk\Model\ProgramRequirementGroup**](../Model/\Softonic\CatalogApiSdk\Model\ProgramRequirementGroup.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramRequirementGroup**
> deleteProgramRequirementGroup($id_program, $id_requirement_group)

Deletes a ProgramRequirementGroup

Deletes a ProgramRequirementGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirement_group = "id_requirement_group_example"; // string | Requirements group UUID

try {
    $api_instance->deleteProgramRequirementGroup($id_program, $id_requirement_group);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->deleteProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirement_group** | **string**| Requirements group UUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramRequirementGroup**
> \Softonic\CatalogApiSdk\Model\ProgramRequirementGroup[] findProgramRequirementGroup($id_program)

List of ProgramRequirementGroups

List of ProgramRequirementGroups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
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

[**\Softonic\CatalogApiSdk\Model\ProgramRequirementGroup[]**](../Model/ProgramRequirementGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramRequirementGroup**
> \Softonic\CatalogApiSdk\Model\ProgramRequirementGroup readProgramRequirementGroup($id_program, $id_requirement_group)

Fetches a single ProgramRequirementGroup

Fetches a single ProgramRequirementGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirement_group = "id_requirement_group_example"; // string | Requirements group UUID

try {
    $result = $api_instance->readProgramRequirementGroup($id_program, $id_requirement_group);
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
 **id_requirement_group** | **string**| Requirements group UUID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramRequirementGroup**](../Model/ProgramRequirementGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramRequirementGroup**
> replaceProgramRequirementGroup($id_program, $id_requirement_group)

Entirely replaces a ProgramRequirementGroup

Entirely replaces a ProgramRequirementGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirement_group = "id_requirement_group_example"; // string | Requirements group UUID

try {
    $api_instance->replaceProgramRequirementGroup($id_program, $id_requirement_group);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->replaceProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirement_group** | **string**| Requirements group UUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramRequirementGroup**
> updateProgramRequirementGroup($id_program, $id_requirement_group)

Partially updates a ProgramRequirementGroup

Partially updates a ProgramRequirementGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsRequirementsGroupsApi();
$id_program = "id_program_example"; // string | Program UUID
$id_requirement_group = "id_requirement_group_example"; // string | Requirements group UUID

try {
    $api_instance->updateProgramRequirementGroup($id_program, $id_requirement_group);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsRequirementsGroupsApi->updateProgramRequirementGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID |
 **id_requirement_group** | **string**| Requirements group UUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

