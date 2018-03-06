<?php
/**
 * ProgramVersionBinary
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
 * OpenAPI spec version: 2.40.0
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
 * ProgramVersionBinary Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionBinary implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionBinary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'id_binary' => 'string',
        'id_compliance_scan' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_version' => null,
        'id_binary' => null,
        'id_compliance_scan' => null,
        'status' => null,
        'created_at' => 'date'
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
        'id_binary' => 'id_binary',
        'id_compliance_scan' => 'id_compliance_scan',
        'status' => 'status',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_binary' => 'setIdBinary',
        'id_compliance_scan' => 'setIdComplianceScan',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_binary' => 'getIdBinary',
        'id_compliance_scan' => 'getIdComplianceScan',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt'
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

    const STATUS_PENDING = 'pending';
    const STATUS_UNSCANNABLE = 'unscannable';
    const STATUS_CLEAN = 'clean';
    const STATUS_WARNING = 'warning';
    const STATUS_BLOCKED = 'blocked';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_UNSCANNABLE,
            self::STATUS_CLEAN,
            self::STATUS_WARNING,
            self::STATUS_BLOCKED,
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
        if (array_key_exists('id_program', $data)) $this->container['id_program'] = $data['id_program'];
        if (array_key_exists('id_version', $data)) $this->container['id_version'] = $data['id_version'];
        if (array_key_exists('id_binary', $data)) $this->container['id_binary'] = $data['id_binary'];
        if (array_key_exists('id_compliance_scan', $data)) $this->container['id_compliance_scan'] = $data['id_compliance_scan'];
        if (array_key_exists('status', $data)) $this->container['status'] = $data['status'];
        if (array_key_exists('created_at', $data)) $this->container['created_at'] = $data['created_at'];
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

        if (array_key_exists('id_version', $this->container) && $this->container['id_version'] === null) {
            $invalidProperties[] = "'id_version' can't be null";
        }
        if (array_key_exists('id_version', $this->container) && (strlen($this->container['id_version']) > 60)) {
            $invalidProperties[] = "invalid value for 'id_version', the character length must be smaller than or equal to 60.";
        }

        if (array_key_exists('id_version', $this->container) && (strlen($this->container['id_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_version', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('id_binary', $this->container) && $this->container['id_binary'] === null) {
            $invalidProperties[] = "'id_binary' can't be null";
        }
        if (array_key_exists('id_binary', $this->container) && (strlen($this->container['id_binary']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_binary', the character length must be smaller than or equal to 40.";
        }

        if (array_key_exists('id_binary', $this->container) && (strlen($this->container['id_binary']) < 40)) {
            $invalidProperties[] = "invalid value for 'id_binary', the character length must be bigger than or equal to 40.";
        }

        if (array_key_exists('id_compliance_scan', $this->container) && !is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_compliance_scan', the character length must be smaller than or equal to 36.";
        }

        if (array_key_exists('id_compliance_scan', $this->container) && !is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_compliance_scan', the character length must be bigger than or equal to 36.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (array_key_exists('status', $this->container) && !is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
        if (array_key_exists('id_binary', $this->container) && $this->container['id_binary'] === null) {
            return false;
        }
        if (array_key_exists('id_binary', $this->container) && (strlen($this->container['id_binary']) > 40)) {
            return false;
        }
        if (array_key_exists('id_binary', $this->container) && (strlen($this->container['id_binary']) < 40)) {
            return false;
        }
        if (array_key_exists('id_compliance_scan', $this->container) && !is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) > 36)) {
            return false;
        }
        if (array_key_exists('id_compliance_scan', $this->container) && !is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) < 36)) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (array_key_exists('status', $this->container) && !is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionBinary., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionBinary., must be bigger than or equal to 36.');
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
     * @param string $id_version Version from program
     *
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionBinary., must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionBinary., must be bigger than or equal to 1.');
        }

        $this->container['id_version'] = $id_version;

        return $this;
    }

    /**
     * Gets id_binary
     *
     * @return string
     */
    public function getIdBinary()
    {
        return $this->container['id_binary'];
    }

    /**
     * Sets id_binary
     *
     * @param string $id_binary Binary identifier in SHA1-Hash format.
     *
     * @return $this
     */
    public function setIdBinary($id_binary)
    {
        if ((strlen($id_binary) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_binary when calling ProgramVersionBinary., must be smaller than or equal to 40.');
        }
        if ((strlen($id_binary) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_binary when calling ProgramVersionBinary., must be bigger than or equal to 40.');
        }

        $this->container['id_binary'] = $id_binary;

        return $this;
    }

    /**
     * Gets id_compliance_scan
     *
     * @return string
     */
    public function getIdComplianceScan()
    {
        return $this->container['id_compliance_scan'];
    }

    /**
     * Sets id_compliance_scan
     *
     * @param string $id_compliance_scan Compliance scan UUID.
     *
     * @return $this
     */
    public function setIdComplianceScan($id_compliance_scan)
    {
        if (!is_null($id_compliance_scan) && (strlen($id_compliance_scan) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_compliance_scan when calling ProgramVersionBinary., must be smaller than or equal to 36.');
        }
        if (!is_null($id_compliance_scan) && (strlen($id_compliance_scan) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_compliance_scan when calling ProgramVersionBinary., must be bigger than or equal to 36.');
        }

        $this->container['id_compliance_scan'] = $id_compliance_scan;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Compliance status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Created date
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


