# InlineResponse20011Data

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_code** | **string** | status code for the request |Value|Description| |-------|--------| |O|Open| |C|Complete| | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) | date request was created | [optional] 
**complete_date** | [**\DateTime**](\DateTime.md) | date request was completed | [optional] 
**base_pn** | **string** | If the request is complete and the basePN is empty, we did not find a valid part number with the information provided.  If there is a basePN, then you can use this to send to the &#x60;partInformation&#x60; service. | [optional] 
**mfg_code** | **string** |  | [optional] 
**part_number** | **string** | ABC-123 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

