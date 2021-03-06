<?php
/**
 * GroupsV2ClanBanner
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
 * GroupsV2ClanBanner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GroupsV2ClanBanner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.ClanBanner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'decal_id' => 'int',
        'decal_color_id' => 'int',
        'decal_background_color_id' => 'int',
        'gonfalon_id' => 'int',
        'gonfalon_color_id' => 'int',
        'gonfalon_detail_id' => 'int',
        'gonfalon_detail_color_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'decal_id' => 'uint32',
        'decal_color_id' => 'uint32',
        'decal_background_color_id' => 'uint32',
        'gonfalon_id' => 'uint32',
        'gonfalon_color_id' => 'uint32',
        'gonfalon_detail_id' => 'uint32',
        'gonfalon_detail_color_id' => 'uint32'
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
        'decal_id' => 'decalId',
        'decal_color_id' => 'decalColorId',
        'decal_background_color_id' => 'decalBackgroundColorId',
        'gonfalon_id' => 'gonfalonId',
        'gonfalon_color_id' => 'gonfalonColorId',
        'gonfalon_detail_id' => 'gonfalonDetailId',
        'gonfalon_detail_color_id' => 'gonfalonDetailColorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'decal_id' => 'setDecalId',
        'decal_color_id' => 'setDecalColorId',
        'decal_background_color_id' => 'setDecalBackgroundColorId',
        'gonfalon_id' => 'setGonfalonId',
        'gonfalon_color_id' => 'setGonfalonColorId',
        'gonfalon_detail_id' => 'setGonfalonDetailId',
        'gonfalon_detail_color_id' => 'setGonfalonDetailColorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'decal_id' => 'getDecalId',
        'decal_color_id' => 'getDecalColorId',
        'decal_background_color_id' => 'getDecalBackgroundColorId',
        'gonfalon_id' => 'getGonfalonId',
        'gonfalon_color_id' => 'getGonfalonColorId',
        'gonfalon_detail_id' => 'getGonfalonDetailId',
        'gonfalon_detail_color_id' => 'getGonfalonDetailColorId'
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
        $this->container['decal_id'] = $data['decal_id'] ?? null;
        $this->container['decal_color_id'] = $data['decal_color_id'] ?? null;
        $this->container['decal_background_color_id'] = $data['decal_background_color_id'] ?? null;
        $this->container['gonfalon_id'] = $data['gonfalon_id'] ?? null;
        $this->container['gonfalon_color_id'] = $data['gonfalon_color_id'] ?? null;
        $this->container['gonfalon_detail_id'] = $data['gonfalon_detail_id'] ?? null;
        $this->container['gonfalon_detail_color_id'] = $data['gonfalon_detail_color_id'] ?? null;
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
     * Gets decal_id
     *
     * @return int|null
     */
    public function getDecalId()
    {
        return $this->container['decal_id'];
    }

    /**
     * Sets decal_id
     *
     * @param int|null $decal_id decal_id
     *
     * @return self
     */
    public function setDecalId($decal_id)
    {
        $this->container['decal_id'] = $decal_id;

        return $this;
    }

    /**
     * Gets decal_color_id
     *
     * @return int|null
     */
    public function getDecalColorId()
    {
        return $this->container['decal_color_id'];
    }

    /**
     * Sets decal_color_id
     *
     * @param int|null $decal_color_id decal_color_id
     *
     * @return self
     */
    public function setDecalColorId($decal_color_id)
    {
        $this->container['decal_color_id'] = $decal_color_id;

        return $this;
    }

    /**
     * Gets decal_background_color_id
     *
     * @return int|null
     */
    public function getDecalBackgroundColorId()
    {
        return $this->container['decal_background_color_id'];
    }

    /**
     * Sets decal_background_color_id
     *
     * @param int|null $decal_background_color_id decal_background_color_id
     *
     * @return self
     */
    public function setDecalBackgroundColorId($decal_background_color_id)
    {
        $this->container['decal_background_color_id'] = $decal_background_color_id;

        return $this;
    }

    /**
     * Gets gonfalon_id
     *
     * @return int|null
     */
    public function getGonfalonId()
    {
        return $this->container['gonfalon_id'];
    }

    /**
     * Sets gonfalon_id
     *
     * @param int|null $gonfalon_id gonfalon_id
     *
     * @return self
     */
    public function setGonfalonId($gonfalon_id)
    {
        $this->container['gonfalon_id'] = $gonfalon_id;

        return $this;
    }

    /**
     * Gets gonfalon_color_id
     *
     * @return int|null
     */
    public function getGonfalonColorId()
    {
        return $this->container['gonfalon_color_id'];
    }

    /**
     * Sets gonfalon_color_id
     *
     * @param int|null $gonfalon_color_id gonfalon_color_id
     *
     * @return self
     */
    public function setGonfalonColorId($gonfalon_color_id)
    {
        $this->container['gonfalon_color_id'] = $gonfalon_color_id;

        return $this;
    }

    /**
     * Gets gonfalon_detail_id
     *
     * @return int|null
     */
    public function getGonfalonDetailId()
    {
        return $this->container['gonfalon_detail_id'];
    }

    /**
     * Sets gonfalon_detail_id
     *
     * @param int|null $gonfalon_detail_id gonfalon_detail_id
     *
     * @return self
     */
    public function setGonfalonDetailId($gonfalon_detail_id)
    {
        $this->container['gonfalon_detail_id'] = $gonfalon_detail_id;

        return $this;
    }

    /**
     * Gets gonfalon_detail_color_id
     *
     * @return int|null
     */
    public function getGonfalonDetailColorId()
    {
        return $this->container['gonfalon_detail_color_id'];
    }

    /**
     * Sets gonfalon_detail_color_id
     *
     * @param int|null $gonfalon_detail_color_id gonfalon_detail_color_id
     *
     * @return self
     */
    public function setGonfalonDetailColorId($gonfalon_detail_color_id)
    {
        $this->container['gonfalon_detail_color_id'] = $gonfalon_detail_color_id;

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


