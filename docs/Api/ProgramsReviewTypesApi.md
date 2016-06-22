# Softonic\CatalogApiSdk\ProgramsReviewTypesApi

All URIs are relative to *http://v2.catalog.priv.sftapi.com.sft-staging.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProgramReviewType**](ProgramsReviewTypesApi.md#findProgramReviewType) | **GET** /programs/{id_program}/review-types | List of ProgramReviewTypes


# **findProgramReviewType**
> \Softonic\CatalogApiSdk\Model\ProgramReviewType[] findProgramReviewType($id_program)

List of ProgramReviewTypes

List of ProgramReviewTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\CatalogApiSdk\Api\ProgramsReviewTypesApi();
$id_program = "id_program_example"; // string | Program UUID or numeric ID

try {
    $result = $api_instance->findProgramReviewType($id_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsReviewTypesApi->findProgramReviewType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program UUID or numeric ID |

### Return type

[**\Softonic\CatalogApiSdk\Model\ProgramReviewType[]**](../Model/ProgramReviewType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

