# RestfulservicecreateOrderData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_type** | **string** | customer type (not used for all accounts) | [optional] 
**use_customer_cross** | **string** | map your customer number to ours (not available for all accounts) (y/n) | [optional] 
**reference_number1** | **string** | main reference number | 
**transaction_id** | **string** | required if you allow duplicate referenceNumber1 to prevent duplicate transactions | [optional] 
**reference_number2** | **string** | alternate reference number or claim number | [optional] 
**shipping_method** | **string** | Method the order will ship |Value|Description| |-------|--------| |null|Customer Default| |1|Ground| |2|2 Day - Allow downgrade to ground if destination is within 2 day ground service area to save money| |6|2 Day - No downgrade to ground service| |3|Next Day - No downgrade to ground service| |7|Next Day - Allow downgrade to ground if destination is within 1 day ground service area to save money| |5|3 Day| |4|Pick-up - must send a requestLocationNumber or the order will default to the accounts home location| | [optional] 
**shipping_third_party_number** | **string** | third party shipping account number | [optional] 
**shipping_third_party_carrier** | **string** | third party shipping carrier _required if you send a shippingThirdPartyNumber_ |Value|Description| |-------|--------| |1|FedEx| |2|UPS| | [optional] 
**blind_ship** | **string** | request a blind shippment (y/n).  There not be pricing on any communications and it will appear to ship from your company. | [optional] 
**residential_address** | **string** | residential address (y/n) | [optional] 
**require_signature** | **string** | require signature for delivery (y/n) - additional freight charges will apply | [optional] 
**ship_complete** | **string** | ship order complete(y/n) | [optional] 
**ship_to_address** | [**\Encompass\SDK\Model\RestfulservicecreateOrderDataShipToAddress**](RestfulservicecreateOrderDataShipToAddress.md) |  | 
**request_return_service** | **string** | add return service label (y/n) (fees might apply) | [optional] 
**email_address** | **string** | address for confirmation email | [optional] 
**request_location_number** | **string** | This should only be used to request a specific warehouse location in certain situations such as a pick-up. We normally route order based on availability and distance for the fastest results.  Using this incorrectly could cause order delays and additional freight charges.  If an invalid value is received, it will just be ignored. | [optional] 
**parts** | [**\Encompass\SDK\Model\RestfulservicecreateOrderDataParts[]**](RestfulservicecreateOrderDataParts.md) | array of parts to be ordered - Preferred method Send the &#x60;basePN&#x60; that is returned from our &#x60;search&#x60; or &#x60;partsInformation&#x60; service. You can also send the &#x60;mfgCode&#x60; and &#x60;partNumber&#x60; as a backup, but it is not required for this method. - Alternative method Do not send the &#x60;basePN&#x60;, just send the &#x60;mfgCode&#x60; and &#x60;partNumber&#x60;.  This prevents issues where multiple manufacruers have the same part number. | 
**custom_order_fields** | [**\Encompass\SDK\Model\RestfulservicecreateOrderDataCustomPartFields[]**](RestfulservicecreateOrderDataCustomPartFields.md) | array of values that will be stored at the order level and can be sent back to the customers system.  These values must always be sent in the same order | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

