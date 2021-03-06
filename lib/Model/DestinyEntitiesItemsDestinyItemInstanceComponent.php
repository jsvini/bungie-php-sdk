<?php
/**
 * DestinyEntitiesItemsDestinyItemInstanceComponent
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
 * DestinyEntitiesItemsDestinyItemInstanceComponent Class Doc Comment
 *
 * @category Class
 * @description If an item is \&quot;instanced\&quot;, this will contain information about the item&#39;s instance that doesn&#39;t fit easily into other components. One might say this is the \&quot;essential\&quot; instance data for the item.  Items are instanced if they require information or state that can vary. For instance, weapons are Instanced: they are given a unique identifier, uniquely generated stats, and can have their properties altered. Non-instanced items have none of these things: for instance, Glimmer has no unique properties aside from how much of it you own.  You can tell from an item&#39;s definition whether it will be instanced or not by looking at the DestinyInventoryItemDefinition&#39;s definition.inventory.isInstanceItem property.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyEntitiesItemsDestinyItemInstanceComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Items.DestinyItemInstanceComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'damage_type' => 'int',
        'damage_type_hash' => 'int',
        'primary_stat' => 'DestinyDestinyStat',
        'item_level' => 'int',
        'quality' => 'int',
        'is_equipped' => 'bool',
        'can_equip' => 'bool',
        'equip_required_level' => 'int',
        'unlock_hashes_required_to_equip' => 'int[]',
        'cannot_equip_reason' => 'int',
        'breaker_type' => 'int',
        'breaker_type_hash' => 'int',
        'energy' => 'DestinyEntitiesItemsDestinyItemInstanceEnergy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'damage_type' => 'int32',
        'damage_type_hash' => 'uint32',
        'primary_stat' => null,
        'item_level' => 'int32',
        'quality' => 'int32',
        'is_equipped' => null,
        'can_equip' => null,
        'equip_required_level' => 'int32',
        'unlock_hashes_required_to_equip' => 'uint32',
        'cannot_equip_reason' => 'int32',
        'breaker_type' => 'int32',
        'breaker_type_hash' => 'uint32',
        'energy' => null
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
        'damage_type' => 'damageType',
        'damage_type_hash' => 'damageTypeHash',
        'primary_stat' => 'primaryStat',
        'item_level' => 'itemLevel',
        'quality' => 'quality',
        'is_equipped' => 'isEquipped',
        'can_equip' => 'canEquip',
        'equip_required_level' => 'equipRequiredLevel',
        'unlock_hashes_required_to_equip' => 'unlockHashesRequiredToEquip',
        'cannot_equip_reason' => 'cannotEquipReason',
        'breaker_type' => 'breakerType',
        'breaker_type_hash' => 'breakerTypeHash',
        'energy' => 'energy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'damage_type' => 'setDamageType',
        'damage_type_hash' => 'setDamageTypeHash',
        'primary_stat' => 'setPrimaryStat',
        'item_level' => 'setItemLevel',
        'quality' => 'setQuality',
        'is_equipped' => 'setIsEquipped',
        'can_equip' => 'setCanEquip',
        'equip_required_level' => 'setEquipRequiredLevel',
        'unlock_hashes_required_to_equip' => 'setUnlockHashesRequiredToEquip',
        'cannot_equip_reason' => 'setCannotEquipReason',
        'breaker_type' => 'setBreakerType',
        'breaker_type_hash' => 'setBreakerTypeHash',
        'energy' => 'setEnergy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'damage_type' => 'getDamageType',
        'damage_type_hash' => 'getDamageTypeHash',
        'primary_stat' => 'getPrimaryStat',
        'item_level' => 'getItemLevel',
        'quality' => 'getQuality',
        'is_equipped' => 'getIsEquipped',
        'can_equip' => 'getCanEquip',
        'equip_required_level' => 'getEquipRequiredLevel',
        'unlock_hashes_required_to_equip' => 'getUnlockHashesRequiredToEquip',
        'cannot_equip_reason' => 'getCannotEquipReason',
        'breaker_type' => 'getBreakerType',
        'breaker_type_hash' => 'getBreakerTypeHash',
        'energy' => 'getEnergy'
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

    const BREAKER_TYPE_0 = 0;
    const BREAKER_TYPE_1 = 1;
    const BREAKER_TYPE_2 = 2;
    const BREAKER_TYPE_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakerTypeAllowableValues()
    {
        return [
            self::BREAKER_TYPE_0,
            self::BREAKER_TYPE_1,
            self::BREAKER_TYPE_2,
            self::BREAKER_TYPE_3,
        ];
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
        $this->container['damage_type'] = $data['damage_type'] ?? null;
        $this->container['damage_type_hash'] = $data['damage_type_hash'] ?? null;
        $this->container['primary_stat'] = $data['primary_stat'] ?? null;
        $this->container['item_level'] = $data['item_level'] ?? null;
        $this->container['quality'] = $data['quality'] ?? null;
        $this->container['is_equipped'] = $data['is_equipped'] ?? null;
        $this->container['can_equip'] = $data['can_equip'] ?? null;
        $this->container['equip_required_level'] = $data['equip_required_level'] ?? null;
        $this->container['unlock_hashes_required_to_equip'] = $data['unlock_hashes_required_to_equip'] ?? null;
        $this->container['cannot_equip_reason'] = $data['cannot_equip_reason'] ?? null;
        $this->container['breaker_type'] = $data['breaker_type'] ?? null;
        $this->container['breaker_type_hash'] = $data['breaker_type_hash'] ?? null;
        $this->container['energy'] = $data['energy'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBreakerTypeAllowableValues();
        if (!is_null($this->container['breaker_type']) && !in_array($this->container['breaker_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'breaker_type', must be one of '%s'",
                $this->container['breaker_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets damage_type
     *
     * @return int|null
     */
    public function getDamageType()
    {
        return $this->container['damage_type'];
    }

    /**
     * Sets damage_type
     *
     * @param int|null $damage_type If the item has a damage type, this is the item's current damage type.
     *
     * @return self
     */
    public function setDamageType($damage_type)
    {
        $this->container['damage_type'] = $damage_type;

        return $this;
    }

    /**
     * Gets damage_type_hash
     *
     * @return int|null
     */
    public function getDamageTypeHash()
    {
        return $this->container['damage_type_hash'];
    }

    /**
     * Sets damage_type_hash
     *
     * @param int|null $damage_type_hash The current damage type's hash, so you can look up localized info and icons for it.
     *
     * @return self
     */
    public function setDamageTypeHash($damage_type_hash)
    {
        $this->container['damage_type_hash'] = $damage_type_hash;

        return $this;
    }

    /**
     * Gets primary_stat
     *
     * @return DestinyDestinyStat|null
     */
    public function getPrimaryStat()
    {
        return $this->container['primary_stat'];
    }

    /**
     * Sets primary_stat
     *
     * @param DestinyDestinyStat|null $primary_stat The item stat that we consider to be \"primary\" for the item. For instance, this would be \"Attack\" for Weapons or \"Defense\" for armor.
     *
     * @return self
     */
    public function setPrimaryStat($primary_stat)
    {
        $this->container['primary_stat'] = $primary_stat;

        return $this;
    }

    /**
     * Gets item_level
     *
     * @return int|null
     */
    public function getItemLevel()
    {
        return $this->container['item_level'];
    }

    /**
     * Sets item_level
     *
     * @param int|null $item_level The Item's \"Level\" has the most significant bearing on its stats, such as Light and Power.
     *
     * @return self
     */
    public function setItemLevel($item_level)
    {
        $this->container['item_level'] = $item_level;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return int|null
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param int|null $quality The \"Quality\" of the item has a lesser - but still impactful - bearing on stats like Light and Power.
     *
     * @return self
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets is_equipped
     *
     * @return bool|null
     */
    public function getIsEquipped()
    {
        return $this->container['is_equipped'];
    }

    /**
     * Sets is_equipped
     *
     * @param bool|null $is_equipped Is the item currently equipped on the given character?
     *
     * @return self
     */
    public function setIsEquipped($is_equipped)
    {
        $this->container['is_equipped'] = $is_equipped;

        return $this;
    }

    /**
     * Gets can_equip
     *
     * @return bool|null
     */
    public function getCanEquip()
    {
        return $this->container['can_equip'];
    }

    /**
     * Sets can_equip
     *
     * @param bool|null $can_equip If this is an equippable item, you can check it here. There are permanent as well as transitory reasons why an item might not be able to be equipped: check cannotEquipReason for details.
     *
     * @return self
     */
    public function setCanEquip($can_equip)
    {
        $this->container['can_equip'] = $can_equip;

        return $this;
    }

    /**
     * Gets equip_required_level
     *
     * @return int|null
     */
    public function getEquipRequiredLevel()
    {
        return $this->container['equip_required_level'];
    }

    /**
     * Sets equip_required_level
     *
     * @param int|null $equip_required_level If the item cannot be equipped until you reach a certain level, that level will be reflected here.
     *
     * @return self
     */
    public function setEquipRequiredLevel($equip_required_level)
    {
        $this->container['equip_required_level'] = $equip_required_level;

        return $this;
    }

    /**
     * Gets unlock_hashes_required_to_equip
     *
     * @return int[]|null
     */
    public function getUnlockHashesRequiredToEquip()
    {
        return $this->container['unlock_hashes_required_to_equip'];
    }

    /**
     * Sets unlock_hashes_required_to_equip
     *
     * @param int[]|null $unlock_hashes_required_to_equip Sometimes, there are limitations to equipping that are represented by character-level flags called \"unlocks\".  This is a list of flags that they need in order to equip the item that the character has not met. Use these to look up the descriptions to show in your UI by looking up the relevant DestinyUnlockDefinitions for the hashes.
     *
     * @return self
     */
    public function setUnlockHashesRequiredToEquip($unlock_hashes_required_to_equip)
    {
        $this->container['unlock_hashes_required_to_equip'] = $unlock_hashes_required_to_equip;

        return $this;
    }

    /**
     * Gets cannot_equip_reason
     *
     * @return int|null
     */
    public function getCannotEquipReason()
    {
        return $this->container['cannot_equip_reason'];
    }

    /**
     * Sets cannot_equip_reason
     *
     * @param int|null $cannot_equip_reason If you cannot equip the item, this is a flags enum that enumerates all of the reasons why you couldn't equip the item. You may need to refine your UI further by using unlockHashesRequiredToEquip and equipRequiredLevel.
     *
     * @return self
     */
    public function setCannotEquipReason($cannot_equip_reason)
    {
        $this->container['cannot_equip_reason'] = $cannot_equip_reason;

        return $this;
    }

    /**
     * Gets breaker_type
     *
     * @return int|null
     */
    public function getBreakerType()
    {
        return $this->container['breaker_type'];
    }

    /**
     * Sets breaker_type
     *
     * @param int|null $breaker_type If populated, this item has a breaker type corresponding to the given value. See DestinyBreakerTypeDefinition for more details.
     *
     * @return self
     */
    public function setBreakerType($breaker_type)
    {
        $allowedValues = $this->getBreakerTypeAllowableValues();
        if (!is_null($breaker_type) && !in_array($breaker_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'breaker_type', must be one of '%s'",
                    $breaker_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['breaker_type'] = $breaker_type;

        return $this;
    }

    /**
     * Gets breaker_type_hash
     *
     * @return int|null
     */
    public function getBreakerTypeHash()
    {
        return $this->container['breaker_type_hash'];
    }

    /**
     * Sets breaker_type_hash
     *
     * @param int|null $breaker_type_hash If populated, this is the hash identifier for the item's breaker type. See DestinyBreakerTypeDefinition for more details.
     *
     * @return self
     */
    public function setBreakerTypeHash($breaker_type_hash)
    {
        $this->container['breaker_type_hash'] = $breaker_type_hash;

        return $this;
    }

    /**
     * Gets energy
     *
     * @return DestinyEntitiesItemsDestinyItemInstanceEnergy|null
     */
    public function getEnergy()
    {
        return $this->container['energy'];
    }

    /**
     * Sets energy
     *
     * @param DestinyEntitiesItemsDestinyItemInstanceEnergy|null $energy IF populated, this item supports Energy mechanics (i.e. Armor 2.0), and these are the current details of its energy type and available capacity to spend energy points.
     *
     * @return self
     */
    public function setEnergy($energy)
    {
        $this->container['energy'] = $energy;

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


