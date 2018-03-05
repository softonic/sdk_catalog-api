<?php
/**
 * ProgramPlatformLocaleAlias
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
 * ProgramPlatformLocaleAlias Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatformLocaleAlias implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatformLocaleAlias';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_platform' => 'string',
        'id_locale' => 'string',
        'id_alias' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_platform' => null,
        'id_locale' => null,
        'id_alias' => null
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
        'id_locale' => 'id_locale',
        'id_alias' => 'id_alias'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_platform' => 'setIdPlatform',
        'id_locale' => 'setIdLocale',
        'id_alias' => 'setIdAlias'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_platform' => 'getIdPlatform',
        'id_locale' => 'getIdLocale',
        'id_alias' => 'getIdAlias'
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
        if (array_key_exists('id_program', $data)) $this->container['id_program'] = $data['id_program'];
        if (array_key_exists('id_platform', $data)) $this->container['id_platform'] = $data['id_platform'];
        if (array_key_exists('id_locale', $data)) $this->container['id_locale'] = $data['id_locale'];
        if (array_key_exists('id_alias', $data)) $this->container['id_alias'] = $data['id_alias'];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('id_program', $this->container) && $this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if (array_key_exists('id_program', $this->container) && (strlen($this->container['id_program']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }

        if (array_key_exists('id_program', $this->container) && (strlen($this->container['id_program']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }

        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }

        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('id_locale', $this->container) && $this->container['id_locale'] === null) {
            $invalidProperties[] = "'id_locale' can't be null";
        }
        if (array_key_exists('id_locale', $this->container) && (strlen($this->container['id_locale']) > 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be smaller than or equal to 2.";
        }

        if (array_key_exists('id_locale', $this->container) && (strlen($this->container['id_locale']) < 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be bigger than or equal to 2.";
        }

        if (array_key_exists('id_alias', $this->container) && $this->container['id_alias'] === null) {
            $invalidProperties[] = "'id_alias' can't be null";
        }
        if (array_key_exists('id_alias', $this->container) && (strlen($this->container['id_alias']) > 60)) {
            $invalidProperties[] = "invalid value for 'id_alias', the character length must be smaller than or equal to 60.";
        }

        if (array_key_exists('id_alias', $this->container) && (strlen($this->container['id_alias']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_alias', the character length must be bigger than or equal to 1.";
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

        if (array_key_exists('id_program', $this->container) && $this->container['id_program'] === null) {
            return false;
        }
        if (array_key_exists('id_program', $this->container) && (strlen($this->container['id_program']) > 36)) {
            return false;
        }
        if (array_key_exists('id_program', $this->container) && (strlen($this->container['id_program']) < 36)) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) > 20)) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && (strlen($this->container['id_platform']) < 1)) {
            return false;
        }
        if (array_key_exists('id_locale', $this->container) && $this->container['id_locale'] === null) {
            return false;
        }
        if (array_key_exists('id_locale', $this->container) && (strlen($this->container['id_locale']) > 2)) {
            return false;
        }
        if (array_key_exists('id_locale', $this->container) && (strlen($this->container['id_locale']) < 2)) {
            return false;
        }
        if (array_key_exists('id_alias', $this->container) && $this->container['id_alias'] === null) {
            return false;
        }
        if (array_key_exists('id_alias', $this->container) && (strlen($this->container['id_alias']) > 60)) {
            return false;
        }
        if (array_key_exists('id_alias', $this->container) && (strlen($this->container['id_alias']) < 1)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramPlatformLocaleAlias., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramPlatformLocaleAlias., must be bigger than or equal to 36.');
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
            throw new \InvalidArgumentException('invalid length for $id_platform when calling ProgramPlatformLocaleAlias., must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling ProgramPlatformLocaleAlias., must be bigger than or equal to 1.');
        }

        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_locale
     *
     * @return string
     */
    public function getIdLocale()
    {
        return $this->container['id_locale'];
    }

    /**
     * Sets id_locale
     *
     * @param string $id_locale Locale identifier
     *
     * @return $this
     */
    public function setIdLocale($id_locale)
    {
        if ((strlen($id_locale) > 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramPlatformLocaleAlias., must be smaller than or equal to 2.');
        }
        if ((strlen($id_locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramPlatformLocaleAlias., must be bigger than or equal to 2.');
        }

        $this->container['id_locale'] = $id_locale;

        return $this;
    }

    /**
     * Gets id_alias
     *
     * @return string
     */
    public function getIdAlias()
    {
        return $this->container['id_alias'];
    }

    /**
     * Sets id_alias
     *
     * @param string $id_alias Program alias
     *
     * @return $this
     */
    public function setIdAlias($id_alias)
    {
        if ((strlen($id_alias) > 60)) {
            throw new \InvalidArgumentException('invalid length for $id_alias when calling ProgramPlatformLocaleAlias., must be smaller than or equal to 60.');
        }
        if ((strlen($id_alias) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_alias when calling ProgramPlatformLocaleAlias., must be bigger than or equal to 1.');
        }

        $this->container['id_alias'] = $id_alias;

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


