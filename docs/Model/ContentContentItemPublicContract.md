# # ContentContentItemPublicContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_id** | **int** |  | [optional]
**c_type** | **string** |  | [optional]
**cms_path** | **string** |  | [optional]
**creation_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**allow_comments** | **bool** |  | [optional]
**has_age_gate** | **bool** |  | [optional]
**minimum_age** | **int** |  | [optional]
**rating_image_path** | **string** |  | [optional]
**author** | [**\OpenAPI\Client\Model\UserGeneralUser**](UserGeneralUser.md) |  | [optional]
**auto_english_property_fallback** | **bool** |  | [optional]
**properties** | **map[string,object]** | Firehose content is really a collection of metadata and \&quot;properties\&quot;, which are the potentially-but-not-strictly localizable data that comprises the meat of whatever content is being shown.  As Cole Porter would have crooned, \&quot;Anything Goes\&quot; with Firehose properties. They are most often strings, but they can theoretically be anything. They are JSON encoded, and could be JSON structures, simple strings, numbers etc... The Content Type of the item (cType) will describe the properties, and thus how they ought to be deserialized. | [optional]
**representations** | [**\OpenAPI\Client\Model\ContentContentRepresentation[]**](ContentContentRepresentation.md) |  | [optional]
**tags** | **string[]** | NOTE: Tags will always be lower case. | [optional]
**comment_summary** | [**\OpenAPI\Client\Model\ContentCommentSummary**](ContentCommentSummary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
