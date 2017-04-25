<?php
/**
 * OriginsApi
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
 * OpenAPI spec version: 2.0.280-1723
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
 * OriginsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OriginsApi
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
     * @return OriginsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findOrigin
     *
     * List of Origins
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\Origin[]
     */
    public function findOrigin()
    {
        list($response) = $this->findOriginWithHttpInfo();
        return $response;
    }

    /**
     * Operation findOriginWithHttpInfo
     *
     * List of Origins
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\Origin[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findOriginWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/origins";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        
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
                '\Softonic\CatalogApiSdk\Client\Model\Origin[]',
                '/origins'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\Origin[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\Origin[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readOrigin
     *
     * Fetches a single Origin
     *
     * @param string $id_origin Origin ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\Origin
     */
    public function readOrigin($id_origin)
    {
        list($response) = $this->readOriginWithHttpInfo($id_origin);
        return $response;
    }

    /**
     * Operation readOriginWithHttpInfo
     *
     * Fetches a single Origin
     *
     * @param string $id_origin Origin ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\Origin, HTTP status code, HTTP response headers (array of strings)
     */
    public function readOriginWithHttpInfo($id_origin)
    {
        // verify the required parameter 'id_origin' is set
        if ($id_origin === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_origin when calling readOrigin');
        }
        if ((strlen($id_origin) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_origin" when calling OriginsApi.readOrigin, must be smaller than or equal to 40.');
        }
        if ((strlen($id_origin) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_origin" when calling OriginsApi.readOrigin, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/origins/{id_origin}";
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
        if ($id_origin !== null) {
            $resourcePath = str_replace(
                "{" . "id_origin" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_origin),
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
                '\Softonic\CatalogApiSdk\Client\Model\Origin',
                '/origins/{id_origin}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\Origin', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\Origin', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateOrigin
     *
     * Partially updates a Origin
     *
     * @param string $id_origin Origin ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\Origin $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return void
     */
    public function updateOrigin($id_origin, $body = null)
    {
        list($response) = $this->updateOriginWithHttpInfo($id_origin, $body);
        return $response;
    }

    /**
     * Operation updateOriginWithHttpInfo
     *
     * Partially updates a Origin
     *
     * @param string $id_origin Origin ID (required)
     * @param \Softonic\CatalogApiSdk\Client\Model\Origin $body  (optional)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOriginWithHttpInfo($id_origin, $body = null)
    {
        // verify the required parameter 'id_origin' is set
        if ($id_origin === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_origin when calling updateOrigin');
        }
        if ((strlen($id_origin) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_origin" when calling OriginsApi.updateOrigin, must be smaller than or equal to 40.');
        }
        if ((strlen($id_origin) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_origin" when calling OriginsApi.updateOrigin, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/origins/{id_origin}";
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
        if ($id_origin !== null) {
            $resourcePath = str_replace(
                "{" . "id_origin" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_origin),
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
                '/origins/{id_origin}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
