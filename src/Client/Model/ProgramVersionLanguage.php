<?php
/**
 * ProgramVersionLanguage
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
 * OpenAPI spec version: 2.0.300-1837
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
 * ProgramVersionLanguage Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionLanguage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionLanguage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_version' => 'string',
        'id_language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_version' => null,
        'id_language' => null
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
        'id_language' => 'id_language'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_language' => 'setIdLanguage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_language' => 'getIdLanguage'
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

    const ID_LANGUAGE_EN_GB = 'en_GB';
    const ID_LANGUAGE_ES_ES = 'es_ES';
    const ID_LANGUAGE_CA_ES = 'ca_ES';
    const ID_LANGUAGE_EU_ES = 'eu_ES';
    const ID_LANGUAGE_DE_DE = 'de_DE';
    const ID_LANGUAGE_FR_FR = 'fr_FR';
    const ID_LANGUAGE_IT_IT = 'it_IT';
    const ID_LANGUAGE_RU_RU = 'ru_RU';
    const ID_LANGUAGE_ZH_TW = 'zh_TW';
    const ID_LANGUAGE_ZH_CN = 'zh_CN';
    const ID_LANGUAGE_PT_BR = 'pt_BR';
    const ID_LANGUAGE_TR_TR = 'tr_TR';
    const ID_LANGUAGE_GL_ES = 'gl_ES';
    const ID_LANGUAGE_ES_AR = 'es_AR';
    const ID_LANGUAGE_AR_SA = 'ar_SA';
    const ID_LANGUAGE_CS_CZ = 'cs_CZ';
    const ID_LANGUAGE_KO_KR = 'ko_KR';
    const ID_LANGUAGE_DA_DK = 'da_DK';
    const ID_LANGUAGE_FI_FI = 'fi_FI';
    const ID_LANGUAGE_EL_GR = 'el_GR';
    const ID_LANGUAGE_HI_IN = 'hi_IN';
    const ID_LANGUAGE_NL_NL = 'nl_NL';
    const ID_LANGUAGE_JA_JP = 'ja_JP';
    const ID_LANGUAGE_NO_NO = 'no_NO';
    const ID_LANGUAGE_PL_PL = 'pl_PL';
    const ID_LANGUAGE_SV_SE = 'sv_SE';
    const ID_LANGUAGE_PT_PT = 'pt_PT';
    const ID_LANGUAGE_CN_CN = 'cn_CN';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIdLanguageAllowableValues()
    {
        return [
            self::ID_LANGUAGE_EN_GB,
            self::ID_LANGUAGE_ES_ES,
            self::ID_LANGUAGE_CA_ES,
            self::ID_LANGUAGE_EU_ES,
            self::ID_LANGUAGE_DE_DE,
            self::ID_LANGUAGE_FR_FR,
            self::ID_LANGUAGE_IT_IT,
            self::ID_LANGUAGE_RU_RU,
            self::ID_LANGUAGE_ZH_TW,
            self::ID_LANGUAGE_ZH_CN,
            self::ID_LANGUAGE_PT_BR,
            self::ID_LANGUAGE_TR_TR,
            self::ID_LANGUAGE_GL_ES,
            self::ID_LANGUAGE_ES_AR,
            self::ID_LANGUAGE_AR_SA,
            self::ID_LANGUAGE_CS_CZ,
            self::ID_LANGUAGE_KO_KR,
            self::ID_LANGUAGE_DA_DK,
            self::ID_LANGUAGE_FI_FI,
            self::ID_LANGUAGE_EL_GR,
            self::ID_LANGUAGE_HI_IN,
            self::ID_LANGUAGE_NL_NL,
            self::ID_LANGUAGE_JA_JP,
            self::ID_LANGUAGE_NO_NO,
            self::ID_LANGUAGE_PL_PL,
            self::ID_LANGUAGE_SV_SE,
            self::ID_LANGUAGE_PT_PT,
            self::ID_LANGUAGE_CN_CN,
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
        $this->container['id_language'] = isset($data['id_language']) ? $data['id_language'] : null;
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

        if ($this->container['id_language'] === null) {
            $invalid_properties[] = "'id_language' can't be null";
        }
        $allowed_values = $this->getIdLanguageAllowableValues();
        if (!in_array($this->container['id_language'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'id_language', must be one of '%s'",
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
        if ($this->container['id_version'] === null) {
            return false;
        }
        if (strlen($this->container['id_version']) > 60) {
            return false;
        }
        if (strlen($this->container['id_version']) < 1) {
            return false;
        }
        if ($this->container['id_language'] === null) {
            return false;
        }
        $allowed_values = $this->getIdLanguageAllowableValues();
        if (!in_array($this->container['id_language'], $allowed_values)) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLanguage., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramVersionLanguage., must be bigger than or equal to 36.');
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
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLanguage., must be smaller than or equal to 60.');
        }
        if ((strlen($id_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_version when calling ProgramVersionLanguage., must be bigger than or equal to 1.');
        }

        $this->container['id_version'] = $id_version;

        return $this;
    }

    /**
     * Gets id_language
     * @return string
     */
    public function getIdLanguage()
    {
        return $this->container['id_language'];
    }

    /**
     * Sets id_language
     * @param string $id_language Language identifier
     * @return $this
     */
    public function setIdLanguage($id_language)
    {
        $allowed_values = $this->getIdLanguageAllowableValues();
        if (!in_array($id_language, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_language', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['id_language'] = $id_language;

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


