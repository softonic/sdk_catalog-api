<?php
/**
 * ProgramsVersionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.17-83
 * Contact: XXXXXXXXX@softonic.com
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
 * ProgramsVersionsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsVersionsApi
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
            $apiClient->getConfig()->setHost('http://v2.catalog.priv.sftapi.com.sft-staging.com');
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
     * @return ProgramsVersionsApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProgramVersion
     *
     * Creates a new ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createProgramVersion($id_program, $body = null)
    {
        list($response) = $this->createProgramVersionWithHttpInfo($id_program, $body);
        return $response;
    }


    /**
     * Operation createProgramVersionWithHttpInfo
     *
     * Creates a new ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createProgramVersionWithHttpInfo($id_program, $body = null)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling createProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions";
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
     * Operation deleteProgramVersion
     *
     * Deletes a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteProgramVersion($id_program, $id_version)
    {
        list($response) = $this->deleteProgramVersionWithHttpInfo($id_program, $id_version);
        return $response;
    }


    /**
     * Operation deleteProgramVersionWithHttpInfo
     *
     * Deletes a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteProgramVersionWithHttpInfo($id_program, $id_version)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling deleteProgramVersion');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling deleteProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}";
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
        }// path params
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
     * Operation findProgramVersion
     *
     * List of ProgramVersions.
     *
     * @param string $id_program Program UUID (required)
     *
     * @return \Softonic\CatalogApiSdk\Model\ProgramVersion[]
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgramVersion($id_program)
    {
        list($response) = $this->findProgramVersionWithHttpInfo($id_program);
        return $response;
    }


    /**
     * Operation findProgramVersionWithHttpInfo
     *
     * List of ProgramVersions.
     *
     * @param string $id_program Program UUID (required)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\ProgramVersion[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgramVersionWithHttpInfo($id_program)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions";
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
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Softonic\CatalogApiSdk\Model\ProgramVersion[]'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\ProgramVersion[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\ProgramVersion[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation readProgramVersion
     *
     * Fetches a single ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     *
     * @return \Softonic\CatalogApiSdk\Model\ProgramVersion
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readProgramVersion($id_program, $id_version)
    {
        list($response) = $this->readProgramVersionWithHttpInfo($id_program, $id_version);
        return $response;
    }


    /**
     * Operation readProgramVersionWithHttpInfo
     *
     * Fetches a single ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\ProgramVersion, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readProgramVersionWithHttpInfo($id_program, $id_version)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling readProgramVersion');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling readProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}";
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
        }// path params
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Softonic\CatalogApiSdk\Model\ProgramVersion'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\ProgramVersion', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\ProgramVersion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation replaceProgramVersion
     *
     * Entirely replaces a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceProgramVersion($id_program, $id_version, $body = null)
    {
        list($response) = $this->replaceProgramVersionWithHttpInfo($id_program, $id_version, $body);
        return $response;
    }


    /**
     * Operation replaceProgramVersionWithHttpInfo
     *
     * Entirely replaces a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceProgramVersionWithHttpInfo($id_program, $id_version, $body = null)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling replaceProgramVersion');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling replaceProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}";
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
        }// path params
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
     * Operation updateProgramVersion
     *
     * Partially updates a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateProgramVersion($id_program, $id_version, $body = null)
    {
        list($response) = $this->updateProgramVersionWithHttpInfo($id_program, $id_version, $body);
        return $response;
    }


    /**
     * Operation updateProgramVersionWithHttpInfo
     *
     * Partially updates a ProgramVersion.
     *
     * @param string $id_program Program UUID (required)
     * @param string $id_version Version UUID (required)
     * @param \Softonic\CatalogApiSdk\Model\ProgramVersion $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateProgramVersionWithHttpInfo($id_program, $id_version, $body = null)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling updateProgramVersion');
        }

        // verify the required parameter 'id_version' is set
        if ($id_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_version when calling updateProgramVersion');
        }

        // parse inputs
        $resourcePath = "/programs/{id_program}/versions/{id_version}";
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
        }// path params
        if ($id_version !== null) {
            $resourcePath = str_replace(
                "{" . "id_version" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_version),
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
