# ai.thirdwatch\TransactionApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transaction**](TransactionApi.md#transaction) | **POST** /v1/transaction | Use transaction to record attempts results to Pay, Transfer money, Refund or other transactions.


# **transaction**
> \ai.thirdwatch\Model\EventResponse transaction($jSON)

Use transaction to record attempts results to Pay, Transfer money, Refund or other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\TransactionApi();
$jSON = new \ai.thirdwatch\Model\Transaction(); // \ai.thirdwatch\Model\Transaction | Pass transaction results to thirdwatch. Only `_userID` is required field. But this should contain transaction info.

try {
    $result = $api_instance->transaction($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\Transaction**](../Model/Transaction.md)| Pass transaction results to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain transaction info. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
