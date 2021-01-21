<?php
/**
 * GroupsV2GroupQueryTest
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * GroupsV2GroupQueryTest Class Doc Comment
 *
 * @category    Class
 * @description NOTE: GroupQuery, as of Destiny 2, has essentially two totally different and incompatible \&quot;modes\&quot;.  If you are querying for a group, you can pass any of the properties below.  If you are querying for a Clan, you MUST NOT pass any of the following properties (they must be null or undefined in your request, not just empty string/default values):  - groupMemberCountFilter - localeFilter - tagText  If you pass these, you will get a useless InvalidParameters error.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class GroupsV2GroupQueryTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "GroupsV2GroupQuery"
     */
    public function testGroupsV2GroupQuery()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "group_type"
     */
    public function testPropertyGroupType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "creation_date"
     */
    public function testPropertyCreationDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sort_by"
     */
    public function testPropertySortBy()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "group_member_count_filter"
     */
    public function testPropertyGroupMemberCountFilter()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "locale_filter"
     */
    public function testPropertyLocaleFilter()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tag_text"
     */
    public function testPropertyTagText()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "items_per_page"
     */
    public function testPropertyItemsPerPage()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "current_page"
     */
    public function testPropertyCurrentPage()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "request_continuation_token"
     */
    public function testPropertyRequestContinuationToken()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}