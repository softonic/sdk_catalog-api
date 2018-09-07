<?php
/**
 * ProgramVersion
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
 * OpenAPI spec version: 2.100.0
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
 * ProgramVersion Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersion implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'name' => 'string',
        'preversion' => 'string',
        'postversion' => 'string',
        'supported_formats' => 'string',
        'id_license' => 'string',
        'age' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_version' => null,
        'name' => null,
        'preversion' => null,
        'postversion' => null,
        'supported_formats' => null,
        'id_license' => null,
        'age' => 'int32'
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
        'name' => 'name',
        'preversion' => 'preversion',
        'postversion' => 'postversion',
        'supported_formats' => 'supported_formats',
        'id_license' => 'id_license',
        'age' => 'age'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'name' => 'setName',
        'preversion' => 'setPreversion',
        'postversion' => 'setPostversion',
        'supported_formats' => 'setSupportedFormats',
        'id_license' => 'setIdLicense',
        'age' => 'setAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'name' => 'getName',
        'preversion' => 'getPreversion',
        'postversion' => 'getPostversion',
        'supported_formats' => 'getSupportedFormats',
        'id_license' => 'getIdLicense',
        'age' => 'getAge'
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
        $this->container['id_version'] = isset($data['id_version']) ? $data['id_version'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['preversion'] = isset($data['preversion']) ? $data['preversion'] : null;
        $this->container['postversion'] = isset($data['postversion']) ? $data['postversion'] : null;
        $this->container['supported_formats'] = isset($data['supported_formats']) ? $data['supported_formats'] : null;
        $this->container['id_license'] = isset($data['id_license']) ? $data['id_license'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
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
        if (!preg_match("/^[A-Za-z0-9.-]{1,60}$/", $this->container['id_version'])) {
            $invalidProperties[] = "invalid value for 'id_version', must be conform to the pattern /^[A-Za-z0-9.-]{1,60}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 60)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
        }

        if ((strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['preversion']) && (strlen($this->container['preversion']) > 255)) {
            $invalidProperties[] = "invalid value for 'preversion', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['preversion']) && (strlen($this->container['preversion']) < 1)) {
            $invalidProperties[] = "invalid value for 'preversion', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postversion']) && (strlen($this->container['postversion']) > 255)) {
            $invalidProperties[] = "invalid value for 'postversion', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['postversion']) && (strlen($this->container['postversion']) < 1)) {
            $invalidProperties[] = "invalid value for 'postversion', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['supported_formats']) && (strlen($this->container['supported_formats']) > 1340)) {
            $invalidProperties[] = "invalid value for 'supported_formats', the character length must be smaller than or equal to 1340.";
        }

        if (!is_null($this->container['supported_formats']) && (strlen($this->container['supported_formats']) < 1)) {
            $invalidProperties[] = "invalid value for 'supported_formats', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id_license']) && (strlen($this->container['id_license']) > 3)) {
            $invalidProperties[] = "invalid value for 'id_license', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['id_license']) && (strlen($this->container['id_license']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_license', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['age']) && ($this->container['age'] > 22)) {
            $invalidProperties[] = "invalid value for 'age', must be smaller than or equal to 22.";
        }

        if (!is_null($this->container['age']) && ($this->container['age'] < 0)) {
            $invalidProperties[] = "invalid value for 'age', must be bigger than or equal to 0.";
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
        if ($this->container['id_version'] === null) {
            return false;
        }
        if (!preg_match("/^[A-Za-z0-9.-]{1,60}$/", $this->container['id_version'])) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ((strlen($this->container['name']) > 60)) {
            return false;
        }
        if ((strlen($this->container['name']) < 1)) {
            return false;
        }
        if (!is_null($this->container['preversion']) && (strlen($this->container['preversion']) > 255)) {
            return false;
        }
        if (!is_null($this->container['preversion']) && (strlen($this->container['preversion']) < 1)) {
            return false;
        }
        if (!is_null($this->container['postversion']) && (strlen($this->container['postversion']) > 255)) {
            return false;
        }
        if (!is_null($this->container['postversion']) && (strlen($this->container['postversion']) < 1)) {
            return false;
        }
        if (!is_null($this->container['supported_formats']) && (strlen($this->container['supported_formats']) > 1340)) {
            return false;
        }
        if (!is_null($this->container['supported_formats']) && (strlen($this->container['supported_formats']) < 1)) {
            return false;
        }
        if (!is_null($this->container['id_license']) && (strlen($this->container['id_license']) > 3)) {
            return false;
        }
        if (!is_null($this->container['id_license']) && (strlen($this->container['id_license']) < 1)) {
            return false;
        }
        if (!is_null($this->container['age']) && ($this->container['age'] > 22)) {
            return false;
        }
        if (!is_null($this->container['age']) && ($this->container['age'] < 0)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersion., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersion., must be bigger than or equal to 36.');
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
        return $this->container['id_version'];
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

        if ((!preg_match("/^[A-Za-z0-9.-]{1,60}$/", $id_version))) {
            throw new \InvalidArgumentException("invalid value for $id_version when calling ProgramVersion., must conform to the pattern /^[A-Za-z0-9.-]{1,60}$/.");
        }

        $this->container['id_version'] = $id_version;

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
     * @param string $name Version name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProgramVersion., must be smaller than or equal to 60.');
        }
        if ((strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProgramVersion., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets preversion
     *
     * @return string
     */
    public function getPreversion()
    {
        return $this->container['preversion'];
    }

    /**
     * Sets preversion
     *
     * @param string $preversion Preversion
     *
     * @return $this
     */
    public function setPreversion($preversion)
    {
        if (!is_null($preversion) && (strlen($preversion) > 255)) {
            throw new \InvalidArgumentException('invalid length for $preversion when calling ProgramVersion., must be smaller than or equal to 255.');
        }
        if (!is_null($preversion) && (strlen($preversion) < 1)) {
            throw new \InvalidArgumentException('invalid length for $preversion when calling ProgramVersion., must be bigger than or equal to 1.');
        }

        $this->container['preversion'] = $preversion;

        return $this;
    }

    /**
     * Gets postversion
     *
     * @return string
     */
    public function getPostversion()
    {
        return $this->container['postversion'];
    }

    /**
     * Sets postversion
     *
     * @param string $postversion Postversion
     *
     * @return $this
     */
    public function setPostversion($postversion)
    {
        if (!is_null($postversion) && (strlen($postversion) > 255)) {
            throw new \InvalidArgumentException('invalid length for $postversion when calling ProgramVersion., must be smaller than or equal to 255.');
        }
        if (!is_null($postversion) && (strlen($postversion) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postversion when calling ProgramVersion., must be bigger than or equal to 1.');
        }

        $this->container['postversion'] = $postversion;

        return $this;
    }

    /**
     * Gets supported_formats
     *
     * @return string
     */
    public function getSupportedFormats()
    {
        return $this->container['supported_formats'];
    }

    /**
     * Sets supported_formats
     *
     * @param string $supported_formats Supported formats
     *
     * @return $this
     */
    public function setSupportedFormats($supported_formats)
    {
        if (!is_null($supported_formats) && (strlen($supported_formats) > 1340)) {
            throw new \InvalidArgumentException('invalid length for $supported_formats when calling ProgramVersion., must be smaller than or equal to 1340.');
        }
        if (!is_null($supported_formats) && (strlen($supported_formats) < 1)) {
            throw new \InvalidArgumentException('invalid length for $supported_formats when calling ProgramVersion., must be bigger than or equal to 1.');
        }

        $this->container['supported_formats'] = $supported_formats;

        return $this;
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
     * @param string $id_license Licenses acronym
     *
     * @return $this
     */
    public function setIdLicense($id_license)
    {
        if (!is_null($id_license) && (strlen($id_license) > 3)) {
            throw new \InvalidArgumentException('invalid length for $id_license when calling ProgramVersion., must be smaller than or equal to 3.');
        }
        if (!is_null($id_license) && (strlen($id_license) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_license when calling ProgramVersion., must be bigger than or equal to 1.');
        }

        $this->container['id_license'] = $id_license;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age Age
     *
     * @return $this
     */
    public function setAge($age)
    {

        if (!is_null($age) && ($age > 22)) {
            throw new \InvalidArgumentException('invalid value for $age when calling ProgramVersion., must be smaller than or equal to 22.');
        }
        if (!is_null($age) && ($age < 0)) {
            throw new \InvalidArgumentException('invalid value for $age when calling ProgramVersion., must be bigger than or equal to 0.');
        }

        $this->container['age'] = $age;

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

