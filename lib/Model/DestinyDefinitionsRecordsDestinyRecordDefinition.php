<?php
/**
 * DestinyDefinitionsRecordsDestinyRecordDefinition
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
 * DestinyDefinitionsRecordsDestinyRecordDefinition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsRecordsDestinyRecordDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Records.DestinyRecordDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_properties' => '\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'scope' => 'int',
        'presentation_info' => '\OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock',
        'lore_hash' => 'int',
        'objective_hashes' => 'int[]',
        'record_value_style' => 'int',
        'title_info' => '\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock',
        'completion_info' => '\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock',
        'state_info' => '\OpenAPI\Client\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock',
        'requirements' => '\OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock',
        'expiration_info' => '\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordExpirationBlock',
        'interval_info' => 'DestinyDefinitionsRecordsDestinyRecordIntervalBlock',
        'reward_items' => '\OpenAPI\Client\Model\DestinyDestinyItemQuantity[]',
        'presentation_node_type' => 'int',
        'trait_ids' => 'string[]',
        'trait_hashes' => 'int[]',
        'parent_node_hashes' => 'int[]',
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
        'scope' => 'int32',
        'presentation_info' => null,
        'lore_hash' => 'uint32',
        'objective_hashes' => 'uint32',
        'record_value_style' => 'int32',
        'title_info' => null,
        'completion_info' => null,
        'state_info' => null,
        'requirements' => null,
        'expiration_info' => null,
        'interval_info' => null,
        'reward_items' => null,
        'presentation_node_type' => 'int32',
        'trait_ids' => null,
        'trait_hashes' => 'uint32',
        'parent_node_hashes' => 'uint32',
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
        'scope' => 'scope',
        'presentation_info' => 'presentationInfo',
        'lore_hash' => 'loreHash',
        'objective_hashes' => 'objectiveHashes',
        'record_value_style' => 'recordValueStyle',
        'title_info' => 'titleInfo',
        'completion_info' => 'completionInfo',
        'state_info' => 'stateInfo',
        'requirements' => 'requirements',
        'expiration_info' => 'expirationInfo',
        'interval_info' => 'intervalInfo',
        'reward_items' => 'rewardItems',
        'presentation_node_type' => 'presentationNodeType',
        'trait_ids' => 'traitIds',
        'trait_hashes' => 'traitHashes',
        'parent_node_hashes' => 'parentNodeHashes',
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
        'scope' => 'setScope',
        'presentation_info' => 'setPresentationInfo',
        'lore_hash' => 'setLoreHash',
        'objective_hashes' => 'setObjectiveHashes',
        'record_value_style' => 'setRecordValueStyle',
        'title_info' => 'setTitleInfo',
        'completion_info' => 'setCompletionInfo',
        'state_info' => 'setStateInfo',
        'requirements' => 'setRequirements',
        'expiration_info' => 'setExpirationInfo',
        'interval_info' => 'setIntervalInfo',
        'reward_items' => 'setRewardItems',
        'presentation_node_type' => 'setPresentationNodeType',
        'trait_ids' => 'setTraitIds',
        'trait_hashes' => 'setTraitHashes',
        'parent_node_hashes' => 'setParentNodeHashes',
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
        'scope' => 'getScope',
        'presentation_info' => 'getPresentationInfo',
        'lore_hash' => 'getLoreHash',
        'objective_hashes' => 'getObjectiveHashes',
        'record_value_style' => 'getRecordValueStyle',
        'title_info' => 'getTitleInfo',
        'completion_info' => 'getCompletionInfo',
        'state_info' => 'getStateInfo',
        'requirements' => 'getRequirements',
        'expiration_info' => 'getExpirationInfo',
        'interval_info' => 'getIntervalInfo',
        'reward_items' => 'getRewardItems',
        'presentation_node_type' => 'getPresentationNodeType',
        'trait_ids' => 'getTraitIds',
        'trait_hashes' => 'getTraitHashes',
        'parent_node_hashes' => 'getParentNodeHashes',
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
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['presentation_info'] = $data['presentation_info'] ?? null;
        $this->container['lore_hash'] = $data['lore_hash'] ?? null;
        $this->container['objective_hashes'] = $data['objective_hashes'] ?? null;
        $this->container['record_value_style'] = $data['record_value_style'] ?? null;
        $this->container['title_info'] = $data['title_info'] ?? null;
        $this->container['completion_info'] = $data['completion_info'] ?? null;
        $this->container['state_info'] = $data['state_info'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['expiration_info'] = $data['expiration_info'] ?? null;
        $this->container['interval_info'] = $data['interval_info'] ?? null;
        $this->container['reward_items'] = $data['reward_items'] ?? null;
        $this->container['presentation_node_type'] = $data['presentation_node_type'] ?? null;
        $this->container['trait_ids'] = $data['trait_ids'] ?? null;
        $this->container['trait_hashes'] = $data['trait_hashes'] ?? null;
        $this->container['parent_node_hashes'] = $data['parent_node_hashes'] ?? null;
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
     * Gets scope
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int|null $scope Indicates whether this Record's state is determined on a per-character or on an account-wide basis.
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets presentation_info
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock|null
     */
    public function getPresentationInfo()
    {
        return $this->container['presentation_info'];
    }

    /**
     * Sets presentation_info
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock|null $presentation_info presentation_info
     *
     * @return self
     */
    public function setPresentationInfo($presentation_info)
    {
        $this->container['presentation_info'] = $presentation_info;

        return $this;
    }

    /**
     * Gets lore_hash
     *
     * @return int|null
     */
    public function getLoreHash()
    {
        return $this->container['lore_hash'];
    }

    /**
     * Sets lore_hash
     *
     * @param int|null $lore_hash lore_hash
     *
     * @return self
     */
    public function setLoreHash($lore_hash)
    {
        $this->container['lore_hash'] = $lore_hash;

        return $this;
    }

    /**
     * Gets objective_hashes
     *
     * @return int[]|null
     */
    public function getObjectiveHashes()
    {
        return $this->container['objective_hashes'];
    }

    /**
     * Sets objective_hashes
     *
     * @param int[]|null $objective_hashes objective_hashes
     *
     * @return self
     */
    public function setObjectiveHashes($objective_hashes)
    {
        $this->container['objective_hashes'] = $objective_hashes;

        return $this;
    }

    /**
     * Gets record_value_style
     *
     * @return int|null
     */
    public function getRecordValueStyle()
    {
        return $this->container['record_value_style'];
    }

    /**
     * Sets record_value_style
     *
     * @param int|null $record_value_style record_value_style
     *
     * @return self
     */
    public function setRecordValueStyle($record_value_style)
    {
        $this->container['record_value_style'] = $record_value_style;

        return $this;
    }

    /**
     * Gets title_info
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock|null
     */
    public function getTitleInfo()
    {
        return $this->container['title_info'];
    }

    /**
     * Sets title_info
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock|null $title_info title_info
     *
     * @return self
     */
    public function setTitleInfo($title_info)
    {
        $this->container['title_info'] = $title_info;

        return $this;
    }

    /**
     * Gets completion_info
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock|null
     */
    public function getCompletionInfo()
    {
        return $this->container['completion_info'];
    }

    /**
     * Sets completion_info
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock|null $completion_info completion_info
     *
     * @return self
     */
    public function setCompletionInfo($completion_info)
    {
        $this->container['completion_info'] = $completion_info;

        return $this;
    }

    /**
     * Gets state_info
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock|null
     */
    public function getStateInfo()
    {
        return $this->container['state_info'];
    }

    /**
     * Sets state_info
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock|null $state_info state_info
     *
     * @return self
     */
    public function setStateInfo($state_info)
    {
        $this->container['state_info'] = $state_info;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock|null $requirements requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets expiration_info
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordExpirationBlock|null
     */
    public function getExpirationInfo()
    {
        return $this->container['expiration_info'];
    }

    /**
     * Sets expiration_info
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordExpirationBlock|null $expiration_info expiration_info
     *
     * @return self
     */
    public function setExpirationInfo($expiration_info)
    {
        $this->container['expiration_info'] = $expiration_info;

        return $this;
    }

    /**
     * Gets interval_info
     *
     * @return DestinyDefinitionsRecordsDestinyRecordIntervalBlock|null
     */
    public function getIntervalInfo()
    {
        return $this->container['interval_info'];
    }

    /**
     * Sets interval_info
     *
     * @param DestinyDefinitionsRecordsDestinyRecordIntervalBlock|null $interval_info Some records have multiple 'interval' objectives, and the record may be claimed at each completed interval
     *
     * @return self
     */
    public function setIntervalInfo($interval_info)
    {
        $this->container['interval_info'] = $interval_info;

        return $this;
    }

    /**
     * Gets reward_items
     *
     * @return \OpenAPI\Client\Model\DestinyDestinyItemQuantity[]|null
     */
    public function getRewardItems()
    {
        return $this->container['reward_items'];
    }

    /**
     * Sets reward_items
     *
     * @param \OpenAPI\Client\Model\DestinyDestinyItemQuantity[]|null $reward_items If there is any publicly available information about rewards earned for achieving this record, this is the list of those items.   However, note that some records intentionally have \"hidden\" rewards. These will not be returned in this list.
     *
     * @return self
     */
    public function setRewardItems($reward_items)
    {
        $this->container['reward_items'] = $reward_items;

        return $this;
    }

    /**
     * Gets presentation_node_type
     *
     * @return int|null
     */
    public function getPresentationNodeType()
    {
        return $this->container['presentation_node_type'];
    }

    /**
     * Sets presentation_node_type
     *
     * @param int|null $presentation_node_type presentation_node_type
     *
     * @return self
     */
    public function setPresentationNodeType($presentation_node_type)
    {
        $this->container['presentation_node_type'] = $presentation_node_type;

        return $this;
    }

    /**
     * Gets trait_ids
     *
     * @return string[]|null
     */
    public function getTraitIds()
    {
        return $this->container['trait_ids'];
    }

    /**
     * Sets trait_ids
     *
     * @param string[]|null $trait_ids trait_ids
     *
     * @return self
     */
    public function setTraitIds($trait_ids)
    {
        $this->container['trait_ids'] = $trait_ids;

        return $this;
    }

    /**
     * Gets trait_hashes
     *
     * @return int[]|null
     */
    public function getTraitHashes()
    {
        return $this->container['trait_hashes'];
    }

    /**
     * Sets trait_hashes
     *
     * @param int[]|null $trait_hashes trait_hashes
     *
     * @return self
     */
    public function setTraitHashes($trait_hashes)
    {
        $this->container['trait_hashes'] = $trait_hashes;

        return $this;
    }

    /**
     * Gets parent_node_hashes
     *
     * @return int[]|null
     */
    public function getParentNodeHashes()
    {
        return $this->container['parent_node_hashes'];
    }

    /**
     * Sets parent_node_hashes
     *
     * @param int[]|null $parent_node_hashes A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents.
     *
     * @return self
     */
    public function setParentNodeHashes($parent_node_hashes)
    {
        $this->container['parent_node_hashes'] = $parent_node_hashes;

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


