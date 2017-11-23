<?php
/**
 * PlatformVersion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.377-2222
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\CatalogApiSdk\Client\Model;

use \ArrayAccess;

/**
 * PlatformVersion Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlatformVersion implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PlatformVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_platform' => 'string',
        'id_version' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_platform' => null,
        'id_version' => null,
        'name' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_platform' => 'id_platform',
        'id_version' => 'id_version',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_platform' => 'setIdPlatform',
        'id_version' => 'setIdVersion',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_platform' => 'getIdPlatform',
        'id_version' => 'getIdVersion',
        'name' => 'getName'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_platform'] = isset($data['id_platform']) ? $data['id_platform'] : null;
        $this->container['id_version'] = isset($data['id_version']) ? $data['id_version'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id_platform'] === null) {
            $invalid_properties[] = "'id_platform' can't be null";
        }
        if ((strlen($this->container['id_platform']) > 20)) {
            $invalid_properties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['id_platform']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_version'] === null) {
            $invalid_properties[] = "'id_version' can't be null";
        }
        if ((strlen($this->container['id_version']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_version']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 40)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['name']) < 1)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id_platform'] === null) {
            return false;
        }
        if (strlen($this->container['id_platform']) > 20) {
            return false;
        }
        if (strlen($this->container['id_platform']) < 1) {
            return false;
        }
        if ($this->container['id_version'] === null) {
            return false;
        }
        if (strlen($this->container['id_version']) > 40) {
            return false;
        }
        if (strlen($this->container['id_version']) < 1) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 40) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        return true;
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
     * @param string $id_platform Platform ID
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling PlatformVersion., must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling PlatformVersion., must be bigger than or equal to 1.');
        }

        $this->container['id_platform'] = $id_platform;

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
     * @param string $id_version Platform version ID
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        if ((strlen($id_version) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling PlatformVersion., must be smaller than or equal to 40.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling PlatformVersion., must be bigger than or equal to 1.');
        }

        $this->container['id_version'] = $id_version;

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
     * @param string $name Platform version name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PlatformVersion., must be smaller than or equal to 40.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PlatformVersion., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

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


