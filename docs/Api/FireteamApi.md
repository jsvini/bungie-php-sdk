# OpenAPI\Client\FireteamApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fireteamGetActivePrivateClanFireteamCount()**](FireteamApi.md#fireteamGetActivePrivateClanFireteamCount) | **GET** /Fireteam/Clan/{groupId}/ActiveCount/ | 
[**fireteamGetAvailableClanFireteams()**](FireteamApi.md#fireteamGetAvailableClanFireteams) | **GET** /Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/ | 
[**fireteamGetClanFireteam()**](FireteamApi.md#fireteamGetClanFireteam) | **GET** /Fireteam/Clan/{groupId}/Summary/{fireteamId}/ | 
[**fireteamGetMyClanFireteams()**](FireteamApi.md#fireteamGetMyClanFireteams) | **GET** /Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/ | 
[**fireteamSearchPublicAvailableClanFireteams()**](FireteamApi.md#fireteamSearchPublicAvailableClanFireteams) | **GET** /Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/ | 


## `fireteamGetActivePrivateClanFireteamCount()`

```php
fireteamGetActivePrivateClanFireteamCount($group_id): \OpenAPI\Client\Model\InlineResponse20023
```



Gets a count of all active non-public fireteams for the specified clan. Maximum value returned is 25.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The group id of the clan.

try {
    $result = $apiInstance->fireteamGetActivePrivateClanFireteamCount($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetActivePrivateClanFireteamCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| The group id of the clan. |

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

## `fireteamGetAvailableClanFireteams()`

```php
fireteamGetAvailableClanFireteams($activity_type, $date_range, $group_id, $page, $platform, $public_only, $slot_filter, $lang_filter): \OpenAPI\Client\Model\InlineResponse20065
```



Gets a listing of all of this clan's fireteams that are have available slots. Caller is not checked for join criteria so caching is maximized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_type = 56; // int | The activity type to filter by.
$date_range = 56; // int | The date range to grab available fireteams.
$group_id = 56; // int | The group id of the clan.
$page = 56; // int | Zero based page
$platform = 56; // int | The platform filter.
$public_only = 56; // int | Determines public/private filtering.
$slot_filter = 56; // int | Filters based on available slots
$lang_filter = 'lang_filter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamGetAvailableClanFireteams($activity_type, $date_range, $group_id, $page, $platform, $public_only, $slot_filter, $lang_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_type** | **int**| The activity type to filter by. |
 **date_range** | **int**| The date range to grab available fireteams. |
 **group_id** | **int**| The group id of the clan. |
 **page** | **int**| Zero based page |
 **platform** | **int**| The platform filter. |
 **public_only** | **int**| Determines public/private filtering. |
 **slot_filter** | **int**| Filters based on available slots |
 **lang_filter** | **string**| An optional language filter. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fireteamGetClanFireteam()`

```php
fireteamGetClanFireteam($fireteam_id, $group_id): \OpenAPI\Client\Model\InlineResponse20067
```



Gets a specific clan fireteam.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fireteam_id = 56; // int | The unique id of the fireteam.
$group_id = 56; // int | The group id of the clan.

try {
    $result = $apiInstance->fireteamGetClanFireteam($fireteam_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetClanFireteam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fireteam_id** | **int**| The unique id of the fireteam. |
 **group_id** | **int**| The group id of the clan. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fireteamGetMyClanFireteams()`

```php
fireteamGetMyClanFireteams($group_id, $include_closed, $page, $platform, $group_filter, $lang_filter): \OpenAPI\Client\Model\InlineResponse20066
```



Gets a listing of all clan fireteams that caller is an applicant, a member, or an alternate of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The group id of the clan. (This parameter is ignored unless the optional query parameter groupFilter is true).
$include_closed = True; // bool | If true, return fireteams that have been closed.
$page = 56; // int | Deprecated parameter, ignored.
$platform = 56; // int | The platform filter.
$group_filter = True; // bool | If true, filter by clan. Otherwise, ignore the clan and show all of the user's fireteams.
$lang_filter = 'lang_filter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamGetMyClanFireteams($group_id, $include_closed, $page, $platform, $group_filter, $lang_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetMyClanFireteams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| The group id of the clan. (This parameter is ignored unless the optional query parameter groupFilter is true). |
 **include_closed** | **bool**| If true, return fireteams that have been closed. |
 **page** | **int**| Deprecated parameter, ignored. |
 **platform** | **int**| The platform filter. |
 **group_filter** | **bool**| If true, filter by clan. Otherwise, ignore the clan and show all of the user&#39;s fireteams. | [optional]
 **lang_filter** | **string**| An optional language filter. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fireteamSearchPublicAvailableClanFireteams()`

```php
fireteamSearchPublicAvailableClanFireteams($activity_type, $date_range, $page, $platform, $slot_filter, $lang_filter): \OpenAPI\Client\Model\InlineResponse20065
```



Gets a listing of all public fireteams starting now with open slots. Caller is not checked for join criteria so caching is maximized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_type = 56; // int | The activity type to filter by.
$date_range = 56; // int | The date range to grab available fireteams.
$page = 56; // int | Zero based page
$platform = 56; // int | The platform filter.
$slot_filter = 56; // int | Filters based on available slots
$lang_filter = 'lang_filter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamSearchPublicAvailableClanFireteams($activity_type, $date_range, $page, $platform, $slot_filter, $lang_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamSearchPublicAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_type** | **int**| The activity type to filter by. |
 **date_range** | **int**| The date range to grab available fireteams. |
 **page** | **int**| Zero based page |
 **platform** | **int**| The platform filter. |
 **slot_filter** | **int**| Filters based on available slots |
 **lang_filter** | **string**| An optional language filter. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
