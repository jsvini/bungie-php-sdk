<?php
/**
 * DestinyResponsesDestinyItemChangeResponse
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
 * DestinyResponsesDestinyItemChangeResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyResponsesDestinyItemChangeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyItemChangeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item' => '\OpenAPI\Client\Model\DestinyResponsesDestinyItemResponse',
        'added_inventory_items' => '\OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]',
        'removed_inventory_items' => '\OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item' => null,
        'added_inventory_items' => null,
        'removed_inventory_items' => null
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
        'item' => 'item',
        'added_inventory_items' => 'addedInventoryItems',
        'removed_inventory_items' => 'removedInventoryItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'added_inventory_items' => 'setAddedInventoryItems',
        'removed_inventory_items' => 'setRemovedInventoryItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'added_inventory_items' => 'getAddedInventoryItems',
        'removed_inventory_items' => 'getRemovedInventoryItems'
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
        $this->container['item'] = $data['item'] ?? null;
        $this->container['added_inventory_items'] = $data['added_inventory_items'] ?? null;
        $this->container['removed_inventory_items'] = $data['removed_inventory_items'] ?? null;
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
     * Gets item
     *
     * @return \OpenAPI\Client\Model\DestinyResponsesDestinyItemResponse|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \OpenAPI\Client\Model\DestinyResponsesDestinyItemResponse|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets added_inventory_items
     *
     * @return \OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]|null
     */
    public function getAddedInventoryItems()
    {
        return $this->container['added_inventory_items'];
    }

    /**
     * Sets added_inventory_items
     *
     * @param \OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]|null $added_inventory_items Items that appeared in the inventory possibly as a result of an action.
     *
     * @return self
     */
    public function setAddedInventoryItems($added_inventory_items)
    {
        $this->container['added_inventory_items'] = $added_inventory_items;

        return $this;
    }

    /**
     * Gets removed_inventory_items
     *
     * @return \OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]|null
     */
    public function getRemovedInventoryItems()
    {
        return $this->container['removed_inventory_items'];
    }

    /**
     * Sets removed_inventory_items
     *
     * @param \OpenAPI\Client\Model\DestinyEntitiesItemsDestinyItemComponent[]|null $removed_inventory_items Items that disappeared from the inventory possibly as a result of an action.
     *
     * @return self
     */
    public function setRemovedInventoryItems($removed_inventory_items)
    {
        $this->container['removed_inventory_items'] = $removed_inventory_items;

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

