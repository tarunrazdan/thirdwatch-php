# ai.thirdwatch\CreateAccountApi

All URIs are relative to *https://localhost/event*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](CreateAccountApi.md#createAccount) | **POST** /v1/create_account | Use create_account to pass user details at user registration.


# **createAccount**
> \ai.thirdwatch\Model\EventResponse createAccount($jSON)

Use create_account to pass user details at user registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKey('X-THIRDWATCH-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ai.thirdwatch\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-THIRDWATCH-API-KEY', 'Bearer');

$api_instance = new ai.thirdwatch\Api\CreateAccountApi();
$jSON = new \ai.thirdwatch\Model\CreateAccount(); // \ai.thirdwatch\Model\CreateAccount | Pass user details after registration. Only `_userID` is required field. But this should contain user info.

try {
    $result = $api_instance->createAccount($jSON);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateAccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSON** | [**\ai.thirdwatch\Model\CreateAccount**](../Model/CreateAccount.md)| Pass user details after registration. Only &#x60;_userID&#x60; is required field. But this should contain user info. |

### Return type

[**\ai.thirdwatch\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
