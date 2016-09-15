<?php
/**
 * Requirement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.133-1079
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
 * Requirement Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Softonic\CatalogApiSdk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Requirement implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Requirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_requirement' => 'string',
        'name' => 'string',
        'description' => 'string'
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
        'id_requirement' => 'id_requirement',
        'name' => 'name',
        'description' => 'description'
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
        'id_requirement' => 'setIdRequirement',
        'name' => 'setName',
        'description' => 'setDescription'
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
        'id_requirement' => 'getIdRequirement',
        'name' => 'getName',
        'description' => 'getDescription'
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
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_requirement'] = isset($data['id_requirement']) ? $data['id_requirement'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id_requirement'] === null) {
            $invalid_properties[] = "'id_requirement' can't be null";
        }
        if ((strlen($this->container['id_requirement']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_requirement', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_requirement']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_requirement', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 60)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
        }

        if ((strlen($this->container['name']) < 1)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (strlen($this->container['description']) > 255)) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
        if ($this->container['id_requirement'] === null) {
            return false;
        }
        if (strlen($this->container['id_requirement']) > 40) {
            return false;
        }
        if (strlen($this->container['id_requirement']) < 1) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 60) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_requirement
     * @return string
     */
    public function getIdRequirement()
    {
        return $this->container['id_requirement'];
    }

    /**
     * Sets id_requirement
     * @param string $id_requirement Requirement ID
     * @return $this
     */
    public function setIdRequirement($id_requirement)
    {
        if ((strlen($id_requirement) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_requirement when calling Requirement., must be smaller than or equal to 40.');
        }
        if ((strlen($id_requirement) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_requirement when calling Requirement., must be bigger than or equal to 1.');
        }

        $this->container['id_requirement'] = $id_requirement;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Requirement name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Requirement., must be smaller than or equal to 60.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Requirement., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Requirement description
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Requirement., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

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


