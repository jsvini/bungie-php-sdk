# OpenAPI\Client\CommunityContentApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**communityContentGetCommunityContent()**](CommunityContentApi.md#communityContentGetCommunityContent) | **GET** /CommunityContent/Get/{sort}/{mediaFilter}/{page}/ | 


## `communityContentGetCommunityContent()`

```php
communityContentGetCommunityContent($media_filter, $page, $sort): \OpenAPI\Client\Model\InlineResponse20012
```



Returns community content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$media_filter = 56; // int | The type of media to get
$page = 56; // int | Zero based page
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->communityContentGetCommunityContent($media_filter, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetCommunityContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_filter** | **int**| The type of media to get |
 **page** | **int**| Zero based page |
 **sort** | **int**| The sort mode. |

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
