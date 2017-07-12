<?php
/**
 * PlatformsVersionsApi
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
 * OpenAPI spec version: 2.0.307-1917
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
 * PlatformsVersionsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlatformsVersionsApi
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
     * @return PlatformsVersionsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findPlatformVersion
     *
     * List of PlatformVersions
     *
     * @param string $id_platform Platform ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\PlatformVersion[]
     */
    public function findPlatformVersion($id_platform)
    {
        list($response) = $this->findPlatformVersionWithHttpInfo($id_platform);
        return $response;
    }

    /**
     * Operation findPlatformVersionWithHttpInfo
     *
     * List of PlatformVersions
     *
     * @param string $id_platform Platform ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\PlatformVersion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findPlatformVersionWithHttpInfo($id_platform)
    {
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform when calling findPlatformVersion');
        }
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsVersionsApi.findPlatformVersion, must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsVersionsApi.findPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/platforms/{id_platform}/versions";
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
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform),
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
                '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion[]',
                '/platforms/{id_platform}/versions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readPlatformVersion
     *
     * Fetches a single PlatformVersion
     *
     * @param string $id_platform Platform ID (required)
     * @param string $id_version Platform version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\CatalogApiSdk\Client\Model\PlatformVersion
     */
    public function readPlatformVersion($id_platform, $id_version)
    {
        list($response) = $this->readPlatformVersionWithHttpInfo($id_platform, $id_version);
        return $response;
    }

    /**
     * Operation readPlatformVersionWithHttpInfo
     *
     * Fetches a single PlatformVersion
     *
     * @param string $id_platform Platform ID (required)
     * @param string $id_version Platform version ID (required)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\CatalogApiSdk\Client\Model\PlatformVersion, HTTP status code, HTTP response headers (array of strings)
     */
    public function readPlatformVersionWithHttpInfo($id_platform, $id_version)
    {
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_platform when calling readPlatformVersion');
        }
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsVersionsApi.readPlatformVersion, must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsVersionsApi.readPlatformVersion, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling readPlatformVersion');
        }
        if ((strlen($id_version) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling PlatformsVersionsApi.readPlatformVersion, must be smaller than or equal to 40.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_version" when calling PlatformsVersionsApi.readPlatformVersion, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/platforms/{id_platform}/versions/{id_version}";
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
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                "{" . "id_platform" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_platform),
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
                '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion',
                '/platforms/{id_platform}/versions/{id_version}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Client\Model\PlatformVersion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
