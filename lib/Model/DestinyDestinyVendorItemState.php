<?php
/**
 * DestinyDestinyVendorItemState
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * DestinyDestinyVendorItemState Class Doc Comment
 *
 * @category Class
 * @description The possible states of Destiny Profile Records. IMPORTANT: Any given item can theoretically have many of these states simultaneously: as a result, this was altered to be a flags enumeration/bitmask for v3.2.0.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyVendorItemState
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 4 = 4;
    const 8 = 8;
    const 16 = 16;
    const 32 = 32;
    const 64 = 64;
    const 128 = 128;
    const 256 = 256;
    const 512 = 512;
    const 1024 = 1024;
    const 2048 = 2048;
    const 4096 = 4096;
    const 8192 = 8192;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::1,
            self::2,
            self::4,
            self::8,
            self::16,
            self::32,
            self::64,
            self::128,
            self::256,
            self::512,
            self::1024,
            self::2048,
            self::4096,
            self::8192,
        ];
    }
}


