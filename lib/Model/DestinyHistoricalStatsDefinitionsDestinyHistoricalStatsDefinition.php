<?php
/**
 * DestinyHistoricalStatsDefinitionsDestinyHistoricalStatsDefinition
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
 * DestinyHistoricalStatsDefinitionsDestinyHistoricalStatsDefinition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyHistoricalStatsDefinitionsDestinyHistoricalStatsDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.Definitions.DestinyHistoricalStatsDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stat_id' => 'string',
        'group' => 'int',
        'period_types' => 'int[]',
        'modes' => 'int[]',
        'category' => 'int',
        'stat_name' => 'string',
        'stat_name_abbr' => 'string',
        'stat_description' => 'string',
        'unit_type' => 'int',
        'icon_image' => 'string',
        'merge_method' => 'int',
        'unit_label' => 'string',
        'weight' => 'int',
        'medal_tier_hash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stat_id' => null,
        'group' => 'int32',
        'period_types' => 'int32',
        'modes' => 'int32',
        'category' => 'int32',
        'stat_name' => null,
        'stat_name_abbr' => null,
        'stat_description' => null,
        'unit_type' => 'int32',
        'icon_image' => null,
        'merge_method' => 'int32',
        'unit_label' => null,
        'weight' => 'int32',
        'medal_tier_hash' => 'uint32'
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
        'stat_id' => 'statId',
        'group' => 'group',
        'period_types' => 'periodTypes',
        'modes' => 'modes',
        'category' => 'category',
        'stat_name' => 'statName',
        'stat_name_abbr' => 'statNameAbbr',
        'stat_description' => 'statDescription',
        'unit_type' => 'unitType',
        'icon_image' => 'iconImage',
        'merge_method' => 'mergeMethod',
        'unit_label' => 'unitLabel',
        'weight' => 'weight',
        'medal_tier_hash' => 'medalTierHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stat_id' => 'setStatId',
        'group' => 'setGroup',
        'period_types' => 'setPeriodTypes',
        'modes' => 'setModes',
        'category' => 'setCategory',
        'stat_name' => 'setStatName',
        'stat_name_abbr' => 'setStatNameAbbr',
        'stat_description' => 'setStatDescription',
        'unit_type' => 'setUnitType',
        'icon_image' => 'setIconImage',
        'merge_method' => 'setMergeMethod',
        'unit_label' => 'setUnitLabel',
        'weight' => 'setWeight',
        'medal_tier_hash' => 'setMedalTierHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stat_id' => 'getStatId',
        'group' => 'getGroup',
        'period_types' => 'getPeriodTypes',
        'modes' => 'getModes',
        'category' => 'getCategory',
        'stat_name' => 'getStatName',
        'stat_name_abbr' => 'getStatNameAbbr',
        'stat_description' => 'getStatDescription',
        'unit_type' => 'getUnitType',
        'icon_image' => 'getIconImage',
        'merge_method' => 'getMergeMethod',
        'unit_label' => 'getUnitLabel',
        'weight' => 'getWeight',
        'medal_tier_hash' => 'getMedalTierHash'
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

    const MERGE_METHOD_0 = 0;
    const MERGE_METHOD_1 = 1;
    const MERGE_METHOD_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMergeMethodAllowableValues()
    {
        return [
            self::MERGE_METHOD_0,
            self::MERGE_METHOD_1,
            self::MERGE_METHOD_2,
        ];
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
        $this->container['stat_id'] = $data['stat_id'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['period_types'] = $data['period_types'] ?? null;
        $this->container['modes'] = $data['modes'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['stat_name'] = $data['stat_name'] ?? null;
        $this->container['stat_name_abbr'] = $data['stat_name_abbr'] ?? null;
        $this->container['stat_description'] = $data['stat_description'] ?? null;
        $this->container['unit_type'] = $data['unit_type'] ?? null;
        $this->container['icon_image'] = $data['icon_image'] ?? null;
        $this->container['merge_method'] = $data['merge_method'] ?? null;
        $this->container['unit_label'] = $data['unit_label'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['medal_tier_hash'] = $data['medal_tier_hash'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMergeMethodAllowableValues();
        if (!is_null($this->container['merge_method']) && !in_array($this->container['merge_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'merge_method', must be one of '%s'",
                $this->container['merge_method'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets stat_id
     *
     * @return string|null
     */
    public function getStatId()
    {
        return $this->container['stat_id'];
    }

    /**
     * Sets stat_id
     *
     * @param string|null $stat_id Unique programmer friendly ID for this stat
     *
     * @return self
     */
    public function setStatId($stat_id)
    {
        $this->container['stat_id'] = $stat_id;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int|null $group Statistic group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets period_types
     *
     * @return int[]|null
     */
    public function getPeriodTypes()
    {
        return $this->container['period_types'];
    }

    /**
     * Sets period_types
     *
     * @param int[]|null $period_types Time periods the statistic covers
     *
     * @return self
     */
    public function setPeriodTypes($period_types)
    {
        $this->container['period_types'] = $period_types;

        return $this;
    }

    /**
     * Gets modes
     *
     * @return int[]|null
     */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
     * Sets modes
     *
     * @param int[]|null $modes Game modes where this statistic can be reported.
     *
     * @return self
     */
    public function setModes($modes)
    {
        $this->container['modes'] = $modes;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category Category for the stat.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets stat_name
     *
     * @return string|null
     */
    public function getStatName()
    {
        return $this->container['stat_name'];
    }

    /**
     * Sets stat_name
     *
     * @param string|null $stat_name Display name
     *
     * @return self
     */
    public function setStatName($stat_name)
    {
        $this->container['stat_name'] = $stat_name;

        return $this;
    }

    /**
     * Gets stat_name_abbr
     *
     * @return string|null
     */
    public function getStatNameAbbr()
    {
        return $this->container['stat_name_abbr'];
    }

    /**
     * Sets stat_name_abbr
     *
     * @param string|null $stat_name_abbr Display name abbreviated
     *
     * @return self
     */
    public function setStatNameAbbr($stat_name_abbr)
    {
        $this->container['stat_name_abbr'] = $stat_name_abbr;

        return $this;
    }

    /**
     * Gets stat_description
     *
     * @return string|null
     */
    public function getStatDescription()
    {
        return $this->container['stat_description'];
    }

    /**
     * Sets stat_description
     *
     * @param string|null $stat_description Description of a stat if applicable.
     *
     * @return self
     */
    public function setStatDescription($stat_description)
    {
        $this->container['stat_description'] = $stat_description;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return int|null
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param int|null $unit_type Unit, if any, for the statistic
     *
     * @return self
     */
    public function setUnitType($unit_type)
    {
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets icon_image
     *
     * @return string|null
     */
    public function getIconImage()
    {
        return $this->container['icon_image'];
    }

    /**
     * Sets icon_image
     *
     * @param string|null $icon_image Optional URI to an icon for the statistic
     *
     * @return self
     */
    public function setIconImage($icon_image)
    {
        $this->container['icon_image'] = $icon_image;

        return $this;
    }

    /**
     * Gets merge_method
     *
     * @return int|null
     */
    public function getMergeMethod()
    {
        return $this->container['merge_method'];
    }

    /**
     * Sets merge_method
     *
     * @param int|null $merge_method Optional icon for the statistic
     *
     * @return self
     */
    public function setMergeMethod($merge_method)
    {
        $allowedValues = $this->getMergeMethodAllowableValues();
        if (!is_null($merge_method) && !in_array($merge_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'merge_method', must be one of '%s'",
                    $merge_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['merge_method'] = $merge_method;

        return $this;
    }

    /**
     * Gets unit_label
     *
     * @return string|null
     */
    public function getUnitLabel()
    {
        return $this->container['unit_label'];
    }

    /**
     * Sets unit_label
     *
     * @param string|null $unit_label Localized Unit Name for the stat.
     *
     * @return self
     */
    public function setUnitLabel($unit_label)
    {
        $this->container['unit_label'] = $unit_label;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Weight assigned to this stat indicating its relative impressiveness.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets medal_tier_hash
     *
     * @return int|null
     */
    public function getMedalTierHash()
    {
        return $this->container['medal_tier_hash'];
    }

    /**
     * Sets medal_tier_hash
     *
     * @param int|null $medal_tier_hash The tier associated with this medal - be it implicitly or explicitly.
     *
     * @return self
     */
    public function setMedalTierHash($medal_tier_hash)
    {
        $this->container['medal_tier_hash'] = $medal_tier_hash;

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


