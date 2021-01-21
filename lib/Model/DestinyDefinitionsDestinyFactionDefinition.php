<?php
/**
 * DestinyDefinitionsDestinyFactionDefinition
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
 * DestinyDefinitionsDestinyFactionDefinition Class Doc Comment
 *
 * @category Class
 * @description These definitions represent Factions in the game. Factions have ended up unilaterally being related to Vendors that represent them, but that need not necessarily be the case.  A Faction is really just an entity that has a related progression for which a character can gain experience. In Destiny 1, Dead Orbit was an example of a Faction: there happens to be a Vendor that represents Dead Orbit (and indeed, DestinyVendorDefinition.factionHash defines to this relationship), but Dead Orbit could theoretically exist without the Vendor that provides rewards.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyFactionDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyFactionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_properties' => '\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'progression_hash' => 'int',
        'token_values' => 'map[string,int]',
        'reward_item_hash' => 'int',
        'reward_vendor_hash' => 'int',
        'vendors' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyFactionVendorDefinition[]',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_properties' => null,
        'progression_hash' => 'uint32',
        'token_values' => 'uint32',
        'reward_item_hash' => 'uint32',
        'reward_vendor_hash' => 'uint32',
        'vendors' => null,
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
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
        'display_properties' => 'displayProperties',
        'progression_hash' => 'progressionHash',
        'token_values' => 'tokenValues',
        'reward_item_hash' => 'rewardItemHash',
        'reward_vendor_hash' => 'rewardVendorHash',
        'vendors' => 'vendors',
        'hash' => 'hash',
        'index' => 'index',
        'redacted' => 'redacted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_properties' => 'setDisplayProperties',
        'progression_hash' => 'setProgressionHash',
        'token_values' => 'setTokenValues',
        'reward_item_hash' => 'setRewardItemHash',
        'reward_vendor_hash' => 'setRewardVendorHash',
        'vendors' => 'setVendors',
        'hash' => 'setHash',
        'index' => 'setIndex',
        'redacted' => 'setRedacted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_properties' => 'getDisplayProperties',
        'progression_hash' => 'getProgressionHash',
        'token_values' => 'getTokenValues',
        'reward_item_hash' => 'getRewardItemHash',
        'reward_vendor_hash' => 'getRewardVendorHash',
        'vendors' => 'getVendors',
        'hash' => 'getHash',
        'index' => 'getIndex',
        'redacted' => 'getRedacted'
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
        $this->container['display_properties'] = $data['display_properties'] ?? null;
        $this->container['progression_hash'] = $data['progression_hash'] ?? null;
        $this->container['token_values'] = $data['token_values'] ?? null;
        $this->container['reward_item_hash'] = $data['reward_item_hash'] ?? null;
        $this->container['reward_vendor_hash'] = $data['reward_vendor_hash'] ?? null;
        $this->container['vendors'] = $data['vendors'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['redacted'] = $data['redacted'] ?? null;
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
     * Gets display_properties
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['display_properties'];
    }

    /**
     * Sets display_properties
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $display_properties display_properties
     *
     * @return self
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

        return $this;
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
     * @param int|null $progression_hash The hash identifier for the DestinyProgressionDefinition that indicates the character's relationship with this faction in terms of experience and levels.
     *
     * @return self
     */
    public function setProgressionHash($progression_hash)
    {
        $this->container['progression_hash'] = $progression_hash;

        return $this;
    }

    /**
     * Gets token_values
     *
     * @return map[string,int]|null
     */
    public function getTokenValues()
    {
        return $this->container['token_values'];
    }

    /**
     * Sets token_values
     *
     * @param map[string,int]|null $token_values The faction token item hashes, and their respective progression values.
     *
     * @return self
     */
    public function setTokenValues($token_values)
    {
        $this->container['token_values'] = $token_values;

        return $this;
    }

    /**
     * Gets reward_item_hash
     *
     * @return int|null
     */
    public function getRewardItemHash()
    {
        return $this->container['reward_item_hash'];
    }

    /**
     * Sets reward_item_hash
     *
     * @param int|null $reward_item_hash The faction reward item hash, usually an engram.
     *
     * @return self
     */
    public function setRewardItemHash($reward_item_hash)
    {
        $this->container['reward_item_hash'] = $reward_item_hash;

        return $this;
    }

    /**
     * Gets reward_vendor_hash
     *
     * @return int|null
     */
    public function getRewardVendorHash()
    {
        return $this->container['reward_vendor_hash'];
    }

    /**
     * Sets reward_vendor_hash
     *
     * @param int|null $reward_vendor_hash The faction reward vendor hash, used for faction engram previews.
     *
     * @return self
     */
    public function setRewardVendorHash($reward_vendor_hash)
    {
        $this->container['reward_vendor_hash'] = $reward_vendor_hash;

        return $this;
    }

    /**
     * Gets vendors
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyFactionVendorDefinition[]|null
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyFactionVendorDefinition[]|null $vendors List of vendors that are associated with this faction. The last vendor that passes the unlock flag checks is the one that should be shown.
     *
     * @return self
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the entity as it was found in the investment tables.
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool|null
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool|null $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
     *
     * @return self
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

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


