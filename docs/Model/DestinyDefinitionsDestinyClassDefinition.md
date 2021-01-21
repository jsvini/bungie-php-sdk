# # DestinyDefinitionsDestinyClassDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**class_type** | **int** | In Destiny 1, we added a convenience Enumeration for referring to classes. We&#39;ve kept it, though mostly for posterity. This is the enum value for this definition&#39;s class. | [optional]
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**gendered_class_names** | **map[string,string]** | A localized string referring to the singular form of the Class&#39;s name when referred to in gendered form. Keyed by the DestinyGender. | [optional]
**gendered_class_names_by_gender_hash** | **map[string,string]** |  | [optional]
**mentor_vendor_hash** | **int** | Mentors don&#39;t really mean anything anymore. Don&#39;t expect this to be populated. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
