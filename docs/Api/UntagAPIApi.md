# ai.thirdwatch\UntagAPIApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unTagUser**](UntagAPIApi.md#unTagUser) | **POST** /v1/untag | If you are unsure whether a user is bad or good, you can always remove tag and leave the user in a neutral state.


# **unTagUser**
> \ai.thirdwatch\Model\EventResponse unTagUser($jSON)

If you are unsure whether a user is bad or good, you can always remove tag and leave the user in a neutral state.

To untag a user for a particular abuse type, send the abuse_type key in json data. In the rare case that you want to remove all tags for all abuse types for a particular user, send without the abuse_type query parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\UntagAPIApi();
$jSON = new \ai.thirdwatch\Model\UnTag(); // \ai.thirdwatch\Model\UnTag | Pass user and it's info to thirdwatch. Only `_userID` is required field. But this should contain untag info.

try {
    $result = $api_instance->unTagUser($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UntagAPIApi->unTagUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\UnTag**](../Model/UnTag.md)| Pass user and it&#39;s info to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain untag info. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
