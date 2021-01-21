# # DestinyHistoricalStatsDestinyPlayer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destiny_user_info** | [**UserUserInfoCard**](UserUserInfoCard.md) | Details about the player as they are known in game (platform display name, Destiny emblem) | [optional]
**character_class** | **string** | Class of the character if applicable and available. | [optional]
**class_hash** | **int** |  | [optional]
**race_hash** | **int** |  | [optional]
**gender_hash** | **int** |  | [optional]
**character_level** | **int** | Level of the character if available. Zero if it is not available. | [optional]
**light_level** | **int** | Light Level of the character if available. Zero if it is not available. | [optional]
**bungie_net_user_info** | [**UserUserInfoCard**](UserUserInfoCard.md) | Details about the player as they are known on BungieNet. This will be undefined if the player has marked their credential private, or does not have a BungieNet account. | [optional]
**clan_name** | **string** | Current clan name for the player. This value may be null or an empty string if the user does not have a clan. | [optional]
**clan_tag** | **string** | Current clan tag for the player. This value may be null or an empty string if the user does not have a clan. | [optional]
**emblem_hash** | **int** | If we know the emblem&#39;s hash, this can be used to look up the player&#39;s emblem at the time of a match when receiving PGCR data, or otherwise their currently equipped emblem (if we are able to obtain it). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
