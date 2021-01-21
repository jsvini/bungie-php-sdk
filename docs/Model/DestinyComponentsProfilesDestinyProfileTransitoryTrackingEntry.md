# # DestinyComponentsProfilesDestinyProfileTransitoryTrackingEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_hash** | **int** | OPTIONAL - If this is tracking a DestinyLocationDefinition, this is the identifier for that location. | [optional]
**item_hash** | **int** | OPTIONAL - If this is tracking the status of a DestinyInventoryItemDefinition, this is the identifier for that item. | [optional]
**objective_hash** | **int** | OPTIONAL - If this is tracking the status of a DestinyObjectiveDefinition, this is the identifier for that objective. | [optional]
**activity_hash** | **int** | OPTIONAL - If this is tracking the status of a DestinyActivityDefinition, this is the identifier for that activity. | [optional]
**questline_item_hash** | **int** | OPTIONAL - If this is tracking the status of a quest, this is the identifier for the DestinyInventoryItemDefinition that containst that questline data. | [optional]
**tracked_date** | [**\DateTime**](\DateTime.md) | OPTIONAL - I&#39;ve got to level with you, I don&#39;t really know what this is. Is it when you started tracking it? Is it only populated for tracked items that have time limits?  I don&#39;t know, but we can get at it - when I get time to actually test what it is, I&#39;ll update this. In the meantime, bask in the mysterious data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
