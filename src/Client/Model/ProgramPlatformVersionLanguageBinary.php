<?php
/**
 * ProgramPlatformVersionLanguageBinary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Catalog API
 *
 * This API is the responsible to store all program related information.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: javier.eurrutia@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9
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
 * ProgramPlatformVersionLanguageBinary Class Doc Comment
 *
 * @category Class
 * @description Program platform version language binary model
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatformVersionLanguageBinary implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatformVersionLanguageBinary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
'id_platform' => 'string',
'id_version' => 'string',
'id_language' => 'string',
'id_binary' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => 'uuid',
'id_platform' => null,
'id_version' => 'versionSlug',
'id_language' => null,
'id_binary' => 'sha1'    ];

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
'id_version' => 'id_version',
'id_language' => 'id_language',
'id_binary' => 'id_binary'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
'id_platform' => 'setIdPlatform',
'id_version' => 'setIdVersion',
'id_language' => 'setIdLanguage',
'id_binary' => 'setIdBinary'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
'id_platform' => 'getIdPlatform',
'id_version' => 'getIdVersion',
'id_language' => 'getIdLanguage',
'id_binary' => 'getIdBinary'    ];

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
        array_key_exists('id_program', $data) && $this->container['id_program'] = $data['id_program'];
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('id_version', $data) && $this->container['id_version'] = $data['id_version'];
        array_key_exists('id_language', $data) && $this->container['id_language'] = $data['id_language'];
        array_key_exists('id_binary', $data) && $this->container['id_binary'] = $data['id_binary'];
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
     * Show all the invalid unrequired properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidUnrequiredProperties()
    {
        $invalidProperties = [];
        
        return $invalidProperties;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $invalidProperties = array_merge($invalidProperties, $this->listInvalidUnrequiredProperties());

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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties()
    {
        return count($this->listInvalidUnrequiredProperties()) === 0;
    }


    /**
     * Gets id_program
     *
     * @return string
     */
    public function getIdProgram()
    {
        return array_key_exists('id_program', $this->container) ? $this->container['id_program'] :
null;
    }

    /**
     * Sets id_program
     *
     * @param string $id_program Program ID
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
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
        return array_key_exists('id_platform', $this->container) ? $this->container['id_platform'] :
null;
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
        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_version
     *
     * @return string
     */
    public function getIdVersion()
    {
        return array_key_exists('id_version', $this->container) ? $this->container['id_version'] :
null;
    }

    /**
     * Sets id_version
     *
     * @param string $id_version Version ID
     *
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        $this->container['id_version'] = $id_version;

        return $this;
    }

    /**
     * Gets id_language
     *
     * @return string
     */
    public function getIdLanguage()
    {
        return array_key_exists('id_language', $this->container) ? $this->container['id_language'] :
null;
    }

    /**
     * Sets id_language
     *
     * @param string $id_language Language ID
     *
     * @return $this
     */
    public function setIdLanguage($id_language)
    {
        $this->container['id_language'] = $id_language;

        return $this;
    }

    /**
     * Gets id_binary
     *
     * @return string
     */
    public function getIdBinary()
    {
        return array_key_exists('id_binary', $this->container) ? $this->container['id_binary'] :
null;
    }

    /**
     * Sets id_binary
     *
     * @param string $id_binary Binary ID in SHA1-Hash format
     *
     * @return $this
     */
    public function setIdBinary($id_binary)
    {
        $this->container['id_binary'] = $id_binary;

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
        $data['id_program'] = $this->getIdProgram();
        $data['id_platform'] = $this->getIdPlatform();
        $data['id_version'] = $this->getIdVersion();
        $data['id_language'] = $this->getIdLanguage();
        $data['id_binary'] = $this->getIdBinary();

        return $data;
    }
}
