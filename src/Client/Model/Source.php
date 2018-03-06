<?php
/**
 * Source
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.40.0
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\CatalogApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\CatalogApiSdk\ObjectSerializer;

/**
 * Source Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Source implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_source' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_source' => null,
        'name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_source' => 'id_source',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_source' => 'setIdSource',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_source' => 'getIdSource',
        'name' => 'getName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        if (array_key_exists('id_source', $data)) $this->container['id_source'] = $data['id_source'];
        if (array_key_exists('name', $data)) $this->container['name'] = $data['name'];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('id_source', $this->container) && $this->container['id_source'] === null) {
            $invalidProperties[] = "'id_source' can't be null";
        }
        if (array_key_exists('id_source', $this->container) && (strlen($this->container['id_source']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_source', the character length must be smaller than or equal to 20.";
        }

        if (array_key_exists('id_source', $this->container) && (strlen($this->container['id_source']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_source', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) > 20)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 20.";
        }

        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (array_key_exists('id_source', $this->container) && $this->container['id_source'] === null) {
            return false;
        }
        if (array_key_exists('id_source', $this->container) && (strlen($this->container['id_source']) > 20)) {
            return false;
        }
        if (array_key_exists('id_source', $this->container) && (strlen($this->container['id_source']) < 1)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) > 20)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) < 1)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_source
     *
     * @return string
     */
    public function getIdSource()
    {
        return $this->container['id_source'];
    }

    /**
     * Sets id_source
     *
     * @param string $id_source Source ID
     *
     * @return $this
     */
    public function setIdSource($id_source)
    {
        if ((strlen($id_source) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_source when calling Source., must be smaller than or equal to 20.');
        }
        if ((strlen($id_source) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_source when calling Source., must be bigger than or equal to 1.');
        }

        $this->container['id_source'] = $id_source;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Source name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Source., must be smaller than or equal to 20.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Source., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize() {
        return $this->container;
    }
}


