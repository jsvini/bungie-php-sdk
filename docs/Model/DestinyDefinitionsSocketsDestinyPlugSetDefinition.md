# # DestinyDefinitionsSocketsDestinyPlugSetDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_properties** | [**DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) | If you want to show these plugs in isolation, these are the display properties for them. | [optional]
**reusable_plug_items** | [**\OpenAPI\Client\Model\DestinyDefinitionsDestinyItemSocketEntryPlugItemRandomizedDefinition[]**](DestinyDefinitionsDestinyItemSocketEntryPlugItemRandomizedDefinition.md) | This is a list of pre-determined plugs that can be plugged into this socket, without the character having the plug in their inventory.  If this list is populated, you will not be allowed to plug an arbitrary item in the socket: you will only be able to choose from one of these reusable plugs. | [optional]
**is_fake_plug_set** | **bool** | Mostly for our debugging or reporting bugs, BNet is making \&quot;fake\&quot; plug sets in a desperate effort to reduce socket sizes.   If this is true, the plug set was generated by BNet: if it looks wrong, that&#39;s a good indicator that it&#39;s bungie.net that fucked this up. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)