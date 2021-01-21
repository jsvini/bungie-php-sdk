<?php
/**
 * DestinyDefinitionsDestinyItemSackBlockDefinition
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
 * DestinyDefinitionsDestinyItemSackBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Some items are \&quot;sacks\&quot; - they can be \&quot;opened\&quot; to produce other items. This is information related to its sack status, mostly UI strings. Engrams are an example of items that are considered to be \&quot;Sacks\&quot;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyItemSackBlockDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSackBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'detail_action' => 'string',
        'open_action' => 'string',
        'select_item_count' => 'int',
        'vendor_sack_type' => 'string',
        'open_on_acquire' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'detail_action' => null,
        'open_action' => null,
        'select_item_count' => 'int32',
        'vendor_sack_type' => null,
        'open_on_acquire' => null
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
        'detail_action' => 'detailAction',
        'open_action' => 'openAction',
        'select_item_count' => 'selectItemCount',
        'vendor_sack_type' => 'vendorSackType',
        'open_on_acquire' => 'openOnAcquire'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detail_action' => 'setDetailAction',
        'open_action' => 'setOpenAction',
        'select_item_count' => 'setSelectItemCount',
        'vendor_sack_type' => 'setVendorSackType',
        'open_on_acquire' => 'setOpenOnAcquire'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detail_action' => 'getDetailAction',
        'open_action' => 'getOpenAction',
        'select_item_count' => 'getSelectItemCount',
        'vendor_sack_type' => 'getVendorSackType',
        'open_on_acquire' => 'getOpenOnAcquire'
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
        $this->container['detail_action'] = $data['detail_action'] ?? null;
        $this->container['open_action'] = $data['open_action'] ?? null;
        $this->container['select_item_count'] = $data['select_item_count'] ?? null;
        $this->container['vendor_sack_type'] = $data['vendor_sack_type'] ?? null;
        $this->container['open_on_acquire'] = $data['open_on_acquire'] ?? null;
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
     * Gets detail_action
     *
     * @return string|null
     */
    public function getDetailAction()
    {
        return $this->container['detail_action'];
    }

    /**
     * Sets detail_action
     *
     * @param string|null $detail_action A description of what will happen when you open the sack. As far as I can tell, this is blank currently. Unknown whether it will eventually be populated with useful info.
     *
     * @return self
     */
    public function setDetailAction($detail_action)
    {
        $this->container['detail_action'] = $detail_action;

        return $this;
    }

    /**
     * Gets open_action
     *
     * @return string|null
     */
    public function getOpenAction()
    {
        return $this->container['open_action'];
    }

    /**
     * Sets open_action
     *
     * @param string|null $open_action The localized name of the action being performed when you open the sack.
     *
     * @return self
     */
    public function setOpenAction($open_action)
    {
        $this->container['open_action'] = $open_action;

        return $this;
    }

    /**
     * Gets select_item_count
     *
     * @return int|null
     */
    public function getSelectItemCount()
    {
        return $this->container['select_item_count'];
    }

    /**
     * Sets select_item_count
     *
     * @param int|null $select_item_count select_item_count
     *
     * @return self
     */
    public function setSelectItemCount($select_item_count)
    {
        $this->container['select_item_count'] = $select_item_count;

        return $this;
    }

    /**
     * Gets vendor_sack_type
     *
     * @return string|null
     */
    public function getVendorSackType()
    {
        return $this->container['vendor_sack_type'];
    }

    /**
     * Sets vendor_sack_type
     *
     * @param string|null $vendor_sack_type vendor_sack_type
     *
     * @return self
     */
    public function setVendorSackType($vendor_sack_type)
    {
        $this->container['vendor_sack_type'] = $vendor_sack_type;

        return $this;
    }

    /**
     * Gets open_on_acquire
     *
     * @return bool|null
     */
    public function getOpenOnAcquire()
    {
        return $this->container['open_on_acquire'];
    }

    /**
     * Sets open_on_acquire
     *
     * @param bool|null $open_on_acquire open_on_acquire
     *
     * @return self
     */
    public function setOpenOnAcquire($open_on_acquire)
    {
        $this->container['open_on_acquire'] = $open_on_acquire;

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

