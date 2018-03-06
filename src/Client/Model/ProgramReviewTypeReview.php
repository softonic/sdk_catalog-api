<?php
/**
 * ProgramReviewTypeReview
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
 * ProgramReviewTypeReview Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramReviewTypeReview implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramReviewTypeReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_review_type' => 'string',
        'id_review' => 'string',
        'public_note' => 'string',
        'type' => 'string',
        'rating' => 'int',
        'headline' => 'string',
        'lead' => 'string',
        'body' => 'string',
        'conclusion' => 'string',
        'changes' => 'string',
        'extra' => 'string',
        'pros' => 'string[]',
        'cons' => 'string[]'
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
        'public_note' => null,
        'type' => null,
        'rating' => 'int32',
        'headline' => null,
        'lead' => null,
        'body' => null,
        'conclusion' => null,
        'changes' => null,
        'extra' => null,
        'pros' => null,
        'cons' => null
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
        'public_note' => 'public_note',
        'type' => 'type',
        'rating' => 'rating',
        'headline' => 'headline',
        'lead' => 'lead',
        'body' => 'body',
        'conclusion' => 'conclusion',
        'changes' => 'changes',
        'extra' => 'extra',
        'pros' => 'pros',
        'cons' => 'cons'
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
        'public_note' => 'setPublicNote',
        'type' => 'setType',
        'rating' => 'setRating',
        'headline' => 'setHeadline',
        'lead' => 'setLead',
        'body' => 'setBody',
        'conclusion' => 'setConclusion',
        'changes' => 'setChanges',
        'extra' => 'setExtra',
        'pros' => 'setPros',
        'cons' => 'setCons'
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
        'public_note' => 'getPublicNote',
        'type' => 'getType',
        'rating' => 'getRating',
        'headline' => 'getHeadline',
        'lead' => 'getLead',
        'body' => 'getBody',
        'conclusion' => 'getConclusion',
        'changes' => 'getChanges',
        'extra' => 'getExtra',
        'pros' => 'getPros',
        'cons' => 'getCons'
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
    const TYPE_AUTO = 'auto';
    const TYPE_SEMIAUTO = 'semiauto';
    const TYPE_STANDARD = 'standard';
    const TYPE_TOP = 'top';
    const TYPE_UNDETERMINED = 'undetermined';
    const TYPE_FASTCLONED = 'fastcloned';
    const TYPE_NOREVIEW = 'noreview';
    const TYPE_PREVIEW = 'preview';
    const TYPE_CORE = 'core';
    const TYPE_TRANSLATED = 'translated';
    const TYPE_ROBOTINA = 'robotina';
    

    
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
            self::TYPE_AUTO,
            self::TYPE_SEMIAUTO,
            self::TYPE_STANDARD,
            self::TYPE_TOP,
            self::TYPE_UNDETERMINED,
            self::TYPE_FASTCLONED,
            self::TYPE_NOREVIEW,
            self::TYPE_PREVIEW,
            self::TYPE_CORE,
            self::TYPE_TRANSLATED,
            self::TYPE_ROBOTINA,
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
    public function __construct(array $data = null)
    {
        if (array_key_exists('id_program', $data)) $this->container['id_program'] = $data['id_program'];
        if (array_key_exists('id_review_type', $data)) $this->container['id_review_type'] = $data['id_review_type'];
        if (array_key_exists('id_review', $data)) $this->container['id_review'] = $data['id_review'];
        if (array_key_exists('public_note', $data)) $this->container['public_note'] = $data['public_note'];
        if (array_key_exists('type', $data)) $this->container['type'] = $data['type'];
        if (array_key_exists('rating', $data)) $this->container['rating'] = $data['rating'];
        if (array_key_exists('headline', $data)) $this->container['headline'] = $data['headline'];
        if (array_key_exists('lead', $data)) $this->container['lead'] = $data['lead'];
        if (array_key_exists('body', $data)) $this->container['body'] = $data['body'];
        if (array_key_exists('conclusion', $data)) $this->container['conclusion'] = $data['conclusion'];
        if (array_key_exists('changes', $data)) $this->container['changes'] = $data['changes'];
        if (array_key_exists('extra', $data)) $this->container['extra'] = $data['extra'];
        if (array_key_exists('pros', $data)) $this->container['pros'] = $data['pros'];
        if (array_key_exists('cons', $data)) $this->container['cons'] = $data['cons'];
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

        if (array_key_exists('public_note', $this->container) && !is_null($this->container['public_note']) && (strlen($this->container['public_note']) > 3500)) {
            $invalidProperties[] = "invalid value for 'public_note', the character length must be smaller than or equal to 3500.";
        }

        if (array_key_exists('public_note', $this->container) && !is_null($this->container['public_note']) && (strlen($this->container['public_note']) < 1)) {
            $invalidProperties[] = "invalid value for 'public_note', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (array_key_exists('rating', $this->container) && !is_null($this->container['rating']) && ($this->container['rating'] > 10)) {
            $invalidProperties[] = "invalid value for 'rating', must be smaller than or equal to 10.";
        }

        if (array_key_exists('rating', $this->container) && !is_null($this->container['rating']) && ($this->container['rating'] < 0)) {
            $invalidProperties[] = "invalid value for 'rating', must be bigger than or equal to 0.";
        }

        if (array_key_exists('headline', $this->container) && !is_null($this->container['headline']) && (strlen($this->container['headline']) > 2000)) {
            $invalidProperties[] = "invalid value for 'headline', the character length must be smaller than or equal to 2000.";
        }

        if (array_key_exists('headline', $this->container) && !is_null($this->container['headline']) && (strlen($this->container['headline']) < 1)) {
            $invalidProperties[] = "invalid value for 'headline', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('lead', $this->container) && !is_null($this->container['lead']) && (strlen($this->container['lead']) > 2000)) {
            $invalidProperties[] = "invalid value for 'lead', the character length must be smaller than or equal to 2000.";
        }

        if (array_key_exists('lead', $this->container) && !is_null($this->container['lead']) && (strlen($this->container['lead']) < 1)) {
            $invalidProperties[] = "invalid value for 'lead', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('body', $this->container) && !is_null($this->container['body']) && (strlen($this->container['body']) > 65535)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 65535.";
        }

        if (array_key_exists('body', $this->container) && !is_null($this->container['body']) && (strlen($this->container['body']) < 1)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('conclusion', $this->container) && !is_null($this->container['conclusion']) && (strlen($this->container['conclusion']) > 4000)) {
            $invalidProperties[] = "invalid value for 'conclusion', the character length must be smaller than or equal to 4000.";
        }

        if (array_key_exists('conclusion', $this->container) && !is_null($this->container['conclusion']) && (strlen($this->container['conclusion']) < 1)) {
            $invalidProperties[] = "invalid value for 'conclusion', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('changes', $this->container) && !is_null($this->container['changes']) && (strlen($this->container['changes']) > 10500)) {
            $invalidProperties[] = "invalid value for 'changes', the character length must be smaller than or equal to 10500.";
        }

        if (array_key_exists('changes', $this->container) && !is_null($this->container['changes']) && (strlen($this->container['changes']) < 1)) {
            $invalidProperties[] = "invalid value for 'changes', the character length must be bigger than or equal to 1.";
        }

        if (array_key_exists('extra', $this->container) && !is_null($this->container['extra']) && (strlen($this->container['extra']) > 65535)) {
            $invalidProperties[] = "invalid value for 'extra', the character length must be smaller than or equal to 65535.";
        }

        if (array_key_exists('extra', $this->container) && !is_null($this->container['extra']) && (strlen($this->container['extra']) < 1)) {
            $invalidProperties[] = "invalid value for 'extra', the character length must be bigger than or equal to 1.";
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
        if (array_key_exists('public_note', $this->container) && !is_null($this->container['public_note']) && (strlen($this->container['public_note']) > 3500)) {
            return false;
        }
        if (array_key_exists('public_note', $this->container) && !is_null($this->container['public_note']) && (strlen($this->container['public_note']) < 1)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (array_key_exists('type', $this->container) && !is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if (array_key_exists('rating', $this->container) && !is_null($this->container['rating']) && ($this->container['rating'] > 10)) {
            return false;
        }
        if (array_key_exists('rating', $this->container) && !is_null($this->container['rating']) && ($this->container['rating'] < 0)) {
            return false;
        }
        if (array_key_exists('headline', $this->container) && !is_null($this->container['headline']) && (strlen($this->container['headline']) > 2000)) {
            return false;
        }
        if (array_key_exists('headline', $this->container) && !is_null($this->container['headline']) && (strlen($this->container['headline']) < 1)) {
            return false;
        }
        if (array_key_exists('lead', $this->container) && !is_null($this->container['lead']) && (strlen($this->container['lead']) > 2000)) {
            return false;
        }
        if (array_key_exists('lead', $this->container) && !is_null($this->container['lead']) && (strlen($this->container['lead']) < 1)) {
            return false;
        }
        if (array_key_exists('body', $this->container) && !is_null($this->container['body']) && (strlen($this->container['body']) > 65535)) {
            return false;
        }
        if (array_key_exists('body', $this->container) && !is_null($this->container['body']) && (strlen($this->container['body']) < 1)) {
            return false;
        }
        if (array_key_exists('conclusion', $this->container) && !is_null($this->container['conclusion']) && (strlen($this->container['conclusion']) > 4000)) {
            return false;
        }
        if (array_key_exists('conclusion', $this->container) && !is_null($this->container['conclusion']) && (strlen($this->container['conclusion']) < 1)) {
            return false;
        }
        if (array_key_exists('changes', $this->container) && !is_null($this->container['changes']) && (strlen($this->container['changes']) > 10500)) {
            return false;
        }
        if (array_key_exists('changes', $this->container) && !is_null($this->container['changes']) && (strlen($this->container['changes']) < 1)) {
            return false;
        }
        if (array_key_exists('extra', $this->container) && !is_null($this->container['extra']) && (strlen($this->container['extra']) > 65535)) {
            return false;
        }
        if (array_key_exists('extra', $this->container) && !is_null($this->container['extra']) && (strlen($this->container['extra']) < 1)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramReviewTypeReview., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramReviewTypeReview., must be bigger than or equal to 36.');
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
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramReviewTypeReview., must be smaller than or equal to 36.');
        }
        if ((strlen($id_review) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_review when calling ProgramReviewTypeReview., must be bigger than or equal to 36.');
        }

        $this->container['id_review'] = $id_review;

        return $this;
    }

    /**
     * Gets public_note
     *
     * @return string
     */
    public function getPublicNote()
    {
        return $this->container['public_note'];
    }

    /**
     * Sets public_note
     *
     * @param string $public_note Public note.
     *
     * @return $this
     */
    public function setPublicNote($public_note)
    {
        if (!is_null($public_note) && (strlen($public_note) > 3500)) {
            throw new \InvalidArgumentException('invalid length for $public_note when calling ProgramReviewTypeReview., must be smaller than or equal to 3500.');
        }
        if (!is_null($public_note) && (strlen($public_note) < 1)) {
            throw new \InvalidArgumentException('invalid length for $public_note when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['public_note'] = $public_note;

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
     * @param string $type Review type. This field is used for tracking purposes. Ex: core
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
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
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating Program rating.
     *
     * @return $this
     */
    public function setRating($rating)
    {

        if (!is_null($rating) && ($rating > 10)) {
            throw new \InvalidArgumentException('invalid value for $rating when calling ProgramReviewTypeReview., must be smaller than or equal to 10.');
        }
        if (!is_null($rating) && ($rating < 0)) {
            throw new \InvalidArgumentException('invalid value for $rating when calling ProgramReviewTypeReview., must be bigger than or equal to 0.');
        }

        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string $headline Headline.
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        if (!is_null($headline) && (strlen($headline) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $headline when calling ProgramReviewTypeReview., must be smaller than or equal to 2000.');
        }
        if (!is_null($headline) && (strlen($headline) < 1)) {
            throw new \InvalidArgumentException('invalid length for $headline when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets lead
     *
     * @return string
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     *
     * @param string $lead Lead
     *
     * @return $this
     */
    public function setLead($lead)
    {
        if (!is_null($lead) && (strlen($lead) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $lead when calling ProgramReviewTypeReview., must be smaller than or equal to 2000.');
        }
        if (!is_null($lead) && (strlen($lead) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lead when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['lead'] = $lead;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Body
     *
     * @return $this
     */
    public function setBody($body)
    {
        if (!is_null($body) && (strlen($body) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $body when calling ProgramReviewTypeReview., must be smaller than or equal to 65535.');
        }
        if (!is_null($body) && (strlen($body) < 1)) {
            throw new \InvalidArgumentException('invalid length for $body when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets conclusion
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->container['conclusion'];
    }

    /**
     * Sets conclusion
     *
     * @param string $conclusion Conclusion
     *
     * @return $this
     */
    public function setConclusion($conclusion)
    {
        if (!is_null($conclusion) && (strlen($conclusion) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $conclusion when calling ProgramReviewTypeReview., must be smaller than or equal to 4000.');
        }
        if (!is_null($conclusion) && (strlen($conclusion) < 1)) {
            throw new \InvalidArgumentException('invalid length for $conclusion when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['conclusion'] = $conclusion;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return string
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param string $changes Version changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        if (!is_null($changes) && (strlen($changes) > 10500)) {
            throw new \InvalidArgumentException('invalid length for $changes when calling ProgramReviewTypeReview., must be smaller than or equal to 10500.');
        }
        if (!is_null($changes) && (strlen($changes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $changes when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param string $extra Unrecognized parts from the review
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        if (!is_null($extra) && (strlen($extra) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $extra when calling ProgramReviewTypeReview., must be smaller than or equal to 65535.');
        }
        if (!is_null($extra) && (strlen($extra) < 1)) {
            throw new \InvalidArgumentException('invalid length for $extra when calling ProgramReviewTypeReview., must be bigger than or equal to 1.');
        }

        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets pros
     *
     * @return string[]
     */
    public function getPros()
    {
        return $this->container['pros'];
    }

    /**
     * Sets pros
     *
     * @param string[] $pros Pros
     *
     * @return $this
     */
    public function setPros($pros)
    {
        $this->container['pros'] = $pros;

        return $this;
    }

    /**
     * Gets cons
     *
     * @return string[]
     */
    public function getCons()
    {
        return $this->container['cons'];
    }

    /**
     * Sets cons
     *
     * @param string[] $cons Cons
     *
     * @return $this
     */
    public function setCons($cons)
    {
        $this->container['cons'] = $cons;

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


