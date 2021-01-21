# # DestinyDefinitionsPresentationDestinyPresentationNodeDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_properties** | [**\OpenAPI\Client\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional]
**original_icon** | **string** | The original icon for this presentation node, before we futzed with it. | [optional]
**root_view_icon** | **string** | Some presentation nodes are meant to be explicitly shown on the \&quot;root\&quot; or \&quot;entry\&quot; screens for the feature to which they are related. You should use this icon when showing them on such a view, if you have a similar \&quot;entry point\&quot; view in your UI. If you don&#39;t have a UI, then I guess it doesn&#39;t matter either way does it? | [optional]
**node_type** | **int** |  | [optional]
**scope** | **int** | Indicates whether this presentation node&#39;s state is determined on a per-character or on an account-wide basis. | [optional]
**objective_hash** | **int** | If this presentation node shows a related objective (for instance, if it tracks the progress of its children), the objective being tracked is indicated here. | [optional]
**completion_record_hash** | **int** | If this presentation node has an associated \&quot;Record\&quot; that you can accomplish for completing its children, this is the identifier of that Record. | [optional]
**children** | [**DestinyDefinitionsPresentationDestinyPresentationNodeChildrenBlock**](DestinyDefinitionsPresentationDestinyPresentationNodeChildrenBlock.md) | The child entities contained by this presentation node. | [optional]
**display_style** | **int** | A hint for how to display this presentation node when it&#39;s shown in a list. | [optional]
**screen_style** | **int** | A hint for how to display this presentation node when it&#39;s shown in its own detail screen. | [optional]
**requirements** | [**DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock**](DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock.md) | The requirements for being able to interact with this presentation node and its children. | [optional]
**disable_child_subscreen_navigation** | **bool** | If this presentation node has children, but the game doesn&#39;t let you inspect the details of those children, that is indicated here. | [optional]
**max_category_record_score** | **int** |  | [optional]
**presentation_node_type** | **int** |  | [optional]
**trait_ids** | **string[]** |  | [optional]
**trait_hashes** | **int[]** |  | [optional]
**parent_node_hashes** | **int[]** | A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents. | [optional]
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional]
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional]
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
