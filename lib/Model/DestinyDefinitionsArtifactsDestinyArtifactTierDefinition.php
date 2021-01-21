<?php
/**
 * DestinyDefinitionsArtifactsDestinyArtifactTierDefinition
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
 * DestinyDefinitionsArtifactsDestinyArtifactTierDefinition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsArtifactsDestinyArtifactTierDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Artifacts.DestinyArtifactTierDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tier_hash' => 'int',
        'display_title' => 'string',
        'progress_requirement_message' => 'string',
        'items' => '\OpenAPI\Client\Model\DestinyDefinitionsArtifactsDestinyArtifactTierItemDefinition[]',
        'minimum_unlock_points_used_requirement' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tier_hash' => 'uint32',
        'display_title' => null,
        'progress_requirement_message' => null,
        'items' => null,
        'minimum_unlock_points_used_requirement' => 'int32'
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
        'tier_hash' => 'tierHash',
        'display_title' => 'displayTitle',
        'progress_requirement_message' => 'progressRequirementMessage',
        'items' => 'items',
        'minimum_unlock_points_used_requirement' => 'minimumUnlockPointsUsedRequirement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tier_hash' => 'setTierHash',
        'display_title' => 'setDisplayTitle',
        'progress_requirement_message' => 'setProgressRequirementMessage',
        'items' => 'setItems',
        'minimum_unlock_points_used_requirement' => 'setMinimumUnlockPointsUsedRequirement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tier_hash' => 'getTierHash',
        'display_title' => 'getDisplayTitle',
        'progress_requirement_message' => 'getProgressRequirementMessage',
        'items' => 'getItems',
        'minimum_unlock_points_used_requirement' => 'getMinimumUnlockPointsUsedRequirement'
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
        $this->container['tier_hash'] = $data['tier_hash'] ?? null;
        $this->container['display_title'] = $data['display_title'] ?? null;
        $this->container['progress_requirement_message'] = $data['progress_requirement_message'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['minimum_unlock_points_used_requirement'] = $data['minimum_unlock_points_used_requirement'] ?? null;
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
     * Gets tier_hash
     *
     * @return int|null
     */
    public function getTierHash()
    {
        return $this->container['tier_hash'];
    }

    /**
     * Sets tier_hash
     *
     * @param int|null $tier_hash An identifier, unique within the Artifact, for this specific tier.
     *
     * @return self
     */
    public function setTierHash($tier_hash)
    {
        $this->container['tier_hash'] = $tier_hash;

        return $this;
    }

    /**
     * Gets display_title
     *
     * @return string|null
     */
    public function getDisplayTitle()
    {
        return $this->container['display_title'];
    }

    /**
     * Sets display_title
     *
     * @param string|null $display_title The human readable title of this tier, if any.
     *
     * @return self
     */
    public function setDisplayTitle($display_title)
    {
        $this->container['display_title'] = $display_title;

        return $this;
    }

    /**
     * Gets progress_requirement_message
     *
     * @return string|null
     */
    public function getProgressRequirementMessage()
    {
        return $this->container['progress_requirement_message'];
    }

    /**
     * Sets progress_requirement_message
     *
     * @param string|null $progress_requirement_message A string representing the localized minimum requirement text for this Tier, if any.
     *
     * @return self
     */
    public function setProgressRequirementMessage($progress_requirement_message)
    {
        $this->container['progress_requirement_message'] = $progress_requirement_message;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsArtifactsDestinyArtifactTierItemDefinition[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsArtifactsDestinyArtifactTierItemDefinition[]|null $items The items that can be earned within this tier.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets minimum_unlock_points_used_requirement
     *
     * @return int|null
     */
    public function getMinimumUnlockPointsUsedRequirement()
    {
        return $this->container['minimum_unlock_points_used_requirement'];
    }

    /**
     * Sets minimum_unlock_points_used_requirement
     *
     * @param int|null $minimum_unlock_points_used_requirement The minimum number of \"unlock points\" that you must have used before you can unlock items from this tier.
     *
     * @return self
     */
    public function setMinimumUnlockPointsUsedRequirement($minimum_unlock_points_used_requirement)
    {
        $this->container['minimum_unlock_points_used_requirement'] = $minimum_unlock_points_used_requirement;

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


