# # DestinyDefinitionsRecordsDestinyRecordDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**scope** | **int** | Indicates whether this Record&#39;s state is determined on a per-character or on an account-wide basis. | [optional]
**presentation_info** | [**\OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock**](DestinyDefinitionsPresentationDestinyPresentationChildBlock.md) |  | [optional]
**lore_hash** | **int** |  | [optional]
**objective_hashes** | **int[]** |  | [optional]
**record_value_style** | **int** |  | [optional]
**title_info** | [**\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock**](DestinyDefinitionsRecordsDestinyRecordTitleBlock.md) |  | [optional]
**completion_info** | [**\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock**](DestinyDefinitionsRecordsDestinyRecordCompletionBlock.md) |  | [optional]
**state_info** | [**\OpenAPI\Client\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock**](DestinyDefinitionsRecordsSchemaRecordStateBlock.md) |  | [optional]
**requirements** | [**\OpenAPI\Client\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock**](DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock.md) |  | [optional]
**expiration_info** | [**\OpenAPI\Client\Model\DestinyDefinitionsRecordsDestinyRecordExpirationBlock**](DestinyDefinitionsRecordsDestinyRecordExpirationBlock.md) |  | [optional]
**interval_info** | [**DestinyDefinitionsRecordsDestinyRecordIntervalBlock**](DestinyDefinitionsRecordsDestinyRecordIntervalBlock.md) | Some records have multiple &#39;interval&#39; objectives, and the record may be claimed at each completed interval | [optional]
**reward_items** | [**\OpenAPI\Client\Model\DestinyDestinyItemQuantity[]**](DestinyDestinyItemQuantity.md) | If there is any publicly available information about rewards earned for achieving this record, this is the list of those items.   However, note that some records intentionally have \&quot;hidden\&quot; rewards. These will not be returned in this list. | [optional]
**presentation_node_type** | **int** |  | [optional]
**trait_ids** | **string[]** |  | [optional]
**trait_hashes** | **int[]** |  | [optional]
**parent_node_hashes** | **int[]** | A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
