<?php
/**
 * DestinyDefinitionsRecordsDestinyRecordCompletionBlock
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
 * DestinyDefinitionsRecordsDestinyRecordCompletionBlock Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinyDefinitionsRecordsDestinyRecordCompletionBlock implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Records.DestinyRecordCompletionBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partial_completion_objective_count_threshold' => 'int',
        'score_value' => 'int',
        'should_fire_toast' => 'bool',
        'toast_style' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'partial_completion_objective_count_threshold' => 'int32',
        'score_value' => 'int32',
        'should_fire_toast' => null,
        'toast_style' => 'int32'
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
        'partial_completion_objective_count_threshold' => 'partialCompletionObjectiveCountThreshold',
        'score_value' => 'ScoreValue',
        'should_fire_toast' => 'shouldFireToast',
        'toast_style' => 'toastStyle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partial_completion_objective_count_threshold' => 'setPartialCompletionObjectiveCountThreshold',
        'score_value' => 'setScoreValue',
        'should_fire_toast' => 'setShouldFireToast',
        'toast_style' => 'setToastStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partial_completion_objective_count_threshold' => 'getPartialCompletionObjectiveCountThreshold',
        'score_value' => 'getScoreValue',
        'should_fire_toast' => 'getShouldFireToast',
        'toast_style' => 'getToastStyle'
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
        $this->container['partial_completion_objective_count_threshold'] = $data['partial_completion_objective_count_threshold'] ?? null;
        $this->container['score_value'] = $data['score_value'] ?? null;
        $this->container['should_fire_toast'] = $data['should_fire_toast'] ?? null;
        $this->container['toast_style'] = $data['toast_style'] ?? null;
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
     * Gets partial_completion_objective_count_threshold
     *
     * @return int|null
     */
    public function getPartialCompletionObjectiveCountThreshold()
    {
        return $this->container['partial_completion_objective_count_threshold'];
    }

    /**
     * Sets partial_completion_objective_count_threshold
     *
     * @param int|null $partial_completion_objective_count_threshold The number of objectives that must be completed before the objective is considered \"complete\"
     *
     * @return self
     */
    public function setPartialCompletionObjectiveCountThreshold($partial_completion_objective_count_threshold)
    {
        $this->container['partial_completion_objective_count_threshold'] = $partial_completion_objective_count_threshold;

        return $this;
    }

    /**
     * Gets score_value
     *
     * @return int|null
     */
    public function getScoreValue()
    {
        return $this->container['score_value'];
    }

    /**
     * Sets score_value
     *
     * @param int|null $score_value score_value
     *
     * @return self
     */
    public function setScoreValue($score_value)
    {
        $this->container['score_value'] = $score_value;

        return $this;
    }

    /**
     * Gets should_fire_toast
     *
     * @return bool|null
     */
    public function getShouldFireToast()
    {
        return $this->container['should_fire_toast'];
    }

    /**
     * Sets should_fire_toast
     *
     * @param bool|null $should_fire_toast should_fire_toast
     *
     * @return self
     */
    public function setShouldFireToast($should_fire_toast)
    {
        $this->container['should_fire_toast'] = $should_fire_toast;

        return $this;
    }

    /**
     * Gets toast_style
     *
     * @return int|null
     */
    public function getToastStyle()
    {
        return $this->container['toast_style'];
    }

    /**
     * Sets toast_style
     *
     * @param int|null $toast_style toast_style
     *
     * @return self
     */
    public function setToastStyle($toast_style)
    {
        $this->container['toast_style'] = $toast_style;

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


