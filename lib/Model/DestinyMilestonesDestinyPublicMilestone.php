<?php
/**
 * DestinyMilestonesDestinyPublicMilestone
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
 * DestinyMilestonesDestinyPublicMilestone Class Doc Comment
 *
 * @category Class
 * @description Information about milestones, presented in a character state-agnostic manner. Combine this data with DestinyMilestoneDefinition to get a full picture of the milestone, which is basically a checklist of things to do in the game. Think of this as GetPublicAdvisors 3.0, for those who used the Destiny 1 API.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyMilestonesDestinyPublicMilestone implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyPublicMilestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'milestone_hash' => 'int',
        'available_quests' => '\OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneQuest[]',
        'activities' => '\OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneChallengeActivity[]',
        'vendor_hashes' => 'int[]',
        'vendors' => '\OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneVendor[]',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'milestone_hash' => 'uint32',
        'available_quests' => null,
        'activities' => null,
        'vendor_hashes' => 'uint32',
        'vendors' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'order' => 'int32'
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
        'milestone_hash' => 'milestoneHash',
        'available_quests' => 'availableQuests',
        'activities' => 'activities',
        'vendor_hashes' => 'vendorHashes',
        'vendors' => 'vendors',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'milestone_hash' => 'setMilestoneHash',
        'available_quests' => 'setAvailableQuests',
        'activities' => 'setActivities',
        'vendor_hashes' => 'setVendorHashes',
        'vendors' => 'setVendors',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'milestone_hash' => 'getMilestoneHash',
        'available_quests' => 'getAvailableQuests',
        'activities' => 'getActivities',
        'vendor_hashes' => 'getVendorHashes',
        'vendors' => 'getVendors',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'order' => 'getOrder'
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
        $this->container['milestone_hash'] = $data['milestone_hash'] ?? null;
        $this->container['available_quests'] = $data['available_quests'] ?? null;
        $this->container['activities'] = $data['activities'] ?? null;
        $this->container['vendor_hashes'] = $data['vendor_hashes'] ?? null;
        $this->container['vendors'] = $data['vendors'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
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
     * Gets milestone_hash
     *
     * @return int|null
     */
    public function getMilestoneHash()
    {
        return $this->container['milestone_hash'];
    }

    /**
     * Sets milestone_hash
     *
     * @param int|null $milestone_hash The hash identifier for the milestone. Use it to look up the DestinyMilestoneDefinition for static data about the Milestone.
     *
     * @return self
     */
    public function setMilestoneHash($milestone_hash)
    {
        $this->container['milestone_hash'] = $milestone_hash;

        return $this;
    }

    /**
     * Gets available_quests
     *
     * @return \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneQuest[]|null
     */
    public function getAvailableQuests()
    {
        return $this->container['available_quests'];
    }

    /**
     * Sets available_quests
     *
     * @param \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneQuest[]|null $available_quests A milestone not need have even a single quest, but if there are active quests they will be returned here.
     *
     * @return self
     */
    public function setAvailableQuests($available_quests)
    {
        $this->container['available_quests'] = $available_quests;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneChallengeActivity[]|null
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneChallengeActivity[]|null $activities activities
     *
     * @return self
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets vendor_hashes
     *
     * @return int[]|null
     */
    public function getVendorHashes()
    {
        return $this->container['vendor_hashes'];
    }

    /**
     * Sets vendor_hashes
     *
     * @param int[]|null $vendor_hashes Sometimes milestones - or activities active in milestones - will have relevant vendors. These are the vendors that are currently relevant.  Deprecated, already, for the sake of the new \"vendors\" property that has more data. What was I thinking.
     *
     * @return self
     */
    public function setVendorHashes($vendor_hashes)
    {
        $this->container['vendor_hashes'] = $vendor_hashes;

        return $this;
    }

    /**
     * Gets vendors
     *
     * @return \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneVendor[]|null
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \OpenAPI\Client\Model\DestinyMilestonesDestinyPublicMilestoneVendor[]|null $vendors This is why we can't have nice things. This is the ordered list of vendors to be shown that relate to this milestone, potentially along with other interesting data.
     *
     * @return self
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date If known, this is the date when the Milestone started/became active.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date If known, this is the date when the Milestone will expire/recycle/end.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information.
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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

