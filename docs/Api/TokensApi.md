# OpenAPI\Client\TokensApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokensApplyMissingPartnerOffersWithoutClaim()**](TokensApi.md#tokensApplyMissingPartnerOffersWithoutClaim) | **POST** /Tokens/Partner/ApplyMissingOffers/{partnerApplicationId}/{targetBnetMembershipId}/ | 
[**tokensClaimPartnerOffer()**](TokensApi.md#tokensClaimPartnerOffer) | **POST** /Tokens/Partner/ClaimOffer/ | 
[**tokensGetPartnerOfferSkuHistory()**](TokensApi.md#tokensGetPartnerOfferSkuHistory) | **GET** /Tokens/Partner/History/{partnerApplicationId}/{targetBnetMembershipId}/ | 


## `tokensApplyMissingPartnerOffersWithoutClaim()`

```php
tokensApplyMissingPartnerOffersWithoutClaim($partner_application_id, $target_bnet_membership_id): \OpenAPI\Client\Model\InlineResponse20018
```



Apply a partner offer to the targeted user. This endpoint does not claim a new offer, but any already claimed offers will be applied to the game if not already.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_application_id = 56; // int | The partner application identifier.
$target_bnet_membership_id = 56; // int | The bungie.net user to apply missing offers to. If not self, elevated permissions are required.

try {
    $result = $apiInstance->tokensApplyMissingPartnerOffersWithoutClaim($partner_application_id, $target_bnet_membership_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensApplyMissingPartnerOffersWithoutClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_application_id** | **int**| The partner application identifier. |
 **target_bnet_membership_id** | **int**| The bungie.net user to apply missing offers to. If not self, elevated permissions are required. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensClaimPartnerOffer()`

```php
tokensClaimPartnerOffer(): \OpenAPI\Client\Model\InlineResponse20018
```



Claim a partner offer as the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tokensClaimPartnerOffer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensClaimPartnerOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensGetPartnerOfferSkuHistory()`

```php
tokensGetPartnerOfferSkuHistory($partner_application_id, $target_bnet_membership_id): \OpenAPI\Client\Model\InlineResponse20033
```



Returns the partner sku and offer history of the targeted user. Elevated permissions are required to see users that are not yourself.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_application_id = 56; // int | The partner application identifier.
$target_bnet_membership_id = 56; // int | The bungie.net user to apply missing offers to. If not self, elevated permissions are required.

try {
    $result = $apiInstance->tokensGetPartnerOfferSkuHistory($partner_application_id, $target_bnet_membership_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetPartnerOfferSkuHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_application_id** | **int**| The partner application identifier. |
 **target_bnet_membership_id** | **int**| The bungie.net user to apply missing offers to. If not self, elevated permissions are required. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
