<?php
/**
 * DestinyDefinitionsChecklistsDestinyChecklistEntryDefinition
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
 * DestinyDefinitionsChecklistsDestinyChecklistEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description The properties of an individual checklist item. Note that almost everything is optional: it is *highly* variable what kind of data we&#39;ll actually be able to return: at times we may have no other relationships to entities at all.  Whatever UI you build, do it with the knowledge that any given entry might not actually be able to be associated with some other Destiny entity.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsChecklistsDestinyChecklistEntryDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Checklists.DestinyChecklistEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash' => 'int',
        'display_properties' => 'DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'destination_hash' => 'int',
        'location_hash' => 'int',
        'bubble_hash' => 'int',
        'activity_hash' => 'int',
        'item_hash' => 'int',
        'vendor_hash' => 'int',
        'vendor_interaction_index' => 'int',
        'scope' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hash' => 'uint32',
        'display_properties' => null,
        'destination_hash' => 'uint32',
        'location_hash' => 'uint32',
        'bubble_hash' => 'uint32',
        'activity_hash' => 'uint32',
        'item_hash' => 'uint32',
        'vendor_hash' => 'uint32',
        'vendor_interaction_index' => 'int32',
        'scope' => 'int32'
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
        'hash' => 'hash',
        'display_properties' => 'displayProperties',
        'destination_hash' => 'destinationHash',
        'location_hash' => 'locationHash',
        'bubble_hash' => 'bubbleHash',
        'activity_hash' => 'activityHash',
        'item_hash' => 'itemHash',
        'vendor_hash' => 'vendorHash',
        'vendor_interaction_index' => 'vendorInteractionIndex',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'display_properties' => 'setDisplayProperties',
        'destination_hash' => 'setDestinationHash',
        'location_hash' => 'setLocationHash',
        'bubble_hash' => 'setBubbleHash',
        'activity_hash' => 'setActivityHash',
        'item_hash' => 'setItemHash',
        'vendor_hash' => 'setVendorHash',
        'vendor_interaction_index' => 'setVendorInteractionIndex',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'display_properties' => 'getDisplayProperties',
        'destination_hash' => 'getDestinationHash',
        'location_hash' => 'getLocationHash',
        'bubble_hash' => 'getBubbleHash',
        'activity_hash' => 'getActivityHash',
        'item_hash' => 'getItemHash',
        'vendor_hash' => 'getVendorHash',
        'vendor_interaction_index' => 'getVendorInteractionIndex',
        'scope' => 'getScope'
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
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['display_properties'] = $data['display_properties'] ?? null;
        $this->container['destination_hash'] = $data['destination_hash'] ?? null;
        $this->container['location_hash'] = $data['location_hash'] ?? null;
        $this->container['bubble_hash'] = $data['bubble_hash'] ?? null;
        $this->container['activity_hash'] = $data['activity_hash'] ?? null;
        $this->container['item_hash'] = $data['item_hash'] ?? null;
        $this->container['vendor_hash'] = $data['vendor_hash'] ?? null;
        $this->container['vendor_interaction_index'] = $data['vendor_interaction_index'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
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
     * @param int|null $hash The identifier for this Checklist entry. Guaranteed unique only within this Checklist Definition, and not globally/for all checklists.
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
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
     * @param DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $display_properties Even if no other associations exist, we will give you *something* for display properties. In cases where we have no associated entities, it may be as simple as a numerical identifier.
     *
     * @return self
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

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
     * @param int|null $destination_hash destination_hash
     *
     * @return self
     */
    public function setDestinationHash($destination_hash)
    {
        $this->container['destination_hash'] = $destination_hash;

        return $this;
    }

    /**
     * Gets location_hash
     *
     * @return int|null
     */
    public function getLocationHash()
    {
        return $this->container['location_hash'];
    }

    /**
     * Sets location_hash
     *
     * @param int|null $location_hash location_hash
     *
     * @return self
     */
    public function setLocationHash($location_hash)
    {
        $this->container['location_hash'] = $location_hash;

        return $this;
    }

    /**
     * Gets bubble_hash
     *
     * @return int|null
     */
    public function getBubbleHash()
    {
        return $this->container['bubble_hash'];
    }

    /**
     * Sets bubble_hash
     *
     * @param int|null $bubble_hash Note that a Bubble's hash doesn't uniquely identify a \"top level\" entity in Destiny. Only the combination of location and bubble can uniquely identify a place in the world of Destiny: so if bubbleHash is populated, locationHash must too be populated for it to have any meaning.  You can use this property if it is populated to look up the DestinyLocationDefinition's associated .locationReleases[].activityBubbleName property.
     *
     * @return self
     */
    public function setBubbleHash($bubble_hash)
    {
        $this->container['bubble_hash'] = $bubble_hash;

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
     * @param int|null $activity_hash activity_hash
     *
     * @return self
     */
    public function setActivityHash($activity_hash)
    {
        $this->container['activity_hash'] = $activity_hash;

        return $this;
    }

    /**
     * Gets item_hash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['item_hash'];
    }

    /**
     * Sets item_hash
     *
     * @param int|null $item_hash item_hash
     *
     * @return self
     */
    public function setItemHash($item_hash)
    {
        $this->container['item_hash'] = $item_hash;

        return $this;
    }

    /**
     * Gets vendor_hash
     *
     * @return int|null
     */
    public function getVendorHash()
    {
        return $this->container['vendor_hash'];
    }

    /**
     * Sets vendor_hash
     *
     * @param int|null $vendor_hash vendor_hash
     *
     * @return self
     */
    public function setVendorHash($vendor_hash)
    {
        $this->container['vendor_hash'] = $vendor_hash;

        return $this;
    }

    /**
     * Gets vendor_interaction_index
     *
     * @return int|null
     */
    public function getVendorInteractionIndex()
    {
        return $this->container['vendor_interaction_index'];
    }

    /**
     * Sets vendor_interaction_index
     *
     * @param int|null $vendor_interaction_index vendor_interaction_index
     *
     * @return self
     */
    public function setVendorInteractionIndex($vendor_interaction_index)
    {
        $this->container['vendor_interaction_index'] = $vendor_interaction_index;

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
     * @param int|null $scope The scope at which this specific entry can be computed.
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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


