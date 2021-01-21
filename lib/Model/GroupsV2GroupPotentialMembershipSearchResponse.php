<?php
/**
 * GroupsV2GroupPotentialMembershipSearchResponse
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
 * GroupsV2GroupPotentialMembershipSearchResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GroupsV2GroupPotentialMembershipSearchResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupPotentialMembershipSearchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'results' => '\OpenAPI\Client\Model\GroupsV2GroupPotentialMembership[]',
        'total_results' => 'int',
        'has_more' => 'bool',
        'query' => '\OpenAPI\Client\Model\QueriesPagedQuery',
        'replacement_continuation_token' => 'string',
        'use_total_results' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'results' => null,
        'total_results' => 'int32',
        'has_more' => null,
        'query' => null,
        'replacement_continuation_token' => null,
        'use_total_results' => null
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
        'results' => 'results',
        'total_results' => 'totalResults',
        'has_more' => 'hasMore',
        'query' => 'query',
        'replacement_continuation_token' => 'replacementContinuationToken',
        'use_total_results' => 'useTotalResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'results' => 'setResults',
        'total_results' => 'setTotalResults',
        'has_more' => 'setHasMore',
        'query' => 'setQuery',
        'replacement_continuation_token' => 'setReplacementContinuationToken',
        'use_total_results' => 'setUseTotalResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'results' => 'getResults',
        'total_results' => 'getTotalResults',
        'has_more' => 'getHasMore',
        'query' => 'getQuery',
        'replacement_continuation_token' => 'getReplacementContinuationToken',
        'use_total_results' => 'getUseTotalResults'
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
        $this->container['results'] = $data['results'] ?? null;
        $this->container['total_results'] = $data['total_results'] ?? null;
        $this->container['has_more'] = $data['has_more'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['replacement_continuation_token'] = $data['replacement_continuation_token'] ?? null;
        $this->container['use_total_results'] = $data['use_total_results'] ?? null;
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
     * Gets results
     *
     * @return \OpenAPI\Client\Model\GroupsV2GroupPotentialMembership[]|null
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \OpenAPI\Client\Model\GroupsV2GroupPotentialMembership[]|null $results results
     *
     * @return self
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets total_results
     *
     * @return int|null
     */
    public function getTotalResults()
    {
        return $this->container['total_results'];
    }

    /**
     * Sets total_results
     *
     * @param int|null $total_results total_results
     *
     * @return self
     */
    public function setTotalResults($total_results)
    {
        $this->container['total_results'] = $total_results;

        return $this;
    }

    /**
     * Gets has_more
     *
     * @return bool|null
     */
    public function getHasMore()
    {
        return $this->container['has_more'];
    }

    /**
     * Sets has_more
     *
     * @param bool|null $has_more has_more
     *
     * @return self
     */
    public function setHasMore($has_more)
    {
        $this->container['has_more'] = $has_more;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \OpenAPI\Client\Model\QueriesPagedQuery|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \OpenAPI\Client\Model\QueriesPagedQuery|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets replacement_continuation_token
     *
     * @return string|null
     */
    public function getReplacementContinuationToken()
    {
        return $this->container['replacement_continuation_token'];
    }

    /**
     * Sets replacement_continuation_token
     *
     * @param string|null $replacement_continuation_token replacement_continuation_token
     *
     * @return self
     */
    public function setReplacementContinuationToken($replacement_continuation_token)
    {
        $this->container['replacement_continuation_token'] = $replacement_continuation_token;

        return $this;
    }

    /**
     * Gets use_total_results
     *
     * @return bool|null
     */
    public function getUseTotalResults()
    {
        return $this->container['use_total_results'];
    }

    /**
     * Sets use_total_results
     *
     * @param bool|null $use_total_results If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one.
     *
     * @return self
     */
    public function setUseTotalResults($use_total_results)
    {
        $this->container['use_total_results'] = $use_total_results;

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


