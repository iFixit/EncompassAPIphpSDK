# Encompass\SDK\ResearchApi

All URIs are relative to *https://test.encompass.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restfulservicePartResearchPost**](ResearchApi.md#restfulservicepartresearchpost) | **POST** /restfulservice/partResearch | create a part research request
[**restfulservicePartResearchViewPost**](ResearchApi.md#restfulservicepartresearchviewpost) | **POST** /restfulservice/partResearchView | view a part research request

# **restfulservicePartResearchPost**
> \Encompass\SDK\Model\InlineResponse2009 restfulservicePartResearchPost($body)

create a part research request

This service will create a part research request. You can check the status of the request using the `partResearchView`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\ResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulservicePartResearchBody(); // \Encompass\SDK\Model\RestfulservicePartResearchBody | 

try {
    $result = $apiInstance->restfulservicePartResearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResearchApi->restfulservicePartResearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulservicePartResearchBody**](../Model/RestfulservicePartResearchBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulservicePartResearchViewPost**
> \Encompass\SDK\Model\InlineResponse20011 restfulservicePartResearchViewPost($body)

view a part research request

This service will the status of research requests sent to the `partResearch` service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\ResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulservicePartResearchViewBody(); // \Encompass\SDK\Model\RestfulservicePartResearchViewBody | 

try {
    $result = $apiInstance->restfulservicePartResearchViewPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResearchApi->restfulservicePartResearchViewPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulservicePartResearchViewBody**](../Model/RestfulservicePartResearchViewBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

