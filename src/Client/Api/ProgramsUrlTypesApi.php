<?php
/**
 * ProgramsUrlTypesApi
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
 * OpenAPI spec version: 2.0.300-1837
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
 * ProgramsUrlTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsUrlTypesApi
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
     * @return ProgramsUrlTypesApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findProgramUrlType
     *
     * List of ProgramUrlTypes
     *
     * @param string $id_program Program UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramUrlType[]
     */
    public function findProgramUrlType($id_program)
    {
        list($response) = $this->findProgramUrlTypeWithHttpInfo($id_program);
        return $response;
    }

    /**
     * Operation findProgramUrlTypeWithHttpInfo
     *
     * List of ProgramUrlTypes
     *
     * @param string $id_program Program UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramUrlType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramUrlTypeWithHttpInfo($id_program)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramUrlType');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.findProgramUrlType, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.findProgramUrlType, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types";
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType[]',
                '/programs/{id_program}/url-types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramUrlType
     *
     * Fetches a single ProgramUrlType
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramUrlType
     */
    public function readProgramUrlType($id_program, $id_url_type)
    {
        list($response) = $this->readProgramUrlTypeWithHttpInfo($id_program, $id_url_type);
        return $response;
    }

    /**
     * Operation readProgramUrlTypeWithHttpInfo
     *
     * Fetches a single ProgramUrlType
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramUrlType, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramUrlTypeWithHttpInfo($id_program, $id_url_type)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramUrlType');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.readProgramUrlType, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.readProgramUrlType, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling readProgramUrlType');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}";
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
        if ($id_url_type !== null) {
            $resourcePath = str_replace(
                "{" . "id_url_type" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_url_type),
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType',
                '/programs/{id_program}/url-types/{id_url_type}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
