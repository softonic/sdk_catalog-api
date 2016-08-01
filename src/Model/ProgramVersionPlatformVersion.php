<?php
/**
 * ProgramVersionPlatformVersion
 *
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

namespace Softonic\CatalogApiSdk\Model;

use \ArrayAccess;

/**
 * ProgramVersionPlatformVersion Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Softonic\CatalogApiSdk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionPlatformVersion implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionPlatformVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_program' => 'string',
        'id_version' => 'string',
        'id_platform_version' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id_program' => 'id_program',
        'id_version' => 'id_version',
        'id_platform_version' => 'id_platform_version'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_platform_version' => 'setIdPlatformVersion'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_platform_version' => 'getIdPlatformVersion'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_program'] = isset($data['id_program']) ? $data['id_program'] : null;
        $this->container['id_version'] = isset($data['id_version']) ? $data['id_version'] : null;
        $this->container['id_platform_version'] = isset($data['id_platform_version']) ? $data['id_platform_version'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id_program'] === null) {
            $invalid_properties[] = "'id_program' can't be null";
        }
        if ((strlen($this->container['id_program']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }
        if ((strlen($this->container['id_program']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }
        if ($this->container['id_version'] === null) {
            $invalid_properties[] = "'id_version' can't be null";
        }
        if ((strlen($this->container['id_version']) > 60)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be smaller than or equal to 60.";
        }
        if ((strlen($this->container['id_version']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['id_platform_version'] === null) {
            $invalid_properties[] = "'id_platform_version' can't be null";
        }
        if ((strlen($this->container['id_platform_version']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_platform_version', the character length must be smaller than or equal to 40.";
        }
        if ((strlen($this->container['id_platform_version']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_platform_version', the character length must be bigger than or equal to 1.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['id_program'] === null) {
            return false;
        }
        if (strlen($this->container['id_program']) > 36) {
            return false;
        }
        if (strlen($this->container['id_program']) < 36) {
            return false;
        }
        if ($this->container['id_version'] === null) {
            return false;
        }
        if (strlen($this->container['id_version']) > 60) {
            return false;
        }
        if (strlen($this->container['id_version']) < 1) {
            return false;
        }
        if ($this->container['id_platform_version'] === null) {
            return false;
        }
        if (strlen($this->container['id_platform_version']) > 40) {
            return false;
        }
        if (strlen($this->container['id_platform_version']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_program
     * @return string
     */
    public function getIdProgram()
    {
        return $this->container['id_program'];
    }

    /**
     * Sets id_program
     * @param string $id_program Program UUID
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionPlatformVersion., must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 36) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionPlatformVersion., must be bigger than or equal to 36.');
        }
        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_version
     * @return string
     */
    public function getIdVersion()
    {
        return $this->container['id_version'];
    }

    /**
     * Sets id_version
     * @param string $id_version Program version ID
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        if (strlen($id_version) > 60) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionPlatformVersion., must be smaller than or equal to 60.');
        }
        if (strlen($id_version) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionPlatformVersion., must be bigger than or equal to 1.');
        }
        $this->container['id_version'] = $id_version;

        return $this;
    }

    /**
     * Gets id_platform_version
     * @return string
     */
    public function getIdPlatformVersion()
    {
        return $this->container['id_platform_version'];
    }

    /**
     * Sets id_platform_version
     * @param string $id_platform_version Platform Version ID
     * @return $this
     */
    public function setIdPlatformVersion($id_platform_version)
    {
        if (strlen($id_platform_version) > 40) {
            throw new \InvalidArgumentException('invalid length for $id_platform_version when calling ProgramVersionPlatformVersion., must be smaller than or equal to 40.');
        }
        if (strlen($id_platform_version) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_platform_version when calling ProgramVersionPlatformVersion., must be bigger than or equal to 1.');
        }
        $this->container['id_platform_version'] = $id_platform_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Softonic\CatalogApiSdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Softonic\CatalogApiSdk\ObjectSerializer::sanitizeForSerialization($this));
    }
}


