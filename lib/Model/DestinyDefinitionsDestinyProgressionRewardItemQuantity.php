<?php
/**
 * DestinyDefinitionsDestinyProgressionRewardItemQuantity
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
 * DestinyDefinitionsDestinyProgressionRewardItemQuantity Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyProgressionRewardItemQuantity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyProgressionRewardItemQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rewarded_at_progression_level' => 'int',
        'acquisition_behavior' => 'int',
        'ui_display_style' => 'string',
        'claim_unlock_display_strings' => 'string[]',
        'item_hash' => 'int',
        'item_instance_id' => 'int',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rewarded_at_progression_level' => 'int32',
        'acquisition_behavior' => 'int32',
        'ui_display_style' => null,
        'claim_unlock_display_strings' => null,
        'item_hash' => 'uint32',
        'item_instance_id' => 'int64',
        'quantity' => 'int32'
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
        'rewarded_at_progression_level' => 'rewardedAtProgressionLevel',
        'acquisition_behavior' => 'acquisitionBehavior',
        'ui_display_style' => 'uiDisplayStyle',
        'claim_unlock_display_strings' => 'claimUnlockDisplayStrings',
        'item_hash' => 'itemHash',
        'item_instance_id' => 'itemInstanceId',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rewarded_at_progression_level' => 'setRewardedAtProgressionLevel',
        'acquisition_behavior' => 'setAcquisitionBehavior',
        'ui_display_style' => 'setUiDisplayStyle',
        'claim_unlock_display_strings' => 'setClaimUnlockDisplayStrings',
        'item_hash' => 'setItemHash',
        'item_instance_id' => 'setItemInstanceId',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rewarded_at_progression_level' => 'getRewardedAtProgressionLevel',
        'acquisition_behavior' => 'getAcquisitionBehavior',
        'ui_display_style' => 'getUiDisplayStyle',
        'claim_unlock_display_strings' => 'getClaimUnlockDisplayStrings',
        'item_hash' => 'getItemHash',
        'item_instance_id' => 'getItemInstanceId',
        'quantity' => 'getQuantity'
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
        $this->container['rewarded_at_progression_level'] = $data['rewarded_at_progression_level'] ?? null;
        $this->container['acquisition_behavior'] = $data['acquisition_behavior'] ?? null;
        $this->container['ui_display_style'] = $data['ui_display_style'] ?? null;
        $this->container['claim_unlock_display_strings'] = $data['claim_unlock_display_strings'] ?? null;
        $this->container['item_hash'] = $data['item_hash'] ?? null;
        $this->container['item_instance_id'] = $data['item_instance_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
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
     * Gets rewarded_at_progression_level
     *
     * @return int|null
     */
    public function getRewardedAtProgressionLevel()
    {
        return $this->container['rewarded_at_progression_level'];
    }

    /**
     * Sets rewarded_at_progression_level
     *
     * @param int|null $rewarded_at_progression_level rewarded_at_progression_level
     *
     * @return self
     */
    public function setRewardedAtProgressionLevel($rewarded_at_progression_level)
    {
        $this->container['rewarded_at_progression_level'] = $rewarded_at_progression_level;

        return $this;
    }

    /**
     * Gets acquisition_behavior
     *
     * @return int|null
     */
    public function getAcquisitionBehavior()
    {
        return $this->container['acquisition_behavior'];
    }

    /**
     * Sets acquisition_behavior
     *
     * @param int|null $acquisition_behavior acquisition_behavior
     *
     * @return self
     */
    public function setAcquisitionBehavior($acquisition_behavior)
    {
        $this->container['acquisition_behavior'] = $acquisition_behavior;

        return $this;
    }

    /**
     * Gets ui_display_style
     *
     * @return string|null
     */
    public function getUiDisplayStyle()
    {
        return $this->container['ui_display_style'];
    }

    /**
     * Sets ui_display_style
     *
     * @param string|null $ui_display_style ui_display_style
     *
     * @return self
     */
    public function setUiDisplayStyle($ui_display_style)
    {
        $this->container['ui_display_style'] = $ui_display_style;

        return $this;
    }

    /**
     * Gets claim_unlock_display_strings
     *
     * @return string[]|null
     */
    public function getClaimUnlockDisplayStrings()
    {
        return $this->container['claim_unlock_display_strings'];
    }

    /**
     * Sets claim_unlock_display_strings
     *
     * @param string[]|null $claim_unlock_display_strings claim_unlock_display_strings
     *
     * @return self
     */
    public function setClaimUnlockDisplayStrings($claim_unlock_display_strings)
    {
        $this->container['claim_unlock_display_strings'] = $claim_unlock_display_strings;

        return $this;
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
     * @param int|null $item_hash The hash identifier for the item in question. Use it to look up the item's DestinyInventoryItemDefinition.
     *
     * @return self
     */
    public function setItemHash($item_hash)
    {
        $this->container['item_hash'] = $item_hash;

        return $this;
    }

    /**
     * Gets item_instance_id
     *
     * @return int|null
     */
    public function getItemInstanceId()
    {
        return $this->container['item_instance_id'];
    }

    /**
     * Sets item_instance_id
     *
     * @param int|null $item_instance_id If this quantity is referring to a specific instance of an item, this will have the item's instance ID. Normally, this will be null.
     *
     * @return self
     */
    public function setItemInstanceId($item_instance_id)
    {
        $this->container['item_instance_id'] = $item_instance_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The amount of the item needed/available depending on the context of where DestinyItemQuantity is being used.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


