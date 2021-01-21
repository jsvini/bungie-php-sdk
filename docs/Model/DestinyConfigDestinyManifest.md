# # DestinyConfigDestinyManifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** |  | [optional]
**mobile_asset_content_path** | **string** |  | [optional]
**mobile_gear_asset_data_bases** | [**\OpenAPI\Client\Model\DestinyConfigGearAssetDataBaseDefinition[]**](DestinyConfigGearAssetDataBaseDefinition.md) |  | [optional]
**mobile_world_content_paths** | **map[string,string]** |  | [optional]
**json_world_content_paths** | **map[string,string]** | This points to the generated JSON that contains all the Definitions. Each key is a locale. The value is a path to the aggregated world definitions (warning: large file!) | [optional]
**json_world_component_content_paths** | [**map[string,map[string,string]]**](map.md) | This points to the generated JSON that contains all the Definitions. Each key is a locale. The value is a dictionary, where the key is a definition type by name, and the value is the path to the file for that definition. WARNING: This is unsafe and subject to change - do not depend on data in these files staying around long-term. | [optional]
**mobile_clan_banner_database_path** | **string** |  | [optional]
**mobile_gear_cdn** | **map[string,string]** |  | [optional]
**icon_image_pyramid_info** | [**\OpenAPI\Client\Model\DestinyConfigImagePyramidEntry[]**](DestinyConfigImagePyramidEntry.md) | Information about the \&quot;Image Pyramid\&quot; for Destiny icons. Where possible, we create smaller versions of Destiny icons. These are found as subfolders under the location of the \&quot;original/full size\&quot; Destiny images, with the same file name and extension as the original image itself. (this lets us avoid sending largely redundant path info with every entity, at the expense of the smaller versions of the image being less discoverable) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
