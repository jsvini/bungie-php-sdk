<?php
/**
 * DestinyDefinitionsDestinyActivityPlaylistItemDefinition
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
 * DestinyDefinitionsDestinyActivityPlaylistItemDefinition Class Doc Comment
 *
 * @category Class
 * @description If the activity is a playlist, this is the definition for a specific entry in the playlist: a single possible combination of Activity and Activity Mode that can be chosen.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyActivityPlaylistItemDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyActivityPlaylistItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_hash' => 'int',
        'direct_activity_mode_hash' => 'int',
        'direct_activity_mode_type' => 'int',
        'activity_mode_hashes' => 'int[]',
        'activity_mode_types' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity_hash' => 'uint32',
        'direct_activity_mode_hash' => 'uint32',
        'direct_activity_mode_type' => 'int32',
        'activity_mode_hashes' => 'uint32',
        'activity_mode_types' => 'int32'
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
        'activity_hash' => 'activityHash',
        'direct_activity_mode_hash' => 'directActivityModeHash',
        'direct_activity_mode_type' => 'directActivityModeType',
        'activity_mode_hashes' => 'activityModeHashes',
        'activity_mode_types' => 'activityModeTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_hash' => 'setActivityHash',
        'direct_activity_mode_hash' => 'setDirectActivityModeHash',
        'direct_activity_mode_type' => 'setDirectActivityModeType',
        'activity_mode_hashes' => 'setActivityModeHashes',
        'activity_mode_types' => 'setActivityModeTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_hash' => 'getActivityHash',
        'direct_activity_mode_hash' => 'getDirectActivityModeHash',
        'direct_activity_mode_type' => 'getDirectActivityModeType',
        'activity_mode_hashes' => 'getActivityModeHashes',
        'activity_mode_types' => 'getActivityModeTypes'
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

    const DIRECT_ACTIVITY_MODE_TYPE_0 = 0;
    const DIRECT_ACTIVITY_MODE_TYPE_2 = 2;
    const DIRECT_ACTIVITY_MODE_TYPE_3 = 3;
    const DIRECT_ACTIVITY_MODE_TYPE_4 = 4;
    const DIRECT_ACTIVITY_MODE_TYPE_5 = 5;
    const DIRECT_ACTIVITY_MODE_TYPE_6 = 6;
    const DIRECT_ACTIVITY_MODE_TYPE_7 = 7;
    const DIRECT_ACTIVITY_MODE_TYPE_9 = 9;
    const DIRECT_ACTIVITY_MODE_TYPE_10 = 10;
    const DIRECT_ACTIVITY_MODE_TYPE_11 = 11;
    const DIRECT_ACTIVITY_MODE_TYPE_12 = 12;
    const DIRECT_ACTIVITY_MODE_TYPE_13 = 13;
    const DIRECT_ACTIVITY_MODE_TYPE_15 = 15;
    const DIRECT_ACTIVITY_MODE_TYPE_16 = 16;
    const DIRECT_ACTIVITY_MODE_TYPE_17 = 17;
    const DIRECT_ACTIVITY_MODE_TYPE_18 = 18;
    const DIRECT_ACTIVITY_MODE_TYPE_19 = 19;
    const DIRECT_ACTIVITY_MODE_TYPE_20 = 20;
    const DIRECT_ACTIVITY_MODE_TYPE_21 = 21;
    const DIRECT_ACTIVITY_MODE_TYPE_22 = 22;
    const DIRECT_ACTIVITY_MODE_TYPE_24 = 24;
    const DIRECT_ACTIVITY_MODE_TYPE_25 = 25;
    const DIRECT_ACTIVITY_MODE_TYPE_26 = 26;
    const DIRECT_ACTIVITY_MODE_TYPE_27 = 27;
    const DIRECT_ACTIVITY_MODE_TYPE_28 = 28;
    const DIRECT_ACTIVITY_MODE_TYPE_29 = 29;
    const DIRECT_ACTIVITY_MODE_TYPE_30 = 30;
    const DIRECT_ACTIVITY_MODE_TYPE_31 = 31;
    const DIRECT_ACTIVITY_MODE_TYPE_32 = 32;
    const DIRECT_ACTIVITY_MODE_TYPE_37 = 37;
    const DIRECT_ACTIVITY_MODE_TYPE_38 = 38;
    const DIRECT_ACTIVITY_MODE_TYPE_39 = 39;
    const DIRECT_ACTIVITY_MODE_TYPE_40 = 40;
    const DIRECT_ACTIVITY_MODE_TYPE_41 = 41;
    const DIRECT_ACTIVITY_MODE_TYPE_42 = 42;
    const DIRECT_ACTIVITY_MODE_TYPE_43 = 43;
    const DIRECT_ACTIVITY_MODE_TYPE_44 = 44;
    const DIRECT_ACTIVITY_MODE_TYPE_45 = 45;
    const DIRECT_ACTIVITY_MODE_TYPE_46 = 46;
    const DIRECT_ACTIVITY_MODE_TYPE_47 = 47;
    const DIRECT_ACTIVITY_MODE_TYPE_48 = 48;
    const DIRECT_ACTIVITY_MODE_TYPE_49 = 49;
    const DIRECT_ACTIVITY_MODE_TYPE_50 = 50;
    const DIRECT_ACTIVITY_MODE_TYPE_51 = 51;
    const DIRECT_ACTIVITY_MODE_TYPE_52 = 52;
    const DIRECT_ACTIVITY_MODE_TYPE_53 = 53;
    const DIRECT_ACTIVITY_MODE_TYPE_54 = 54;
    const DIRECT_ACTIVITY_MODE_TYPE_55 = 55;
    const DIRECT_ACTIVITY_MODE_TYPE_56 = 56;
    const DIRECT_ACTIVITY_MODE_TYPE_57 = 57;
    const DIRECT_ACTIVITY_MODE_TYPE_58 = 58;
    const DIRECT_ACTIVITY_MODE_TYPE_59 = 59;
    const DIRECT_ACTIVITY_MODE_TYPE_60 = 60;
    const DIRECT_ACTIVITY_MODE_TYPE_61 = 61;
    const DIRECT_ACTIVITY_MODE_TYPE_62 = 62;
    const DIRECT_ACTIVITY_MODE_TYPE_63 = 63;
    const DIRECT_ACTIVITY_MODE_TYPE_64 = 64;
    const DIRECT_ACTIVITY_MODE_TYPE_65 = 65;
    const DIRECT_ACTIVITY_MODE_TYPE_66 = 66;
    const DIRECT_ACTIVITY_MODE_TYPE_67 = 67;
    const DIRECT_ACTIVITY_MODE_TYPE_68 = 68;
    const DIRECT_ACTIVITY_MODE_TYPE_69 = 69;
    const DIRECT_ACTIVITY_MODE_TYPE_70 = 70;
    const DIRECT_ACTIVITY_MODE_TYPE_71 = 71;
    const DIRECT_ACTIVITY_MODE_TYPE_72 = 72;
    const DIRECT_ACTIVITY_MODE_TYPE_73 = 73;
    const DIRECT_ACTIVITY_MODE_TYPE_74 = 74;
    const DIRECT_ACTIVITY_MODE_TYPE_75 = 75;
    const DIRECT_ACTIVITY_MODE_TYPE_76 = 76;
    const DIRECT_ACTIVITY_MODE_TYPE_77 = 77;
    const DIRECT_ACTIVITY_MODE_TYPE_78 = 78;
    const DIRECT_ACTIVITY_MODE_TYPE_79 = 79;
    const DIRECT_ACTIVITY_MODE_TYPE_80 = 80;
    const DIRECT_ACTIVITY_MODE_TYPE_81 = 81;
    const DIRECT_ACTIVITY_MODE_TYPE_82 = 82;
    const DIRECT_ACTIVITY_MODE_TYPE_83 = 83;
    const DIRECT_ACTIVITY_MODE_TYPE_84 = 84;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectActivityModeTypeAllowableValues()
    {
        return [
            self::DIRECT_ACTIVITY_MODE_TYPE_0,
            self::DIRECT_ACTIVITY_MODE_TYPE_2,
            self::DIRECT_ACTIVITY_MODE_TYPE_3,
            self::DIRECT_ACTIVITY_MODE_TYPE_4,
            self::DIRECT_ACTIVITY_MODE_TYPE_5,
            self::DIRECT_ACTIVITY_MODE_TYPE_6,
            self::DIRECT_ACTIVITY_MODE_TYPE_7,
            self::DIRECT_ACTIVITY_MODE_TYPE_9,
            self::DIRECT_ACTIVITY_MODE_TYPE_10,
            self::DIRECT_ACTIVITY_MODE_TYPE_11,
            self::DIRECT_ACTIVITY_MODE_TYPE_12,
            self::DIRECT_ACTIVITY_MODE_TYPE_13,
            self::DIRECT_ACTIVITY_MODE_TYPE_15,
            self::DIRECT_ACTIVITY_MODE_TYPE_16,
            self::DIRECT_ACTIVITY_MODE_TYPE_17,
            self::DIRECT_ACTIVITY_MODE_TYPE_18,
            self::DIRECT_ACTIVITY_MODE_TYPE_19,
            self::DIRECT_ACTIVITY_MODE_TYPE_20,
            self::DIRECT_ACTIVITY_MODE_TYPE_21,
            self::DIRECT_ACTIVITY_MODE_TYPE_22,
            self::DIRECT_ACTIVITY_MODE_TYPE_24,
            self::DIRECT_ACTIVITY_MODE_TYPE_25,
            self::DIRECT_ACTIVITY_MODE_TYPE_26,
            self::DIRECT_ACTIVITY_MODE_TYPE_27,
            self::DIRECT_ACTIVITY_MODE_TYPE_28,
            self::DIRECT_ACTIVITY_MODE_TYPE_29,
            self::DIRECT_ACTIVITY_MODE_TYPE_30,
            self::DIRECT_ACTIVITY_MODE_TYPE_31,
            self::DIRECT_ACTIVITY_MODE_TYPE_32,
            self::DIRECT_ACTIVITY_MODE_TYPE_37,
            self::DIRECT_ACTIVITY_MODE_TYPE_38,
            self::DIRECT_ACTIVITY_MODE_TYPE_39,
            self::DIRECT_ACTIVITY_MODE_TYPE_40,
            self::DIRECT_ACTIVITY_MODE_TYPE_41,
            self::DIRECT_ACTIVITY_MODE_TYPE_42,
            self::DIRECT_ACTIVITY_MODE_TYPE_43,
            self::DIRECT_ACTIVITY_MODE_TYPE_44,
            self::DIRECT_ACTIVITY_MODE_TYPE_45,
            self::DIRECT_ACTIVITY_MODE_TYPE_46,
            self::DIRECT_ACTIVITY_MODE_TYPE_47,
            self::DIRECT_ACTIVITY_MODE_TYPE_48,
            self::DIRECT_ACTIVITY_MODE_TYPE_49,
            self::DIRECT_ACTIVITY_MODE_TYPE_50,
            self::DIRECT_ACTIVITY_MODE_TYPE_51,
            self::DIRECT_ACTIVITY_MODE_TYPE_52,
            self::DIRECT_ACTIVITY_MODE_TYPE_53,
            self::DIRECT_ACTIVITY_MODE_TYPE_54,
            self::DIRECT_ACTIVITY_MODE_TYPE_55,
            self::DIRECT_ACTIVITY_MODE_TYPE_56,
            self::DIRECT_ACTIVITY_MODE_TYPE_57,
            self::DIRECT_ACTIVITY_MODE_TYPE_58,
            self::DIRECT_ACTIVITY_MODE_TYPE_59,
            self::DIRECT_ACTIVITY_MODE_TYPE_60,
            self::DIRECT_ACTIVITY_MODE_TYPE_61,
            self::DIRECT_ACTIVITY_MODE_TYPE_62,
            self::DIRECT_ACTIVITY_MODE_TYPE_63,
            self::DIRECT_ACTIVITY_MODE_TYPE_64,
            self::DIRECT_ACTIVITY_MODE_TYPE_65,
            self::DIRECT_ACTIVITY_MODE_TYPE_66,
            self::DIRECT_ACTIVITY_MODE_TYPE_67,
            self::DIRECT_ACTIVITY_MODE_TYPE_68,
            self::DIRECT_ACTIVITY_MODE_TYPE_69,
            self::DIRECT_ACTIVITY_MODE_TYPE_70,
            self::DIRECT_ACTIVITY_MODE_TYPE_71,
            self::DIRECT_ACTIVITY_MODE_TYPE_72,
            self::DIRECT_ACTIVITY_MODE_TYPE_73,
            self::DIRECT_ACTIVITY_MODE_TYPE_74,
            self::DIRECT_ACTIVITY_MODE_TYPE_75,
            self::DIRECT_ACTIVITY_MODE_TYPE_76,
            self::DIRECT_ACTIVITY_MODE_TYPE_77,
            self::DIRECT_ACTIVITY_MODE_TYPE_78,
            self::DIRECT_ACTIVITY_MODE_TYPE_79,
            self::DIRECT_ACTIVITY_MODE_TYPE_80,
            self::DIRECT_ACTIVITY_MODE_TYPE_81,
            self::DIRECT_ACTIVITY_MODE_TYPE_82,
            self::DIRECT_ACTIVITY_MODE_TYPE_83,
            self::DIRECT_ACTIVITY_MODE_TYPE_84,
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
        $this->container['activity_hash'] = $data['activity_hash'] ?? null;
        $this->container['direct_activity_mode_hash'] = $data['direct_activity_mode_hash'] ?? null;
        $this->container['direct_activity_mode_type'] = $data['direct_activity_mode_type'] ?? null;
        $this->container['activity_mode_hashes'] = $data['activity_mode_hashes'] ?? null;
        $this->container['activity_mode_types'] = $data['activity_mode_types'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($this->container['direct_activity_mode_type']) && !in_array($this->container['direct_activity_mode_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direct_activity_mode_type', must be one of '%s'",
                $this->container['direct_activity_mode_type'],
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
     * Gets activity_hash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activity_hash'];
    }

    /**
     * Sets activity_hash
     *
     * @param int|null $activity_hash The hash identifier of the Activity that can be played. Use it to look up the DestinyActivityDefinition.
     *
     * @return self
     */
    public function setActivityHash($activity_hash)
    {
        $this->container['activity_hash'] = $activity_hash;

        return $this;
    }

    /**
     * Gets direct_activity_mode_hash
     *
     * @return int|null
     */
    public function getDirectActivityModeHash()
    {
        return $this->container['direct_activity_mode_hash'];
    }

    /**
     * Sets direct_activity_mode_hash
     *
     * @param int|null $direct_activity_mode_hash If this playlist entry had an activity mode directly defined on it, this will be the hash of that mode.
     *
     * @return self
     */
    public function setDirectActivityModeHash($direct_activity_mode_hash)
    {
        $this->container['direct_activity_mode_hash'] = $direct_activity_mode_hash;

        return $this;
    }

    /**
     * Gets direct_activity_mode_type
     *
     * @return int|null
     */
    public function getDirectActivityModeType()
    {
        return $this->container['direct_activity_mode_type'];
    }

    /**
     * Sets direct_activity_mode_type
     *
     * @param int|null $direct_activity_mode_type If the playlist entry had an activity mode directly defined on it, this will be the enum value of that mode.
     *
     * @return self
     */
    public function setDirectActivityModeType($direct_activity_mode_type)
    {
        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($direct_activity_mode_type) && !in_array($direct_activity_mode_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direct_activity_mode_type', must be one of '%s'",
                    $direct_activity_mode_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direct_activity_mode_type'] = $direct_activity_mode_type;

        return $this;
    }

    /**
     * Gets activity_mode_hashes
     *
     * @return int[]|null
     */
    public function getActivityModeHashes()
    {
        return $this->container['activity_mode_hashes'];
    }

    /**
     * Sets activity_mode_hashes
     *
     * @param int[]|null $activity_mode_hashes The hash identifiers for Activity Modes relevant to this entry.
     *
     * @return self
     */
    public function setActivityModeHashes($activity_mode_hashes)
    {
        $this->container['activity_mode_hashes'] = $activity_mode_hashes;

        return $this;
    }

    /**
     * Gets activity_mode_types
     *
     * @return int[]|null
     */
    public function getActivityModeTypes()
    {
        return $this->container['activity_mode_types'];
    }

    /**
     * Sets activity_mode_types
     *
     * @param int[]|null $activity_mode_types The activity modes - if any - in enum form. Because we can't seem to escape the enums.
     *
     * @return self
     */
    public function setActivityModeTypes($activity_mode_types)
    {
        $this->container['activity_mode_types'] = $activity_mode_types;

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


