<?php
/**
 * DestinyDestinyProgression
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
 * DestinyDestinyProgression Class Doc Comment
 *
 * @category Class
 * @description Information about a current character&#39;s status with a Progression. A progression is a value that can increase with activity and has levels. Think Character Level and Reputation Levels. Combine this \&quot;live\&quot; data with the related DestinyProgressionDefinition for a full picture of the Progression.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDestinyProgression implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.DestinyProgression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'progression_hash' => 'int',
        'daily_progress' => 'int',
        'daily_limit' => 'int',
        'weekly_progress' => 'int',
        'weekly_limit' => 'int',
        'current_progress' => 'int',
        'level' => 'int',
        'level_cap' => 'int',
        'step_index' => 'int',
        'progress_to_next_level' => 'int',
        'next_level_at' => 'int',
        'current_reset_count' => 'int',
        'season_resets' => '\OpenAPI\Client\Model\DestinyDestinyProgressionResetEntry[]',
        'reward_item_states' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'progression_hash' => 'uint32',
        'daily_progress' => 'int32',
        'daily_limit' => 'int32',
        'weekly_progress' => 'int32',
        'weekly_limit' => 'int32',
        'current_progress' => 'int32',
        'level' => 'int32',
        'level_cap' => 'int32',
        'step_index' => 'int32',
        'progress_to_next_level' => 'int32',
        'next_level_at' => 'int32',
        'current_reset_count' => 'int32',
        'season_resets' => null,
        'reward_item_states' => 'int32'
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
        'progression_hash' => 'progressionHash',
        'daily_progress' => 'dailyProgress',
        'daily_limit' => 'dailyLimit',
        'weekly_progress' => 'weeklyProgress',
        'weekly_limit' => 'weeklyLimit',
        'current_progress' => 'currentProgress',
        'level' => 'level',
        'level_cap' => 'levelCap',
        'step_index' => 'stepIndex',
        'progress_to_next_level' => 'progressToNextLevel',
        'next_level_at' => 'nextLevelAt',
        'current_reset_count' => 'currentResetCount',
        'season_resets' => 'seasonResets',
        'reward_item_states' => 'rewardItemStates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'progression_hash' => 'setProgressionHash',
        'daily_progress' => 'setDailyProgress',
        'daily_limit' => 'setDailyLimit',
        'weekly_progress' => 'setWeeklyProgress',
        'weekly_limit' => 'setWeeklyLimit',
        'current_progress' => 'setCurrentProgress',
        'level' => 'setLevel',
        'level_cap' => 'setLevelCap',
        'step_index' => 'setStepIndex',
        'progress_to_next_level' => 'setProgressToNextLevel',
        'next_level_at' => 'setNextLevelAt',
        'current_reset_count' => 'setCurrentResetCount',
        'season_resets' => 'setSeasonResets',
        'reward_item_states' => 'setRewardItemStates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'progression_hash' => 'getProgressionHash',
        'daily_progress' => 'getDailyProgress',
        'daily_limit' => 'getDailyLimit',
        'weekly_progress' => 'getWeeklyProgress',
        'weekly_limit' => 'getWeeklyLimit',
        'current_progress' => 'getCurrentProgress',
        'level' => 'getLevel',
        'level_cap' => 'getLevelCap',
        'step_index' => 'getStepIndex',
        'progress_to_next_level' => 'getProgressToNextLevel',
        'next_level_at' => 'getNextLevelAt',
        'current_reset_count' => 'getCurrentResetCount',
        'season_resets' => 'getSeasonResets',
        'reward_item_states' => 'getRewardItemStates'
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
        $this->container['progression_hash'] = $data['progression_hash'] ?? null;
        $this->container['daily_progress'] = $data['daily_progress'] ?? null;
        $this->container['daily_limit'] = $data['daily_limit'] ?? null;
        $this->container['weekly_progress'] = $data['weekly_progress'] ?? null;
        $this->container['weekly_limit'] = $data['weekly_limit'] ?? null;
        $this->container['current_progress'] = $data['current_progress'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['level_cap'] = $data['level_cap'] ?? null;
        $this->container['step_index'] = $data['step_index'] ?? null;
        $this->container['progress_to_next_level'] = $data['progress_to_next_level'] ?? null;
        $this->container['next_level_at'] = $data['next_level_at'] ?? null;
        $this->container['current_reset_count'] = $data['current_reset_count'] ?? null;
        $this->container['season_resets'] = $data['season_resets'] ?? null;
        $this->container['reward_item_states'] = $data['reward_item_states'] ?? null;
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
     * Gets progression_hash
     *
     * @return int|null
     */
    public function getProgressionHash()
    {
        return $this->container['progression_hash'];
    }

    /**
     * Sets progression_hash
     *
     * @param int|null $progression_hash The hash identifier of the Progression in question. Use it to look up the DestinyProgressionDefinition in static data.
     *
     * @return self
     */
    public function setProgressionHash($progression_hash)
    {
        $this->container['progression_hash'] = $progression_hash;

        return $this;
    }

    /**
     * Gets daily_progress
     *
     * @return int|null
     */
    public function getDailyProgress()
    {
        return $this->container['daily_progress'];
    }

    /**
     * Sets daily_progress
     *
     * @param int|null $daily_progress The amount of progress earned today for this progression.
     *
     * @return self
     */
    public function setDailyProgress($daily_progress)
    {
        $this->container['daily_progress'] = $daily_progress;

        return $this;
    }

    /**
     * Gets daily_limit
     *
     * @return int|null
     */
    public function getDailyLimit()
    {
        return $this->container['daily_limit'];
    }

    /**
     * Sets daily_limit
     *
     * @param int|null $daily_limit If this progression has a daily limit, this is that limit.
     *
     * @return self
     */
    public function setDailyLimit($daily_limit)
    {
        $this->container['daily_limit'] = $daily_limit;

        return $this;
    }

    /**
     * Gets weekly_progress
     *
     * @return int|null
     */
    public function getWeeklyProgress()
    {
        return $this->container['weekly_progress'];
    }

    /**
     * Sets weekly_progress
     *
     * @param int|null $weekly_progress The amount of progress earned toward this progression in the current week.
     *
     * @return self
     */
    public function setWeeklyProgress($weekly_progress)
    {
        $this->container['weekly_progress'] = $weekly_progress;

        return $this;
    }

    /**
     * Gets weekly_limit
     *
     * @return int|null
     */
    public function getWeeklyLimit()
    {
        return $this->container['weekly_limit'];
    }

    /**
     * Sets weekly_limit
     *
     * @param int|null $weekly_limit If this progression has a weekly limit, this is that limit.
     *
     * @return self
     */
    public function setWeeklyLimit($weekly_limit)
    {
        $this->container['weekly_limit'] = $weekly_limit;

        return $this;
    }

    /**
     * Gets current_progress
     *
     * @return int|null
     */
    public function getCurrentProgress()
    {
        return $this->container['current_progress'];
    }

    /**
     * Sets current_progress
     *
     * @param int|null $current_progress This is the total amount of progress obtained overall for this progression (for instance, the total amount of Character Level experience earned)
     *
     * @return self
     */
    public function setCurrentProgress($current_progress)
    {
        $this->container['current_progress'] = $current_progress;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level This is the level of the progression (for instance, the Character Level).
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets level_cap
     *
     * @return int|null
     */
    public function getLevelCap()
    {
        return $this->container['level_cap'];
    }

    /**
     * Sets level_cap
     *
     * @param int|null $level_cap This is the maximum possible level you can achieve for this progression (for example, the maximum character level obtainable)
     *
     * @return self
     */
    public function setLevelCap($level_cap)
    {
        $this->container['level_cap'] = $level_cap;

        return $this;
    }

    /**
     * Gets step_index
     *
     * @return int|null
     */
    public function getStepIndex()
    {
        return $this->container['step_index'];
    }

    /**
     * Sets step_index
     *
     * @param int|null $step_index Progressions define their levels in \"steps\". Since the last step may be repeatable, the user may be at a higher level than the actual Step achieved in the progression. Not necessarily useful, but potentially interesting for those cruising the API. Relate this to the \"steps\" property of the DestinyProgression to see which step the user is on, if you care about that. (Note that this is Content Version dependent since it refers to indexes.)
     *
     * @return self
     */
    public function setStepIndex($step_index)
    {
        $this->container['step_index'] = $step_index;

        return $this;
    }

    /**
     * Gets progress_to_next_level
     *
     * @return int|null
     */
    public function getProgressToNextLevel()
    {
        return $this->container['progress_to_next_level'];
    }

    /**
     * Sets progress_to_next_level
     *
     * @param int|null $progress_to_next_level The amount of progression (i.e. \"Experience\") needed to reach the next level of this Progression. Jeez, progression is such an overloaded word.
     *
     * @return self
     */
    public function setProgressToNextLevel($progress_to_next_level)
    {
        $this->container['progress_to_next_level'] = $progress_to_next_level;

        return $this;
    }

    /**
     * Gets next_level_at
     *
     * @return int|null
     */
    public function getNextLevelAt()
    {
        return $this->container['next_level_at'];
    }

    /**
     * Sets next_level_at
     *
     * @param int|null $next_level_at The total amount of progression (i.e. \"Experience\") needed in order to reach the next level.
     *
     * @return self
     */
    public function setNextLevelAt($next_level_at)
    {
        $this->container['next_level_at'] = $next_level_at;

        return $this;
    }

    /**
     * Gets current_reset_count
     *
     * @return int|null
     */
    public function getCurrentResetCount()
    {
        return $this->container['current_reset_count'];
    }

    /**
     * Sets current_reset_count
     *
     * @param int|null $current_reset_count The number of resets of this progression you've executed this season, if applicable to this progression.
     *
     * @return self
     */
    public function setCurrentResetCount($current_reset_count)
    {
        $this->container['current_reset_count'] = $current_reset_count;

        return $this;
    }

    /**
     * Gets season_resets
     *
     * @return \OpenAPI\Client\Model\DestinyDestinyProgressionResetEntry[]|null
     */
    public function getSeasonResets()
    {
        return $this->container['season_resets'];
    }

    /**
     * Sets season_resets
     *
     * @param \OpenAPI\Client\Model\DestinyDestinyProgressionResetEntry[]|null $season_resets Information about historical resets of this progression, if there is any data for it.
     *
     * @return self
     */
    public function setSeasonResets($season_resets)
    {
        $this->container['season_resets'] = $season_resets;

        return $this;
    }

    /**
     * Gets reward_item_states
     *
     * @return int[]|null
     */
    public function getRewardItemStates()
    {
        return $this->container['reward_item_states'];
    }

    /**
     * Sets reward_item_states
     *
     * @param int[]|null $reward_item_states Information about historical rewards for this progression, if there is any data for it.
     *
     * @return self
     */
    public function setRewardItemStates($reward_item_states)
    {
        $this->container['reward_item_states'] = $reward_item_states;

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

