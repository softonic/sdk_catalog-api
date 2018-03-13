<?php
/**
 * ProgramReviewTypeReviewImage
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
 * OpenAPI spec version: 2.42.0
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
 * ProgramReviewTypeReviewImage Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramReviewTypeReviewImage implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramReviewTypeReviewImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
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
        'width' => 'int',
        'height' => 'int',
        'priority' => 'int',
        'caption' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_review_type' => null,
        'id_review' => null,
        'id_image' => null,
        'path' => null,
        'filename' => null,
        'type' => null,
        'width' => 'int32',
        'height' => 'int32',
        'priority' => 'int32',
        'caption' => null
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
        'id_review_type' => 'id_review_type',
        'id_review' => 'id_review',
        'id_image' => 'id_image',
        'path' => 'path',
        'filename' => 'filename',
        'type' => 'type',
        'width' => 'width',
        'height' => 'height',
        'priority' => 'priority',
        'caption' => 'caption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
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
        'width' => 'setWidth',
        'height' => 'setHeight',
        'priority' => 'setPriority',
        'caption' => 'setCaption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
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
        'width' => 'getWidth',
        'height' => 'getHeight',
        'priority' => 'getPriority',
        'caption' => 'getCaption'
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

    const ID_REVIEW_TYPE_CORPORATE = 'corporate';
    const ID_REVIEW_TYPE_DEVELOPER = 'developer';
    const TYPE_ICON = 'icon';
    const TYPE_SCREENSHOT = 'screenshot';
    

    
    /**
     * Gets allowable values of the enum
     *
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
     *
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
        if (array_key_exists('id_review_type', $data)) $this->container['id_review_type'] = $data['id_review_type'];
        if (array_key_exists('id_review', $data)) $this->container['id_review'] = $data['id_review'];
        if (array_key_exists('id_image', $data)) $this->container['id_image'] = $data['id_image'];
        if (array_key_exists('path', $data)) $this->container['path'] = $data['path'];
        if (array_key_exists('filename', $data)) $this->container['filename'] = $data['filename'];
        if (array_key_exists('type', $data)) $this->container['type'] = $data['type'];
        if (array_key_exists('width', $data)) $this->container['width'] = $data['width'];
        if (array_key_exists('height', $data)) $this->container['height'] = $data['height'];
        if (array_key_exists('priority', $data)) $this->container['priority'] = $data['priority'];
        if (array_key_exists('caption', $data)) $this->container['caption'] = $data['caption'];
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

        if (array_key_exists('id_review_type', $this->container) && $this->container['id_review_type'] === null) {
            $invalidProperties[] = "'id_review_type' can't be null";
        }
        $allowedValues = $this->getIdReviewTypeAllowableValues();
        if (array_key_exists('id_review_type', $this->container) && !in_array($this->container['id_review_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'id_review_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (array_key_exists('id_review', $this->container) && $this->container['id_review'] === null) {
            $invalidProperties[] = "'id_review' can't be null";
        }
        if (array_key_exists('id_review', $this->container) && (strlen($this->container['id_review']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_review', the character length must be smaller than or equal to 36.";
        }

        if (array_key_exists('id_review', $this->container) && (strlen($this->container['id_review']) < 36)) {
            $invalidProperties[] = "invalid value for 'id_review', the character length must be bigger than or equal to 36.";
        }

        if (array_key_exists('id_image', $this->container) && $this->container['id_image'] === null) {
            $invalidProperties[] = "'id_image' can't be null";
        }
        if (array_key_exists('id_image', $this->container) && (strlen($this->container['id_image']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_image', the character length must be smaller than or equal to 40.";
        }

        if (array_key_exists('id_image', $this->container) && (strlen($this->container['id_image']) < 40)) {
            $invalidProperties[] = "invalid value for 'id_image', the character length must be bigger than or equal to 40.";
        }

        if (array_key_exists('path', $this->container) && $this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if (array_key_exists('path', $this->container) && (strlen($this->container['path']) > 255)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
        }

        if (array_key_exists('path', $this->container) && (strlen($this->container['path']) < 1)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('filename', $this->container) && $this->container['filename'] === null) {
            $invalidProperties[] = "'filename' can't be null";
        }
        if (array_key_exists('filename', $this->container) && (strlen($this->container['filename']) > 255)) {
            $invalidProperties[] = "invalid value for 'filename', the character length must be smaller than or equal to 255.";
        }

        if (array_key_exists('filename', $this->container) && (strlen($this->container['filename']) < 1)) {
            $invalidProperties[] = "invalid value for 'filename', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('type', $this->container) && $this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (array_key_exists('priority', $this->container) && !is_null($this->container['priority']) && ($this->container['priority'] > 255)) {
            $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 255.";
        }

        if (array_key_exists('priority', $this->container) && !is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
            $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
        }

        if (array_key_exists('caption', $this->container) && !is_null($this->container['caption']) && (strlen($this->container['caption']) > 200)) {
            $invalidProperties[] = "invalid value for 'caption', the character length must be smaller than or equal to 200.";
        }

        if (array_key_exists('caption', $this->container) && !is_null($this->container['caption']) && (strlen($this->container['caption']) < 1)) {
            $invalidProperties[] = "invalid value for 'caption', the character length must be bigger than or equal to 1.";
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
        if (array_key_exists('id_review_type', $this->container) && $this->container['id_review_type'] === null) {
            return false;
        }
        $allowedValues = $this->getIdReviewTypeAllowableValues();
        if (array_key_exists('id_review_type', $this->container) && !in_array($this->container['id_review_type'], $allowedValues)) {
            return false;
        }
        if (array_key_exists('id_review', $this->container) && $this->container['id_review'] === null) {
            return false;
        }
        if (array_key_exists('id_review', $this->container) && (strlen($this->container['id_review']) > 36)) {
            return false;
        }
        if (array_key_exists('id_review', $this->container) && (strlen($this->container['id_review']) < 36)) {
            return false;
        }
        if (array_key_exists('id_image', $this->container) && $this->container['id_image'] === null) {
            return false;
        }
        if (array_key_exists('id_image', $this->container) && (strlen($this->container['id_image']) > 40)) {
            return false;
        }
        if (array_key_exists('id_image', $this->container) && (strlen($this->container['id_image']) < 40)) {
            return false;
        }
        if (array_key_exists('path', $this->container) && $this->container['path'] === null) {
            return false;
        }
        if (array_key_exists('path', $this->container) && (strlen($this->container['path']) > 255)) {
            return false;
        }
        if (array_key_exists('path', $this->container) && (strlen($this->container['path']) < 1)) {
            return false;
        }
        if (array_key_exists('filename', $this->container) && $this->container['filename'] === null) {
            return false;
        }
        if (array_key_exists('filename', $this->container) && (strlen($this->container['filename']) > 255)) {
            return false;
        }
        if (array_key_exists('filename', $this->container) && (strlen($this->container['filename']) < 1)) {
            return false;
        }
        if (array_key_exists('type', $this->container) && $this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if (array_key_exists('priority', $this->container) && !is_null($this->container['priority']) && ($this->container['priority'] > 255)) {
            return false;
        }
        if (array_key_exists('priority', $this->container) && !is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
            return false;
        }
        if (array_key_exists('caption', $this->container) && !is_null($this->container['caption']) && (strlen($this->container['caption']) > 200)) {
            return false;
        }
        if (array_key_exists('caption', $this->container) && !is_null($this->container['caption']) && (strlen($this->container['caption']) < 1)) {
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
     *
     * @return string
     */
    public function getIdReviewType()
    {
        return $this->container['id_review_type'];
    }

    /**
     * Sets id_review_type
     *
     * @param string $id_review_type Review owner type
     *
     * @return $this
     */
    public function setIdReviewType($id_review_type)
    {
        $allowedValues = $this->getIdReviewTypeAllowableValues();
        if (!in_array($id_review_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_review_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id_review_type'] = $id_review_type;

        return $this;
    }

    /**
     * Gets id_review
     *
     * @return string
     */
    public function getIdReview()
    {
        return $this->container['id_review'];
    }

    /**
     * Sets id_review
     *
     * @param string $id_review Review identifier as UUID
     *
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
     *
     * @return string
     */
    public function getIdImage()
    {
        return $this->container['id_image'];
    }

    /**
     * Sets id_image
     *
     * @param string $id_image Image identifier in SHA1-Hash format derived from path
     *
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
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path Image path
     *
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
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename Image filename
     *
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
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Image type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Image width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Image width
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority Priority used to order the images
     *
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
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption Small text shown usually below the image
     *
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
}


