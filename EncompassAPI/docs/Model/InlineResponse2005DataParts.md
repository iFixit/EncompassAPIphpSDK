# InlineResponse2005DataParts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_pn** | **string** | internal Encompass part id#.  If this is blank, the part cannot be ordered | [optional] 
**mfg_code** | **string** | manufacturer code | [optional] 
**mfg_name** | **string** | manufacturer name | [optional] 
**part_number** | **string** | part number | [optional] 
**part_description** | **string** | part description | [optional] 
**detailed_part_description** | **string** | detailed part description | [optional] 
**weight** | **string** | weight in lbs. | [optional] 
**length** | **string** | length in inches | [optional] 
**width** | **string** | width in inches | [optional] 
**height** | **string** | height in inches | [optional] 
**hts_code** | **string** | Harmonized Tariff Schedule code used for export | [optional] 
**carrier_size** | **float** | items with a value greater than zero might incur additional freight charges |Value|Description| |-------|--------| |0|normal| |3|Dim| |1|oversized| |2|truck| | [optional] 
**authorization_required** | **string** | requires manufacturer authorization # (Y/N) | [optional] 
**availability** | **string** | quantity available to ship | [optional] 
**availability_by_location** | [**\Encompass\SDK\Model\InlineResponse2005DataAvailabilityByLocation[]**](InlineResponse2005DataAvailabilityByLocation.md) | array of part availability by warehouse location | [optional] 
**eta** | **string** | estimated ship date | [optional] 
**list_price** | **string** | list / retail price for the part | [optional] 
**core_price** | **string** | price of core (core part must be returned to receive credit) | [optional] 
**part_price** | **string** | your price for the part | [optional] 
**total_price** | **string** | part price + core price | [optional] 
**sub_part** | **string** |  | [optional] 
**allow_rts** | **string** | allow good/unused return(Y/N) | [optional] 
**allow_iwr** | **string** | allow in waranty return(Y/N) | [optional] 
**small_image_url** | **string** | URL for image | [optional] 
**compatible_models** | [**\Encompass\SDK\Model\InlineResponse2005DataCompatibleModels[]**](InlineResponse2005DataCompatibleModels.md) | models that the part is used in for parts verification | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

