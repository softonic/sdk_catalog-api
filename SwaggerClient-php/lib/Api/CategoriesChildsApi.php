<?php
/**
 * CategoriesChildsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.210-1337
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * CategoriesChildsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesChildsApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
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
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CategoriesChildsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCategoryChild
     *
     * Creates a new CategoryChild
     *
     * @param string $id_category Parent category identifier (required)
     * @param \Swagger\Client\Model\CategoryChild $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function createCategoryChild($id_category, $body = null)
    {
        list($response) = $this->createCategoryChildWithHttpInfo($id_category, $body);
        return $response;
    }

    /**
     * Operation createCategoryChildWithHttpInfo
     *
     * Creates a new CategoryChild
     *
     * @param string $id_category Parent category identifier (required)
     * @param \Swagger\Client\Model\CategoryChild $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCategoryChildWithHttpInfo($id_category, $body = null)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_category when calling createCategoryChild');
        }
        if ((strlen($id_category) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.createCategoryChild, must be smaller than or equal to 40.');
        }
        if ((strlen($id_category) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.createCategoryChild, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/categories/{id_category}/childs";
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
        if ($id_category !== null) {
            $resourcePath = str_replace(
                "{" . "id_category" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_category),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '/categories/{id_category}/childs'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation findCategoryChild
     *
     * List of CategoryChilds
     *
     * @param string $id_category Parent category identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CategoryChild[]
     */
    public function findCategoryChild($id_category)
    {
        list($response) = $this->findCategoryChildWithHttpInfo($id_category);
        return $response;
    }

    /**
     * Operation findCategoryChildWithHttpInfo
     *
     * List of CategoryChilds
     *
     * @param string $id_category Parent category identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CategoryChild[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findCategoryChildWithHttpInfo($id_category)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_category when calling findCategoryChild');
        }
        if ((strlen($id_category) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.findCategoryChild, must be smaller than or equal to 40.');
        }
        if ((strlen($id_category) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.findCategoryChild, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/categories/{id_category}/childs";
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
        if ($id_category !== null) {
            $resourcePath = str_replace(
                "{" . "id_category" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_category),
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
                '\Swagger\Client\Model\CategoryChild[]',
                '/categories/{id_category}/childs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CategoryChild[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CategoryChild[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation readCategoryChild
     *
     * Fetches a single CategoryChild
     *
     * @param string $id_category Parent category identifier (required)
     * @param string $id_child Child category identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CategoryChild
     */
    public function readCategoryChild($id_category, $id_child)
    {
        list($response) = $this->readCategoryChildWithHttpInfo($id_category, $id_child);
        return $response;
    }

    /**
     * Operation readCategoryChildWithHttpInfo
     *
     * Fetches a single CategoryChild
     *
     * @param string $id_category Parent category identifier (required)
     * @param string $id_child Child category identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CategoryChild, HTTP status code, HTTP response headers (array of strings)
     */
    public function readCategoryChildWithHttpInfo($id_category, $id_child)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_category when calling readCategoryChild');
        }
        if ((strlen($id_category) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.readCategoryChild, must be smaller than or equal to 40.');
        }
        if ((strlen($id_category) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.readCategoryChild, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_child' is set
        if ($id_child === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_child when calling readCategoryChild');
        }
        if ((strlen($id_child) > 40)) {
            throw new \InvalidArgumentException('invalid length for "$id_child" when calling CategoriesChildsApi.readCategoryChild, must be smaller than or equal to 40.');
        }
        if ((strlen($id_child) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$id_child" when calling CategoriesChildsApi.readCategoryChild, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/categories/{id_category}/childs/{id_child}";
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
        if ($id_category !== null) {
            $resourcePath = str_replace(
                "{" . "id_category" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_category),
                $resourcePath
            );
        }
        // path params
        if ($id_child !== null) {
            $resourcePath = str_replace(
                "{" . "id_child" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_child),
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
                '\Swagger\Client\Model\CategoryChild',
                '/categories/{id_category}/childs/{id_child}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CategoryChild', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CategoryChild', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
