<?php
/**
 * DestinyHistoricalStatsDestinyPostGameCarnageReportTeamEntry
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
 * DestinyHistoricalStatsDestinyPostGameCarnageReportTeamEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyHistoricalStatsDestinyPostGameCarnageReportTeamEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyPostGameCarnageReportTeamEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'team_id' => 'int',
        'standing' => 'DestinyHistoricalStatsDestinyHistoricalStatsValue',
        'score' => 'DestinyHistoricalStatsDestinyHistoricalStatsValue',
        'team_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'team_id' => 'int32',
        'standing' => null,
        'score' => null,
        'team_name' => null
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
        'team_id' => 'teamId',
        'standing' => 'standing',
        'score' => 'score',
        'team_name' => 'teamName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'team_id' => 'setTeamId',
        'standing' => 'setStanding',
        'score' => 'setScore',
        'team_name' => 'setTeamName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'team_id' => 'getTeamId',
        'standing' => 'getStanding',
        'score' => 'getScore',
        'team_name' => 'getTeamName'
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
        $this->container['team_id'] = $data['team_id'] ?? null;
        $this->container['standing'] = $data['standing'] ?? null;
        $this->container['score'] = $data['score'] ?? null;
        $this->container['team_name'] = $data['team_name'] ?? null;
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
     * Gets team_id
     *
     * @return int|null
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     *
     * @param int|null $team_id Integer ID for the team.
     *
     * @return self
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

        return $this;
    }

    /**
     * Gets standing
     *
     * @return DestinyHistoricalStatsDestinyHistoricalStatsValue|null
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param DestinyHistoricalStatsDestinyHistoricalStatsValue|null $standing Team's standing relative to other teams.
     *
     * @return self
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

        return $this;
    }

    /**
     * Gets score
     *
     * @return DestinyHistoricalStatsDestinyHistoricalStatsValue|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param DestinyHistoricalStatsDestinyHistoricalStatsValue|null $score Score earned by the team
     *
     * @return self
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets team_name
     *
     * @return string|null
     */
    public function getTeamName()
    {
        return $this->container['team_name'];
    }

    /**
     * Sets team_name
     *
     * @param string|null $team_name Alpha or Bravo
     *
     * @return self
     */
    public function setTeamName($team_name)
    {
        $this->container['team_name'] = $team_name;

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


