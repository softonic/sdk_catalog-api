<?php
/**
 * ProgramReviewTypeReviewImage
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
 * OpenAPI spec version: 2.0.280-1723
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
 * ProgramReviewTypeReviewImage Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramReviewTypeReviewImage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramReviewTypeReviewImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_review_type' => 'string',
        'id_review' => 'string',
        'id_image' => 'string',
        'path' => 'string',
        'filename' => 'string',
        'type' => 'string',
        'priority' => 'int',
        'caption' => 'string'
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
        'id_review_type' => 'id_review_type',
        'id_review' => 'id_review',
        'id_image' => 'id_image',
        'path' => 'path',
        'filename' => 'filename',
        'type' => 'type',
        'priority' => 'priority',
        'caption' => 'caption'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_review_type' => 'setIdReviewType',
        'id_review' => 'setIdReview',
        'id_image' => 'setIdImage',
        'path' => 'setPath',
        'filename' => 'setFilename',
        'type' => 'setType',
        'priority' => 'setPriority',
        'caption' => 'setCaption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_review_type' => 'getIdReviewType',
        'id_review' => 'getIdReview',
        'id_image' => 'getIdImage',
        'path' => 'getPath',
        'filename' => 'getFilename',
        'type' => 'getType',
        'priority' => 'getPriority',
        'caption' => 'getCaption'
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

    const ID_REVIEW_TYPE_CORPORATE = 'corporate';
    const ID_REVIEW_TYPE_DEVELOPER = 'developer';
    const TYPE_ICON = 'icon';
    const TYPE_SCREENSHOT = 'screenshot';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIdReviewTypeAllowableValues()
    {
        return [
            self::ID_REVIEW_TYPE_CORPORATE,
            self::ID_REVIEW_TYPE_DEVELOPER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ICON,
            self::TYPE_SCREENSHOT,
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
        $this->container['id_review_type'] = isset($data['id_review_type']) ? $data['id_review_type'] : null;
        $this->container['id_review'] = isset($data['id_review']) ? $data['id_review'] : null;
        $this->container['id_image'] = isset($data['id_image']) ? $data['id_image'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
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

        if ($this->container['id_review_type'] === null) {
            $invalid_properties[] = "'id_review_type' can't be null";
        }
        $allowed_values = ["corporate", "developer"];
        if (!in_array($this->container['id_review_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'id_review_type', must be one of 'corporate', 'developer'.";
        }

        if ($this->container['id_review'] === null) {
            $invalid_properties[] = "'id_review' can't be null";
        }
        if ((strlen($this->container['id_review']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_review', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_review']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_review', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['id_image'] === null) {
            $invalid_properties[] = "'id_image' can't be null";
        }
        if ((strlen($this->container['id_image']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_image', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_image']) < 40)) {
            $invalid_properties[] = "invalid value for 'id_image', the character length must be bigger than or equal to 40.";
        }

        if ($this->container['path'] === null) {
            $invalid_properties[] = "'path' can't be null";
        }
        if ((strlen($this->container['path']) > 255)) {
            $invalid_properties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['path']) < 1)) {
            $invalid_properties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['filename'] === null) {
            $invalid_properties[] = "'filename' can't be null";
        }
        if ((strlen($this->container['filename']) > 255)) {
            $invalid_properties[] = "invalid value for 'filename', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['filename']) < 1)) {
            $invalid_properties[] = "invalid value for 'filename', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["icon", "screenshot"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'icon', 'screenshot'.";
        }

        if (!is_null($this->container['priority']) && ($this->container['priority'] > 255)) {
            $invalid_properties[] = "invalid value for 'priority', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
            $invalid_properties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['caption']) && (strlen($this->container['caption']) > 200)) {
            $invalid_properties[] = "invalid value for 'caption', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['caption']) && (strlen($this->container['caption']) < 1)) {
            $invalid_properties[] = "invalid value for 'caption', the character length must be bigger than or equal to 1.";
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
        if ($this->container['id_review_type'] === null) {
            return false;
        }
        $allowed_values = ["corporate", "developer"];
        if (!in_array($this->container['id_review_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['id_review'] === null) {
            return false;
        }
        if (strlen($this->container['id_review']) > 36) {
            return false;
        }
        if (strlen($this->container['id_review']) < 36) {
            return false;
        }
        if ($this->container['id_image'] === null) {
            return false;
        }
        if (strlen($this->container['id_image']) > 40) {
            return false;
        }
        if (strlen($this->container['id_image']) < 40) {
            return false;
        }
        if ($this->container['path'] === null) {
            return false;
        }
        if (strlen($this->container['path']) > 255) {
            return false;
        }
        if (strlen($this->container['path']) < 1) {
            return false;
        }
        if ($this->container['filename'] === null) {
            return false;
        }
        if (strlen($this->container['filename']) > 255) {
            return false;
        }
        if (strlen($this->container['filename']) < 1) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["icon", "screenshot"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['priority'] > 255) {
            return false;
        }
        if ($this->container['priority'] < 0) {
            return false;
        }
        if (strlen($this->container['caption']) > 200) {
            return false;
        }
        if (strlen($this->container['caption']) < 1) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_review_type
     * @return string
     */
    public function getIdReviewType()
    {
        return $this->container['id_review_type'];
    }

    /**
     * Sets id_review_type
     * @param string $id_review_type Review owner type
     * @return $this
     */
    public function setIdReviewType($id_review_type)
    {
        $allowed_values = array('corporate', 'developer');
        if ((!in_array($id_review_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'id_review_type', must be one of 'corporate', 'developer'");
        }
        $this->container['id_review_type'] = $id_review_type;

        return $this;
    }

    /**
     * Gets id_review
     * @return string
     */
    public function getIdReview()
    {
        return $this->container['id_review'];
    }

    /**
     * Sets id_review
     * @param string $id_review Review identifier as UUID
     * @return $this
     */
    public function setIdReview($id_review)
    {
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 36.');
        }

        $this->container['id_review'] = $id_review;

        return $this;
    }

    /**
     * Gets id_image
     * @return string
     */
    public function getIdImage()
    {
        return $this->container['id_image'];
    }

    /**
     * Sets id_image
     * @param string $id_image Image identifier in SHA1-Hash format derived from path
     * @return $this
     */
    public function setIdImage($id_image)
    {
        if ((strlen($id_image) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_image when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 40.');
        }
        if ((strlen($id_image) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_image when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 40.');
        }

        $this->container['id_image'] = $id_image;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path Image path
     * @return $this
     */
    public function setPath($path)
    {
        if ((strlen($path) > 255)) {
            throw new \InvalidArgumentException('invalid length for $path when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 255.');
        }
        if ((strlen($path) < 1)) {
            throw new \InvalidArgumentException('invalid length for $path when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 1.');
        }

        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     * @param string $filename Image filename
     * @return $this
     */
    public function setFilename($filename)
    {
        if ((strlen($filename) > 255)) {
            throw new \InvalidArgumentException('invalid length for $filename when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 255.');
        }
        if ((strlen($filename) < 1)) {
            throw new \InvalidArgumentException('invalid length for $filename when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 1.');
        }

        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Image type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('icon', 'screenshot');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'icon', 'screenshot'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority Priority used to order the images
     * @return $this
     */
    public function setPriority($priority)
    {

        if (!is_null($priority) && ($priority > 255)) {
            throw new \InvalidArgumentException('invalid value for $priority when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 255.');
        }
        if (!is_null($priority) && ($priority < 0)) {
            throw new \InvalidArgumentException('invalid value for $priority when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 0.');
        }

        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets caption
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     * @param string $caption Small text shown usually below the image
     * @return $this
     */
    public function setCaption($caption)
    {
        if (!is_null($caption) && (strlen($caption) > 200)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling ProgramReviewTypeReviewImage., must be smaller than or equal to 200.');
        }
        if (!is_null($caption) && (strlen($caption) < 1)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling ProgramReviewTypeReviewImage., must be bigger than or equal to 1.');
        }

        $this->container['caption'] = $caption;

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


