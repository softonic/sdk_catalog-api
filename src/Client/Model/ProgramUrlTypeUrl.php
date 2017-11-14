<?php
/**
 * ProgramUrlTypeUrl
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
 * OpenAPI spec version: 2.0.376-2219
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
 * ProgramUrlTypeUrl Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramUrlTypeUrl implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramUrlTypeUrl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_url_type' => 'string',
        'id_url' => 'string',
        'url' => 'string',
        'id_compliance_scan' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_url_type' => null,
        'id_url' => null,
        'url' => null,
        'id_compliance_scan' => null,
        'status' => null
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
        'id_program' => 'id_program',
        'id_url_type' => 'id_url_type',
        'id_url' => 'id_url',
        'url' => 'url',
        'id_compliance_scan' => 'id_compliance_scan',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_url_type' => 'setIdUrlType',
        'id_url' => 'setIdUrl',
        'url' => 'setUrl',
        'id_compliance_scan' => 'setIdComplianceScan',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_url_type' => 'getIdUrlType',
        'id_url' => 'getIdUrl',
        'url' => 'getUrl',
        'id_compliance_scan' => 'getIdComplianceScan',
        'status' => 'getStatus'
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

    const ID_URL_TYPE_BINARY_PUBLISHER_URL = 'binary_publisher_url';
    const ID_URL_TYPE_PUBLISHER_URL = 'publisher_url';
    const STATUS_PENDING = 'pending';
    const STATUS_UNSCANNABLE = 'unscannable';
    const STATUS_CLEAN = 'clean';
    const STATUS_WARNING = 'warning';
    const STATUS_BLOCKED = 'blocked';
    

    
    /**
     * Gets allowable values of the enum
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
     * Gets allowable values of the enum
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
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_program'] = isset($data['id_program']) ? $data['id_program'] : null;
        $this->container['id_url_type'] = isset($data['id_url_type']) ? $data['id_url_type'] : null;
        $this->container['id_url'] = isset($data['id_url']) ? $data['id_url'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['id_compliance_scan'] = isset($data['id_compliance_scan']) ? $data['id_compliance_scan'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id_program'] === null) {
            $invalid_properties[] = "'id_program' can't be null";
        }
        if ((strlen($this->container['id_program']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_program']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_program', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['id_url_type'] === null) {
            $invalid_properties[] = "'id_url_type' can't be null";
        }
        $allowed_values = $this->getIdUrlTypeAllowableValues();
        if (!in_array($this->container['id_url_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'id_url_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['id_url'] === null) {
            $invalid_properties[] = "'id_url' can't be null";
        }
        if ((strlen($this->container['id_url']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_url', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_url']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_url', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ((strlen($this->container['url']) > 2083)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 2083.";
        }

        if ((strlen($this->container['url']) < 1)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_compliance_scan', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['id_compliance_scan']) && (strlen($this->container['id_compliance_scan']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_compliance_scan', the character length must be bigger than or equal to 36.";
        }

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['id_program'] === null) {
            return false;
        }
        if (strlen($this->container['id_program']) > 36) {
            return false;
        }
        if (strlen($this->container['id_program']) < 36) {
            return false;
        }
        if ($this->container['id_url_type'] === null) {
            return false;
        }
        $allowed_values = $this->getIdUrlTypeAllowableValues();
        if (!in_array($this->container['id_url_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['id_url'] === null) {
            return false;
        }
        if (strlen($this->container['id_url']) > 36) {
            return false;
        }
        if (strlen($this->container['id_url']) < 36) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if (strlen($this->container['url']) > 2083) {
            return false;
        }
        if (strlen($this->container['url']) < 1) {
            return false;
        }
        if (strlen($this->container['id_compliance_scan']) > 36) {
            return false;
        }
        if (strlen($this->container['id_compliance_scan']) < 36) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_program
     * @return string
     */
    public function getIdProgram()
    {
        return $this->container['id_program'];
    }

    /**
     * Sets id_program
     * @param string $id_program Program UUID
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        if ((strlen($id_program) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramUrlTypeUrl., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramUrlTypeUrl., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_url_type
     * @return string
     */
    public function getIdUrlType()
    {
        return $this->container['id_url_type'];
    }

    /**
     * Sets id_url_type
     * @param string $id_url_type URL types identifier.
     * @return $this
     */
    public function setIdUrlType($id_url_type)
    {
        $allowed_values = $this->getIdUrlTypeAllowableValues();
        if (!in_array($id_url_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_url_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['id_url_type'] = $id_url_type;

        return $this;
    }

    /**
     * Gets id_url
     * @return string
     */
    public function getIdUrl()
    {
        return $this->container['id_url'];
    }

    /**
     * Sets id_url
     * @param string $id_url Url UUID
     * @return $this
     */
    public function setIdUrl($id_url)
    {
        if ((strlen($id_url) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_url when calling ProgramUrlTypeUrl., must be smaller than or equal to 36.');
        }
        if ((strlen($id_url) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_url when calling ProgramUrlTypeUrl., must be bigger than or equal to 36.');
        }

        $this->container['id_url'] = $id_url;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url Url
     * @return $this
     */
    public function setUrl($url)
    {
        if ((strlen($url) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $url when calling ProgramUrlTypeUrl., must be smaller than or equal to 2083.');
        }
        if ((strlen($url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $url when calling ProgramUrlTypeUrl., must be bigger than or equal to 1.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets id_compliance_scan
     * @return string
     */
    public function getIdComplianceScan()
    {
        return $this->container['id_compliance_scan'];
    }

    /**
     * Sets id_compliance_scan
     * @param string $id_compliance_scan Compliance scan UUID
     * @return $this
     */
    public function setIdComplianceScan($id_compliance_scan)
    {
        if (!is_null($id_compliance_scan) && (strlen($id_compliance_scan) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_compliance_scan when calling ProgramUrlTypeUrl., must be smaller than or equal to 36.');
        }
        if (!is_null($id_compliance_scan) && (strlen($id_compliance_scan) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_compliance_scan when calling ProgramUrlTypeUrl., must be bigger than or equal to 36.');
        }

        $this->container['id_compliance_scan'] = $id_compliance_scan;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Compliance status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

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


