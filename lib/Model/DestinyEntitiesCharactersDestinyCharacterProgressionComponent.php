<?php
/**
 * DestinyEntitiesCharactersDestinyCharacterProgressionComponent
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
 * DestinyEntitiesCharactersDestinyCharacterProgressionComponent Class Doc Comment
 *
 * @category Class
 * @description This component returns anything that could be considered \&quot;Progression\&quot; on a user: data where the user is gaining levels, reputation, completions, rewards, etc...
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyEntitiesCharactersDestinyCharacterProgressionComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Characters.DestinyCharacterProgressionComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'progressions' => 'map[string,\OpenAPI\Client\Model\DestinyDestinyProgression]',
        'factions' => 'map[string,\OpenAPI\Client\Model\DestinyProgressionDestinyFactionProgression]',
        'milestones' => 'map[string,\OpenAPI\Client\Model\DestinyMilestonesDestinyMilestone]',
        'quests' => '\OpenAPI\Client\Model\DestinyQuestsDestinyQuestStatus[]',
        'uninstanced_item_objectives' => 'map[string,\OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]]',
        'checklists' => 'map[string,map[string,bool]]',
        'seasonal_artifact' => 'DestinyArtifactsDestinyArtifactCharacterScoped'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'progressions' => null,
        'factions' => null,
        'milestones' => null,
        'quests' => null,
        'uninstanced_item_objectives' => null,
        'checklists' => null,
        'seasonal_artifact' => null
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
        'progressions' => 'progressions',
        'factions' => 'factions',
        'milestones' => 'milestones',
        'quests' => 'quests',
        'uninstanced_item_objectives' => 'uninstancedItemObjectives',
        'checklists' => 'checklists',
        'seasonal_artifact' => 'seasonalArtifact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'progressions' => 'setProgressions',
        'factions' => 'setFactions',
        'milestones' => 'setMilestones',
        'quests' => 'setQuests',
        'uninstanced_item_objectives' => 'setUninstancedItemObjectives',
        'checklists' => 'setChecklists',
        'seasonal_artifact' => 'setSeasonalArtifact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'progressions' => 'getProgressions',
        'factions' => 'getFactions',
        'milestones' => 'getMilestones',
        'quests' => 'getQuests',
        'uninstanced_item_objectives' => 'getUninstancedItemObjectives',
        'checklists' => 'getChecklists',
        'seasonal_artifact' => 'getSeasonalArtifact'
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
        $this->container['progressions'] = $data['progressions'] ?? null;
        $this->container['factions'] = $data['factions'] ?? null;
        $this->container['milestones'] = $data['milestones'] ?? null;
        $this->container['quests'] = $data['quests'] ?? null;
        $this->container['uninstanced_item_objectives'] = $data['uninstanced_item_objectives'] ?? null;
        $this->container['checklists'] = $data['checklists'] ?? null;
        $this->container['seasonal_artifact'] = $data['seasonal_artifact'] ?? null;
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
     * Gets progressions
     *
     * @return map[string,\OpenAPI\Client\Model\DestinyDestinyProgression]|null
     */
    public function getProgressions()
    {
        return $this->container['progressions'];
    }

    /**
     * Sets progressions
     *
     * @param map[string,\OpenAPI\Client\Model\DestinyDestinyProgression]|null $progressions A Dictionary of all known progressions for the Character, keyed by the Progression's hash.  Not all progressions have user-facing data, but those who do will have that data contained in the DestinyProgressionDefinition.
     *
     * @return self
     */
    public function setProgressions($progressions)
    {
        $this->container['progressions'] = $progressions;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return map[string,\OpenAPI\Client\Model\DestinyProgressionDestinyFactionProgression]|null
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param map[string,\OpenAPI\Client\Model\DestinyProgressionDestinyFactionProgression]|null $factions A dictionary of all known Factions, keyed by the Faction's hash. It contains data about this character's status with the faction.
     *
     * @return self
     */
    public function setFactions($factions)
    {
        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets milestones
     *
     * @return map[string,\OpenAPI\Client\Model\DestinyMilestonesDestinyMilestone]|null
     */
    public function getMilestones()
    {
        return $this->container['milestones'];
    }

    /**
     * Sets milestones
     *
     * @param map[string,\OpenAPI\Client\Model\DestinyMilestonesDestinyMilestone]|null $milestones Milestones are related to the simple progressions shown in the game, but return additional and hopefully helpful information for users about the specifics of the Milestone's status.
     *
     * @return self
     */
    public function setMilestones($milestones)
    {
        $this->container['milestones'] = $milestones;

        return $this;
    }

    /**
     * Gets quests
     *
     * @return \OpenAPI\Client\Model\DestinyQuestsDestinyQuestStatus[]|null
     */
    public function getQuests()
    {
        return $this->container['quests'];
    }

    /**
     * Sets quests
     *
     * @param \OpenAPI\Client\Model\DestinyQuestsDestinyQuestStatus[]|null $quests If the user has any active quests, the quests' statuses will be returned here.   Note that quests have been largely supplanted by Milestones, but that doesn't mean that they won't make a comeback independent of milestones at some point.   (Fun fact: quests came back as I feared they would, but we never looped back to populate this... I'm going to put that in the backlog.)
     *
     * @return self
     */
    public function setQuests($quests)
    {
        $this->container['quests'] = $quests;

        return $this;
    }

    /**
     * Gets uninstanced_item_objectives
     *
     * @return map[string,\OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]]|null
     */
    public function getUninstancedItemObjectives()
    {
        return $this->container['uninstanced_item_objectives'];
    }

    /**
     * Sets uninstanced_item_objectives
     *
     * @param map[string,\OpenAPI\Client\Model\DestinyQuestsDestinyObjectiveProgress[]]|null $uninstanced_item_objectives Sometimes, you have items in your inventory that don't have instances, but still have Objective information. This provides you that objective information for uninstanced items.   This dictionary is keyed by the item's hash: which you can use to look up the name and description for the overall task(s) implied by the objective. The value is the list of objectives for this item, and their statuses.
     *
     * @return self
     */
    public function setUninstancedItemObjectives($uninstanced_item_objectives)
    {
        $this->container['uninstanced_item_objectives'] = $uninstanced_item_objectives;

        return $this;
    }

    /**
     * Gets checklists
     *
     * @return map[string,map[string,bool]]|null
     */
    public function getChecklists()
    {
        return $this->container['checklists'];
    }

    /**
     * Sets checklists
     *
     * @param map[string,map[string,bool]]|null $checklists The set of checklists that can be examined for this specific character, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)  For each checklist returned, its value is itself a Dictionary keyed by the checklist's hash identifier with the value being a boolean indicating if it's been discovered yet.
     *
     * @return self
     */
    public function setChecklists($checklists)
    {
        $this->container['checklists'] = $checklists;

        return $this;
    }

    /**
     * Gets seasonal_artifact
     *
     * @return DestinyArtifactsDestinyArtifactCharacterScoped|null
     */
    public function getSeasonalArtifact()
    {
        return $this->container['seasonal_artifact'];
    }

    /**
     * Sets seasonal_artifact
     *
     * @param DestinyArtifactsDestinyArtifactCharacterScoped|null $seasonal_artifact Data related to your progress on the current season's artifact that can vary per character.
     *
     * @return self
     */
    public function setSeasonalArtifact($seasonal_artifact)
    {
        $this->container['seasonal_artifact'] = $seasonal_artifact;

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

