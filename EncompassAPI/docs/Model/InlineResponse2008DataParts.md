# InlineResponse2008DataParts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | type of item |Value|Description| |-------|--------| |ORDER|| |RETURN|| |CORE RETURN|| |CORE BILLING|| |CREDIT|| | [optional] 
**status** | **string** | status of item |Value|Description| |-------|--------| |SHIPPING|| |BACKORDER|| |ON HOLD|| |NOT RECEIVED|| |SHIPPED|| |ISSUED|| |CANCELLED|| |BILLED|| | [optional] 
**line_number** | **float** | line# on our record | [optional] 
**base_pn** | **string** | internal Encompass part id# | [optional] 
**mfg_code** | **string** | manufacturer code | [optional] 
**mfg_name** | **string** | manufacturer name | [optional] 
**part_number** | **string** | part number | [optional] 
**description** | **string** | part description | [optional] 
**order_quantity** | **string** | quantity ordered | [optional] 
**ship_quantity** | **string** | quantity shipped | [optional] 
**backorder_quantity** | **string** | quantity on backorder | [optional] 
**eta** | **string** | estimated time of arrival | [optional] 
**unit_price** | **string** | unit price | [optional] 
**unit_core_charge** | **string** | unit core charge | [optional] 
**extended_price** | **string** | extended price (unitPrice+unitCoreCharge)*shipQuantity | [optional] 
**authorization_or_reference_number** | **string** | part reference number or manufacturer authorization | [optional] 
**inbound_tracking** | **string** | tracking number for a return package | [optional] 
**original_part_number** | **string** | original Part Number | [optional] 
**open_core** | **string** | items has an open core (Y/N) | [optional] 
**outbound_trackings** | [**\Encompass\SDK\Model\InlineResponse2008DataOutboundTrackings[]**](InlineResponse2008DataOutboundTrackings.md) | array of outbound tracking details | [optional] 
**custom_part_fields** | [**\Encompass\SDK\Model\InlineResponse2008DataCustomPartFields[]**](InlineResponse2008DataCustomPartFields.md) | array of custom values that will be returned at the part level if they were provided during the order process | [optional] 
**serial_numbers** | [**\Encompass\SDK\Model\InlineResponse2008DataSerialNumbers[]**](InlineResponse2008DataSerialNumbers.md) | array of product serial numbers sold | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

