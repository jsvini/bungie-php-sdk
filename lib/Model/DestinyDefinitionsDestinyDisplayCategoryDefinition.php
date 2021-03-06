<?php
/**
 * DestinyDefinitionsDestinyDisplayCategoryDefinition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * The version of the OpenAPI document: 2.9.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DestinyDefinitionsDestinyDisplayCategoryDefinition Class Doc Comment
 *
 * @category Class
 * @description Display Categories are different from \&quot;categories\&quot; in that these are specifically for visual grouping and display of categories in Vendor UI. The \&quot;categories\&quot; structure is for validation of the contained items, and can be categorized entirely separately from \&quot;Display Categories\&quot;, there need be and often will be no meaningful relationship between the two.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyDisplayCategoryDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyDisplayCategoryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'identifier' => 'string',
        'display_category_hash' => 'int',
        'display_properties' => '\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'display_in_banner' => 'bool',
        'progression_hash' => 'int',
        'sort_order' => 'int',
        'display_style_hash' => 'int',
        'display_style_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'identifier' => null,
        'display_category_hash' => 'uint32',
        'display_properties' => null,
        'display_in_banner' => null,
        'progression_hash' => 'uint32',
        'sort_order' => 'int32',
        'display_style_hash' => 'uint32',
        'display_style_identifier' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'index' => 'index',
        'identifier' => 'identifier',
        'display_category_hash' => 'displayCategoryHash',
        'display_properties' => 'displayProperties',
        'display_in_banner' => 'displayInBanner',
        'progression_hash' => 'progressionHash',
        'sort_order' => 'sortOrder',
        'display_style_hash' => 'displayStyleHash',
        'display_style_identifier' => 'displayStyleIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'identifier' => 'setIdentifier',
        'display_category_hash' => 'setDisplayCategoryHash',
        'display_properties' => 'setDisplayProperties',
        'display_in_banner' => 'setDisplayInBanner',
        'progression_hash' => 'setProgressionHash',
        'sort_order' => 'setSortOrder',
        'display_style_hash' => 'setDisplayStyleHash',
        'display_style_identifier' => 'setDisplayStyleIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'identifier' => 'getIdentifier',
        'display_category_hash' => 'getDisplayCategoryHash',
        'display_properties' => 'getDisplayProperties',
        'display_in_banner' => 'getDisplayInBanner',
        'progression_hash' => 'getProgressionHash',
        'sort_order' => 'getSortOrder',
        'display_style_hash' => 'getDisplayStyleHash',
        'display_style_identifier' => 'getDisplayStyleIdentifier'
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
        return self::$openAPIModelName;
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
        $this->container['index'] = $data['index'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['display_category_hash'] = $data['display_category_hash'] ?? null;
        $this->container['display_properties'] = $data['display_properties'] ?? null;
        $this->container['display_in_banner'] = $data['display_in_banner'] ?? null;
        $this->container['progression_hash'] = $data['progression_hash'] ?? null;
        $this->container['sort_order'] = $data['sort_order'] ?? null;
        $this->container['display_style_hash'] = $data['display_style_hash'] ?? null;
        $this->container['display_style_identifier'] = $data['display_style_identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index index
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier A string identifier for the display category.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets display_category_hash
     *
     * @return int|null
     */
    public function getDisplayCategoryHash()
    {
        return $this->container['display_category_hash'];
    }

    /**
     * Sets display_category_hash
     *
     * @param int|null $display_category_hash display_category_hash
     *
     * @return self
     */
    public function setDisplayCategoryHash($display_category_hash)
    {
        $this->container['display_category_hash'] = $display_category_hash;

        return $this;
    }

    /**
     * Gets display_properties
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['display_properties'];
    }

    /**
     * Sets display_properties
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $display_properties display_properties
     *
     * @return self
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

        return $this;
    }

    /**
     * Gets display_in_banner
     *
     * @return bool|null
     */
    public function getDisplayInBanner()
    {
        return $this->container['display_in_banner'];
    }

    /**
     * Sets display_in_banner
     *
     * @param bool|null $display_in_banner If true, this category should be displayed in the \"Banner\" section of the vendor's UI.
     *
     * @return self
     */
    public function setDisplayInBanner($display_in_banner)
    {
        $this->container['display_in_banner'] = $display_in_banner;

        return $this;
    }

    /**
     * Gets progression_hash
     *
     * @return int|null
     */
    public function getProgressionHash()
    {
        return $this->container['progression_hash'];
    }

    /**
     * Sets progression_hash
     *
     * @param int|null $progression_hash If it exists, this is the hash identifier of a DestinyProgressionDefinition that represents the progression to show on this display category.  Specific categories can now have thier own distinct progression, apparently. So that's cool.
     *
     * @return self
     */
    public function setProgressionHash($progression_hash)
    {
        $this->container['progression_hash'] = $progression_hash;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int|null $sort_order If this category sorts items in a nonstandard way, this will be the way we sort.
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets display_style_hash
     *
     * @return int|null
     */
    public function getDisplayStyleHash()
    {
        return $this->container['display_style_hash'];
    }

    /**
     * Sets display_style_hash
     *
     * @param int|null $display_style_hash An indicator of how the category will be displayed in the UI. It's up to you to do something cool or interesting in response to this, or just to treat it as a normal category.
     *
     * @return self
     */
    public function setDisplayStyleHash($display_style_hash)
    {
        $this->container['display_style_hash'] = $display_style_hash;

        return $this;
    }

    /**
     * Gets display_style_identifier
     *
     * @return string|null
     */
    public function getDisplayStyleIdentifier()
    {
        return $this->container['display_style_identifier'];
    }

    /**
     * Sets display_style_identifier
     *
     * @param string|null $display_style_identifier An indicator of how the category will be displayed in the UI. It's up to you to do something cool or interesting in response to this, or just to treat it as a normal category.
     *
     * @return self
     */
    public function setDisplayStyleIdentifier($display_style_identifier)
    {
        $this->container['display_style_identifier'] = $display_style_identifier;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


