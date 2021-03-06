<?php
/**
 * DestinyDefinitionsDestinySandboxPerkDefinition
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
 * DestinyDefinitionsDestinySandboxPerkDefinition Class Doc Comment
 *
 * @category Class
 * @description Perks are modifiers to a character or item that can be applied situationally.  - Perks determine a weapons&#39; damage type.  - Perks put the Mods in Modifiers (they are literally the entity that bestows the Sandbox benefit for whatever fluff text about the modifier in the Socket, Plug or Talent Node)  - Perks are applied for unique alterations of state in Objectives  Anyways, I&#39;m sure you can see why perks are so interesting.  What Perks often don&#39;t have is human readable information, so we attempt to reverse engineer that by pulling that data from places that uniquely refer to these perks: namely, Talent Nodes and Plugs. That only gives us a subset of perks that are human readable, but those perks are the ones people generally care about anyways. The others are left as a mystery, their true purpose mostly unknown and undocumented.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinySandboxPerkDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinySandboxPerkDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_properties' => 'DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'perk_identifier' => 'string',
        'is_displayable' => 'bool',
        'damage_type' => 'int',
        'damage_type_hash' => 'int',
        'perk_groups' => 'DestinyDefinitionsDestinyTalentNodeStepGroups',
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
        'perk_identifier' => null,
        'is_displayable' => null,
        'damage_type' => 'int32',
        'damage_type_hash' => 'uint32',
        'perk_groups' => null,
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
        'perk_identifier' => 'perkIdentifier',
        'is_displayable' => 'isDisplayable',
        'damage_type' => 'damageType',
        'damage_type_hash' => 'damageTypeHash',
        'perk_groups' => 'perkGroups',
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
        'perk_identifier' => 'setPerkIdentifier',
        'is_displayable' => 'setIsDisplayable',
        'damage_type' => 'setDamageType',
        'damage_type_hash' => 'setDamageTypeHash',
        'perk_groups' => 'setPerkGroups',
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
        'perk_identifier' => 'getPerkIdentifier',
        'is_displayable' => 'getIsDisplayable',
        'damage_type' => 'getDamageType',
        'damage_type_hash' => 'getDamageTypeHash',
        'perk_groups' => 'getPerkGroups',
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
        $this->container['perk_identifier'] = $data['perk_identifier'] ?? null;
        $this->container['is_displayable'] = $data['is_displayable'] ?? null;
        $this->container['damage_type'] = $data['damage_type'] ?? null;
        $this->container['damage_type_hash'] = $data['damage_type_hash'] ?? null;
        $this->container['perk_groups'] = $data['perk_groups'] ?? null;
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
     * @return DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['display_properties'];
    }

    /**
     * Sets display_properties
     *
     * @param DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $display_properties These display properties are by no means guaranteed to be populated. Usually when it is, it's only because we back-filled them with the displayProperties of some Talent Node or Plug item that happened to be uniquely providing that perk.
     *
     * @return self
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

        return $this;
    }

    /**
     * Gets perk_identifier
     *
     * @return string|null
     */
    public function getPerkIdentifier()
    {
        return $this->container['perk_identifier'];
    }

    /**
     * Sets perk_identifier
     *
     * @param string|null $perk_identifier The string identifier for the perk.
     *
     * @return self
     */
    public function setPerkIdentifier($perk_identifier)
    {
        $this->container['perk_identifier'] = $perk_identifier;

        return $this;
    }

    /**
     * Gets is_displayable
     *
     * @return bool|null
     */
    public function getIsDisplayable()
    {
        return $this->container['is_displayable'];
    }

    /**
     * Sets is_displayable
     *
     * @param bool|null $is_displayable If true, you can actually show the perk in the UI. Otherwise, it doesn't have useful player-facing information.
     *
     * @return self
     */
    public function setIsDisplayable($is_displayable)
    {
        $this->container['is_displayable'] = $is_displayable;

        return $this;
    }

    /**
     * Gets damage_type
     *
     * @return int|null
     */
    public function getDamageType()
    {
        return $this->container['damage_type'];
    }

    /**
     * Sets damage_type
     *
     * @param int|null $damage_type If this perk grants a damage type to a weapon, the damage type will be defined here.  Unless you have a compelling reason to use this enum value, use the damageTypeHash instead to look up the actual DestinyDamageTypeDefinition.
     *
     * @return self
     */
    public function setDamageType($damage_type)
    {
        $this->container['damage_type'] = $damage_type;

        return $this;
    }

    /**
     * Gets damage_type_hash
     *
     * @return int|null
     */
    public function getDamageTypeHash()
    {
        return $this->container['damage_type_hash'];
    }

    /**
     * Sets damage_type_hash
     *
     * @param int|null $damage_type_hash The hash identifier for looking up the DestinyDamageTypeDefinition, if this perk has a damage type.  This is preferred over using the damageType enumeration value, which has been left purely because it is occasionally convenient.
     *
     * @return self
     */
    public function setDamageTypeHash($damage_type_hash)
    {
        $this->container['damage_type_hash'] = $damage_type_hash;

        return $this;
    }

    /**
     * Gets perk_groups
     *
     * @return DestinyDefinitionsDestinyTalentNodeStepGroups|null
     */
    public function getPerkGroups()
    {
        return $this->container['perk_groups'];
    }

    /**
     * Sets perk_groups
     *
     * @param DestinyDefinitionsDestinyTalentNodeStepGroups|null $perk_groups An old holdover from the original Armory, this was an attempt to group perks by functionality.  It is as yet unpopulated, and there will be quite a bit of work needed to restore it to its former working order.
     *
     * @return self
     */
    public function setPerkGroups($perk_groups)
    {
        $this->container['perk_groups'] = $perk_groups;

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


