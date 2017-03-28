<?php
/**
 * ProgramsReviewTypesReviewsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.270-1618
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\CatalogApiSdk\Client\Api;

use \Softonic\CatalogApiSdk\ApiClient;
use \Softonic\CatalogApiSdk\ApiException;
use \Softonic\CatalogApiSdk\Configuration;
use \Softonic\CatalogApiSdk\ObjectSerializer;

/**
 * ProgramsReviewTypesReviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsReviewTypesReviewsApi
{
    /**
     * API Client
     *
     * @var \Softonic\CatalogApiSdk\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Softonic\CatalogApiSdk\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Softonic\CatalogApiSdk\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Softonic\CatalogApiSdk\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Softonic\CatalogApiSdk\ApiClient $apiClient set the API client
     *
     * @return ProgramsReviewTypesReviewsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramReviewTypeReview
     *
     * Creates a new ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function createProgramReviewTypeReview($id_program, $id_review_type, $body = null)
    {
        list($response) = $this->createProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $body);
        return $response;
    }

    /**
     * Operation createProgramReviewTypeReviewWithHttpInfo
     *
     * Creates a new ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.createProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.createProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling createProgramReviewTypeReview');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/programs/{id_program}/review-types/{id_review_type}/reviews'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProgramReviewTypeReview
     *
     * Deletes a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function deleteProgramReviewTypeReview($id_program, $id_review_type, $id_review)
    {
        list($response) = $this->deleteProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review);
        return $response;
    }

    /**
     * Operation deleteProgramReviewTypeReviewWithHttpInfo
     *
     * Deletes a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.deleteProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.deleteProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling deleteProgramReviewTypeReview');
        }
        // verify the required parameter 'id_review' is set
        if ($id_review === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review when calling deleteProgramReviewTypeReview');
        }
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.deleteProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.deleteProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        // path params
        if ($id_review !== null) {
            $resourcePath = str_replace(
                "{" . "id_review" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findProgramReviewTypeReview
     *
     * List of ProgramReviewTypeReviews
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[]
     */
    public function findProgramReviewTypeReview($id_program, $id_review_type)
    {
        list($response) = $this->findProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type);
        return $response;
    }

    /**
     * Operation findProgramReviewTypeReviewWithHttpInfo
     *
     * List of ProgramReviewTypeReviews
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.findProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.findProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling findProgramReviewTypeReview');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[]',
                '/programs/{id_program}/review-types/{id_review_type}/reviews'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramReviewTypeReview
     *
     * Fetches a single ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview
     */
    public function readProgramReviewTypeReview($id_program, $id_review_type, $id_review)
    {
        list($response) = $this->readProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review);
        return $response;
    }

    /**
     * Operation readProgramReviewTypeReviewWithHttpInfo
     *
     * Fetches a single ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.readProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.readProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling readProgramReviewTypeReview');
        }
        // verify the required parameter 'id_review' is set
        if ($id_review === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review when calling readProgramReviewTypeReview');
        }
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.readProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.readProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        // path params
        if ($id_review !== null) {
            $resourcePath = str_replace(
                "{" . "id_review" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview',
                '/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceProgramReviewTypeReview
     *
     * Entirely replaces a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function replaceProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body = null)
    {
        list($response) = $this->replaceProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review, $body);
        return $response;
    }

    /**
     * Operation replaceProgramReviewTypeReviewWithHttpInfo
     *
     * Entirely replaces a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.replaceProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.replaceProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling replaceProgramReviewTypeReview');
        }
        // verify the required parameter 'id_review' is set
        if ($id_review === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review when calling replaceProgramReviewTypeReview');
        }
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.replaceProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.replaceProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        // path params
        if ($id_review !== null) {
            $resourcePath = str_replace(
                "{" . "id_review" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateProgramReviewTypeReview
     *
     * Partially updates a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function updateProgramReviewTypeReview($id_program, $id_review_type, $id_review, $body = null)
    {
        list($response) = $this->updateProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review, $body);
        return $response;
    }

    /**
     * Operation updateProgramReviewTypeReviewWithHttpInfo
     *
     * Partially updates a ProgramReviewTypeReview
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_review_type Review owner type (required)
     * @param string $id_review Review identifier as UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramReviewTypeReview $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProgramReviewTypeReviewWithHttpInfo($id_program, $id_review_type, $id_review, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling updateProgramReviewTypeReview');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.updateProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsReviewTypesReviewsApi.updateProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_review_type' is set
        if ($id_review_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review_type when calling updateProgramReviewTypeReview');
        }
        // verify the required parameter 'id_review' is set
        if ($id_review === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_review when calling updateProgramReviewTypeReview');
        }
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.updateProgramReviewTypeReview, must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_review" when calling ProgramsReviewTypesReviewsApi.updateProgramReviewTypeReview, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_review_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_review_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review_type),
                $resourcePath
            );
        }
        // path params
        if ($id_review !== null) {
            $resourcePath = str_replace(
                "{" . "id_review" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_review),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/programs/{id_program}/review-types/{id_review_type}/reviews/{id_review}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
