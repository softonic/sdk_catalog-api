<?php
/**
 * Program
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
 * Program Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Program implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Program';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_developer' => 'string',
        'id_origin' => 'string',
        'id_platform' => 'string',
        'id_category' => 'string',
        'google_compliant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_developer' => null,
        'id_origin' => null,
        'id_platform' => null,
        'id_category' => null,
        'google_compliant' => null
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
        'id_developer' => 'id_developer',
        'id_origin' => 'id_origin',
        'id_platform' => 'id_platform',
        'id_category' => 'id_category',
        'google_compliant' => 'google_compliant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_developer' => 'setIdDeveloper',
        'id_origin' => 'setIdOrigin',
        'id_platform' => 'setIdPlatform',
        'id_category' => 'setIdCategory',
        'google_compliant' => 'setGoogleCompliant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_developer' => 'getIdDeveloper',
        'id_origin' => 'getIdOrigin',
        'id_platform' => 'getIdPlatform',
        'id_category' => 'getIdCategory',
        'google_compliant' => 'getGoogleCompliant'
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
        array_key_exists('id_developer', $data) && $this->container['id_developer'] = $data['id_developer'];
        array_key_exists('id_origin', $data) && $this->container['id_origin'] = $data['id_origin'];
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('id_category', $data) && $this->container['id_category'] = $data['id_category'];
        array_key_exists('google_compliant', $data) && $this->container['google_compliant'] = $data['google_compliant'];
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

        if ((strlen($this->container['id_program']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 1.";
        }

        if (($this->container['id_developer'] !== null) && !preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $this->container['id_developer'])) {
            $invalidProperties[] = "invalid value for 'id_developer', must be conform to the pattern /^[a-z0-9]+(?:-[a-z0-9]+)*$/.";
        }

        if ($this->container['id_origin'] === null) {
            $invalidProperties[] = "'id_origin' can't be null";
        }
        if ((strlen($this->container['id_origin']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_origin', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_origin']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_origin', the character length must be bigger than or equal to 1.";
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

        if ($this->container['id_category'] === null) {
            $invalidProperties[] = "'id_category' can't be null";
        }
        if ((strlen($this->container['id_category']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_category', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_category']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_category', the character length must be bigger than or equal to 1.";
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
        if ($this->offsetGet('id_origin') === null) {
            return false;
        }
        if ($this->offsetGet('id_platform') === null) {
            return false;
        }
        if ($this->offsetGet('id_category') === null) {
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
        if (array_key_exists('id_program', $this->container) && (strlen($this->container['id_program']) < 1)) {
            return false;
        }
        if (array_key_exists('id_developer', $this->container) && ($this->container['id_developer'] !== null) && !preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $this->container['id_developer'])) {
            return false;
        }
        if (array_key_exists('id_origin', $this->container) && $this->container['id_origin'] === null) {
            return false;
        }
        if (array_key_exists('id_origin', $this->container) && (strlen($this->container['id_origin']) > 40)) {
            return false;
        }
        if (array_key_exists('id_origin', $this->container) && (strlen($this->container['id_origin']) < 1)) {
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
        if (array_key_exists('id_category', $this->container) && $this->container['id_category'] === null) {
            return false;
        }
        if (array_key_exists('id_category', $this->container) && (strlen($this->container['id_category']) > 40)) {
            return false;
        }
        if (array_key_exists('id_category', $this->container) && (strlen($this->container['id_category']) < 1)) {
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
     * @param string $id_program Program UUID or numeric ID
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling Program., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling Program., must be bigger than or equal to 1.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_developer
     *
     * @return string
     */
    public function getIdDeveloper()
    {
        return array_key_exists('id_developer', $this->container) ? $this->container['id_developer'] : null;
    }

    /**
     * Sets id_developer
     *
     * @param string $id_developer Developers identifier
     *
     * @return $this
     */
    public function setIdDeveloper($id_developer)
    {

        if (($id_developer !== null) && (!preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $id_developer))) {
            throw new \InvalidArgumentException("invalid value for $id_developer when calling Program., must conform to the pattern /^[a-z0-9]+(?:-[a-z0-9]+)*$/.");
        }

        $this->container['id_developer'] = $id_developer;

        return $this;
    }

    /**
     * Gets id_origin
     *
     * @return string
     */
    public function getIdOrigin()
    {
        return array_key_exists('id_origin', $this->container) ? $this->container['id_origin'] : null;
    }

    /**
     * Sets id_origin
     *
     * @param string $id_origin Origins identifier
     *
     * @return $this
     */
    public function setIdOrigin($id_origin)
    {
        if ((strlen($id_origin) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_origin when calling Program., must be smaller than or equal to 40.');
        }
        if ((strlen($id_origin) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_origin when calling Program., must be bigger than or equal to 1.');
        }

        $this->container['id_origin'] = $id_origin;

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
     * @param string $id_platform Platforms identifier
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        if ((strlen($id_platform) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling Program., must be smaller than or equal to 20.');
        }
        if ((strlen($id_platform) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_platform when calling Program., must be bigger than or equal to 1.');
        }

        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_category
     *
     * @return string
     */
    public function getIdCategory()
    {
        return array_key_exists('id_category', $this->container) ? $this->container['id_category'] : null;
    }

    /**
     * Sets id_category
     *
     * @param string $id_category Categories identifier
     *
     * @return $this
     */
    public function setIdCategory($id_category)
    {
        if ((strlen($id_category) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling Program., must be smaller than or equal to 40.');
        }
        if ((strlen($id_category) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_category when calling Program., must be bigger than or equal to 1.');
        }

        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets google_compliant
     *
     * @return bool
     */
    public function getGoogleCompliant()
    {
        return array_key_exists('google_compliant', $this->container) ? $this->container['google_compliant'] : null;
    }

    /**
     * Sets google_compliant
     *
     * @param bool $google_compliant Google compliant flag
     *
     * @return $this
     */
    public function setGoogleCompliant($google_compliant)
    {
        $this->container['google_compliant'] = $google_compliant;

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
        $data['id_developer'] = $this->getIdDeveloper();
        $data['id_origin'] = $this->getIdOrigin();
        $data['id_platform'] = $this->getIdPlatform();
        $data['id_category'] = $this->getIdCategory();
        $data['google_compliant'] = $this->getGoogleCompliant();

        return $data;
    }
}


