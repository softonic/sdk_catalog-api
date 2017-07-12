<?php
/**
 * ProgramVersionLocaleReviewType
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
 * OpenAPI spec version: 2.0.307-1917
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
 * ProgramVersionLocaleReviewType Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionLocaleReviewType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionLocaleReviewType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'id_locale' => 'string',
        'id_review_type' => 'string',
        'id_review' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_version' => null,
        'id_locale' => null,
        'id_review_type' => null,
        'id_review' => null
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
        'id_version' => 'id_version',
        'id_locale' => 'id_locale',
        'id_review_type' => 'id_review_type',
        'id_review' => 'id_review'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_locale' => 'setIdLocale',
        'id_review_type' => 'setIdReviewType',
        'id_review' => 'setIdReview'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_locale' => 'getIdLocale',
        'id_review_type' => 'getIdReviewType',
        'id_review' => 'getIdReview'
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
        $this->container['id_review_type'] = isset($data['id_review_type']) ? $data['id_review_type'] : null;
        $this->container['id_review'] = isset($data['id_review']) ? $data['id_review'] : null;
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

        if ($this->container['id_review_type'] === null) {
            $invalid_properties[] = "'id_review_type' can't be null";
        }
        $allowed_values = $this->getIdReviewTypeAllowableValues();
        if (!in_array($this->container['id_review_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'id_review_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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
        if ($this->container['id_review_type'] === null) {
            return false;
        }
        $allowed_values = $this->getIdReviewTypeAllowableValues();
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocaleReviewType., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLocaleReviewType., must be bigger than or equal to 36.');
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
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocaleReviewType., must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLocaleReviewType., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocaleReviewType., must be smaller than or equal to 2.');
        }
        if ((strlen($id_locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_locale when calling ProgramVersionLocaleReviewType., must be bigger than or equal to 2.');
        }

        $this->container['id_locale'] = $id_locale;

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
        $allowed_values = $this->getIdReviewTypeAllowableValues();
        if (!in_array($id_review_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_review_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
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
     * @param string $id_review Review identifier
     * @return $this
     */
    public function setIdReview($id_review)
    {
        if ((strlen($id_review) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramVersionLocaleReviewType., must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramVersionLocaleReviewType., must be bigger than or equal to 36.');
        }

        $this->container['id_review'] = $id_review;

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


