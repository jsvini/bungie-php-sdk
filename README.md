# OpenAPIClient-php

These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.

For more information, please visit [https://github.com/Bungie-net/api](https://github.com/Bungie-net/api).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/jsvini/bungie-php-sdk"
    }
  ],
  "require": {
    "jsvini/bungie-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAvailableLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableLocales: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://www.bungie.net/Platform*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getAvailableLocales**](docs/Api/DefaultApi.md#getavailablelocales) | **GET** /GetAvailableLocales/ | 
*DefaultApi* | [**getCommonSettings**](docs/Api/DefaultApi.md#getcommonsettings) | **GET** /Settings/ | 
*DefaultApi* | [**getGlobalAlerts**](docs/Api/DefaultApi.md#getglobalalerts) | **GET** /GlobalAlerts/ | 
*DefaultApi* | [**getUserSystemOverrides**](docs/Api/DefaultApi.md#getusersystemoverrides) | **GET** /UserSystemOverrides/ | 
*AppApi* | [**appGetApplicationApiUsage**](docs/Api/AppApi.md#appgetapplicationapiusage) | **GET** /App/ApiUsage/{applicationId}/ | 
*AppApi* | [**appGetBungieApplications**](docs/Api/AppApi.md#appgetbungieapplications) | **GET** /App/FirstParty/ | 
*CommunityContentApi* | [**communityContentGetCommunityContent**](docs/Api/CommunityContentApi.md#communitycontentgetcommunitycontent) | **GET** /CommunityContent/Get/{sort}/{mediaFilter}/{page}/ | 
*ContentApi* | [**contentGetContentById**](docs/Api/ContentApi.md#contentgetcontentbyid) | **GET** /Content/GetContentById/{id}/{locale}/ | 
*ContentApi* | [**contentGetContentByTagAndType**](docs/Api/ContentApi.md#contentgetcontentbytagandtype) | **GET** /Content/GetContentByTagAndType/{tag}/{type}/{locale}/ | 
*ContentApi* | [**contentGetContentType**](docs/Api/ContentApi.md#contentgetcontenttype) | **GET** /Content/GetContentType/{type}/ | 
*ContentApi* | [**contentSearchContentByTagAndType**](docs/Api/ContentApi.md#contentsearchcontentbytagandtype) | **GET** /Content/SearchContentByTagAndType/{tag}/{type}/{locale}/ | 
*ContentApi* | [**contentSearchContentWithText**](docs/Api/ContentApi.md#contentsearchcontentwithtext) | **GET** /Content/Search/{locale}/ | 
*ContentApi* | [**contentSearchHelpArticles**](docs/Api/ContentApi.md#contentsearchhelparticles) | **GET** /Content/SearchHelpArticles/{searchtext}/{size}/ | 
*Destiny2Api* | [**destiny2AwaGetActionToken**](docs/Api/Destiny2Api.md#destiny2awagetactiontoken) | **GET** /Destiny2/Awa/GetActionToken/{correlationId}/ | 
*Destiny2Api* | [**destiny2AwaInitializeRequest**](docs/Api/Destiny2Api.md#destiny2awainitializerequest) | **POST** /Destiny2/Awa/Initialize/ | 
*Destiny2Api* | [**destiny2AwaProvideAuthorizationResult**](docs/Api/Destiny2Api.md#destiny2awaprovideauthorizationresult) | **POST** /Destiny2/Awa/AwaProvideAuthorizationResult/ | 
*Destiny2Api* | [**destiny2EquipItem**](docs/Api/Destiny2Api.md#destiny2equipitem) | **POST** /Destiny2/Actions/Items/EquipItem/ | 
*Destiny2Api* | [**destiny2EquipItems**](docs/Api/Destiny2Api.md#destiny2equipitems) | **POST** /Destiny2/Actions/Items/EquipItems/ | 
*Destiny2Api* | [**destiny2GetActivityHistory**](docs/Api/Destiny2Api.md#destiny2getactivityhistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/ | 
*Destiny2Api* | [**destiny2GetCharacter**](docs/Api/Destiny2Api.md#destiny2getcharacter) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/ | 
*Destiny2Api* | [**destiny2GetClanAggregateStats**](docs/Api/Destiny2Api.md#destiny2getclanaggregatestats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
*Destiny2Api* | [**destiny2GetClanLeaderboards**](docs/Api/Destiny2Api.md#destiny2getclanleaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
*Destiny2Api* | [**destiny2GetClanWeeklyRewardState**](docs/Api/Destiny2Api.md#destiny2getclanweeklyrewardstate) | **GET** /Destiny2/Clan/{groupId}/WeeklyRewardState/ | 
*Destiny2Api* | [**destiny2GetCollectibleNodeDetails**](docs/Api/Destiny2Api.md#destiny2getcollectiblenodedetails) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/ | 
*Destiny2Api* | [**destiny2GetDestinyAggregateActivityStats**](docs/Api/Destiny2Api.md#destiny2getdestinyaggregateactivitystats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/ | 
*Destiny2Api* | [**destiny2GetDestinyEntityDefinition**](docs/Api/Destiny2Api.md#destiny2getdestinyentitydefinition) | **GET** /Destiny2/Manifest/{entityType}/{hashIdentifier}/ | 
*Destiny2Api* | [**destiny2GetDestinyManifest**](docs/Api/Destiny2Api.md#destiny2getdestinymanifest) | **GET** /Destiny2/Manifest/ | 
*Destiny2Api* | [**destiny2GetHistoricalStats**](docs/Api/Destiny2Api.md#destiny2gethistoricalstats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/ | 
*Destiny2Api* | [**destiny2GetHistoricalStatsDefinition**](docs/Api/Destiny2Api.md#destiny2gethistoricalstatsdefinition) | **GET** /Destiny2/Stats/Definition/ | 
*Destiny2Api* | [**destiny2GetHistoricalStatsForAccount**](docs/Api/Destiny2Api.md#destiny2gethistoricalstatsforaccount) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/ | 
*Destiny2Api* | [**destiny2GetItem**](docs/Api/Destiny2Api.md#destiny2getitem) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/ | 
*Destiny2Api* | [**destiny2GetLeaderboards**](docs/Api/Destiny2Api.md#destiny2getleaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
*Destiny2Api* | [**destiny2GetLeaderboardsForCharacter**](docs/Api/Destiny2Api.md#destiny2getleaderboardsforcharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
*Destiny2Api* | [**destiny2GetLinkedProfiles**](docs/Api/Destiny2Api.md#destiny2getlinkedprofiles) | **GET** /Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/ | 
*Destiny2Api* | [**destiny2GetPostGameCarnageReport**](docs/Api/Destiny2Api.md#destiny2getpostgamecarnagereport) | **GET** /Destiny2/Stats/PostGameCarnageReport/{activityId}/ | 
*Destiny2Api* | [**destiny2GetProfile**](docs/Api/Destiny2Api.md#destiny2getprofile) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/ | 
*Destiny2Api* | [**destiny2GetPublicMilestoneContent**](docs/Api/Destiny2Api.md#destiny2getpublicmilestonecontent) | **GET** /Destiny2/Milestones/{milestoneHash}/Content/ | 
*Destiny2Api* | [**destiny2GetPublicMilestones**](docs/Api/Destiny2Api.md#destiny2getpublicmilestones) | **GET** /Destiny2/Milestones/ | 
*Destiny2Api* | [**destiny2GetPublicVendors**](docs/Api/Destiny2Api.md#destiny2getpublicvendors) | **GET** /Destiny2/Vendors/ | 
*Destiny2Api* | [**destiny2GetUniqueWeaponHistory**](docs/Api/Destiny2Api.md#destiny2getuniqueweaponhistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/ | 
*Destiny2Api* | [**destiny2GetVendor**](docs/Api/Destiny2Api.md#destiny2getvendor) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/ | 
*Destiny2Api* | [**destiny2GetVendors**](docs/Api/Destiny2Api.md#destiny2getvendors) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/ | 
*Destiny2Api* | [**destiny2InsertSocketPlug**](docs/Api/Destiny2Api.md#destiny2insertsocketplug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
*Destiny2Api* | [**destiny2PullFromPostmaster**](docs/Api/Destiny2Api.md#destiny2pullfrompostmaster) | **POST** /Destiny2/Actions/Items/PullFromPostmaster/ | 
*Destiny2Api* | [**destiny2ReportOffensivePostGameCarnageReportPlayer**](docs/Api/Destiny2Api.md#destiny2reportoffensivepostgamecarnagereportplayer) | **POST** /Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/ | 
*Destiny2Api* | [**destiny2SearchDestinyEntities**](docs/Api/Destiny2Api.md#destiny2searchdestinyentities) | **GET** /Destiny2/Armory/Search/{type}/{searchTerm}/ | 
*Destiny2Api* | [**destiny2SearchDestinyPlayer**](docs/Api/Destiny2Api.md#destiny2searchdestinyplayer) | **GET** /Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/ | 
*Destiny2Api* | [**destiny2SetItemLockState**](docs/Api/Destiny2Api.md#destiny2setitemlockstate) | **POST** /Destiny2/Actions/Items/SetLockState/ | 
*Destiny2Api* | [**destiny2SetQuestTrackedState**](docs/Api/Destiny2Api.md#destiny2setquesttrackedstate) | **POST** /Destiny2/Actions/Items/SetTrackedState/ | 
*Destiny2Api* | [**destiny2TransferItem**](docs/Api/Destiny2Api.md#destiny2transferitem) | **POST** /Destiny2/Actions/Items/TransferItem/ | 
*FireteamApi* | [**fireteamGetActivePrivateClanFireteamCount**](docs/Api/FireteamApi.md#fireteamgetactiveprivateclanfireteamcount) | **GET** /Fireteam/Clan/{groupId}/ActiveCount/ | 
*FireteamApi* | [**fireteamGetAvailableClanFireteams**](docs/Api/FireteamApi.md#fireteamgetavailableclanfireteams) | **GET** /Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/ | 
*FireteamApi* | [**fireteamGetClanFireteam**](docs/Api/FireteamApi.md#fireteamgetclanfireteam) | **GET** /Fireteam/Clan/{groupId}/Summary/{fireteamId}/ | 
*FireteamApi* | [**fireteamGetMyClanFireteams**](docs/Api/FireteamApi.md#fireteamgetmyclanfireteams) | **GET** /Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/ | 
*FireteamApi* | [**fireteamSearchPublicAvailableClanFireteams**](docs/Api/FireteamApi.md#fireteamsearchpublicavailableclanfireteams) | **GET** /Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/ | 
*ForumApi* | [**forumGetCoreTopicsPaged**](docs/Api/ForumApi.md#forumgetcoretopicspaged) | **GET** /Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/ | 
*ForumApi* | [**forumGetForumTagSuggestions**](docs/Api/ForumApi.md#forumgetforumtagsuggestions) | **GET** /Forum/GetForumTagSuggestions/ | 
*ForumApi* | [**forumGetPoll**](docs/Api/ForumApi.md#forumgetpoll) | **GET** /Forum/Poll/{topicId}/ | 
*ForumApi* | [**forumGetPostAndParent**](docs/Api/ForumApi.md#forumgetpostandparent) | **GET** /Forum/GetPostAndParent/{childPostId}/ | 
*ForumApi* | [**forumGetPostAndParentAwaitingApproval**](docs/Api/ForumApi.md#forumgetpostandparentawaitingapproval) | **GET** /Forum/GetPostAndParentAwaitingApproval/{childPostId}/ | 
*ForumApi* | [**forumGetPostsThreadedPaged**](docs/Api/ForumApi.md#forumgetpoststhreadedpaged) | **GET** /Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/ | 
*ForumApi* | [**forumGetPostsThreadedPagedFromChild**](docs/Api/ForumApi.md#forumgetpoststhreadedpagedfromchild) | **GET** /Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/ | 
*ForumApi* | [**forumGetRecruitmentThreadSummaries**](docs/Api/ForumApi.md#forumgetrecruitmentthreadsummaries) | **POST** /Forum/Recruit/Summaries/ | 
*ForumApi* | [**forumGetTopicForContent**](docs/Api/ForumApi.md#forumgettopicforcontent) | **GET** /Forum/GetTopicForContent/{contentId}/ | 
*ForumApi* | [**forumGetTopicsPaged**](docs/Api/ForumApi.md#forumgettopicspaged) | **GET** /Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/ | 
*GroupV2Api* | [**groupV2AbdicateFoundership**](docs/Api/GroupV2Api.md#groupv2abdicatefoundership) | **POST** /GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/ | 
*GroupV2Api* | [**groupV2AddOptionalConversation**](docs/Api/GroupV2Api.md#groupv2addoptionalconversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Add/ | 
*GroupV2Api* | [**groupV2ApproveAllPending**](docs/Api/GroupV2Api.md#groupv2approveallpending) | **POST** /GroupV2/{groupId}/Members/ApproveAll/ | 
*GroupV2Api* | [**groupV2ApprovePending**](docs/Api/GroupV2Api.md#groupv2approvepending) | **POST** /GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/ | 
*GroupV2Api* | [**groupV2ApprovePendingForList**](docs/Api/GroupV2Api.md#groupv2approvependingforlist) | **POST** /GroupV2/{groupId}/Members/ApproveList/ | 
*GroupV2Api* | [**groupV2BanMember**](docs/Api/GroupV2Api.md#groupv2banmember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/ | 
*GroupV2Api* | [**groupV2DenyAllPending**](docs/Api/GroupV2Api.md#groupv2denyallpending) | **POST** /GroupV2/{groupId}/Members/DenyAll/ | 
*GroupV2Api* | [**groupV2DenyPendingForList**](docs/Api/GroupV2Api.md#groupv2denypendingforlist) | **POST** /GroupV2/{groupId}/Members/DenyList/ | 
*GroupV2Api* | [**groupV2EditClanBanner**](docs/Api/GroupV2Api.md#groupv2editclanbanner) | **POST** /GroupV2/{groupId}/EditClanBanner/ | 
*GroupV2Api* | [**groupV2EditFounderOptions**](docs/Api/GroupV2Api.md#groupv2editfounderoptions) | **POST** /GroupV2/{groupId}/EditFounderOptions/ | 
*GroupV2Api* | [**groupV2EditGroup**](docs/Api/GroupV2Api.md#groupv2editgroup) | **POST** /GroupV2/{groupId}/Edit/ | 
*GroupV2Api* | [**groupV2EditGroupMembership**](docs/Api/GroupV2Api.md#groupv2editgroupmembership) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/ | 
*GroupV2Api* | [**groupV2EditOptionalConversation**](docs/Api/GroupV2Api.md#groupv2editoptionalconversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/ | 
*GroupV2Api* | [**groupV2GetAdminsAndFounderOfGroup**](docs/Api/GroupV2Api.md#groupv2getadminsandfounderofgroup) | **GET** /GroupV2/{groupId}/AdminsAndFounder/ | 
*GroupV2Api* | [**groupV2GetAvailableAvatars**](docs/Api/GroupV2Api.md#groupv2getavailableavatars) | **GET** /GroupV2/GetAvailableAvatars/ | 
*GroupV2Api* | [**groupV2GetAvailableThemes**](docs/Api/GroupV2Api.md#groupv2getavailablethemes) | **GET** /GroupV2/GetAvailableThemes/ | 
*GroupV2Api* | [**groupV2GetBannedMembersOfGroup**](docs/Api/GroupV2Api.md#groupv2getbannedmembersofgroup) | **GET** /GroupV2/{groupId}/Banned/ | 
*GroupV2Api* | [**groupV2GetGroup**](docs/Api/GroupV2Api.md#groupv2getgroup) | **GET** /GroupV2/{groupId}/ | 
*GroupV2Api* | [**groupV2GetGroupByName**](docs/Api/GroupV2Api.md#groupv2getgroupbyname) | **GET** /GroupV2/Name/{groupName}/{groupType}/ | 
*GroupV2Api* | [**groupV2GetGroupByNameV2**](docs/Api/GroupV2Api.md#groupv2getgroupbynamev2) | **POST** /GroupV2/NameV2/ | 
*GroupV2Api* | [**groupV2GetGroupOptionalConversations**](docs/Api/GroupV2Api.md#groupv2getgroupoptionalconversations) | **GET** /GroupV2/{groupId}/OptionalConversations/ | 
*GroupV2Api* | [**groupV2GetGroupsForMember**](docs/Api/GroupV2Api.md#groupv2getgroupsformember) | **GET** /GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
*GroupV2Api* | [**groupV2GetInvitedIndividuals**](docs/Api/GroupV2Api.md#groupv2getinvitedindividuals) | **GET** /GroupV2/{groupId}/Members/InvitedIndividuals/ | 
*GroupV2Api* | [**groupV2GetMembersOfGroup**](docs/Api/GroupV2Api.md#groupv2getmembersofgroup) | **GET** /GroupV2/{groupId}/Members/ | 
*GroupV2Api* | [**groupV2GetPendingMemberships**](docs/Api/GroupV2Api.md#groupv2getpendingmemberships) | **GET** /GroupV2/{groupId}/Members/Pending/ | 
*GroupV2Api* | [**groupV2GetPotentialGroupsForMember**](docs/Api/GroupV2Api.md#groupv2getpotentialgroupsformember) | **GET** /GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
*GroupV2Api* | [**groupV2GetRecommendedGroups**](docs/Api/GroupV2Api.md#groupv2getrecommendedgroups) | **POST** /GroupV2/Recommended/{groupType}/{createDateRange}/ | 
*GroupV2Api* | [**groupV2GetUserClanInviteSetting**](docs/Api/GroupV2Api.md#groupv2getuserclaninvitesetting) | **GET** /GroupV2/GetUserClanInviteSetting/{mType}/ | 
*GroupV2Api* | [**groupV2GroupSearch**](docs/Api/GroupV2Api.md#groupv2groupsearch) | **POST** /GroupV2/Search/ | 
*GroupV2Api* | [**groupV2IndividualGroupInvite**](docs/Api/GroupV2Api.md#groupv2individualgroupinvite) | **POST** /GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/ | 
*GroupV2Api* | [**groupV2IndividualGroupInviteCancel**](docs/Api/GroupV2Api.md#groupv2individualgroupinvitecancel) | **POST** /GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/ | 
*GroupV2Api* | [**groupV2KickMember**](docs/Api/GroupV2Api.md#groupv2kickmember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/ | 
*GroupV2Api* | [**groupV2RecoverGroupForFounder**](docs/Api/GroupV2Api.md#groupv2recovergroupforfounder) | **GET** /GroupV2/Recover/{membershipType}/{membershipId}/{groupType}/ | 
*GroupV2Api* | [**groupV2UnbanMember**](docs/Api/GroupV2Api.md#groupv2unbanmember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/ | 
*PreviewApi* | [**destiny2GetClanAggregateStats**](docs/Api/PreviewApi.md#destiny2getclanaggregatestats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
*PreviewApi* | [**destiny2GetClanLeaderboards**](docs/Api/PreviewApi.md#destiny2getclanleaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
*PreviewApi* | [**destiny2GetLeaderboards**](docs/Api/PreviewApi.md#destiny2getleaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
*PreviewApi* | [**destiny2GetLeaderboardsForCharacter**](docs/Api/PreviewApi.md#destiny2getleaderboardsforcharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
*PreviewApi* | [**destiny2GetPublicVendors**](docs/Api/PreviewApi.md#destiny2getpublicvendors) | **GET** /Destiny2/Vendors/ | 
*PreviewApi* | [**destiny2InsertSocketPlug**](docs/Api/PreviewApi.md#destiny2insertsocketplug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
*TokensApi* | [**tokensApplyMissingPartnerOffersWithoutClaim**](docs/Api/TokensApi.md#tokensapplymissingpartnerofferswithoutclaim) | **POST** /Tokens/Partner/ApplyMissingOffers/{partnerApplicationId}/{targetBnetMembershipId}/ | 
*TokensApi* | [**tokensClaimPartnerOffer**](docs/Api/TokensApi.md#tokensclaimpartneroffer) | **POST** /Tokens/Partner/ClaimOffer/ | 
*TokensApi* | [**tokensGetPartnerOfferSkuHistory**](docs/Api/TokensApi.md#tokensgetpartnerofferskuhistory) | **GET** /Tokens/Partner/History/{partnerApplicationId}/{targetBnetMembershipId}/ | 
*TrendingApi* | [**trendingGetTrendingCategories**](docs/Api/TrendingApi.md#trendinggettrendingcategories) | **GET** /Trending/Categories/ | 
*TrendingApi* | [**trendingGetTrendingCategory**](docs/Api/TrendingApi.md#trendinggettrendingcategory) | **GET** /Trending/Categories/{categoryId}/{pageNumber}/ | 
*TrendingApi* | [**trendingGetTrendingEntryDetail**](docs/Api/TrendingApi.md#trendinggettrendingentrydetail) | **GET** /Trending/Details/{trendingEntryType}/{identifier}/ | 
*UserApi* | [**userGetAvailableThemes**](docs/Api/UserApi.md#usergetavailablethemes) | **GET** /User/GetAvailableThemes/ | 
*UserApi* | [**userGetBungieNetUserById**](docs/Api/UserApi.md#usergetbungienetuserbyid) | **GET** /User/GetBungieNetUserById/{id}/ | 
*UserApi* | [**userGetCredentialTypesForTargetAccount**](docs/Api/UserApi.md#usergetcredentialtypesfortargetaccount) | **GET** /User/GetCredentialTypesForTargetAccount/{membershipId}/ | 
*UserApi* | [**userGetMembershipDataById**](docs/Api/UserApi.md#usergetmembershipdatabyid) | **GET** /User/GetMembershipsById/{membershipId}/{membershipType}/ | 
*UserApi* | [**userGetMembershipDataForCurrentUser**](docs/Api/UserApi.md#usergetmembershipdataforcurrentuser) | **GET** /User/GetMembershipsForCurrentUser/ | 
*UserApi* | [**userGetMembershipFromHardLinkedCredential**](docs/Api/UserApi.md#usergetmembershipfromhardlinkedcredential) | **GET** /User/GetMembershipFromHardLinkedCredential/{crType}/{credential}/ | 
*UserApi* | [**userSearchUsers**](docs/Api/UserApi.md#usersearchusers) | **GET** /User/SearchUsers/ | 

## Models

- [ApplicationsApiUsage](docs/Model/ApplicationsApiUsage.md)
- [ApplicationsApplication](docs/Model/ApplicationsApplication.md)
- [ApplicationsApplicationDeveloper](docs/Model/ApplicationsApplicationDeveloper.md)
- [ApplicationsApplicationScopes](docs/Model/ApplicationsApplicationScopes.md)
- [ApplicationsApplicationStatus](docs/Model/ApplicationsApplicationStatus.md)
- [ApplicationsDatapoint](docs/Model/ApplicationsDatapoint.md)
- [ApplicationsDeveloperRole](docs/Model/ApplicationsDeveloperRole.md)
- [ApplicationsSeries](docs/Model/ApplicationsSeries.md)
- [BungieCredentialType](docs/Model/BungieCredentialType.md)
- [BungieMembershipType](docs/Model/BungieMembershipType.md)
- [CommonModelsCoreSetting](docs/Model/CommonModelsCoreSetting.md)
- [CommonModelsCoreSettingsConfiguration](docs/Model/CommonModelsCoreSettingsConfiguration.md)
- [CommonModelsCoreSystem](docs/Model/CommonModelsCoreSystem.md)
- [CommonModelsDestiny2CoreSettings](docs/Model/CommonModelsDestiny2CoreSettings.md)
- [ComponentsComponentPrivacySetting](docs/Model/ComponentsComponentPrivacySetting.md)
- [ComponentsComponentResponse](docs/Model/ComponentsComponentResponse.md)
- [ConfigGroupTheme](docs/Model/ConfigGroupTheme.md)
- [ConfigUserTheme](docs/Model/ConfigUserTheme.md)
- [ContentCommentSummary](docs/Model/ContentCommentSummary.md)
- [ContentContentItemPublicContract](docs/Model/ContentContentItemPublicContract.md)
- [ContentContentRepresentation](docs/Model/ContentContentRepresentation.md)
- [ContentModelsContentPreview](docs/Model/ContentModelsContentPreview.md)
- [ContentModelsContentPropertyDataTypeEnum](docs/Model/ContentModelsContentPropertyDataTypeEnum.md)
- [ContentModelsContentTypeDefaultValue](docs/Model/ContentModelsContentTypeDefaultValue.md)
- [ContentModelsContentTypeDescription](docs/Model/ContentModelsContentTypeDescription.md)
- [ContentModelsContentTypeProperty](docs/Model/ContentModelsContentTypeProperty.md)
- [ContentModelsContentTypePropertySection](docs/Model/ContentModelsContentTypePropertySection.md)
- [ContentModelsTagMetadataDefinition](docs/Model/ContentModelsTagMetadataDefinition.md)
- [ContentModelsTagMetadataItem](docs/Model/ContentModelsTagMetadataItem.md)
- [DatesDateRange](docs/Model/DatesDateRange.md)
- [DestinyActivitiesDestinyPublicActivityStatus](docs/Model/DestinyActivitiesDestinyPublicActivityStatus.md)
- [DestinyActivityGraphNodeHighlightType](docs/Model/DestinyActivityGraphNodeHighlightType.md)
- [DestinyAdvancedAwaAuthorizationResult](docs/Model/DestinyAdvancedAwaAuthorizationResult.md)
- [DestinyAdvancedAwaInitializeResponse](docs/Model/DestinyAdvancedAwaInitializeResponse.md)
- [DestinyAdvancedAwaPermissionRequested](docs/Model/DestinyAdvancedAwaPermissionRequested.md)
- [DestinyAdvancedAwaResponseReason](docs/Model/DestinyAdvancedAwaResponseReason.md)
- [DestinyAdvancedAwaType](docs/Model/DestinyAdvancedAwaType.md)
- [DestinyAdvancedAwaUserResponse](docs/Model/DestinyAdvancedAwaUserResponse.md)
- [DestinyAdvancedAwaUserSelection](docs/Model/DestinyAdvancedAwaUserSelection.md)
- [DestinyArtifactsDestinyArtifactCharacterScoped](docs/Model/DestinyArtifactsDestinyArtifactCharacterScoped.md)
- [DestinyArtifactsDestinyArtifactProfileScoped](docs/Model/DestinyArtifactsDestinyArtifactProfileScoped.md)
- [DestinyArtifactsDestinyArtifactTier](docs/Model/DestinyArtifactsDestinyArtifactTier.md)
- [DestinyArtifactsDestinyArtifactTierItem](docs/Model/DestinyArtifactsDestinyArtifactTierItem.md)
- [DestinyBaseItemComponentSetOfint32](docs/Model/DestinyBaseItemComponentSetOfint32.md)
- [DestinyBaseItemComponentSetOfint64](docs/Model/DestinyBaseItemComponentSetOfint64.md)
- [DestinyBaseItemComponentSetOfuint32](docs/Model/DestinyBaseItemComponentSetOfuint32.md)
- [DestinyBucketCategory](docs/Model/DestinyBucketCategory.md)
- [DestinyBucketScope](docs/Model/DestinyBucketScope.md)
- [DestinyChallengesDestinyChallengeStatus](docs/Model/DestinyChallengesDestinyChallengeStatus.md)
- [DestinyCharacterDestinyCharacterCustomization](docs/Model/DestinyCharacterDestinyCharacterCustomization.md)
- [DestinyCharacterDestinyCharacterPeerView](docs/Model/DestinyCharacterDestinyCharacterPeerView.md)
- [DestinyCharacterDestinyItemPeerView](docs/Model/DestinyCharacterDestinyItemPeerView.md)
- [DestinyComponentsCollectiblesDestinyCollectibleComponent](docs/Model/DestinyComponentsCollectiblesDestinyCollectibleComponent.md)
- [DestinyComponentsCollectiblesDestinyCollectiblesComponent](docs/Model/DestinyComponentsCollectiblesDestinyCollectiblesComponent.md)
- [DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent](docs/Model/DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent.md)
- [DestinyComponentsInventoryDestinyCurrenciesComponent](docs/Model/DestinyComponentsInventoryDestinyCurrenciesComponent.md)
- [DestinyComponentsInventoryDestinyPlatformSilverComponent](docs/Model/DestinyComponentsInventoryDestinyPlatformSilverComponent.md)
- [DestinyComponentsItemsDestinyItemPlugComponent](docs/Model/DestinyComponentsItemsDestinyItemPlugComponent.md)
- [DestinyComponentsItemsDestinyItemPlugObjectivesComponent](docs/Model/DestinyComponentsItemsDestinyItemPlugObjectivesComponent.md)
- [DestinyComponentsItemsDestinyItemReusablePlugsComponent](docs/Model/DestinyComponentsItemsDestinyItemReusablePlugsComponent.md)
- [DestinyComponentsKiosksDestinyKioskItem](docs/Model/DestinyComponentsKiosksDestinyKioskItem.md)
- [DestinyComponentsKiosksDestinyKiosksComponent](docs/Model/DestinyComponentsKiosksDestinyKiosksComponent.md)
- [DestinyComponentsMetricsDestinyMetricComponent](docs/Model/DestinyComponentsMetricsDestinyMetricComponent.md)
- [DestinyComponentsMetricsDestinyMetricsComponent](docs/Model/DestinyComponentsMetricsDestinyMetricsComponent.md)
- [DestinyComponentsPlugSetsDestinyPlugSetsComponent](docs/Model/DestinyComponentsPlugSetsDestinyPlugSetsComponent.md)
- [DestinyComponentsPresentationDestinyPresentationNodeComponent](docs/Model/DestinyComponentsPresentationDestinyPresentationNodeComponent.md)
- [DestinyComponentsPresentationDestinyPresentationNodesComponent](docs/Model/DestinyComponentsPresentationDestinyPresentationNodesComponent.md)
- [DestinyComponentsProfilesDestinyProfileProgressionComponent](docs/Model/DestinyComponentsProfilesDestinyProfileProgressionComponent.md)
- [DestinyComponentsProfilesDestinyProfileTransitoryComponent](docs/Model/DestinyComponentsProfilesDestinyProfileTransitoryComponent.md)
- [DestinyComponentsProfilesDestinyProfileTransitoryCurrentActivity](docs/Model/DestinyComponentsProfilesDestinyProfileTransitoryCurrentActivity.md)
- [DestinyComponentsProfilesDestinyProfileTransitoryJoinability](docs/Model/DestinyComponentsProfilesDestinyProfileTransitoryJoinability.md)
- [DestinyComponentsProfilesDestinyProfileTransitoryPartyMember](docs/Model/DestinyComponentsProfilesDestinyProfileTransitoryPartyMember.md)
- [DestinyComponentsProfilesDestinyProfileTransitoryTrackingEntry](docs/Model/DestinyComponentsProfilesDestinyProfileTransitoryTrackingEntry.md)
- [DestinyComponentsRecordsDestinyCharacterRecordsComponent](docs/Model/DestinyComponentsRecordsDestinyCharacterRecordsComponent.md)
- [DestinyComponentsRecordsDestinyProfileRecordsComponent](docs/Model/DestinyComponentsRecordsDestinyProfileRecordsComponent.md)
- [DestinyComponentsRecordsDestinyRecordComponent](docs/Model/DestinyComponentsRecordsDestinyRecordComponent.md)
- [DestinyComponentsRecordsDestinyRecordsComponent](docs/Model/DestinyComponentsRecordsDestinyRecordsComponent.md)
- [DestinyComponentsVendorsDestinyPublicVendorComponent](docs/Model/DestinyComponentsVendorsDestinyPublicVendorComponent.md)
- [DestinyComponentsVendorsDestinyPublicVendorSaleItemComponent](docs/Model/DestinyComponentsVendorsDestinyPublicVendorSaleItemComponent.md)
- [DestinyComponentsVendorsDestinyVendorBaseComponent](docs/Model/DestinyComponentsVendorsDestinyVendorBaseComponent.md)
- [DestinyComponentsVendorsDestinyVendorGroup](docs/Model/DestinyComponentsVendorsDestinyVendorGroup.md)
- [DestinyComponentsVendorsDestinyVendorGroupComponent](docs/Model/DestinyComponentsVendorsDestinyVendorGroupComponent.md)
- [DestinyComponentsVendorsDestinyVendorSaleItemBaseComponent](docs/Model/DestinyComponentsVendorsDestinyVendorSaleItemBaseComponent.md)
- [DestinyConfigDestinyManifest](docs/Model/DestinyConfigDestinyManifest.md)
- [DestinyConfigGearAssetDataBaseDefinition](docs/Model/DestinyConfigGearAssetDataBaseDefinition.md)
- [DestinyConfigImagePyramidEntry](docs/Model/DestinyConfigImagePyramidEntry.md)
- [DestinyConstantsDestinyEnvironmentLocationMapping](docs/Model/DestinyConstantsDestinyEnvironmentLocationMapping.md)
- [DestinyDamageType](docs/Model/DestinyDamageType.md)
- [DestinyDefinitionsActivityModifiersDestinyActivityModifierDefinition](docs/Model/DestinyDefinitionsActivityModifiersDestinyActivityModifierDefinition.md)
- [DestinyDefinitionsAnimationsDestinyAnimationReference](docs/Model/DestinyDefinitionsAnimationsDestinyAnimationReference.md)
- [DestinyDefinitionsArtifactsDestinyArtifactDefinition](docs/Model/DestinyDefinitionsArtifactsDestinyArtifactDefinition.md)
- [DestinyDefinitionsArtifactsDestinyArtifactTierDefinition](docs/Model/DestinyDefinitionsArtifactsDestinyArtifactTierDefinition.md)
- [DestinyDefinitionsArtifactsDestinyArtifactTierItemDefinition](docs/Model/DestinyDefinitionsArtifactsDestinyArtifactTierItemDefinition.md)
- [DestinyDefinitionsBreakerTypesDestinyBreakerTypeDefinition](docs/Model/DestinyDefinitionsBreakerTypesDestinyBreakerTypeDefinition.md)
- [DestinyDefinitionsChecklistsDestinyChecklistDefinition](docs/Model/DestinyDefinitionsChecklistsDestinyChecklistDefinition.md)
- [DestinyDefinitionsChecklistsDestinyChecklistEntryDefinition](docs/Model/DestinyDefinitionsChecklistsDestinyChecklistEntryDefinition.md)
- [DestinyDefinitionsCollectiblesDestinyCollectibleAcquisitionBlock](docs/Model/DestinyDefinitionsCollectiblesDestinyCollectibleAcquisitionBlock.md)
- [DestinyDefinitionsCollectiblesDestinyCollectibleDefinition](docs/Model/DestinyDefinitionsCollectiblesDestinyCollectibleDefinition.md)
- [DestinyDefinitionsCollectiblesDestinyCollectibleStateBlock](docs/Model/DestinyDefinitionsCollectiblesDestinyCollectibleStateBlock.md)
- [DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition](docs/Model/DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md)
- [DestinyDefinitionsCommonDestinyIconSequenceDefinition](docs/Model/DestinyDefinitionsCommonDestinyIconSequenceDefinition.md)
- [DestinyDefinitionsCommonDestinyPositionDefinition](docs/Model/DestinyDefinitionsCommonDestinyPositionDefinition.md)
- [DestinyDefinitionsDestinyActivityChallengeDefinition](docs/Model/DestinyDefinitionsDestinyActivityChallengeDefinition.md)
- [DestinyDefinitionsDestinyActivityDefinition](docs/Model/DestinyDefinitionsDestinyActivityDefinition.md)
- [DestinyDefinitionsDestinyActivityGraphListEntryDefinition](docs/Model/DestinyDefinitionsDestinyActivityGraphListEntryDefinition.md)
- [DestinyDefinitionsDestinyActivityGuidedBlockDefinition](docs/Model/DestinyDefinitionsDestinyActivityGuidedBlockDefinition.md)
- [DestinyDefinitionsDestinyActivityInsertionPointDefinition](docs/Model/DestinyDefinitionsDestinyActivityInsertionPointDefinition.md)
- [DestinyDefinitionsDestinyActivityLoadoutRequirement](docs/Model/DestinyDefinitionsDestinyActivityLoadoutRequirement.md)
- [DestinyDefinitionsDestinyActivityLoadoutRequirementSet](docs/Model/DestinyDefinitionsDestinyActivityLoadoutRequirementSet.md)
- [DestinyDefinitionsDestinyActivityMatchmakingBlockDefinition](docs/Model/DestinyDefinitionsDestinyActivityMatchmakingBlockDefinition.md)
- [DestinyDefinitionsDestinyActivityModeDefinition](docs/Model/DestinyDefinitionsDestinyActivityModeDefinition.md)
- [DestinyDefinitionsDestinyActivityModifierReferenceDefinition](docs/Model/DestinyDefinitionsDestinyActivityModifierReferenceDefinition.md)
- [DestinyDefinitionsDestinyActivityPlaylistItemDefinition](docs/Model/DestinyDefinitionsDestinyActivityPlaylistItemDefinition.md)
- [DestinyDefinitionsDestinyActivityRewardDefinition](docs/Model/DestinyDefinitionsDestinyActivityRewardDefinition.md)
- [DestinyDefinitionsDestinyActivityTypeDefinition](docs/Model/DestinyDefinitionsDestinyActivityTypeDefinition.md)
- [DestinyDefinitionsDestinyActivityUnlockStringDefinition](docs/Model/DestinyDefinitionsDestinyActivityUnlockStringDefinition.md)
- [DestinyDefinitionsDestinyArtDyeReference](docs/Model/DestinyDefinitionsDestinyArtDyeReference.md)
- [DestinyDefinitionsDestinyBubbleDefinition](docs/Model/DestinyDefinitionsDestinyBubbleDefinition.md)
- [DestinyDefinitionsDestinyClassDefinition](docs/Model/DestinyDefinitionsDestinyClassDefinition.md)
- [DestinyDefinitionsDestinyDamageTypeDefinition](docs/Model/DestinyDefinitionsDestinyDamageTypeDefinition.md)
- [DestinyDefinitionsDestinyDefinition](docs/Model/DestinyDefinitionsDestinyDefinition.md)
- [DestinyDefinitionsDestinyDestinationBubbleSettingDefinition](docs/Model/DestinyDefinitionsDestinyDestinationBubbleSettingDefinition.md)
- [DestinyDefinitionsDestinyDestinationDefinition](docs/Model/DestinyDefinitionsDestinyDestinationDefinition.md)
- [DestinyDefinitionsDestinyDisplayCategoryDefinition](docs/Model/DestinyDefinitionsDestinyDisplayCategoryDefinition.md)
- [DestinyDefinitionsDestinyEntitySearchResult](docs/Model/DestinyDefinitionsDestinyEntitySearchResult.md)
- [DestinyDefinitionsDestinyEntitySearchResultItem](docs/Model/DestinyDefinitionsDestinyEntitySearchResultItem.md)
- [DestinyDefinitionsDestinyEquipmentSlotDefinition](docs/Model/DestinyDefinitionsDestinyEquipmentSlotDefinition.md)
- [DestinyDefinitionsDestinyEquippingBlockDefinition](docs/Model/DestinyDefinitionsDestinyEquippingBlockDefinition.md)
- [DestinyDefinitionsDestinyFactionDefinition](docs/Model/DestinyDefinitionsDestinyFactionDefinition.md)
- [DestinyDefinitionsDestinyFactionVendorDefinition](docs/Model/DestinyDefinitionsDestinyFactionVendorDefinition.md)
- [DestinyDefinitionsDestinyGearArtArrangementReference](docs/Model/DestinyDefinitionsDestinyGearArtArrangementReference.md)
- [DestinyDefinitionsDestinyGenderDefinition](docs/Model/DestinyDefinitionsDestinyGenderDefinition.md)
- [DestinyDefinitionsDestinyInventoryBucketDefinition](docs/Model/DestinyDefinitionsDestinyInventoryBucketDefinition.md)
- [DestinyDefinitionsDestinyInventoryItemDefinition](docs/Model/DestinyDefinitionsDestinyInventoryItemDefinition.md)
- [DestinyDefinitionsDestinyInventoryItemStatDefinition](docs/Model/DestinyDefinitionsDestinyInventoryItemStatDefinition.md)
- [DestinyDefinitionsDestinyItemActionBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemActionBlockDefinition.md)
- [DestinyDefinitionsDestinyItemActionRequiredItemDefinition](docs/Model/DestinyDefinitionsDestinyItemActionRequiredItemDefinition.md)
- [DestinyDefinitionsDestinyItemCategoryDefinition](docs/Model/DestinyDefinitionsDestinyItemCategoryDefinition.md)
- [DestinyDefinitionsDestinyItemCreationEntryLevelDefinition](docs/Model/DestinyDefinitionsDestinyItemCreationEntryLevelDefinition.md)
- [DestinyDefinitionsDestinyItemGearsetBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemGearsetBlockDefinition.md)
- [DestinyDefinitionsDestinyItemIntrinsicSocketEntryDefinition](docs/Model/DestinyDefinitionsDestinyItemIntrinsicSocketEntryDefinition.md)
- [DestinyDefinitionsDestinyItemInventoryBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemInventoryBlockDefinition.md)
- [DestinyDefinitionsDestinyItemInvestmentStatDefinition](docs/Model/DestinyDefinitionsDestinyItemInvestmentStatDefinition.md)
- [DestinyDefinitionsDestinyItemMetricBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemMetricBlockDefinition.md)
- [DestinyDefinitionsDestinyItemObjectiveBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemObjectiveBlockDefinition.md)
- [DestinyDefinitionsDestinyItemPerkEntryDefinition](docs/Model/DestinyDefinitionsDestinyItemPerkEntryDefinition.md)
- [DestinyDefinitionsDestinyItemPreviewBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemPreviewBlockDefinition.md)
- [DestinyDefinitionsDestinyItemQualityBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemQualityBlockDefinition.md)
- [DestinyDefinitionsDestinyItemSackBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemSackBlockDefinition.md)
- [DestinyDefinitionsDestinyItemSetBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemSetBlockDefinition.md)
- [DestinyDefinitionsDestinyItemSetBlockEntryDefinition](docs/Model/DestinyDefinitionsDestinyItemSetBlockEntryDefinition.md)
- [DestinyDefinitionsDestinyItemSocketBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemSocketBlockDefinition.md)
- [DestinyDefinitionsDestinyItemSocketCategoryDefinition](docs/Model/DestinyDefinitionsDestinyItemSocketCategoryDefinition.md)
- [DestinyDefinitionsDestinyItemSocketEntryDefinition](docs/Model/DestinyDefinitionsDestinyItemSocketEntryDefinition.md)
- [DestinyDefinitionsDestinyItemSocketEntryPlugItemDefinition](docs/Model/DestinyDefinitionsDestinyItemSocketEntryPlugItemDefinition.md)
- [DestinyDefinitionsDestinyItemSocketEntryPlugItemRandomizedDefinition](docs/Model/DestinyDefinitionsDestinyItemSocketEntryPlugItemRandomizedDefinition.md)
- [DestinyDefinitionsDestinyItemSourceBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemSourceBlockDefinition.md)
- [DestinyDefinitionsDestinyItemStatBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemStatBlockDefinition.md)
- [DestinyDefinitionsDestinyItemSummaryBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemSummaryBlockDefinition.md)
- [DestinyDefinitionsDestinyItemTalentGridBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemTalentGridBlockDefinition.md)
- [DestinyDefinitionsDestinyItemTooltipNotification](docs/Model/DestinyDefinitionsDestinyItemTooltipNotification.md)
- [DestinyDefinitionsDestinyItemTranslationBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemTranslationBlockDefinition.md)
- [DestinyDefinitionsDestinyItemValueBlockDefinition](docs/Model/DestinyDefinitionsDestinyItemValueBlockDefinition.md)
- [DestinyDefinitionsDestinyItemVendorSourceReference](docs/Model/DestinyDefinitionsDestinyItemVendorSourceReference.md)
- [DestinyDefinitionsDestinyItemVersionDefinition](docs/Model/DestinyDefinitionsDestinyItemVersionDefinition.md)
- [DestinyDefinitionsDestinyLocationDefinition](docs/Model/DestinyDefinitionsDestinyLocationDefinition.md)
- [DestinyDefinitionsDestinyLocationReleaseDefinition](docs/Model/DestinyDefinitionsDestinyLocationReleaseDefinition.md)
- [DestinyDefinitionsDestinyMaterialRequirement](docs/Model/DestinyDefinitionsDestinyMaterialRequirement.md)
- [DestinyDefinitionsDestinyMaterialRequirementSetDefinition](docs/Model/DestinyDefinitionsDestinyMaterialRequirementSetDefinition.md)
- [DestinyDefinitionsDestinyNodeActivationRequirement](docs/Model/DestinyDefinitionsDestinyNodeActivationRequirement.md)
- [DestinyDefinitionsDestinyNodeSocketReplaceResponse](docs/Model/DestinyDefinitionsDestinyNodeSocketReplaceResponse.md)
- [DestinyDefinitionsDestinyNodeStepDefinition](docs/Model/DestinyDefinitionsDestinyNodeStepDefinition.md)
- [DestinyDefinitionsDestinyObjectiveDefinition](docs/Model/DestinyDefinitionsDestinyObjectiveDefinition.md)
- [DestinyDefinitionsDestinyObjectiveDisplayProperties](docs/Model/DestinyDefinitionsDestinyObjectiveDisplayProperties.md)
- [DestinyDefinitionsDestinyObjectivePerkEntryDefinition](docs/Model/DestinyDefinitionsDestinyObjectivePerkEntryDefinition.md)
- [DestinyDefinitionsDestinyObjectiveStatEntryDefinition](docs/Model/DestinyDefinitionsDestinyObjectiveStatEntryDefinition.md)
- [DestinyDefinitionsDestinyPlaceDefinition](docs/Model/DestinyDefinitionsDestinyPlaceDefinition.md)
- [DestinyDefinitionsDestinyProgressionDefinition](docs/Model/DestinyDefinitionsDestinyProgressionDefinition.md)
- [DestinyDefinitionsDestinyProgressionDisplayPropertiesDefinition](docs/Model/DestinyDefinitionsDestinyProgressionDisplayPropertiesDefinition.md)
- [DestinyDefinitionsDestinyProgressionMappingDefinition](docs/Model/DestinyDefinitionsDestinyProgressionMappingDefinition.md)
- [DestinyDefinitionsDestinyProgressionRewardDefinition](docs/Model/DestinyDefinitionsDestinyProgressionRewardDefinition.md)
- [DestinyDefinitionsDestinyProgressionRewardItemQuantity](docs/Model/DestinyDefinitionsDestinyProgressionRewardItemQuantity.md)
- [DestinyDefinitionsDestinyProgressionStepDefinition](docs/Model/DestinyDefinitionsDestinyProgressionStepDefinition.md)
- [DestinyDefinitionsDestinyRaceDefinition](docs/Model/DestinyDefinitionsDestinyRaceDefinition.md)
- [DestinyDefinitionsDestinyRewardSourceCategory](docs/Model/DestinyDefinitionsDestinyRewardSourceCategory.md)
- [DestinyDefinitionsDestinyRewardSourceDefinition](docs/Model/DestinyDefinitionsDestinyRewardSourceDefinition.md)
- [DestinyDefinitionsDestinySandboxPerkDefinition](docs/Model/DestinyDefinitionsDestinySandboxPerkDefinition.md)
- [DestinyDefinitionsDestinyStatDefinition](docs/Model/DestinyDefinitionsDestinyStatDefinition.md)
- [DestinyDefinitionsDestinyStatDisplayDefinition](docs/Model/DestinyDefinitionsDestinyStatDisplayDefinition.md)
- [DestinyDefinitionsDestinyStatGroupDefinition](docs/Model/DestinyDefinitionsDestinyStatGroupDefinition.md)
- [DestinyDefinitionsDestinyStatOverrideDefinition](docs/Model/DestinyDefinitionsDestinyStatOverrideDefinition.md)
- [DestinyDefinitionsDestinyTalentExclusiveGroup](docs/Model/DestinyDefinitionsDestinyTalentExclusiveGroup.md)
- [DestinyDefinitionsDestinyTalentGridDefinition](docs/Model/DestinyDefinitionsDestinyTalentGridDefinition.md)
- [DestinyDefinitionsDestinyTalentNodeCategory](docs/Model/DestinyDefinitionsDestinyTalentNodeCategory.md)
- [DestinyDefinitionsDestinyTalentNodeDefinition](docs/Model/DestinyDefinitionsDestinyTalentNodeDefinition.md)
- [DestinyDefinitionsDestinyTalentNodeExclusiveSetDefinition](docs/Model/DestinyDefinitionsDestinyTalentNodeExclusiveSetDefinition.md)
- [DestinyDefinitionsDestinyTalentNodeStepDamageTypes](docs/Model/DestinyDefinitionsDestinyTalentNodeStepDamageTypes.md)
- [DestinyDefinitionsDestinyTalentNodeStepGroups](docs/Model/DestinyDefinitionsDestinyTalentNodeStepGroups.md)
- [DestinyDefinitionsDestinyTalentNodeStepGuardianAttributes](docs/Model/DestinyDefinitionsDestinyTalentNodeStepGuardianAttributes.md)
- [DestinyDefinitionsDestinyTalentNodeStepImpactEffects](docs/Model/DestinyDefinitionsDestinyTalentNodeStepImpactEffects.md)
- [DestinyDefinitionsDestinyTalentNodeStepLightAbilities](docs/Model/DestinyDefinitionsDestinyTalentNodeStepLightAbilities.md)
- [DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances](docs/Model/DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances.md)
- [DestinyDefinitionsDestinyUnlockDefinition](docs/Model/DestinyDefinitionsDestinyUnlockDefinition.md)
- [DestinyDefinitionsDestinyUnlockExpressionDefinition](docs/Model/DestinyDefinitionsDestinyUnlockExpressionDefinition.md)
- [DestinyDefinitionsDestinyUnlockValueDefinition](docs/Model/DestinyDefinitionsDestinyUnlockValueDefinition.md)
- [DestinyDefinitionsDestinyVendorAcceptedItemDefinition](docs/Model/DestinyDefinitionsDestinyVendorAcceptedItemDefinition.md)
- [DestinyDefinitionsDestinyVendorActionDefinition](docs/Model/DestinyDefinitionsDestinyVendorActionDefinition.md)
- [DestinyDefinitionsDestinyVendorCategoryEntryDefinition](docs/Model/DestinyDefinitionsDestinyVendorCategoryEntryDefinition.md)
- [DestinyDefinitionsDestinyVendorCategoryOverlayDefinition](docs/Model/DestinyDefinitionsDestinyVendorCategoryOverlayDefinition.md)
- [DestinyDefinitionsDestinyVendorDefinition](docs/Model/DestinyDefinitionsDestinyVendorDefinition.md)
- [DestinyDefinitionsDestinyVendorDisplayPropertiesDefinition](docs/Model/DestinyDefinitionsDestinyVendorDisplayPropertiesDefinition.md)
- [DestinyDefinitionsDestinyVendorGroupDefinition](docs/Model/DestinyDefinitionsDestinyVendorGroupDefinition.md)
- [DestinyDefinitionsDestinyVendorGroupReference](docs/Model/DestinyDefinitionsDestinyVendorGroupReference.md)
- [DestinyDefinitionsDestinyVendorInteractionDefinition](docs/Model/DestinyDefinitionsDestinyVendorInteractionDefinition.md)
- [DestinyDefinitionsDestinyVendorInteractionReplyDefinition](docs/Model/DestinyDefinitionsDestinyVendorInteractionReplyDefinition.md)
- [DestinyDefinitionsDestinyVendorInteractionSackEntryDefinition](docs/Model/DestinyDefinitionsDestinyVendorInteractionSackEntryDefinition.md)
- [DestinyDefinitionsDestinyVendorInventoryFlyoutBucketDefinition](docs/Model/DestinyDefinitionsDestinyVendorInventoryFlyoutBucketDefinition.md)
- [DestinyDefinitionsDestinyVendorInventoryFlyoutDefinition](docs/Model/DestinyDefinitionsDestinyVendorInventoryFlyoutDefinition.md)
- [DestinyDefinitionsDestinyVendorItemDefinition](docs/Model/DestinyDefinitionsDestinyVendorItemDefinition.md)
- [DestinyDefinitionsDestinyVendorItemQuantity](docs/Model/DestinyDefinitionsDestinyVendorItemQuantity.md)
- [DestinyDefinitionsDestinyVendorItemSocketOverride](docs/Model/DestinyDefinitionsDestinyVendorItemSocketOverride.md)
- [DestinyDefinitionsDestinyVendorRequirementDisplayEntryDefinition](docs/Model/DestinyDefinitionsDestinyVendorRequirementDisplayEntryDefinition.md)
- [DestinyDefinitionsDestinyVendorSaleItemActionBlockDefinition](docs/Model/DestinyDefinitionsDestinyVendorSaleItemActionBlockDefinition.md)
- [DestinyDefinitionsDestinyVendorServiceDefinition](docs/Model/DestinyDefinitionsDestinyVendorServiceDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphArtElementDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphArtElementDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphConnectionDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphConnectionDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphDisplayObjectiveDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphDisplayObjectiveDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphDisplayProgressionDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphDisplayProgressionDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphNodeActivityDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphNodeActivityDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphNodeDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphNodeDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphNodeFeaturingStateDefinition](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphNodeFeaturingStateDefinition.md)
- [DestinyDefinitionsDirectorDestinyActivityGraphNodeStateEntry](docs/Model/DestinyDefinitionsDirectorDestinyActivityGraphNodeStateEntry.md)
- [DestinyDefinitionsDirectorDestinyLinkedGraphDefinition](docs/Model/DestinyDefinitionsDirectorDestinyLinkedGraphDefinition.md)
- [DestinyDefinitionsDirectorDestinyLinkedGraphEntryDefinition](docs/Model/DestinyDefinitionsDirectorDestinyLinkedGraphEntryDefinition.md)
- [DestinyDefinitionsEnergyTypesDestinyEnergyTypeDefinition](docs/Model/DestinyDefinitionsEnergyTypesDestinyEnergyTypeDefinition.md)
- [DestinyDefinitionsItemsDestinyDerivedItemCategoryDefinition](docs/Model/DestinyDefinitionsItemsDestinyDerivedItemCategoryDefinition.md)
- [DestinyDefinitionsItemsDestinyDerivedItemDefinition](docs/Model/DestinyDefinitionsItemsDestinyDerivedItemDefinition.md)
- [DestinyDefinitionsItemsDestinyEnergyCapacityEntry](docs/Model/DestinyDefinitionsItemsDestinyEnergyCapacityEntry.md)
- [DestinyDefinitionsItemsDestinyEnergyCostEntry](docs/Model/DestinyDefinitionsItemsDestinyEnergyCostEntry.md)
- [DestinyDefinitionsItemsDestinyItemPlugDefinition](docs/Model/DestinyDefinitionsItemsDestinyItemPlugDefinition.md)
- [DestinyDefinitionsItemsDestinyItemTierTypeDefinition](docs/Model/DestinyDefinitionsItemsDestinyItemTierTypeDefinition.md)
- [DestinyDefinitionsItemsDestinyItemTierTypeInfusionBlock](docs/Model/DestinyDefinitionsItemsDestinyItemTierTypeInfusionBlock.md)
- [DestinyDefinitionsItemsDestinyParentItemOverride](docs/Model/DestinyDefinitionsItemsDestinyParentItemOverride.md)
- [DestinyDefinitionsItemsDestinyPlugRuleDefinition](docs/Model/DestinyDefinitionsItemsDestinyPlugRuleDefinition.md)
- [DestinyDefinitionsLoreDestinyLoreDefinition](docs/Model/DestinyDefinitionsLoreDestinyLoreDefinition.md)
- [DestinyDefinitionsMetricsDestinyMetricDefinition](docs/Model/DestinyDefinitionsMetricsDestinyMetricDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneActivityDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneActivityDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneActivityVariantDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneActivityVariantDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityGraphNodeEntry](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityGraphNodeEntry.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityPhase](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneChallengeActivityPhase.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneChallengeDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneChallengeDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneDisplayPreference](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneDisplayPreference.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneQuestDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneQuestDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardItem](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardItem.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardsDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardsDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneRewardCategoryDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneRewardCategoryDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneRewardEntryDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneRewardEntryDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneType](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneType.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneValueDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneValueDefinition.md)
- [DestinyDefinitionsMilestonesDestinyMilestoneVendorDefinition](docs/Model/DestinyDefinitionsMilestonesDestinyMilestoneVendorDefinition.md)
- [DestinyDefinitionsPowerCapsDestinyPowerCapDefinition](docs/Model/DestinyDefinitionsPowerCapsDestinyPowerCapDefinition.md)
- [DestinyDefinitionsPresentationDestinyPresentationChildBlock](docs/Model/DestinyDefinitionsPresentationDestinyPresentationChildBlock.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeBaseDefinition](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeBaseDefinition.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeChildEntry](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeChildEntry.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeChildrenBlock](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeChildrenBlock.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeCollectibleChildEntry](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeCollectibleChildEntry.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeDefinition](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeDefinition.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeMetricChildEntry](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeMetricChildEntry.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeRecordChildEntry](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeRecordChildEntry.md)
- [DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock](docs/Model/DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock.md)
- [DestinyDefinitionsPresentationDestinyScoredPresentationNodeBaseDefinition](docs/Model/DestinyDefinitionsPresentationDestinyScoredPresentationNodeBaseDefinition.md)
- [DestinyDefinitionsProgressionDestinyProgressionLevelRequirementDefinition](docs/Model/DestinyDefinitionsProgressionDestinyProgressionLevelRequirementDefinition.md)
- [DestinyDefinitionsRecordsDestinyRecordCompletionBlock](docs/Model/DestinyDefinitionsRecordsDestinyRecordCompletionBlock.md)
- [DestinyDefinitionsRecordsDestinyRecordDefinition](docs/Model/DestinyDefinitionsRecordsDestinyRecordDefinition.md)
- [DestinyDefinitionsRecordsDestinyRecordExpirationBlock](docs/Model/DestinyDefinitionsRecordsDestinyRecordExpirationBlock.md)
- [DestinyDefinitionsRecordsDestinyRecordIntervalBlock](docs/Model/DestinyDefinitionsRecordsDestinyRecordIntervalBlock.md)
- [DestinyDefinitionsRecordsDestinyRecordIntervalObjective](docs/Model/DestinyDefinitionsRecordsDestinyRecordIntervalObjective.md)
- [DestinyDefinitionsRecordsDestinyRecordTitleBlock](docs/Model/DestinyDefinitionsRecordsDestinyRecordTitleBlock.md)
- [DestinyDefinitionsRecordsSchemaRecordStateBlock](docs/Model/DestinyDefinitionsRecordsSchemaRecordStateBlock.md)
- [DestinyDefinitionsReportingDestinyReportReasonCategoryDefinition](docs/Model/DestinyDefinitionsReportingDestinyReportReasonCategoryDefinition.md)
- [DestinyDefinitionsReportingDestinyReportReasonDefinition](docs/Model/DestinyDefinitionsReportingDestinyReportReasonDefinition.md)
- [DestinyDefinitionsSeasonsDestinySeasonDefinition](docs/Model/DestinyDefinitionsSeasonsDestinySeasonDefinition.md)
- [DestinyDefinitionsSeasonsDestinySeasonPassDefinition](docs/Model/DestinyDefinitionsSeasonsDestinySeasonPassDefinition.md)
- [DestinyDefinitionsSocketsDestinyInsertPlugActionDefinition](docs/Model/DestinyDefinitionsSocketsDestinyInsertPlugActionDefinition.md)
- [DestinyDefinitionsSocketsDestinyPlugSetDefinition](docs/Model/DestinyDefinitionsSocketsDestinyPlugSetDefinition.md)
- [DestinyDefinitionsSocketsDestinyPlugWhitelistEntryDefinition](docs/Model/DestinyDefinitionsSocketsDestinyPlugWhitelistEntryDefinition.md)
- [DestinyDefinitionsSocketsDestinySocketCategoryDefinition](docs/Model/DestinyDefinitionsSocketsDestinySocketCategoryDefinition.md)
- [DestinyDefinitionsSocketsDestinySocketTypeDefinition](docs/Model/DestinyDefinitionsSocketsDestinySocketTypeDefinition.md)
- [DestinyDefinitionsSocketsDestinySocketTypeScalarMaterialRequirementEntry](docs/Model/DestinyDefinitionsSocketsDestinySocketTypeScalarMaterialRequirementEntry.md)
- [DestinyDefinitionsSourcesDestinyItemSourceDefinition](docs/Model/DestinyDefinitionsSourcesDestinyItemSourceDefinition.md)
- [DestinyDefinitionsTraitsDestinyTraitCategoryDefinition](docs/Model/DestinyDefinitionsTraitsDestinyTraitCategoryDefinition.md)
- [DestinyDefinitionsTraitsDestinyTraitDefinition](docs/Model/DestinyDefinitionsTraitsDestinyTraitDefinition.md)
- [DestinyDefinitionsVendorsDestinyVendorLocationDefinition](docs/Model/DestinyDefinitionsVendorsDestinyVendorLocationDefinition.md)
- [DestinyDestinyActivity](docs/Model/DestinyDestinyActivity.md)
- [DestinyDestinyActivityDifficultyTier](docs/Model/DestinyDestinyActivityDifficultyTier.md)
- [DestinyDestinyActivityModeCategory](docs/Model/DestinyDestinyActivityModeCategory.md)
- [DestinyDestinyActivityNavPointType](docs/Model/DestinyDestinyActivityNavPointType.md)
- [DestinyDestinyAmmunitionType](docs/Model/DestinyDestinyAmmunitionType.md)
- [DestinyDestinyBreakerType](docs/Model/DestinyDestinyBreakerType.md)
- [DestinyDestinyClass](docs/Model/DestinyDestinyClass.md)
- [DestinyDestinyCollectibleState](docs/Model/DestinyDestinyCollectibleState.md)
- [DestinyDestinyComponentType](docs/Model/DestinyDestinyComponentType.md)
- [DestinyDestinyEnergyType](docs/Model/DestinyDestinyEnergyType.md)
- [DestinyDestinyEquipItemResult](docs/Model/DestinyDestinyEquipItemResult.md)
- [DestinyDestinyEquipItemResults](docs/Model/DestinyDestinyEquipItemResults.md)
- [DestinyDestinyGamePrivacySetting](docs/Model/DestinyDestinyGamePrivacySetting.md)
- [DestinyDestinyGameVersions](docs/Model/DestinyDestinyGameVersions.md)
- [DestinyDestinyGatingScope](docs/Model/DestinyDestinyGatingScope.md)
- [DestinyDestinyGender](docs/Model/DestinyDestinyGender.md)
- [DestinyDestinyGraphNodeState](docs/Model/DestinyDestinyGraphNodeState.md)
- [DestinyDestinyItemQuantity](docs/Model/DestinyDestinyItemQuantity.md)
- [DestinyDestinyItemSortType](docs/Model/DestinyDestinyItemSortType.md)
- [DestinyDestinyItemSubType](docs/Model/DestinyDestinyItemSubType.md)
- [DestinyDestinyItemType](docs/Model/DestinyDestinyItemType.md)
- [DestinyDestinyJoinClosedReasons](docs/Model/DestinyDestinyJoinClosedReasons.md)
- [DestinyDestinyObjectiveGrantStyle](docs/Model/DestinyDestinyObjectiveGrantStyle.md)
- [DestinyDestinyPartyMemberStates](docs/Model/DestinyDestinyPartyMemberStates.md)
- [DestinyDestinyPresentationDisplayStyle](docs/Model/DestinyDestinyPresentationDisplayStyle.md)
- [DestinyDestinyPresentationNodeState](docs/Model/DestinyDestinyPresentationNodeState.md)
- [DestinyDestinyPresentationNodeType](docs/Model/DestinyDestinyPresentationNodeType.md)
- [DestinyDestinyPresentationScreenStyle](docs/Model/DestinyDestinyPresentationScreenStyle.md)
- [DestinyDestinyProgression](docs/Model/DestinyDestinyProgression.md)
- [DestinyDestinyProgressionResetEntry](docs/Model/DestinyDestinyProgressionResetEntry.md)
- [DestinyDestinyProgressionRewardItemAcquisitionBehavior](docs/Model/DestinyDestinyProgressionRewardItemAcquisitionBehavior.md)
- [DestinyDestinyProgressionRewardItemState](docs/Model/DestinyDestinyProgressionRewardItemState.md)
- [DestinyDestinyProgressionScope](docs/Model/DestinyDestinyProgressionScope.md)
- [DestinyDestinyProgressionStepDisplayEffect](docs/Model/DestinyDestinyProgressionStepDisplayEffect.md)
- [DestinyDestinyRace](docs/Model/DestinyDestinyRace.md)
- [DestinyDestinyRecordState](docs/Model/DestinyDestinyRecordState.md)
- [DestinyDestinyRecordToastStyle](docs/Model/DestinyDestinyRecordToastStyle.md)
- [DestinyDestinyRecordValueStyle](docs/Model/DestinyDestinyRecordValueStyle.md)
- [DestinyDestinyScope](docs/Model/DestinyDestinyScope.md)
- [DestinyDestinySocketCategoryStyle](docs/Model/DestinyDestinySocketCategoryStyle.md)
- [DestinyDestinySocketVisibility](docs/Model/DestinyDestinySocketVisibility.md)
- [DestinyDestinyStat](docs/Model/DestinyDestinyStat.md)
- [DestinyDestinyStatAggregationType](docs/Model/DestinyDestinyStatAggregationType.md)
- [DestinyDestinyStatCategory](docs/Model/DestinyDestinyStatCategory.md)
- [DestinyDestinyTalentNode](docs/Model/DestinyDestinyTalentNode.md)
- [DestinyDestinyTalentNodeStatBlock](docs/Model/DestinyDestinyTalentNodeStatBlock.md)
- [DestinyDestinyTalentNodeState](docs/Model/DestinyDestinyTalentNodeState.md)
- [DestinyDestinyUnlockStatus](docs/Model/DestinyDestinyUnlockStatus.md)
- [DestinyDestinyUnlockValueUIStyle](docs/Model/DestinyDestinyUnlockValueUIStyle.md)
- [DestinyDestinyVendorFilter](docs/Model/DestinyDestinyVendorFilter.md)
- [DestinyDestinyVendorInteractionRewardSelection](docs/Model/DestinyDestinyVendorInteractionRewardSelection.md)
- [DestinyDestinyVendorItemRefundPolicy](docs/Model/DestinyDestinyVendorItemRefundPolicy.md)
- [DestinyDestinyVendorItemState](docs/Model/DestinyDestinyVendorItemState.md)
- [DestinyDestinyVendorReplyType](docs/Model/DestinyDestinyVendorReplyType.md)
- [DestinyDyeReference](docs/Model/DestinyDyeReference.md)
- [DestinyEntitiesCharactersDestinyCharacterActivitiesComponent](docs/Model/DestinyEntitiesCharactersDestinyCharacterActivitiesComponent.md)
- [DestinyEntitiesCharactersDestinyCharacterComponent](docs/Model/DestinyEntitiesCharactersDestinyCharacterComponent.md)
- [DestinyEntitiesCharactersDestinyCharacterProgressionComponent](docs/Model/DestinyEntitiesCharactersDestinyCharacterProgressionComponent.md)
- [DestinyEntitiesCharactersDestinyCharacterRenderComponent](docs/Model/DestinyEntitiesCharactersDestinyCharacterRenderComponent.md)
- [DestinyEntitiesInventoryDestinyInventoryComponent](docs/Model/DestinyEntitiesInventoryDestinyInventoryComponent.md)
- [DestinyEntitiesItemsDestinyItemComponent](docs/Model/DestinyEntitiesItemsDestinyItemComponent.md)
- [DestinyEntitiesItemsDestinyItemInstanceComponent](docs/Model/DestinyEntitiesItemsDestinyItemInstanceComponent.md)
- [DestinyEntitiesItemsDestinyItemInstanceEnergy](docs/Model/DestinyEntitiesItemsDestinyItemInstanceEnergy.md)
- [DestinyEntitiesItemsDestinyItemObjectivesComponent](docs/Model/DestinyEntitiesItemsDestinyItemObjectivesComponent.md)
- [DestinyEntitiesItemsDestinyItemPerksComponent](docs/Model/DestinyEntitiesItemsDestinyItemPerksComponent.md)
- [DestinyEntitiesItemsDestinyItemRenderComponent](docs/Model/DestinyEntitiesItemsDestinyItemRenderComponent.md)
- [DestinyEntitiesItemsDestinyItemSocketState](docs/Model/DestinyEntitiesItemsDestinyItemSocketState.md)
- [DestinyEntitiesItemsDestinyItemSocketsComponent](docs/Model/DestinyEntitiesItemsDestinyItemSocketsComponent.md)
- [DestinyEntitiesItemsDestinyItemStatsComponent](docs/Model/DestinyEntitiesItemsDestinyItemStatsComponent.md)
- [DestinyEntitiesItemsDestinyItemTalentGridComponent](docs/Model/DestinyEntitiesItemsDestinyItemTalentGridComponent.md)
- [DestinyEntitiesProfilesDestinyProfileComponent](docs/Model/DestinyEntitiesProfilesDestinyProfileComponent.md)
- [DestinyEntitiesProfilesDestinyVendorReceiptsComponent](docs/Model/DestinyEntitiesProfilesDestinyVendorReceiptsComponent.md)
- [DestinyEntitiesVendorsDestinyVendorCategoriesComponent](docs/Model/DestinyEntitiesVendorsDestinyVendorCategoriesComponent.md)
- [DestinyEntitiesVendorsDestinyVendorCategory](docs/Model/DestinyEntitiesVendorsDestinyVendorCategory.md)
- [DestinyEntitiesVendorsDestinyVendorComponent](docs/Model/DestinyEntitiesVendorsDestinyVendorComponent.md)
- [DestinyEntitiesVendorsDestinyVendorSaleItemComponent](docs/Model/DestinyEntitiesVendorsDestinyVendorSaleItemComponent.md)
- [DestinyEquipFailureReason](docs/Model/DestinyEquipFailureReason.md)
- [DestinyEquippingItemBlockAttributes](docs/Model/DestinyEquippingItemBlockAttributes.md)
- [DestinyHistoricalStatsDefinitionsDestinyActivityModeType](docs/Model/DestinyHistoricalStatsDefinitionsDestinyActivityModeType.md)
- [DestinyHistoricalStatsDefinitionsDestinyHistoricalStatsDefinition](docs/Model/DestinyHistoricalStatsDefinitionsDestinyHistoricalStatsDefinition.md)
- [DestinyHistoricalStatsDefinitionsDestinyStatsCategoryType](docs/Model/DestinyHistoricalStatsDefinitionsDestinyStatsCategoryType.md)
- [DestinyHistoricalStatsDefinitionsDestinyStatsGroupType](docs/Model/DestinyHistoricalStatsDefinitionsDestinyStatsGroupType.md)
- [DestinyHistoricalStatsDefinitionsDestinyStatsMergeMethod](docs/Model/DestinyHistoricalStatsDefinitionsDestinyStatsMergeMethod.md)
- [DestinyHistoricalStatsDefinitionsPeriodType](docs/Model/DestinyHistoricalStatsDefinitionsPeriodType.md)
- [DestinyHistoricalStatsDefinitionsUnitType](docs/Model/DestinyHistoricalStatsDefinitionsUnitType.md)
- [DestinyHistoricalStatsDestinyActivityHistoryResults](docs/Model/DestinyHistoricalStatsDestinyActivityHistoryResults.md)
- [DestinyHistoricalStatsDestinyAggregateActivityResults](docs/Model/DestinyHistoricalStatsDestinyAggregateActivityResults.md)
- [DestinyHistoricalStatsDestinyAggregateActivityStats](docs/Model/DestinyHistoricalStatsDestinyAggregateActivityStats.md)
- [DestinyHistoricalStatsDestinyClanAggregateStat](docs/Model/DestinyHistoricalStatsDestinyClanAggregateStat.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsAccountResult](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsAccountResult.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsActivity](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsActivity.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsByPeriod](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsByPeriod.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsPerCharacter](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsPerCharacter.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsPeriodGroup](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsPeriodGroup.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsValue](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsValue.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsValuePair](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsValuePair.md)
- [DestinyHistoricalStatsDestinyHistoricalStatsWithMerged](docs/Model/DestinyHistoricalStatsDestinyHistoricalStatsWithMerged.md)
- [DestinyHistoricalStatsDestinyHistoricalWeaponStats](docs/Model/DestinyHistoricalStatsDestinyHistoricalWeaponStats.md)
- [DestinyHistoricalStatsDestinyHistoricalWeaponStatsData](docs/Model/DestinyHistoricalStatsDestinyHistoricalWeaponStatsData.md)
- [DestinyHistoricalStatsDestinyLeaderboard](docs/Model/DestinyHistoricalStatsDestinyLeaderboard.md)
- [DestinyHistoricalStatsDestinyLeaderboardEntry](docs/Model/DestinyHistoricalStatsDestinyLeaderboardEntry.md)
- [DestinyHistoricalStatsDestinyLeaderboardResults](docs/Model/DestinyHistoricalStatsDestinyLeaderboardResults.md)
- [DestinyHistoricalStatsDestinyPlayer](docs/Model/DestinyHistoricalStatsDestinyPlayer.md)
- [DestinyHistoricalStatsDestinyPostGameCarnageReportData](docs/Model/DestinyHistoricalStatsDestinyPostGameCarnageReportData.md)
- [DestinyHistoricalStatsDestinyPostGameCarnageReportEntry](docs/Model/DestinyHistoricalStatsDestinyPostGameCarnageReportEntry.md)
- [DestinyHistoricalStatsDestinyPostGameCarnageReportExtendedData](docs/Model/DestinyHistoricalStatsDestinyPostGameCarnageReportExtendedData.md)
- [DestinyHistoricalStatsDestinyPostGameCarnageReportTeamEntry](docs/Model/DestinyHistoricalStatsDestinyPostGameCarnageReportTeamEntry.md)
- [DestinyItemBindStatus](docs/Model/DestinyItemBindStatus.md)
- [DestinyItemComponentSetOfint32](docs/Model/DestinyItemComponentSetOfint32.md)
- [DestinyItemComponentSetOfint64](docs/Model/DestinyItemComponentSetOfint64.md)
- [DestinyItemComponentSetOfuint32](docs/Model/DestinyItemComponentSetOfuint32.md)
- [DestinyItemLocation](docs/Model/DestinyItemLocation.md)
- [DestinyItemPerkVisibility](docs/Model/DestinyItemPerkVisibility.md)
- [DestinyItemState](docs/Model/DestinyItemState.md)
- [DestinyMilestonesDestinyMilestone](docs/Model/DestinyMilestonesDestinyMilestone.md)
- [DestinyMilestonesDestinyMilestoneActivity](docs/Model/DestinyMilestonesDestinyMilestoneActivity.md)
- [DestinyMilestonesDestinyMilestoneActivityCompletionStatus](docs/Model/DestinyMilestonesDestinyMilestoneActivityCompletionStatus.md)
- [DestinyMilestonesDestinyMilestoneActivityPhase](docs/Model/DestinyMilestonesDestinyMilestoneActivityPhase.md)
- [DestinyMilestonesDestinyMilestoneActivityVariant](docs/Model/DestinyMilestonesDestinyMilestoneActivityVariant.md)
- [DestinyMilestonesDestinyMilestoneChallengeActivity](docs/Model/DestinyMilestonesDestinyMilestoneChallengeActivity.md)
- [DestinyMilestonesDestinyMilestoneContent](docs/Model/DestinyMilestonesDestinyMilestoneContent.md)
- [DestinyMilestonesDestinyMilestoneContentItemCategory](docs/Model/DestinyMilestonesDestinyMilestoneContentItemCategory.md)
- [DestinyMilestonesDestinyMilestoneQuest](docs/Model/DestinyMilestonesDestinyMilestoneQuest.md)
- [DestinyMilestonesDestinyMilestoneRewardCategory](docs/Model/DestinyMilestonesDestinyMilestoneRewardCategory.md)
- [DestinyMilestonesDestinyMilestoneRewardEntry](docs/Model/DestinyMilestonesDestinyMilestoneRewardEntry.md)
- [DestinyMilestonesDestinyMilestoneVendor](docs/Model/DestinyMilestonesDestinyMilestoneVendor.md)
- [DestinyMilestonesDestinyPublicMilestone](docs/Model/DestinyMilestonesDestinyPublicMilestone.md)
- [DestinyMilestonesDestinyPublicMilestoneActivity](docs/Model/DestinyMilestonesDestinyPublicMilestoneActivity.md)
- [DestinyMilestonesDestinyPublicMilestoneActivityVariant](docs/Model/DestinyMilestonesDestinyPublicMilestoneActivityVariant.md)
- [DestinyMilestonesDestinyPublicMilestoneChallenge](docs/Model/DestinyMilestonesDestinyPublicMilestoneChallenge.md)
- [DestinyMilestonesDestinyPublicMilestoneChallengeActivity](docs/Model/DestinyMilestonesDestinyPublicMilestoneChallengeActivity.md)
- [DestinyMilestonesDestinyPublicMilestoneQuest](docs/Model/DestinyMilestonesDestinyPublicMilestoneQuest.md)
- [DestinyMilestonesDestinyPublicMilestoneVendor](docs/Model/DestinyMilestonesDestinyPublicMilestoneVendor.md)
- [DestinyMiscDestinyColor](docs/Model/DestinyMiscDestinyColor.md)
- [DestinyPerksDestinyPerkReference](docs/Model/DestinyPerksDestinyPerkReference.md)
- [DestinyPlugAvailabilityMode](docs/Model/DestinyPlugAvailabilityMode.md)
- [DestinyPlugUiStyles](docs/Model/DestinyPlugUiStyles.md)
- [DestinyProgressionDestinyFactionProgression](docs/Model/DestinyProgressionDestinyFactionProgression.md)
- [DestinyQuestsDestinyObjectiveProgress](docs/Model/DestinyQuestsDestinyObjectiveProgress.md)
- [DestinyQuestsDestinyQuestStatus](docs/Model/DestinyQuestsDestinyQuestStatus.md)
- [DestinyReportingRequestsDestinyReportOffensePgcrRequest](docs/Model/DestinyReportingRequestsDestinyReportOffensePgcrRequest.md)
- [DestinyRequestsActionsDestinyActionRequest](docs/Model/DestinyRequestsActionsDestinyActionRequest.md)
- [DestinyRequestsActionsDestinyCharacterActionRequest](docs/Model/DestinyRequestsActionsDestinyCharacterActionRequest.md)
- [DestinyRequestsActionsDestinyInsertPlugsActionRequest](docs/Model/DestinyRequestsActionsDestinyInsertPlugsActionRequest.md)
- [DestinyRequestsActionsDestinyInsertPlugsRequestEntry](docs/Model/DestinyRequestsActionsDestinyInsertPlugsRequestEntry.md)
- [DestinyRequestsActionsDestinyItemActionRequest](docs/Model/DestinyRequestsActionsDestinyItemActionRequest.md)
- [DestinyRequestsActionsDestinyItemSetActionRequest](docs/Model/DestinyRequestsActionsDestinyItemSetActionRequest.md)
- [DestinyRequestsActionsDestinyItemStateRequest](docs/Model/DestinyRequestsActionsDestinyItemStateRequest.md)
- [DestinyRequestsActionsDestinyPostmasterTransferRequest](docs/Model/DestinyRequestsActionsDestinyPostmasterTransferRequest.md)
- [DestinyRequestsActionsDestinySocketArrayType](docs/Model/DestinyRequestsActionsDestinySocketArrayType.md)
- [DestinyRequestsDestinyItemTransferRequest](docs/Model/DestinyRequestsDestinyItemTransferRequest.md)
- [DestinyResponsesDestinyCharacterResponse](docs/Model/DestinyResponsesDestinyCharacterResponse.md)
- [DestinyResponsesDestinyCollectibleNodeDetailResponse](docs/Model/DestinyResponsesDestinyCollectibleNodeDetailResponse.md)
- [DestinyResponsesDestinyErrorProfile](docs/Model/DestinyResponsesDestinyErrorProfile.md)
- [DestinyResponsesDestinyItemChangeResponse](docs/Model/DestinyResponsesDestinyItemChangeResponse.md)
- [DestinyResponsesDestinyItemResponse](docs/Model/DestinyResponsesDestinyItemResponse.md)
- [DestinyResponsesDestinyLinkedProfilesResponse](docs/Model/DestinyResponsesDestinyLinkedProfilesResponse.md)
- [DestinyResponsesDestinyProfileResponse](docs/Model/DestinyResponsesDestinyProfileResponse.md)
- [DestinyResponsesDestinyProfileUserInfoCard](docs/Model/DestinyResponsesDestinyProfileUserInfoCard.md)
- [DestinyResponsesDestinyPublicVendorsResponse](docs/Model/DestinyResponsesDestinyPublicVendorsResponse.md)
- [DestinyResponsesDestinyVendorResponse](docs/Model/DestinyResponsesDestinyVendorResponse.md)
- [DestinyResponsesDestinyVendorsResponse](docs/Model/DestinyResponsesDestinyVendorsResponse.md)
- [DestinyResponsesInventoryChangedResponse](docs/Model/DestinyResponsesInventoryChangedResponse.md)
- [DestinyResponsesPersonalDestinyVendorSaleItemSetComponent](docs/Model/DestinyResponsesPersonalDestinyVendorSaleItemSetComponent.md)
- [DestinyResponsesPublicDestinyVendorSaleItemSetComponent](docs/Model/DestinyResponsesPublicDestinyVendorSaleItemSetComponent.md)
- [DestinySocketPlugSources](docs/Model/DestinySocketPlugSources.md)
- [DestinySocketTypeActionType](docs/Model/DestinySocketTypeActionType.md)
- [DestinySocketsDestinyItemPlug](docs/Model/DestinySocketsDestinyItemPlug.md)
- [DestinySocketsDestinyItemPlugBase](docs/Model/DestinySocketsDestinyItemPlugBase.md)
- [DestinySpecialItemType](docs/Model/DestinySpecialItemType.md)
- [DestinyTierType](docs/Model/DestinyTierType.md)
- [DestinyTransferStatuses](docs/Model/DestinyTransferStatuses.md)
- [DestinyVendorDisplayCategorySortOrder](docs/Model/DestinyVendorDisplayCategorySortOrder.md)
- [DestinyVendorInteractionType](docs/Model/DestinyVendorInteractionType.md)
- [DestinyVendorItemStatus](docs/Model/DestinyVendorItemStatus.md)
- [DestinyVendorSaleItemSetComponentOfDestinyPublicVendorSaleItemComponent](docs/Model/DestinyVendorSaleItemSetComponentOfDestinyPublicVendorSaleItemComponent.md)
- [DestinyVendorSaleItemSetComponentOfDestinyVendorSaleItemComponent](docs/Model/DestinyVendorSaleItemSetComponentOfDestinyVendorSaleItemComponent.md)
- [DestinyVendorsDestinyVendorReceipt](docs/Model/DestinyVendorsDestinyVendorReceipt.md)
- [DictionaryComponentResponseOfint32AndDestinyItemInstanceComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemInstanceComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemObjectivesComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemObjectivesComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemPerksComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemPerksComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemPlugObjectivesComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemPlugObjectivesComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemRenderComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemRenderComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemReusablePlugsComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemReusablePlugsComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemSocketsComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemSocketsComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemStatsComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemStatsComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyItemTalentGridComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyItemTalentGridComponent.md)
- [DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent](docs/Model/DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCharacterComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCharacterComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyInventoryComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyInventoryComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemObjectivesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemObjectivesComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemPerksComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemPerksComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemPlugObjectivesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemPlugObjectivesComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemRenderComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemRenderComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemReusablePlugsComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemReusablePlugsComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemStatsComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemStatsComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyItemTalentGridComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyItemTalentGridComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyKiosksComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyKiosksComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent.md)
- [DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent](docs/Model/DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemPlugObjectivesComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemPlugObjectivesComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemReusablePlugsComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemReusablePlugsComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent.md)
- [DictionaryComponentResponseOfuint32AndDestinyVendorComponent](docs/Model/DictionaryComponentResponseOfuint32AndDestinyVendorComponent.md)
- [DictionaryComponentResponseOfuint32AndPersonalDestinyVendorSaleItemSetComponent](docs/Model/DictionaryComponentResponseOfuint32AndPersonalDestinyVendorSaleItemSetComponent.md)
- [DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent](docs/Model/DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent.md)
- [EntitiesEntityActionResult](docs/Model/EntitiesEntityActionResult.md)
- [ExceptionsPlatformErrorCodes](docs/Model/ExceptionsPlatformErrorCodes.md)
- [FireteamFireteamDateRange](docs/Model/FireteamFireteamDateRange.md)
- [FireteamFireteamMember](docs/Model/FireteamFireteamMember.md)
- [FireteamFireteamPlatform](docs/Model/FireteamFireteamPlatform.md)
- [FireteamFireteamPlatformInviteResult](docs/Model/FireteamFireteamPlatformInviteResult.md)
- [FireteamFireteamPublicSearchOption](docs/Model/FireteamFireteamPublicSearchOption.md)
- [FireteamFireteamResponse](docs/Model/FireteamFireteamResponse.md)
- [FireteamFireteamSlotSearch](docs/Model/FireteamFireteamSlotSearch.md)
- [FireteamFireteamSummary](docs/Model/FireteamFireteamSummary.md)
- [FireteamFireteamUserInfoCard](docs/Model/FireteamFireteamUserInfoCard.md)
- [ForumCommunityContentSortMode](docs/Model/ForumCommunityContentSortMode.md)
- [ForumForumMediaType](docs/Model/ForumForumMediaType.md)
- [ForumForumPostPopularity](docs/Model/ForumForumPostPopularity.md)
- [ForumForumPostSortEnum](docs/Model/ForumForumPostSortEnum.md)
- [ForumForumRecruitmentDetail](docs/Model/ForumForumRecruitmentDetail.md)
- [ForumForumRecruitmentIntensityLabel](docs/Model/ForumForumRecruitmentIntensityLabel.md)
- [ForumForumRecruitmentToneLabel](docs/Model/ForumForumRecruitmentToneLabel.md)
- [ForumForumTopicsCategoryFiltersEnum](docs/Model/ForumForumTopicsCategoryFiltersEnum.md)
- [ForumForumTopicsQuickDateEnum](docs/Model/ForumForumTopicsQuickDateEnum.md)
- [ForumForumTopicsSortEnum](docs/Model/ForumForumTopicsSortEnum.md)
- [ForumPollResponse](docs/Model/ForumPollResponse.md)
- [ForumPollResult](docs/Model/ForumPollResult.md)
- [ForumPostResponse](docs/Model/ForumPostResponse.md)
- [ForumPostSearchResponse](docs/Model/ForumPostSearchResponse.md)
- [ForumsForumFlagsEnum](docs/Model/ForumsForumFlagsEnum.md)
- [ForumsForumPostCategoryEnums](docs/Model/ForumsForumPostCategoryEnums.md)
- [GlobalAlert](docs/Model/GlobalAlert.md)
- [GlobalAlertLevel](docs/Model/GlobalAlertLevel.md)
- [GlobalAlertType](docs/Model/GlobalAlertType.md)
- [GroupsV2Capabilities](docs/Model/GroupsV2Capabilities.md)
- [GroupsV2ChatSecuritySetting](docs/Model/GroupsV2ChatSecuritySetting.md)
- [GroupsV2ClanBanner](docs/Model/GroupsV2ClanBanner.md)
- [GroupsV2GetGroupsForMemberResponse](docs/Model/GroupsV2GetGroupsForMemberResponse.md)
- [GroupsV2GroupAllianceStatus](docs/Model/GroupsV2GroupAllianceStatus.md)
- [GroupsV2GroupApplicationListRequest](docs/Model/GroupsV2GroupApplicationListRequest.md)
- [GroupsV2GroupApplicationRequest](docs/Model/GroupsV2GroupApplicationRequest.md)
- [GroupsV2GroupApplicationResolveState](docs/Model/GroupsV2GroupApplicationResolveState.md)
- [GroupsV2GroupApplicationResponse](docs/Model/GroupsV2GroupApplicationResponse.md)
- [GroupsV2GroupBan](docs/Model/GroupsV2GroupBan.md)
- [GroupsV2GroupBanRequest](docs/Model/GroupsV2GroupBanRequest.md)
- [GroupsV2GroupDateRange](docs/Model/GroupsV2GroupDateRange.md)
- [GroupsV2GroupEditAction](docs/Model/GroupsV2GroupEditAction.md)
- [GroupsV2GroupFeatures](docs/Model/GroupsV2GroupFeatures.md)
- [GroupsV2GroupHomepage](docs/Model/GroupsV2GroupHomepage.md)
- [GroupsV2GroupMember](docs/Model/GroupsV2GroupMember.md)
- [GroupsV2GroupMemberApplication](docs/Model/GroupsV2GroupMemberApplication.md)
- [GroupsV2GroupMemberCountFilter](docs/Model/GroupsV2GroupMemberCountFilter.md)
- [GroupsV2GroupMemberLeaveResult](docs/Model/GroupsV2GroupMemberLeaveResult.md)
- [GroupsV2GroupMembership](docs/Model/GroupsV2GroupMembership.md)
- [GroupsV2GroupMembershipBase](docs/Model/GroupsV2GroupMembershipBase.md)
- [GroupsV2GroupMembershipSearchResponse](docs/Model/GroupsV2GroupMembershipSearchResponse.md)
- [GroupsV2GroupNameSearchRequest](docs/Model/GroupsV2GroupNameSearchRequest.md)
- [GroupsV2GroupOptionalConversation](docs/Model/GroupsV2GroupOptionalConversation.md)
- [GroupsV2GroupOptionalConversationAddRequest](docs/Model/GroupsV2GroupOptionalConversationAddRequest.md)
- [GroupsV2GroupOptionalConversationEditRequest](docs/Model/GroupsV2GroupOptionalConversationEditRequest.md)
- [GroupsV2GroupOptionsEditAction](docs/Model/GroupsV2GroupOptionsEditAction.md)
- [GroupsV2GroupPostPublicity](docs/Model/GroupsV2GroupPostPublicity.md)
- [GroupsV2GroupPotentialMember](docs/Model/GroupsV2GroupPotentialMember.md)
- [GroupsV2GroupPotentialMemberStatus](docs/Model/GroupsV2GroupPotentialMemberStatus.md)
- [GroupsV2GroupPotentialMembership](docs/Model/GroupsV2GroupPotentialMembership.md)
- [GroupsV2GroupPotentialMembershipSearchResponse](docs/Model/GroupsV2GroupPotentialMembershipSearchResponse.md)
- [GroupsV2GroupQuery](docs/Model/GroupsV2GroupQuery.md)
- [GroupsV2GroupResponse](docs/Model/GroupsV2GroupResponse.md)
- [GroupsV2GroupSearchResponse](docs/Model/GroupsV2GroupSearchResponse.md)
- [GroupsV2GroupSortBy](docs/Model/GroupsV2GroupSortBy.md)
- [GroupsV2GroupType](docs/Model/GroupsV2GroupType.md)
- [GroupsV2GroupUserBase](docs/Model/GroupsV2GroupUserBase.md)
- [GroupsV2GroupUserInfoCard](docs/Model/GroupsV2GroupUserInfoCard.md)
- [GroupsV2GroupV2](docs/Model/GroupsV2GroupV2.md)
- [GroupsV2GroupV2Card](docs/Model/GroupsV2GroupV2Card.md)
- [GroupsV2GroupV2ClanInfo](docs/Model/GroupsV2GroupV2ClanInfo.md)
- [GroupsV2GroupV2ClanInfoAndInvestment](docs/Model/GroupsV2GroupV2ClanInfoAndInvestment.md)
- [GroupsV2GroupsForMemberFilter](docs/Model/GroupsV2GroupsForMemberFilter.md)
- [GroupsV2HostGuidedGamesPermissionLevel](docs/Model/GroupsV2HostGuidedGamesPermissionLevel.md)
- [GroupsV2MembershipOption](docs/Model/GroupsV2MembershipOption.md)
- [GroupsV2RuntimeGroupMemberType](docs/Model/GroupsV2RuntimeGroupMemberType.md)
- [IgnoresIgnoreLength](docs/Model/IgnoresIgnoreLength.md)
- [IgnoresIgnoreResponse](docs/Model/IgnoresIgnoreResponse.md)
- [IgnoresIgnoreStatus](docs/Model/IgnoresIgnoreStatus.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse20050](docs/Model/InlineResponse20050.md)
- [InlineResponse20051](docs/Model/InlineResponse20051.md)
- [InlineResponse20052](docs/Model/InlineResponse20052.md)
- [InlineResponse20053](docs/Model/InlineResponse20053.md)
- [InlineResponse20054](docs/Model/InlineResponse20054.md)
- [InlineResponse20055](docs/Model/InlineResponse20055.md)
- [InlineResponse20056](docs/Model/InlineResponse20056.md)
- [InlineResponse20057](docs/Model/InlineResponse20057.md)
- [InlineResponse20058](docs/Model/InlineResponse20058.md)
- [InlineResponse20059](docs/Model/InlineResponse20059.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse20060](docs/Model/InlineResponse20060.md)
- [InlineResponse20061](docs/Model/InlineResponse20061.md)
- [InlineResponse20062](docs/Model/InlineResponse20062.md)
- [InlineResponse20063](docs/Model/InlineResponse20063.md)
- [InlineResponse20064](docs/Model/InlineResponse20064.md)
- [InlineResponse20065](docs/Model/InlineResponse20065.md)
- [InlineResponse20066](docs/Model/InlineResponse20066.md)
- [InlineResponse20067](docs/Model/InlineResponse20067.md)
- [InlineResponse20068](docs/Model/InlineResponse20068.md)
- [InlineResponse20069](docs/Model/InlineResponse20069.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse20070](docs/Model/InlineResponse20070.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InterpolationInterpolationPoint](docs/Model/InterpolationInterpolationPoint.md)
- [InterpolationInterpolationPointFloat](docs/Model/InterpolationInterpolationPointFloat.md)
- [LinksHyperlinkReference](docs/Model/LinksHyperlinkReference.md)
- [QueriesPagedQuery](docs/Model/QueriesPagedQuery.md)
- [QueriesSearchResult](docs/Model/QueriesSearchResult.md)
- [SearchResultOfContentItemPublicContract](docs/Model/SearchResultOfContentItemPublicContract.md)
- [SearchResultOfDestinyEntitySearchResultItem](docs/Model/SearchResultOfDestinyEntitySearchResultItem.md)
- [SearchResultOfFireteamResponse](docs/Model/SearchResultOfFireteamResponse.md)
- [SearchResultOfFireteamSummary](docs/Model/SearchResultOfFireteamSummary.md)
- [SearchResultOfGroupBan](docs/Model/SearchResultOfGroupBan.md)
- [SearchResultOfGroupMember](docs/Model/SearchResultOfGroupMember.md)
- [SearchResultOfGroupMemberApplication](docs/Model/SearchResultOfGroupMemberApplication.md)
- [SearchResultOfGroupMembership](docs/Model/SearchResultOfGroupMembership.md)
- [SearchResultOfGroupPotentialMembership](docs/Model/SearchResultOfGroupPotentialMembership.md)
- [SearchResultOfGroupV2Card](docs/Model/SearchResultOfGroupV2Card.md)
- [SearchResultOfPostResponse](docs/Model/SearchResultOfPostResponse.md)
- [SearchResultOfTrendingEntry](docs/Model/SearchResultOfTrendingEntry.md)
- [SingleComponentResponseOfDestinyCharacterActivitiesComponent](docs/Model/SingleComponentResponseOfDestinyCharacterActivitiesComponent.md)
- [SingleComponentResponseOfDestinyCharacterComponent](docs/Model/SingleComponentResponseOfDestinyCharacterComponent.md)
- [SingleComponentResponseOfDestinyCharacterProgressionComponent](docs/Model/SingleComponentResponseOfDestinyCharacterProgressionComponent.md)
- [SingleComponentResponseOfDestinyCharacterRecordsComponent](docs/Model/SingleComponentResponseOfDestinyCharacterRecordsComponent.md)
- [SingleComponentResponseOfDestinyCharacterRenderComponent](docs/Model/SingleComponentResponseOfDestinyCharacterRenderComponent.md)
- [SingleComponentResponseOfDestinyCollectiblesComponent](docs/Model/SingleComponentResponseOfDestinyCollectiblesComponent.md)
- [SingleComponentResponseOfDestinyCurrenciesComponent](docs/Model/SingleComponentResponseOfDestinyCurrenciesComponent.md)
- [SingleComponentResponseOfDestinyInventoryComponent](docs/Model/SingleComponentResponseOfDestinyInventoryComponent.md)
- [SingleComponentResponseOfDestinyItemComponent](docs/Model/SingleComponentResponseOfDestinyItemComponent.md)
- [SingleComponentResponseOfDestinyItemInstanceComponent](docs/Model/SingleComponentResponseOfDestinyItemInstanceComponent.md)
- [SingleComponentResponseOfDestinyItemObjectivesComponent](docs/Model/SingleComponentResponseOfDestinyItemObjectivesComponent.md)
- [SingleComponentResponseOfDestinyItemPerksComponent](docs/Model/SingleComponentResponseOfDestinyItemPerksComponent.md)
- [SingleComponentResponseOfDestinyItemPlugObjectivesComponent](docs/Model/SingleComponentResponseOfDestinyItemPlugObjectivesComponent.md)
- [SingleComponentResponseOfDestinyItemRenderComponent](docs/Model/SingleComponentResponseOfDestinyItemRenderComponent.md)
- [SingleComponentResponseOfDestinyItemReusablePlugsComponent](docs/Model/SingleComponentResponseOfDestinyItemReusablePlugsComponent.md)
- [SingleComponentResponseOfDestinyItemSocketsComponent](docs/Model/SingleComponentResponseOfDestinyItemSocketsComponent.md)
- [SingleComponentResponseOfDestinyItemStatsComponent](docs/Model/SingleComponentResponseOfDestinyItemStatsComponent.md)
- [SingleComponentResponseOfDestinyItemTalentGridComponent](docs/Model/SingleComponentResponseOfDestinyItemTalentGridComponent.md)
- [SingleComponentResponseOfDestinyKiosksComponent](docs/Model/SingleComponentResponseOfDestinyKiosksComponent.md)
- [SingleComponentResponseOfDestinyMetricsComponent](docs/Model/SingleComponentResponseOfDestinyMetricsComponent.md)
- [SingleComponentResponseOfDestinyPlatformSilverComponent](docs/Model/SingleComponentResponseOfDestinyPlatformSilverComponent.md)
- [SingleComponentResponseOfDestinyPlugSetsComponent](docs/Model/SingleComponentResponseOfDestinyPlugSetsComponent.md)
- [SingleComponentResponseOfDestinyPresentationNodesComponent](docs/Model/SingleComponentResponseOfDestinyPresentationNodesComponent.md)
- [SingleComponentResponseOfDestinyProfileCollectiblesComponent](docs/Model/SingleComponentResponseOfDestinyProfileCollectiblesComponent.md)
- [SingleComponentResponseOfDestinyProfileComponent](docs/Model/SingleComponentResponseOfDestinyProfileComponent.md)
- [SingleComponentResponseOfDestinyProfileProgressionComponent](docs/Model/SingleComponentResponseOfDestinyProfileProgressionComponent.md)
- [SingleComponentResponseOfDestinyProfileRecordsComponent](docs/Model/SingleComponentResponseOfDestinyProfileRecordsComponent.md)
- [SingleComponentResponseOfDestinyProfileTransitoryComponent](docs/Model/SingleComponentResponseOfDestinyProfileTransitoryComponent.md)
- [SingleComponentResponseOfDestinyVendorCategoriesComponent](docs/Model/SingleComponentResponseOfDestinyVendorCategoriesComponent.md)
- [SingleComponentResponseOfDestinyVendorComponent](docs/Model/SingleComponentResponseOfDestinyVendorComponent.md)
- [SingleComponentResponseOfDestinyVendorGroupComponent](docs/Model/SingleComponentResponseOfDestinyVendorGroupComponent.md)
- [SingleComponentResponseOfDestinyVendorReceiptsComponent](docs/Model/SingleComponentResponseOfDestinyVendorReceiptsComponent.md)
- [StreamInfo](docs/Model/StreamInfo.md)
- [TagsModelsContractsTagResponse](docs/Model/TagsModelsContractsTagResponse.md)
- [TokensPartnerOfferClaimRequest](docs/Model/TokensPartnerOfferClaimRequest.md)
- [TokensPartnerOfferHistoryResponse](docs/Model/TokensPartnerOfferHistoryResponse.md)
- [TokensPartnerOfferSkuHistoryResponse](docs/Model/TokensPartnerOfferSkuHistoryResponse.md)
- [TrendingTrendingCategories](docs/Model/TrendingTrendingCategories.md)
- [TrendingTrendingCategory](docs/Model/TrendingTrendingCategory.md)
- [TrendingTrendingDetail](docs/Model/TrendingTrendingDetail.md)
- [TrendingTrendingEntry](docs/Model/TrendingTrendingEntry.md)
- [TrendingTrendingEntryCommunityCreation](docs/Model/TrendingTrendingEntryCommunityCreation.md)
- [TrendingTrendingEntryDestinyActivity](docs/Model/TrendingTrendingEntryDestinyActivity.md)
- [TrendingTrendingEntryDestinyItem](docs/Model/TrendingTrendingEntryDestinyItem.md)
- [TrendingTrendingEntryDestinyRitual](docs/Model/TrendingTrendingEntryDestinyRitual.md)
- [TrendingTrendingEntryNews](docs/Model/TrendingTrendingEntryNews.md)
- [TrendingTrendingEntrySupportArticle](docs/Model/TrendingTrendingEntrySupportArticle.md)
- [TrendingTrendingEntryType](docs/Model/TrendingTrendingEntryType.md)
- [UserCrossSaveUserMembership](docs/Model/UserCrossSaveUserMembership.md)
- [UserEMailSettingLocalization](docs/Model/UserEMailSettingLocalization.md)
- [UserEMailSettingSubscriptionLocalization](docs/Model/UserEMailSettingSubscriptionLocalization.md)
- [UserEmailOptInDefinition](docs/Model/UserEmailOptInDefinition.md)
- [UserEmailSettings](docs/Model/UserEmailSettings.md)
- [UserEmailSubscriptionDefinition](docs/Model/UserEmailSubscriptionDefinition.md)
- [UserEmailViewDefinition](docs/Model/UserEmailViewDefinition.md)
- [UserEmailViewDefinitionSetting](docs/Model/UserEmailViewDefinitionSetting.md)
- [UserGeneralUser](docs/Model/UserGeneralUser.md)
- [UserHardLinkedUserMembership](docs/Model/UserHardLinkedUserMembership.md)
- [UserModelsGetCredentialTypesForAccountResponse](docs/Model/UserModelsGetCredentialTypesForAccountResponse.md)
- [UserOptInFlags](docs/Model/UserOptInFlags.md)
- [UserUserInfoCard](docs/Model/UserUserInfoCard.md)
- [UserUserMembership](docs/Model/UserUserMembership.md)
- [UserUserMembershipData](docs/Model/UserUserMembershipData.md)
- [UserUserToUserContext](docs/Model/UserUserToUserContext.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header



### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://www.bungie.net/en/OAuth/Authorize`
- **Scopes**: 
    - **ReadBasicUserProfile**: Read basic user profile information such as the user's handle, avatar icon, etc.
    - **ReadGroups**: Read Group/Clan Forums, Wall, and Members for groups and clans that the   user has joined.
    - **WriteGroups**: Write Group/Clan Forums, Wall, and Members for groups and clans that the   user has joined.
    - **AdminGroups**: Administer Group/Clan Forums, Wall, and Members for groups and clans that the   user is a founder or an administrator.
    - **BnetWrite**: Create new groups, clans, and forum posts, along with other actions that are reserved for Bungie.net  elevated scope: not meant to be used by third party applications.
    - **MoveEquipDestinyItems**: Move or equip Destiny items
    - **ReadDestinyInventoryAndVault**: Read Destiny 1 Inventory and Vault contents.  For Destiny 2, this scope is needed to read anything regarded as private. This is the only scope a  Destiny 2 app needs for read operations against Destiny 2 data such as inventory, vault, currency,  vendors, milestones, progression, etc.
    - **ReadUserData**: Read user data such as who they are web notifications,   clan/group memberships, recent activity, muted users.
    - **EditUserData**: Edit user data such as preferred language, status, motto, avatar selection and theme.
    - **ReadDestinyVendorsAndAdvisors**: Access vendor and advisor data specific to a user. OBSOLETE. This scope is only used on the Destiny 1 API.
    - **ReadAndApplyTokens**: Read offer history and claim and apply tokens for the user.
    - **AdvancedWriteActions**: Can perform actions that will result in a prompt to the user via the Destiny app.
    - **PartnerOfferGrant**: Can user the partner offer api to claim rewards defined for a partner

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@bungie.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.9.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
