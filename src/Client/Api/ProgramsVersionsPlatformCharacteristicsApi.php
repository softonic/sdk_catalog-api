<?php
/**
 * ProgramsVersionsPlatformCharacteristicsApi
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
 * OpenAPI spec version: 2.0.330-2103
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
 * ProgramsVersionsPlatformCharacteristicsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsVersionsPlatformCharacteristicsApi
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
     * @return ProgramsVersionsPlatformCharacteristicsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramVersionPlatformCharacteristic
     *
     * Creates a new ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function createProgramVersionPlatformCharacteristic($id_program, $id_version, $body = null)
    {
        list($response) = $this->createProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $body);
        return $response;
    }

    /**
     * Operation createProgramVersionPlatformCharacteristicWithHttpInfo
     *
     * Creates a new ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.createProgramVersionPlatformCharacteristic, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.createProgramVersionPlatformCharacteristic, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling createProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.createProgramVersionPlatformCharacteristic, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.createProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-characteristics";
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
                '/programs/{id_program}/versions/{id_version}/platform-characteristics'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProgramVersionPlatformCharacteristic
     *
     * Deletes a ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function deleteProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)
    {
        list($response) = $this->deleteProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic);
        return $response;
    }

    /**
     * Operation deleteProgramVersionPlatformCharacteristicWithHttpInfo
     *
     * Deletes a ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling deleteProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_characteristic' is set
        if ($id_platform_characteristic === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_characteristic when calling deleteProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_platform_characteristic) > 20)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform_characteristic) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.deleteProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}";
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
        if ($id_platform_characteristic !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_characteristic" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_characteristic),
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
                '/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findProgramVersionPlatformCharacteristic
     *
     * List of ProgramVersionPlatformCharacteristics
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[]
     */
    public function findProgramVersionPlatformCharacteristic($id_program, $id_version)
    {
        list($response) = $this->findProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version);
        return $response;
    }

    /**
     * Operation findProgramVersionPlatformCharacteristicWithHttpInfo
     *
     * List of ProgramVersionPlatformCharacteristics
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.findProgramVersionPlatformCharacteristic, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.findProgramVersionPlatformCharacteristic, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling findProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.findProgramVersionPlatformCharacteristic, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.findProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-characteristics";
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[]',
                '/programs/{id_program}/versions/{id_version}/platform-characteristics'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramVersionPlatformCharacteristic
     *
     * Fetches a single ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic
     */
    public function readProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)
    {
        list($response) = $this->readProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic);
        return $response;
    }

    /**
     * Operation readProgramVersionPlatformCharacteristicWithHttpInfo
     *
     * Fetches a single ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling readProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_characteristic' is set
        if ($id_platform_characteristic === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_characteristic when calling readProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_platform_characteristic) > 20)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform_characteristic) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.readProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}";
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
        if ($id_platform_characteristic !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_characteristic" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_characteristic),
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic',
                '/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramVersionPlatformCharacteristic', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceProgramVersionPlatformCharacteristic
     *
     * Entirely replaces a ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function replaceProgramVersionPlatformCharacteristic($id_program, $id_version, $id_platform_characteristic)
    {
        list($response) = $this->replaceProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic);
        return $response;
    }

    /**
     * Operation replaceProgramVersionPlatformCharacteristicWithHttpInfo
     *
     * Entirely replaces a ProgramVersionPlatformCharacteristic
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version ID (required)
     * @param string $id_platform_characteristic Platform Characteristic ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceProgramVersionPlatformCharacteristicWithHttpInfo($id_program, $id_version, $id_platform_characteristic)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling replaceProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_platform_characteristic' is set
        if ($id_platform_characteristic === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform_characteristic when calling replaceProgramVersionPlatformCharacteristic');
        }
        if ((strlen($id_platform_characteristic) > 20)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform_characteristic) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform_characteristic" when calling ProgramsVersionsPlatformCharacteristicsApi.replaceProgramVersionPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}";
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
        if ($id_platform_characteristic !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform_characteristic" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform_characteristic),
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
                '/programs/{id_program}/versions/{id_version}/platform-characteristics/{id_platform_characteristic}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
