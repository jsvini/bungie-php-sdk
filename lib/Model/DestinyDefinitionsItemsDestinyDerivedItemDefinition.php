<?php
/**
 * DestinyDefinitionsItemsDestinyDerivedItemDefinition
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
 * DestinyDefinitionsItemsDestinyDerivedItemDefinition Class Doc Comment
 *
 * @category Class
 * @description This is a reference to, and summary data for, a specific item that you can get as a result of Using or Acquiring some other Item (For example, this could be summary information for an Emote that you can get by opening an an Eververse Box) See DestinyDerivedItemCategoryDefinition for more information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsItemsDestinyDerivedItemDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Items.DestinyDerivedItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_hash' => 'int',
        'item_name' => 'string',
        'item_detail' => 'string',
        'item_description' => 'string',
        'icon_path' => 'string',
        'vendor_item_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_hash' => 'uint32',
        'item_name' => null,
        'item_detail' => null,
        'item_description' => null,
        'icon_path' => null,
        'vendor_item_index' => 'int32'
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
        'item_hash' => 'itemHash',
        'item_name' => 'itemName',
        'item_detail' => 'itemDetail',
        'item_description' => 'itemDescription',
        'icon_path' => 'iconPath',
        'vendor_item_index' => 'vendorItemIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_hash' => 'setItemHash',
        'item_name' => 'setItemName',
        'item_detail' => 'setItemDetail',
        'item_description' => 'setItemDescription',
        'icon_path' => 'setIconPath',
        'vendor_item_index' => 'setVendorItemIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_hash' => 'getItemHash',
        'item_name' => 'getItemName',
        'item_detail' => 'getItemDetail',
        'item_description' => 'getItemDescription',
        'icon_path' => 'getIconPath',
        'vendor_item_index' => 'getVendorItemIndex'
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
        $this->container['item_hash'] = $data['item_hash'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['item_detail'] = $data['item_detail'] ?? null;
        $this->container['item_description'] = $data['item_description'] ?? null;
        $this->container['icon_path'] = $data['icon_path'] ?? null;
        $this->container['vendor_item_index'] = $data['vendor_item_index'] ?? null;
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
     * Gets item_hash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['item_hash'];
    }

    /**
     * Sets item_hash
     *
     * @param int|null $item_hash The hash for the DestinyInventoryItemDefinition of this derived item, if there is one. Sometimes we are given this information as a manual override, in which case there won't be an actual DestinyInventoryItemDefinition for what we display, but you can still show the strings from this object itself.
     *
     * @return self
     */
    public function setItemHash($item_hash)
    {
        $this->container['item_hash'] = $item_hash;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string|null $item_name The name of the derived item.
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets item_detail
     *
     * @return string|null
     */
    public function getItemDetail()
    {
        return $this->container['item_detail'];
    }

    /**
     * Sets item_detail
     *
     * @param string|null $item_detail Additional details about the derived item, in addition to the description.
     *
     * @return self
     */
    public function setItemDetail($item_detail)
    {
        $this->container['item_detail'] = $item_detail;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description A brief description of the item.
     *
     * @return self
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets icon_path
     *
     * @return string|null
     */
    public function getIconPath()
    {
        return $this->container['icon_path'];
    }

    /**
     * Sets icon_path
     *
     * @param string|null $icon_path An icon for the item.
     *
     * @return self
     */
    public function setIconPath($icon_path)
    {
        $this->container['icon_path'] = $icon_path;

        return $this;
    }

    /**
     * Gets vendor_item_index
     *
     * @return int|null
     */
    public function getVendorItemIndex()
    {
        return $this->container['vendor_item_index'];
    }

    /**
     * Sets vendor_item_index
     *
     * @param int|null $vendor_item_index If the item was derived from a \"Preview Vendor\", this will be an index into the DestinyVendorDefinition's itemList property. Otherwise, -1.
     *
     * @return self
     */
    public function setVendorItemIndex($vendor_item_index)
    {
        $this->container['vendor_item_index'] = $vendor_item_index;

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


