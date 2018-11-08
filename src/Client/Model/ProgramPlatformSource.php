<?php
/**
 * ProgramPlatformSource
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
 * ProgramPlatformSource Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatformSource implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatformSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_platform' => 'string',
        'id_source' => 'string',
        'id_store' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_platform' => null,
        'id_source' => null,
        'id_store' => null
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
        'id_program' => 'id_program',
        'id_platform' => 'id_platform',
        'id_source' => 'id_source',
        'id_store' => 'id_store'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_platform' => 'setIdPlatform',
        'id_source' => 'setIdSource',
        'id_store' => 'setIdStore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_platform' => 'getIdPlatform',
        'id_source' => 'getIdSource',
        'id_store' => 'getIdStore'
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
        $this->container['id_program'] = isset($data['id_program']) ? $data['id_program'] : null;
        $this->container['id_platform'] = isset($data['id_platform']) ? $data['id_platform'] : null;
        $this->container['id_source'] = isset($data['id_source']) ? $data['id_source'] : null;
        $this->container['id_store'] = isset($data['id_store']) ? $data['id_store'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if ((strlen($this->container['id_program']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_program']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if ((strlen($this->container['id_platform']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['id_platform']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_source'] === null) {
            $invalidProperties[] = "'id_source' can't be null";
        }
        if ((strlen($this->container['id_source']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_source', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['id_source']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_source', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_store'] === null) {
            $invalidProperties[] = "'id_store' can't be null";
        }
        if ((strlen($this->container['id_store']) > 255)) {
            $invalidProperties[] = "invalid value for 'id_store', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['id_store']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_store', the character length must be bigger than or equal to 1.";
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

        if ($this->container['id_program'] === null) {
            return false;
        }
        if ((strlen($this->container['id_program']) > 36)) {
            return false;
        }
        if ((strlen($this->container['id_program']) < 36)) {
            return false;
        }
        if ($this->container['id_platform'] === null) {
            return false;
        }
        if ((strlen($this->container['id_platform']) > 20)) {
            return false;
        }
        if ((strlen($this->container['id_platform']) < 1)) {
            return false;
        }
        if ($this->container['id_source'] === null) {
            return false;
        }
        if ((strlen($this->container['id_source']) > 20)) {
            return false;
        }
        if ((strlen($this->container['id_source']) < 1)) {
            return false;
        }
        if ($this->container['id_store'] === null) {
            return false;
        }
        if ((strlen($this->container['id_store']) > 255)) {
            return false;
        }
        if ((strlen($this->container['id_store']) < 1)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_program
     *
     * @return string
     */
    public function getIdProgram()
    {
        return $this->container['id_program'];
    }

    /**
     * Sets id_program
     *
     * @param string $id_program Program UUID
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramPlatformSource., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramPlatformSource., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_platform
     *
     * @return string
     */
    public function getIdPlatform()
    {
        return $this->container['id_platform'];
    }

    /**
     * Sets id_platform
     *
     * @param string $id_platform Platform identifier
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling ProgramPlatformSource., must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling ProgramPlatformSource., must be bigger than or equal to 1.');
        }

        $this->container['id_platform'] = $id_platform;

        return $this;
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
     * @param string $id_source Source identifier
     *
     * @return $this
     */
    public function setIdSource($id_source)
    {
        if ((strlen($id_source) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_source when calling ProgramPlatformSource., must be smaller than or equal to 20.');
        }
        if ((strlen($id_source) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_source when calling ProgramPlatformSource., must be bigger than or equal to 1.');
        }

        $this->container['id_source'] = $id_source;

        return $this;
    }

    /**
     * Gets id_store
     *
     * @return string
     */
    public function getIdStore()
    {
        return $this->container['id_store'];
    }

    /**
     * Sets id_store
     *
     * @param string $id_store Store identifier
     *
     * @return $this
     */
    public function setIdStore($id_store)
    {
        if ((strlen($id_store) > 255)) {
            throw new \InvalidArgumentException('invalid length for $id_store when calling ProgramPlatformSource., must be smaller than or equal to 255.');
        }
        if ((strlen($id_store) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_store when calling ProgramPlatformSource., must be bigger than or equal to 1.');
        }

        $this->container['id_store'] = $id_store;

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
    public function jsonSerialize()
    {
        return $this->container;
    }
}


