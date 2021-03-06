<?php
/**
 * DestinyResponsesDestinyItemResponse
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
 * DestinyResponsesDestinyItemResponse Class Doc Comment
 *
 * @category Class
 * @description The response object for retrieving an individual instanced item. None of these components are relevant for an item that doesn&#39;t have an \&quot;itemInstanceId\&quot;: for those, get your information from the DestinyInventoryDefinition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyResponsesDestinyItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'character_id' => 'int',
        'item' => 'SingleComponentResponseOfDestinyItemComponent',
        'instance' => 'SingleComponentResponseOfDestinyItemInstanceComponent',
        'objectives' => 'SingleComponentResponseOfDestinyItemObjectivesComponent',
        'perks' => 'SingleComponentResponseOfDestinyItemPerksComponent',
        'render_data' => 'SingleComponentResponseOfDestinyItemRenderComponent',
        'stats' => 'SingleComponentResponseOfDestinyItemStatsComponent',
        'talent_grid' => 'SingleComponentResponseOfDestinyItemTalentGridComponent',
        'sockets' => 'SingleComponentResponseOfDestinyItemSocketsComponent',
        'reusable_plugs' => 'SingleComponentResponseOfDestinyItemReusablePlugsComponent',
        'plug_objectives' => 'SingleComponentResponseOfDestinyItemPlugObjectivesComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'character_id' => 'int64',
        'item' => null,
        'instance' => null,
        'objectives' => null,
        'perks' => null,
        'render_data' => null,
        'stats' => null,
        'talent_grid' => null,
        'sockets' => null,
        'reusable_plugs' => null,
        'plug_objectives' => null
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
        'character_id' => 'characterId',
        'item' => 'item',
        'instance' => 'instance',
        'objectives' => 'objectives',
        'perks' => 'perks',
        'render_data' => 'renderData',
        'stats' => 'stats',
        'talent_grid' => 'talentGrid',
        'sockets' => 'sockets',
        'reusable_plugs' => 'reusablePlugs',
        'plug_objectives' => 'plugObjectives'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character_id' => 'setCharacterId',
        'item' => 'setItem',
        'instance' => 'setInstance',
        'objectives' => 'setObjectives',
        'perks' => 'setPerks',
        'render_data' => 'setRenderData',
        'stats' => 'setStats',
        'talent_grid' => 'setTalentGrid',
        'sockets' => 'setSockets',
        'reusable_plugs' => 'setReusablePlugs',
        'plug_objectives' => 'setPlugObjectives'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character_id' => 'getCharacterId',
        'item' => 'getItem',
        'instance' => 'getInstance',
        'objectives' => 'getObjectives',
        'perks' => 'getPerks',
        'render_data' => 'getRenderData',
        'stats' => 'getStats',
        'talent_grid' => 'getTalentGrid',
        'sockets' => 'getSockets',
        'reusable_plugs' => 'getReusablePlugs',
        'plug_objectives' => 'getPlugObjectives'
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
        $this->container['character_id'] = $data['character_id'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['instance'] = $data['instance'] ?? null;
        $this->container['objectives'] = $data['objectives'] ?? null;
        $this->container['perks'] = $data['perks'] ?? null;
        $this->container['render_data'] = $data['render_data'] ?? null;
        $this->container['stats'] = $data['stats'] ?? null;
        $this->container['talent_grid'] = $data['talent_grid'] ?? null;
        $this->container['sockets'] = $data['sockets'] ?? null;
        $this->container['reusable_plugs'] = $data['reusable_plugs'] ?? null;
        $this->container['plug_objectives'] = $data['plug_objectives'] ?? null;
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
     * Gets character_id
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int|null $character_id If the item is on a character, this will return the ID of the character that is holding the item.
     *
     * @return self
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets item
     *
     * @return SingleComponentResponseOfDestinyItemComponent|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param SingleComponentResponseOfDestinyItemComponent|null $item Common data for the item relevant to its non-instanced properties.  COMPONENT TYPE: ItemCommonData
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets instance
     *
     * @return SingleComponentResponseOfDestinyItemInstanceComponent|null
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param SingleComponentResponseOfDestinyItemInstanceComponent|null $instance Basic instance data for the item.  COMPONENT TYPE: ItemInstances
     *
     * @return self
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return SingleComponentResponseOfDestinyItemObjectivesComponent|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param SingleComponentResponseOfDestinyItemObjectivesComponent|null $objectives Information specifically about the item's objectives.  COMPONENT TYPE: ItemObjectives
     *
     * @return self
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets perks
     *
     * @return SingleComponentResponseOfDestinyItemPerksComponent|null
     */
    public function getPerks()
    {
        return $this->container['perks'];
    }

    /**
     * Sets perks
     *
     * @param SingleComponentResponseOfDestinyItemPerksComponent|null $perks Information specifically about the perks currently active on the item.  COMPONENT TYPE: ItemPerks
     *
     * @return self
     */
    public function setPerks($perks)
    {
        $this->container['perks'] = $perks;

        return $this;
    }

    /**
     * Gets render_data
     *
     * @return SingleComponentResponseOfDestinyItemRenderComponent|null
     */
    public function getRenderData()
    {
        return $this->container['render_data'];
    }

    /**
     * Sets render_data
     *
     * @param SingleComponentResponseOfDestinyItemRenderComponent|null $render_data Information about how to render the item in 3D.  COMPONENT TYPE: ItemRenderData
     *
     * @return self
     */
    public function setRenderData($render_data)
    {
        $this->container['render_data'] = $render_data;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return SingleComponentResponseOfDestinyItemStatsComponent|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param SingleComponentResponseOfDestinyItemStatsComponent|null $stats Information about the computed stats of the item: power, defense, etc...  COMPONENT TYPE: ItemStats
     *
     * @return self
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets talent_grid
     *
     * @return SingleComponentResponseOfDestinyItemTalentGridComponent|null
     */
    public function getTalentGrid()
    {
        return $this->container['talent_grid'];
    }

    /**
     * Sets talent_grid
     *
     * @param SingleComponentResponseOfDestinyItemTalentGridComponent|null $talent_grid Information about the talent grid attached to the item. Talent nodes can provide a variety of benefits and abilities, and in Destiny 2 are used almost exclusively for the character's \"Builds\".  COMPONENT TYPE: ItemTalentGrids
     *
     * @return self
     */
    public function setTalentGrid($talent_grid)
    {
        $this->container['talent_grid'] = $talent_grid;

        return $this;
    }

    /**
     * Gets sockets
     *
     * @return SingleComponentResponseOfDestinyItemSocketsComponent|null
     */
    public function getSockets()
    {
        return $this->container['sockets'];
    }

    /**
     * Sets sockets
     *
     * @param SingleComponentResponseOfDestinyItemSocketsComponent|null $sockets Information about the sockets of the item: which are currently active, what potential sockets you could have and the stats/abilities/perks you can gain from them.  COMPONENT TYPE: ItemSockets
     *
     * @return self
     */
    public function setSockets($sockets)
    {
        $this->container['sockets'] = $sockets;

        return $this;
    }

    /**
     * Gets reusable_plugs
     *
     * @return SingleComponentResponseOfDestinyItemReusablePlugsComponent|null
     */
    public function getReusablePlugs()
    {
        return $this->container['reusable_plugs'];
    }

    /**
     * Sets reusable_plugs
     *
     * @param SingleComponentResponseOfDestinyItemReusablePlugsComponent|null $reusable_plugs Information about the Reusable Plugs for sockets on an item. These are plugs that you can insert into the given socket regardless of if you actually own an instance of that plug: they are logic-driven plugs rather than inventory-driven.   These may need to be combined with Plug Set component data to get a full picture of available plugs on a given socket.   COMPONENT TYPE: ItemReusablePlugs
     *
     * @return self
     */
    public function setReusablePlugs($reusable_plugs)
    {
        $this->container['reusable_plugs'] = $reusable_plugs;

        return $this;
    }

    /**
     * Gets plug_objectives
     *
     * @return SingleComponentResponseOfDestinyItemPlugObjectivesComponent|null
     */
    public function getPlugObjectives()
    {
        return $this->container['plug_objectives'];
    }

    /**
     * Sets plug_objectives
     *
     * @param SingleComponentResponseOfDestinyItemPlugObjectivesComponent|null $plug_objectives Information about objectives on Plugs for a given item. See the component's documentation for more info.  COMPONENT TYPE: ItemPlugObjectives
     *
     * @return self
     */
    public function setPlugObjectives($plug_objectives)
    {
        $this->container['plug_objectives'] = $plug_objectives;

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


