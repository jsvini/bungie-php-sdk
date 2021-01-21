# OpenAPI\Client\Destiny2Api

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**destiny2AwaGetActionToken()**](Destiny2Api.md#destiny2AwaGetActionToken) | **GET** /Destiny2/Awa/GetActionToken/{correlationId}/ | 
[**destiny2AwaInitializeRequest()**](Destiny2Api.md#destiny2AwaInitializeRequest) | **POST** /Destiny2/Awa/Initialize/ | 
[**destiny2AwaProvideAuthorizationResult()**](Destiny2Api.md#destiny2AwaProvideAuthorizationResult) | **POST** /Destiny2/Awa/AwaProvideAuthorizationResult/ | 
[**destiny2EquipItem()**](Destiny2Api.md#destiny2EquipItem) | **POST** /Destiny2/Actions/Items/EquipItem/ | 
[**destiny2EquipItems()**](Destiny2Api.md#destiny2EquipItems) | **POST** /Destiny2/Actions/Items/EquipItems/ | 
[**destiny2GetActivityHistory()**](Destiny2Api.md#destiny2GetActivityHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/ | 
[**destiny2GetCharacter()**](Destiny2Api.md#destiny2GetCharacter) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/ | 
[**destiny2GetClanAggregateStats()**](Destiny2Api.md#destiny2GetClanAggregateStats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
[**destiny2GetClanLeaderboards()**](Destiny2Api.md#destiny2GetClanLeaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
[**destiny2GetClanWeeklyRewardState()**](Destiny2Api.md#destiny2GetClanWeeklyRewardState) | **GET** /Destiny2/Clan/{groupId}/WeeklyRewardState/ | 
[**destiny2GetCollectibleNodeDetails()**](Destiny2Api.md#destiny2GetCollectibleNodeDetails) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/ | 
[**destiny2GetDestinyAggregateActivityStats()**](Destiny2Api.md#destiny2GetDestinyAggregateActivityStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/ | 
[**destiny2GetDestinyEntityDefinition()**](Destiny2Api.md#destiny2GetDestinyEntityDefinition) | **GET** /Destiny2/Manifest/{entityType}/{hashIdentifier}/ | 
[**destiny2GetDestinyManifest()**](Destiny2Api.md#destiny2GetDestinyManifest) | **GET** /Destiny2/Manifest/ | 
[**destiny2GetHistoricalStats()**](Destiny2Api.md#destiny2GetHistoricalStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/ | 
[**destiny2GetHistoricalStatsDefinition()**](Destiny2Api.md#destiny2GetHistoricalStatsDefinition) | **GET** /Destiny2/Stats/Definition/ | 
[**destiny2GetHistoricalStatsForAccount()**](Destiny2Api.md#destiny2GetHistoricalStatsForAccount) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/ | 
[**destiny2GetItem()**](Destiny2Api.md#destiny2GetItem) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/ | 
[**destiny2GetLeaderboards()**](Destiny2Api.md#destiny2GetLeaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
[**destiny2GetLeaderboardsForCharacter()**](Destiny2Api.md#destiny2GetLeaderboardsForCharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**destiny2GetLinkedProfiles()**](Destiny2Api.md#destiny2GetLinkedProfiles) | **GET** /Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/ | 
[**destiny2GetPostGameCarnageReport()**](Destiny2Api.md#destiny2GetPostGameCarnageReport) | **GET** /Destiny2/Stats/PostGameCarnageReport/{activityId}/ | 
[**destiny2GetProfile()**](Destiny2Api.md#destiny2GetProfile) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/ | 
[**destiny2GetPublicMilestoneContent()**](Destiny2Api.md#destiny2GetPublicMilestoneContent) | **GET** /Destiny2/Milestones/{milestoneHash}/Content/ | 
[**destiny2GetPublicMilestones()**](Destiny2Api.md#destiny2GetPublicMilestones) | **GET** /Destiny2/Milestones/ | 
[**destiny2GetPublicVendors()**](Destiny2Api.md#destiny2GetPublicVendors) | **GET** /Destiny2/Vendors/ | 
[**destiny2GetUniqueWeaponHistory()**](Destiny2Api.md#destiny2GetUniqueWeaponHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/ | 
[**destiny2GetVendor()**](Destiny2Api.md#destiny2GetVendor) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/ | 
[**destiny2GetVendors()**](Destiny2Api.md#destiny2GetVendors) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/ | 
[**destiny2InsertSocketPlug()**](Destiny2Api.md#destiny2InsertSocketPlug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
[**destiny2PullFromPostmaster()**](Destiny2Api.md#destiny2PullFromPostmaster) | **POST** /Destiny2/Actions/Items/PullFromPostmaster/ | 
[**destiny2ReportOffensivePostGameCarnageReportPlayer()**](Destiny2Api.md#destiny2ReportOffensivePostGameCarnageReportPlayer) | **POST** /Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/ | 
[**destiny2SearchDestinyEntities()**](Destiny2Api.md#destiny2SearchDestinyEntities) | **GET** /Destiny2/Armory/Search/{type}/{searchTerm}/ | 
[**destiny2SearchDestinyPlayer()**](Destiny2Api.md#destiny2SearchDestinyPlayer) | **GET** /Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/ | 
[**destiny2SetItemLockState()**](Destiny2Api.md#destiny2SetItemLockState) | **POST** /Destiny2/Actions/Items/SetLockState/ | 
[**destiny2SetQuestTrackedState()**](Destiny2Api.md#destiny2SetQuestTrackedState) | **POST** /Destiny2/Actions/Items/SetTrackedState/ | 
[**destiny2TransferItem()**](Destiny2Api.md#destiny2TransferItem) | **POST** /Destiny2/Actions/Items/TransferItem/ | 


## `destiny2AwaGetActionToken()`

```php
destiny2AwaGetActionToken($correlation_id): \OpenAPI\Client\Model\InlineResponse20061
```



Returns the action token if user approves the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correlation_id = 'correlation_id_example'; // string | The identifier for the advanced write action request.

try {
    $result = $apiInstance->destiny2AwaGetActionToken($correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaGetActionToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| The identifier for the advanced write action request. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2AwaInitializeRequest()`

```php
destiny2AwaInitializeRequest(): \OpenAPI\Client\Model\InlineResponse20060
```



Initialize a request to perform an advanced write action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2AwaInitializeRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaInitializeRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2AwaProvideAuthorizationResult()`

```php
destiny2AwaProvideAuthorizationResult(): \OpenAPI\Client\Model\InlineResponse20023
```



Provide the result of the user interaction. Called by the Bungie Destiny App to approve or reject a request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2AwaProvideAuthorizationResult();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaProvideAuthorizationResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2EquipItem()`

```php
destiny2EquipItem(): \OpenAPI\Client\Model\InlineResponse20023
```



Equip an item. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2EquipItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2EquipItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2EquipItems()`

```php
destiny2EquipItems(): \OpenAPI\Client\Model\InlineResponse20046
```



Equip a list of items by itemInstanceIds. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Any items not found on your character will be ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2EquipItems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2EquipItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetActivityHistory()`

```php
destiny2GetActivityHistory($character_id, $destiny_membership_id, $membership_type, $count, $mode, $page): \OpenAPI\Client\Model\InlineResponse20055
```



Gets activity history stats for indicated character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The id of the character to retrieve.
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$count = 56; // int | Number of rows to return
$mode = 56; // int | A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->destiny2GetActivityHistory($character_id, $destiny_membership_id, $membership_type, $count, $mode, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetActivityHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The id of the character to retrieve. |
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **count** | **int**| Number of rows to return | [optional]
 **mode** | **int**| A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation. | [optional]
 **page** | **int**| Page number to return, starting with 0. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetCharacter()`

```php
destiny2GetCharacter($character_id, $destiny_membership_id, $membership_type, $components): \OpenAPI\Client\Model\InlineResponse20039
```



Returns character information for the supplied character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | ID of the character.
$destiny_membership_id = 56; // int | Destiny membership ID.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetCharacter($character_id, $destiny_membership_id, $membership_type, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetCharacter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| ID of the character. |
 **destiny_membership_id** | **int**| Destiny membership ID. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetClanAggregateStats()`

```php
destiny2GetClanAggregateStats($group_id, $modes): \OpenAPI\Client\Model\InlineResponse20051
```



Gets aggregated stats for a clan using the same categories as the clan leaderboards. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Group ID of the clan whose leaderboards you wish to fetch.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.

try {
    $result = $apiInstance->destiny2GetClanAggregateStats($group_id, $modes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanAggregateStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the clan whose leaderboards you wish to fetch. |
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetClanLeaderboards()`

```php
destiny2GetClanLeaderboards($group_id, $maxtop, $modes, $statid): \OpenAPI\Client\Model\InlineResponse20050
```



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Group ID of the clan whose leaderboards you wish to fetch.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetClanLeaderboards($group_id, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanLeaderboards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the clan whose leaderboards you wish to fetch. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetClanWeeklyRewardState()`

```php
destiny2GetClanWeeklyRewardState($group_id): \OpenAPI\Client\Model\InlineResponse20040
```



Returns information on the weekly clan rewards and if the clan has earned them or not. Note that this will always report rewards as not redeemed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | A valid group id of clan.

try {
    $result = $apiInstance->destiny2GetClanWeeklyRewardState($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanWeeklyRewardState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| A valid group id of clan. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetCollectibleNodeDetails()`

```php
destiny2GetCollectibleNodeDetails($character_id, $collectible_presentation_node_hash, $destiny_membership_id, $membership_type, $components): \OpenAPI\Client\Model\InlineResponse20045
```



Given a Presentation Node that has Collectibles as direct descendants, this will return item details about those descendants in the context of the requesting character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The Destiny Character ID of the character for whom we're getting collectible detail info.
$collectible_presentation_node_hash = 56; // int | The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node.
$destiny_membership_id = 56; // int | Destiny membership ID of another user. You may be denied.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetCollectibleNodeDetails($character_id, $collectible_presentation_node_hash, $destiny_membership_id, $membership_type, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetCollectibleNodeDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The Destiny Character ID of the character for whom we&#39;re getting collectible detail info. |
 **collectible_presentation_node_hash** | **int**| The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node. |
 **destiny_membership_id** | **int**| Destiny membership ID of another user. You may be denied. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetDestinyAggregateActivityStats()`

```php
destiny2GetDestinyAggregateActivityStats($character_id, $destiny_membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20057
```



Gets all activities the character has participated in together with aggregate statistics for those activities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The specific character whose activities should be returned.
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->destiny2GetDestinyAggregateActivityStats($character_id, $destiny_membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyAggregateActivityStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The specific character whose activities should be returned. |
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetDestinyEntityDefinition()`

```php
destiny2GetDestinyEntityDefinition($entity_type, $hash_identifier): \OpenAPI\Client\Model\InlineResponse20035
```



Returns the static definition of an entity of the given Type and hash identifier. Examine the API Documentation for the Type Names of entities that have their own definitions. Note that the return type will always *inherit from* DestinyDefinition, but the specific type returned will be the requested entity type if it can be found. Please don't use this as a chatty alternative to the Manifest database if you require large sets of data, but for simple and one-off accesses this should be handy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_type = 'entity_type_example'; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is tentatively in final form, but there may be bugs that prevent desirable operation.
$hash_identifier = 56; // int | The hash identifier for the specific Entity you want returned.

try {
    $result = $apiInstance->destiny2GetDestinyEntityDefinition($entity_type, $hash_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyEntityDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| The type of entity for whom you would like results. These correspond to the entity&#39;s definition contract name. For instance, if you are looking for items, this property should be &#39;DestinyInventoryItemDefinition&#39;. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is tentatively in final form, but there may be bugs that prevent desirable operation. |
 **hash_identifier** | **int**| The hash identifier for the specific Entity you want returned. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetDestinyManifest()`

```php
destiny2GetDestinyManifest(): \OpenAPI\Client\Model\InlineResponse20034
```



Returns the current version of the manifest as a json object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetDestinyManifest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetHistoricalStats()`

```php
destiny2GetHistoricalStats($character_id, $destiny_membership_id, $membership_type, $dayend, $daystart, $groups, $modes, $period_type): \OpenAPI\Client\Model\InlineResponse20053
```



Gets historical stats for indicated character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters.
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$dayend = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last day to return when daily stats are requested. Use the format YYYY-MM-DD. Currently, we cannot allow more than 31 days of daily data to be requested in a single request.
$daystart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | First day to return when daily stats are requested. Use the format YYYY-MM-DD. Currently, we cannot allow more than 31 days of daily data to be requested in a single request.
$groups = array(56); // int[] | Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals
$modes = array(56); // int[] | Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$period_type = 56; // int | Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity

try {
    $result = $apiInstance->destiny2GetHistoricalStats($character_id, $destiny_membership_id, $membership_type, $dayend, $daystart, $groups, $modes, $period_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters. |
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **dayend** | **\DateTime**| Last day to return when daily stats are requested. Use the format YYYY-MM-DD. Currently, we cannot allow more than 31 days of daily data to be requested in a single request. | [optional]
 **daystart** | **\DateTime**| First day to return when daily stats are requested. Use the format YYYY-MM-DD. Currently, we cannot allow more than 31 days of daily data to be requested in a single request. | [optional]
 **groups** | [**int[]**](../Model/int.md)| Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals | [optional]
 **modes** | [**int[]**](../Model/int.md)| Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **period_type** | **int**| Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetHistoricalStatsDefinition()`

```php
destiny2GetHistoricalStatsDefinition(): \OpenAPI\Client\Model\InlineResponse20049
```



Gets historical stats definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetHistoricalStatsDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStatsDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetHistoricalStatsForAccount()`

```php
destiny2GetHistoricalStatsForAccount($destiny_membership_id, $membership_type, $groups): \OpenAPI\Client\Model\InlineResponse20054
```



Gets aggregate historical stats organized around each character for a given account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$groups = array(56); // int[] | Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals.

try {
    $result = $apiInstance->destiny2GetHistoricalStatsForAccount($destiny_membership_id, $membership_type, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStatsForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **groups** | [**int[]**](../Model/int.md)| Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetItem()`

```php
destiny2GetItem($destiny_membership_id, $item_instance_id, $membership_type, $components): \OpenAPI\Client\Model\InlineResponse20041
```



Retrieve the details of an instanced Destiny Item. An instanced Destiny item is one with an ItemInstanceId. Non-instanced items, such as materials, have no useful instance-specific details and thus are not queryable here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destiny_membership_id = 56; // int | The membership ID of the destiny profile.
$item_instance_id = 56; // int | The Instance ID of the destiny item.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetItem($destiny_membership_id, $item_instance_id, $membership_type, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destiny_membership_id** | **int**| The membership ID of the destiny profile. |
 **item_instance_id** | **int**| The Instance ID of the destiny item. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetLeaderboards()`

```php
destiny2GetLeaderboards($destiny_membership_id, $membership_type, $maxtop, $modes, $statid): \OpenAPI\Client\Model\InlineResponse20050
```



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been implemented. It is being returned for a preview of future functionality, and for public comment/suggestion/preparation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetLeaderboards($destiny_membership_id, $membership_type, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLeaderboards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetLeaderboardsForCharacter()`

```php
destiny2GetLeaderboardsForCharacter($character_id, $destiny_membership_id, $membership_type, $maxtop, $modes, $statid): \OpenAPI\Client\Model\InlineResponse20050
```



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The specific character to build the leaderboard around for the provided Destiny Membership.
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetLeaderboardsForCharacter($character_id, $destiny_membership_id, $membership_type, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The specific character to build the leaderboard around for the provided Destiny Membership. |
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetLinkedProfiles()`

```php
destiny2GetLinkedProfiles($membership_id, $membership_type, $get_all_memberships): \OpenAPI\Client\Model\InlineResponse20037
```



Returns a summary information about all profiles linked to the requesting membership type/membership ID that have valid Destiny information. The passed-in Membership Type/Membership ID may be a Bungie.Net membership or a Destiny membership. It only returns the minimal amount of data to begin making more substantive requests, but will hopefully serve as a useful alternative to UserServices for people who just care about Destiny data. Note that it will only return linked accounts whose linkages you are allowed to view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_id = 56; // int | The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don't pass us a PSN membership ID and the XBox membership type, it's not going to work!
$membership_type = 56; // int | The type for the membership whose linked Destiny accounts you want returned.
$get_all_memberships = True; // bool | (optional) if set to 'true', all memberships regardless of whether they're obscured by overrides will be returned. Normal privacy restrictions on account linking will still apply no matter what.

try {
    $result = $apiInstance->destiny2GetLinkedProfiles($membership_id, $membership_type, $get_all_memberships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLinkedProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_id** | **int**| The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don&#39;t pass us a PSN membership ID and the XBox membership type, it&#39;s not going to work! |
 **membership_type** | **int**| The type for the membership whose linked Destiny accounts you want returned. |
 **get_all_memberships** | **bool**| (optional) if set to &#39;true&#39;, all memberships regardless of whether they&#39;re obscured by overrides will be returned. Normal privacy restrictions on account linking will still apply no matter what. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetPostGameCarnageReport()`

```php
destiny2GetPostGameCarnageReport($activity_id): \OpenAPI\Client\Model\InlineResponse20048
```



Gets the available post game carnage report for the activity ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activity_id = 56; // int | The ID of the activity whose PGCR is requested.

try {
    $result = $apiInstance->destiny2GetPostGameCarnageReport($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPostGameCarnageReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| The ID of the activity whose PGCR is requested. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetProfile()`

```php
destiny2GetProfile($destiny_membership_id, $membership_type, $components): \OpenAPI\Client\Model\InlineResponse20038
```



Returns Destiny Profile information for the supplied membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destiny_membership_id = 56; // int | Destiny membership ID.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetProfile($destiny_membership_id, $membership_type, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destiny_membership_id** | **int**| Destiny membership ID. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetPublicMilestoneContent()`

```php
destiny2GetPublicMilestoneContent($milestone_hash): \OpenAPI\Client\Model\InlineResponse20058
```



Gets custom localized content for the milestone of the given hash, if it exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$milestone_hash = 56; // int | The identifier for the milestone to be returned.

try {
    $result = $apiInstance->destiny2GetPublicMilestoneContent($milestone_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPublicMilestoneContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestone_hash** | **int**| The identifier for the milestone to be returned. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetPublicMilestones()`

```php
destiny2GetPublicMilestones(): \OpenAPI\Client\Model\InlineResponse20059
```



Gets public information about currently available Milestones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetPublicMilestones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPublicMilestones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetPublicVendors()`

```php
destiny2GetPublicVendors($components): \OpenAPI\Client\Model\InlineResponse20044
```



Get items available from vendors where the vendors have items for sale that are common for everyone. If any portion of the Vendor's available inventory is character or account specific, we will be unable to return their data from this endpoint due to the way that available inventory is computed. As I am often guilty of saying: 'It's a long story...'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetPublicVendors($components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPublicVendors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetUniqueWeaponHistory()`

```php
destiny2GetUniqueWeaponHistory($character_id, $destiny_membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20056
```



Gets details about unique weapon usage, including all exotic weapons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The id of the character to retrieve.
$destiny_membership_id = 56; // int | The Destiny membershipId of the user to retrieve.
$membership_type = 56; // int | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->destiny2GetUniqueWeaponHistory($character_id, $destiny_membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetUniqueWeaponHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The id of the character to retrieve. |
 **destiny_membership_id** | **int**| The Destiny membershipId of the user to retrieve. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetVendor()`

```php
destiny2GetVendor($character_id, $destiny_membership_id, $membership_type, $vendor_hash, $components): \OpenAPI\Client\Model\InlineResponse20043
```



Get the details of a specific Vendor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destiny_membership_id = 56; // int | Destiny membership ID of another user. You may be denied.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$vendor_hash = 56; // int | The Hash identifier of the Vendor to be returned.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetVendor($character_id, $destiny_membership_id, $membership_type, $vendor_hash, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetVendor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destiny_membership_id** | **int**| Destiny membership ID of another user. You may be denied. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **vendor_hash** | **int**| The Hash identifier of the Vendor to be returned. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2GetVendors()`

```php
destiny2GetVendors($character_id, $destiny_membership_id, $membership_type, $components, $filter): \OpenAPI\Client\Model\InlineResponse20042
```



Get currently available vendors from the list of vendors that can possibly have rotating inventory. Note that this does not include things like preview vendors and vendors-as-kiosks, neither of whom have rotating/dynamic inventories. Use their definitions as-is for those.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destiny_membership_id = 56; // int | Destiny membership ID of another user. You may be denied.
$membership_type = 56; // int | A valid non-BungieNet membership type.
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.
$filter = 56; // int | The filter of what vendors and items to return, if any.

try {
    $result = $apiInstance->destiny2GetVendors($character_id, $destiny_membership_id, $membership_type, $components, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetVendors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destiny_membership_id** | **int**| Destiny membership ID of another user. You may be denied. |
 **membership_type** | **int**| A valid non-BungieNet membership type. |
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]
 **filter** | **int**| The filter of what vendors and items to return, if any. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2InsertSocketPlug()`

```php
destiny2InsertSocketPlug(): \OpenAPI\Client\Model\InlineResponse20047
```



Insert a plug into a socketed item. I know how it sounds, but I assure you it's much more G-rated than you might be guessing. We haven't decided yet whether this will be able to insert plugs that have side effects, but if we do it will require special scope permission for an application attempting to do so. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Request must include proof of permission for 'InsertPlugs' from the account owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2InsertSocketPlug();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2InsertSocketPlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2PullFromPostmaster()`

```php
destiny2PullFromPostmaster(): \OpenAPI\Client\Model\InlineResponse20023
```



Extract an item from the Postmaster, with whatever implications that may entail. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2PullFromPostmaster();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2PullFromPostmaster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2ReportOffensivePostGameCarnageReportPlayer()`

```php
destiny2ReportOffensivePostGameCarnageReportPlayer($activity_id): \OpenAPI\Client\Model\InlineResponse20023
```



Report a player that you met in an activity that was engaging in ToS-violating activities. Both you and the offending player must have played in the activityId passed in. Please use this judiciously and only when you have strong suspicions of violation, pretty please.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 56; // int | The ID of the activity where you ran into the brigand that you're reporting.

try {
    $result = $apiInstance->destiny2ReportOffensivePostGameCarnageReportPlayer($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2ReportOffensivePostGameCarnageReportPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| The ID of the activity where you ran into the brigand that you&#39;re reporting. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2SearchDestinyEntities()`

```php
destiny2SearchDestinyEntities($search_term, $type, $page): \OpenAPI\Client\Model\InlineResponse20052
```



Gets a page list of Destiny items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_term = 'search_term_example'; // string | The string to use when searching for Destiny entities.
$type = 'type_example'; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->destiny2SearchDestinyEntities($search_term, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SearchDestinyEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| The string to use when searching for Destiny entities. |
 **type** | **string**| The type of entity for whom you would like results. These correspond to the entity&#39;s definition contract name. For instance, if you are looking for items, this property should be &#39;DestinyInventoryItemDefinition&#39;. |
 **page** | **int**| Page number to return, starting with 0. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2SearchDestinyPlayer()`

```php
destiny2SearchDestinyPlayer($display_name, $membership_type, $return_original_profile): \OpenAPI\Client\Model\InlineResponse20036
```



Returns a list of Destiny memberships given a full Gamertag or PSN ID. Unless you pass returnOriginalProfile=true, this will return membership information for the users' Primary Cross Save Profile if they are engaged in cross save rather than any original Destiny profile that is now being overridden.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$display_name = 'display_name_example'; // string | The full gamertag or PSN id of the player. Spaces and case are ignored.
$membership_type = 56; // int | A valid non-BungieNet membership type, or All.
$return_original_profile = True; // bool | (optional) If passed in and set to true, we will return the original Destiny Profile(s) linked to that gamertag, and not their currently active Destiny Profile.

try {
    $result = $apiInstance->destiny2SearchDestinyPlayer($display_name, $membership_type, $return_original_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SearchDestinyPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **display_name** | **string**| The full gamertag or PSN id of the player. Spaces and case are ignored. |
 **membership_type** | **int**| A valid non-BungieNet membership type, or All. |
 **return_original_profile** | **bool**| (optional) If passed in and set to true, we will return the original Destiny Profile(s) linked to that gamertag, and not their currently active Destiny Profile. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2SetItemLockState()`

```php
destiny2SetItemLockState(): \OpenAPI\Client\Model\InlineResponse20023
```



Set the Lock State for an instanced item. You must have a valid Destiny Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2SetItemLockState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SetItemLockState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2SetQuestTrackedState()`

```php
destiny2SetQuestTrackedState(): \OpenAPI\Client\Model\InlineResponse20023
```



Set the Tracking State for an instanced item, if that item is a Quest or Bounty. You must have a valid Destiny Account. Yeah, it's an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2SetQuestTrackedState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SetQuestTrackedState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destiny2TransferItem()`

```php
destiny2TransferItem(): \OpenAPI\Client\Model\InlineResponse20023
```



Transfer an item to/from your vault. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item. itshappening.gif

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2TransferItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2TransferItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
