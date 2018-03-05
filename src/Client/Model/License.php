<?php
/**
 * License
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
 * OpenAPI spec version: 2.39.0
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
 * License Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class License implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'License';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_license' => 'string',
        'description' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_license' => null,
        'description' => null,
        'type' => null
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
        'id_license' => 'id_license',
        'description' => 'description',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_license' => 'setIdLicense',
        'description' => 'setDescription',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_license' => 'getIdLicense',
        'description' => 'getDescription',
        'type' => 'getType'
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

    const TYPE_FREE = 'free';
    const TYPE__TRY = 'try';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FREE,
            self::TYPE__TRY,
        ];
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
        if (array_key_exists('id_license', $data)) $this->container['id_license'] = $data['id_license'];
        if (array_key_exists('description', $data)) $this->container['description'] = $data['description'];
        if (array_key_exists('type', $data)) $this->container['type'] = $data['type'];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('id_license', $this->container) && $this->container['id_license'] === null) {
            $invalidProperties[] = "'id_license' can't be null";
        }
        if (array_key_exists('id_license', $this->container) && (strlen($this->container['id_license']) > 3)) {
            $invalidProperties[] = "invalid value for 'id_license', the character length must be smaller than or equal to 3.";
        }

        if (array_key_exists('id_license', $this->container) && (strlen($this->container['id_license']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_license', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('description', $this->container) && $this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (array_key_exists('description', $this->container) && (strlen($this->container['description']) > 20)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 20.";
        }

        if (array_key_exists('description', $this->container) && (strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('type', $this->container) && $this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if (array_key_exists('id_license', $this->container) && $this->container['id_license'] === null) {
            return false;
        }
        if (array_key_exists('id_license', $this->container) && (strlen($this->container['id_license']) > 3)) {
            return false;
        }
        if (array_key_exists('id_license', $this->container) && (strlen($this->container['id_license']) < 1)) {
            return false;
        }
        if (array_key_exists('description', $this->container) && $this->container['description'] === null) {
            return false;
        }
        if (array_key_exists('description', $this->container) && (strlen($this->container['description']) > 20)) {
            return false;
        }
        if (array_key_exists('description', $this->container) && (strlen($this->container['description']) < 1)) {
            return false;
        }
        if (array_key_exists('type', $this->container) && $this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_license
     *
     * @return string
     */
    public function getIdLicense()
    {
        return $this->container['id_license'];
    }

    /**
     * Sets id_license
     *
     * @param string $id_license License acronym.
     *
     * @return $this
     */
    public function setIdLicense($id_license)
    {
        if ((strlen($id_license) > 3)) {
            throw new \InvalidArgumentException('invalid length for $id_license when calling License., must be smaller than or equal to 3.');
        }
        if ((strlen($id_license) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_license when calling License., must be bigger than or equal to 1.');
        }

        $this->container['id_license'] = $id_license;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description License description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((strlen($description) > 20)) {
            throw new \InvalidArgumentException('invalid length for $description when calling License., must be smaller than or equal to 20.');
        }
        if ((strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling License., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type License type. It can be \"try\" or \"free\".
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


