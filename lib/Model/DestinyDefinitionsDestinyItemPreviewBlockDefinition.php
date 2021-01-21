<?php
/**
 * DestinyDefinitionsDestinyItemPreviewBlockDefinition
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
 * DestinyDefinitionsDestinyItemPreviewBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Items like Sacks or Boxes can have items that it shows in-game when you view details that represent the items you can obtain if you use or acquire the item.  This defines those categories, and gives some insights into that data&#39;s source.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyItemPreviewBlockDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemPreviewBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'screen_style' => 'string',
        'preview_vendor_hash' => 'int',
        'artifact_hash' => 'int',
        'preview_action_string' => 'string',
        'derived_item_categories' => '\OpenAPI\Client\Model\DestinyDefinitionsItemsDestinyDerivedItemCategoryDefinition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'screen_style' => null,
        'preview_vendor_hash' => 'uint32',
        'artifact_hash' => 'uint32',
        'preview_action_string' => null,
        'derived_item_categories' => null
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
        'screen_style' => 'screenStyle',
        'preview_vendor_hash' => 'previewVendorHash',
        'artifact_hash' => 'artifactHash',
        'preview_action_string' => 'previewActionString',
        'derived_item_categories' => 'derivedItemCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'screen_style' => 'setScreenStyle',
        'preview_vendor_hash' => 'setPreviewVendorHash',
        'artifact_hash' => 'setArtifactHash',
        'preview_action_string' => 'setPreviewActionString',
        'derived_item_categories' => 'setDerivedItemCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'screen_style' => 'getScreenStyle',
        'preview_vendor_hash' => 'getPreviewVendorHash',
        'artifact_hash' => 'getArtifactHash',
        'preview_action_string' => 'getPreviewActionString',
        'derived_item_categories' => 'getDerivedItemCategories'
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
        $this->container['screen_style'] = $data['screen_style'] ?? null;
        $this->container['preview_vendor_hash'] = $data['preview_vendor_hash'] ?? null;
        $this->container['artifact_hash'] = $data['artifact_hash'] ?? null;
        $this->container['preview_action_string'] = $data['preview_action_string'] ?? null;
        $this->container['derived_item_categories'] = $data['derived_item_categories'] ?? null;
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
     * Gets screen_style
     *
     * @return string|null
     */
    public function getScreenStyle()
    {
        return $this->container['screen_style'];
    }

    /**
     * Sets screen_style
     *
     * @param string|null $screen_style A string that the game UI uses as a hint for which detail screen to show for the item. You, too, can leverage this for your own custom screen detail views. Note, however, that these are arbitrarily defined by designers: there's no guarantees of a fixed, known number of these - so fall back to something reasonable if you don't recognize it.
     *
     * @return self
     */
    public function setScreenStyle($screen_style)
    {
        $this->container['screen_style'] = $screen_style;

        return $this;
    }

    /**
     * Gets preview_vendor_hash
     *
     * @return int|null
     */
    public function getPreviewVendorHash()
    {
        return $this->container['preview_vendor_hash'];
    }

    /**
     * Sets preview_vendor_hash
     *
     * @param int|null $preview_vendor_hash If the preview data is derived from a fake \"Preview\" Vendor, this will be the hash identifier for the DestinyVendorDefinition of that fake vendor.
     *
     * @return self
     */
    public function setPreviewVendorHash($preview_vendor_hash)
    {
        $this->container['preview_vendor_hash'] = $preview_vendor_hash;

        return $this;
    }

    /**
     * Gets artifact_hash
     *
     * @return int|null
     */
    public function getArtifactHash()
    {
        return $this->container['artifact_hash'];
    }

    /**
     * Sets artifact_hash
     *
     * @param int|null $artifact_hash If this item should show you Artifact information when you preview it, this is the hash identifier of the DestinyArtifactDefinition for the artifact whose data should be shown.
     *
     * @return self
     */
    public function setArtifactHash($artifact_hash)
    {
        $this->container['artifact_hash'] = $artifact_hash;

        return $this;
    }

    /**
     * Gets preview_action_string
     *
     * @return string|null
     */
    public function getPreviewActionString()
    {
        return $this->container['preview_action_string'];
    }

    /**
     * Sets preview_action_string
     *
     * @param string|null $preview_action_string If the preview has an associated action (like \"Open\"), this will be the localized string for that action.
     *
     * @return self
     */
    public function setPreviewActionString($preview_action_string)
    {
        $this->container['preview_action_string'] = $preview_action_string;

        return $this;
    }

    /**
     * Gets derived_item_categories
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsItemsDestinyDerivedItemCategoryDefinition[]|null
     */
    public function getDerivedItemCategories()
    {
        return $this->container['derived_item_categories'];
    }

    /**
     * Sets derived_item_categories
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsItemsDestinyDerivedItemCategoryDefinition[]|null $derived_item_categories This is a list of the items being previewed, categorized in the same way as they are in the preview UI.
     *
     * @return self
     */
    public function setDerivedItemCategories($derived_item_categories)
    {
        $this->container['derived_item_categories'] = $derived_item_categories;

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

