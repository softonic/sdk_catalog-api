<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
namespace Softonic\CatalogApiInstance\Sdk\Services\Programs;

use Softonic\CatalogApiInstance\Sdk\APIClientInterface;

/**
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class CompliancesApi
{
    function __construct(APIClientInterface $api_client)
    {
        $this->api_client = $api_client;
    }

   

    /**
     * read
     * Fetches a single resource
     *
     * @param integer $id_programs Program identifier
     * @param string $id_compliances Type of the program compliance
     *
     * @return mixed
     */
    public function read($id_programs, $id_compliances)
    {

        //parse inputs
        $resource_path = "/programs/{id_programs}/compliances/{id_compliances}";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "GET";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_programs != null) {
             $resource_path = str_replace("{" . "id_programs" . "}",
                $this->api_client->toPathValue($id_programs), $resource_path);
        }
        if($id_compliances != null) {
             $resource_path = str_replace("{" . "id_compliances" . "}",
                $this->api_client->toPathValue($id_compliances), $resource_path);
        }
        if (!isset($data)) {
            $data = array();
        }
        $response = $this->api_client->callAPI($resource_path, $method,
                                              $query_params, $data,
                                              $header_params);


        if(!$response){
            return null;
        }

        return $response;


    }


    /**
     * replace
     * Entirely replaces a resource
     *
     * @param integer $id_programs Program identifier
     * @param string $id_compliances Type of the program compliance
     * @param array $data possible keys are described below
     *
     * id_programscans, string: Scan identifier (required)
     * status, string: Compliance status (required)
     *
     * @return mixed
     */
    public function replace($id_programs, $id_compliances, array $data)
    {

        //parse inputs
        $resource_path = "/programs/{id_programs}/compliances/{id_compliances}";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "PUT";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_programs != null) {
             $resource_path = str_replace("{" . "id_programs" . "}",
                $this->api_client->toPathValue($id_programs), $resource_path);
        }
        if($id_compliances != null) {
             $resource_path = str_replace("{" . "id_compliances" . "}",
                $this->api_client->toPathValue($id_compliances), $resource_path);
        }
        if (!isset($data)) {
            $data = array();
        }
        $response = $this->api_client->callAPI($resource_path, $method,
                                              $query_params, $data,
                                              $header_params);


        if(!$response){
            return null;
        }

        return $response;


    }


    /**
     * find
     * List of resources
     *
     * @param integer $id_programs Program identifier
     *
     * @return mixed
     */
    public function find($id_programs)
    {

        //parse inputs
        $resource_path = "/programs/{id_programs}/compliances";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "GET";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_programs != null) {
             $resource_path = str_replace("{" . "id_programs" . "}",
                $this->api_client->toPathValue($id_programs), $resource_path);
        }
        if (!isset($data)) {
            $data = array();
        }
        $response = $this->api_client->callAPI($resource_path, $method,
                                              $query_params, $data,
                                              $header_params);


        if(!$response){
            return null;
        }

        return $response;


    }


}

