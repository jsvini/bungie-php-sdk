# OpenAPI\Client\AppApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appGetApplicationApiUsage()**](AppApi.md#appGetApplicationApiUsage) | **GET** /App/ApiUsage/{applicationId}/ | 
[**appGetBungieApplications()**](AppApi.md#appGetBungieApplications) | **GET** /App/FirstParty/ | 


## `appGetApplicationApiUsage()`

```php
appGetApplicationApiUsage($application_id, $end, $start): \OpenAPI\Client\Model\InlineResponse200
```



Get API usage by application for time frame specified. You can go as far back as 30 days ago, and can ask for up to a 48 hour window of time in a single request. You must be authenticated with at least the ReadUserData permission to access this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | ID of the application to get usage statistics.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time for query. Goes to now if not specified.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time for query. Goes to 24 hours ago if not specified.

try {
    $result = $apiInstance->appGetApplicationApiUsage($application_id, $end, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appGetApplicationApiUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| ID of the application to get usage statistics. |
 **end** | **\DateTime**| End time for query. Goes to now if not specified. | [optional]
 **start** | **\DateTime**| Start time for query. Goes to 24 hours ago if not specified. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appGetBungieApplications()`

```php
appGetBungieApplications(): \OpenAPI\Client\Model\InlineResponse2001
```



Get list of applications created by Bungie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->appGetBungieApplications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appGetBungieApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
