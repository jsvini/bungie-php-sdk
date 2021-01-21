# # QueriesSearchResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_results** | **int** |  | [optional]
**has_more** | **bool** |  | [optional]
**query** | [**\OpenAPI\Client\Model\QueriesPagedQuery**](QueriesPagedQuery.md) |  | [optional]
**replacement_continuation_token** | **string** |  | [optional]
**use_total_results** | **bool** | If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
