# GeoDataModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\GeoService\Model\AddressModel**](AddressModel.md) |  | [optional] 
**location** | [**\GeoService\Model\LocationModel**](LocationModel.md) |  | [optional] 
**provider_name** | **string** | Name of provider of this GeoData | [optional] [default to 'manual']
**provider_id** | **string** | ID of this GeoData as registered by provider (when left empty when creating manual GeoData, a value will be generated) | [optional] 
**accuracy** | **float** | A measure for how accurately we deem the address data to match the location data. [0..1] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


