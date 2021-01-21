<?php
/**
 * DestinyDestinyComponentType
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
 * DestinyDestinyComponentType Class Doc Comment
 *
 * @category Class
 * @description Represents the possible components that can be returned from Destiny \&quot;Get\&quot; calls such as GetProfile, GetCharacter, GetVendor etc...  When making one of these requests, you will pass one or more of these components as a comma separated list in the \&quot;?components&#x3D;\&quot; querystring parameter. For instance, if you want baseline Profile data, Character Data, and character progressions, you would pass \&quot;?components&#x3D;Profiles,Characters,CharacterProgressions\&quot; You may use either the numerical or string values.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyComponentType
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 100 = 100;
    const 101 = 101;
    const 102 = 102;
    const 103 = 103;
    const 104 = 104;
    const 105 = 105;
    const 200 = 200;
    const 201 = 201;
    const 202 = 202;
    const 203 = 203;
    const 204 = 204;
    const 205 = 205;
    const 300 = 300;
    const 301 = 301;
    const 302 = 302;
    const 303 = 303;
    const 304 = 304;
    const 305 = 305;
    const 306 = 306;
    const 307 = 307;
    const 308 = 308;
    const 309 = 309;
    const 310 = 310;
    const 400 = 400;
    const 401 = 401;
    const 402 = 402;
    const 500 = 500;
    const 600 = 600;
    const 700 = 700;
    const 800 = 800;
    const 900 = 900;
    const 1000 = 1000;
    const 1100 = 1100;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::100,
            self::101,
            self::102,
            self::103,
            self::104,
            self::105,
            self::200,
            self::201,
            self::202,
            self::203,
            self::204,
            self::205,
            self::300,
            self::301,
            self::302,
            self::303,
            self::304,
            self::305,
            self::306,
            self::307,
            self::308,
            self::309,
            self::310,
            self::400,
            self::401,
            self::402,
            self::500,
            self::600,
            self::700,
            self::800,
            self::900,
            self::1000,
            self::1100,
        ];
    }
}


