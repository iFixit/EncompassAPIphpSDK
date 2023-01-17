# RestfulservicereturnRequestDataParts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **string** | &#x60;lineNumber&#x60; from &#x60;orderStatus&#x60; service | 
**base_pn** | **string** | &#x60;basePN&#x60; from &#x60;orderStatus&#x60; service | 
**return_quantity** | **string** | quantity that you want to return | 
**return_type** | **string** | Type of Return |Value|Description| |-------|--------| |1|Good &amp; Un-used Parts| |2|Warranty / Replacement| |3|Core / Dud| | 
**reason_code** | **string** | reason code for return _Required for Warranty / Replacement_ |Value|Description| |-------|--------| |1|No power| |2|Automatically shuts down| |4|Sound problem| |5|Intermittent power issue| |6|Picture distortion issue| |8|Compatibility issue| |9|Wrong color| |10|Physical Damage| |11|Leak Issue| |12|No Video| | [optional] 
**model_number** | **string** | model # of the product then part is returned from _Required for Warranty / Replacement_ | [optional] 
**serial_number** | **string** | serial # of the product the part is returned from _Required for Warranty / Replacement_ | [optional] 
**replacement_order_number** | **string** | replacement order # _Required for Warranty / Replacement if the account is not setup to auto-replace_ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

