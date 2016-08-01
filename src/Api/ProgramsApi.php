<?php
/**
 * ProgramsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.102-925
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

namespace Softonic\CatalogApiSdk\Api;

use \Softonic\CatalogApiSdk\Configuration;
use \Softonic\CatalogApiSdk\ApiClient;
use \Softonic\CatalogApiSdk\ApiException;
use \Softonic\CatalogApiSdk\ObjectSerializer;

/**
 * ProgramsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsApi
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
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://v2.catalog.sftapi.com.sft-staging.com');
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
     * @return ProgramsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgram
     *
     * Creates a new Program.
     *
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createProgram($body = null)
    {
        list($response) = $this->createProgramWithHttpInfo($body);
        return $response;
    }


    /**
     * Operation createProgramWithHttpInfo
     *
     * Creates a new Program.
     *
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createProgramWithHttpInfo($body = null)
    {
        
        // parse inputs
        $resourcePath = "/programs";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        
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
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation deleteProgram
     *
     * Deletes a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteProgram($id_program)
    {
        list($response) = $this->deleteProgramWithHttpInfo($id_program);
        return $response;
    }


    /**
     * Operation deleteProgramWithHttpInfo
     *
     * Deletes a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteProgramWithHttpInfo($id_program)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgram');
        }
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.deleteProgram, must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.deleteProgram, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/programs/{id_program}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation findProgram
     *
     * List of Programs.
     *
     * @param int $page Page of the pagination when listing programs (optional)
     * @param int $limit Number of results per page when listing programs (optional)
     *
     * @return \Softonic\CatalogApiSdk\Model\Program[]
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgram($page = null, $limit = null)
    {
        list($response) = $this->findProgramWithHttpInfo($page, $limit);
        return $response;
    }


    /**
     * Operation findProgramWithHttpInfo
     *
     * List of Programs.
     *
     * @param int $page Page of the pagination when listing programs (optional)
     * @param int $limit Number of results per page when listing programs (optional)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\Program[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgramWithHttpInfo($page = null, $limit = null)
    {
                if ($page < 1.0) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProgramsApi.findProgram, must be bigger than or equal to 1.0.');
        }

        if ($limit > 50.0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProgramsApi.findProgram, must be smaller than or equal to 50.0.');
        }
        if ($limit < 1.0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProgramsApi.findProgram, must be bigger than or equal to 1.0.');
        }


        // parse inputs
        $resourcePath = "/programs";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
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
                '\Softonic\CatalogApiSdk\Model\Program[]'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\Program[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\Program[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation readProgram
     *
     * Fetches a single Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     *
     * @return \Softonic\CatalogApiSdk\Model\Program
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readProgram($id_program)
    {
        list($response) = $this->readProgramWithHttpInfo($id_program);
        return $response;
    }


    /**
     * Operation readProgramWithHttpInfo
     *
     * Fetches a single Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\Program, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readProgramWithHttpInfo($id_program)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgram');
        }
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.readProgram, must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.readProgram, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/programs/{id_program}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
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
                '\Softonic\CatalogApiSdk\Model\Program'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\Program', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\Program', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation replaceProgram
     *
     * Entirely replaces a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceProgram($id_program, $body = null)
    {
        list($response) = $this->replaceProgramWithHttpInfo($id_program, $body);
        return $response;
    }


    /**
     * Operation replaceProgramWithHttpInfo
     *
     * Entirely replaces a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceProgramWithHttpInfo($id_program, $body = null)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgram');
        }
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.replaceProgram, must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.replaceProgram, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/programs/{id_program}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation updateProgram
     *
     * Partially updates a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateProgram($id_program, $body = null)
    {
        list($response) = $this->updateProgramWithHttpInfo($id_program, $body);
        return $response;
    }


    /**
     * Operation updateProgramWithHttpInfo
     *
     * Partially updates a Program.
     *
     * @param string $id_program Program UUID or numeric ID (required)
     * @param \Softonic\CatalogApiSdk\Model\Program $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateProgramWithHttpInfo($id_program, $body = null)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling updateProgram');
        }
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.updateProgram, must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsApi.updateProgram, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/programs/{id_program}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                "{" . "id_program" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_program),
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
