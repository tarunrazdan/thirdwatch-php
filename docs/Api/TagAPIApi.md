# ai.thirdwatch\TagAPIApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagUser**](TagAPIApi.md#tagUser) | **POST** /v1/tag | The Tag API enables you to tell Thirdwatch which of your users are bad and which are good.


# **tagUser**
> \ai.thirdwatch\Model\EventResponse tagUser($jSON)

The Tag API enables you to tell Thirdwatch which of your users are bad and which are good.

By telling us who is bad and who is good, we can identify patterns that are unique to your business. Once you give this feedback, the platform instantly analyzes it and learns to identify good and bad behavior of other users more accurately. If you want to change an existing label for a user - for example, from bad to good - all you need to do is send a new label and we'll overwrite the existing value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\TagAPIApi();
$jSON = new \ai.thirdwatch\Model\Tag(); // \ai.thirdwatch\Model\Tag | Pass user and it's info to thirdwatch. Only `_userID` is required field. But this should contain tag info.

try {
    $result = $api_instance->tagUser($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagAPIApi->tagUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\Tag**](../Model/Tag.md)| Pass user and it&#39;s info to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain tag info. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
