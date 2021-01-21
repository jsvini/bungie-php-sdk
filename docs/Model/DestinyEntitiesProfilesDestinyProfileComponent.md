# # DestinyEntitiesProfilesDestinyProfileComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_info** | [**UserUserInfoCard**](UserUserInfoCard.md) | If you need to render the Profile (their platform name, icon, etc...) somewhere, this property contains that information. | [optional]
**date_last_played** | [**\DateTime**](\DateTime.md) | The last time the user played with any character on this Profile. | [optional]
**versions_owned** | **int** | If you want to know what expansions they own, this will contain that data.   IMPORTANT: This field may not return the data you&#39;re interested in for Cross-Saved users. It returns the last ownership data we saw for this account - which is to say, what they&#39;ve purchased on the platform on which they last played, which now could be a different platform.   If you don&#39;t care about per-platform ownership and only care about whatever platform it seems they are playing on most recently, then this should be \&quot;good enough.\&quot; Otherwise, this should be considered deprecated. We do not have a good alternative to provide at this time with platform specific ownership data for DLC. | [optional]
**character_ids** | **int[]** | A list of the character IDs, for further querying on your part. | [optional]
**season_hashes** | **int[]** | A list of seasons that this profile owns. Unlike versionsOwned, these stay with the profile across Platforms, and thus will be valid.   It turns out that Stadia Pro subscriptions will give access to seasons but only while playing on Stadia and with an active subscription. So some users (users who have Stadia Pro but choose to play on some other platform) won&#39;t see these as available: it will be whatever seasons are available for the platform on which they last played. | [optional]
**current_season_hash** | **int** | If populated, this is a reference to the season that is currently active. | [optional]
**current_season_reward_power_cap** | **int** | If populated, this is the reward power cap for the current season. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
