# OpenAPI\Client\UserApi

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userGetAvailableThemes()**](UserApi.md#userGetAvailableThemes) | **GET** /User/GetAvailableThemes/ | 
[**userGetBungieNetUserById()**](UserApi.md#userGetBungieNetUserById) | **GET** /User/GetBungieNetUserById/{id}/ | 
[**userGetCredentialTypesForTargetAccount()**](UserApi.md#userGetCredentialTypesForTargetAccount) | **GET** /User/GetCredentialTypesForTargetAccount/{membershipId}/ | 
[**userGetMembershipDataById()**](UserApi.md#userGetMembershipDataById) | **GET** /User/GetMembershipsById/{membershipId}/{membershipType}/ | 
[**userGetMembershipDataForCurrentUser()**](UserApi.md#userGetMembershipDataForCurrentUser) | **GET** /User/GetMembershipsForCurrentUser/ | 
[**userGetMembershipFromHardLinkedCredential()**](UserApi.md#userGetMembershipFromHardLinkedCredential) | **GET** /User/GetMembershipFromHardLinkedCredential/{crType}/{credential}/ | 
[**userSearchUsers()**](UserApi.md#userSearchUsers) | **GET** /User/SearchUsers/ | 


## `userGetAvailableThemes()`

```php
userGetAvailableThemes(): \OpenAPI\Client\Model\InlineResponse2005
```



Returns a list of all available user themes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userGetAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetBungieNetUserById()`

```php
userGetBungieNetUserById($id): \OpenAPI\Client\Model\InlineResponse2002
```



Loads a bungienet user by membership id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The requested Bungie.net membership id.

try {
    $result = $apiInstance->userGetBungieNetUserById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetBungieNetUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The requested Bungie.net membership id. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetCredentialTypesForTargetAccount()`

```php
userGetCredentialTypesForTargetAccount($membership_id): \OpenAPI\Client\Model\InlineResponse2004
```



Returns a list of credential types attached to the requested account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_id = 56; // int | The user's membership id

try {
    $result = $apiInstance->userGetCredentialTypesForTargetAccount($membership_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetCredentialTypesForTargetAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_id** | **int**| The user&#39;s membership id |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetMembershipDataById()`

```php
userGetMembershipDataById($membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse2006
```



Returns a list of accounts associated with the supplied membership ID and membership type. This will include all linked accounts (even when hidden) if supplied credentials permit it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_id = 56; // int | The membership ID of the target user.
$membership_type = 56; // int | Type of the supplied membership ID.

try {
    $result = $apiInstance->userGetMembershipDataById($membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetMembershipDataById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_id** | **int**| The membership ID of the target user. |
 **membership_type** | **int**| Type of the supplied membership ID. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetMembershipDataForCurrentUser()`

```php
userGetMembershipDataForCurrentUser(): \OpenAPI\Client\Model\InlineResponse2006
```



Returns a list of accounts associated with signed in user. This is useful for OAuth implementations that do not give you access to the token response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userGetMembershipDataForCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetMembershipDataForCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetMembershipFromHardLinkedCredential()`

```php
userGetMembershipFromHardLinkedCredential($credential, $cr_type): \OpenAPI\Client\Model\InlineResponse2007
```



Gets any hard linked membership given a credential. Only works for credentials that are public (just SteamID64 right now). Cross Save aware.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$credential = 'credential_example'; // string | The credential to look up. Must be a valid SteamID64.
$cr_type = 56; // int | The credential type. 'SteamId' is the only valid value at present.

try {
    $result = $apiInstance->userGetMembershipFromHardLinkedCredential($credential, $cr_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetMembershipFromHardLinkedCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential** | **string**| The credential to look up. Must be a valid SteamID64. |
 **cr_type** | **int**| The credential type. &#39;SteamId&#39; is the only valid value at present. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSearchUsers()`

```php
userSearchUsers($q): \OpenAPI\Client\Model\InlineResponse2003
```



Returns a list of possible users based on the search string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | The search string.

try {
    $result = $apiInstance->userSearchUsers($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| The search string. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
