# # DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recent_collectible_hashes** | **int[]** | The list of collectibles determined by the game as having been \&quot;recently\&quot; acquired. | [optional]
**newness_flagged_collectible_hashes** | **int[]** | The list of collectibles determined by the game as having been \&quot;recently\&quot; acquired.  The game client itself actually controls this data, so I personally question whether anyone will get much use out of this: because we can&#39;t edit this value through the API. But in case anyone finds it useful, here it is. | [optional]
**collectibles** | [**map[string,\OpenAPI\Client\Model\DestinyComponentsCollectiblesDestinyCollectibleComponent]**](DestinyComponentsCollectiblesDestinyCollectibleComponent.md) |  | [optional]
**collection_categories_root_node_hash** | **int** | The hash for the root presentation node definition of Collection categories. | [optional]
**collection_badges_root_node_hash** | **int** | The hash for the root presentation node definition of Collection Badges. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
