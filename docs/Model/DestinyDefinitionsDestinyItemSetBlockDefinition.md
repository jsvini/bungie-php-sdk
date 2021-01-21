# # DestinyDefinitionsDestinyItemSetBlockDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_list** | [**\OpenAPI\Client\Model\DestinyDefinitionsDestinyItemSetBlockEntryDefinition[]**](DestinyDefinitionsDestinyItemSetBlockEntryDefinition.md) | A collection of hashes of set items, for items such as Quest Metadata items that possess this data. | [optional]
**require_ordered_set_item_add** | **bool** | If true, items in the set can only be added in increasing order, and adding an item will remove any previous item. For Quests, this is by necessity true. Only one quest step is present at a time, and previous steps are removed as you advance in the quest. | [optional]
**set_is_featured** | **bool** | If true, the UI should treat this quest as \&quot;featured\&quot; | [optional]
**set_type** | **string** | A string identifier we can use to attempt to identify the category of the Quest. | [optional]
**quest_line_name** | **string** | The name of the quest line that this quest step is a part of. | [optional]
**quest_line_description** | **string** | The description of the quest line that this quest step is a part of. | [optional]
**quest_step_summary** | **string** | An additional summary of this step in the quest line. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
