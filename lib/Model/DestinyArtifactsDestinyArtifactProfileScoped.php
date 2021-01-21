<?php
/**
 * DestinyArtifactsDestinyArtifactProfileScoped
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
 * DestinyArtifactsDestinyArtifactProfileScoped Class Doc Comment
 *
 * @category Class
 * @description Represents a Seasonal Artifact and all data related to it for the requested Account.  It can be combined with Character-scoped data for a full picture of what a character has available/has chosen, or just these settings can be used for overview information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyArtifactsDestinyArtifactProfileScoped implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Artifacts.DestinyArtifactProfileScoped';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artifact_hash' => 'int',
        'point_progression' => '\OpenAPI\Client\Model\DestinyDestinyProgression',
        'points_acquired' => 'int',
        'power_bonus_progression' => '\OpenAPI\Client\Model\DestinyDestinyProgression',
        'power_bonus' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'artifact_hash' => 'uint32',
        'point_progression' => null,
        'points_acquired' => 'int32',
        'power_bonus_progression' => null,
        'power_bonus' => 'int32'
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
        'artifact_hash' => 'artifactHash',
        'point_progression' => 'pointProgression',
        'points_acquired' => 'pointsAcquired',
        'power_bonus_progression' => 'powerBonusProgression',
        'power_bonus' => 'powerBonus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artifact_hash' => 'setArtifactHash',
        'point_progression' => 'setPointProgression',
        'points_acquired' => 'setPointsAcquired',
        'power_bonus_progression' => 'setPowerBonusProgression',
        'power_bonus' => 'setPowerBonus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artifact_hash' => 'getArtifactHash',
        'point_progression' => 'getPointProgression',
        'points_acquired' => 'getPointsAcquired',
        'power_bonus_progression' => 'getPowerBonusProgression',
        'power_bonus' => 'getPowerBonus'
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
        $this->container['artifact_hash'] = $data['artifact_hash'] ?? null;
        $this->container['point_progression'] = $data['point_progression'] ?? null;
        $this->container['points_acquired'] = $data['points_acquired'] ?? null;
        $this->container['power_bonus_progression'] = $data['power_bonus_progression'] ?? null;
        $this->container['power_bonus'] = $data['power_bonus'] ?? null;
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
     * Gets artifact_hash
     *
     * @return int|null
     */
    public function getArtifactHash()
    {
        return $this->container['artifact_hash'];
    }

    /**
     * Sets artifact_hash
     *
     * @param int|null $artifact_hash artifact_hash
     *
     * @return self
     */
    public function setArtifactHash($artifact_hash)
    {
        $this->container['artifact_hash'] = $artifact_hash;

        return $this;
    }

    /**
     * Gets point_progression
     *
     * @return \OpenAPI\Client\Model\DestinyDestinyProgression|null
     */
    public function getPointProgression()
    {
        return $this->container['point_progression'];
    }

    /**
     * Sets point_progression
     *
     * @param \OpenAPI\Client\Model\DestinyDestinyProgression|null $point_progression point_progression
     *
     * @return self
     */
    public function setPointProgression($point_progression)
    {
        $this->container['point_progression'] = $point_progression;

        return $this;
    }

    /**
     * Gets points_acquired
     *
     * @return int|null
     */
    public function getPointsAcquired()
    {
        return $this->container['points_acquired'];
    }

    /**
     * Sets points_acquired
     *
     * @param int|null $points_acquired points_acquired
     *
     * @return self
     */
    public function setPointsAcquired($points_acquired)
    {
        $this->container['points_acquired'] = $points_acquired;

        return $this;
    }

    /**
     * Gets power_bonus_progression
     *
     * @return \OpenAPI\Client\Model\DestinyDestinyProgression|null
     */
    public function getPowerBonusProgression()
    {
        return $this->container['power_bonus_progression'];
    }

    /**
     * Sets power_bonus_progression
     *
     * @param \OpenAPI\Client\Model\DestinyDestinyProgression|null $power_bonus_progression power_bonus_progression
     *
     * @return self
     */
    public function setPowerBonusProgression($power_bonus_progression)
    {
        $this->container['power_bonus_progression'] = $power_bonus_progression;

        return $this;
    }

    /**
     * Gets power_bonus
     *
     * @return int|null
     */
    public function getPowerBonus()
    {
        return $this->container['power_bonus'];
    }

    /**
     * Sets power_bonus
     *
     * @param int|null $power_bonus power_bonus
     *
     * @return self
     */
    public function setPowerBonus($power_bonus)
    {
        $this->container['power_bonus'] = $power_bonus;

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

