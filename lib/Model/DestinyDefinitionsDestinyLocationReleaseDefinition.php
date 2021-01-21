<?php
/**
 * DestinyDefinitionsDestinyLocationReleaseDefinition
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
 * DestinyDefinitionsDestinyLocationReleaseDefinition Class Doc Comment
 *
 * @category Class
 * @description A specific \&quot;spot\&quot; referred to by a location. Only one of these can be active at a time for a given Location.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyLocationReleaseDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyLocationReleaseDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_properties' => 'DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'small_transparent_icon' => 'string',
        'map_icon' => 'string',
        'large_transparent_icon' => 'string',
        'spawn_point' => 'int',
        'destination_hash' => 'int',
        'activity_hash' => 'int',
        'activity_graph_hash' => 'int',
        'activity_graph_node_hash' => 'int',
        'activity_bubble_name' => 'int',
        'activity_path_bundle' => 'int',
        'activity_path_destination' => 'int',
        'nav_point_type' => 'int',
        'world_position' => 'int[]'
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
        'small_transparent_icon' => null,
        'map_icon' => null,
        'large_transparent_icon' => null,
        'spawn_point' => 'uint32',
        'destination_hash' => 'uint32',
        'activity_hash' => 'uint32',
        'activity_graph_hash' => 'uint32',
        'activity_graph_node_hash' => 'uint32',
        'activity_bubble_name' => 'uint32',
        'activity_path_bundle' => 'uint32',
        'activity_path_destination' => 'uint32',
        'nav_point_type' => 'int32',
        'world_position' => 'int32'
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
        'small_transparent_icon' => 'smallTransparentIcon',
        'map_icon' => 'mapIcon',
        'large_transparent_icon' => 'largeTransparentIcon',
        'spawn_point' => 'spawnPoint',
        'destination_hash' => 'destinationHash',
        'activity_hash' => 'activityHash',
        'activity_graph_hash' => 'activityGraphHash',
        'activity_graph_node_hash' => 'activityGraphNodeHash',
        'activity_bubble_name' => 'activityBubbleName',
        'activity_path_bundle' => 'activityPathBundle',
        'activity_path_destination' => 'activityPathDestination',
        'nav_point_type' => 'navPointType',
        'world_position' => 'worldPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_properties' => 'setDisplayProperties',
        'small_transparent_icon' => 'setSmallTransparentIcon',
        'map_icon' => 'setMapIcon',
        'large_transparent_icon' => 'setLargeTransparentIcon',
        'spawn_point' => 'setSpawnPoint',
        'destination_hash' => 'setDestinationHash',
        'activity_hash' => 'setActivityHash',
        'activity_graph_hash' => 'setActivityGraphHash',
        'activity_graph_node_hash' => 'setActivityGraphNodeHash',
        'activity_bubble_name' => 'setActivityBubbleName',
        'activity_path_bundle' => 'setActivityPathBundle',
        'activity_path_destination' => 'setActivityPathDestination',
        'nav_point_type' => 'setNavPointType',
        'world_position' => 'setWorldPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_properties' => 'getDisplayProperties',
        'small_transparent_icon' => 'getSmallTransparentIcon',
        'map_icon' => 'getMapIcon',
        'large_transparent_icon' => 'getLargeTransparentIcon',
        'spawn_point' => 'getSpawnPoint',
        'destination_hash' => 'getDestinationHash',
        'activity_hash' => 'getActivityHash',
        'activity_graph_hash' => 'getActivityGraphHash',
        'activity_graph_node_hash' => 'getActivityGraphNodeHash',
        'activity_bubble_name' => 'getActivityBubbleName',
        'activity_path_bundle' => 'getActivityPathBundle',
        'activity_path_destination' => 'getActivityPathDestination',
        'nav_point_type' => 'getNavPointType',
        'world_position' => 'getWorldPosition'
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
        $this->container['small_transparent_icon'] = $data['small_transparent_icon'] ?? null;
        $this->container['map_icon'] = $data['map_icon'] ?? null;
        $this->container['large_transparent_icon'] = $data['large_transparent_icon'] ?? null;
        $this->container['spawn_point'] = $data['spawn_point'] ?? null;
        $this->container['destination_hash'] = $data['destination_hash'] ?? null;
        $this->container['activity_hash'] = $data['activity_hash'] ?? null;
        $this->container['activity_graph_hash'] = $data['activity_graph_hash'] ?? null;
        $this->container['activity_graph_node_hash'] = $data['activity_graph_node_hash'] ?? null;
        $this->container['activity_bubble_name'] = $data['activity_bubble_name'] ?? null;
        $this->container['activity_path_bundle'] = $data['activity_path_bundle'] ?? null;
        $this->container['activity_path_destination'] = $data['activity_path_destination'] ?? null;
        $this->container['nav_point_type'] = $data['nav_point_type'] ?? null;
        $this->container['world_position'] = $data['world_position'] ?? null;
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
     * @return DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['display_properties'];
    }

    /**
     * Sets display_properties
     *
     * @param DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $display_properties Sadly, these don't appear to be populated anymore (ever?)
     *
     * @return self
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

        return $this;
    }

    /**
     * Gets small_transparent_icon
     *
     * @return string|null
     */
    public function getSmallTransparentIcon()
    {
        return $this->container['small_transparent_icon'];
    }

    /**
     * Sets small_transparent_icon
     *
     * @param string|null $small_transparent_icon small_transparent_icon
     *
     * @return self
     */
    public function setSmallTransparentIcon($small_transparent_icon)
    {
        $this->container['small_transparent_icon'] = $small_transparent_icon;

        return $this;
    }

    /**
     * Gets map_icon
     *
     * @return string|null
     */
    public function getMapIcon()
    {
        return $this->container['map_icon'];
    }

    /**
     * Sets map_icon
     *
     * @param string|null $map_icon map_icon
     *
     * @return self
     */
    public function setMapIcon($map_icon)
    {
        $this->container['map_icon'] = $map_icon;

        return $this;
    }

    /**
     * Gets large_transparent_icon
     *
     * @return string|null
     */
    public function getLargeTransparentIcon()
    {
        return $this->container['large_transparent_icon'];
    }

    /**
     * Sets large_transparent_icon
     *
     * @param string|null $large_transparent_icon large_transparent_icon
     *
     * @return self
     */
    public function setLargeTransparentIcon($large_transparent_icon)
    {
        $this->container['large_transparent_icon'] = $large_transparent_icon;

        return $this;
    }

    /**
     * Gets spawn_point
     *
     * @return int|null
     */
    public function getSpawnPoint()
    {
        return $this->container['spawn_point'];
    }

    /**
     * Sets spawn_point
     *
     * @param int|null $spawn_point If we had map information, this spawnPoint would be interesting. But sadly, we don't have that info.
     *
     * @return self
     */
    public function setSpawnPoint($spawn_point)
    {
        $this->container['spawn_point'] = $spawn_point;

        return $this;
    }

    /**
     * Gets destination_hash
     *
     * @return int|null
     */
    public function getDestinationHash()
    {
        return $this->container['destination_hash'];
    }

    /**
     * Sets destination_hash
     *
     * @param int|null $destination_hash The Destination being pointed to by this location.
     *
     * @return self
     */
    public function setDestinationHash($destination_hash)
    {
        $this->container['destination_hash'] = $destination_hash;

        return $this;
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
     * @param int|null $activity_hash The Activity being pointed to by this location.
     *
     * @return self
     */
    public function setActivityHash($activity_hash)
    {
        $this->container['activity_hash'] = $activity_hash;

        return $this;
    }

    /**
     * Gets activity_graph_hash
     *
     * @return int|null
     */
    public function getActivityGraphHash()
    {
        return $this->container['activity_graph_hash'];
    }

    /**
     * Sets activity_graph_hash
     *
     * @param int|null $activity_graph_hash The Activity Graph being pointed to by this location.
     *
     * @return self
     */
    public function setActivityGraphHash($activity_graph_hash)
    {
        $this->container['activity_graph_hash'] = $activity_graph_hash;

        return $this;
    }

    /**
     * Gets activity_graph_node_hash
     *
     * @return int|null
     */
    public function getActivityGraphNodeHash()
    {
        return $this->container['activity_graph_node_hash'];
    }

    /**
     * Sets activity_graph_node_hash
     *
     * @param int|null $activity_graph_node_hash The Activity Graph Node being pointed to by this location. (Remember that Activity Graph Node hashes are only unique within an Activity Graph: so use the combination to find the node being spoken of)
     *
     * @return self
     */
    public function setActivityGraphNodeHash($activity_graph_node_hash)
    {
        $this->container['activity_graph_node_hash'] = $activity_graph_node_hash;

        return $this;
    }

    /**
     * Gets activity_bubble_name
     *
     * @return int|null
     */
    public function getActivityBubbleName()
    {
        return $this->container['activity_bubble_name'];
    }

    /**
     * Sets activity_bubble_name
     *
     * @param int|null $activity_bubble_name The Activity Bubble within the Destination. Look this up in the DestinyDestinationDefinition's bubbles and bubbleSettings properties.
     *
     * @return self
     */
    public function setActivityBubbleName($activity_bubble_name)
    {
        $this->container['activity_bubble_name'] = $activity_bubble_name;

        return $this;
    }

    /**
     * Gets activity_path_bundle
     *
     * @return int|null
     */
    public function getActivityPathBundle()
    {
        return $this->container['activity_path_bundle'];
    }

    /**
     * Sets activity_path_bundle
     *
     * @param int|null $activity_path_bundle If we had map information, this would tell us something cool about the path this location wants you to take. I wish we had map information.
     *
     * @return self
     */
    public function setActivityPathBundle($activity_path_bundle)
    {
        $this->container['activity_path_bundle'] = $activity_path_bundle;

        return $this;
    }

    /**
     * Gets activity_path_destination
     *
     * @return int|null
     */
    public function getActivityPathDestination()
    {
        return $this->container['activity_path_destination'];
    }

    /**
     * Sets activity_path_destination
     *
     * @param int|null $activity_path_destination If we had map information, this would tell us about path information related to destination on the map. Sad. Maybe you can do something cool with it. Go to town man.
     *
     * @return self
     */
    public function setActivityPathDestination($activity_path_destination)
    {
        $this->container['activity_path_destination'] = $activity_path_destination;

        return $this;
    }

    /**
     * Gets nav_point_type
     *
     * @return int|null
     */
    public function getNavPointType()
    {
        return $this->container['nav_point_type'];
    }

    /**
     * Sets nav_point_type
     *
     * @param int|null $nav_point_type The type of Nav Point that this represents. See the enumeration for more info.
     *
     * @return self
     */
    public function setNavPointType($nav_point_type)
    {
        $this->container['nav_point_type'] = $nav_point_type;

        return $this;
    }

    /**
     * Gets world_position
     *
     * @return int[]|null
     */
    public function getWorldPosition()
    {
        return $this->container['world_position'];
    }

    /**
     * Sets world_position
     *
     * @param int[]|null $world_position Looks like it should be the position on the map, but sadly it does not look populated... yet?
     *
     * @return self
     */
    public function setWorldPosition($world_position)
    {
        $this->container['world_position'] = $world_position;

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


