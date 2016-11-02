<?php
/**
 * ProgramRequirementGroupRequirement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.0.210-1337
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ProgramRequirementGroupRequirement Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramRequirementGroupRequirement implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramRequirementGroupRequirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_requirements_group' => 'string',
        'id_requirement' => 'string',
        'value' => 'string',
        'units' => 'string'
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
        'id_requirements_group' => 'id_requirements_group',
        'id_requirement' => 'id_requirement',
        'value' => 'value',
        'units' => 'units'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_requirements_group' => 'setIdRequirementsGroup',
        'id_requirement' => 'setIdRequirement',
        'value' => 'setValue',
        'units' => 'setUnits'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_requirements_group' => 'getIdRequirementsGroup',
        'id_requirement' => 'getIdRequirement',
        'value' => 'getValue',
        'units' => 'getUnits'
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
        $this->container['id_requirements_group'] = isset($data['id_requirements_group']) ? $data['id_requirements_group'] : null;
        $this->container['id_requirement'] = isset($data['id_requirement']) ? $data['id_requirement'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
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

        if ($this->container['id_requirements_group'] === null) {
            $invalid_properties[] = "'id_requirements_group' can't be null";
        }
        if ((strlen($this->container['id_requirements_group']) > 36)) {
            $invalid_properties[] = "invalid value for 'id_requirements_group', the character length must be smaller than or equal to 36.";
        }

        if ((strlen($this->container['id_requirements_group']) < 36)) {
            $invalid_properties[] = "invalid value for 'id_requirements_group', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['id_requirement'] === null) {
            $invalid_properties[] = "'id_requirement' can't be null";
        }
        if ((strlen($this->container['id_requirement']) > 12)) {
            $invalid_properties[] = "invalid value for 'id_requirement', the character length must be smaller than or equal to 12.";
        }

        if ((strlen($this->container['id_requirement']) < 1)) {
            $invalid_properties[] = "invalid value for 'id_requirement', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ((strlen($this->container['value']) > 255)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['value']) < 1)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['units']) && (strlen($this->container['units']) > 40)) {
            $invalid_properties[] = "invalid value for 'units', the character length must be smaller than or equal to 40.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
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
        if ($this->container['id_requirements_group'] === null) {
            return false;
        }
        if (strlen($this->container['id_requirements_group']) > 36) {
            return false;
        }
        if (strlen($this->container['id_requirements_group']) < 36) {
            return false;
        }
        if ($this->container['id_requirement'] === null) {
            return false;
        }
        if (strlen($this->container['id_requirement']) > 12) {
            return false;
        }
        if (strlen($this->container['id_requirement']) < 1) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if (strlen($this->container['value']) > 255) {
            return false;
        }
        if (strlen($this->container['value']) < 1) {
            return false;
        }
        if (strlen($this->container['units']) > 40) {
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
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramRequirementGroupRequirement., must be smaller than or equal to 36.');
        }
        if ((strlen($id_program) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_program when calling ProgramRequirementGroupRequirement., must be bigger than or equal to 36.');
        }

        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_requirements_group
     * @return string
     */
    public function getIdRequirementsGroup()
    {
        return $this->container['id_requirements_group'];
    }

    /**
     * Sets id_requirements_group
     * @param string $id_requirements_group Requirements group UUID
     * @return $this
     */
    public function setIdRequirementsGroup($id_requirements_group)
    {
        if ((strlen($id_requirements_group) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_requirements_group when calling ProgramRequirementGroupRequirement., must be smaller than or equal to 36.');
        }
        if ((strlen($id_requirements_group) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id_requirements_group when calling ProgramRequirementGroupRequirement., must be bigger than or equal to 36.');
        }

        $this->container['id_requirements_group'] = $id_requirements_group;

        return $this;
    }

    /**
     * Gets id_requirement
     * @return string
     */
    public function getIdRequirement()
    {
        return $this->container['id_requirement'];
    }

    /**
     * Sets id_requirement
     * @param string $id_requirement Requirement ID
     * @return $this
     */
    public function setIdRequirement($id_requirement)
    {
        if ((strlen($id_requirement) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id_requirement when calling ProgramRequirementGroupRequirement., must be smaller than or equal to 12.');
        }
        if ((strlen($id_requirement) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_requirement when calling ProgramRequirementGroupRequirement., must be bigger than or equal to 1.');
        }

        $this->container['id_requirement'] = $id_requirement;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value Requirement value
     * @return $this
     */
    public function setValue($value)
    {
        if ((strlen($value) > 255)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ProgramRequirementGroupRequirement., must be smaller than or equal to 255.');
        }
        if ((strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ProgramRequirementGroupRequirement., must be bigger than or equal to 1.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets units
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     * @param string $units Requirement value units
     * @return $this
     */
    public function setUnits($units)
    {
        if (!is_null($units) && (strlen($units) > 40)) {
            throw new \InvalidArgumentException('invalid length for $units when calling ProgramRequirementGroupRequirement., must be smaller than or equal to 40.');
        }

        $this->container['units'] = $units;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
