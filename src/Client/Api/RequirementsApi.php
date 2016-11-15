<?php
/**
 * RequirementsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.219-1380
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\\CatalogApiSdk\\Client\\Api;

use \Softonic\\CatalogApiSdk\ApiClient;
use \Softonic\\CatalogApiSdk\ApiException;
use \Softonic\\CatalogApiSdk\Configuration;
use \Softonic\\CatalogApiSdk\ObjectSerializer;

/**
 * RequirementsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequirementsApi
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
            $apiClient->getConfig()->setHost('https://catalog.sftapi.com');
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
     * @return RequirementsApi
     */
    public function setApiClient(\Softonic\\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findRequirement
     *
     * List of Requirements
     *
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\\CatalogApiSdk\\Client\\Model\Requirement[]
     */
    public function findRequirement()
    {
        list($response) = $this->findRequirementWithHttpInfo();
        return $response;
    }

    /**
     * Operation findRequirementWithHttpInfo
     *
     * List of Requirements
     *
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\\CatalogApiSdk\\Client\\Model\Requirement[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findRequirementWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/requirements";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement[]',
                '/requirements'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readRequirement
     *
     * Fetches a single Requirement
     *
     * @param string $id_requirement Requirement ID (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return \Softonic\\CatalogApiSdk\\Client\\Model\Requirement
     */
    public function readRequirement($id_requirement)
    {
        list($response) = $this->readRequirementWithHttpInfo($id_requirement);
        return $response;
    }

    /**
     * Operation readRequirementWithHttpInfo
     *
     * Fetches a single Requirement
     *
     * @param string $id_requirement Requirement ID (required)
     * @throws \Softonic\\CatalogApiSdk\ApiException on non-2xx response
     * @return array of \Softonic\\CatalogApiSdk\\Client\\Model\Requirement, HTTP status code, HTTP response headers (array of strings)
     */
    public function readRequirementWithHttpInfo($id_requirement)
    {
        // verify the required parameter 'id_requirement' is set
        if ($id_requirement === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_requirement when calling readRequirement');
        }
        if ((strlen($id_requirement) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_requirement" when calling RequirementsApi.readRequirement, must be smaller than or equal to 40.');
        }
        if ((strlen($id_requirement) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_requirement" when calling RequirementsApi.readRequirement, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/requirements/{id_requirement}";
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
        if ($id_requirement !== null) {
            $resourcePath = str_replace(
                "{" . "id_requirement" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_requirement),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement',
                '/requirements/{id_requirement}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\\CatalogApiSdk\\Client\\Model\Requirement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
