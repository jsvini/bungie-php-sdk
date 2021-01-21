<?php
/**
 * DestinySocketsDestinyItemPlugBase
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
 * DestinySocketsDestinyItemPlugBase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinySocketsDestinyItemPlugBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Sockets.DestinyItemPlugBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plug_item_hash' => 'int',
        'can_insert' => 'bool',
        'enabled' => 'bool',
        'insert_fail_indexes' => 'int[]',
        'enable_fail_indexes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'plug_item_hash' => 'uint32',
        'can_insert' => null,
        'enabled' => null,
        'insert_fail_indexes' => 'int32',
        'enable_fail_indexes' => 'int32'
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
        'plug_item_hash' => 'plugItemHash',
        'can_insert' => 'canInsert',
        'enabled' => 'enabled',
        'insert_fail_indexes' => 'insertFailIndexes',
        'enable_fail_indexes' => 'enableFailIndexes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plug_item_hash' => 'setPlugItemHash',
        'can_insert' => 'setCanInsert',
        'enabled' => 'setEnabled',
        'insert_fail_indexes' => 'setInsertFailIndexes',
        'enable_fail_indexes' => 'setEnableFailIndexes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plug_item_hash' => 'getPlugItemHash',
        'can_insert' => 'getCanInsert',
        'enabled' => 'getEnabled',
        'insert_fail_indexes' => 'getInsertFailIndexes',
        'enable_fail_indexes' => 'getEnableFailIndexes'
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
        $this->container['plug_item_hash'] = $data['plug_item_hash'] ?? null;
        $this->container['can_insert'] = $data['can_insert'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['insert_fail_indexes'] = $data['insert_fail_indexes'] ?? null;
        $this->container['enable_fail_indexes'] = $data['enable_fail_indexes'] ?? null;
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
     * Gets plug_item_hash
     *
     * @return int|null
     */
    public function getPlugItemHash()
    {
        return $this->container['plug_item_hash'];
    }

    /**
     * Sets plug_item_hash
     *
     * @param int|null $plug_item_hash The hash identifier of the DestinyInventoryItemDefinition that represents this plug.
     *
     * @return self
     */
    public function setPlugItemHash($plug_item_hash)
    {
        $this->container['plug_item_hash'] = $plug_item_hash;

        return $this;
    }

    /**
     * Gets can_insert
     *
     * @return bool|null
     */
    public function getCanInsert()
    {
        return $this->container['can_insert'];
    }

    /**
     * Sets can_insert
     *
     * @param bool|null $can_insert If true, this plug has met all of its insertion requirements. Big if true.
     *
     * @return self
     */
    public function setCanInsert($can_insert)
    {
        $this->container['can_insert'] = $can_insert;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled If true, this plug will provide its benefits while inserted.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets insert_fail_indexes
     *
     * @return int[]|null
     */
    public function getInsertFailIndexes()
    {
        return $this->container['insert_fail_indexes'];
    }

    /**
     * Sets insert_fail_indexes
     *
     * @param int[]|null $insert_fail_indexes If the plug cannot be inserted for some reason, this will have the indexes into the plug item definition's plug.insertionRules property, so you can show the reasons why it can't be inserted.  This list will be empty if the plug can be inserted.
     *
     * @return self
     */
    public function setInsertFailIndexes($insert_fail_indexes)
    {
        $this->container['insert_fail_indexes'] = $insert_fail_indexes;

        return $this;
    }

    /**
     * Gets enable_fail_indexes
     *
     * @return int[]|null
     */
    public function getEnableFailIndexes()
    {
        return $this->container['enable_fail_indexes'];
    }

    /**
     * Sets enable_fail_indexes
     *
     * @param int[]|null $enable_fail_indexes If a plug is not enabled, this will be populated with indexes into the plug item definition's plug.enabledRules property, so that you can show the reasons why it is not enabled.  This list will be empty if the plug is enabled.
     *
     * @return self
     */
    public function setEnableFailIndexes($enable_fail_indexes)
    {
        $this->container['enable_fail_indexes'] = $enable_fail_indexes;

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


