# ai.thirdwatch\ReportItemApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportItem**](ReportItemApi.md#reportItem) | **POST** /v1/report_item | Use report_item to let us know when another user reports that this item may violate your company’s policies.


# **reportItem**
> \ai.thirdwatch\Model\EventResponse reportItem($jSON)

Use report_item to let us know when another user reports that this item may violate your company’s policies.

If you have a feature like \"Report Item\" or \"Flag this Item\", send that event to us using this.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\ReportItemApi();
$jSON = new \ai.thirdwatch\Model\ReportItem(); // \ai.thirdwatch\Model\ReportItem | Pass report item info to thirdwatch. Only `_userID` is required field. But this should contain item id.

try {
    $result = $api_instance->reportItem($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportItemApi->reportItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\ReportItem**](../Model/ReportItem.md)| Pass report item info to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain item id. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
