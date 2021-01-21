# # DestinyDefinitionsPresentationDestinyPresentationNodeBaseDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**presentation_node_type** | **int** |  | [optional]
**trait_ids** | **string[]** |  | [optional]
**trait_hashes** | **int[]** |  | [optional]
**parent_node_hashes** | **int[]** | A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
