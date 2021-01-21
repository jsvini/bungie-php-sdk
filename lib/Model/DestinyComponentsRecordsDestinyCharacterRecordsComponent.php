<?php
/**
 * DestinyComponentsRecordsDestinyCharacterRecordsComponent
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
 * DestinyComponentsRecordsDestinyCharacterRecordsComponent Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyComponentsRecordsDestinyCharacterRecordsComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Records.DestinyCharacterRecordsComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'featured_record_hashes' => 'int[]',
        'records' => 'map[string,\OpenAPI\Client\Model\DestinyComponentsRecordsDestinyRecordComponent]',
        'record_categories_root_node_hash' => 'int',
        'record_seals_root_node_hash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'featured_record_hashes' => 'uint32',
        'records' => null,
        'record_categories_root_node_hash' => 'uint32',
        'record_seals_root_node_hash' => 'uint32'
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
        'featured_record_hashes' => 'featuredRecordHashes',
        'records' => 'records',
        'record_categories_root_node_hash' => 'recordCategoriesRootNodeHash',
        'record_seals_root_node_hash' => 'recordSealsRootNodeHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'featured_record_hashes' => 'setFeaturedRecordHashes',
        'records' => 'setRecords',
        'record_categories_root_node_hash' => 'setRecordCategoriesRootNodeHash',
        'record_seals_root_node_hash' => 'setRecordSealsRootNodeHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'featured_record_hashes' => 'getFeaturedRecordHashes',
        'records' => 'getRecords',
        'record_categories_root_node_hash' => 'getRecordCategoriesRootNodeHash',
        'record_seals_root_node_hash' => 'getRecordSealsRootNodeHash'
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
        $this->container['featured_record_hashes'] = $data['featured_record_hashes'] ?? null;
        $this->container['records'] = $data['records'] ?? null;
        $this->container['record_categories_root_node_hash'] = $data['record_categories_root_node_hash'] ?? null;
        $this->container['record_seals_root_node_hash'] = $data['record_seals_root_node_hash'] ?? null;
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
     * Gets featured_record_hashes
     *
     * @return int[]|null
     */
    public function getFeaturedRecordHashes()
    {
        return $this->container['featured_record_hashes'];
    }

    /**
     * Sets featured_record_hashes
     *
     * @param int[]|null $featured_record_hashes featured_record_hashes
     *
     * @return self
     */
    public function setFeaturedRecordHashes($featured_record_hashes)
    {
        $this->container['featured_record_hashes'] = $featured_record_hashes;

        return $this;
    }

    /**
     * Gets records
     *
     * @return map[string,\OpenAPI\Client\Model\DestinyComponentsRecordsDestinyRecordComponent]|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param map[string,\OpenAPI\Client\Model\DestinyComponentsRecordsDestinyRecordComponent]|null $records records
     *
     * @return self
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets record_categories_root_node_hash
     *
     * @return int|null
     */
    public function getRecordCategoriesRootNodeHash()
    {
        return $this->container['record_categories_root_node_hash'];
    }

    /**
     * Sets record_categories_root_node_hash
     *
     * @param int|null $record_categories_root_node_hash The hash for the root presentation node definition of Triumph categories.
     *
     * @return self
     */
    public function setRecordCategoriesRootNodeHash($record_categories_root_node_hash)
    {
        $this->container['record_categories_root_node_hash'] = $record_categories_root_node_hash;

        return $this;
    }

    /**
     * Gets record_seals_root_node_hash
     *
     * @return int|null
     */
    public function getRecordSealsRootNodeHash()
    {
        return $this->container['record_seals_root_node_hash'];
    }

    /**
     * Sets record_seals_root_node_hash
     *
     * @param int|null $record_seals_root_node_hash The hash for the root presentation node definition of Triumph Seals.
     *
     * @return self
     */
    public function setRecordSealsRootNodeHash($record_seals_root_node_hash)
    {
        $this->container['record_seals_root_node_hash'] = $record_seals_root_node_hash;

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


