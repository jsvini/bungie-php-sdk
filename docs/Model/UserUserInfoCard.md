# # UserUserInfoCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplemental_display_name** | **string** | A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc. | [optional]
**icon_path** | **string** | URL the Icon if available. | [optional]
**cross_save_override** | **int** | If there is a cross save override in effect, this value will tell you the type that is overridding this one. | [optional]
**applicable_membership_types** | **int[]** | The list of Membership Types indicating the platforms on which this Membership can be used.   Not in Cross Save &#x3D; its original membership type. Cross Save Primary &#x3D; Any membership types it is overridding, and its original membership type Cross Save Overridden &#x3D; Empty list | [optional]
**is_public** | **bool** | If True, this is a public user membership. | [optional]
**membership_type** | **int** | Type of the membership. Not necessarily the native type. | [optional]
**membership_id** | **int** | Membership ID as they user is known in the Accounts service | [optional]
**display_name** | **string** | Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
