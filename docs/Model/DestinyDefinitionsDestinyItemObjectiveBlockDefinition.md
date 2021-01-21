# # DestinyDefinitionsDestinyItemObjectiveBlockDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**objective_hashes** | **int[]** | The hashes to Objectives (DestinyObjectiveDefinition) that are part of this Quest Step, in the order that they should be rendered. | [optional]
**display_activity_hashes** | **int[]** | For every entry in objectiveHashes, there is a corresponding entry in this array at the same index. If the objective is meant to be associated with a specific DestinyActivityDefinition, there will be a valid hash at that index. Otherwise, it will be invalid (0).  Rendered somewhat obsolete by perObjectiveDisplayProperties, which currently has much the same information but may end up with more info in the future. | [optional]
**require_full_objective_completion** | **bool** | If True, all objectives must be completed for the step to be completed. If False, any one objective can be completed for the step to be completed. | [optional]
**questline_item_hash** | **int** | The hash for the DestinyInventoryItemDefinition representing the Quest to which this Quest Step belongs. | [optional]
**narrative** | **string** | The localized string for narrative text related to this quest step, if any. | [optional]
**objective_verb_name** | **string** | The localized string describing an action to be performed associated with the objectives, if any. | [optional]
**quest_type_identifier** | **string** | The identifier for the type of quest being performed, if any. Not associated with any fixed definition, yet. | [optional]
**quest_type_hash** | **int** | A hashed value for the questTypeIdentifier, because apparently I like to be redundant. | [optional]
**per_objective_display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsDestinyObjectiveDisplayProperties[]**](DestinyDefinitionsDestinyObjectiveDisplayProperties.md) | One entry per Objective on the item, it will have related display information. | [optional]
**display_as_stat_tracker** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
