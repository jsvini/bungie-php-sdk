<?php
/**
 * TrendingTrendingDetail
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
 * TrendingTrendingDetail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TrendingTrendingDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Trending.TrendingDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'string',
        'entity_type' => 'int',
        'news' => '\OpenAPI\Client\Model\TrendingTrendingEntryNews',
        'support' => '\OpenAPI\Client\Model\TrendingTrendingEntrySupportArticle',
        'destiny_item' => '\OpenAPI\Client\Model\TrendingTrendingEntryDestinyItem',
        'destiny_activity' => '\OpenAPI\Client\Model\TrendingTrendingEntryDestinyActivity',
        'destiny_ritual' => '\OpenAPI\Client\Model\TrendingTrendingEntryDestinyRitual',
        'creation' => '\OpenAPI\Client\Model\TrendingTrendingEntryCommunityCreation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'entity_type' => 'int32',
        'news' => null,
        'support' => null,
        'destiny_item' => null,
        'destiny_activity' => null,
        'destiny_ritual' => null,
        'creation' => null
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
        'identifier' => 'identifier',
        'entity_type' => 'entityType',
        'news' => 'news',
        'support' => 'support',
        'destiny_item' => 'destinyItem',
        'destiny_activity' => 'destinyActivity',
        'destiny_ritual' => 'destinyRitual',
        'creation' => 'creation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'entity_type' => 'setEntityType',
        'news' => 'setNews',
        'support' => 'setSupport',
        'destiny_item' => 'setDestinyItem',
        'destiny_activity' => 'setDestinyActivity',
        'destiny_ritual' => 'setDestinyRitual',
        'creation' => 'setCreation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'entity_type' => 'getEntityType',
        'news' => 'getNews',
        'support' => 'getSupport',
        'destiny_item' => 'getDestinyItem',
        'destiny_activity' => 'getDestinyActivity',
        'destiny_ritual' => 'getDestinyRitual',
        'creation' => 'getCreation'
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
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['entity_type'] = $data['entity_type'] ?? null;
        $this->container['news'] = $data['news'] ?? null;
        $this->container['support'] = $data['support'] ?? null;
        $this->container['destiny_item'] = $data['destiny_item'] ?? null;
        $this->container['destiny_activity'] = $data['destiny_activity'] ?? null;
        $this->container['destiny_ritual'] = $data['destiny_ritual'] ?? null;
        $this->container['creation'] = $data['creation'] ?? null;
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
     * @param string|null $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return int|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param int|null $entity_type entity_type
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets news
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntryNews|null
     */
    public function getNews()
    {
        return $this->container['news'];
    }

    /**
     * Sets news
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntryNews|null $news news
     *
     * @return self
     */
    public function setNews($news)
    {
        $this->container['news'] = $news;

        return $this;
    }

    /**
     * Gets support
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntrySupportArticle|null
     */
    public function getSupport()
    {
        return $this->container['support'];
    }

    /**
     * Sets support
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntrySupportArticle|null $support support
     *
     * @return self
     */
    public function setSupport($support)
    {
        $this->container['support'] = $support;

        return $this;
    }

    /**
     * Gets destiny_item
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntryDestinyItem|null
     */
    public function getDestinyItem()
    {
        return $this->container['destiny_item'];
    }

    /**
     * Sets destiny_item
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntryDestinyItem|null $destiny_item destiny_item
     *
     * @return self
     */
    public function setDestinyItem($destiny_item)
    {
        $this->container['destiny_item'] = $destiny_item;

        return $this;
    }

    /**
     * Gets destiny_activity
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntryDestinyActivity|null
     */
    public function getDestinyActivity()
    {
        return $this->container['destiny_activity'];
    }

    /**
     * Sets destiny_activity
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntryDestinyActivity|null $destiny_activity destiny_activity
     *
     * @return self
     */
    public function setDestinyActivity($destiny_activity)
    {
        $this->container['destiny_activity'] = $destiny_activity;

        return $this;
    }

    /**
     * Gets destiny_ritual
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntryDestinyRitual|null
     */
    public function getDestinyRitual()
    {
        return $this->container['destiny_ritual'];
    }

    /**
     * Sets destiny_ritual
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntryDestinyRitual|null $destiny_ritual destiny_ritual
     *
     * @return self
     */
    public function setDestinyRitual($destiny_ritual)
    {
        $this->container['destiny_ritual'] = $destiny_ritual;

        return $this;
    }

    /**
     * Gets creation
     *
     * @return \OpenAPI\Client\Model\TrendingTrendingEntryCommunityCreation|null
     */
    public function getCreation()
    {
        return $this->container['creation'];
    }

    /**
     * Sets creation
     *
     * @param \OpenAPI\Client\Model\TrendingTrendingEntryCommunityCreation|null $creation creation
     *
     * @return self
     */
    public function setCreation($creation)
    {
        $this->container['creation'] = $creation;

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


