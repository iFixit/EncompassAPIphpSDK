# RestfulservicecreateOrderDataParts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_pn** | **string** | internal Encompass part id# &#x60;basePN&#x60; returned from &#x60;search&#x60; or &#x60;partsInformation&#x60; service | [optional] 
**mfg_code** | **string** | 3 character manufacturer code - a list can be obtained from the &#x60;brandList&#x60; service. | [optional] 
**part_number** | **string** |  | [optional] 
**order_quantity** | **string** | quantity of part to order | 
**authorization_or_reference_number** | **string** | part reference number or manufacturer authorization | [optional] 
**claims_processor_code** | **string** | Send this only if you want Encompass to send information to a claim processor |Value|Description| |-------|--------| |9|AIG| |4|Assurant| |5|Cinch| |11|GE| |7|LG| |10|NSA| |6|Samsung| |2|ServiceBench| |8|Whirlpool| | [optional] 
**claim_number** | **string** | Send this only if you want Encompass to send information to a claim   processor | [optional] 
**allow_auto_sub** | **string** | Can we auto substitute the part if you send the order with an old part number(Y/N)? This defaults to no, so that you always order the correct part and you know the price up-front. | [optional] 
**custom_part_fields** | [**\Encompass\SDK\Model\RestfulservicecreateOrderDataCustomPartFields[]**](RestfulservicecreateOrderDataCustomPartFields.md) | array of values that will be stored at the part level and can be sent back to the customers system.  These values must always be sent in the same order.  We suggest making 1 of the occurrences a line number.  This will allow you to tie our line detail back to your original line number, since we might ship order from multiple warehouses or partial ship backorders. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

