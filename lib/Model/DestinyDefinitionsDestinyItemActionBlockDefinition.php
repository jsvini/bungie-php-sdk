<?php
/**
 * DestinyDefinitionsDestinyItemActionBlockDefinition
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
 * DestinyDefinitionsDestinyItemActionBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description If an item can have an action performed on it (like \&quot;Dismantle\&quot;), it will be defined here if you care.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyItemActionBlockDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemActionBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verb_name' => 'string',
        'verb_description' => 'string',
        'is_positive' => 'bool',
        'overlay_screen_name' => 'string',
        'overlay_icon' => 'string',
        'required_cooldown_seconds' => 'int',
        'required_items' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyItemActionRequiredItemDefinition[]',
        'progression_rewards' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyProgressionRewardDefinition[]',
        'action_type_label' => 'string',
        'required_location' => 'string',
        'required_cooldown_hash' => 'int',
        'delete_on_action' => 'bool',
        'consume_entire_stack' => 'bool',
        'use_on_acquire' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'verb_name' => null,
        'verb_description' => null,
        'is_positive' => null,
        'overlay_screen_name' => null,
        'overlay_icon' => null,
        'required_cooldown_seconds' => 'int32',
        'required_items' => null,
        'progression_rewards' => null,
        'action_type_label' => null,
        'required_location' => null,
        'required_cooldown_hash' => 'uint32',
        'delete_on_action' => null,
        'consume_entire_stack' => null,
        'use_on_acquire' => null
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
        'verb_name' => 'verbName',
        'verb_description' => 'verbDescription',
        'is_positive' => 'isPositive',
        'overlay_screen_name' => 'overlayScreenName',
        'overlay_icon' => 'overlayIcon',
        'required_cooldown_seconds' => 'requiredCooldownSeconds',
        'required_items' => 'requiredItems',
        'progression_rewards' => 'progressionRewards',
        'action_type_label' => 'actionTypeLabel',
        'required_location' => 'requiredLocation',
        'required_cooldown_hash' => 'requiredCooldownHash',
        'delete_on_action' => 'deleteOnAction',
        'consume_entire_stack' => 'consumeEntireStack',
        'use_on_acquire' => 'useOnAcquire'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verb_name' => 'setVerbName',
        'verb_description' => 'setVerbDescription',
        'is_positive' => 'setIsPositive',
        'overlay_screen_name' => 'setOverlayScreenName',
        'overlay_icon' => 'setOverlayIcon',
        'required_cooldown_seconds' => 'setRequiredCooldownSeconds',
        'required_items' => 'setRequiredItems',
        'progression_rewards' => 'setProgressionRewards',
        'action_type_label' => 'setActionTypeLabel',
        'required_location' => 'setRequiredLocation',
        'required_cooldown_hash' => 'setRequiredCooldownHash',
        'delete_on_action' => 'setDeleteOnAction',
        'consume_entire_stack' => 'setConsumeEntireStack',
        'use_on_acquire' => 'setUseOnAcquire'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verb_name' => 'getVerbName',
        'verb_description' => 'getVerbDescription',
        'is_positive' => 'getIsPositive',
        'overlay_screen_name' => 'getOverlayScreenName',
        'overlay_icon' => 'getOverlayIcon',
        'required_cooldown_seconds' => 'getRequiredCooldownSeconds',
        'required_items' => 'getRequiredItems',
        'progression_rewards' => 'getProgressionRewards',
        'action_type_label' => 'getActionTypeLabel',
        'required_location' => 'getRequiredLocation',
        'required_cooldown_hash' => 'getRequiredCooldownHash',
        'delete_on_action' => 'getDeleteOnAction',
        'consume_entire_stack' => 'getConsumeEntireStack',
        'use_on_acquire' => 'getUseOnAcquire'
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
        $this->container['verb_name'] = $data['verb_name'] ?? null;
        $this->container['verb_description'] = $data['verb_description'] ?? null;
        $this->container['is_positive'] = $data['is_positive'] ?? null;
        $this->container['overlay_screen_name'] = $data['overlay_screen_name'] ?? null;
        $this->container['overlay_icon'] = $data['overlay_icon'] ?? null;
        $this->container['required_cooldown_seconds'] = $data['required_cooldown_seconds'] ?? null;
        $this->container['required_items'] = $data['required_items'] ?? null;
        $this->container['progression_rewards'] = $data['progression_rewards'] ?? null;
        $this->container['action_type_label'] = $data['action_type_label'] ?? null;
        $this->container['required_location'] = $data['required_location'] ?? null;
        $this->container['required_cooldown_hash'] = $data['required_cooldown_hash'] ?? null;
        $this->container['delete_on_action'] = $data['delete_on_action'] ?? null;
        $this->container['consume_entire_stack'] = $data['consume_entire_stack'] ?? null;
        $this->container['use_on_acquire'] = $data['use_on_acquire'] ?? null;
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
     * Gets verb_name
     *
     * @return string|null
     */
    public function getVerbName()
    {
        return $this->container['verb_name'];
    }

    /**
     * Sets verb_name
     *
     * @param string|null $verb_name Localized text for the verb of the action being performed.
     *
     * @return self
     */
    public function setVerbName($verb_name)
    {
        $this->container['verb_name'] = $verb_name;

        return $this;
    }

    /**
     * Gets verb_description
     *
     * @return string|null
     */
    public function getVerbDescription()
    {
        return $this->container['verb_description'];
    }

    /**
     * Sets verb_description
     *
     * @param string|null $verb_description Localized text describing the action being performed.
     *
     * @return self
     */
    public function setVerbDescription($verb_description)
    {
        $this->container['verb_description'] = $verb_description;

        return $this;
    }

    /**
     * Gets is_positive
     *
     * @return bool|null
     */
    public function getIsPositive()
    {
        return $this->container['is_positive'];
    }

    /**
     * Sets is_positive
     *
     * @param bool|null $is_positive The content has this property, however it's not entirely clear how it is used.
     *
     * @return self
     */
    public function setIsPositive($is_positive)
    {
        $this->container['is_positive'] = $is_positive;

        return $this;
    }

    /**
     * Gets overlay_screen_name
     *
     * @return string|null
     */
    public function getOverlayScreenName()
    {
        return $this->container['overlay_screen_name'];
    }

    /**
     * Sets overlay_screen_name
     *
     * @param string|null $overlay_screen_name If the action has an overlay screen associated with it, this is the name of that screen. Unfortunately, we cannot return the screen's data itself.
     *
     * @return self
     */
    public function setOverlayScreenName($overlay_screen_name)
    {
        $this->container['overlay_screen_name'] = $overlay_screen_name;

        return $this;
    }

    /**
     * Gets overlay_icon
     *
     * @return string|null
     */
    public function getOverlayIcon()
    {
        return $this->container['overlay_icon'];
    }

    /**
     * Sets overlay_icon
     *
     * @param string|null $overlay_icon The icon associated with the overlay screen for the action, if any.
     *
     * @return self
     */
    public function setOverlayIcon($overlay_icon)
    {
        $this->container['overlay_icon'] = $overlay_icon;

        return $this;
    }

    /**
     * Gets required_cooldown_seconds
     *
     * @return int|null
     */
    public function getRequiredCooldownSeconds()
    {
        return $this->container['required_cooldown_seconds'];
    }

    /**
     * Sets required_cooldown_seconds
     *
     * @param int|null $required_cooldown_seconds The number of seconds to delay before allowing this action to be performed again.
     *
     * @return self
     */
    public function setRequiredCooldownSeconds($required_cooldown_seconds)
    {
        $this->container['required_cooldown_seconds'] = $required_cooldown_seconds;

        return $this;
    }

    /**
     * Gets required_items
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyItemActionRequiredItemDefinition[]|null
     */
    public function getRequiredItems()
    {
        return $this->container['required_items'];
    }

    /**
     * Sets required_items
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyItemActionRequiredItemDefinition[]|null $required_items If the action requires other items to exist or be destroyed, this is the list of those items and requirements.
     *
     * @return self
     */
    public function setRequiredItems($required_items)
    {
        $this->container['required_items'] = $required_items;

        return $this;
    }

    /**
     * Gets progression_rewards
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyProgressionRewardDefinition[]|null
     */
    public function getProgressionRewards()
    {
        return $this->container['progression_rewards'];
    }

    /**
     * Sets progression_rewards
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyProgressionRewardDefinition[]|null $progression_rewards If performing this action earns you Progression, this is the list of progressions and values granted for those progressions by performing this action.
     *
     * @return self
     */
    public function setProgressionRewards($progression_rewards)
    {
        $this->container['progression_rewards'] = $progression_rewards;

        return $this;
    }

    /**
     * Gets action_type_label
     *
     * @return string|null
     */
    public function getActionTypeLabel()
    {
        return $this->container['action_type_label'];
    }

    /**
     * Sets action_type_label
     *
     * @param string|null $action_type_label The internal identifier for the action.
     *
     * @return self
     */
    public function setActionTypeLabel($action_type_label)
    {
        $this->container['action_type_label'] = $action_type_label;

        return $this;
    }

    /**
     * Gets required_location
     *
     * @return string|null
     */
    public function getRequiredLocation()
    {
        return $this->container['required_location'];
    }

    /**
     * Sets required_location
     *
     * @param string|null $required_location Theoretically, an item could have a localized string for a hint about the location in which the action should be performed. In practice, no items yet have this property.
     *
     * @return self
     */
    public function setRequiredLocation($required_location)
    {
        $this->container['required_location'] = $required_location;

        return $this;
    }

    /**
     * Gets required_cooldown_hash
     *
     * @return int|null
     */
    public function getRequiredCooldownHash()
    {
        return $this->container['required_cooldown_hash'];
    }

    /**
     * Sets required_cooldown_hash
     *
     * @param int|null $required_cooldown_hash The identifier hash for the Cooldown associated with this action. We have not pulled this data yet for you to have more data to use for cooldowns.
     *
     * @return self
     */
    public function setRequiredCooldownHash($required_cooldown_hash)
    {
        $this->container['required_cooldown_hash'] = $required_cooldown_hash;

        return $this;
    }

    /**
     * Gets delete_on_action
     *
     * @return bool|null
     */
    public function getDeleteOnAction()
    {
        return $this->container['delete_on_action'];
    }

    /**
     * Sets delete_on_action
     *
     * @param bool|null $delete_on_action If true, the item is deleted when the action completes.
     *
     * @return self
     */
    public function setDeleteOnAction($delete_on_action)
    {
        $this->container['delete_on_action'] = $delete_on_action;

        return $this;
    }

    /**
     * Gets consume_entire_stack
     *
     * @return bool|null
     */
    public function getConsumeEntireStack()
    {
        return $this->container['consume_entire_stack'];
    }

    /**
     * Sets consume_entire_stack
     *
     * @param bool|null $consume_entire_stack If true, the entire stack is deleted when the action completes.
     *
     * @return self
     */
    public function setConsumeEntireStack($consume_entire_stack)
    {
        $this->container['consume_entire_stack'] = $consume_entire_stack;

        return $this;
    }

    /**
     * Gets use_on_acquire
     *
     * @return bool|null
     */
    public function getUseOnAcquire()
    {
        return $this->container['use_on_acquire'];
    }

    /**
     * Sets use_on_acquire
     *
     * @param bool|null $use_on_acquire If true, this action will be performed as soon as you earn this item. Some rewards work this way, providing you a single item to pick up from a reward-granting vendor in-game and then immediately consuming itself to provide you multiple items.
     *
     * @return self
     */
    public function setUseOnAcquire($use_on_acquire)
    {
        $this->container['use_on_acquire'] = $use_on_acquire;

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


