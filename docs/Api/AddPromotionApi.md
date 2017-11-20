# ai.thirdwatch\AddPromotionApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPromotion**](AddPromotionApi.md#addPromotion) | **POST** /v1/add_promotion | Use add_promotion to record when a user adds one or more promotions to their account.


# **addPromotion**
> \ai.thirdwatch\Model\EventResponse addPromotion($jSON)

Use add_promotion to record when a user adds one or more promotions to their account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\AddPromotionApi();
$jSON = new \ai.thirdwatch\Model\AddPromotion(); // \ai.thirdwatch\Model\AddPromotion | Pass added promotion info to thirdwatch. Only `_userID` is required field. But this should contain promotion info.

try {
    $result = $api_instance->addPromotion($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddPromotionApi->addPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\AddPromotion**](../Model/AddPromotion.md)| Pass added promotion info to thirdwatch. Only &#x60;_userID&#x60; is required field. But this should contain promotion info. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
