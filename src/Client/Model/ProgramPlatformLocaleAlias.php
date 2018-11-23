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

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

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
    public function __construct(array $data = [])
    {
        array_key_exists('id_program', $data) && $this->container['id_program'] = $data['id_program'];
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('id_locale', $data) && $this->container['id_locale'] = $data['id_locale'];
        array_key_exists('id_alias', $data) && $this->container['id_alias'] = $data['id_alias'];
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

        if (array_key_exists('id_program', $this->container) && $this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if ((strlen($this->container['id_program']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_program']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }

        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if ((strlen($this->container['id_platform']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['id_platform']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_platform', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('id_locale', $this->container) && $this->container['id_locale'] === null) {
            $invalidProperties[] = "'id_locale' can't be null";
        }
        if ((strlen($this->container['id_locale']) > 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['id_locale']) < 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be bigger than or equal to 2.";
        }

        if (array_key_exists('id_alias', $this->container) && $this->container['id_alias'] === null) {
            $invalidProperties[] = "'id_alias' can't be null";
        }
        if ((strlen($this->container['id_alias']) > 60)) {
            $invalidProperties[] = "invalid value for 'id_alias', the character length must be smaller than or equal to 60.";
        }

        if (!preg_match("/^[a-z0-9](?:[a-z0-9\\-]{0,58}[a-z0-9])?$/", $this->container['id_alias'])) {
            $invalidProperties[] = "invalid value for 'id_alias', must be conform to the pattern /^[a-z0-9](?:[a-z0-9\\-]{0,58}[a-z0-9])?$/.";
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

        if ($this->offsetGet('id_program') === null) {
            return false;
        }
        if ($this->offsetGet('id_platform') === null) {
            return false;
        }
        if ($this->offsetGet('id_locale') === null) {
            return false;
        }
        if ($this->offsetGet('id_alias') === null) {
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
        if (array_key_exists('id_alias', $this->container) && !preg_match("/^[a-z0-9](?:[a-z0-9\\-]{0,58}[a-z0-9])?$/", $this->container['id_alias'])) {
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
        return array_key_exists('id_program', $this->container) ? $this->container['id_program'] : null;
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
        return array_key_exists('id_platform', $this->container) ? $this->container['id_platform'] : null;
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
        return array_key_exists('id_locale', $this->container) ? $this->container['id_locale'] : null;
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
        return array_key_exists('id_alias', $this->container) ? $this->container['id_alias'] : null;
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
        if ((!preg_match("/^[a-z0-9](?:[a-z0-9\\-]{0,58}[a-z0-9])?$/", $id_alias))) {
            throw new \InvalidArgumentException("invalid value for $id_alias when calling ProgramPlatformLocaleAlias., must conform to the pattern /^[a-z0-9](?:[a-z0-9\\-]{0,58}[a-z0-9])?$/.");
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
    public function toArray($getAllAttributes = self::GET_SET_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        $data = [];
        $data['id_program'] = $this->getIdProgram();
        $data['id_platform'] = $this->getIdPlatform();
        $data['id_locale'] = $this->getIdLocale();
        $data['id_alias'] = $this->getIdAlias();

        return $data;
    }
}


