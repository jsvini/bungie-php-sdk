<?php
/**
 * UserHardLinkedUserMembership
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
 * UserHardLinkedUserMembership Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UserHardLinkedUserMembership implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.HardLinkedUserMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membership_type' => 'int',
        'membership_id' => 'int',
        'cross_save_overridden_type' => 'int',
        'cross_save_overridden_membership_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'membership_type' => 'int32',
        'membership_id' => 'int64',
        'cross_save_overridden_type' => 'int32',
        'cross_save_overridden_membership_id' => 'int64'
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
        'membership_type' => 'membershipType',
        'membership_id' => 'membershipId',
        'cross_save_overridden_type' => 'CrossSaveOverriddenType',
        'cross_save_overridden_membership_id' => 'CrossSaveOverriddenMembershipId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membership_type' => 'setMembershipType',
        'membership_id' => 'setMembershipId',
        'cross_save_overridden_type' => 'setCrossSaveOverriddenType',
        'cross_save_overridden_membership_id' => 'setCrossSaveOverriddenMembershipId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membership_type' => 'getMembershipType',
        'membership_id' => 'getMembershipId',
        'cross_save_overridden_type' => 'getCrossSaveOverriddenType',
        'cross_save_overridden_membership_id' => 'getCrossSaveOverriddenMembershipId'
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
        $this->container['membership_type'] = $data['membership_type'] ?? null;
        $this->container['membership_id'] = $data['membership_id'] ?? null;
        $this->container['cross_save_overridden_type'] = $data['cross_save_overridden_type'] ?? null;
        $this->container['cross_save_overridden_membership_id'] = $data['cross_save_overridden_membership_id'] ?? null;
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
     * Gets membership_type
     *
     * @return int|null
     */
    public function getMembershipType()
    {
        return $this->container['membership_type'];
    }

    /**
     * Sets membership_type
     *
     * @param int|null $membership_type membership_type
     *
     * @return self
     */
    public function setMembershipType($membership_type)
    {
        $this->container['membership_type'] = $membership_type;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return int|null
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param int|null $membership_id membership_id
     *
     * @return self
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets cross_save_overridden_type
     *
     * @return int|null
     */
    public function getCrossSaveOverriddenType()
    {
        return $this->container['cross_save_overridden_type'];
    }

    /**
     * Sets cross_save_overridden_type
     *
     * @param int|null $cross_save_overridden_type cross_save_overridden_type
     *
     * @return self
     */
    public function setCrossSaveOverriddenType($cross_save_overridden_type)
    {
        $this->container['cross_save_overridden_type'] = $cross_save_overridden_type;

        return $this;
    }

    /**
     * Gets cross_save_overridden_membership_id
     *
     * @return int|null
     */
    public function getCrossSaveOverriddenMembershipId()
    {
        return $this->container['cross_save_overridden_membership_id'];
    }

    /**
     * Sets cross_save_overridden_membership_id
     *
     * @param int|null $cross_save_overridden_membership_id cross_save_overridden_membership_id
     *
     * @return self
     */
    public function setCrossSaveOverriddenMembershipId($cross_save_overridden_membership_id)
    {
        $this->container['cross_save_overridden_membership_id'] = $cross_save_overridden_membership_id;

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


