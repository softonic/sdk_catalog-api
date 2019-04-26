<?php
/**
 * ProgramVersionLocaleUrlType
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
 * OpenAPI spec version: 
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
 * ProgramVersionLocaleUrlType Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionLocaleUrlType implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionLocaleUrlType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'id_locale' => 'string',
        'id_url_type' => 'string',
        'id_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_version' => null,
        'id_locale' => null,
        'id_url_type' => null,
        'id_url' => null
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
        'id_version' => 'id_version',
        'id_locale' => 'id_locale',
        'id_url_type' => 'id_url_type',
        'id_url' => 'id_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_locale' => 'setIdLocale',
        'id_url_type' => 'setIdUrlType',
        'id_url' => 'setIdUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_locale' => 'getIdLocale',
        'id_url_type' => 'getIdUrlType',
        'id_url' => 'getIdUrl'
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

    const ID_URL_TYPE_BINARY_PUBLISHER_URL = 'binary_publisher_url';
    const ID_URL_TYPE_PUBLISHER_URL = 'publisher_url';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdUrlTypeAllowableValues()
    {
        return [
            self::ID_URL_TYPE_BINARY_PUBLISHER_URL,
            self::ID_URL_TYPE_PUBLISHER_URL,
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
    public function __construct(array $data = [])
    {
        array_key_exists('id_program', $data) && $this->container['id_program'] = $data['id_program'];
        array_key_exists('id_version', $data) && $this->container['id_version'] = $data['id_version'];
        array_key_exists('id_locale', $data) && $this->container['id_locale'] = $data['id_locale'];
        array_key_exists('id_url_type', $data) && $this->container['id_url_type'] = $data['id_url_type'];
        array_key_exists('id_url', $data) && $this->container['id_url'] = $data['id_url'];
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

        if ($this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if ((strlen($this->container['id_program']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_program']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['id_version'] === null) {
            $invalidProperties[] = "'id_version' can't be null";
        }
        if ((strlen($this->container['id_version']) > 60)) {
            $invalidProperties[] = "invalid value for 'id_version', the character length must be smaller than or equal to 60.";
        }

        if ((strlen($this->container['id_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_locale'] === null) {
            $invalidProperties[] = "'id_locale' can't be null";
        }
        if ((strlen($this->container['id_locale']) > 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['id_locale']) < 2)) {
            $invalidProperties[] = "invalid value for 'id_locale', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['id_url_type'] === null) {
            $invalidProperties[] = "'id_url_type' can't be null";
        }
        $allowedValues = $this->getIdUrlTypeAllowableValues();
        if (!in_array($this->container['id_url_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'id_url_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id_url'] === null) {
            $invalidProperties[] = "'id_url' can't be null";
        }
        if ((strlen($this->container['id_url']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_url', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_url']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_url', the character length must be bigger than or equal to 36.";
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
        if ($this->offsetGet('id_version') === null) {
            return false;
        }
        if ($this->offsetGet('id_locale') === null) {
            return false;
        }
        if ($this->offsetGet('id_url_type') === null) {
            return false;
        }
        if ($this->offsetGet('id_url') === null) {
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
        if (array_key_exists('id_version', $this->container) && $this->container['id_version'] === null) {
            return false;
        }
        if (array_key_exists('id_version', $this->container) && (strlen($this->container['id_version']) > 60)) {
            return false;
        }
        if (array_key_exists('id_version', $this->container) && (strlen($this->container['id_version']) < 1)) {
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
        if (array_key_exists('id_url_type', $this->container) && $this->container['id_url_type'] === null) {
            return false;
        }
        $allowedValues = $this->getIdUrlTypeAllowableValues();
        if (array_key_exists('id_url_type', $this->container) && !in_array($this->container['id_url_type'], $allowedValues)) {
            return false;
        }
        if (array_key_exists('id_url', $this->container) && $this->container['id_url'] === null) {
            return false;
        }
        if (array_key_exists('id_url', $this->container) && (strlen($this->container['id_url']) > 36)) {
            return false;
        }
        if (array_key_exists('id_url', $this->container) && (strlen($this->container['id_url']) < 36)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocaleUrlType., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocaleUrlType., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_version
     *
     * @return string
     */
    public function getIdVersion()
    {
        return array_key_exists('id_version', $this->container) ? $this->container['id_version'] : null;
    }

    /**
     * Sets id_version
     *
     * @param string $id_version Program version identifier
     *
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocaleUrlType., must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocaleUrlType., must be bigger than or equal to 1.');
        }

        $this->container['id_version'] = $id_version;

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
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocaleUrlType., must be smaller than or equal to 2.');
        }
        if ((strlen($id_locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocaleUrlType., must be bigger than or equal to 2.');
        }

        $this->container['id_locale'] = $id_locale;

        return $this;
    }

    /**
     * Gets id_url_type
     *
     * @return string
     */
    public function getIdUrlType()
    {
        return array_key_exists('id_url_type', $this->container) ? $this->container['id_url_type'] : null;
    }

    /**
     * Sets id_url_type
     *
     * @param string $id_url_type URL types identifier
     *
     * @return $this
     */
    public function setIdUrlType($id_url_type)
    {
        $allowedValues = $this->getIdUrlTypeAllowableValues();
        if (!in_array($id_url_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_url_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id_url_type'] = $id_url_type;

        return $this;
    }

    /**
     * Gets id_url
     *
     * @return string
     */
    public function getIdUrl()
    {
        return array_key_exists('id_url', $this->container) ? $this->container['id_url'] : null;
    }

    /**
     * Sets id_url
     *
     * @param string $id_url Url identifier
     *
     * @return $this
     */
    public function setIdUrl($id_url)
    {
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_url when calling ProgramVersionLocaleUrlType., must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_url when calling ProgramVersionLocaleUrlType., must be bigger than or equal to 36.');
        }

        $this->container['id_url'] = $id_url;

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
        $data['id_version'] = $this->getIdVersion();
        $data['id_locale'] = $this->getIdLocale();
        $data['id_url_type'] = $this->getIdUrlType();
        $data['id_url'] = $this->getIdUrl();

        return $data;
    }
}


