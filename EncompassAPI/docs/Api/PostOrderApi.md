# Encompass\SDK\PostOrderApi

All URIs are relative to *https://test.encompass.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restfulserviceCancelOrderPost**](PostOrderApi.md#restfulservicecancelorderpost) | **POST** /restfulservice/cancelOrder | cancel an open order
[**restfulserviceOrderStatusPost**](PostOrderApi.md#restfulserviceorderstatuspost) | **POST** /restfulservice/orderStatus | Get Order Status
[**restfulserviceReturnRequestPost**](PostOrderApi.md#restfulservicereturnrequestpost) | **POST** /restfulservice/returnRequest | Create an return request

# **restfulserviceCancelOrderPost**
> \Encompass\SDK\Model\InlineResponse2009 restfulserviceCancelOrderPost($body)

cancel an open order

This service will cancel an open order. You must call the `orderStatus` service first. This will give you the proper `orderNumber`, `lineNumber`, and `basePN`.  We do not just cancel the entire order.  This allows you to cancel partial orders and ensures that both parties know exactly what is being cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\PostOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceCancelOrderBody(); // \Encompass\SDK\Model\RestfulserviceCancelOrderBody | 

try {
    $result = $apiInstance->restfulserviceCancelOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostOrderApi->restfulserviceCancelOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceCancelOrderBody**](../Model/RestfulserviceCancelOrderBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceOrderStatusPost**
> \Encompass\SDK\Model\InlineResponse2008 restfulserviceOrderStatusPost($body)

Get Order Status

Get Order Status for a `referenceNumber`, `orderNumber` or `invoiceNumber`.  This service will also return invoice total, tax, freight on invoices that can be used for payment processing.  This is meant for one-off requests or lower volume accounts.  We will setup a flat file or connect to your endpoint for higher volume accounts.  We normally would send an order file (all open items) and a shipped file (all items shipped that day).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\PostOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceOrderStatusBody(); // \Encompass\SDK\Model\RestfulserviceOrderStatusBody | 

try {
    $result = $apiInstance->restfulserviceOrderStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostOrderApi->restfulserviceOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceOrderStatusBody**](../Model/RestfulserviceOrderStatusBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceReturnRequestPost**
> \Encompass\SDK\Model\InlineResponse20010 restfulserviceReturnRequestPost($body)

Create an return request

This service will return a part from an invoice. You must call the `orderStatus` service first. This will give you the proper `invoiceNumber`, `lineNumber`, and `basePN`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\PostOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceReturnRequestBody(); // \Encompass\SDK\Model\RestfulserviceReturnRequestBody | 

try {
    $result = $apiInstance->restfulserviceReturnRequestPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostOrderApi->restfulserviceReturnRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceReturnRequestBody**](../Model/RestfulserviceReturnRequestBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

