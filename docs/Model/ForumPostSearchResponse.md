# # ForumPostSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**related_posts** | [**\OpenAPI\Client\Model\ForumPostResponse[]**](ForumPostResponse.md) |  | [optional]
**authors** | [**\OpenAPI\Client\Model\UserGeneralUser[]**](UserGeneralUser.md) |  | [optional]
**groups** | [**\OpenAPI\Client\Model\GroupsV2GroupResponse[]**](GroupsV2GroupResponse.md) |  | [optional]
**searched_tags** | [**\OpenAPI\Client\Model\TagsModelsContractsTagResponse[]**](TagsModelsContractsTagResponse.md) |  | [optional]
**polls** | [**\OpenAPI\Client\Model\ForumPollResponse[]**](ForumPollResponse.md) |  | [optional]
**recruitment_details** | [**\OpenAPI\Client\Model\ForumForumRecruitmentDetail[]**](ForumForumRecruitmentDetail.md) |  | [optional]
**available_pages** | **int** |  | [optional]
**results** | [**\OpenAPI\Client\Model\ForumPostResponse[]**](ForumPostResponse.md) |  | [optional]
**total_results** | **int** |  | [optional]
**has_more** | **bool** |  | [optional]
**query** | [**\OpenAPI\Client\Model\QueriesPagedQuery**](QueriesPagedQuery.md) |  | [optional]
**replacement_continuation_token** | **string** |  | [optional]
**use_total_results** | **bool** | If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
