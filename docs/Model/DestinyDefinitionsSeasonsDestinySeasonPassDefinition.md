# # DestinyDefinitionsSeasonsDestinySeasonPassDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**reward_progression_hash** | **int** | This is the progression definition related to the progression for the initial levels 1-100 that provide item rewards for the Season pass. Further experience after you reach the limit is provided in the \&quot;Prestige\&quot; progression referred to by prestigeProgressionHash. | [optional]
**prestige_progression_hash** | **int** | I know what you&#39;re thinking, but I promise we&#39;re not going to duplicate and drown you. Instead, we&#39;re giving you sweet, sweet power bonuses.   Prestige progression is further progression that you can make on the Season pass after you gain max ranks, that will ultimately increase your power/light level over the theoretical limit. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
