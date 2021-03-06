# # DestinyDefinitionsMilestonesDestinyMilestoneRewardCategoryDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_hash** | **int** | Identifies the reward category. Only guaranteed unique within this specific component! | [optional]
**category_identifier** | **string** | The string identifier for the category, if you want to use it for some end. Guaranteed unique within the specific component. | [optional]
**display_properties** | [**DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) | Hopefully this is obvious by now. | [optional]
**reward_entries** | [**map[string,\OpenAPI\Client\Model\DestinyDefinitionsMilestonesDestinyMilestoneRewardEntryDefinition]**](DestinyDefinitionsMilestonesDestinyMilestoneRewardEntryDefinition.md) | If this milestone can provide rewards, this will define the sets of rewards that can be earned, the conditions under which they can be acquired, internal data that we&#39;ll use at runtime to determine whether you&#39;ve already earned or redeemed this set of rewards, and the category that this reward should be placed under. | [optional]
**order** | **int** | If you want to use BNet&#39;s recommended order for rendering categories programmatically, use this value and compare it to other categories to determine the order in which they should be rendered. I don&#39;t feel great about putting this here, I won&#39;t lie. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
