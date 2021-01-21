<?php
/**
 * DestinyComponentsProfilesDestinyProfileTransitoryJoinability
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
 * DestinyComponentsProfilesDestinyProfileTransitoryJoinability Class Doc Comment
 *
 * @category Class
 * @description Some basic information about whether you can be joined, how many slots are left etc. Note that this can change quickly, so it may not actually be useful. But perhaps it will be in some use cases?
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyComponentsProfilesDestinyProfileTransitoryJoinability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Profiles.DestinyProfileTransitoryJoinability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'open_slots' => 'int',
        'privacy_setting' => 'int',
        'closed_reasons' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'open_slots' => 'int32',
        'privacy_setting' => 'int32',
        'closed_reasons' => 'int32'
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
        'open_slots' => 'openSlots',
        'privacy_setting' => 'privacySetting',
        'closed_reasons' => 'closedReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_slots' => 'setOpenSlots',
        'privacy_setting' => 'setPrivacySetting',
        'closed_reasons' => 'setClosedReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_slots' => 'getOpenSlots',
        'privacy_setting' => 'getPrivacySetting',
        'closed_reasons' => 'getClosedReasons'
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
        $this->container['open_slots'] = $data['open_slots'] ?? null;
        $this->container['privacy_setting'] = $data['privacy_setting'] ?? null;
        $this->container['closed_reasons'] = $data['closed_reasons'] ?? null;
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
     * Gets open_slots
     *
     * @return int|null
     */
    public function getOpenSlots()
    {
        return $this->container['open_slots'];
    }

    /**
     * Sets open_slots
     *
     * @param int|null $open_slots The number of slots still available on this person's fireteam.
     *
     * @return self
     */
    public function setOpenSlots($open_slots)
    {
        $this->container['open_slots'] = $open_slots;

        return $this;
    }

    /**
     * Gets privacy_setting
     *
     * @return int|null
     */
    public function getPrivacySetting()
    {
        return $this->container['privacy_setting'];
    }

    /**
     * Sets privacy_setting
     *
     * @param int|null $privacy_setting Who the person is currently allowing invites from.
     *
     * @return self
     */
    public function setPrivacySetting($privacy_setting)
    {
        $this->container['privacy_setting'] = $privacy_setting;

        return $this;
    }

    /**
     * Gets closed_reasons
     *
     * @return int|null
     */
    public function getClosedReasons()
    {
        return $this->container['closed_reasons'];
    }

    /**
     * Sets closed_reasons
     *
     * @param int|null $closed_reasons Reasons why a person can't join this person's fireteam.
     *
     * @return self
     */
    public function setClosedReasons($closed_reasons)
    {
        $this->container['closed_reasons'] = $closed_reasons;

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

