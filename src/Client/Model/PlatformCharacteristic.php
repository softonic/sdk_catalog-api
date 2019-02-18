<?php
/**
 * PlatformCharacteristic
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
 * OpenAPI spec version: 2.111.0
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
 * PlatformCharacteristic Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlatformCharacteristic implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlatformCharacteristic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_platform' => 'string',
        'id_characteristic' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_platform' => null,
        'id_characteristic' => null,
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
        'id_platform' => 'id_platform',
        'id_characteristic' => 'id_characteristic',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_platform' => 'setIdPlatform',
        'id_characteristic' => 'setIdCharacteristic',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_platform' => 'getIdPlatform',
        'id_characteristic' => 'getIdCharacteristic',
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
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('id_characteristic', $data) && $this->container['id_characteristic'] = $data['id_characteristic'];
        array_key_exists('name', $data) && $this->container['name'] = $data['name'];
    }

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return bool
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

        if ($this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if ((strlen($this->container['id_platform']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['id_platform']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_characteristic'] === null) {
            $invalidProperties[] = "'id_characteristic' can't be null";
        }
        if ((strlen($this->container['id_characteristic']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_characteristic', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_characteristic']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_characteristic', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 40)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
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

        if ($this->offsetGet('id_platform') === null) {
            return false;
        }
        if ($this->offsetGet('id_characteristic') === null) {
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

        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) > 20)) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) < 1)) {
            return false;
        }
        if (array_key_exists('id_characteristic', $this->container) && $this->container['id_characteristic'] === null) {
            return false;
        }
        if (array_key_exists('id_characteristic', $this->container) && (strlen($this->container['id_characteristic']) > 40)) {
            return false;
        }
        if (array_key_exists('id_characteristic', $this->container) && (strlen($this->container['id_characteristic']) < 1)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) > 40)) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) < 1)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_platform
     *
     * @return string
     */
    public function getIdPlatform()
    {
        return array_key_exists('id_platform', $this->container) ? $this->container['id_platform'] : null;
    }

    /**
     * Sets id_platform
     *
     * @param string $id_platform Platform ID
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling PlatformCharacteristic., must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling PlatformCharacteristic., must be bigger than or equal to 1.');
        }

        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_characteristic
     *
     * @return string
     */
    public function getIdCharacteristic()
    {
        return array_key_exists('id_characteristic', $this->container) ? $this->container['id_characteristic'] : null;
    }

    /**
     * Sets id_characteristic
     *
     * @param string $id_characteristic Platform characteristic ID
     *
     * @return $this
     */
    public function setIdCharacteristic($id_characteristic)
    {
        if ((strlen($id_characteristic) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_characteristic when calling PlatformCharacteristic., must be smaller than or equal to 40.');
        }
        if ((strlen($id_characteristic) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_characteristic when calling PlatformCharacteristic., must be bigger than or equal to 1.');
        }

        $this->container['id_characteristic'] = $id_characteristic;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return array_key_exists('name', $this->container) ? $this->container['name'] : null;
    }

    /**
     * Sets name
     *
     * @param string $name Platform characteristic name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PlatformCharacteristic., must be smaller than or equal to 40.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PlatformCharacteristic., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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
    public function toArray($getAllAttributes = self::GET_SET_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        $data = [];
        $data['id_platform'] = $this->getIdPlatform();
        $data['id_characteristic'] = $this->getIdCharacteristic();
        $data['name'] = $this->getName();

        return $data;
    }
}


