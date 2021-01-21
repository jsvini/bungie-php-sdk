<?php
/**
 * CommonModelsDestiny2CoreSettings
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
 * CommonModelsDestiny2CoreSettings Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CommonModelsDestiny2CoreSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common.Models.Destiny2CoreSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collection_root_node' => 'int',
        'badges_root_node' => 'int',
        'records_root_node' => 'int',
        'medals_root_node' => 'int',
        'metrics_root_node' => 'int',
        'active_triumphs_root_node_hash' => 'int',
        'active_seals_root_node_hash' => 'int',
        'legacy_triumphs_root_node_hash' => 'int',
        'legacy_seals_root_node_hash' => 'int',
        'medals_root_node_hash' => 'int',
        'exotic_catalysts_root_node_hash' => 'int',
        'lore_root_node_hash' => 'int',
        'current_rank_progression_hashes' => 'int[]',
        'undiscovered_collectible_image' => 'string',
        'ammo_type_heavy_icon' => 'string',
        'ammo_type_special_icon' => 'string',
        'ammo_type_primary_icon' => 'string',
        'current_seasonal_artifact_hash' => 'int',
        'current_season_hash' => 'int',
        'future_season_hashes' => 'int[]',
        'past_season_hashes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collection_root_node' => 'uint32',
        'badges_root_node' => 'uint32',
        'records_root_node' => 'uint32',
        'medals_root_node' => 'uint32',
        'metrics_root_node' => 'uint32',
        'active_triumphs_root_node_hash' => 'uint32',
        'active_seals_root_node_hash' => 'uint32',
        'legacy_triumphs_root_node_hash' => 'uint32',
        'legacy_seals_root_node_hash' => 'uint32',
        'medals_root_node_hash' => 'uint32',
        'exotic_catalysts_root_node_hash' => 'uint32',
        'lore_root_node_hash' => 'uint32',
        'current_rank_progression_hashes' => 'uint32',
        'undiscovered_collectible_image' => null,
        'ammo_type_heavy_icon' => null,
        'ammo_type_special_icon' => null,
        'ammo_type_primary_icon' => null,
        'current_seasonal_artifact_hash' => 'uint32',
        'current_season_hash' => 'uint32',
        'future_season_hashes' => 'uint32',
        'past_season_hashes' => 'uint32'
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
        'collection_root_node' => 'collectionRootNode',
        'badges_root_node' => 'badgesRootNode',
        'records_root_node' => 'recordsRootNode',
        'medals_root_node' => 'medalsRootNode',
        'metrics_root_node' => 'metricsRootNode',
        'active_triumphs_root_node_hash' => 'activeTriumphsRootNodeHash',
        'active_seals_root_node_hash' => 'activeSealsRootNodeHash',
        'legacy_triumphs_root_node_hash' => 'legacyTriumphsRootNodeHash',
        'legacy_seals_root_node_hash' => 'legacySealsRootNodeHash',
        'medals_root_node_hash' => 'medalsRootNodeHash',
        'exotic_catalysts_root_node_hash' => 'exoticCatalystsRootNodeHash',
        'lore_root_node_hash' => 'loreRootNodeHash',
        'current_rank_progression_hashes' => 'currentRankProgressionHashes',
        'undiscovered_collectible_image' => 'undiscoveredCollectibleImage',
        'ammo_type_heavy_icon' => 'ammoTypeHeavyIcon',
        'ammo_type_special_icon' => 'ammoTypeSpecialIcon',
        'ammo_type_primary_icon' => 'ammoTypePrimaryIcon',
        'current_seasonal_artifact_hash' => 'currentSeasonalArtifactHash',
        'current_season_hash' => 'currentSeasonHash',
        'future_season_hashes' => 'futureSeasonHashes',
        'past_season_hashes' => 'pastSeasonHashes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collection_root_node' => 'setCollectionRootNode',
        'badges_root_node' => 'setBadgesRootNode',
        'records_root_node' => 'setRecordsRootNode',
        'medals_root_node' => 'setMedalsRootNode',
        'metrics_root_node' => 'setMetricsRootNode',
        'active_triumphs_root_node_hash' => 'setActiveTriumphsRootNodeHash',
        'active_seals_root_node_hash' => 'setActiveSealsRootNodeHash',
        'legacy_triumphs_root_node_hash' => 'setLegacyTriumphsRootNodeHash',
        'legacy_seals_root_node_hash' => 'setLegacySealsRootNodeHash',
        'medals_root_node_hash' => 'setMedalsRootNodeHash',
        'exotic_catalysts_root_node_hash' => 'setExoticCatalystsRootNodeHash',
        'lore_root_node_hash' => 'setLoreRootNodeHash',
        'current_rank_progression_hashes' => 'setCurrentRankProgressionHashes',
        'undiscovered_collectible_image' => 'setUndiscoveredCollectibleImage',
        'ammo_type_heavy_icon' => 'setAmmoTypeHeavyIcon',
        'ammo_type_special_icon' => 'setAmmoTypeSpecialIcon',
        'ammo_type_primary_icon' => 'setAmmoTypePrimaryIcon',
        'current_seasonal_artifact_hash' => 'setCurrentSeasonalArtifactHash',
        'current_season_hash' => 'setCurrentSeasonHash',
        'future_season_hashes' => 'setFutureSeasonHashes',
        'past_season_hashes' => 'setPastSeasonHashes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collection_root_node' => 'getCollectionRootNode',
        'badges_root_node' => 'getBadgesRootNode',
        'records_root_node' => 'getRecordsRootNode',
        'medals_root_node' => 'getMedalsRootNode',
        'metrics_root_node' => 'getMetricsRootNode',
        'active_triumphs_root_node_hash' => 'getActiveTriumphsRootNodeHash',
        'active_seals_root_node_hash' => 'getActiveSealsRootNodeHash',
        'legacy_triumphs_root_node_hash' => 'getLegacyTriumphsRootNodeHash',
        'legacy_seals_root_node_hash' => 'getLegacySealsRootNodeHash',
        'medals_root_node_hash' => 'getMedalsRootNodeHash',
        'exotic_catalysts_root_node_hash' => 'getExoticCatalystsRootNodeHash',
        'lore_root_node_hash' => 'getLoreRootNodeHash',
        'current_rank_progression_hashes' => 'getCurrentRankProgressionHashes',
        'undiscovered_collectible_image' => 'getUndiscoveredCollectibleImage',
        'ammo_type_heavy_icon' => 'getAmmoTypeHeavyIcon',
        'ammo_type_special_icon' => 'getAmmoTypeSpecialIcon',
        'ammo_type_primary_icon' => 'getAmmoTypePrimaryIcon',
        'current_seasonal_artifact_hash' => 'getCurrentSeasonalArtifactHash',
        'current_season_hash' => 'getCurrentSeasonHash',
        'future_season_hashes' => 'getFutureSeasonHashes',
        'past_season_hashes' => 'getPastSeasonHashes'
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
        $this->container['collection_root_node'] = $data['collection_root_node'] ?? null;
        $this->container['badges_root_node'] = $data['badges_root_node'] ?? null;
        $this->container['records_root_node'] = $data['records_root_node'] ?? null;
        $this->container['medals_root_node'] = $data['medals_root_node'] ?? null;
        $this->container['metrics_root_node'] = $data['metrics_root_node'] ?? null;
        $this->container['active_triumphs_root_node_hash'] = $data['active_triumphs_root_node_hash'] ?? null;
        $this->container['active_seals_root_node_hash'] = $data['active_seals_root_node_hash'] ?? null;
        $this->container['legacy_triumphs_root_node_hash'] = $data['legacy_triumphs_root_node_hash'] ?? null;
        $this->container['legacy_seals_root_node_hash'] = $data['legacy_seals_root_node_hash'] ?? null;
        $this->container['medals_root_node_hash'] = $data['medals_root_node_hash'] ?? null;
        $this->container['exotic_catalysts_root_node_hash'] = $data['exotic_catalysts_root_node_hash'] ?? null;
        $this->container['lore_root_node_hash'] = $data['lore_root_node_hash'] ?? null;
        $this->container['current_rank_progression_hashes'] = $data['current_rank_progression_hashes'] ?? null;
        $this->container['undiscovered_collectible_image'] = $data['undiscovered_collectible_image'] ?? null;
        $this->container['ammo_type_heavy_icon'] = $data['ammo_type_heavy_icon'] ?? null;
        $this->container['ammo_type_special_icon'] = $data['ammo_type_special_icon'] ?? null;
        $this->container['ammo_type_primary_icon'] = $data['ammo_type_primary_icon'] ?? null;
        $this->container['current_seasonal_artifact_hash'] = $data['current_seasonal_artifact_hash'] ?? null;
        $this->container['current_season_hash'] = $data['current_season_hash'] ?? null;
        $this->container['future_season_hashes'] = $data['future_season_hashes'] ?? null;
        $this->container['past_season_hashes'] = $data['past_season_hashes'] ?? null;
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
     * Gets collection_root_node
     *
     * @return int|null
     */
    public function getCollectionRootNode()
    {
        return $this->container['collection_root_node'];
    }

    /**
     * Sets collection_root_node
     *
     * @param int|null $collection_root_node collection_root_node
     *
     * @return self
     */
    public function setCollectionRootNode($collection_root_node)
    {
        $this->container['collection_root_node'] = $collection_root_node;

        return $this;
    }

    /**
     * Gets badges_root_node
     *
     * @return int|null
     */
    public function getBadgesRootNode()
    {
        return $this->container['badges_root_node'];
    }

    /**
     * Sets badges_root_node
     *
     * @param int|null $badges_root_node badges_root_node
     *
     * @return self
     */
    public function setBadgesRootNode($badges_root_node)
    {
        $this->container['badges_root_node'] = $badges_root_node;

        return $this;
    }

    /**
     * Gets records_root_node
     *
     * @return int|null
     */
    public function getRecordsRootNode()
    {
        return $this->container['records_root_node'];
    }

    /**
     * Sets records_root_node
     *
     * @param int|null $records_root_node records_root_node
     *
     * @return self
     */
    public function setRecordsRootNode($records_root_node)
    {
        $this->container['records_root_node'] = $records_root_node;

        return $this;
    }

    /**
     * Gets medals_root_node
     *
     * @return int|null
     */
    public function getMedalsRootNode()
    {
        return $this->container['medals_root_node'];
    }

    /**
     * Sets medals_root_node
     *
     * @param int|null $medals_root_node medals_root_node
     *
     * @return self
     */
    public function setMedalsRootNode($medals_root_node)
    {
        $this->container['medals_root_node'] = $medals_root_node;

        return $this;
    }

    /**
     * Gets metrics_root_node
     *
     * @return int|null
     */
    public function getMetricsRootNode()
    {
        return $this->container['metrics_root_node'];
    }

    /**
     * Sets metrics_root_node
     *
     * @param int|null $metrics_root_node metrics_root_node
     *
     * @return self
     */
    public function setMetricsRootNode($metrics_root_node)
    {
        $this->container['metrics_root_node'] = $metrics_root_node;

        return $this;
    }

    /**
     * Gets active_triumphs_root_node_hash
     *
     * @return int|null
     */
    public function getActiveTriumphsRootNodeHash()
    {
        return $this->container['active_triumphs_root_node_hash'];
    }

    /**
     * Sets active_triumphs_root_node_hash
     *
     * @param int|null $active_triumphs_root_node_hash active_triumphs_root_node_hash
     *
     * @return self
     */
    public function setActiveTriumphsRootNodeHash($active_triumphs_root_node_hash)
    {
        $this->container['active_triumphs_root_node_hash'] = $active_triumphs_root_node_hash;

        return $this;
    }

    /**
     * Gets active_seals_root_node_hash
     *
     * @return int|null
     */
    public function getActiveSealsRootNodeHash()
    {
        return $this->container['active_seals_root_node_hash'];
    }

    /**
     * Sets active_seals_root_node_hash
     *
     * @param int|null $active_seals_root_node_hash active_seals_root_node_hash
     *
     * @return self
     */
    public function setActiveSealsRootNodeHash($active_seals_root_node_hash)
    {
        $this->container['active_seals_root_node_hash'] = $active_seals_root_node_hash;

        return $this;
    }

    /**
     * Gets legacy_triumphs_root_node_hash
     *
     * @return int|null
     */
    public function getLegacyTriumphsRootNodeHash()
    {
        return $this->container['legacy_triumphs_root_node_hash'];
    }

    /**
     * Sets legacy_triumphs_root_node_hash
     *
     * @param int|null $legacy_triumphs_root_node_hash legacy_triumphs_root_node_hash
     *
     * @return self
     */
    public function setLegacyTriumphsRootNodeHash($legacy_triumphs_root_node_hash)
    {
        $this->container['legacy_triumphs_root_node_hash'] = $legacy_triumphs_root_node_hash;

        return $this;
    }

    /**
     * Gets legacy_seals_root_node_hash
     *
     * @return int|null
     */
    public function getLegacySealsRootNodeHash()
    {
        return $this->container['legacy_seals_root_node_hash'];
    }

    /**
     * Sets legacy_seals_root_node_hash
     *
     * @param int|null $legacy_seals_root_node_hash legacy_seals_root_node_hash
     *
     * @return self
     */
    public function setLegacySealsRootNodeHash($legacy_seals_root_node_hash)
    {
        $this->container['legacy_seals_root_node_hash'] = $legacy_seals_root_node_hash;

        return $this;
    }

    /**
     * Gets medals_root_node_hash
     *
     * @return int|null
     */
    public function getMedalsRootNodeHash()
    {
        return $this->container['medals_root_node_hash'];
    }

    /**
     * Sets medals_root_node_hash
     *
     * @param int|null $medals_root_node_hash medals_root_node_hash
     *
     * @return self
     */
    public function setMedalsRootNodeHash($medals_root_node_hash)
    {
        $this->container['medals_root_node_hash'] = $medals_root_node_hash;

        return $this;
    }

    /**
     * Gets exotic_catalysts_root_node_hash
     *
     * @return int|null
     */
    public function getExoticCatalystsRootNodeHash()
    {
        return $this->container['exotic_catalysts_root_node_hash'];
    }

    /**
     * Sets exotic_catalysts_root_node_hash
     *
     * @param int|null $exotic_catalysts_root_node_hash exotic_catalysts_root_node_hash
     *
     * @return self
     */
    public function setExoticCatalystsRootNodeHash($exotic_catalysts_root_node_hash)
    {
        $this->container['exotic_catalysts_root_node_hash'] = $exotic_catalysts_root_node_hash;

        return $this;
    }

    /**
     * Gets lore_root_node_hash
     *
     * @return int|null
     */
    public function getLoreRootNodeHash()
    {
        return $this->container['lore_root_node_hash'];
    }

    /**
     * Sets lore_root_node_hash
     *
     * @param int|null $lore_root_node_hash lore_root_node_hash
     *
     * @return self
     */
    public function setLoreRootNodeHash($lore_root_node_hash)
    {
        $this->container['lore_root_node_hash'] = $lore_root_node_hash;

        return $this;
    }

    /**
     * Gets current_rank_progression_hashes
     *
     * @return int[]|null
     */
    public function getCurrentRankProgressionHashes()
    {
        return $this->container['current_rank_progression_hashes'];
    }

    /**
     * Sets current_rank_progression_hashes
     *
     * @param int[]|null $current_rank_progression_hashes current_rank_progression_hashes
     *
     * @return self
     */
    public function setCurrentRankProgressionHashes($current_rank_progression_hashes)
    {
        $this->container['current_rank_progression_hashes'] = $current_rank_progression_hashes;

        return $this;
    }

    /**
     * Gets undiscovered_collectible_image
     *
     * @return string|null
     */
    public function getUndiscoveredCollectibleImage()
    {
        return $this->container['undiscovered_collectible_image'];
    }

    /**
     * Sets undiscovered_collectible_image
     *
     * @param string|null $undiscovered_collectible_image undiscovered_collectible_image
     *
     * @return self
     */
    public function setUndiscoveredCollectibleImage($undiscovered_collectible_image)
    {
        $this->container['undiscovered_collectible_image'] = $undiscovered_collectible_image;

        return $this;
    }

    /**
     * Gets ammo_type_heavy_icon
     *
     * @return string|null
     */
    public function getAmmoTypeHeavyIcon()
    {
        return $this->container['ammo_type_heavy_icon'];
    }

    /**
     * Sets ammo_type_heavy_icon
     *
     * @param string|null $ammo_type_heavy_icon ammo_type_heavy_icon
     *
     * @return self
     */
    public function setAmmoTypeHeavyIcon($ammo_type_heavy_icon)
    {
        $this->container['ammo_type_heavy_icon'] = $ammo_type_heavy_icon;

        return $this;
    }

    /**
     * Gets ammo_type_special_icon
     *
     * @return string|null
     */
    public function getAmmoTypeSpecialIcon()
    {
        return $this->container['ammo_type_special_icon'];
    }

    /**
     * Sets ammo_type_special_icon
     *
     * @param string|null $ammo_type_special_icon ammo_type_special_icon
     *
     * @return self
     */
    public function setAmmoTypeSpecialIcon($ammo_type_special_icon)
    {
        $this->container['ammo_type_special_icon'] = $ammo_type_special_icon;

        return $this;
    }

    /**
     * Gets ammo_type_primary_icon
     *
     * @return string|null
     */
    public function getAmmoTypePrimaryIcon()
    {
        return $this->container['ammo_type_primary_icon'];
    }

    /**
     * Sets ammo_type_primary_icon
     *
     * @param string|null $ammo_type_primary_icon ammo_type_primary_icon
     *
     * @return self
     */
    public function setAmmoTypePrimaryIcon($ammo_type_primary_icon)
    {
        $this->container['ammo_type_primary_icon'] = $ammo_type_primary_icon;

        return $this;
    }

    /**
     * Gets current_seasonal_artifact_hash
     *
     * @return int|null
     */
    public function getCurrentSeasonalArtifactHash()
    {
        return $this->container['current_seasonal_artifact_hash'];
    }

    /**
     * Sets current_seasonal_artifact_hash
     *
     * @param int|null $current_seasonal_artifact_hash current_seasonal_artifact_hash
     *
     * @return self
     */
    public function setCurrentSeasonalArtifactHash($current_seasonal_artifact_hash)
    {
        $this->container['current_seasonal_artifact_hash'] = $current_seasonal_artifact_hash;

        return $this;
    }

    /**
     * Gets current_season_hash
     *
     * @return int|null
     */
    public function getCurrentSeasonHash()
    {
        return $this->container['current_season_hash'];
    }

    /**
     * Sets current_season_hash
     *
     * @param int|null $current_season_hash current_season_hash
     *
     * @return self
     */
    public function setCurrentSeasonHash($current_season_hash)
    {
        $this->container['current_season_hash'] = $current_season_hash;

        return $this;
    }

    /**
     * Gets future_season_hashes
     *
     * @return int[]|null
     */
    public function getFutureSeasonHashes()
    {
        return $this->container['future_season_hashes'];
    }

    /**
     * Sets future_season_hashes
     *
     * @param int[]|null $future_season_hashes future_season_hashes
     *
     * @return self
     */
    public function setFutureSeasonHashes($future_season_hashes)
    {
        $this->container['future_season_hashes'] = $future_season_hashes;

        return $this;
    }

    /**
     * Gets past_season_hashes
     *
     * @return int[]|null
     */
    public function getPastSeasonHashes()
    {
        return $this->container['past_season_hashes'];
    }

    /**
     * Sets past_season_hashes
     *
     * @param int[]|null $past_season_hashes past_season_hashes
     *
     * @return self
     */
    public function setPastSeasonHashes($past_season_hashes)
    {
        $this->container['past_season_hashes'] = $past_season_hashes;

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

