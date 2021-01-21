<?php
/**
 * DestinyDefinitionsDirectorDestinyActivityGraphDefinition
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
 * DestinyDefinitionsDirectorDestinyActivityGraphDefinition Class Doc Comment
 *
 * @category Class
 * @description Represents a Map View in the director: be them overview views, destination views, or other.  They have nodes which map to activities, and other various visual elements that we (or others) may or may not be able to use.  Activity graphs, most importantly, have nodes which can have activities in various states of playability.  Unfortunately, activity graphs are combined at runtime with Game UI-only assets such as fragments of map images, various in-game special effects, decals etc... that we don&#39;t get in these definitions.  If we end up having time, we may end up trying to manually populate those here: but the last time we tried that, before the lead-up to D1, it proved to be unmaintainable as the game&#39;s content changed. So don&#39;t bet the farm on us providing that content in this definition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDirectorDestinyActivityGraphDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Director.DestinyActivityGraphDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nodes' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphNodeDefinition[]',
        'art_elements' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphArtElementDefinition[]',
        'connections' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphConnectionDefinition[]',
        'display_objectives' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayObjectiveDefinition[]',
        'display_progressions' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayProgressionDefinition[]',
        'linked_graphs' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphDefinition[]',
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
        'nodes' => null,
        'art_elements' => null,
        'connections' => null,
        'display_objectives' => null,
        'display_progressions' => null,
        'linked_graphs' => null,
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
        'nodes' => 'nodes',
        'art_elements' => 'artElements',
        'connections' => 'connections',
        'display_objectives' => 'displayObjectives',
        'display_progressions' => 'displayProgressions',
        'linked_graphs' => 'linkedGraphs',
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
        'nodes' => 'setNodes',
        'art_elements' => 'setArtElements',
        'connections' => 'setConnections',
        'display_objectives' => 'setDisplayObjectives',
        'display_progressions' => 'setDisplayProgressions',
        'linked_graphs' => 'setLinkedGraphs',
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
        'nodes' => 'getNodes',
        'art_elements' => 'getArtElements',
        'connections' => 'getConnections',
        'display_objectives' => 'getDisplayObjectives',
        'display_progressions' => 'getDisplayProgressions',
        'linked_graphs' => 'getLinkedGraphs',
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
        $this->container['nodes'] = $data['nodes'] ?? null;
        $this->container['art_elements'] = $data['art_elements'] ?? null;
        $this->container['connections'] = $data['connections'] ?? null;
        $this->container['display_objectives'] = $data['display_objectives'] ?? null;
        $this->container['display_progressions'] = $data['display_progressions'] ?? null;
        $this->container['linked_graphs'] = $data['linked_graphs'] ?? null;
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
     * Gets nodes
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphNodeDefinition[]|null
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphNodeDefinition[]|null $nodes These represent the visual \"nodes\" on the map's view. These are the activities you can click on in the map.
     *
     * @return self
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets art_elements
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphArtElementDefinition[]|null
     */
    public function getArtElements()
    {
        return $this->container['art_elements'];
    }

    /**
     * Sets art_elements
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphArtElementDefinition[]|null $art_elements Represents one-off/special UI elements that appear on the map.
     *
     * @return self
     */
    public function setArtElements($art_elements)
    {
        $this->container['art_elements'] = $art_elements;

        return $this;
    }

    /**
     * Gets connections
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphConnectionDefinition[]|null
     */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
     * Sets connections
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphConnectionDefinition[]|null $connections Represents connections between graph nodes. However, it lacks context that we'd need to make good use of it.
     *
     * @return self
     */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;

        return $this;
    }

    /**
     * Gets display_objectives
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayObjectiveDefinition[]|null
     */
    public function getDisplayObjectives()
    {
        return $this->container['display_objectives'];
    }

    /**
     * Sets display_objectives
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayObjectiveDefinition[]|null $display_objectives Objectives can display on maps, and this is supposedly metadata for that. I have not had the time to analyze the details of what is useful within however: we could be missing important data to make this work. Expect this property to be expanded on later if possible.
     *
     * @return self
     */
    public function setDisplayObjectives($display_objectives)
    {
        $this->container['display_objectives'] = $display_objectives;

        return $this;
    }

    /**
     * Gets display_progressions
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayProgressionDefinition[]|null
     */
    public function getDisplayProgressions()
    {
        return $this->container['display_progressions'];
    }

    /**
     * Sets display_progressions
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyActivityGraphDisplayProgressionDefinition[]|null $display_progressions Progressions can also display on maps, but similarly to displayObjectives we appear to lack some required information and context right now. We will have to look into it later and add more data if possible.
     *
     * @return self
     */
    public function setDisplayProgressions($display_progressions)
    {
        $this->container['display_progressions'] = $display_progressions;

        return $this;
    }

    /**
     * Gets linked_graphs
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphDefinition[]|null
     */
    public function getLinkedGraphs()
    {
        return $this->container['linked_graphs'];
    }

    /**
     * Sets linked_graphs
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphDefinition[]|null $linked_graphs Represents links between this Activity Graph and other ones.
     *
     * @return self
     */
    public function setLinkedGraphs($linked_graphs)
    {
        $this->container['linked_graphs'] = $linked_graphs;

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

