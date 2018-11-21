<?php
/**
 * CategoryChild
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
 * OpenAPI spec version: 2.108.0
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
 * CategoryChild Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryChild implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoryChild';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_category' => 'string',
        'id_child' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_category' => null,
        'id_child' => null,
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
        'id_category' => 'id_category',
        'id_child' => 'id_child',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_category' => 'setIdCategory',
        'id_child' => 'setIdChild',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_category' => 'getIdCategory',
        'id_child' => 'getIdChild',
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
    public function __construct(array $data = [])
    {
        array_key_exists('id_category', $data) && $this->container['id_category'] = $data['id_category'];
        array_key_exists('id_child', $data) && $this->container['id_child'] = $data['id_child'];
        array_key_exists('name', $data) && $this->container['name'] = $data['name'];
    }

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return boolean
     */
    public function hasAllAttributesSet()
    {
        return count($this->container) === count(self::$attributeMap);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('id_category', $this->container) && $this->container['id_category'] === null) {
            $invalidProperties[] = "'id_category' can't be null";
        }
        if ((strlen($this->container['id_category']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_category', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_category']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_category', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('id_child', $this->container) && $this->container['id_child'] === null) {
            $invalidProperties[] = "'id_child' can't be null";
        }
        if ((strlen($this->container['id_child']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_child', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_child']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_child', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model ensuring the required ones are set
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->offsetGet('id_category') === null) {
            return false;
        }
        if ($this->offsetGet('id_child') === null) {
            return false;
        }
        if ($this->offsetGet('name') === null) {
            return false;
        }

        return $this->validProperties();
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties()
    {

        if (array_key_exists('id_category', $this->container) && $this->container['id_category'] === null) {
            return false;
        }
        if (array_key_exists('id_category', $this->container) && (strlen($this->container['id_category']) > 40)) {
            return false;
        }
        if (array_key_exists('id_category', $this->container) && (strlen($this->container['id_category']) < 1)) {
            return false;
        }
        if (array_key_exists('id_child', $this->container) && $this->container['id_child'] === null) {
            return false;
        }
        if (array_key_exists('id_child', $this->container) && (strlen($this->container['id_child']) > 40)) {
            return false;
        }
        if (array_key_exists('id_child', $this->container) && (strlen($this->container['id_child']) < 1)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) > 255)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) < 1)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_category
     *
     * @return string
     */
    public function getIdCategory()
    {
        return $this->container['id_category'];
    }

    /**
     * Sets id_category
     *
     * @param string $id_category Parent category identifier
     *
     * @return $this
     */
    public function setIdCategory($id_category)
    {
        if ((strlen($id_category) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling CategoryChild., must be smaller than or equal to 40.');
        }
        if ((strlen($id_category) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling CategoryChild., must be bigger than or equal to 1.');
        }

        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets id_child
     *
     * @return string
     */
    public function getIdChild()
    {
        return $this->container['id_child'];
    }

    /**
     * Sets id_child
     *
     * @param string $id_child Child category identifier
     *
     * @return $this
     */
    public function setIdChild($id_child)
    {
        if ((strlen($id_child) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_child when calling CategoryChild., must be smaller than or equal to 40.');
        }
        if ((strlen($id_child) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_child when calling CategoryChild., must be bigger than or equal to 1.');
        }

        $this->container['id_child'] = $id_child;

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
     * @param string $name Category name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CategoryChild., must be smaller than or equal to 255.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CategoryChild., must be bigger than or equal to 1.');
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
        return array_key_exists($offset, $this->container);
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
    public function jsonSerialize()
    {
        return $this->container;
    }

    /**
     * Returns data as array.
     *
     * @param bool $getAllAttributes Should convert with all attributes or just the set ones?
     *
     * @return array
     */
    public function toArray($getAllAttributes = self::GET_ALL_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        foreach (self::$attributeMap as $attribute) {
            $data[$attribute] = $this->container[$attribute] ?? null;
        }

        return $data;
    }
}


