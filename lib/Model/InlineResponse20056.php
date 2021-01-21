<?php
/**
 * InlineResponse20056
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
 * InlineResponse20056 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineResponse20056 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_56';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response' => '\OpenAPI\Client\Model\DestinyHistoricalStatsDestinyHistoricalWeaponStatsData',
        'error_code' => 'int',
        'throttle_seconds' => 'int',
        'error_status' => 'string',
        'message' => 'string',
        'message_data' => 'map[string,string]',
        'detailed_error_trace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'response' => null,
        'error_code' => 'int32',
        'throttle_seconds' => 'int32',
        'error_status' => null,
        'message' => null,
        'message_data' => null,
        'detailed_error_trace' => null
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
        'response' => 'Response',
        'error_code' => 'ErrorCode',
        'throttle_seconds' => 'ThrottleSeconds',
        'error_status' => 'ErrorStatus',
        'message' => 'Message',
        'message_data' => 'MessageData',
        'detailed_error_trace' => 'DetailedErrorTrace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'error_code' => 'setErrorCode',
        'throttle_seconds' => 'setThrottleSeconds',
        'error_status' => 'setErrorStatus',
        'message' => 'setMessage',
        'message_data' => 'setMessageData',
        'detailed_error_trace' => 'setDetailedErrorTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'error_code' => 'getErrorCode',
        'throttle_seconds' => 'getThrottleSeconds',
        'error_status' => 'getErrorStatus',
        'message' => 'getMessage',
        'message_data' => 'getMessageData',
        'detailed_error_trace' => 'getDetailedErrorTrace'
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
        $this->container['response'] = $data['response'] ?? null;
        $this->container['error_code'] = $data['error_code'] ?? null;
        $this->container['throttle_seconds'] = $data['throttle_seconds'] ?? null;
        $this->container['error_status'] = $data['error_status'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['message_data'] = $data['message_data'] ?? null;
        $this->container['detailed_error_trace'] = $data['detailed_error_trace'] ?? null;
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
     * Gets response
     *
     * @return \OpenAPI\Client\Model\DestinyHistoricalStatsDestinyHistoricalWeaponStatsData|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \OpenAPI\Client\Model\DestinyHistoricalStatsDestinyHistoricalWeaponStatsData|null $response response
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int|null $error_code error_code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets throttle_seconds
     *
     * @return int|null
     */
    public function getThrottleSeconds()
    {
        return $this->container['throttle_seconds'];
    }

    /**
     * Sets throttle_seconds
     *
     * @param int|null $throttle_seconds throttle_seconds
     *
     * @return self
     */
    public function setThrottleSeconds($throttle_seconds)
    {
        $this->container['throttle_seconds'] = $throttle_seconds;

        return $this;
    }

    /**
     * Gets error_status
     *
     * @return string|null
     */
    public function getErrorStatus()
    {
        return $this->container['error_status'];
    }

    /**
     * Sets error_status
     *
     * @param string|null $error_status error_status
     *
     * @return self
     */
    public function setErrorStatus($error_status)
    {
        $this->container['error_status'] = $error_status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets message_data
     *
     * @return map[string,string]|null
     */
    public function getMessageData()
    {
        return $this->container['message_data'];
    }

    /**
     * Sets message_data
     *
     * @param map[string,string]|null $message_data message_data
     *
     * @return self
     */
    public function setMessageData($message_data)
    {
        $this->container['message_data'] = $message_data;

        return $this;
    }

    /**
     * Gets detailed_error_trace
     *
     * @return string|null
     */
    public function getDetailedErrorTrace()
    {
        return $this->container['detailed_error_trace'];
    }

    /**
     * Sets detailed_error_trace
     *
     * @param string|null $detailed_error_trace detailed_error_trace
     *
     * @return self
     */
    public function setDetailedErrorTrace($detailed_error_trace)
    {
        $this->container['detailed_error_trace'] = $detailed_error_trace;

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


