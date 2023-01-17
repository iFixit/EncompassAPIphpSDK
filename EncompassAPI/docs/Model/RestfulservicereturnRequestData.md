# RestfulservicereturnRequestData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_type** | **string** | customer type (not used for all accounts) | [optional] 
**use_customer_cross** | **string** | map your customer number to ours (not available for all accounts) (y/n) | [optional] 
**invoice_number** | **string** | &#x60;invoiceNumber&#x60; from &#x60;orderStatus&#x60; service | 
**return_reference_number** | **string** | your reference number for the return | [optional] 
**return_service_label** | **string** | request UPS return service label (y/n) | [optional] 
**return_tracking_number** | **string** | customer provided return tracking #, this is only used if not requesting a return service label | [optional] 
**parts** | [**\Encompass\SDK\Model\RestfulservicereturnRequestDataParts[]**](RestfulservicereturnRequestDataParts.md) | array of parts to return | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

