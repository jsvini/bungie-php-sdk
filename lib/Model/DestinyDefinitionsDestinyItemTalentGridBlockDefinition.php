<?php
/**
 * DestinyDefinitionsDestinyItemTalentGridBlockDefinition
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
 * DestinyDefinitionsDestinyItemTalentGridBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description This defines information that can only come from a talent grid on an item. Items mostly have negligible talent grid data these days, but instanced items still retain grids as a source for some of this common information.  Builds/Subclasses are the only items left that still have talent grids with meaningful Nodes.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyItemTalentGridBlockDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemTalentGridBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'talent_grid_hash' => 'int',
        'item_detail_string' => 'string',
        'build_name' => 'string',
        'hud_damage_type' => 'int',
        'hud_icon' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'talent_grid_hash' => 'uint32',
        'item_detail_string' => null,
        'build_name' => null,
        'hud_damage_type' => 'int32',
        'hud_icon' => null
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
        'talent_grid_hash' => 'talentGridHash',
        'item_detail_string' => 'itemDetailString',
        'build_name' => 'buildName',
        'hud_damage_type' => 'hudDamageType',
        'hud_icon' => 'hudIcon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'talent_grid_hash' => 'setTalentGridHash',
        'item_detail_string' => 'setItemDetailString',
        'build_name' => 'setBuildName',
        'hud_damage_type' => 'setHudDamageType',
        'hud_icon' => 'setHudIcon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'talent_grid_hash' => 'getTalentGridHash',
        'item_detail_string' => 'getItemDetailString',
        'build_name' => 'getBuildName',
        'hud_damage_type' => 'getHudDamageType',
        'hud_icon' => 'getHudIcon'
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
        $this->container['talent_grid_hash'] = $data['talent_grid_hash'] ?? null;
        $this->container['item_detail_string'] = $data['item_detail_string'] ?? null;
        $this->container['build_name'] = $data['build_name'] ?? null;
        $this->container['hud_damage_type'] = $data['hud_damage_type'] ?? null;
        $this->container['hud_icon'] = $data['hud_icon'] ?? null;
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
     * Gets talent_grid_hash
     *
     * @return int|null
     */
    public function getTalentGridHash()
    {
        return $this->container['talent_grid_hash'];
    }

    /**
     * Sets talent_grid_hash
     *
     * @param int|null $talent_grid_hash The hash identifier of the DestinyTalentGridDefinition attached to this item.
     *
     * @return self
     */
    public function setTalentGridHash($talent_grid_hash)
    {
        $this->container['talent_grid_hash'] = $talent_grid_hash;

        return $this;
    }

    /**
     * Gets item_detail_string
     *
     * @return string|null
     */
    public function getItemDetailString()
    {
        return $this->container['item_detail_string'];
    }

    /**
     * Sets item_detail_string
     *
     * @param string|null $item_detail_string This is meant to be a subtitle for looking at the talent grid. In practice, somewhat frustratingly, this always merely says the localized word for \"Details\". Great. Maybe it'll have more if talent grids ever get used for more than builds and subclasses again.
     *
     * @return self
     */
    public function setItemDetailString($item_detail_string)
    {
        $this->container['item_detail_string'] = $item_detail_string;

        return $this;
    }

    /**
     * Gets build_name
     *
     * @return string|null
     */
    public function getBuildName()
    {
        return $this->container['build_name'];
    }

    /**
     * Sets build_name
     *
     * @param string|null $build_name A shortcut string identifier for the \"build\" in question, if this talent grid has an associated build. Doesn't map to anything we can expose at the moment.
     *
     * @return self
     */
    public function setBuildName($build_name)
    {
        $this->container['build_name'] = $build_name;

        return $this;
    }

    /**
     * Gets hud_damage_type
     *
     * @return int|null
     */
    public function getHudDamageType()
    {
        return $this->container['hud_damage_type'];
    }

    /**
     * Sets hud_damage_type
     *
     * @param int|null $hud_damage_type If the talent grid implies a damage type, this is the enum value for that damage type.
     *
     * @return self
     */
    public function setHudDamageType($hud_damage_type)
    {
        $this->container['hud_damage_type'] = $hud_damage_type;

        return $this;
    }

    /**
     * Gets hud_icon
     *
     * @return string|null
     */
    public function getHudIcon()
    {
        return $this->container['hud_icon'];
    }

    /**
     * Sets hud_icon
     *
     * @param string|null $hud_icon If the talent grid has a special icon that's shown in the game UI (like builds, funny that), this is the identifier for that icon. Sadly, we don't actually get that icon right now. I'll be looking to replace this with a path to the actual icon itself.
     *
     * @return self
     */
    public function setHudIcon($hud_icon)
    {
        $this->container['hud_icon'] = $hud_icon;

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


