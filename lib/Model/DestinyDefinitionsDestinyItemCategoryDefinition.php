<?php
/**
 * DestinyDefinitionsDestinyItemCategoryDefinition
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
 * DestinyDefinitionsDestinyItemCategoryDefinition Class Doc Comment
 *
 * @category Class
 * @description In an attempt to categorize items by type, usage, and other interesting properties, we created DestinyItemCategoryDefinition: information about types that is assembled using a set of heuristics that examine the properties of an item such as what inventory bucket it&#39;s in, its item type name, and whether it has or is missing certain blocks of data.  This heuristic is imperfect, however. If you find an item miscategorized, let us know on the Bungie API forums!  We then populate all of the categories that we think an item belongs to in its DestinyInventoryItemDefinition.itemCategoryHashes property. You can use that to provide your own custom item filtering, sorting, aggregating... go nuts on it! And let us know if you see more categories that you wish would be added!
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyItemCategoryDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemCategoryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_properties' => '\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'visible' => 'bool',
        'deprecated' => 'bool',
        'short_title' => 'string',
        'item_type_regex' => 'string',
        'grant_destiny_breaker_type' => 'int',
        'plug_category_identifier' => 'string',
        'item_type_regex_not' => 'string',
        'origin_bucket_identifier' => 'string',
        'grant_destiny_item_type' => 'int',
        'grant_destiny_sub_type' => 'int',
        'grant_destiny_class' => 'int',
        'trait_id' => 'string',
        'grouped_category_hashes' => 'int[]',
        'parent_category_hashes' => 'int[]',
        'group_category_only' => 'bool',
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
        'visible' => null,
        'deprecated' => null,
        'short_title' => null,
        'item_type_regex' => null,
        'grant_destiny_breaker_type' => 'int32',
        'plug_category_identifier' => null,
        'item_type_regex_not' => null,
        'origin_bucket_identifier' => null,
        'grant_destiny_item_type' => 'int32',
        'grant_destiny_sub_type' => 'int32',
        'grant_destiny_class' => 'int32',
        'trait_id' => null,
        'grouped_category_hashes' => 'uint32',
        'parent_category_hashes' => 'uint32',
        'group_category_only' => null,
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
        'visible' => 'visible',
        'deprecated' => 'deprecated',
        'short_title' => 'shortTitle',
        'item_type_regex' => 'itemTypeRegex',
        'grant_destiny_breaker_type' => 'grantDestinyBreakerType',
        'plug_category_identifier' => 'plugCategoryIdentifier',
        'item_type_regex_not' => 'itemTypeRegexNot',
        'origin_bucket_identifier' => 'originBucketIdentifier',
        'grant_destiny_item_type' => 'grantDestinyItemType',
        'grant_destiny_sub_type' => 'grantDestinySubType',
        'grant_destiny_class' => 'grantDestinyClass',
        'trait_id' => 'traitId',
        'grouped_category_hashes' => 'groupedCategoryHashes',
        'parent_category_hashes' => 'parentCategoryHashes',
        'group_category_only' => 'groupCategoryOnly',
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
        'visible' => 'setVisible',
        'deprecated' => 'setDeprecated',
        'short_title' => 'setShortTitle',
        'item_type_regex' => 'setItemTypeRegex',
        'grant_destiny_breaker_type' => 'setGrantDestinyBreakerType',
        'plug_category_identifier' => 'setPlugCategoryIdentifier',
        'item_type_regex_not' => 'setItemTypeRegexNot',
        'origin_bucket_identifier' => 'setOriginBucketIdentifier',
        'grant_destiny_item_type' => 'setGrantDestinyItemType',
        'grant_destiny_sub_type' => 'setGrantDestinySubType',
        'grant_destiny_class' => 'setGrantDestinyClass',
        'trait_id' => 'setTraitId',
        'grouped_category_hashes' => 'setGroupedCategoryHashes',
        'parent_category_hashes' => 'setParentCategoryHashes',
        'group_category_only' => 'setGroupCategoryOnly',
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
        'visible' => 'getVisible',
        'deprecated' => 'getDeprecated',
        'short_title' => 'getShortTitle',
        'item_type_regex' => 'getItemTypeRegex',
        'grant_destiny_breaker_type' => 'getGrantDestinyBreakerType',
        'plug_category_identifier' => 'getPlugCategoryIdentifier',
        'item_type_regex_not' => 'getItemTypeRegexNot',
        'origin_bucket_identifier' => 'getOriginBucketIdentifier',
        'grant_destiny_item_type' => 'getGrantDestinyItemType',
        'grant_destiny_sub_type' => 'getGrantDestinySubType',
        'grant_destiny_class' => 'getGrantDestinyClass',
        'trait_id' => 'getTraitId',
        'grouped_category_hashes' => 'getGroupedCategoryHashes',
        'parent_category_hashes' => 'getParentCategoryHashes',
        'group_category_only' => 'getGroupCategoryOnly',
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
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['deprecated'] = $data['deprecated'] ?? null;
        $this->container['short_title'] = $data['short_title'] ?? null;
        $this->container['item_type_regex'] = $data['item_type_regex'] ?? null;
        $this->container['grant_destiny_breaker_type'] = $data['grant_destiny_breaker_type'] ?? null;
        $this->container['plug_category_identifier'] = $data['plug_category_identifier'] ?? null;
        $this->container['item_type_regex_not'] = $data['item_type_regex_not'] ?? null;
        $this->container['origin_bucket_identifier'] = $data['origin_bucket_identifier'] ?? null;
        $this->container['grant_destiny_item_type'] = $data['grant_destiny_item_type'] ?? null;
        $this->container['grant_destiny_sub_type'] = $data['grant_destiny_sub_type'] ?? null;
        $this->container['grant_destiny_class'] = $data['grant_destiny_class'] ?? null;
        $this->container['trait_id'] = $data['trait_id'] ?? null;
        $this->container['grouped_category_hashes'] = $data['grouped_category_hashes'] ?? null;
        $this->container['parent_category_hashes'] = $data['parent_category_hashes'] ?? null;
        $this->container['group_category_only'] = $data['group_category_only'] ?? null;
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
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible If True, this category should be visible in UI. Sometimes we make categories that we don't think are interesting externally. It's up to you if you want to skip on showing them.
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets deprecated
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool|null $deprecated If True, this category has been deprecated: it may have no items left, or there may be only legacy items that remain in it which are no longer relevant to the game.
     *
     * @return self
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets short_title
     *
     * @return string|null
     */
    public function getShortTitle()
    {
        return $this->container['short_title'];
    }

    /**
     * Sets short_title
     *
     * @param string|null $short_title A shortened version of the title. The reason why we have this is because the Armory in German had titles that were too long to display in our UI, so these were localized abbreviated versions of those categories. The property still exists today, even though the Armory doesn't exist for D2... yet.
     *
     * @return self
     */
    public function setShortTitle($short_title)
    {
        $this->container['short_title'] = $short_title;

        return $this;
    }

    /**
     * Gets item_type_regex
     *
     * @return string|null
     */
    public function getItemTypeRegex()
    {
        return $this->container['item_type_regex'];
    }

    /**
     * Sets item_type_regex
     *
     * @param string|null $item_type_regex The janky regular expression we used against the item type to try and discern whether the item belongs to this category.
     *
     * @return self
     */
    public function setItemTypeRegex($item_type_regex)
    {
        $this->container['item_type_regex'] = $item_type_regex;

        return $this;
    }

    /**
     * Gets grant_destiny_breaker_type
     *
     * @return int|null
     */
    public function getGrantDestinyBreakerType()
    {
        return $this->container['grant_destiny_breaker_type'];
    }

    /**
     * Sets grant_destiny_breaker_type
     *
     * @param int|null $grant_destiny_breaker_type If the item in question has this category, it also should have this breaker type.
     *
     * @return self
     */
    public function setGrantDestinyBreakerType($grant_destiny_breaker_type)
    {
        $this->container['grant_destiny_breaker_type'] = $grant_destiny_breaker_type;

        return $this;
    }

    /**
     * Gets plug_category_identifier
     *
     * @return string|null
     */
    public function getPlugCategoryIdentifier()
    {
        return $this->container['plug_category_identifier'];
    }

    /**
     * Sets plug_category_identifier
     *
     * @param string|null $plug_category_identifier If the item is a plug, this is the identifier we expect to find associated with it if it is in this category.
     *
     * @return self
     */
    public function setPlugCategoryIdentifier($plug_category_identifier)
    {
        $this->container['plug_category_identifier'] = $plug_category_identifier;

        return $this;
    }

    /**
     * Gets item_type_regex_not
     *
     * @return string|null
     */
    public function getItemTypeRegexNot()
    {
        return $this->container['item_type_regex_not'];
    }

    /**
     * Sets item_type_regex_not
     *
     * @param string|null $item_type_regex_not If the item type matches this janky regex, it does *not* belong to this category.
     *
     * @return self
     */
    public function setItemTypeRegexNot($item_type_regex_not)
    {
        $this->container['item_type_regex_not'] = $item_type_regex_not;

        return $this;
    }

    /**
     * Gets origin_bucket_identifier
     *
     * @return string|null
     */
    public function getOriginBucketIdentifier()
    {
        return $this->container['origin_bucket_identifier'];
    }

    /**
     * Sets origin_bucket_identifier
     *
     * @param string|null $origin_bucket_identifier If the item belongs to this bucket, it does belong to this category.
     *
     * @return self
     */
    public function setOriginBucketIdentifier($origin_bucket_identifier)
    {
        $this->container['origin_bucket_identifier'] = $origin_bucket_identifier;

        return $this;
    }

    /**
     * Gets grant_destiny_item_type
     *
     * @return int|null
     */
    public function getGrantDestinyItemType()
    {
        return $this->container['grant_destiny_item_type'];
    }

    /**
     * Sets grant_destiny_item_type
     *
     * @param int|null $grant_destiny_item_type If an item belongs to this category, it will also receive this item type. This is now how DestinyItemType is populated for items: it used to be an even jankier process, but that's a story that requires more alcohol.
     *
     * @return self
     */
    public function setGrantDestinyItemType($grant_destiny_item_type)
    {
        $this->container['grant_destiny_item_type'] = $grant_destiny_item_type;

        return $this;
    }

    /**
     * Gets grant_destiny_sub_type
     *
     * @return int|null
     */
    public function getGrantDestinySubType()
    {
        return $this->container['grant_destiny_sub_type'];
    }

    /**
     * Sets grant_destiny_sub_type
     *
     * @param int|null $grant_destiny_sub_type If an item belongs to this category, it will also receive this subtype enum value.  I know what you're thinking - what if it belongs to multiple categories that provide sub-types?  The last one processed wins, as is the case with all of these \"grant\" enums. Now you can see one reason why we moved away from these enums... but they're so convenient when they work, aren't they?
     *
     * @return self
     */
    public function setGrantDestinySubType($grant_destiny_sub_type)
    {
        $this->container['grant_destiny_sub_type'] = $grant_destiny_sub_type;

        return $this;
    }

    /**
     * Gets grant_destiny_class
     *
     * @return int|null
     */
    public function getGrantDestinyClass()
    {
        return $this->container['grant_destiny_class'];
    }

    /**
     * Sets grant_destiny_class
     *
     * @param int|null $grant_destiny_class If an item belongs to this category, it will also get this class restriction enum value.  See the other \"grant\"-prefixed properties on this definition for my color commentary.
     *
     * @return self
     */
    public function setGrantDestinyClass($grant_destiny_class)
    {
        $this->container['grant_destiny_class'] = $grant_destiny_class;

        return $this;
    }

    /**
     * Gets trait_id
     *
     * @return string|null
     */
    public function getTraitId()
    {
        return $this->container['trait_id'];
    }

    /**
     * Sets trait_id
     *
     * @param string|null $trait_id The traitId that can be found on items that belong to this category.
     *
     * @return self
     */
    public function setTraitId($trait_id)
    {
        $this->container['trait_id'] = $trait_id;

        return $this;
    }

    /**
     * Gets grouped_category_hashes
     *
     * @return int[]|null
     */
    public function getGroupedCategoryHashes()
    {
        return $this->container['grouped_category_hashes'];
    }

    /**
     * Sets grouped_category_hashes
     *
     * @param int[]|null $grouped_category_hashes If this category is a \"parent\" category of other categories, those children will have their hashes listed in rendering order here, and can be looked up using these hashes against DestinyItemCategoryDefinition.  In this way, you can build up a visual hierarchy of item categories. That's what we did, and you can do it too. I believe in you. Yes, you, Carl.  (I hope someone named Carl reads this someday)
     *
     * @return self
     */
    public function setGroupedCategoryHashes($grouped_category_hashes)
    {
        $this->container['grouped_category_hashes'] = $grouped_category_hashes;

        return $this;
    }

    /**
     * Gets parent_category_hashes
     *
     * @return int[]|null
     */
    public function getParentCategoryHashes()
    {
        return $this->container['parent_category_hashes'];
    }

    /**
     * Sets parent_category_hashes
     *
     * @param int[]|null $parent_category_hashes All item category hashes of \"parent\" categories: categories that contain this as a child through the hierarchy of groupedCategoryHashes. It's a bit redundant, but having this child-centric list speeds up some calculations.
     *
     * @return self
     */
    public function setParentCategoryHashes($parent_category_hashes)
    {
        $this->container['parent_category_hashes'] = $parent_category_hashes;

        return $this;
    }

    /**
     * Gets group_category_only
     *
     * @return bool|null
     */
    public function getGroupCategoryOnly()
    {
        return $this->container['group_category_only'];
    }

    /**
     * Sets group_category_only
     *
     * @param bool|null $group_category_only If true, this category is only used for grouping, and should not be evaluated with its own checks. Rather, the item only has this category if it has one of its child categories.
     *
     * @return self
     */
    public function setGroupCategoryOnly($group_category_only)
    {
        $this->container['group_category_only'] = $group_category_only;

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


