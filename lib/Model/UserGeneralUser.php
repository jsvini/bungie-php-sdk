<?php
/**
 * UserGeneralUser
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
 * UserGeneralUser Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UserGeneralUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.GeneralUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membership_id' => 'int',
        'unique_name' => 'string',
        'normalized_name' => 'string',
        'display_name' => 'string',
        'profile_picture' => 'int',
        'profile_theme' => 'int',
        'user_title' => 'int',
        'success_message_flags' => 'int',
        'is_deleted' => 'bool',
        'about' => 'string',
        'first_access' => '\DateTime',
        'last_update' => '\DateTime',
        'legacy_portal_uid' => 'int',
        'context' => '\OpenAPI\Client\Model\UserUserToUserContext',
        'psn_display_name' => 'string',
        'xbox_display_name' => 'string',
        'fb_display_name' => 'string',
        'show_activity' => 'bool',
        'locale' => 'string',
        'locale_inherit_default' => 'bool',
        'last_ban_report_id' => 'int',
        'show_group_messaging' => 'bool',
        'profile_picture_path' => 'string',
        'profile_picture_wide_path' => 'string',
        'profile_theme_name' => 'string',
        'user_title_display' => 'string',
        'status_text' => 'string',
        'status_date' => '\DateTime',
        'profile_ban_expire' => '\DateTime',
        'blizzard_display_name' => 'string',
        'steam_display_name' => 'string',
        'stadia_display_name' => 'string',
        'twitch_display_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'membership_id' => 'int64',
        'unique_name' => null,
        'normalized_name' => null,
        'display_name' => null,
        'profile_picture' => 'int32',
        'profile_theme' => 'int32',
        'user_title' => 'int32',
        'success_message_flags' => 'int64',
        'is_deleted' => null,
        'about' => null,
        'first_access' => 'date-time',
        'last_update' => 'date-time',
        'legacy_portal_uid' => 'int64',
        'context' => null,
        'psn_display_name' => null,
        'xbox_display_name' => null,
        'fb_display_name' => null,
        'show_activity' => null,
        'locale' => null,
        'locale_inherit_default' => null,
        'last_ban_report_id' => 'int64',
        'show_group_messaging' => null,
        'profile_picture_path' => null,
        'profile_picture_wide_path' => null,
        'profile_theme_name' => null,
        'user_title_display' => null,
        'status_text' => null,
        'status_date' => 'date-time',
        'profile_ban_expire' => 'date-time',
        'blizzard_display_name' => null,
        'steam_display_name' => null,
        'stadia_display_name' => null,
        'twitch_display_name' => null
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
        'membership_id' => 'membershipId',
        'unique_name' => 'uniqueName',
        'normalized_name' => 'normalizedName',
        'display_name' => 'displayName',
        'profile_picture' => 'profilePicture',
        'profile_theme' => 'profileTheme',
        'user_title' => 'userTitle',
        'success_message_flags' => 'successMessageFlags',
        'is_deleted' => 'isDeleted',
        'about' => 'about',
        'first_access' => 'firstAccess',
        'last_update' => 'lastUpdate',
        'legacy_portal_uid' => 'legacyPortalUID',
        'context' => 'context',
        'psn_display_name' => 'psnDisplayName',
        'xbox_display_name' => 'xboxDisplayName',
        'fb_display_name' => 'fbDisplayName',
        'show_activity' => 'showActivity',
        'locale' => 'locale',
        'locale_inherit_default' => 'localeInheritDefault',
        'last_ban_report_id' => 'lastBanReportId',
        'show_group_messaging' => 'showGroupMessaging',
        'profile_picture_path' => 'profilePicturePath',
        'profile_picture_wide_path' => 'profilePictureWidePath',
        'profile_theme_name' => 'profileThemeName',
        'user_title_display' => 'userTitleDisplay',
        'status_text' => 'statusText',
        'status_date' => 'statusDate',
        'profile_ban_expire' => 'profileBanExpire',
        'blizzard_display_name' => 'blizzardDisplayName',
        'steam_display_name' => 'steamDisplayName',
        'stadia_display_name' => 'stadiaDisplayName',
        'twitch_display_name' => 'twitchDisplayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membership_id' => 'setMembershipId',
        'unique_name' => 'setUniqueName',
        'normalized_name' => 'setNormalizedName',
        'display_name' => 'setDisplayName',
        'profile_picture' => 'setProfilePicture',
        'profile_theme' => 'setProfileTheme',
        'user_title' => 'setUserTitle',
        'success_message_flags' => 'setSuccessMessageFlags',
        'is_deleted' => 'setIsDeleted',
        'about' => 'setAbout',
        'first_access' => 'setFirstAccess',
        'last_update' => 'setLastUpdate',
        'legacy_portal_uid' => 'setLegacyPortalUid',
        'context' => 'setContext',
        'psn_display_name' => 'setPsnDisplayName',
        'xbox_display_name' => 'setXboxDisplayName',
        'fb_display_name' => 'setFbDisplayName',
        'show_activity' => 'setShowActivity',
        'locale' => 'setLocale',
        'locale_inherit_default' => 'setLocaleInheritDefault',
        'last_ban_report_id' => 'setLastBanReportId',
        'show_group_messaging' => 'setShowGroupMessaging',
        'profile_picture_path' => 'setProfilePicturePath',
        'profile_picture_wide_path' => 'setProfilePictureWidePath',
        'profile_theme_name' => 'setProfileThemeName',
        'user_title_display' => 'setUserTitleDisplay',
        'status_text' => 'setStatusText',
        'status_date' => 'setStatusDate',
        'profile_ban_expire' => 'setProfileBanExpire',
        'blizzard_display_name' => 'setBlizzardDisplayName',
        'steam_display_name' => 'setSteamDisplayName',
        'stadia_display_name' => 'setStadiaDisplayName',
        'twitch_display_name' => 'setTwitchDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membership_id' => 'getMembershipId',
        'unique_name' => 'getUniqueName',
        'normalized_name' => 'getNormalizedName',
        'display_name' => 'getDisplayName',
        'profile_picture' => 'getProfilePicture',
        'profile_theme' => 'getProfileTheme',
        'user_title' => 'getUserTitle',
        'success_message_flags' => 'getSuccessMessageFlags',
        'is_deleted' => 'getIsDeleted',
        'about' => 'getAbout',
        'first_access' => 'getFirstAccess',
        'last_update' => 'getLastUpdate',
        'legacy_portal_uid' => 'getLegacyPortalUid',
        'context' => 'getContext',
        'psn_display_name' => 'getPsnDisplayName',
        'xbox_display_name' => 'getXboxDisplayName',
        'fb_display_name' => 'getFbDisplayName',
        'show_activity' => 'getShowActivity',
        'locale' => 'getLocale',
        'locale_inherit_default' => 'getLocaleInheritDefault',
        'last_ban_report_id' => 'getLastBanReportId',
        'show_group_messaging' => 'getShowGroupMessaging',
        'profile_picture_path' => 'getProfilePicturePath',
        'profile_picture_wide_path' => 'getProfilePictureWidePath',
        'profile_theme_name' => 'getProfileThemeName',
        'user_title_display' => 'getUserTitleDisplay',
        'status_text' => 'getStatusText',
        'status_date' => 'getStatusDate',
        'profile_ban_expire' => 'getProfileBanExpire',
        'blizzard_display_name' => 'getBlizzardDisplayName',
        'steam_display_name' => 'getSteamDisplayName',
        'stadia_display_name' => 'getStadiaDisplayName',
        'twitch_display_name' => 'getTwitchDisplayName'
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
        $this->container['membership_id'] = $data['membership_id'] ?? null;
        $this->container['unique_name'] = $data['unique_name'] ?? null;
        $this->container['normalized_name'] = $data['normalized_name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['profile_picture'] = $data['profile_picture'] ?? null;
        $this->container['profile_theme'] = $data['profile_theme'] ?? null;
        $this->container['user_title'] = $data['user_title'] ?? null;
        $this->container['success_message_flags'] = $data['success_message_flags'] ?? null;
        $this->container['is_deleted'] = $data['is_deleted'] ?? null;
        $this->container['about'] = $data['about'] ?? null;
        $this->container['first_access'] = $data['first_access'] ?? null;
        $this->container['last_update'] = $data['last_update'] ?? null;
        $this->container['legacy_portal_uid'] = $data['legacy_portal_uid'] ?? null;
        $this->container['context'] = $data['context'] ?? null;
        $this->container['psn_display_name'] = $data['psn_display_name'] ?? null;
        $this->container['xbox_display_name'] = $data['xbox_display_name'] ?? null;
        $this->container['fb_display_name'] = $data['fb_display_name'] ?? null;
        $this->container['show_activity'] = $data['show_activity'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['locale_inherit_default'] = $data['locale_inherit_default'] ?? null;
        $this->container['last_ban_report_id'] = $data['last_ban_report_id'] ?? null;
        $this->container['show_group_messaging'] = $data['show_group_messaging'] ?? null;
        $this->container['profile_picture_path'] = $data['profile_picture_path'] ?? null;
        $this->container['profile_picture_wide_path'] = $data['profile_picture_wide_path'] ?? null;
        $this->container['profile_theme_name'] = $data['profile_theme_name'] ?? null;
        $this->container['user_title_display'] = $data['user_title_display'] ?? null;
        $this->container['status_text'] = $data['status_text'] ?? null;
        $this->container['status_date'] = $data['status_date'] ?? null;
        $this->container['profile_ban_expire'] = $data['profile_ban_expire'] ?? null;
        $this->container['blizzard_display_name'] = $data['blizzard_display_name'] ?? null;
        $this->container['steam_display_name'] = $data['steam_display_name'] ?? null;
        $this->container['stadia_display_name'] = $data['stadia_display_name'] ?? null;
        $this->container['twitch_display_name'] = $data['twitch_display_name'] ?? null;
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
     * Gets unique_name
     *
     * @return string|null
     */
    public function getUniqueName()
    {
        return $this->container['unique_name'];
    }

    /**
     * Sets unique_name
     *
     * @param string|null $unique_name unique_name
     *
     * @return self
     */
    public function setUniqueName($unique_name)
    {
        $this->container['unique_name'] = $unique_name;

        return $this;
    }

    /**
     * Gets normalized_name
     *
     * @return string|null
     */
    public function getNormalizedName()
    {
        return $this->container['normalized_name'];
    }

    /**
     * Sets normalized_name
     *
     * @param string|null $normalized_name normalized_name
     *
     * @return self
     */
    public function setNormalizedName($normalized_name)
    {
        $this->container['normalized_name'] = $normalized_name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets profile_picture
     *
     * @return int|null
     */
    public function getProfilePicture()
    {
        return $this->container['profile_picture'];
    }

    /**
     * Sets profile_picture
     *
     * @param int|null $profile_picture profile_picture
     *
     * @return self
     */
    public function setProfilePicture($profile_picture)
    {
        $this->container['profile_picture'] = $profile_picture;

        return $this;
    }

    /**
     * Gets profile_theme
     *
     * @return int|null
     */
    public function getProfileTheme()
    {
        return $this->container['profile_theme'];
    }

    /**
     * Sets profile_theme
     *
     * @param int|null $profile_theme profile_theme
     *
     * @return self
     */
    public function setProfileTheme($profile_theme)
    {
        $this->container['profile_theme'] = $profile_theme;

        return $this;
    }

    /**
     * Gets user_title
     *
     * @return int|null
     */
    public function getUserTitle()
    {
        return $this->container['user_title'];
    }

    /**
     * Sets user_title
     *
     * @param int|null $user_title user_title
     *
     * @return self
     */
    public function setUserTitle($user_title)
    {
        $this->container['user_title'] = $user_title;

        return $this;
    }

    /**
     * Gets success_message_flags
     *
     * @return int|null
     */
    public function getSuccessMessageFlags()
    {
        return $this->container['success_message_flags'];
    }

    /**
     * Sets success_message_flags
     *
     * @param int|null $success_message_flags success_message_flags
     *
     * @return self
     */
    public function setSuccessMessageFlags($success_message_flags)
    {
        $this->container['success_message_flags'] = $success_message_flags;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets about
     *
     * @return string|null
     */
    public function getAbout()
    {
        return $this->container['about'];
    }

    /**
     * Sets about
     *
     * @param string|null $about about
     *
     * @return self
     */
    public function setAbout($about)
    {
        $this->container['about'] = $about;

        return $this;
    }

    /**
     * Gets first_access
     *
     * @return \DateTime|null
     */
    public function getFirstAccess()
    {
        return $this->container['first_access'];
    }

    /**
     * Sets first_access
     *
     * @param \DateTime|null $first_access first_access
     *
     * @return self
     */
    public function setFirstAccess($first_access)
    {
        $this->container['first_access'] = $first_access;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime|null $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets legacy_portal_uid
     *
     * @return int|null
     */
    public function getLegacyPortalUid()
    {
        return $this->container['legacy_portal_uid'];
    }

    /**
     * Sets legacy_portal_uid
     *
     * @param int|null $legacy_portal_uid legacy_portal_uid
     *
     * @return self
     */
    public function setLegacyPortalUid($legacy_portal_uid)
    {
        $this->container['legacy_portal_uid'] = $legacy_portal_uid;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \OpenAPI\Client\Model\UserUserToUserContext|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \OpenAPI\Client\Model\UserUserToUserContext|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets psn_display_name
     *
     * @return string|null
     */
    public function getPsnDisplayName()
    {
        return $this->container['psn_display_name'];
    }

    /**
     * Sets psn_display_name
     *
     * @param string|null $psn_display_name psn_display_name
     *
     * @return self
     */
    public function setPsnDisplayName($psn_display_name)
    {
        $this->container['psn_display_name'] = $psn_display_name;

        return $this;
    }

    /**
     * Gets xbox_display_name
     *
     * @return string|null
     */
    public function getXboxDisplayName()
    {
        return $this->container['xbox_display_name'];
    }

    /**
     * Sets xbox_display_name
     *
     * @param string|null $xbox_display_name xbox_display_name
     *
     * @return self
     */
    public function setXboxDisplayName($xbox_display_name)
    {
        $this->container['xbox_display_name'] = $xbox_display_name;

        return $this;
    }

    /**
     * Gets fb_display_name
     *
     * @return string|null
     */
    public function getFbDisplayName()
    {
        return $this->container['fb_display_name'];
    }

    /**
     * Sets fb_display_name
     *
     * @param string|null $fb_display_name fb_display_name
     *
     * @return self
     */
    public function setFbDisplayName($fb_display_name)
    {
        $this->container['fb_display_name'] = $fb_display_name;

        return $this;
    }

    /**
     * Gets show_activity
     *
     * @return bool|null
     */
    public function getShowActivity()
    {
        return $this->container['show_activity'];
    }

    /**
     * Sets show_activity
     *
     * @param bool|null $show_activity show_activity
     *
     * @return self
     */
    public function setShowActivity($show_activity)
    {
        $this->container['show_activity'] = $show_activity;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets locale_inherit_default
     *
     * @return bool|null
     */
    public function getLocaleInheritDefault()
    {
        return $this->container['locale_inherit_default'];
    }

    /**
     * Sets locale_inherit_default
     *
     * @param bool|null $locale_inherit_default locale_inherit_default
     *
     * @return self
     */
    public function setLocaleInheritDefault($locale_inherit_default)
    {
        $this->container['locale_inherit_default'] = $locale_inherit_default;

        return $this;
    }

    /**
     * Gets last_ban_report_id
     *
     * @return int|null
     */
    public function getLastBanReportId()
    {
        return $this->container['last_ban_report_id'];
    }

    /**
     * Sets last_ban_report_id
     *
     * @param int|null $last_ban_report_id last_ban_report_id
     *
     * @return self
     */
    public function setLastBanReportId($last_ban_report_id)
    {
        $this->container['last_ban_report_id'] = $last_ban_report_id;

        return $this;
    }

    /**
     * Gets show_group_messaging
     *
     * @return bool|null
     */
    public function getShowGroupMessaging()
    {
        return $this->container['show_group_messaging'];
    }

    /**
     * Sets show_group_messaging
     *
     * @param bool|null $show_group_messaging show_group_messaging
     *
     * @return self
     */
    public function setShowGroupMessaging($show_group_messaging)
    {
        $this->container['show_group_messaging'] = $show_group_messaging;

        return $this;
    }

    /**
     * Gets profile_picture_path
     *
     * @return string|null
     */
    public function getProfilePicturePath()
    {
        return $this->container['profile_picture_path'];
    }

    /**
     * Sets profile_picture_path
     *
     * @param string|null $profile_picture_path profile_picture_path
     *
     * @return self
     */
    public function setProfilePicturePath($profile_picture_path)
    {
        $this->container['profile_picture_path'] = $profile_picture_path;

        return $this;
    }

    /**
     * Gets profile_picture_wide_path
     *
     * @return string|null
     */
    public function getProfilePictureWidePath()
    {
        return $this->container['profile_picture_wide_path'];
    }

    /**
     * Sets profile_picture_wide_path
     *
     * @param string|null $profile_picture_wide_path profile_picture_wide_path
     *
     * @return self
     */
    public function setProfilePictureWidePath($profile_picture_wide_path)
    {
        $this->container['profile_picture_wide_path'] = $profile_picture_wide_path;

        return $this;
    }

    /**
     * Gets profile_theme_name
     *
     * @return string|null
     */
    public function getProfileThemeName()
    {
        return $this->container['profile_theme_name'];
    }

    /**
     * Sets profile_theme_name
     *
     * @param string|null $profile_theme_name profile_theme_name
     *
     * @return self
     */
    public function setProfileThemeName($profile_theme_name)
    {
        $this->container['profile_theme_name'] = $profile_theme_name;

        return $this;
    }

    /**
     * Gets user_title_display
     *
     * @return string|null
     */
    public function getUserTitleDisplay()
    {
        return $this->container['user_title_display'];
    }

    /**
     * Sets user_title_display
     *
     * @param string|null $user_title_display user_title_display
     *
     * @return self
     */
    public function setUserTitleDisplay($user_title_display)
    {
        $this->container['user_title_display'] = $user_title_display;

        return $this;
    }

    /**
     * Gets status_text
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     *
     * @param string|null $status_text status_text
     *
     * @return self
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets status_date
     *
     * @return \DateTime|null
     */
    public function getStatusDate()
    {
        return $this->container['status_date'];
    }

    /**
     * Sets status_date
     *
     * @param \DateTime|null $status_date status_date
     *
     * @return self
     */
    public function setStatusDate($status_date)
    {
        $this->container['status_date'] = $status_date;

        return $this;
    }

    /**
     * Gets profile_ban_expire
     *
     * @return \DateTime|null
     */
    public function getProfileBanExpire()
    {
        return $this->container['profile_ban_expire'];
    }

    /**
     * Sets profile_ban_expire
     *
     * @param \DateTime|null $profile_ban_expire profile_ban_expire
     *
     * @return self
     */
    public function setProfileBanExpire($profile_ban_expire)
    {
        $this->container['profile_ban_expire'] = $profile_ban_expire;

        return $this;
    }

    /**
     * Gets blizzard_display_name
     *
     * @return string|null
     */
    public function getBlizzardDisplayName()
    {
        return $this->container['blizzard_display_name'];
    }

    /**
     * Sets blizzard_display_name
     *
     * @param string|null $blizzard_display_name blizzard_display_name
     *
     * @return self
     */
    public function setBlizzardDisplayName($blizzard_display_name)
    {
        $this->container['blizzard_display_name'] = $blizzard_display_name;

        return $this;
    }

    /**
     * Gets steam_display_name
     *
     * @return string|null
     */
    public function getSteamDisplayName()
    {
        return $this->container['steam_display_name'];
    }

    /**
     * Sets steam_display_name
     *
     * @param string|null $steam_display_name steam_display_name
     *
     * @return self
     */
    public function setSteamDisplayName($steam_display_name)
    {
        $this->container['steam_display_name'] = $steam_display_name;

        return $this;
    }

    /**
     * Gets stadia_display_name
     *
     * @return string|null
     */
    public function getStadiaDisplayName()
    {
        return $this->container['stadia_display_name'];
    }

    /**
     * Sets stadia_display_name
     *
     * @param string|null $stadia_display_name stadia_display_name
     *
     * @return self
     */
    public function setStadiaDisplayName($stadia_display_name)
    {
        $this->container['stadia_display_name'] = $stadia_display_name;

        return $this;
    }

    /**
     * Gets twitch_display_name
     *
     * @return string|null
     */
    public function getTwitchDisplayName()
    {
        return $this->container['twitch_display_name'];
    }

    /**
     * Sets twitch_display_name
     *
     * @param string|null $twitch_display_name twitch_display_name
     *
     * @return self
     */
    public function setTwitchDisplayName($twitch_display_name)
    {
        $this->container['twitch_display_name'] = $twitch_display_name;

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


