<?php
/**
 * DestinyDefinitionsDestinyVendorItemDefinition
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
 * DestinyDefinitionsDestinyVendorItemDefinition Class Doc Comment
 *
 * @category Class
 * @description This represents an item being sold by the vendor.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDestinyVendorItemDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyVendorItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendor_item_index' => 'int',
        'item_hash' => 'int',
        'quantity' => 'int',
        'failure_indexes' => 'int[]',
        'currencies' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemQuantity[]',
        'refund_policy' => 'int',
        'refund_time_limit' => 'int',
        'creation_levels' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyItemCreationEntryLevelDefinition[]',
        'display_category_index' => 'int',
        'category_index' => 'int',
        'original_category_index' => 'int',
        'minimum_level' => 'int',
        'maximum_level' => 'int',
        'action' => 'DestinyDefinitionsDestinyVendorSaleItemActionBlockDefinition',
        'display_category' => 'string',
        'inventory_bucket_hash' => 'int',
        'visibility_scope' => 'int',
        'purchasable_scope' => 'int',
        'exclusivity' => 'int',
        'is_offer' => 'bool',
        'is_crm' => 'bool',
        'sort_value' => 'int',
        'expiration_tooltip' => 'string',
        'redirect_to_sale_indexes' => 'int[]',
        'socket_overrides' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemSocketOverride[]',
        'unpurchasable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vendor_item_index' => 'int32',
        'item_hash' => 'uint32',
        'quantity' => 'int32',
        'failure_indexes' => 'int32',
        'currencies' => null,
        'refund_policy' => 'int32',
        'refund_time_limit' => 'int32',
        'creation_levels' => null,
        'display_category_index' => 'int32',
        'category_index' => 'int32',
        'original_category_index' => 'int32',
        'minimum_level' => 'int32',
        'maximum_level' => 'int32',
        'action' => null,
        'display_category' => null,
        'inventory_bucket_hash' => 'uint32',
        'visibility_scope' => 'int32',
        'purchasable_scope' => 'int32',
        'exclusivity' => 'int32',
        'is_offer' => null,
        'is_crm' => null,
        'sort_value' => 'int32',
        'expiration_tooltip' => null,
        'redirect_to_sale_indexes' => 'int32',
        'socket_overrides' => null,
        'unpurchasable' => null
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
        'vendor_item_index' => 'vendorItemIndex',
        'item_hash' => 'itemHash',
        'quantity' => 'quantity',
        'failure_indexes' => 'failureIndexes',
        'currencies' => 'currencies',
        'refund_policy' => 'refundPolicy',
        'refund_time_limit' => 'refundTimeLimit',
        'creation_levels' => 'creationLevels',
        'display_category_index' => 'displayCategoryIndex',
        'category_index' => 'categoryIndex',
        'original_category_index' => 'originalCategoryIndex',
        'minimum_level' => 'minimumLevel',
        'maximum_level' => 'maximumLevel',
        'action' => 'action',
        'display_category' => 'displayCategory',
        'inventory_bucket_hash' => 'inventoryBucketHash',
        'visibility_scope' => 'visibilityScope',
        'purchasable_scope' => 'purchasableScope',
        'exclusivity' => 'exclusivity',
        'is_offer' => 'isOffer',
        'is_crm' => 'isCrm',
        'sort_value' => 'sortValue',
        'expiration_tooltip' => 'expirationTooltip',
        'redirect_to_sale_indexes' => 'redirectToSaleIndexes',
        'socket_overrides' => 'socketOverrides',
        'unpurchasable' => 'unpurchasable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor_item_index' => 'setVendorItemIndex',
        'item_hash' => 'setItemHash',
        'quantity' => 'setQuantity',
        'failure_indexes' => 'setFailureIndexes',
        'currencies' => 'setCurrencies',
        'refund_policy' => 'setRefundPolicy',
        'refund_time_limit' => 'setRefundTimeLimit',
        'creation_levels' => 'setCreationLevels',
        'display_category_index' => 'setDisplayCategoryIndex',
        'category_index' => 'setCategoryIndex',
        'original_category_index' => 'setOriginalCategoryIndex',
        'minimum_level' => 'setMinimumLevel',
        'maximum_level' => 'setMaximumLevel',
        'action' => 'setAction',
        'display_category' => 'setDisplayCategory',
        'inventory_bucket_hash' => 'setInventoryBucketHash',
        'visibility_scope' => 'setVisibilityScope',
        'purchasable_scope' => 'setPurchasableScope',
        'exclusivity' => 'setExclusivity',
        'is_offer' => 'setIsOffer',
        'is_crm' => 'setIsCrm',
        'sort_value' => 'setSortValue',
        'expiration_tooltip' => 'setExpirationTooltip',
        'redirect_to_sale_indexes' => 'setRedirectToSaleIndexes',
        'socket_overrides' => 'setSocketOverrides',
        'unpurchasable' => 'setUnpurchasable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor_item_index' => 'getVendorItemIndex',
        'item_hash' => 'getItemHash',
        'quantity' => 'getQuantity',
        'failure_indexes' => 'getFailureIndexes',
        'currencies' => 'getCurrencies',
        'refund_policy' => 'getRefundPolicy',
        'refund_time_limit' => 'getRefundTimeLimit',
        'creation_levels' => 'getCreationLevels',
        'display_category_index' => 'getDisplayCategoryIndex',
        'category_index' => 'getCategoryIndex',
        'original_category_index' => 'getOriginalCategoryIndex',
        'minimum_level' => 'getMinimumLevel',
        'maximum_level' => 'getMaximumLevel',
        'action' => 'getAction',
        'display_category' => 'getDisplayCategory',
        'inventory_bucket_hash' => 'getInventoryBucketHash',
        'visibility_scope' => 'getVisibilityScope',
        'purchasable_scope' => 'getPurchasableScope',
        'exclusivity' => 'getExclusivity',
        'is_offer' => 'getIsOffer',
        'is_crm' => 'getIsCrm',
        'sort_value' => 'getSortValue',
        'expiration_tooltip' => 'getExpirationTooltip',
        'redirect_to_sale_indexes' => 'getRedirectToSaleIndexes',
        'socket_overrides' => 'getSocketOverrides',
        'unpurchasable' => 'getUnpurchasable'
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
        $this->container['vendor_item_index'] = $data['vendor_item_index'] ?? null;
        $this->container['item_hash'] = $data['item_hash'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['failure_indexes'] = $data['failure_indexes'] ?? null;
        $this->container['currencies'] = $data['currencies'] ?? null;
        $this->container['refund_policy'] = $data['refund_policy'] ?? null;
        $this->container['refund_time_limit'] = $data['refund_time_limit'] ?? null;
        $this->container['creation_levels'] = $data['creation_levels'] ?? null;
        $this->container['display_category_index'] = $data['display_category_index'] ?? null;
        $this->container['category_index'] = $data['category_index'] ?? null;
        $this->container['original_category_index'] = $data['original_category_index'] ?? null;
        $this->container['minimum_level'] = $data['minimum_level'] ?? null;
        $this->container['maximum_level'] = $data['maximum_level'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['display_category'] = $data['display_category'] ?? null;
        $this->container['inventory_bucket_hash'] = $data['inventory_bucket_hash'] ?? null;
        $this->container['visibility_scope'] = $data['visibility_scope'] ?? null;
        $this->container['purchasable_scope'] = $data['purchasable_scope'] ?? null;
        $this->container['exclusivity'] = $data['exclusivity'] ?? null;
        $this->container['is_offer'] = $data['is_offer'] ?? null;
        $this->container['is_crm'] = $data['is_crm'] ?? null;
        $this->container['sort_value'] = $data['sort_value'] ?? null;
        $this->container['expiration_tooltip'] = $data['expiration_tooltip'] ?? null;
        $this->container['redirect_to_sale_indexes'] = $data['redirect_to_sale_indexes'] ?? null;
        $this->container['socket_overrides'] = $data['socket_overrides'] ?? null;
        $this->container['unpurchasable'] = $data['unpurchasable'] ?? null;
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
     * Gets vendor_item_index
     *
     * @return int|null
     */
    public function getVendorItemIndex()
    {
        return $this->container['vendor_item_index'];
    }

    /**
     * Sets vendor_item_index
     *
     * @param int|null $vendor_item_index The index into the DestinyVendorDefinition.saleList. This is what we use to refer to items being sold throughout live and definition data.
     *
     * @return self
     */
    public function setVendorItemIndex($vendor_item_index)
    {
        $this->container['vendor_item_index'] = $vendor_item_index;

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
     * @param int|null $item_hash The hash identifier of the item being sold (DestinyInventoryItemDefinition).  Note that a vendor can sell the same item in multiple ways, so don't assume that itemHash is a unique identifier for this entity.
     *
     * @return self
     */
    public function setItemHash($item_hash)
    {
        $this->container['item_hash'] = $item_hash;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The amount you will recieve of the item described in itemHash if you make the purchase.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets failure_indexes
     *
     * @return int[]|null
     */
    public function getFailureIndexes()
    {
        return $this->container['failure_indexes'];
    }

    /**
     * Sets failure_indexes
     *
     * @param int[]|null $failure_indexes An list of indexes into the DestinyVendorDefinition.failureStrings array, indicating the possible failure strings that can be relevant for this item.
     *
     * @return self
     */
    public function setFailureIndexes($failure_indexes)
    {
        $this->container['failure_indexes'] = $failure_indexes;

        return $this;
    }

    /**
     * Gets currencies
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemQuantity[]|null
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemQuantity[]|null $currencies This is a pre-compiled aggregation of item value and priceOverrideList, so that we have one place to check for what the purchaser must pay for the item. Use this instead of trying to piece together the price separately.  The somewhat crappy part about this is that, now that item quantity overrides have dynamic modifiers, this will not necessarily be statically true. If you were using this instead of live data, switch to using live data.
     *
     * @return self
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets refund_policy
     *
     * @return int|null
     */
    public function getRefundPolicy()
    {
        return $this->container['refund_policy'];
    }

    /**
     * Sets refund_policy
     *
     * @param int|null $refund_policy If this item can be refunded, this is the policy for what will be refundd, how, and in what time period.
     *
     * @return self
     */
    public function setRefundPolicy($refund_policy)
    {
        $this->container['refund_policy'] = $refund_policy;

        return $this;
    }

    /**
     * Gets refund_time_limit
     *
     * @return int|null
     */
    public function getRefundTimeLimit()
    {
        return $this->container['refund_time_limit'];
    }

    /**
     * Sets refund_time_limit
     *
     * @param int|null $refund_time_limit The amount of time before refundability of the newly purchased item will expire.
     *
     * @return self
     */
    public function setRefundTimeLimit($refund_time_limit)
    {
        $this->container['refund_time_limit'] = $refund_time_limit;

        return $this;
    }

    /**
     * Gets creation_levels
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyItemCreationEntryLevelDefinition[]|null
     */
    public function getCreationLevels()
    {
        return $this->container['creation_levels'];
    }

    /**
     * Sets creation_levels
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyItemCreationEntryLevelDefinition[]|null $creation_levels The Default level at which the item will spawn. Almost always driven by an adjusto these days. Ideally should be singular. It's a long story how this ended up as a list, but there is always either going to be 0:1 of these entities.
     *
     * @return self
     */
    public function setCreationLevels($creation_levels)
    {
        $this->container['creation_levels'] = $creation_levels;

        return $this;
    }

    /**
     * Gets display_category_index
     *
     * @return int|null
     */
    public function getDisplayCategoryIndex()
    {
        return $this->container['display_category_index'];
    }

    /**
     * Sets display_category_index
     *
     * @param int|null $display_category_index This is an index specifically into the display category, as opposed to the server-side Categories (which do not need to match or pair with each other in any way: server side categories are really just structures for common validation. Display Category will let us more easily categorize items visually)
     *
     * @return self
     */
    public function setDisplayCategoryIndex($display_category_index)
    {
        $this->container['display_category_index'] = $display_category_index;

        return $this;
    }

    /**
     * Gets category_index
     *
     * @return int|null
     */
    public function getCategoryIndex()
    {
        return $this->container['category_index'];
    }

    /**
     * Sets category_index
     *
     * @param int|null $category_index The index into the DestinyVendorDefinition.categories array, so you can find the category associated with this item.
     *
     * @return self
     */
    public function setCategoryIndex($category_index)
    {
        $this->container['category_index'] = $category_index;

        return $this;
    }

    /**
     * Gets original_category_index
     *
     * @return int|null
     */
    public function getOriginalCategoryIndex()
    {
        return $this->container['original_category_index'];
    }

    /**
     * Sets original_category_index
     *
     * @param int|null $original_category_index Same as above, but for the original category indexes.
     *
     * @return self
     */
    public function setOriginalCategoryIndex($original_category_index)
    {
        $this->container['original_category_index'] = $original_category_index;

        return $this;
    }

    /**
     * Gets minimum_level
     *
     * @return int|null
     */
    public function getMinimumLevel()
    {
        return $this->container['minimum_level'];
    }

    /**
     * Sets minimum_level
     *
     * @param int|null $minimum_level The minimum character level at which this item is available for sale.
     *
     * @return self
     */
    public function setMinimumLevel($minimum_level)
    {
        $this->container['minimum_level'] = $minimum_level;

        return $this;
    }

    /**
     * Gets maximum_level
     *
     * @return int|null
     */
    public function getMaximumLevel()
    {
        return $this->container['maximum_level'];
    }

    /**
     * Sets maximum_level
     *
     * @param int|null $maximum_level The maximum character level at which this item is available for sale.
     *
     * @return self
     */
    public function setMaximumLevel($maximum_level)
    {
        $this->container['maximum_level'] = $maximum_level;

        return $this;
    }

    /**
     * Gets action
     *
     * @return DestinyDefinitionsDestinyVendorSaleItemActionBlockDefinition|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param DestinyDefinitionsDestinyVendorSaleItemActionBlockDefinition|null $action The action to be performed when purchasing the item, if it's not just \"buy\".
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets display_category
     *
     * @return string|null
     */
    public function getDisplayCategory()
    {
        return $this->container['display_category'];
    }

    /**
     * Sets display_category
     *
     * @param string|null $display_category The string identifier for the category selling this item.
     *
     * @return self
     */
    public function setDisplayCategory($display_category)
    {
        $this->container['display_category'] = $display_category;

        return $this;
    }

    /**
     * Gets inventory_bucket_hash
     *
     * @return int|null
     */
    public function getInventoryBucketHash()
    {
        return $this->container['inventory_bucket_hash'];
    }

    /**
     * Sets inventory_bucket_hash
     *
     * @param int|null $inventory_bucket_hash The inventory bucket into which this item will be placed upon purchase.
     *
     * @return self
     */
    public function setInventoryBucketHash($inventory_bucket_hash)
    {
        $this->container['inventory_bucket_hash'] = $inventory_bucket_hash;

        return $this;
    }

    /**
     * Gets visibility_scope
     *
     * @return int|null
     */
    public function getVisibilityScope()
    {
        return $this->container['visibility_scope'];
    }

    /**
     * Sets visibility_scope
     *
     * @param int|null $visibility_scope The most restrictive scope that determines whether the item is available in the Vendor's inventory. See DestinyGatingScope's documentation for more information.  This can be determined by Unlock gating, or by whether or not the item has purchase level requirements (minimumLevel and maximumLevel properties).
     *
     * @return self
     */
    public function setVisibilityScope($visibility_scope)
    {
        $this->container['visibility_scope'] = $visibility_scope;

        return $this;
    }

    /**
     * Gets purchasable_scope
     *
     * @return int|null
     */
    public function getPurchasableScope()
    {
        return $this->container['purchasable_scope'];
    }

    /**
     * Sets purchasable_scope
     *
     * @param int|null $purchasable_scope Similar to visibilityScope, it represents the most restrictive scope that determines whether the item can be purchased. It will at least be as restrictive as visibilityScope, but could be more restrictive if the item has additional purchase requirements beyond whether it is merely visible or not.  See DestinyGatingScope's documentation for more information.
     *
     * @return self
     */
    public function setPurchasableScope($purchasable_scope)
    {
        $this->container['purchasable_scope'] = $purchasable_scope;

        return $this;
    }

    /**
     * Gets exclusivity
     *
     * @return int|null
     */
    public function getExclusivity()
    {
        return $this->container['exclusivity'];
    }

    /**
     * Sets exclusivity
     *
     * @param int|null $exclusivity If this item can only be purchased by a given platform, this indicates the platform to which it is restricted.
     *
     * @return self
     */
    public function setExclusivity($exclusivity)
    {
        $this->container['exclusivity'] = $exclusivity;

        return $this;
    }

    /**
     * Gets is_offer
     *
     * @return bool|null
     */
    public function getIsOffer()
    {
        return $this->container['is_offer'];
    }

    /**
     * Sets is_offer
     *
     * @param bool|null $is_offer If this sale can only be performed as the result of an offer check, this is true.
     *
     * @return self
     */
    public function setIsOffer($is_offer)
    {
        $this->container['is_offer'] = $is_offer;

        return $this;
    }

    /**
     * Gets is_crm
     *
     * @return bool|null
     */
    public function getIsCrm()
    {
        return $this->container['is_crm'];
    }

    /**
     * Sets is_crm
     *
     * @param bool|null $is_crm If this sale can only be performed as the result of receiving a CRM offer, this is true.
     *
     * @return self
     */
    public function setIsCrm($is_crm)
    {
        $this->container['is_crm'] = $is_crm;

        return $this;
    }

    /**
     * Gets sort_value
     *
     * @return int|null
     */
    public function getSortValue()
    {
        return $this->container['sort_value'];
    }

    /**
     * Sets sort_value
     *
     * @param int|null $sort_value *if* the category this item is in supports non-default sorting, this value should represent the sorting value to use, pre-processed and ready to go.
     *
     * @return self
     */
    public function setSortValue($sort_value)
    {
        $this->container['sort_value'] = $sort_value;

        return $this;
    }

    /**
     * Gets expiration_tooltip
     *
     * @return string|null
     */
    public function getExpirationTooltip()
    {
        return $this->container['expiration_tooltip'];
    }

    /**
     * Sets expiration_tooltip
     *
     * @param string|null $expiration_tooltip If this item can expire, this is the tooltip message to show with its expiration info.
     *
     * @return self
     */
    public function setExpirationTooltip($expiration_tooltip)
    {
        $this->container['expiration_tooltip'] = $expiration_tooltip;

        return $this;
    }

    /**
     * Gets redirect_to_sale_indexes
     *
     * @return int[]|null
     */
    public function getRedirectToSaleIndexes()
    {
        return $this->container['redirect_to_sale_indexes'];
    }

    /**
     * Sets redirect_to_sale_indexes
     *
     * @param int[]|null $redirect_to_sale_indexes If this is populated, the purchase of this item should redirect to purchasing these other items instead.
     *
     * @return self
     */
    public function setRedirectToSaleIndexes($redirect_to_sale_indexes)
    {
        $this->container['redirect_to_sale_indexes'] = $redirect_to_sale_indexes;

        return $this;
    }

    /**
     * Gets socket_overrides
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemSocketOverride[]|null
     */
    public function getSocketOverrides()
    {
        return $this->container['socket_overrides'];
    }

    /**
     * Sets socket_overrides
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyVendorItemSocketOverride[]|null $socket_overrides socket_overrides
     *
     * @return self
     */
    public function setSocketOverrides($socket_overrides)
    {
        $this->container['socket_overrides'] = $socket_overrides;

        return $this;
    }

    /**
     * Gets unpurchasable
     *
     * @return bool|null
     */
    public function getUnpurchasable()
    {
        return $this->container['unpurchasable'];
    }

    /**
     * Sets unpurchasable
     *
     * @param bool|null $unpurchasable If true, this item is some sort of dummy sale item that cannot actually be purchased. It may be a display only item, or some fluff left by a content designer for testing purposes, or something that got disabled because it was a terrible idea. You get the picture. We won't know *why* it can't be purchased, only that it can't be. Sorry.  This is also only whether it's unpurchasable as a static property according to game content. There are other reasons why an item may or may not be purchasable at runtime, so even if this isn't set to True you should trust the runtime value for this sale item over the static definition if this is unset.
     *
     * @return self
     */
    public function setUnpurchasable($unpurchasable)
    {
        $this->container['unpurchasable'] = $unpurchasable;

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


