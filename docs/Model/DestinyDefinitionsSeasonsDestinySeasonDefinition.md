# # DestinyDefinitionsSeasonsDestinySeasonDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**background_image_path** | **string** |  | [optional]
**season_number** | **int** |  | [optional]
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**season_pass_hash** | **int** |  | [optional]
**season_pass_progression_hash** | **int** |  | [optional]
**artifact_item_hash** | **int** |  | [optional]
**seal_presentation_node_hash** | **int** |  | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
