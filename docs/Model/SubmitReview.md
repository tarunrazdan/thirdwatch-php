# SubmitReview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | The user&#39;s account ID according to your systems. Note that user IDs are case sensitive. | [optional] 
**sessionId** | **string** | The user&#39;s current session ID, used to tie a user&#39;s action before and after login or account creation. Required if no user_id values is provided. | [optional] 
**deviceIp** | **string** | IP address of the request made by the user. Recommended for historical backfills and customers with mobile apps. | [optional] 
**originTimestamp** | **string** | Represents the time the event occured in your system. Send as a UNIX timestamp in milliseconds in string. | [optional] 
**reviewTitle** | **string** | The title of review submitted. | [optional] 
**reviewContent** | **string** | The text content of review submitted. | [optional] 
**itemId** | **string** | The ID of the product or service being reviewed. | [optional] 
**submissionStatus** | **string** | If reviews in your system must be approved, use _submissionStatus to represent the status of the review. e.g. _success, _failure, _pending | [optional] 
**rating** | **string** | The rating provided by the user. e.g. \&quot;4\&quot; | [optional] 
**customInfo** | [**\ai.thirdwatch\Model\CustomInfo**](CustomInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


