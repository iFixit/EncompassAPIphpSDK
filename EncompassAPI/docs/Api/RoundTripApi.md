# Encompass\SDK\RoundTripApi

All URIs are relative to *https://test.encompass.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundURLPost**](RoundTripApi.md#inboundurlpost) | **POST** /inboundURL | 
[**orderRequestPost**](RoundTripApi.md#orderrequestpost) | **POST** /orderRequest | Order Request sent from us to your rest service that will match this service

# **inboundURLPost**
> inboundURLPost($c, $p, $hookurl, $buyercookie, $claim)



This is not a rest service, it is just s description of the link will need to create for your users to click.  This will pass information along with the user to our web site. `https://encompass.com/?action=accountLogin&c=&p=&hookurl=&buyercookie=&claim=`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\RoundTripApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$c = "c_example"; // string | Encompass cutsomer number
$p = "p_example"; // string | Encompass cutsomer password
$hookurl = "hookurl_example"; // string | assigned by Encompass
$buyercookie = "buyercookie_example"; // string | assigned by client and passed back to client in order request to help authenticate Encompass
$claim = "claim_example"; // string | client reference number

try {
    $apiInstance->inboundURLPost($c, $p, $hookurl, $buyercookie, $claim);
} catch (Exception $e) {
    echo 'Exception when calling RoundTripApi->inboundURLPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **c** | **string**| Encompass cutsomer number | [optional]
 **p** | **string**| Encompass cutsomer password | [optional]
 **hookurl** | **string**| assigned by Encompass | [optional]
 **buyercookie** | **string**| assigned by client and passed back to client in order request to help authenticate Encompass | [optional]
 **claim** | **string**| client reference number | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRequestPost**
> \Encompass\SDK\Model\InlineResponse2007 orderRequestPost($body)

Order Request sent from us to your rest service that will match this service

You will create a service that can accept this request and provide a matching response.  This will tell your system what parts the user requested from our web site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\RoundTripApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\OrderRequestBody(); // \Encompass\SDK\Model\OrderRequestBody | 

try {
    $result = $apiInstance->orderRequestPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoundTripApi->orderRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\OrderRequestBody**](../Model/OrderRequestBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

