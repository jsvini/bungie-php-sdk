<?php
/**
 * DestinyConfigDestinyManifest
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
 * DestinyConfigDestinyManifest Class Doc Comment
 *
 * @category Class
 * @description DestinyManifest is the external-facing contract for just the properties needed by those calling the Destiny Platform.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyConfigDestinyManifest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Config.DestinyManifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'mobile_asset_content_path' => 'string',
        'mobile_gear_asset_data_bases' => '\OpenAPI\Client\Model\DestinyConfigGearAssetDataBaseDefinition[]',
        'mobile_world_content_paths' => 'map[string,string]',
        'json_world_content_paths' => 'map[string,string]',
        'json_world_component_content_paths' => 'map[string,map[string,string]]',
        'mobile_clan_banner_database_path' => 'string',
        'mobile_gear_cdn' => 'map[string,string]',
        'icon_image_pyramid_info' => '\OpenAPI\Client\Model\DestinyConfigImagePyramidEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'version' => null,
        'mobile_asset_content_path' => null,
        'mobile_gear_asset_data_bases' => null,
        'mobile_world_content_paths' => null,
        'json_world_content_paths' => null,
        'json_world_component_content_paths' => null,
        'mobile_clan_banner_database_path' => null,
        'mobile_gear_cdn' => null,
        'icon_image_pyramid_info' => null
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
        'version' => 'version',
        'mobile_asset_content_path' => 'mobileAssetContentPath',
        'mobile_gear_asset_data_bases' => 'mobileGearAssetDataBases',
        'mobile_world_content_paths' => 'mobileWorldContentPaths',
        'json_world_content_paths' => 'jsonWorldContentPaths',
        'json_world_component_content_paths' => 'jsonWorldComponentContentPaths',
        'mobile_clan_banner_database_path' => 'mobileClanBannerDatabasePath',
        'mobile_gear_cdn' => 'mobileGearCDN',
        'icon_image_pyramid_info' => 'iconImagePyramidInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'mobile_asset_content_path' => 'setMobileAssetContentPath',
        'mobile_gear_asset_data_bases' => 'setMobileGearAssetDataBases',
        'mobile_world_content_paths' => 'setMobileWorldContentPaths',
        'json_world_content_paths' => 'setJsonWorldContentPaths',
        'json_world_component_content_paths' => 'setJsonWorldComponentContentPaths',
        'mobile_clan_banner_database_path' => 'setMobileClanBannerDatabasePath',
        'mobile_gear_cdn' => 'setMobileGearCdn',
        'icon_image_pyramid_info' => 'setIconImagePyramidInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'mobile_asset_content_path' => 'getMobileAssetContentPath',
        'mobile_gear_asset_data_bases' => 'getMobileGearAssetDataBases',
        'mobile_world_content_paths' => 'getMobileWorldContentPaths',
        'json_world_content_paths' => 'getJsonWorldContentPaths',
        'json_world_component_content_paths' => 'getJsonWorldComponentContentPaths',
        'mobile_clan_banner_database_path' => 'getMobileClanBannerDatabasePath',
        'mobile_gear_cdn' => 'getMobileGearCdn',
        'icon_image_pyramid_info' => 'getIconImagePyramidInfo'
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
        $this->container['version'] = $data['version'] ?? null;
        $this->container['mobile_asset_content_path'] = $data['mobile_asset_content_path'] ?? null;
        $this->container['mobile_gear_asset_data_bases'] = $data['mobile_gear_asset_data_bases'] ?? null;
        $this->container['mobile_world_content_paths'] = $data['mobile_world_content_paths'] ?? null;
        $this->container['json_world_content_paths'] = $data['json_world_content_paths'] ?? null;
        $this->container['json_world_component_content_paths'] = $data['json_world_component_content_paths'] ?? null;
        $this->container['mobile_clan_banner_database_path'] = $data['mobile_clan_banner_database_path'] ?? null;
        $this->container['mobile_gear_cdn'] = $data['mobile_gear_cdn'] ?? null;
        $this->container['icon_image_pyramid_info'] = $data['icon_image_pyramid_info'] ?? null;
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets mobile_asset_content_path
     *
     * @return string|null
     */
    public function getMobileAssetContentPath()
    {
        return $this->container['mobile_asset_content_path'];
    }

    /**
     * Sets mobile_asset_content_path
     *
     * @param string|null $mobile_asset_content_path mobile_asset_content_path
     *
     * @return self
     */
    public function setMobileAssetContentPath($mobile_asset_content_path)
    {
        $this->container['mobile_asset_content_path'] = $mobile_asset_content_path;

        return $this;
    }

    /**
     * Gets mobile_gear_asset_data_bases
     *
     * @return \OpenAPI\Client\Model\DestinyConfigGearAssetDataBaseDefinition[]|null
     */
    public function getMobileGearAssetDataBases()
    {
        return $this->container['mobile_gear_asset_data_bases'];
    }

    /**
     * Sets mobile_gear_asset_data_bases
     *
     * @param \OpenAPI\Client\Model\DestinyConfigGearAssetDataBaseDefinition[]|null $mobile_gear_asset_data_bases mobile_gear_asset_data_bases
     *
     * @return self
     */
    public function setMobileGearAssetDataBases($mobile_gear_asset_data_bases)
    {
        $this->container['mobile_gear_asset_data_bases'] = $mobile_gear_asset_data_bases;

        return $this;
    }

    /**
     * Gets mobile_world_content_paths
     *
     * @return map[string,string]|null
     */
    public function getMobileWorldContentPaths()
    {
        return $this->container['mobile_world_content_paths'];
    }

    /**
     * Sets mobile_world_content_paths
     *
     * @param map[string,string]|null $mobile_world_content_paths mobile_world_content_paths
     *
     * @return self
     */
    public function setMobileWorldContentPaths($mobile_world_content_paths)
    {
        $this->container['mobile_world_content_paths'] = $mobile_world_content_paths;

        return $this;
    }

    /**
     * Gets json_world_content_paths
     *
     * @return map[string,string]|null
     */
    public function getJsonWorldContentPaths()
    {
        return $this->container['json_world_content_paths'];
    }

    /**
     * Sets json_world_content_paths
     *
     * @param map[string,string]|null $json_world_content_paths This points to the generated JSON that contains all the Definitions. Each key is a locale. The value is a path to the aggregated world definitions (warning: large file!)
     *
     * @return self
     */
    public function setJsonWorldContentPaths($json_world_content_paths)
    {
        $this->container['json_world_content_paths'] = $json_world_content_paths;

        return $this;
    }

    /**
     * Gets json_world_component_content_paths
     *
     * @return map[string,map[string,string]]|null
     */
    public function getJsonWorldComponentContentPaths()
    {
        return $this->container['json_world_component_content_paths'];
    }

    /**
     * Sets json_world_component_content_paths
     *
     * @param map[string,map[string,string]]|null $json_world_component_content_paths This points to the generated JSON that contains all the Definitions. Each key is a locale. The value is a dictionary, where the key is a definition type by name, and the value is the path to the file for that definition. WARNING: This is unsafe and subject to change - do not depend on data in these files staying around long-term.
     *
     * @return self
     */
    public function setJsonWorldComponentContentPaths($json_world_component_content_paths)
    {
        $this->container['json_world_component_content_paths'] = $json_world_component_content_paths;

        return $this;
    }

    /**
     * Gets mobile_clan_banner_database_path
     *
     * @return string|null
     */
    public function getMobileClanBannerDatabasePath()
    {
        return $this->container['mobile_clan_banner_database_path'];
    }

    /**
     * Sets mobile_clan_banner_database_path
     *
     * @param string|null $mobile_clan_banner_database_path mobile_clan_banner_database_path
     *
     * @return self
     */
    public function setMobileClanBannerDatabasePath($mobile_clan_banner_database_path)
    {
        $this->container['mobile_clan_banner_database_path'] = $mobile_clan_banner_database_path;

        return $this;
    }

    /**
     * Gets mobile_gear_cdn
     *
     * @return map[string,string]|null
     */
    public function getMobileGearCdn()
    {
        return $this->container['mobile_gear_cdn'];
    }

    /**
     * Sets mobile_gear_cdn
     *
     * @param map[string,string]|null $mobile_gear_cdn mobile_gear_cdn
     *
     * @return self
     */
    public function setMobileGearCdn($mobile_gear_cdn)
    {
        $this->container['mobile_gear_cdn'] = $mobile_gear_cdn;

        return $this;
    }

    /**
     * Gets icon_image_pyramid_info
     *
     * @return \OpenAPI\Client\Model\DestinyConfigImagePyramidEntry[]|null
     */
    public function getIconImagePyramidInfo()
    {
        return $this->container['icon_image_pyramid_info'];
    }

    /**
     * Sets icon_image_pyramid_info
     *
     * @param \OpenAPI\Client\Model\DestinyConfigImagePyramidEntry[]|null $icon_image_pyramid_info Information about the \"Image Pyramid\" for Destiny icons. Where possible, we create smaller versions of Destiny icons. These are found as subfolders under the location of the \"original/full size\" Destiny images, with the same file name and extension as the original image itself. (this lets us avoid sending largely redundant path info with every entity, at the expense of the smaller versions of the image being less discoverable)
     *
     * @return self
     */
    public function setIconImagePyramidInfo($icon_image_pyramid_info)
    {
        $this->container['icon_image_pyramid_info'] = $icon_image_pyramid_info;

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


