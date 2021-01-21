# OpenAPI\Client\DefaultApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableLocales()**](DefaultApi.md#getAvailableLocales) | **GET** /GetAvailableLocales/ | 
[**getCommonSettings()**](DefaultApi.md#getCommonSettings) | **GET** /Settings/ | 
[**getGlobalAlerts()**](DefaultApi.md#getGlobalAlerts) | **GET** /GlobalAlerts/ | 
[**getUserSystemOverrides()**](DefaultApi.md#getUserSystemOverrides) | **GET** /UserSystemOverrides/ | 


## `getAvailableLocales()`

```php
getAvailableLocales(): \OpenAPI\Client\Model\InlineResponse20016
```



List of available localization cultures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAvailableLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableLocales: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommonSettings()`

```php
getCommonSettings(): \OpenAPI\Client\Model\InlineResponse20068
```



Get the common settings used by the Bungie.Net environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCommonSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommonSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalAlerts()`

```php
getGlobalAlerts($includestreaming): \OpenAPI\Client\Model\InlineResponse20070
```



Gets any active global alert for display in the forum banners, help pages, etc. Usually used for DOC alerts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includestreaming = True; // bool | Determines whether Streaming Alerts are included in results

try {
    $result = $apiInstance->getGlobalAlerts($includestreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGlobalAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includestreaming** | **bool**| Determines whether Streaming Alerts are included in results | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserSystemOverrides()`

```php
getUserSystemOverrides(): \OpenAPI\Client\Model\InlineResponse20069
```



Get the user-specific system overrides that should be respected alongside common systems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserSystemOverrides();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserSystemOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
