# ai.thirdwatch\ItemStatusApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemStatus**](ItemStatusApi.md#itemStatus) | **POST** /v1/item_status | Use item_status to update the status of item that you’ve already pass to Thirdwatch.


# **itemStatus**
> \ai.thirdwatch\Model\EventResponse itemStatus($jSON)

Use item_status to update the status of item that you’ve already pass to Thirdwatch.

If the status is the only thing that’s changing about the item, use this as a convenient way to send status of the item after order processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\ItemStatusApi();
$jSON = new \ai.thirdwatch\Model\ItemStatus(); // \ai.thirdwatch\Model\ItemStatus | Pass change item status to thirdwatch. Only `_userID` is required field. But this should contain item status.

try {
    $result = $api_instance->itemStatus($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemStatusApi->itemStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\ItemStatus**](../Model/ItemStatus.md)| Pass change item status to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain item status. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
