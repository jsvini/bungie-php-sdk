# OpenAPI\Client\ForumApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**forumGetCoreTopicsPaged()**](ForumApi.md#forumGetCoreTopicsPaged) | **GET** /Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/ | 
[**forumGetForumTagSuggestions()**](ForumApi.md#forumGetForumTagSuggestions) | **GET** /Forum/GetForumTagSuggestions/ | 
[**forumGetPoll()**](ForumApi.md#forumGetPoll) | **GET** /Forum/Poll/{topicId}/ | 
[**forumGetPostAndParent()**](ForumApi.md#forumGetPostAndParent) | **GET** /Forum/GetPostAndParent/{childPostId}/ | 
[**forumGetPostAndParentAwaitingApproval()**](ForumApi.md#forumGetPostAndParentAwaitingApproval) | **GET** /Forum/GetPostAndParentAwaitingApproval/{childPostId}/ | 
[**forumGetPostsThreadedPaged()**](ForumApi.md#forumGetPostsThreadedPaged) | **GET** /Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/ | 
[**forumGetPostsThreadedPagedFromChild()**](ForumApi.md#forumGetPostsThreadedPagedFromChild) | **GET** /Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/ | 
[**forumGetRecruitmentThreadSummaries()**](ForumApi.md#forumGetRecruitmentThreadSummaries) | **POST** /Forum/Recruit/Summaries/ | 
[**forumGetTopicForContent()**](ForumApi.md#forumGetTopicForContent) | **GET** /Forum/GetTopicForContent/{contentId}/ | 
[**forumGetTopicsPaged()**](ForumApi.md#forumGetTopicsPaged) | **GET** /Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/ | 


## `forumGetCoreTopicsPaged()`

```php
forumGetCoreTopicsPaged($category_filter, $page, $quick_date, $sort, $locales): \OpenAPI\Client\Model\InlineResponse20012
```



Gets a listing of all topics marked as part of the core group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_filter = 56; // int | The category filter.
$page = 56; // int | Zero base page
$quick_date = 56; // int | The date filter.
$sort = 56; // int | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'

try {
    $result = $apiInstance->forumGetCoreTopicsPaged($category_filter, $page, $quick_date, $sort, $locales);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetCoreTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_filter** | **int**| The category filter. |
 **page** | **int**| Zero base page |
 **quick_date** | **int**| The date filter. |
 **sort** | **int**| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetForumTagSuggestions()`

```php
forumGetForumTagSuggestions($partialtag): \OpenAPI\Client\Model\InlineResponse20014
```



Gets tag suggestions based on partial text entry, matching them with other tags previously used in the forums.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partialtag = 'partialtag_example'; // string | The partial tag input to generate suggestions from.

try {
    $result = $apiInstance->forumGetForumTagSuggestions($partialtag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetForumTagSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partialtag** | **string**| The partial tag input to generate suggestions from. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetPoll()`

```php
forumGetPoll($topic_id): \OpenAPI\Client\Model\InlineResponse20012
```



Gets the specified forum poll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$topic_id = 56; // int | The post id of the topic that has the poll.

try {
    $result = $apiInstance->forumGetPoll($topic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topic_id** | **int**| The post id of the topic that has the poll. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetPostAndParent()`

```php
forumGetPostAndParent($child_post_id, $showbanned): \OpenAPI\Client\Model\InlineResponse20012
```



Returns the post specified and its immediate parent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$child_post_id = 56; // int
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostAndParent($child_post_id, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostAndParent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_post_id** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetPostAndParentAwaitingApproval()`

```php
forumGetPostAndParentAwaitingApproval($child_post_id, $showbanned): \OpenAPI\Client\Model\InlineResponse20012
```



Returns the post specified and its immediate parent of posts that are awaiting approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$child_post_id = 56; // int
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostAndParentAwaitingApproval($child_post_id, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostAndParentAwaitingApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_post_id** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetPostsThreadedPaged()`

```php
forumGetPostsThreadedPaged($get_parent_post, $page, $page_size, $parent_post_id, $reply_size, $root_thread_mode, $sort_mode, $showbanned): \OpenAPI\Client\Model\InlineResponse20012
```



Returns a thread of posts at the given parent, optionally returning replies to those posts as well as the original parent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_parent_post = True; // bool
$page = 56; // int
$page_size = 56; // int
$parent_post_id = 56; // int
$reply_size = 56; // int
$root_thread_mode = True; // bool
$sort_mode = 56; // int
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostsThreadedPaged($get_parent_post, $page, $page_size, $parent_post_id, $reply_size, $root_thread_mode, $sort_mode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostsThreadedPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_parent_post** | **bool**|  |
 **page** | **int**|  |
 **page_size** | **int**|  |
 **parent_post_id** | **int**|  |
 **reply_size** | **int**|  |
 **root_thread_mode** | **bool**|  |
 **sort_mode** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetPostsThreadedPagedFromChild()`

```php
forumGetPostsThreadedPagedFromChild($child_post_id, $page, $page_size, $reply_size, $root_thread_mode, $sort_mode, $showbanned): \OpenAPI\Client\Model\InlineResponse20012
```



Returns a thread of posts starting at the topicId of the input childPostId, optionally returning replies to those posts as well as the original parent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$child_post_id = 56; // int
$page = 56; // int
$page_size = 56; // int
$reply_size = 56; // int
$root_thread_mode = True; // bool
$sort_mode = 56; // int
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostsThreadedPagedFromChild($child_post_id, $page, $page_size, $reply_size, $root_thread_mode, $sort_mode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostsThreadedPagedFromChild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_post_id** | **int**|  |
 **page** | **int**|  |
 **page_size** | **int**|  |
 **reply_size** | **int**|  |
 **root_thread_mode** | **bool**|  |
 **sort_mode** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetRecruitmentThreadSummaries()`

```php
forumGetRecruitmentThreadSummaries(): \OpenAPI\Client\Model\InlineResponse20015
```



Allows the caller to get a list of to 25 recruitment thread summary information objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->forumGetRecruitmentThreadSummaries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetRecruitmentThreadSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetTopicForContent()`

```php
forumGetTopicForContent($content_id): \OpenAPI\Client\Model\InlineResponse20013
```



Gets the post Id for the given content item's comments, if it exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_id = 56; // int

try {
    $result = $apiInstance->forumGetTopicForContent($content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetTopicForContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forumGetTopicsPaged()`

```php
forumGetTopicsPaged($category_filter, $group, $page, $page_size, $quick_date, $sort, $locales, $tagstring): \OpenAPI\Client\Model\InlineResponse20012
```



Get topics from any forum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_filter = 56; // int | A category filter
$group = 56; // int | The group, if any.
$page = 56; // int | Zero paged page number
$page_size = 56; // int | Unused
$quick_date = 56; // int | A date filter.
$sort = 56; // int | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'
$tagstring = 'tagstring_example'; // string | The tags to search, if any.

try {
    $result = $apiInstance->forumGetTopicsPaged($category_filter, $group, $page, $page_size, $quick_date, $sort, $locales, $tagstring);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_filter** | **int**| A category filter |
 **group** | **int**| The group, if any. |
 **page** | **int**| Zero paged page number |
 **page_size** | **int**| Unused |
 **quick_date** | **int**| A date filter. |
 **sort** | **int**| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]
 **tagstring** | **string**| The tags to search, if any. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
