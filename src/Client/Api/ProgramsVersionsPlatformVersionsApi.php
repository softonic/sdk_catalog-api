<?php
/**
 * ProgramsVersionsPlatformVersionsApi
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
 * OpenAPI spec version: 2.0.274-1675
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
 * ProgramsVersionsPlatformVersionsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsVersionsPlatformVersionsApi
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
     * @return ProgramsVersionsPlatformVersionsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramVersionPlatformVersion
     *
     * Creates a new ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function createProgramVersionPlatformVersion($id_program, $id_version, $body = null)
    {
        list($response) = $this->createProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $body);
        return $response;
    }

    /**
     * Operation createProgramVersionPlatformVersionWithHttpInfo
     *
     * Creates a new ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramVersionPlatformVersion');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.createProgramVersionPlatformVersion, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.createProgramVersionPlatformVersion, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling createProgramVersionPlatformVersion');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.createProgramVersionPlatformVersion, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.createProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-versions";
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
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
                '/programs/{id_program}/versions/{id_version}/platform-versions'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProgramVersionPlatformVersion
     *
     * Deletes a ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function deleteProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)
    {
        list($response) = $this->deleteProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version);
        return $response;
    }

    /**
     * Operation deleteProgramVersionPlatformVersionWithHttpInfo
     *
     * Deletes a ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramVersionPlatformVersion');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling deleteProgramVersionPlatformVersion');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_version' is set
        if ($id_platform_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_version when calling deleteProgramVersionPlatformVersion');
        }
        if ((strlen($id_platform_version) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be smaller than or equal to 40.');
        }
        if ((strlen($id_platform_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.deleteProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}";
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
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
                $resourcePath
            );
        }
        // path params
        if ($id_platform_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_version),
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
                '/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findProgramVersionPlatformVersion
     *
     * List of ProgramVersionPlatformVersions
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[]
     */
    public function findProgramVersionPlatformVersion($id_program, $id_version)
    {
        list($response) = $this->findProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version);
        return $response;
    }

    /**
     * Operation findProgramVersionPlatformVersionWithHttpInfo
     *
     * List of ProgramVersionPlatformVersions
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramVersionPlatformVersion');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.findProgramVersionPlatformVersion, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.findProgramVersionPlatformVersion, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling findProgramVersionPlatformVersion');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.findProgramVersionPlatformVersion, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.findProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-versions";
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
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[]',
                '/programs/{id_program}/versions/{id_version}/platform-versions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramVersionPlatformVersion
     *
     * Fetches a single ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion
     */
    public function readProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)
    {
        list($response) = $this->readProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version);
        return $response;
    }

    /**
     * Operation readProgramVersionPlatformVersionWithHttpInfo
     *
     * Fetches a single ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramVersionPlatformVersion');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling readProgramVersionPlatformVersion');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_version' is set
        if ($id_platform_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_version when calling readProgramVersionPlatformVersion');
        }
        if ((strlen($id_platform_version) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be smaller than or equal to 40.');
        }
        if ((strlen($id_platform_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.readProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}";
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
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
                $resourcePath
            );
        }
        // path params
        if ($id_platform_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_version),
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion',
                '/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformVersion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceProgramVersionPlatformVersion
     *
     * Entirely replaces a ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function replaceProgramVersionPlatformVersion($id_program, $id_version, $id_platform_version)
    {
        list($response) = $this->replaceProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version);
        return $response;
    }

    /**
     * Operation replaceProgramVersionPlatformVersionWithHttpInfo
     *
     * Entirely replaces a ProgramVersionPlatformVersion
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_version Platform Version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceProgramVersionPlatformVersionWithHttpInfo($id_program, $id_version, $id_platform_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramVersionPlatformVersion');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling replaceProgramVersionPlatformVersion');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_version' is set
        if ($id_platform_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_version when calling replaceProgramVersionPlatformVersion');
        }
        if ((strlen($id_platform_version) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be smaller than or equal to 40.');
        }
        if ((strlen($id_platform_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_version" when calling ProgramsVersionsPlatformVersionsApi.replaceProgramVersionPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}";
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
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
                $resourcePath
            );
        }
        // path params
        if ($id_platform_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_version),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/programs/{id_program}/versions/{id_version}/platform-versions/{id_platform_version}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
