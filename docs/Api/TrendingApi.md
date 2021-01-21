# OpenAPI\Client\TrendingApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**trendingGetTrendingCategories()**](TrendingApi.md#trendingGetTrendingCategories) | **GET** /Trending/Categories/ | 
[**trendingGetTrendingCategory()**](TrendingApi.md#trendingGetTrendingCategory) | **GET** /Trending/Categories/{categoryId}/{pageNumber}/ | 
[**trendingGetTrendingEntryDetail()**](TrendingApi.md#trendingGetTrendingEntryDetail) | **GET** /Trending/Details/{trendingEntryType}/{identifier}/ | 


## `trendingGetTrendingCategories()`

```php
trendingGetTrendingCategories(): \OpenAPI\Client\Model\InlineResponse20062
```



Returns trending items for Bungie.net, collapsed into the first page of items per category. For pagination within a category, call GetTrendingCategory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->trendingGetTrendingCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trendingGetTrendingCategory()`

```php
trendingGetTrendingCategory($category_id, $page_number): \OpenAPI\Client\Model\InlineResponse20063
```



Returns paginated lists of trending items for a category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | The ID of the category for whom you want additional results.
$page_number = 56; // int | The page # of results to return.

try {
    $result = $apiInstance->trendingGetTrendingCategory($category_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The ID of the category for whom you want additional results. |
 **page_number** | **int**| The page # of results to return. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trendingGetTrendingEntryDetail()`

```php
trendingGetTrendingEntryDetail($identifier, $trending_entry_type): \OpenAPI\Client\Model\InlineResponse20064
```



Returns the detailed results for a specific trending entry. Note that trending entries are uniquely identified by a combination of *both* the TrendingEntryType *and* the identifier: the identifier alone is not guaranteed to be globally unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identifier = 'identifier_example'; // string | The identifier for the entity to be returned.
$trending_entry_type = 56; // int | The type of entity to be returned.

try {
    $result = $apiInstance->trendingGetTrendingEntryDetail($identifier, $trending_entry_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingEntryDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| The identifier for the entity to be returned. |
 **trending_entry_type** | **int**| The type of entity to be returned. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
