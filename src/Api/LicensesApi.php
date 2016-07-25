<?php
/**
 * LicensesApi
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
 * OpenAPI spec version: 2.0.99-904
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
 * LicensesApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LicensesApi
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
     * @return LicensesApi
     */
    public function setApiClient(\Softonic\CatalogApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createLicense
     *
     * Creates a new License.
     *
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createLicense($body = null)
    {
        list($response) = $this->createLicenseWithHttpInfo($body);
        return $response;
    }


    /**
     * Operation createLicenseWithHttpInfo
     *
     * Creates a new License.
     *
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function createLicenseWithHttpInfo($body = null)
    {
        
        // parse inputs
        $resourcePath = "/licenses";
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
     * Operation deleteLicense
     *
     * Deletes a License.
     *
     * @param string $id_license License acronym. (required)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteLicense($id_license)
    {
        list($response) = $this->deleteLicenseWithHttpInfo($id_license);
        return $response;
    }


    /**
     * Operation deleteLicenseWithHttpInfo
     *
     * Deletes a License.
     *
     * @param string $id_license License acronym. (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function deleteLicenseWithHttpInfo($id_license)
    {
        
        // verify the required parameter 'id_license' is set
        if ($id_license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_license when calling deleteLicense');
        }
        if (strlen($id_license) > 3) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.deleteLicense, must be smaller than or equal to 3.');
        }
        if (strlen($id_license) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.deleteLicense, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/licenses/{id_license}";
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
        if ($id_license !== null) {
            $resourcePath = str_replace(
                "{" . "id_license" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_license),
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
     * Operation findLicense
     *
     * List of Licenses.
     *
     *
     * @return \Softonic\CatalogApiSdk\Model\License[]
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findLicense()
    {
        list($response) = $this->findLicenseWithHttpInfo();
        return $response;
    }


    /**
     * Operation findLicenseWithHttpInfo
     *
     * List of Licenses.
     *
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\License[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function findLicenseWithHttpInfo()
    {
        
        // parse inputs
        $resourcePath = "/licenses";
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
                '\Softonic\CatalogApiSdk\Model\License[]'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\License[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\License[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation readLicense
     *
     * Fetches a single License.
     *
     * @param string $id_license License acronym. (required)
     *
     * @return \Softonic\CatalogApiSdk\Model\License
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readLicense($id_license)
    {
        list($response) = $this->readLicenseWithHttpInfo($id_license);
        return $response;
    }


    /**
     * Operation readLicenseWithHttpInfo
     *
     * Fetches a single License.
     *
     * @param string $id_license License acronym. (required)
     *
     * @return Array of \Softonic\CatalogApiSdk\Model\License, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function readLicenseWithHttpInfo($id_license)
    {
        
        // verify the required parameter 'id_license' is set
        if ($id_license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_license when calling readLicense');
        }
        if (strlen($id_license) > 3) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.readLicense, must be smaller than or equal to 3.');
        }
        if (strlen($id_license) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.readLicense, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/licenses/{id_license}";
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
        if ($id_license !== null) {
            $resourcePath = str_replace(
                "{" . "id_license" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_license),
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
                '\Softonic\CatalogApiSdk\Model\License'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\CatalogApiSdk\Model\License', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\CatalogApiSdk\Model\License', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation replaceLicense
     *
     * Entirely replaces a License.
     *
     * @param string $id_license License acronym. (required)
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceLicense($id_license, $body = null)
    {
        list($response) = $this->replaceLicenseWithHttpInfo($id_license, $body);
        return $response;
    }


    /**
     * Operation replaceLicenseWithHttpInfo
     *
     * Entirely replaces a License.
     *
     * @param string $id_license License acronym. (required)
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function replaceLicenseWithHttpInfo($id_license, $body = null)
    {
        
        // verify the required parameter 'id_license' is set
        if ($id_license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_license when calling replaceLicense');
        }
        if (strlen($id_license) > 3) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.replaceLicense, must be smaller than or equal to 3.');
        }
        if (strlen($id_license) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.replaceLicense, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/licenses/{id_license}";
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
        if ($id_license !== null) {
            $resourcePath = str_replace(
                "{" . "id_license" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_license),
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
     * Operation updateLicense
     *
     * Partially updates a License.
     *
     * @param string $id_license License acronym. (required)
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return void
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateLicense($id_license, $body = null)
    {
        list($response) = $this->updateLicenseWithHttpInfo($id_license, $body);
        return $response;
    }


    /**
     * Operation updateLicenseWithHttpInfo
     *
     * Partially updates a License.
     *
     * @param string $id_license License acronym. (required)
     * @param \Softonic\CatalogApiSdk\Model\License $body  (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     */
    public function updateLicenseWithHttpInfo($id_license, $body = null)
    {
        
        // verify the required parameter 'id_license' is set
        if ($id_license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_license when calling updateLicense');
        }
        if (strlen($id_license) > 3) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.updateLicense, must be smaller than or equal to 3.');
        }
        if (strlen($id_license) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_license" when calling LicensesApi.updateLicense, must be bigger than or equal to 1.');
        }


        // parse inputs
        $resourcePath = "/licenses/{id_license}";
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
        if ($id_license !== null) {
            $resourcePath = str_replace(
                "{" . "id_license" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_license),
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
