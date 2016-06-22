<?php
/**
 * ProgramVersionLocale
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.17-83
 * Contact: XXXXXXXXX@softonic.com
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

namespace Softonic\CatalogApiSdk\Model;

use \ArrayAccess;

/**
 * ProgramVersionLocale Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\CatalogApiSdk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramVersionLocale implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramVersionLocale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_program' => 'string',
        'id_version' => 'string',
        'id_locale' => 'string',
        'about_license' => 'string',
        'publish_date' => '\DateTime',
        'name' => 'string',
        'revision_date' => '\DateTime',
        'update_date' => '\DateTime',
        'status' => 'string',
        'id_editor' => 'int',
        'title' => 'string',
        'subdomain' => 'string',
        'id_binary' => 'string',
        'id_age' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id_program' => 'id_program',
        'id_version' => 'id_version',
        'id_locale' => 'id_locale',
        'about_license' => 'about_license',
        'publish_date' => 'publish_date',
        'name' => 'name',
        'revision_date' => 'revision_date',
        'update_date' => 'update_date',
        'status' => 'status',
        'id_editor' => 'id_editor',
        'title' => 'title',
        'subdomain' => 'subdomain',
        'id_binary' => 'id_binary',
        'id_age' => 'id_age'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id_program' => 'setIdProgram',
        'id_version' => 'setIdVersion',
        'id_locale' => 'setIdLocale',
        'about_license' => 'setAboutLicense',
        'publish_date' => 'setPublishDate',
        'name' => 'setName',
        'revision_date' => 'setRevisionDate',
        'update_date' => 'setUpdateDate',
        'status' => 'setStatus',
        'id_editor' => 'setIdEditor',
        'title' => 'setTitle',
        'subdomain' => 'setSubdomain',
        'id_binary' => 'setIdBinary',
        'id_age' => 'setIdAge'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id_program' => 'getIdProgram',
        'id_version' => 'getIdVersion',
        'id_locale' => 'getIdLocale',
        'about_license' => 'getAboutLicense',
        'publish_date' => 'getPublishDate',
        'name' => 'getName',
        'revision_date' => 'getRevisionDate',
        'update_date' => 'getUpdateDate',
        'status' => 'getStatus',
        'id_editor' => 'getIdEditor',
        'title' => 'getTitle',
        'subdomain' => 'getSubdomain',
        'id_binary' => 'getIdBinary',
        'id_age' => 'getIdAge'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_program'] = isset($data['id_program']) ? $data['id_program'] : null;
        $this->container['id_version'] = isset($data['id_version']) ? $data['id_version'] : null;
        $this->container['id_locale'] = isset($data['id_locale']) ? $data['id_locale'] : null;
        $this->container['about_license'] = isset($data['about_license']) ? $data['about_license'] : null;
        $this->container['publish_date'] = isset($data['publish_date']) ? $data['publish_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['revision_date'] = isset($data['revision_date']) ? $data['revision_date'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id_editor'] = isset($data['id_editor']) ? $data['id_editor'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['id_binary'] = isset($data['id_binary']) ? $data['id_binary'] : null;
        $this->container['id_age'] = isset($data['id_age']) ? $data['id_age'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id_program'] === null) {
            $invalid_properties[] = "'id_program' can't be null";
        }
        if ($this->container['id_version'] === null) {
            $invalid_properties[] = "'id_version' can't be null";
        }
        if ($this->container['id_locale'] === null) {
            $invalid_properties[] = "'id_locale' can't be null";
        }
        if ($this->container['publish_date'] === null) {
            $invalid_properties[] = "'publish_date' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['subdomain'] === null) {
            $invalid_properties[] = "'subdomain' can't be null";
        }
        if ($this->container['id_age'] === null) {
            $invalid_properties[] = "'id_age' can't be null";
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
        if ($this->container['id_version'] === null) {
            return false;
        }
        if ($this->container['id_locale'] === null) {
            return false;
        }
        if ($this->container['publish_date'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['subdomain'] === null) {
            return false;
        }
        if ($this->container['id_age'] === null) {
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
     * @param string $id_version Version UUID
     * @return $this
     */
    public function setIdVersion($id_version)
    {
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
     * @param string $id_locale locale identifier.
     * @return $this
     */
    public function setIdLocale($id_locale)
    {
        $this->container['id_locale'] = $id_locale;

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
     * @param string $about_license 
     * @return $this
     */
    public function setAboutLicense($about_license)
    {
        $this->container['about_license'] = $about_license;

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
     * @param \DateTime $publish_date 
     * @return $this
     */
    public function setPublishDate($publish_date)
    {
        $this->container['publish_date'] = $publish_date;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \DateTime $revision_date revision date
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
        $this->container['id_editor'] = $id_editor;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title 
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subdomain
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     * @param string $subdomain 
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

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
        $this->container['id_binary'] = $id_binary;

        return $this;
    }

    /**
     * Gets id_age
     * @return string
     */
    public function getIdAge()
    {
        return $this->container['id_age'];
    }

    /**
     * Sets id_age
     * @param string $id_age Age identifier
     * @return $this
     */
    public function setIdAge($id_age)
    {
        $this->container['id_age'] = $id_age;

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
