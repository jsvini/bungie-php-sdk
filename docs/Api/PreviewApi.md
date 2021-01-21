# OpenAPI\Client\PreviewApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**destiny2GetClanAggregateStats()**](PreviewApi.md#destiny2GetClanAggregateStats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
[**destiny2GetClanLeaderboards()**](PreviewApi.md#destiny2GetClanLeaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
[**destiny2GetLeaderboards()**](PreviewApi.md#destiny2GetLeaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
[**destiny2GetLeaderboardsForCharacter()**](PreviewApi.md#destiny2GetLeaderboardsForCharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**destiny2GetPublicVendors()**](PreviewApi.md#destiny2GetPublicVendors) | **GET** /Destiny2/Vendors/ | 
[**destiny2InsertSocketPlug()**](PreviewApi.md#destiny2InsertSocketPlug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 


## `destiny2GetClanAggregateStats()`

```php
destiny2GetClanAggregateStats($group_id, $modes): \OpenAPI\Client\Model\InlineResponse20051
```



Gets aggregated stats for a clan using the same categories as the clan leaderboards. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->destiny2GetClanAggregateStats: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->destiny2GetClanLeaderboards: ', $e->getMessage(), PHP_EOL;
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

## `destiny2GetLeaderboards()`

```php
destiny2GetLeaderboards($destiny_membership_id, $membership_type, $maxtop, $modes, $statid): \OpenAPI\Client\Model\InlineResponse20050
```



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been implemented. It is being returned for a preview of future functionality, and for public comment/suggestion/preparation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->destiny2GetLeaderboards: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->destiny2GetLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
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

## `destiny2GetPublicVendors()`

```php
destiny2GetPublicVendors($components): \OpenAPI\Client\Model\InlineResponse20044
```



Get items available from vendors where the vendors have items for sale that are common for everyone. If any portion of the Vendor's available inventory is character or account specific, we will be unable to return their data from this endpoint due to the way that available inventory is computed. As I am often guilty of saying: 'It's a long story...'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetPublicVendors($components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->destiny2GetPublicVendors: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2InsertSocketPlug();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->destiny2InsertSocketPlug: ', $e->getMessage(), PHP_EOL;
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
