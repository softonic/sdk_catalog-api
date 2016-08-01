<?php
/**
 * ProgramsUrlTypesApi
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
 * ProgramsUrlTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsUrlTypesApi
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
     * @return ProgramsUrlTypesApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findProgramUrlType
     *
     * List of ProgramUrlTypes.
     *
     * @param string $id_program Program UUID (required)
     *
     * @return \Softonic\CatalogApiSdk\Model\ProgramUrlType[]
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgramUrlType($id_program)
    {
        list($response) = $this->findProgramUrlTypeWithHttpInfo($id_program);
        return $response;
    }


    /**
     * Operation findProgramUrlTypeWithHttpInfo
     *
     * List of ProgramUrlTypes.
     *
     * @param string $id_program Program UUID (required)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\ProgramUrlType[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findProgramUrlTypeWithHttpInfo($id_program)
    {
        
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_program when calling findProgramUrlType');
        }
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.findProgramUrlType, must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 36) {
            throw new \InvalidArgumentException('invalid length for "$id_program" when calling ProgramsUrlTypesApi.findProgramUrlType, must be bigger than or equal to 36.');
        }


        // parse inputs
        $resourcePath = "/programs/{id_program}/url-types";
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
                '\Softonic\CatalogApiSdk\Model\ProgramUrlType[]'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\ProgramUrlType[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\ProgramUrlType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
