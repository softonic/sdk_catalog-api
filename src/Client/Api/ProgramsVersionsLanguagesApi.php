<?php
/**
 * ProgramsVersionsLanguagesApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\\CatalogApiSdk
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

namespace Softonic\\CatalogApiSdk\Client\\Api;

use \Softonic\\CatalogApiSdk\ApiClient;
use \Softonic\\CatalogApiSdk\ApiException;
use \Softonic\\CatalogApiSdk\Configuration;
use \Softonic\\CatalogApiSdk\ObjectSerializer;

/**
 * ProgramsVersionsLanguagesApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsVersionsLanguagesApi
{
    /**
     * API Client
     *
     * @var \Softonic\\CatalogApiSdk\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Softonic\\CatalogApiSdk\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Softonic\\CatalogApiSdk\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Softonic\\CatalogApiSdk\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Softonic\\CatalogApiSdk\ApiClient $apiClient set the API client
     *
     * @return ProgramsVersionsLanguagesApi
     */
    public function setApiClient(\Softonic\\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramVersionLanguage
     *
     * Creates a new ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage $body  (optional)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function createProgramVersionLanguage($id_program, $id_version, $body = null)
    {
        list($response) = $this->createProgramVersionLanguageWithHttpInfo($id_program, $id_version, $body);
        return $response;
    }

    /**
     * Operation createProgramVersionLanguageWithHttpInfo
     *
     * Creates a new ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage $body  (optional)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProgramVersionLanguageWithHttpInfo($id_program, $id_version, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramVersionLanguage');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.createProgramVersionLanguage, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.createProgramVersionLanguage, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling createProgramVersionLanguage');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.createProgramVersionLanguage, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.createProgramVersionLanguage, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/languages";
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
                '/programs/{id_program}/versions/{id_version}/languages'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProgramVersionLanguage
     *
     * Deletes a ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function deleteProgramVersionLanguage($id_program, $id_version, $id_language)
    {
        list($response) = $this->deleteProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language);
        return $response;
    }

    /**
     * Operation deleteProgramVersionLanguageWithHttpInfo
     *
     * Deletes a ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramVersionLanguage');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.deleteProgramVersionLanguage, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.deleteProgramVersionLanguage, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling deleteProgramVersionLanguage');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.deleteProgramVersionLanguage, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.deleteProgramVersionLanguage, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_language' is set
        if ($id_language === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_language when calling deleteProgramVersionLanguage');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/languages/{id_language}";
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
        if ($id_language !== null) {
            $resourcePath = str_replace(
                "{" . "id_language" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_language),
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
                '/programs/{id_program}/versions/{id_version}/languages/{id_language}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findProgramVersionLanguage
     *
     * List of ProgramVersionLanguages
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage[]
     */
    public function findProgramVersionLanguage($id_program, $id_version)
    {
        list($response) = $this->findProgramVersionLanguageWithHttpInfo($id_program, $id_version);
        return $response;
    }

    /**
     * Operation findProgramVersionLanguageWithHttpInfo
     *
     * List of ProgramVersionLanguages
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramVersionLanguageWithHttpInfo($id_program, $id_version)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramVersionLanguage');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.findProgramVersionLanguage, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.findProgramVersionLanguage, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling findProgramVersionLanguage');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.findProgramVersionLanguage, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.findProgramVersionLanguage, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/languages";
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
                '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage[]',
                '/programs/{id_program}/versions/{id_version}/languages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramVersionLanguage
     *
     * Fetches a single ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage
     */
    public function readProgramVersionLanguage($id_program, $id_version, $id_language)
    {
        list($response) = $this->readProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language);
        return $response;
    }

    /**
     * Operation readProgramVersionLanguageWithHttpInfo
     *
     * Fetches a single ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramVersionLanguage');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.readProgramVersionLanguage, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.readProgramVersionLanguage, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling readProgramVersionLanguage');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.readProgramVersionLanguage, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.readProgramVersionLanguage, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_language' is set
        if ($id_language === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_language when calling readProgramVersionLanguage');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/languages/{id_language}";
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
        if ($id_language !== null) {
            $resourcePath = str_replace(
                "{" . "id_language" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_language),
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
                '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage',
                '/programs/{id_program}/versions/{id_version}/languages/{id_language}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\\CatalogApiSdk\Client\\Model\ProgramVersionLanguage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceProgramVersionLanguage
     *
     * Entirely replaces a ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function replaceProgramVersionLanguage($id_program, $id_version, $id_language)
    {
        list($response) = $this->replaceProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language);
        return $response;
    }

    /**
     * Operation replaceProgramVersionLanguageWithHttpInfo
     *
     * Entirely replaces a ProgramVersionLanguage
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Program version identifier (required)
     * @param string $id_language Language identifier (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceProgramVersionLanguageWithHttpInfo($id_program, $id_version, $id_language)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramVersionLanguage');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.replaceProgramVersionLanguage, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsVersionsLanguagesApi.replaceProgramVersionLanguage, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling replaceProgramVersionLanguage');
        }
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.replaceProgramVersionLanguage, must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling ProgramsVersionsLanguagesApi.replaceProgramVersionLanguage, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_language' is set
        if ($id_language === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_language when calling replaceProgramVersionLanguage');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}/languages/{id_language}";
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
        if ($id_language !== null) {
            $resourcePath = str_replace(
                "{" . "id_language" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_language),
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
                '/programs/{id_program}/versions/{id_version}/languages/{id_language}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
