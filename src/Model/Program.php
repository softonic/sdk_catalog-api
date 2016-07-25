<?php
/**
 * Program
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

namespace Softonic\CatalogApiSdk\Model;

use \ArrayAccess;

/**
 * Program Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Program implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Program';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_program' => 'string',
        'id_developer' => 'string',
        'id_origin' => 'string',
        'id_platform' => 'string',
        'id_category' => 'string'
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
        'id_developer' => 'id_developer',
        'id_origin' => 'id_origin',
        'id_platform' => 'id_platform',
        'id_category' => 'id_category'
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
        'id_developer' => 'setIdDeveloper',
        'id_origin' => 'setIdOrigin',
        'id_platform' => 'setIdPlatform',
        'id_category' => 'setIdCategory'
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
        'id_developer' => 'getIdDeveloper',
        'id_origin' => 'getIdOrigin',
        'id_platform' => 'getIdPlatform',
        'id_category' => 'getIdCategory'
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
        $this->container['id_developer'] = isset($data['id_developer']) ? $data['id_developer'] : null;
        $this->container['id_origin'] = isset($data['id_origin']) ? $data['id_origin'] : null;
        $this->container['id_platform'] = isset($data['id_platform']) ? $data['id_platform'] : null;
        $this->container['id_category'] = isset($data['id_category']) ? $data['id_category'] : null;
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
        if (strlen($this->container['id_program']) > 36) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }
        if (strlen($this->container['id_program']) < 1) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['id_developer']) > 100) {
            $invalid_properties[] = "invalid value for 'id_developer', the character length must be smaller than or equal to 100.";
        }
        if (strlen($this->container['id_developer']) < 1) {
            $invalid_properties[] = "invalid value for 'id_developer', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['id_origin'] === null) {
            $invalid_properties[] = "'id_origin' can't be null";
        }
        if (strlen($this->container['id_origin']) > 40) {
            $invalid_properties[] = "invalid value for 'id_origin', the character length must be smaller than or equal to 40.";
        }
        if (strlen($this->container['id_origin']) < 1) {
            $invalid_properties[] = "invalid value for 'id_origin', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['id_platform'] === null) {
            $invalid_properties[] = "'id_platform' can't be null";
        }
        if (strlen($this->container['id_platform']) > 20) {
            $invalid_properties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }
        if (strlen($this->container['id_platform']) < 1) {
            $invalid_properties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['id_category'] === null) {
            $invalid_properties[] = "'id_category' can't be null";
        }
        if (strlen($this->container['id_category']) > 40) {
            $invalid_properties[] = "invalid value for 'id_category', the character length must be smaller than or equal to 40.";
        }
        if (strlen($this->container['id_category']) < 1) {
            $invalid_properties[] = "invalid value for 'id_category', the character length must be bigger than or equal to 1.";
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
        if (strlen($this->container['id_program']) < 1) {
            return false;
        }
        if (strlen($this->container['id_developer']) > 100) {
            return false;
        }
        if (strlen($this->container['id_developer']) < 1) {
            return false;
        }
        if ($this->container['id_origin'] === null) {
            return false;
        }
        if (strlen($this->container['id_origin']) > 40) {
            return false;
        }
        if (strlen($this->container['id_origin']) < 1) {
            return false;
        }
        if ($this->container['id_platform'] === null) {
            return false;
        }
        if (strlen($this->container['id_platform']) > 20) {
            return false;
        }
        if (strlen($this->container['id_platform']) < 1) {
            return false;
        }
        if ($this->container['id_category'] === null) {
            return false;
        }
        if (strlen($this->container['id_category']) > 40) {
            return false;
        }
        if (strlen($this->container['id_category']) < 1) {
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
     * @param string $id_program Program UUID or numeric ID
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        if (strlen($id_program) > 36) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling Program., must be smaller than or equal to 36.');
        }
        if (strlen($id_program) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling Program., must be bigger than or equal to 1.');
        }
        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_developer
     * @return string
     */
    public function getIdDeveloper()
    {
        return $this->container['id_developer'];
    }

    /**
     * Sets id_developer
     * @param string $id_developer Developers identifier
     * @return $this
     */
    public function setIdDeveloper($id_developer)
    {
        if (strlen($id_developer) > 100) {
            throw new \InvalidArgumentException('invalid length for $id_developer when calling Program., must be smaller than or equal to 100.');
        }
        if (strlen($id_developer) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_developer when calling Program., must be bigger than or equal to 1.');
        }
        $this->container['id_developer'] = $id_developer;

        return $this;
    }

    /**
     * Gets id_origin
     * @return string
     */
    public function getIdOrigin()
    {
        return $this->container['id_origin'];
    }

    /**
     * Sets id_origin
     * @param string $id_origin Origins identifier
     * @return $this
     */
    public function setIdOrigin($id_origin)
    {
        if (strlen($id_origin) > 40) {
            throw new \InvalidArgumentException('invalid length for $id_origin when calling Program., must be smaller than or equal to 40.');
        }
        if (strlen($id_origin) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_origin when calling Program., must be bigger than or equal to 1.');
        }
        $this->container['id_origin'] = $id_origin;

        return $this;
    }

    /**
     * Gets id_platform
     * @return string
     */
    public function getIdPlatform()
    {
        return $this->container['id_platform'];
    }

    /**
     * Sets id_platform
     * @param string $id_platform Platforms identifier
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        if (strlen($id_platform) > 20) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling Program., must be smaller than or equal to 20.');
        }
        if (strlen($id_platform) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling Program., must be bigger than or equal to 1.');
        }
        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_category
     * @return string
     */
    public function getIdCategory()
    {
        return $this->container['id_category'];
    }

    /**
     * Sets id_category
     * @param string $id_category Categories identifier
     * @return $this
     */
    public function setIdCategory($id_category)
    {
        if (strlen($id_category) > 40) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling Program., must be smaller than or equal to 40.');
        }
        if (strlen($id_category) < 1) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling Program., must be bigger than or equal to 1.');
        }
        $this->container['id_category'] = $id_category;

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
