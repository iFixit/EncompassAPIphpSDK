# EncompassAPI

Services require a user name and password that must be obtained from Encompass.  We issue a single set of credentials for all invironments.  Please make sure you are pointing to the correct endpoint described in the __servers__ section.  Services all return the elements `status->errorCode` and `status->errorMessage`.  Successful reqeusts will return a __100__ `errorCode`.   If you have any questions that are not answered here or would like to discuss the overall process, please contact your account rep to schedule a technical call.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/EncompassAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Encompass\SDK\Api\APIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restfulservice_brand_list_post_request = new \Encompass\SDK\Model\RestfulserviceBrandListPostRequest(); // \Encompass\SDK\Model\RestfulserviceBrandListPostRequest

try {
    $result = $apiInstance->restfulserviceBrandListPost($restfulservice_brand_list_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIApi->restfulserviceBrandListPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://test.encompass.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIApi* | [**restfulserviceBrandListPost**](docs/Api/APIApi.md#restfulservicebrandlistpost) | **POST** /restfulservice/brandList | Brand List
*APIApi* | [**restfulserviceCreateOrderPost**](docs/Api/APIApi.md#restfulservicecreateorderpost) | **POST** /restfulservice/createOrder | Create an Order
*APIApi* | [**restfulserviceExplodedViewListAssembliesPost**](docs/Api/APIApi.md#restfulserviceexplodedviewlistassembliespost) | **POST** /restfulservice/explodedView/listAssemblies | View assemblies list for interactive exploded views
*APIApi* | [**restfulserviceExplodedViewViewAssemblyPost**](docs/Api/APIApi.md#restfulserviceexplodedviewviewassemblypost) | **POST** /restfulservice/explodedView/viewAssembly | View assembly for interactive exploded views.
*APIApi* | [**restfulserviceFrequentlyPurchasedPartsPost**](docs/Api/APIApi.md#restfulservicefrequentlypurchasedpartspost) | **POST** /restfulservice/frequentlyPurchasedParts | Frequently Purchased Parts
*APIApi* | [**restfulserviceModelPartListPost**](docs/Api/APIApi.md#restfulservicemodelpartlistpost) | **POST** /restfulservice/modelPartList | Model Part List
*APIApi* | [**restfulservicePartsInformationPost**](docs/Api/APIApi.md#restfulservicepartsinformationpost) | **POST** /restfulservice/partsInformation | Parts Information
*APIApi* | [**restfulserviceSearchPost**](docs/Api/APIApi.md#restfulservicesearchpost) | **POST** /restfulservice/search | Search
*APIApi* | [**restfulserviceShiptoPost**](docs/Api/APIApi.md#restfulserviceshiptopost) | **POST** /restfulservice/shipto | Customer Ship To list
*PostOrderApi* | [**restfulserviceCancelOrderPost**](docs/Api/PostOrderApi.md#restfulservicecancelorderpost) | **POST** /restfulservice/cancelOrder | cancel an open order
*PostOrderApi* | [**restfulserviceOrderStatusPost**](docs/Api/PostOrderApi.md#restfulserviceorderstatuspost) | **POST** /restfulservice/orderStatus | Get Order Status
*PostOrderApi* | [**restfulserviceReturnRequestPost**](docs/Api/PostOrderApi.md#restfulservicereturnrequestpost) | **POST** /restfulservice/returnRequest | Create an return request
*ResearchApi* | [**restfulservicePartResearchPost**](docs/Api/ResearchApi.md#restfulservicepartresearchpost) | **POST** /restfulservice/partResearch | create a part research request
*ResearchApi* | [**restfulservicePartResearchViewPost**](docs/Api/ResearchApi.md#restfulservicepartresearchviewpost) | **POST** /restfulservice/partResearchView | view a part research request
*RoundTripApi* | [**inboundURLPost**](docs/Api/RoundTripApi.md#inboundurlpost) | **POST** /inboundURL | 
*RoundTripApi* | [**orderRequestPost**](docs/Api/RoundTripApi.md#orderrequestpost) | **POST** /orderRequest | Order Request sent from us to your rest service that will match this service

## Models

- [OrderRequestPost400Response](docs/Model/OrderRequestPost400Response.md)
- [OrderRequestPost400ResponseStatus](docs/Model/OrderRequestPost400ResponseStatus.md)
- [OrderRequestPostRequest](docs/Model/OrderRequestPostRequest.md)
- [OrderRequestPostRequestData](docs/Model/OrderRequestPostRequestData.md)
- [OrderRequestPostRequestDataPartsInner](docs/Model/OrderRequestPostRequestDataPartsInner.md)
- [OrderRequestPostRequestSettings](docs/Model/OrderRequestPostRequestSettings.md)
- [RestfulserviceBrandListPost200Response](docs/Model/RestfulserviceBrandListPost200Response.md)
- [RestfulserviceBrandListPost200ResponseData](docs/Model/RestfulserviceBrandListPost200ResponseData.md)
- [RestfulserviceBrandListPost200ResponseDataManufacturersInner](docs/Model/RestfulserviceBrandListPost200ResponseDataManufacturersInner.md)
- [RestfulserviceBrandListPost200ResponseStatus](docs/Model/RestfulserviceBrandListPost200ResponseStatus.md)
- [RestfulserviceBrandListPost400Response](docs/Model/RestfulserviceBrandListPost400Response.md)
- [RestfulserviceBrandListPost400ResponseStatus](docs/Model/RestfulserviceBrandListPost400ResponseStatus.md)
- [RestfulserviceBrandListPostRequest](docs/Model/RestfulserviceBrandListPostRequest.md)
- [RestfulserviceBrandListPostRequestSettings](docs/Model/RestfulserviceBrandListPostRequestSettings.md)
- [RestfulserviceCancelOrderPost200Response](docs/Model/RestfulserviceCancelOrderPost200Response.md)
- [RestfulserviceCancelOrderPost200ResponseStatus](docs/Model/RestfulserviceCancelOrderPost200ResponseStatus.md)
- [RestfulserviceCancelOrderPost400Response](docs/Model/RestfulserviceCancelOrderPost400Response.md)
- [RestfulserviceCancelOrderPost400ResponseStatus](docs/Model/RestfulserviceCancelOrderPost400ResponseStatus.md)
- [RestfulserviceCancelOrderPostRequest](docs/Model/RestfulserviceCancelOrderPostRequest.md)
- [RestfulserviceCancelOrderPostRequestData](docs/Model/RestfulserviceCancelOrderPostRequestData.md)
- [RestfulserviceCancelOrderPostRequestDataPartsInner](docs/Model/RestfulserviceCancelOrderPostRequestDataPartsInner.md)
- [RestfulserviceCancelOrderPostRequestSettings](docs/Model/RestfulserviceCancelOrderPostRequestSettings.md)
- [RestfulserviceCreateOrderPost200Response](docs/Model/RestfulserviceCreateOrderPost200Response.md)
- [RestfulserviceCreateOrderPost400Response](docs/Model/RestfulserviceCreateOrderPost400Response.md)
- [RestfulserviceCreateOrderPost400ResponseStatus](docs/Model/RestfulserviceCreateOrderPost400ResponseStatus.md)
- [RestfulserviceCreateOrderPostRequest](docs/Model/RestfulserviceCreateOrderPostRequest.md)
- [RestfulserviceCreateOrderPostRequestData](docs/Model/RestfulserviceCreateOrderPostRequestData.md)
- [RestfulserviceCreateOrderPostRequestDataPartsInner](docs/Model/RestfulserviceCreateOrderPostRequestDataPartsInner.md)
- [RestfulserviceCreateOrderPostRequestDataPartsInnerCustomPartFieldsInner](docs/Model/RestfulserviceCreateOrderPostRequestDataPartsInnerCustomPartFieldsInner.md)
- [RestfulserviceCreateOrderPostRequestDataShipToAddress](docs/Model/RestfulserviceCreateOrderPostRequestDataShipToAddress.md)
- [RestfulserviceCreateOrderPostRequestSettings](docs/Model/RestfulserviceCreateOrderPostRequestSettings.md)
- [RestfulserviceExplodedViewListAssembliesPost200Response](docs/Model/RestfulserviceExplodedViewListAssembliesPost200Response.md)
- [RestfulserviceExplodedViewListAssembliesPost200ResponseData](docs/Model/RestfulserviceExplodedViewListAssembliesPost200ResponseData.md)
- [RestfulserviceExplodedViewListAssembliesPost200ResponseDataAssembliesInner](docs/Model/RestfulserviceExplodedViewListAssembliesPost200ResponseDataAssembliesInner.md)
- [RestfulserviceExplodedViewListAssembliesPost400Response](docs/Model/RestfulserviceExplodedViewListAssembliesPost400Response.md)
- [RestfulserviceExplodedViewListAssembliesPost400ResponseStatus](docs/Model/RestfulserviceExplodedViewListAssembliesPost400ResponseStatus.md)
- [RestfulserviceExplodedViewListAssembliesPostRequest](docs/Model/RestfulserviceExplodedViewListAssembliesPostRequest.md)
- [RestfulserviceExplodedViewListAssembliesPostRequestData](docs/Model/RestfulserviceExplodedViewListAssembliesPostRequestData.md)
- [RestfulserviceExplodedViewViewAssemblyPost200Response](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200Response.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseData](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseData.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssembly](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssembly.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInner](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInner.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInnerBottomRight](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInnerBottomRight.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInnerTopLeft](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseDataAssemblyHotSpotsInnerTopLeft.md)
- [RestfulserviceExplodedViewViewAssemblyPost200ResponseDataPartsInner](docs/Model/RestfulserviceExplodedViewViewAssemblyPost200ResponseDataPartsInner.md)
- [RestfulserviceExplodedViewViewAssemblyPostRequest](docs/Model/RestfulserviceExplodedViewViewAssemblyPostRequest.md)
- [RestfulserviceExplodedViewViewAssemblyPostRequestData](docs/Model/RestfulserviceExplodedViewViewAssemblyPostRequestData.md)
- [RestfulserviceExplodedViewViewAssemblyPostRequestSettings](docs/Model/RestfulserviceExplodedViewViewAssemblyPostRequestSettings.md)
- [RestfulserviceFrequentlyPurchasedPartsPost200Response](docs/Model/RestfulserviceFrequentlyPurchasedPartsPost200Response.md)
- [RestfulserviceFrequentlyPurchasedPartsPost200ResponseData](docs/Model/RestfulserviceFrequentlyPurchasedPartsPost200ResponseData.md)
- [RestfulserviceFrequentlyPurchasedPartsPost200ResponseDataPartsInner](docs/Model/RestfulserviceFrequentlyPurchasedPartsPost200ResponseDataPartsInner.md)
- [RestfulserviceFrequentlyPurchasedPartsPost400Response](docs/Model/RestfulserviceFrequentlyPurchasedPartsPost400Response.md)
- [RestfulserviceFrequentlyPurchasedPartsPost400ResponseStatus](docs/Model/RestfulserviceFrequentlyPurchasedPartsPost400ResponseStatus.md)
- [RestfulserviceFrequentlyPurchasedPartsPostRequest](docs/Model/RestfulserviceFrequentlyPurchasedPartsPostRequest.md)
- [RestfulserviceFrequentlyPurchasedPartsPostRequestData](docs/Model/RestfulserviceFrequentlyPurchasedPartsPostRequestData.md)
- [RestfulserviceFrequentlyPurchasedPartsPostRequestSettings](docs/Model/RestfulserviceFrequentlyPurchasedPartsPostRequestSettings.md)
- [RestfulserviceModelPartListPost200Response](docs/Model/RestfulserviceModelPartListPost200Response.md)
- [RestfulserviceModelPartListPost200ResponseData](docs/Model/RestfulserviceModelPartListPost200ResponseData.md)
- [RestfulserviceModelPartListPost200ResponseDataPartsInner](docs/Model/RestfulserviceModelPartListPost200ResponseDataPartsInner.md)
- [RestfulserviceModelPartListPost200ResponseDataSymptomsInner](docs/Model/RestfulserviceModelPartListPost200ResponseDataSymptomsInner.md)
- [RestfulserviceModelPartListPost400Response](docs/Model/RestfulserviceModelPartListPost400Response.md)
- [RestfulserviceModelPartListPost400ResponseStatus](docs/Model/RestfulserviceModelPartListPost400ResponseStatus.md)
- [RestfulserviceModelPartListPost452Response](docs/Model/RestfulserviceModelPartListPost452Response.md)
- [RestfulserviceModelPartListPost452ResponseData](docs/Model/RestfulserviceModelPartListPost452ResponseData.md)
- [RestfulserviceModelPartListPost452ResponseStatus](docs/Model/RestfulserviceModelPartListPost452ResponseStatus.md)
- [RestfulserviceModelPartListPostRequest](docs/Model/RestfulserviceModelPartListPostRequest.md)
- [RestfulserviceModelPartListPostRequestData](docs/Model/RestfulserviceModelPartListPostRequestData.md)
- [RestfulserviceModelPartListPostRequestSettings](docs/Model/RestfulserviceModelPartListPostRequestSettings.md)
- [RestfulserviceOrderStatusPost200Response](docs/Model/RestfulserviceOrderStatusPost200Response.md)
- [RestfulserviceOrderStatusPost200ResponseData](docs/Model/RestfulserviceOrderStatusPost200ResponseData.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInner](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInner.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInnerCarrierActivity](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInnerCarrierActivity.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInner](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInner.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerCustomPartFieldsInner](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerCustomPartFieldsInner.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerOutboundTrackingsInner](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerOutboundTrackingsInner.md)
- [RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerSerialNumbersInner](docs/Model/RestfulserviceOrderStatusPost200ResponseDataRecordsInnerPartsInnerSerialNumbersInner.md)
- [RestfulserviceOrderStatusPost400Response](docs/Model/RestfulserviceOrderStatusPost400Response.md)
- [RestfulserviceOrderStatusPost400ResponseStatus](docs/Model/RestfulserviceOrderStatusPost400ResponseStatus.md)
- [RestfulserviceOrderStatusPostRequest](docs/Model/RestfulserviceOrderStatusPostRequest.md)
- [RestfulserviceOrderStatusPostRequestData](docs/Model/RestfulserviceOrderStatusPostRequestData.md)
- [RestfulserviceOrderStatusPostRequestSettings](docs/Model/RestfulserviceOrderStatusPostRequestSettings.md)
- [RestfulservicePartResearchPost400Response](docs/Model/RestfulservicePartResearchPost400Response.md)
- [RestfulservicePartResearchPost400ResponseStatus](docs/Model/RestfulservicePartResearchPost400ResponseStatus.md)
- [RestfulservicePartResearchPostRequest](docs/Model/RestfulservicePartResearchPostRequest.md)
- [RestfulservicePartResearchPostRequestData](docs/Model/RestfulservicePartResearchPostRequestData.md)
- [RestfulservicePartResearchPostRequestSettings](docs/Model/RestfulservicePartResearchPostRequestSettings.md)
- [RestfulservicePartResearchViewPost200Response](docs/Model/RestfulservicePartResearchViewPost200Response.md)
- [RestfulservicePartResearchViewPost200ResponseData](docs/Model/RestfulservicePartResearchViewPost200ResponseData.md)
- [RestfulservicePartResearchViewPost400Response](docs/Model/RestfulservicePartResearchViewPost400Response.md)
- [RestfulservicePartResearchViewPost400ResponseStatus](docs/Model/RestfulservicePartResearchViewPost400ResponseStatus.md)
- [RestfulservicePartResearchViewPostRequest](docs/Model/RestfulservicePartResearchViewPostRequest.md)
- [RestfulservicePartResearchViewPostRequestData](docs/Model/RestfulservicePartResearchViewPostRequestData.md)
- [RestfulservicePartResearchViewPostRequestSettings](docs/Model/RestfulservicePartResearchViewPostRequestSettings.md)
- [RestfulservicePartsInformationPost200Response](docs/Model/RestfulservicePartsInformationPost200Response.md)
- [RestfulservicePartsInformationPost200ResponseData](docs/Model/RestfulservicePartsInformationPost200ResponseData.md)
- [RestfulservicePartsInformationPost200ResponseDataPartsInner](docs/Model/RestfulservicePartsInformationPost200ResponseDataPartsInner.md)
- [RestfulservicePartsInformationPost200ResponseDataPartsInnerAvailabilityByLocationInner](docs/Model/RestfulservicePartsInformationPost200ResponseDataPartsInnerAvailabilityByLocationInner.md)
- [RestfulservicePartsInformationPost200ResponseDataPartsInnerCompatibleModelsInner](docs/Model/RestfulservicePartsInformationPost200ResponseDataPartsInnerCompatibleModelsInner.md)
- [RestfulservicePartsInformationPost200ResponseDataPartsInnerSymptomsInner](docs/Model/RestfulservicePartsInformationPost200ResponseDataPartsInnerSymptomsInner.md)
- [RestfulservicePartsInformationPost400Response](docs/Model/RestfulservicePartsInformationPost400Response.md)
- [RestfulservicePartsInformationPost400ResponseStatus](docs/Model/RestfulservicePartsInformationPost400ResponseStatus.md)
- [RestfulservicePartsInformationPostRequest](docs/Model/RestfulservicePartsInformationPostRequest.md)
- [RestfulservicePartsInformationPostRequestData](docs/Model/RestfulservicePartsInformationPostRequestData.md)
- [RestfulservicePartsInformationPostRequestSettings](docs/Model/RestfulservicePartsInformationPostRequestSettings.md)
- [RestfulserviceReturnRequestPost200Response](docs/Model/RestfulserviceReturnRequestPost200Response.md)
- [RestfulserviceReturnRequestPost200ResponseData](docs/Model/RestfulserviceReturnRequestPost200ResponseData.md)
- [RestfulserviceReturnRequestPost200ResponseDataReturnAddress](docs/Model/RestfulserviceReturnRequestPost200ResponseDataReturnAddress.md)
- [RestfulserviceReturnRequestPost200ResponseDataReturnService](docs/Model/RestfulserviceReturnRequestPost200ResponseDataReturnService.md)
- [RestfulserviceReturnRequestPost400Response](docs/Model/RestfulserviceReturnRequestPost400Response.md)
- [RestfulserviceReturnRequestPost400ResponseStatus](docs/Model/RestfulserviceReturnRequestPost400ResponseStatus.md)
- [RestfulserviceReturnRequestPostRequest](docs/Model/RestfulserviceReturnRequestPostRequest.md)
- [RestfulserviceReturnRequestPostRequestData](docs/Model/RestfulserviceReturnRequestPostRequestData.md)
- [RestfulserviceReturnRequestPostRequestDataPartsInner](docs/Model/RestfulserviceReturnRequestPostRequestDataPartsInner.md)
- [RestfulserviceReturnRequestPostRequestSettings](docs/Model/RestfulserviceReturnRequestPostRequestSettings.md)
- [RestfulserviceSearchPost200Response](docs/Model/RestfulserviceSearchPost200Response.md)
- [RestfulserviceSearchPost200ResponseData](docs/Model/RestfulserviceSearchPost200ResponseData.md)
- [RestfulserviceSearchPost200ResponseDataModelsInner](docs/Model/RestfulserviceSearchPost200ResponseDataModelsInner.md)
- [RestfulserviceSearchPost200ResponseDataPartsInner](docs/Model/RestfulserviceSearchPost200ResponseDataPartsInner.md)
- [RestfulserviceSearchPost400Response](docs/Model/RestfulserviceSearchPost400Response.md)
- [RestfulserviceSearchPost400ResponseStatus](docs/Model/RestfulserviceSearchPost400ResponseStatus.md)
- [RestfulserviceSearchPostRequest](docs/Model/RestfulserviceSearchPostRequest.md)
- [RestfulserviceSearchPostRequestData](docs/Model/RestfulserviceSearchPostRequestData.md)
- [RestfulserviceSearchPostRequestSettings](docs/Model/RestfulserviceSearchPostRequestSettings.md)
- [RestfulserviceShiptoPost200Response](docs/Model/RestfulserviceShiptoPost200Response.md)
- [RestfulserviceShiptoPost200ResponseData](docs/Model/RestfulserviceShiptoPost200ResponseData.md)
- [RestfulserviceShiptoPost200ResponseDataAddressesInner](docs/Model/RestfulserviceShiptoPost200ResponseDataAddressesInner.md)
- [RestfulserviceShiptoPostRequest](docs/Model/RestfulserviceShiptoPostRequest.md)
- [RestfulserviceShiptoPostRequestSettings](docs/Model/RestfulserviceShiptoPostRequestSettings.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
