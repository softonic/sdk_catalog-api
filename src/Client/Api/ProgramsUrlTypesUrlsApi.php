<?php
/**
 * ProgramsUrlTypesUrlsApi
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
 * OpenAPI spec version: 2.0.285-1743
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
 * ProgramsUrlTypesUrlsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsUrlTypesUrlsApi
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
     * @return ProgramsUrlTypesUrlsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramUrlTypeUrl
     *
     * Creates a new ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function createProgramUrlTypeUrl($id_program, $id_url_type, $body = null)
    {
        list($response) = $this->createProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $body);
        return $response;
    }

    /**
     * Operation createProgramUrlTypeUrlWithHttpInfo
     *
     * Creates a new ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.createProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.createProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling createProgramUrlTypeUrl');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls";
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
                '/programs/{id_program}/url-types/{id_url_type}/urls'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProgramUrlTypeUrl
     *
     * Deletes a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function deleteProgramUrlTypeUrl($id_program, $id_url_type, $id_url)
    {
        list($response) = $this->deleteProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url);
        return $response;
    }

    /**
     * Operation deleteProgramUrlTypeUrlWithHttpInfo
     *
     * Deletes a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.deleteProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.deleteProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling deleteProgramUrlTypeUrl');
        }
        // verify the required parameter 'id_url' is set
        if ($id_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url when calling deleteProgramUrlTypeUrl');
        }
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.deleteProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.deleteProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}";
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
        // path params
        if ($id_url !== null) {
            $resourcePath = str_replace(
                "{" . "id_url" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_url),
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
                '/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findProgramUrlTypeUrl
     *
     * List of ProgramUrlTypeUrls
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl[]
     */
    public function findProgramUrlTypeUrl($id_program, $id_url_type)
    {
        list($response) = $this->findProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type);
        return $response;
    }

    /**
     * Operation findProgramUrlTypeUrlWithHttpInfo
     *
     * List of ProgramUrlTypeUrls
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.findProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.findProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling findProgramUrlTypeUrl');
        }
        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls";
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl[]',
                '/programs/{id_program}/url-types/{id_url_type}/urls'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readProgramUrlTypeUrl
     *
     * Fetches a single ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl
     */
    public function readProgramUrlTypeUrl($id_program, $id_url_type, $id_url)
    {
        list($response) = $this->readProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url);
        return $response;
    }

    /**
     * Operation readProgramUrlTypeUrlWithHttpInfo
     *
     * Fetches a single ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl, HTTP status code, HTTP response headers (array of strings)
     */
    public function readProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.readProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.readProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling readProgramUrlTypeUrl');
        }
        // verify the required parameter 'id_url' is set
        if ($id_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url when calling readProgramUrlTypeUrl');
        }
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.readProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.readProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}";
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
        // path params
        if ($id_url !== null) {
            $resourcePath = str_replace(
                "{" . "id_url" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_url),
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
                '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl',
                '/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceProgramUrlTypeUrl
     *
     * Entirely replaces a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function replaceProgramUrlTypeUrl($id_program, $id_url_type, $id_url, $body = null)
    {
        list($response) = $this->replaceProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url, $body);
        return $response;
    }

    /**
     * Operation replaceProgramUrlTypeUrlWithHttpInfo
     *
     * Entirely replaces a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.replaceProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.replaceProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling replaceProgramUrlTypeUrl');
        }
        // verify the required parameter 'id_url' is set
        if ($id_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url when calling replaceProgramUrlTypeUrl');
        }
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.replaceProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.replaceProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}";
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
        // path params
        if ($id_url !== null) {
            $resourcePath = str_replace(
                "{" . "id_url" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_url),
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
                '/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateProgramUrlTypeUrl
     *
     * Partially updates a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function updateProgramUrlTypeUrl($id_program, $id_url_type, $id_url, $body = null)
    {
        list($response) = $this->updateProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url, $body);
        return $response;
    }

    /**
     * Operation updateProgramUrlTypeUrlWithHttpInfo
     *
     * Partially updates a ProgramUrlTypeUrl
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_url_type URL types identifier. (required)
     * @param string $id_url Url UUID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\ProgramUrlTypeUrl $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProgramUrlTypeUrlWithHttpInfo($id_program, $id_url_type, $id_url, $body = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling updateProgramUrlTypeUrl');
        }
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.updateProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesUrlsApi.updateProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'id_url_type' is set
        if ($id_url_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url_type when calling updateProgramUrlTypeUrl');
        }
        // verify the required parameter 'id_url' is set
        if ($id_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_url when calling updateProgramUrlTypeUrl');
        }
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.updateProgramUrlTypeUrl, must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$id_url" when calling ProgramsUrlTypesUrlsApi.updateProgramUrlTypeUrl, must be bigger than or equal to 36.');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}";
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
        // path params
        if ($id_url !== null) {
            $resourcePath = str_replace(
                "{" . "id_url" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_url),
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
                '/programs/{id_program}/url-types/{id_url_type}/urls/{id_url}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
