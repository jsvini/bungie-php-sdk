<?php
/**
 * GroupsV2GroupOptionsEditAction
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
 * GroupsV2GroupOptionsEditAction Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GroupsV2GroupOptionsEditAction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupOptionsEditAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invite_permission_override' => 'bool',
        'update_culture_permission_override' => 'bool',
        'host_guided_game_permission_override' => 'int',
        'update_banner_permission_override' => 'bool',
        'join_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invite_permission_override' => null,
        'update_culture_permission_override' => null,
        'host_guided_game_permission_override' => 'int32',
        'update_banner_permission_override' => null,
        'join_level' => 'int32'
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
        'invite_permission_override' => 'InvitePermissionOverride',
        'update_culture_permission_override' => 'UpdateCulturePermissionOverride',
        'host_guided_game_permission_override' => 'HostGuidedGamePermissionOverride',
        'update_banner_permission_override' => 'UpdateBannerPermissionOverride',
        'join_level' => 'JoinLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invite_permission_override' => 'setInvitePermissionOverride',
        'update_culture_permission_override' => 'setUpdateCulturePermissionOverride',
        'host_guided_game_permission_override' => 'setHostGuidedGamePermissionOverride',
        'update_banner_permission_override' => 'setUpdateBannerPermissionOverride',
        'join_level' => 'setJoinLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invite_permission_override' => 'getInvitePermissionOverride',
        'update_culture_permission_override' => 'getUpdateCulturePermissionOverride',
        'host_guided_game_permission_override' => 'getHostGuidedGamePermissionOverride',
        'update_banner_permission_override' => 'getUpdateBannerPermissionOverride',
        'join_level' => 'getJoinLevel'
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

    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_0 = 0;
    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_1 = 1;
    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_2 = 2;
    const JOIN_LEVEL_0 = 0;
    const JOIN_LEVEL_1 = 1;
    const JOIN_LEVEL_2 = 2;
    const JOIN_LEVEL_3 = 3;
    const JOIN_LEVEL_4 = 4;
    const JOIN_LEVEL_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHostGuidedGamePermissionOverrideAllowableValues()
    {
        return [
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_0,
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_1,
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJoinLevelAllowableValues()
    {
        return [
            self::JOIN_LEVEL_0,
            self::JOIN_LEVEL_1,
            self::JOIN_LEVEL_2,
            self::JOIN_LEVEL_3,
            self::JOIN_LEVEL_4,
            self::JOIN_LEVEL_5,
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
        $this->container['invite_permission_override'] = $data['invite_permission_override'] ?? null;
        $this->container['update_culture_permission_override'] = $data['update_culture_permission_override'] ?? null;
        $this->container['host_guided_game_permission_override'] = $data['host_guided_game_permission_override'] ?? null;
        $this->container['update_banner_permission_override'] = $data['update_banner_permission_override'] ?? null;
        $this->container['join_level'] = $data['join_level'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHostGuidedGamePermissionOverrideAllowableValues();
        if (!is_null($this->container['host_guided_game_permission_override']) && !in_array($this->container['host_guided_game_permission_override'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'host_guided_game_permission_override', must be one of '%s'",
                $this->container['host_guided_game_permission_override'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJoinLevelAllowableValues();
        if (!is_null($this->container['join_level']) && !in_array($this->container['join_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'join_level', must be one of '%s'",
                $this->container['join_level'],
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
     * Gets invite_permission_override
     *
     * @return bool|null
     */
    public function getInvitePermissionOverride()
    {
        return $this->container['invite_permission_override'];
    }

    /**
     * Sets invite_permission_override
     *
     * @param bool|null $invite_permission_override Minimum Member Level allowed to invite new members to group  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return self
     */
    public function setInvitePermissionOverride($invite_permission_override)
    {
        $this->container['invite_permission_override'] = $invite_permission_override;

        return $this;
    }

    /**
     * Gets update_culture_permission_override
     *
     * @return bool|null
     */
    public function getUpdateCulturePermissionOverride()
    {
        return $this->container['update_culture_permission_override'];
    }

    /**
     * Sets update_culture_permission_override
     *
     * @param bool|null $update_culture_permission_override Minimum Member Level allowed to update group culture  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return self
     */
    public function setUpdateCulturePermissionOverride($update_culture_permission_override)
    {
        $this->container['update_culture_permission_override'] = $update_culture_permission_override;

        return $this;
    }

    /**
     * Gets host_guided_game_permission_override
     *
     * @return int|null
     */
    public function getHostGuidedGamePermissionOverride()
    {
        return $this->container['host_guided_game_permission_override'];
    }

    /**
     * Sets host_guided_game_permission_override
     *
     * @param int|null $host_guided_game_permission_override Minimum Member Level allowed to host guided games  Always Allowed: Founder, Acting Founder, Admin  Allowed Overrides: None, Member, Beginner  Default is Member for clans, None for groups, although this means nothing for groups.
     *
     * @return self
     */
    public function setHostGuidedGamePermissionOverride($host_guided_game_permission_override)
    {
        $allowedValues = $this->getHostGuidedGamePermissionOverrideAllowableValues();
        if (!is_null($host_guided_game_permission_override) && !in_array($host_guided_game_permission_override, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'host_guided_game_permission_override', must be one of '%s'",
                    $host_guided_game_permission_override,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['host_guided_game_permission_override'] = $host_guided_game_permission_override;

        return $this;
    }

    /**
     * Gets update_banner_permission_override
     *
     * @return bool|null
     */
    public function getUpdateBannerPermissionOverride()
    {
        return $this->container['update_banner_permission_override'];
    }

    /**
     * Sets update_banner_permission_override
     *
     * @param bool|null $update_banner_permission_override Minimum Member Level allowed to update banner  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return self
     */
    public function setUpdateBannerPermissionOverride($update_banner_permission_override)
    {
        $this->container['update_banner_permission_override'] = $update_banner_permission_override;

        return $this;
    }

    /**
     * Gets join_level
     *
     * @return int|null
     */
    public function getJoinLevel()
    {
        return $this->container['join_level'];
    }

    /**
     * Sets join_level
     *
     * @param int|null $join_level Level to join a member at when accepting an invite, application, or joining an open clan  Default is Beginner.
     *
     * @return self
     */
    public function setJoinLevel($join_level)
    {
        $allowedValues = $this->getJoinLevelAllowableValues();
        if (!is_null($join_level) && !in_array($join_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'join_level', must be one of '%s'",
                    $join_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['join_level'] = $join_level;

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


