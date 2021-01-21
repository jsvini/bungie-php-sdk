# # GroupsV2GroupResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**detail** | [**\OpenAPI\Client\Model\GroupsV2GroupV2**](GroupsV2GroupV2.md) |  | [optional]
**founder** | [**\OpenAPI\Client\Model\GroupsV2GroupMember**](GroupsV2GroupMember.md) |  | [optional]
**allied_ids** | **int[]** |  | [optional]
**parent_group** | [**\OpenAPI\Client\Model\GroupsV2GroupV2**](GroupsV2GroupV2.md) |  | [optional]
**alliance_status** | **int** |  | [optional]
**group_join_invite_count** | **int** |  | [optional]
**current_user_memberships_inactive_for_destiny** | **bool** | A convenience property that indicates if every membership you (the current user) have that is a part of this group are part of an account that is considered inactive - for example, overridden accounts in Cross Save. | [optional]
**current_user_member_map** | [**map[string,\OpenAPI\Client\Model\GroupsV2GroupMember]**](GroupsV2GroupMember.md) | This property will be populated if the authenticated user is a member of the group. Note that because of account linking, a user can sometimes be part of a clan more than once. As such, this returns the highest member type available. | [optional]
**current_user_potential_member_map** | [**map[string,\OpenAPI\Client\Model\GroupsV2GroupPotentialMember]**](GroupsV2GroupPotentialMember.md) | This property will be populated if the authenticated user is an applicant or has an outstanding invitation to join. Note that because of account linking, a user can sometimes be part of a clan more than once. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
