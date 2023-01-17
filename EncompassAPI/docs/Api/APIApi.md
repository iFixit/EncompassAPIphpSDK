# Encompass\SDK\APIApi

All URIs are relative to *https://test.encompass.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restfulserviceBrandListPost**](APIApi.md#restfulservicebrandlistpost) | **POST** /restfulservice/brandList | Brand List
[**restfulserviceCreateOrderPost**](APIApi.md#restfulservicecreateorderpost) | **POST** /restfulservice/createOrder | Create an Order
[**restfulserviceExplodedViewListAssembliesPost**](APIApi.md#restfulserviceexplodedviewlistassembliespost) | **POST** /restfulservice/explodedView/listAssemblies | View assemblies list for interactive exploded views
[**restfulserviceExplodedViewViewAssemblyPost**](APIApi.md#restfulserviceexplodedviewviewassemblypost) | **POST** /restfulservice/explodedView/viewAssembly | View assembly for interactive exploded views.
[**restfulserviceFrequentlyPurchasedPartsPost**](APIApi.md#restfulservicefrequentlypurchasedpartspost) | **POST** /restfulservice/frequentlyPurchasedParts | Frequently Purchased Parts
[**restfulserviceModelPartListPost**](APIApi.md#restfulservicemodelpartlistpost) | **POST** /restfulservice/modelPartList | Model Part List
[**restfulservicePartsInformationPost**](APIApi.md#restfulservicepartsinformationpost) | **POST** /restfulservice/partsInformation | Parts Information
[**restfulserviceSearchPost**](APIApi.md#restfulservicesearchpost) | **POST** /restfulservice/search | Search

# **restfulserviceBrandListPost**
> \Encompass\SDK\Model\InlineResponse200 restfulserviceBrandListPost($body)

Brand List

Get a list of manufacturer codes and names.  We map 3 character code to the manufacturer names.  This code can be used to limit searches and order parts.  This is done because we have many part numbers that run across multiple brands.  This service should does not need to be called often.  Most clients call the service once and store a map in their system that ties their code to ours.  They might call it monthly after that.  We do not change codes, we only add new.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceBrandListBody(); // \Encompass\SDK\Model\RestfulserviceBrandListBody | 

try {
    $result = $apiInstance->restfulserviceBrandListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceBrandListPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceBrandListBody**](../Model/RestfulserviceBrandListBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceCreateOrderPost**
> \Encompass\SDK\Model\InlineResponse2007 restfulserviceCreateOrderPost($body)

Create an Order

We do not accept credit card orders, because it would violate PCI rules.  All orders must be net terms.  We might ship your order from multiple warehouses resulting in multiple `invoiceNumber` for your `referenceNumber1`.  Please keep this in ming for the billing process.  You system needs to be able to accept multiple invoices per `referenceNumber1` that you send us.  We recomend that you send us a unique line number in the `customPartFields` so that we can send it back to you.  This will allow you to know your original line number even if it changes in our system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceCreateOrderBody(); // \Encompass\SDK\Model\RestfulserviceCreateOrderBody | 

try {
    $result = $apiInstance->restfulserviceCreateOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceCreateOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceCreateOrderBody**](../Model/RestfulserviceCreateOrderBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceExplodedViewListAssembliesPost**
> \Encompass\SDK\Model\InlineResponse2003 restfulserviceExplodedViewListAssembliesPost($body)

View assemblies list for interactive exploded views

This service allows you to display an image of an assembly with hotlinks to part information for building your own interactive exploded views. This will return an array of assembly images.  It be called after the `serach` or `modelPartList` service.  The services will return a `explodedViewID` if it exists for a model.  You will need to build the UI on your system.  If you would rather send the user to our webSite to use our existing UI to find the parts, we also return `smallImageURL`.  In order to access the images returned in `ImageUrl`, you will need to provide your server IP address(es) to Encompass so that can be whitelisted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\ExplodedViewListAssembliesBody(); // \Encompass\SDK\Model\ExplodedViewListAssembliesBody | 

try {
    $result = $apiInstance->restfulserviceExplodedViewListAssembliesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceExplodedViewListAssembliesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\ExplodedViewListAssembliesBody**](../Model/ExplodedViewListAssembliesBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceExplodedViewViewAssemblyPost**
> \Encompass\SDK\Model\InlineResponse2004 restfulserviceExplodedViewViewAssemblyPost($body)

View assembly for interactive exploded views.

This will return the assembly image, with parts information and coordinates to display hotlinks for building your own interactive exploded views.  It mixes this information with our internal parts information.  This service can only be called after the `explodedView/listAssemblies` service.  In order to access the images returned in `ImageUrl`, you will need to provide your server IP address(es) to Encompass so that can be whitelisted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\ExplodedViewViewAssemblyBody(); // \Encompass\SDK\Model\ExplodedViewViewAssemblyBody | 

try {
    $result = $apiInstance->restfulserviceExplodedViewViewAssemblyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceExplodedViewViewAssemblyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\ExplodedViewViewAssemblyBody**](../Model/ExplodedViewViewAssemblyBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceFrequentlyPurchasedPartsPost**
> \Encompass\SDK\Model\InlineResponse2006 restfulserviceFrequentlyPurchasedPartsPost($body)

Frequently Purchased Parts

Get details about parts that are frequently purchased with the requested part.  This can help reduce the need for a second service call in the service world.  There are no guarantees on this.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceFrequentlyPurchasedPartsBody(); // \Encompass\SDK\Model\RestfulserviceFrequentlyPurchasedPartsBody | 

try {
    $result = $apiInstance->restfulserviceFrequentlyPurchasedPartsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceFrequentlyPurchasedPartsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceFrequentlyPurchasedPartsBody**](../Model/RestfulserviceFrequentlyPurchasedPartsBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceModelPartListPost**
> \Encompass\SDK\Model\InlineResponse2002 restfulserviceModelPartListPost($body)

Model Part List

Get all of the information about a model including the bill of materials. This service requires the `modelID` from the `search` service.  Please review the `452` under `responses` to learn more about how to handle model variations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceModelPartListBody(); // \Encompass\SDK\Model\RestfulserviceModelPartListBody | 

try {
    $result = $apiInstance->restfulserviceModelPartListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceModelPartListPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceModelPartListBody**](../Model/RestfulserviceModelPartListBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulservicePartsInformationPost**
> \Encompass\SDK\Model\InlineResponse2005 restfulservicePartsInformationPost($body)

Parts Information

Get details about parts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulservicePartsInformationBody(); // \Encompass\SDK\Model\RestfulservicePartsInformationBody | 

try {
    $result = $apiInstance->restfulservicePartsInformationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulservicePartsInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulservicePartsInformationBody**](../Model/RestfulservicePartsInformationBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulserviceSearchPost**
> \Encompass\SDK\Model\InlineResponse2001 restfulserviceSearchPost($body)

Search

search for parts and models

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Encompass\SDK\Model\RestfulserviceSearchBody(); // \Encompass\SDK\Model\RestfulserviceSearchBody | 

try {
    $result = $apiInstance->restfulserviceSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Encompass\SDK\Model\RestfulserviceSearchBody**](../Model/RestfulserviceSearchBody.md)|  |

### Return type

[**\Encompass\SDK\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

