<?php
/**
 * AddresssuggestionApi
 * PHP version 5
 *
 * @category Class
 * @package  GeoService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal GeoService
 *
 * Bumbal GeoService API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: jurgen@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GeoService\API;

use \GeoService\ApiClient;
use \GeoService\ApiException;
use \GeoService\Configuration;
use \GeoService\ObjectSerializer;

/**
 * AddresssuggestionApi Class Doc Comment
 *
 * @category Class
 * @package  GeoService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddresssuggestionApi
{
    /**
     * API Client
     *
     * @var \GeoService\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \GeoService\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\GeoService\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \GeoService\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \GeoService\ApiClient $apiClient set the API client
     *
     * @return AddresssuggestionApi
     */
    public function setApiClient(\GeoService\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addressSuggestion
     *
     * Find GeoData based on zipcode, house_nr and iso_country
     *
     * @param string $iso_country Country in ISO 3166-1 alpha 2 (required)
     * @param string $zipcode Zipcode (optional)
     * @param string $house_nr House Number (optional)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\GeoDataListResponseModel
     */
    public function addressSuggestion($iso_country, $zipcode = null, $house_nr = null)
    {
        list($response) = $this->addressSuggestionWithHttpInfo($iso_country, $zipcode, $house_nr);
        return $response;
    }

    /**
     * Operation addressSuggestionWithHttpInfo
     *
     * Find GeoData based on zipcode, house_nr and iso_country
     *
     * @param string $iso_country Country in ISO 3166-1 alpha 2 (required)
     * @param string $zipcode Zipcode (optional)
     * @param string $house_nr House Number (optional)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\GeoDataListResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addressSuggestionWithHttpInfo($iso_country, $zipcode = null, $house_nr = null)
    {
        // verify the required parameter 'iso_country' is set
        if ($iso_country === null) {
            throw new \InvalidArgumentException('Missing the required parameter $iso_country when calling addressSuggestion');
        }
        // parse inputs
        $resourcePath = "/address-suggestion";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($zipcode !== null) {
            $queryParams['zipcode'] = $this->apiClient->getSerializer()->toQueryValue($zipcode);
        }
        // query params
        if ($house_nr !== null) {
            $queryParams['house_nr'] = $this->apiClient->getSerializer()->toQueryValue($house_nr);
        }
        // query params
        if ($iso_country !== null) {
            $queryParams['iso_country'] = $this->apiClient->getSerializer()->toQueryValue($iso_country);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey ?? '') !== 0) {
            $headerParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\GeoService\Model\GeoDataListResponseModel',
                '/address-suggestion'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\GeoService\Model\GeoDataListResponseModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\GeoDataListResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
