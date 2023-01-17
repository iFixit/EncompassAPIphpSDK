# InlineResponse2008DataRecords

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**open** | **string** | order or invoice has open items (Y/N) | [optional] 
**reference_number1** | **string** | main reference number | [optional] 
**reference_number2** | **string** | main reference number or claim number | [optional] 
**order_number** | **string** |  | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**freight_amount** | **string** |  | [optional] 
**tax_amount** | **string** |  | [optional] 
**total_amount** | **string** |  | [optional] 
**carrier_name** | **string** | carrier name | [optional] 
**shipping_method** | **string** | shipping service | [optional] 
**days** | **float** | number of days old | [optional] 
**parts** | [**\Encompass\SDK\Model\InlineResponse2008DataParts[]**](InlineResponse2008DataParts.md) | array of part details | [optional] 
**custom_order_fields** | [**\Encompass\SDK\Model\InlineResponse2008DataCustomOrderFields[]**](InlineResponse2008DataCustomOrderFields.md) | array of values that will be returned at the order level if they were provided during the order process | [optional] 
**carrier_activity** | [**\Encompass\SDK\Model\InlineResponse2008DataCarrierActivity**](InlineResponse2008DataCarrierActivity.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

