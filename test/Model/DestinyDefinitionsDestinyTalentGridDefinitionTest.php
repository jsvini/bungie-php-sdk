<?php
/**
 * DestinyDefinitionsDestinyTalentGridDefinitionTest
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
 * DestinyDefinitionsDestinyTalentGridDefinitionTest Class Doc Comment
 *
 * @category    Class
 * @description The time has unfortunately come to talk about Talent Grids.  Talent Grids are the most complex and unintuitive part of the Destiny Definition data. Grab a cup of coffee before we begin, I can wait.  Talent Grids were the primary way that items could be customized in Destiny 1. In Destiny 2, for now, talent grids have become exclusively used by Subclass/Build items: but the system is still in place for it to be used by items should the direction change back toward talent grids.  Talent Grids have Nodes: the visual circles on the talent grid detail screen that have icons and can be activated if you meet certain requirements and pay costs. The actual visual data and effects, however, are driven by the \&quot;Steps\&quot; on Talent Nodes. Any given node will have 1:M of these steps, and the specific step that will be considered the \&quot;current\&quot; step (and thus the dictator of all benefits, visual state, and activation requirements on the Node) will almost always not be determined until an instance of the item is created. This is how, in Destiny 1, items were able to have such a wide variety of what users saw as \&quot;Perks\&quot;: they were actually Talent Grids with nodes that had a wide variety of Steps, randomly chosen at the time of item creation.  Now that Talent Grids are used exclusively by subclasses and builds, all of the properties within still apply: but there are additional visual elements on the Subclass/Build screens that are superimposed on top of the talent nodes. Unfortunately, BNet doesn&#39;t have this data: if you want to build a subclass screen, you will have to provide your own \&quot;decorative\&quot; assets, such as the visual connectors between nodes and the fancy colored-fire-bathed character standing behind the nodes.  DestinyInventoryItem.talentGrid.talentGridHash defines an item&#39;s linked Talent Grid, which brings you to this definition that contains enough satic data about talent grids to make your head spin. These *must* be combined with instanced data - found when live data returns DestinyItemTalentGridComponent - in order to derive meaning. The instanced data will reference nodes and steps within these definitions, which you will then have to look up in the definition and combine with the instanced data to give the user the visual representation of their item&#39;s talent grid.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class DestinyDefinitionsDestinyTalentGridDefinitionTest extends TestCase
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
     * Test "DestinyDefinitionsDestinyTalentGridDefinition"
     */
    public function testDestinyDefinitionsDestinyTalentGridDefinition()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "max_grid_level"
     */
    public function testPropertyMaxGridLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "grid_level_per_column"
     */
    public function testPropertyGridLevelPerColumn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "progression_hash"
     */
    public function testPropertyProgressionHash()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nodes"
     */
    public function testPropertyNodes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "exclusive_sets"
     */
    public function testPropertyExclusiveSets()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "independent_node_indexes"
     */
    public function testPropertyIndependentNodeIndexes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "groups"
     */
    public function testPropertyGroups()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "node_categories"
     */
    public function testPropertyNodeCategories()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "hash"
     */
    public function testPropertyHash()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "index"
     */
    public function testPropertyIndex()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "redacted"
     */
    public function testPropertyRedacted()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
