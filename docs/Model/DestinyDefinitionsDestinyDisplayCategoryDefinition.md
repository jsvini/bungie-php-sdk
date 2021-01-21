# # DestinyDefinitionsDestinyDisplayCategoryDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** |  | [optional]
**identifier** | **string** | A string identifier for the display category. | [optional]
**display_category_hash** | **int** |  | [optional]
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**display_in_banner** | **bool** | If true, this category should be displayed in the \&quot;Banner\&quot; section of the vendor&#39;s UI. | [optional]
**progression_hash** | **int** | If it exists, this is the hash identifier of a DestinyProgressionDefinition that represents the progression to show on this display category.  Specific categories can now have thier own distinct progression, apparently. So that&#39;s cool. | [optional]
**sort_order** | **int** | If this category sorts items in a nonstandard way, this will be the way we sort. | [optional]
**display_style_hash** | **int** | An indicator of how the category will be displayed in the UI. It&#39;s up to you to do something cool or interesting in response to this, or just to treat it as a normal category. | [optional]
**display_style_identifier** | **string** | An indicator of how the category will be displayed in the UI. It&#39;s up to you to do something cool or interesting in response to this, or just to treat it as a normal category. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
