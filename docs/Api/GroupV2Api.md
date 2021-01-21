# OpenAPI\Client\GroupV2Api

All URIs are relative to https://www.bungie.net/Platform.

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupV2AbdicateFoundership()**](GroupV2Api.md#groupV2AbdicateFoundership) | **POST** /GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/ | 
[**groupV2AddOptionalConversation()**](GroupV2Api.md#groupV2AddOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Add/ | 
[**groupV2ApproveAllPending()**](GroupV2Api.md#groupV2ApproveAllPending) | **POST** /GroupV2/{groupId}/Members/ApproveAll/ | 
[**groupV2ApprovePending()**](GroupV2Api.md#groupV2ApprovePending) | **POST** /GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/ | 
[**groupV2ApprovePendingForList()**](GroupV2Api.md#groupV2ApprovePendingForList) | **POST** /GroupV2/{groupId}/Members/ApproveList/ | 
[**groupV2BanMember()**](GroupV2Api.md#groupV2BanMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/ | 
[**groupV2DenyAllPending()**](GroupV2Api.md#groupV2DenyAllPending) | **POST** /GroupV2/{groupId}/Members/DenyAll/ | 
[**groupV2DenyPendingForList()**](GroupV2Api.md#groupV2DenyPendingForList) | **POST** /GroupV2/{groupId}/Members/DenyList/ | 
[**groupV2EditClanBanner()**](GroupV2Api.md#groupV2EditClanBanner) | **POST** /GroupV2/{groupId}/EditClanBanner/ | 
[**groupV2EditFounderOptions()**](GroupV2Api.md#groupV2EditFounderOptions) | **POST** /GroupV2/{groupId}/EditFounderOptions/ | 
[**groupV2EditGroup()**](GroupV2Api.md#groupV2EditGroup) | **POST** /GroupV2/{groupId}/Edit/ | 
[**groupV2EditGroupMembership()**](GroupV2Api.md#groupV2EditGroupMembership) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/ | 
[**groupV2EditOptionalConversation()**](GroupV2Api.md#groupV2EditOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/ | 
[**groupV2GetAdminsAndFounderOfGroup()**](GroupV2Api.md#groupV2GetAdminsAndFounderOfGroup) | **GET** /GroupV2/{groupId}/AdminsAndFounder/ | 
[**groupV2GetAvailableAvatars()**](GroupV2Api.md#groupV2GetAvailableAvatars) | **GET** /GroupV2/GetAvailableAvatars/ | 
[**groupV2GetAvailableThemes()**](GroupV2Api.md#groupV2GetAvailableThemes) | **GET** /GroupV2/GetAvailableThemes/ | 
[**groupV2GetBannedMembersOfGroup()**](GroupV2Api.md#groupV2GetBannedMembersOfGroup) | **GET** /GroupV2/{groupId}/Banned/ | 
[**groupV2GetGroup()**](GroupV2Api.md#groupV2GetGroup) | **GET** /GroupV2/{groupId}/ | 
[**groupV2GetGroupByName()**](GroupV2Api.md#groupV2GetGroupByName) | **GET** /GroupV2/Name/{groupName}/{groupType}/ | 
[**groupV2GetGroupByNameV2()**](GroupV2Api.md#groupV2GetGroupByNameV2) | **POST** /GroupV2/NameV2/ | 
[**groupV2GetGroupOptionalConversations()**](GroupV2Api.md#groupV2GetGroupOptionalConversations) | **GET** /GroupV2/{groupId}/OptionalConversations/ | 
[**groupV2GetGroupsForMember()**](GroupV2Api.md#groupV2GetGroupsForMember) | **GET** /GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**groupV2GetInvitedIndividuals()**](GroupV2Api.md#groupV2GetInvitedIndividuals) | **GET** /GroupV2/{groupId}/Members/InvitedIndividuals/ | 
[**groupV2GetMembersOfGroup()**](GroupV2Api.md#groupV2GetMembersOfGroup) | **GET** /GroupV2/{groupId}/Members/ | 
[**groupV2GetPendingMemberships()**](GroupV2Api.md#groupV2GetPendingMemberships) | **GET** /GroupV2/{groupId}/Members/Pending/ | 
[**groupV2GetPotentialGroupsForMember()**](GroupV2Api.md#groupV2GetPotentialGroupsForMember) | **GET** /GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**groupV2GetRecommendedGroups()**](GroupV2Api.md#groupV2GetRecommendedGroups) | **POST** /GroupV2/Recommended/{groupType}/{createDateRange}/ | 
[**groupV2GetUserClanInviteSetting()**](GroupV2Api.md#groupV2GetUserClanInviteSetting) | **GET** /GroupV2/GetUserClanInviteSetting/{mType}/ | 
[**groupV2GroupSearch()**](GroupV2Api.md#groupV2GroupSearch) | **POST** /GroupV2/Search/ | 
[**groupV2IndividualGroupInvite()**](GroupV2Api.md#groupV2IndividualGroupInvite) | **POST** /GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/ | 
[**groupV2IndividualGroupInviteCancel()**](GroupV2Api.md#groupV2IndividualGroupInviteCancel) | **POST** /GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/ | 
[**groupV2KickMember()**](GroupV2Api.md#groupV2KickMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/ | 
[**groupV2RecoverGroupForFounder()**](GroupV2Api.md#groupV2RecoverGroupForFounder) | **GET** /GroupV2/Recover/{membershipType}/{membershipId}/{groupType}/ | 
[**groupV2UnbanMember()**](GroupV2Api.md#groupV2UnbanMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/ | 


## `groupV2AbdicateFoundership()`

```php
groupV2AbdicateFoundership($founder_id_new, $group_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20018
```



An administrative method to allow the founder of a group or clan to give up their position to another admin permanently.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$founder_id_new = 56; // int | The new founder for this group. Must already be a group admin.
$group_id = 56; // int | The target group id.
$membership_type = 56; // int | Membership type of the provided founderIdNew.

try {
    $result = $apiInstance->groupV2AbdicateFoundership($founder_id_new, $group_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2AbdicateFoundership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **founder_id_new** | **int**| The new founder for this group. Must already be a group admin. |
 **group_id** | **int**| The target group id. |
 **membership_type** | **int**| Membership type of the provided founderIdNew. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2AddOptionalConversation()`

```php
groupV2AddOptionalConversation($group_id): \OpenAPI\Client\Model\InlineResponse20013
```



Add a new optional conversation/chat channel. Requires admin permissions to the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID of the group to edit.

try {
    $result = $apiInstance->groupV2AddOptionalConversation($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2AddOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the group to edit. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2ApproveAllPending()`

```php
groupV2ApproveAllPending($group_id): \OpenAPI\Client\Model\InlineResponse20028
```



Approve all of the pending users for the given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2ApproveAllPending($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApproveAllPending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2ApprovePending()`

```php
groupV2ApprovePending($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20018
```



Approve the given membershipId to join the group/clan as long as they have applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group.
$membership_id = 56; // int | The membership id being approved.
$membership_type = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2ApprovePending($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApprovePending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group. |
 **membership_id** | **int**| The membership id being approved. |
 **membership_type** | **int**| Membership type of the supplied membership ID. |

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

## `groupV2ApprovePendingForList()`

```php
groupV2ApprovePendingForList($group_id): \OpenAPI\Client\Model\InlineResponse20028
```



Approve all of the pending users for the given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2ApprovePendingForList($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApprovePendingForList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2BanMember()`

```php
groupV2BanMember($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20023
```



Bans the requested member from the requested group for the specified period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID that has the member to ban.
$membership_id = 56; // int | Membership ID of the member to ban from the group.
$membership_type = 56; // int | Membership type of the provided membership ID.

try {
    $result = $apiInstance->groupV2BanMember($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2BanMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID that has the member to ban. |
 **membership_id** | **int**| Membership ID of the member to ban from the group. |
 **membership_type** | **int**| Membership type of the provided membership ID. |

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

## `groupV2DenyAllPending()`

```php
groupV2DenyAllPending($group_id): \OpenAPI\Client\Model\InlineResponse20028
```



Deny all of the pending users for the given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2DenyAllPending($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2DenyAllPending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2DenyPendingForList()`

```php
groupV2DenyPendingForList($group_id): \OpenAPI\Client\Model\InlineResponse20028
```



Deny all of the pending users for the given group that match the passed-in .

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2DenyPendingForList($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2DenyPendingForList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2EditClanBanner()`

```php
groupV2EditClanBanner($group_id): \OpenAPI\Client\Model\InlineResponse20023
```



Edit an existing group's clan banner. You must have suitable permissions in the group to perform this operation. All fields are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID of the group to edit.

try {
    $result = $apiInstance->groupV2EditClanBanner($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditClanBanner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the group to edit. |

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

## `groupV2EditFounderOptions()`

```php
groupV2EditFounderOptions($group_id): \OpenAPI\Client\Model\InlineResponse20023
```



Edit group options only available to a founder. You must have suitable permissions in the group to perform this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID of the group to edit.

try {
    $result = $apiInstance->groupV2EditFounderOptions($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditFounderOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the group to edit. |

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

## `groupV2EditGroup()`

```php
groupV2EditGroup($group_id): \OpenAPI\Client\Model\InlineResponse20023
```



Edit an existing group. You must have suitable permissions in the group to perform this operation. This latest revision will only edit the fields you pass in - pass null for properties you want to leave unaltered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID of the group to edit.

try {
    $result = $apiInstance->groupV2EditGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID of the group to edit. |

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

## `groupV2EditGroupMembership()`

```php
groupV2EditGroupMembership($group_id, $membership_id, $membership_type, $member_type): \OpenAPI\Client\Model\InlineResponse20023
```



Edit the membership type of a given member. You must have suitable permissions in the group to perform this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group to which the member belongs.
$membership_id = 56; // int | Membership ID to modify.
$membership_type = 56; // int | Membership type of the provide membership ID.
$member_type = 56; // int | New membertype for the specified member.

try {
    $result = $apiInstance->groupV2EditGroupMembership($group_id, $membership_id, $membership_type, $member_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditGroupMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group to which the member belongs. |
 **membership_id** | **int**| Membership ID to modify. |
 **membership_type** | **int**| Membership type of the provide membership ID. |
 **member_type** | **int**| New membertype for the specified member. |

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

## `groupV2EditOptionalConversation()`

```php
groupV2EditOptionalConversation($conversation_id, $group_id): \OpenAPI\Client\Model\InlineResponse20013
```



Edit the settings of an optional conversation/chat channel. Requires admin permissions to the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 56; // int | Conversation Id of the channel being edited.
$group_id = 56; // int | Group ID of the group to edit.

try {
    $result = $apiInstance->groupV2EditOptionalConversation($conversation_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **int**| Conversation Id of the channel being edited. |
 **group_id** | **int**| Group ID of the group to edit. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetAdminsAndFounderOfGroup()`

```php
groupV2GetAdminsAndFounderOfGroup($currentpage, $group_id): \OpenAPI\Client\Model\InlineResponse20024
```



Get the list of members in a given group who are of admin level or higher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$group_id = 56; // int | The ID of the group.

try {
    $result = $apiInstance->groupV2GetAdminsAndFounderOfGroup($currentpage, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAdminsAndFounderOfGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **group_id** | **int**| The ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetAvailableAvatars()`

```php
groupV2GetAvailableAvatars(): \OpenAPI\Client\Model\InlineResponse20016
```



Returns a list of all available group avatars for the signed-in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GetAvailableAvatars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAvailableAvatars: ', $e->getMessage(), PHP_EOL;
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

## `groupV2GetAvailableThemes()`

```php
groupV2GetAvailableThemes(): \OpenAPI\Client\Model\InlineResponse20017
```



Returns a list of all available group themes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GetAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetBannedMembersOfGroup()`

```php
groupV2GetBannedMembersOfGroup($currentpage, $group_id): \OpenAPI\Client\Model\InlineResponse20026
```



Get the list of banned members in a given group. Only accessible to group Admins and above. Not applicable to all groups. Check group features.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 entries.
$group_id = 56; // int | Group ID whose banned members you are fetching

try {
    $result = $apiInstance->groupV2GetBannedMembersOfGroup($currentpage, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetBannedMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 entries. |
 **group_id** | **int**| Group ID whose banned members you are fetching |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetGroup()`

```php
groupV2GetGroup($group_id): \OpenAPI\Client\Model\InlineResponse20021
```



Get information about a specific group of the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Requested group's id.

try {
    $result = $apiInstance->groupV2GetGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Requested group&#39;s id. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetGroupByName()`

```php
groupV2GetGroupByName($group_name, $group_type): \OpenAPI\Client\Model\InlineResponse20021
```



Get information about a specific group with the given name and type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_name = 'group_name_example'; // string | Exact name of the group to find.
$group_type = 56; // int | Type of group to find.

try {
    $result = $apiInstance->groupV2GetGroupByName($group_name, $group_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_name** | **string**| Exact name of the group to find. |
 **group_type** | **int**| Type of group to find. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetGroupByNameV2()`

```php
groupV2GetGroupByNameV2(): \OpenAPI\Client\Model\InlineResponse20021
```



Get information about a specific group with the given name and type. The POST version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GetGroupByNameV2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupByNameV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetGroupOptionalConversations()`

```php
groupV2GetGroupOptionalConversations($group_id): \OpenAPI\Client\Model\InlineResponse20022
```



Gets a list of available optional conversation channels and their settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Requested group's id.

try {
    $result = $apiInstance->groupV2GetGroupOptionalConversations($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupOptionalConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Requested group&#39;s id. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetGroupsForMember()`

```php
groupV2GetGroupsForMember($filter, $group_type, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20029
```



Get information about the groups that a given member has joined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 56; // int | Filter apply to list of joined groups.
$group_type = 56; // int | Type of group the supplied member founded.
$membership_id = 56; // int | Membership ID to for which to find founded groups.
$membership_type = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2GetGroupsForMember($filter, $group_type, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| Filter apply to list of joined groups. |
 **group_type** | **int**| Type of group the supplied member founded. |
 **membership_id** | **int**| Membership ID to for which to find founded groups. |
 **membership_type** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetInvitedIndividuals()`

```php
groupV2GetInvitedIndividuals($currentpage, $group_id): \OpenAPI\Client\Model\InlineResponse20027
```



Get the list of users who have been invited into the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2GetInvitedIndividuals($currentpage, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetInvitedIndividuals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetMembersOfGroup()`

```php
groupV2GetMembersOfGroup($currentpage, $group_id, $member_type, $name_search): \OpenAPI\Client\Model\InlineResponse20024
```



Get the list of members in a given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$group_id = 56; // int | The ID of the group.
$member_type = 56; // int | Filter out other member types. Use None for all members.
$name_search = 'name_search_example'; // string | The name fragment upon which a search should be executed for members with matching display or unique names.

try {
    $result = $apiInstance->groupV2GetMembersOfGroup($currentpage, $group_id, $member_type, $name_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **group_id** | **int**| The ID of the group. |
 **member_type** | **int**| Filter out other member types. Use None for all members. | [optional]
 **name_search** | **string**| The name fragment upon which a search should be executed for members with matching display or unique names. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetPendingMemberships()`

```php
groupV2GetPendingMemberships($currentpage, $group_id): \OpenAPI\Client\Model\InlineResponse20027
```



Get the list of users who are awaiting a decision on their application to join a given group. Modified to include application info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$group_id = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2GetPendingMemberships($currentpage, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetPendingMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **group_id** | **int**| ID of the group. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetPotentialGroupsForMember()`

```php
groupV2GetPotentialGroupsForMember($filter, $group_type, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20031
```



Get information about the groups that a given member has applied to or been invited to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 56; // int | Filter apply to list of potential joined groups.
$group_type = 56; // int | Type of group the supplied member applied.
$membership_id = 56; // int | Membership ID to for which to find applied groups.
$membership_type = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2GetPotentialGroupsForMember($filter, $group_type, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetPotentialGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| Filter apply to list of potential joined groups. |
 **group_type** | **int**| Type of group the supplied member applied. |
 **membership_id** | **int**| Membership ID to for which to find applied groups. |
 **membership_type** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetRecommendedGroups()`

```php
groupV2GetRecommendedGroups($create_date_range, $group_type): \OpenAPI\Client\Model\InlineResponse20019
```



Gets groups recommended for you based on the groups to whom those you follow belong.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_date_range = 56; // int | Requested range in which to pull recommended groups
$group_type = 56; // int | Type of groups requested

try {
    $result = $apiInstance->groupV2GetRecommendedGroups($create_date_range, $group_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetRecommendedGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_date_range** | **int**| Requested range in which to pull recommended groups |
 **group_type** | **int**| Type of groups requested |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2GetUserClanInviteSetting()`

```php
groupV2GetUserClanInviteSetting($m_type): \OpenAPI\Client\Model\InlineResponse20018
```



Gets the state of the user's clan invite preferences for a particular membership type - true if they wish to be invited to clans, false otherwise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$m_type = 56; // int | The Destiny membership type of the account we wish to access settings.

try {
    $result = $apiInstance->groupV2GetUserClanInviteSetting($m_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetUserClanInviteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **m_type** | **int**| The Destiny membership type of the account we wish to access settings. |

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

## `groupV2GroupSearch()`

```php
groupV2GroupSearch(): \OpenAPI\Client\Model\InlineResponse20020
```



Search for Groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GroupSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GroupSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2IndividualGroupInvite()`

```php
groupV2IndividualGroupInvite($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20032
```



Invite a user to join this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group you would like to join.
$membership_id = 56; // int | Membership id of the account being invited.
$membership_type = 56; // int | MembershipType of the account being invited.

try {
    $result = $apiInstance->groupV2IndividualGroupInvite($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2IndividualGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group you would like to join. |
 **membership_id** | **int**| Membership id of the account being invited. |
 **membership_type** | **int**| MembershipType of the account being invited. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2IndividualGroupInviteCancel()`

```php
groupV2IndividualGroupInviteCancel($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20032
```



Cancels a pending invitation to join a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the group you would like to join.
$membership_id = 56; // int | Membership id of the account being cancelled.
$membership_type = 56; // int | MembershipType of the account being cancelled.

try {
    $result = $apiInstance->groupV2IndividualGroupInviteCancel($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2IndividualGroupInviteCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of the group you would like to join. |
 **membership_id** | **int**| Membership id of the account being cancelled. |
 **membership_type** | **int**| MembershipType of the account being cancelled. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2KickMember()`

```php
groupV2KickMember($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20025
```



Kick a member from the given group, forcing them to reapply if they wish to re-join the group. You must have suitable permissions in the group to perform this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Group ID to kick the user from.
$membership_id = 56; // int | Membership ID to kick.
$membership_type = 56; // int | Membership type of the provided membership ID.

try {
    $result = $apiInstance->groupV2KickMember($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2KickMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID to kick the user from. |
 **membership_id** | **int**| Membership ID to kick. |
 **membership_type** | **int**| Membership type of the provided membership ID. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2RecoverGroupForFounder()`

```php
groupV2RecoverGroupForFounder($group_type, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20030
```



Allows a founder to manually recover a group they can see in game but not on bungie.net

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_type = 56; // int | Type of group the supplied member founded.
$membership_id = 56; // int | Membership ID to for which to find founded groups.
$membership_type = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2RecoverGroupForFounder($group_type, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2RecoverGroupForFounder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_type** | **int**| Type of group the supplied member founded. |
 **membership_id** | **int**| Membership ID to for which to find founded groups. |
 **membership_type** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupV2UnbanMember()`

```php
groupV2UnbanMember($group_id, $membership_id, $membership_type): \OpenAPI\Client\Model\InlineResponse20023
```



Unbans the requested member, allowing them to re-apply for membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int
$membership_id = 56; // int | Membership ID of the member to unban from the group
$membership_type = 56; // int | Membership type of the provided membership ID.

try {
    $result = $apiInstance->groupV2UnbanMember($group_id, $membership_id, $membership_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2UnbanMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **membership_id** | **int**| Membership ID of the member to unban from the group |
 **membership_type** | **int**| Membership type of the provided membership ID. |

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
