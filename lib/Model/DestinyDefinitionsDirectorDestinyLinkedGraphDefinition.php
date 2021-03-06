<?php
/**
 * DestinyDefinitionsDirectorDestinyLinkedGraphDefinition
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
 * DestinyDefinitionsDirectorDestinyLinkedGraphDefinition Class Doc Comment
 *
 * @category Class
 * @description This describes links between the current graph and others, as well as when that link is relevant.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsDirectorDestinyLinkedGraphDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Director.DestinyLinkedGraphDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'name' => 'string',
        'unlock_expression' => '\OpenAPI\Client\Model\DestinyDefinitionsDestinyUnlockExpressionDefinition',
        'linked_graph_id' => 'int',
        'linked_graphs' => '\OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphEntryDefinition[]',
        'overview' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'unlock_expression' => null,
        'linked_graph_id' => 'uint32',
        'linked_graphs' => null,
        'overview' => null
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
        'description' => 'description',
        'name' => 'name',
        'unlock_expression' => 'unlockExpression',
        'linked_graph_id' => 'linkedGraphId',
        'linked_graphs' => 'linkedGraphs',
        'overview' => 'overview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'name' => 'setName',
        'unlock_expression' => 'setUnlockExpression',
        'linked_graph_id' => 'setLinkedGraphId',
        'linked_graphs' => 'setLinkedGraphs',
        'overview' => 'setOverview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'name' => 'getName',
        'unlock_expression' => 'getUnlockExpression',
        'linked_graph_id' => 'getLinkedGraphId',
        'linked_graphs' => 'getLinkedGraphs',
        'overview' => 'getOverview'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['unlock_expression'] = $data['unlock_expression'] ?? null;
        $this->container['linked_graph_id'] = $data['linked_graph_id'] ?? null;
        $this->container['linked_graphs'] = $data['linked_graphs'] ?? null;
        $this->container['overview'] = $data['overview'] ?? null;
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unlock_expression
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDestinyUnlockExpressionDefinition|null
     */
    public function getUnlockExpression()
    {
        return $this->container['unlock_expression'];
    }

    /**
     * Sets unlock_expression
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDestinyUnlockExpressionDefinition|null $unlock_expression unlock_expression
     *
     * @return self
     */
    public function setUnlockExpression($unlock_expression)
    {
        $this->container['unlock_expression'] = $unlock_expression;

        return $this;
    }

    /**
     * Gets linked_graph_id
     *
     * @return int|null
     */
    public function getLinkedGraphId()
    {
        return $this->container['linked_graph_id'];
    }

    /**
     * Sets linked_graph_id
     *
     * @param int|null $linked_graph_id linked_graph_id
     *
     * @return self
     */
    public function setLinkedGraphId($linked_graph_id)
    {
        $this->container['linked_graph_id'] = $linked_graph_id;

        return $this;
    }

    /**
     * Gets linked_graphs
     *
     * @return \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphEntryDefinition[]|null
     */
    public function getLinkedGraphs()
    {
        return $this->container['linked_graphs'];
    }

    /**
     * Sets linked_graphs
     *
     * @param \OpenAPI\Client\Model\DestinyDefinitionsDirectorDestinyLinkedGraphEntryDefinition[]|null $linked_graphs linked_graphs
     *
     * @return self
     */
    public function setLinkedGraphs($linked_graphs)
    {
        $this->container['linked_graphs'] = $linked_graphs;

        return $this;
    }

    /**
     * Gets overview
     *
     * @return string|null
     */
    public function getOverview()
    {
        return $this->container['overview'];
    }

    /**
     * Sets overview
     *
     * @param string|null $overview overview
     *
     * @return self
     */
    public function setOverview($overview)
    {
        $this->container['overview'] = $overview;

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


