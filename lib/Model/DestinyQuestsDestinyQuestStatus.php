<?php
/**
 * DestinyQuestsDestinyQuestStatus
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
 * DestinyQuestsDestinyQuestStatus Class Doc Comment
 *
 * @category Class
 * @description Data regarding the progress of a Quest for a specific character. Quests are composed of multiple steps, each with potentially multiple objectives: this QuestStatus will return Objective data for the *currently active* step in this quest.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyQuestsDestinyQuestStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Quests.DestinyQuestStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quest_hash' => 'int',
        'step_hash' => 'int',
        'step_objectives' => '\OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]',
        'tracked' => 'bool',
        'item_instance_id' => 'int',
        'completed' => 'bool',
        'redeemed' => 'bool',
        'started' => 'bool',
        'vendor_hash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quest_hash' => 'uint32',
        'step_hash' => 'uint32',
        'step_objectives' => null,
        'tracked' => null,
        'item_instance_id' => 'int64',
        'completed' => null,
        'redeemed' => null,
        'started' => null,
        'vendor_hash' => 'uint32'
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
        'quest_hash' => 'questHash',
        'step_hash' => 'stepHash',
        'step_objectives' => 'stepObjectives',
        'tracked' => 'tracked',
        'item_instance_id' => 'itemInstanceId',
        'completed' => 'completed',
        'redeemed' => 'redeemed',
        'started' => 'started',
        'vendor_hash' => 'vendorHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quest_hash' => 'setQuestHash',
        'step_hash' => 'setStepHash',
        'step_objectives' => 'setStepObjectives',
        'tracked' => 'setTracked',
        'item_instance_id' => 'setItemInstanceId',
        'completed' => 'setCompleted',
        'redeemed' => 'setRedeemed',
        'started' => 'setStarted',
        'vendor_hash' => 'setVendorHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quest_hash' => 'getQuestHash',
        'step_hash' => 'getStepHash',
        'step_objectives' => 'getStepObjectives',
        'tracked' => 'getTracked',
        'item_instance_id' => 'getItemInstanceId',
        'completed' => 'getCompleted',
        'redeemed' => 'getRedeemed',
        'started' => 'getStarted',
        'vendor_hash' => 'getVendorHash'
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
        $this->container['quest_hash'] = $data['quest_hash'] ?? null;
        $this->container['step_hash'] = $data['step_hash'] ?? null;
        $this->container['step_objectives'] = $data['step_objectives'] ?? null;
        $this->container['tracked'] = $data['tracked'] ?? null;
        $this->container['item_instance_id'] = $data['item_instance_id'] ?? null;
        $this->container['completed'] = $data['completed'] ?? null;
        $this->container['redeemed'] = $data['redeemed'] ?? null;
        $this->container['started'] = $data['started'] ?? null;
        $this->container['vendor_hash'] = $data['vendor_hash'] ?? null;
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
     * Gets quest_hash
     *
     * @return int|null
     */
    public function getQuestHash()
    {
        return $this->container['quest_hash'];
    }

    /**
     * Sets quest_hash
     *
     * @param int|null $quest_hash The hash identifier for the Quest Item. (Note: Quests are defined as Items, and thus you would use this to look up the quest's DestinyInventoryItemDefinition). For information on all steps in the quest, you can then examine its DestinyInventoryItemDefinition.setData property for Quest Steps (which are *also* items). You can use the Item Definition to display human readable data about the overall quest.
     *
     * @return self
     */
    public function setQuestHash($quest_hash)
    {
        $this->container['quest_hash'] = $quest_hash;

        return $this;
    }

    /**
     * Gets step_hash
     *
     * @return int|null
     */
    public function getStepHash()
    {
        return $this->container['step_hash'];
    }

    /**
     * Sets step_hash
     *
     * @param int|null $step_hash The hash identifier of the current Quest Step, which is also a DestinyInventoryItemDefinition. You can use this to get human readable data about the current step and what to do in that step.
     *
     * @return self
     */
    public function setStepHash($step_hash)
    {
        $this->container['step_hash'] = $step_hash;

        return $this;
    }

    /**
     * Gets step_objectives
     *
     * @return \OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]|null
     */
    public function getStepObjectives()
    {
        return $this->container['step_objectives'];
    }

    /**
     * Sets step_objectives
     *
     * @param \OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]|null $step_objectives A step can have multiple objectives. This will give you the progress for each objective in the current step, in the order in which they are rendered in-game.
     *
     * @return self
     */
    public function setStepObjectives($step_objectives)
    {
        $this->container['step_objectives'] = $step_objectives;

        return $this;
    }

    /**
     * Gets tracked
     *
     * @return bool|null
     */
    public function getTracked()
    {
        return $this->container['tracked'];
    }

    /**
     * Sets tracked
     *
     * @param bool|null $tracked Whether or not the quest is tracked
     *
     * @return self
     */
    public function setTracked($tracked)
    {
        $this->container['tracked'] = $tracked;

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
     * @param int|null $item_instance_id The current Quest Step will be an instanced item in the player's inventory. If you care about that, this is the instance ID of that item.
     *
     * @return self
     */
    public function setItemInstanceId($item_instance_id)
    {
        $this->container['item_instance_id'] = $item_instance_id;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed Whether or not the whole quest has been completed, regardless of whether or not you have redeemed the rewards for the quest.
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets redeemed
     *
     * @return bool|null
     */
    public function getRedeemed()
    {
        return $this->container['redeemed'];
    }

    /**
     * Sets redeemed
     *
     * @param bool|null $redeemed Whether or not you have redeemed rewards for this quest.
     *
     * @return self
     */
    public function setRedeemed($redeemed)
    {
        $this->container['redeemed'] = $redeemed;

        return $this;
    }

    /**
     * Gets started
     *
     * @return bool|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param bool|null $started Whether or not you have started this quest.
     *
     * @return self
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets vendor_hash
     *
     * @return int|null
     */
    public function getVendorHash()
    {
        return $this->container['vendor_hash'];
    }

    /**
     * Sets vendor_hash
     *
     * @param int|null $vendor_hash If the quest has a related Vendor that you should talk to in order to initiate the quest/earn rewards/continue the quest, this will be the hash identifier of that Vendor. Look it up its DestinyVendorDefinition.
     *
     * @return self
     */
    public function setVendorHash($vendor_hash)
    {
        $this->container['vendor_hash'] = $vendor_hash;

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


