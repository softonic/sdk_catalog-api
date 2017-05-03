<?php
/**
 * ProgramVersionLocale
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
 * OpenAPI spec version: 2.0.288-1753
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
 * ProgramVersionLocale Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionLocale implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionLocale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'id_locale' => 'string',
        'program_name' => 'string',
        'publish_date' => '\DateTime',
        'revision_date' => '\DateTime',
        'update_date' => '\DateTime',
        'status' => 'string',
        'id_editor' => 'int',
        'id_binary' => 'string',
        'about_license' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_program' => 'id_program',
        'id_version' => 'id_version',
        'id_locale' => 'id_locale',
        'program_name' => 'program_name',
        'publish_date' => 'publish_date',
        'revision_date' => 'revision_date',
        'update_date' => 'update_date',
        'status' => 'status',
        'id_editor' => 'id_editor',
        'id_binary' => 'id_binary',
        'about_license' => 'about_license'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_locale' => 'setIdLocale',
        'program_name' => 'setProgramName',
        'publish_date' => 'setPublishDate',
        'revision_date' => 'setRevisionDate',
        'update_date' => 'setUpdateDate',
        'status' => 'setStatus',
        'id_editor' => 'setIdEditor',
        'id_binary' => 'setIdBinary',
        'about_license' => 'setAboutLicense'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_locale' => 'getIdLocale',
        'program_name' => 'getProgramName',
        'publish_date' => 'getPublishDate',
        'revision_date' => 'getRevisionDate',
        'update_date' => 'getUpdateDate',
        'status' => 'getStatus',
        'id_editor' => 'getIdEditor',
        'id_binary' => 'getIdBinary',
        'about_license' => 'getAboutLicense'
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

    const STATUS_ONLINE = 'online';
    const STATUS_HIDDEN = 'hidden';
    const STATUS_BLACKLISTED = 'blacklisted';
    const STATUS_NOT_LISTED = 'not listed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ONLINE,
            self::STATUS_HIDDEN,
            self::STATUS_BLACKLISTED,
            self::STATUS_NOT_LISTED,
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
        $this->container['id_version'] = isset($data['id_version']) ? $data['id_version'] : null;
        $this->container['id_locale'] = isset($data['id_locale']) ? $data['id_locale'] : null;
        $this->container['program_name'] = isset($data['program_name']) ? $data['program_name'] : null;
        $this->container['publish_date'] = isset($data['publish_date']) ? $data['publish_date'] : null;
        $this->container['revision_date'] = isset($data['revision_date']) ? $data['revision_date'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id_editor'] = isset($data['id_editor']) ? $data['id_editor'] : null;
        $this->container['id_binary'] = isset($data['id_binary']) ? $data['id_binary'] : null;
        $this->container['about_license'] = isset($data['about_license']) ? $data['about_license'] : null;
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

        if ($this->container['id_version'] === null) {
            $invalid_properties[] = "'id_version' can't be null";
        }
        if ((strlen($this->container['id_version']) > 60)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be smaller than or equal to 60.";
        }

        if ((strlen($this->container['id_version']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id_locale'] === null) {
            $invalid_properties[] = "'id_locale' can't be null";
        }
        if ((strlen($this->container['id_locale']) > 2)) {
            $invalid_properties[] = "invalid value for 'id_locale', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['id_locale']) < 2)) {
            $invalid_properties[] = "invalid value for 'id_locale', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['program_name'] === null) {
            $invalid_properties[] = "'program_name' can't be null";
        }
        if ((strlen($this->container['program_name']) > 130)) {
            $invalid_properties[] = "invalid value for 'program_name', the character length must be smaller than or equal to 130.";
        }

        if ((strlen($this->container['program_name']) < 1)) {
            $invalid_properties[] = "invalid value for 'program_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["online", "hidden", "blacklisted", "not listed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'online', 'hidden', 'blacklisted', 'not listed'.";
        }

        if (!is_null($this->container['id_editor']) && ($this->container['id_editor'] < 0)) {
            $invalid_properties[] = "invalid value for 'id_editor', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['id_binary']) && (strlen($this->container['id_binary']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_binary', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['id_binary']) && (strlen($this->container['id_binary']) < 40)) {
            $invalid_properties[] = "invalid value for 'id_binary', the character length must be bigger than or equal to 40.";
        }

        if (!is_null($this->container['about_license']) && (strlen($this->container['about_license']) > 1200)) {
            $invalid_properties[] = "invalid value for 'about_license', the character length must be smaller than or equal to 1200.";
        }

        if (!is_null($this->container['about_license']) && (strlen($this->container['about_license']) < 1)) {
            $invalid_properties[] = "invalid value for 'about_license', the character length must be bigger than or equal to 1.";
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
        if ($this->container['id_version'] === null) {
            return false;
        }
        if (strlen($this->container['id_version']) > 60) {
            return false;
        }
        if (strlen($this->container['id_version']) < 1) {
            return false;
        }
        if ($this->container['id_locale'] === null) {
            return false;
        }
        if (strlen($this->container['id_locale']) > 2) {
            return false;
        }
        if (strlen($this->container['id_locale']) < 2) {
            return false;
        }
        if ($this->container['program_name'] === null) {
            return false;
        }
        if (strlen($this->container['program_name']) > 130) {
            return false;
        }
        if (strlen($this->container['program_name']) < 1) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["online", "hidden", "blacklisted", "not listed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['id_editor'] < 0) {
            return false;
        }
        if (strlen($this->container['id_binary']) > 40) {
            return false;
        }
        if (strlen($this->container['id_binary']) < 40) {
            return false;
        }
        if (strlen($this->container['about_license']) > 1200) {
            return false;
        }
        if (strlen($this->container['about_license']) < 1) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocale., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocale., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_version
     * @return string
     */
    public function getIdVersion()
    {
        return $this->container['id_version'];
    }

    /**
     * Sets id_version
     * @param string $id_version Program version identifier
     * @return $this
     */
    public function setIdVersion($id_version)
    {
        if ((strlen($id_version) > 60)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocale., must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocale., must be bigger than or equal to 1.');
        }

        $this->container['id_version'] = $id_version;

        return $this;
    }

    /**
     * Gets id_locale
     * @return string
     */
    public function getIdLocale()
    {
        return $this->container['id_locale'];
    }

    /**
     * Sets id_locale
     * @param string $id_locale Locale identifier
     * @return $this
     */
    public function setIdLocale($id_locale)
    {
        if ((strlen($id_locale) > 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocale., must be smaller than or equal to 2.');
        }
        if ((strlen($id_locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocale., must be bigger than or equal to 2.');
        }

        $this->container['id_locale'] = $id_locale;

        return $this;
    }

    /**
     * Gets program_name
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     * @param string $program_name Program title localized.
     * @return $this
     */
    public function setProgramName($program_name)
    {
        if ((strlen($program_name) > 130)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling ProgramVersionLocale., must be smaller than or equal to 130.');
        }
        if ((strlen($program_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling ProgramVersionLocale., must be bigger than or equal to 1.');
        }

        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets publish_date
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->container['publish_date'];
    }

    /**
     * Sets publish_date
     * @param \DateTime $publish_date Program publication date in this locale.
     * @return $this
     */
    public function setPublishDate($publish_date)
    {
        $this->container['publish_date'] = $publish_date;

        return $this;
    }

    /**
     * Gets revision_date
     * @return \DateTime
     */
    public function getRevisionDate()
    {
        return $this->container['revision_date'];
    }

    /**
     * Sets revision_date
     * @param \DateTime $revision_date Revision date
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        $this->container['revision_date'] = $revision_date;

        return $this;
    }

    /**
     * Gets update_date
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     * @param \DateTime $update_date Update date
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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
     * @param string $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('online', 'hidden', 'blacklisted', 'not listed');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'online', 'hidden', 'blacklisted', 'not listed'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets id_editor
     * @return int
     */
    public function getIdEditor()
    {
        return $this->container['id_editor'];
    }

    /**
     * Sets id_editor
     * @param int $id_editor Editors identifier
     * @return $this
     */
    public function setIdEditor($id_editor)
    {

        if (!is_null($id_editor) && ($id_editor < 0)) {
            throw new \InvalidArgumentException('invalid value for $id_editor when calling ProgramVersionLocale., must be bigger than or equal to 0.');
        }

        $this->container['id_editor'] = $id_editor;

        return $this;
    }

    /**
     * Gets id_binary
     * @return string
     */
    public function getIdBinary()
    {
        return $this->container['id_binary'];
    }

    /**
     * Sets id_binary
     * @param string $id_binary Binaries identifier created with sha1
     * @return $this
     */
    public function setIdBinary($id_binary)
    {
        if (!is_null($id_binary) && (strlen($id_binary) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_binary when calling ProgramVersionLocale., must be smaller than or equal to 40.');
        }
        if (!is_null($id_binary) && (strlen($id_binary) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_binary when calling ProgramVersionLocale., must be bigger than or equal to 40.');
        }

        $this->container['id_binary'] = $id_binary;

        return $this;
    }

    /**
     * Gets about_license
     * @return string
     */
    public function getAboutLicense()
    {
        return $this->container['about_license'];
    }

    /**
     * Sets about_license
     * @param string $about_license Extra information for program license.
     * @return $this
     */
    public function setAboutLicense($about_license)
    {
        if (!is_null($about_license) && (strlen($about_license) > 1200)) {
            throw new \InvalidArgumentException('invalid length for $about_license when calling ProgramVersionLocale., must be smaller than or equal to 1200.');
        }
        if (!is_null($about_license) && (strlen($about_license) < 1)) {
            throw new \InvalidArgumentException('invalid length for $about_license when calling ProgramVersionLocale., must be bigger than or equal to 1.');
        }

        $this->container['about_license'] = $about_license;

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


