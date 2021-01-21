# # DestinyComponentsRecordsDestinyProfileRecordsComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **int** | Your &#39;active&#39; Triumphs score, maintained for backwards compatibility. | [optional]
**active_score** | **int** | Your &#39;active&#39; Triumphs score. | [optional]
**legacy_score** | **int** | Your &#39;legacy&#39; Triumphs score. | [optional]
**lifetime_score** | **int** | Your &#39;lifetime&#39; Triumphs score. | [optional]
**tracked_record_hash** | **int** | If this profile is tracking a record, this is the hash identifier of the record it is tracking. | [optional]
**records** | [**map[string,\OpenAPI\Client\Model\DestinyComponentsRecordsDestinyRecordComponent]**](DestinyComponentsRecordsDestinyRecordComponent.md) |  | [optional]
**record_categories_root_node_hash** | **int** | The hash for the root presentation node definition of Triumph categories. | [optional]
**record_seals_root_node_hash** | **int** | The hash for the root presentation node definition of Triumph Seals. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
