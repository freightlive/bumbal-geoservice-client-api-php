<?php
/**
 * ReversegeocodingApi
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
 * ReversegeocodingApi Class Doc Comment
 *
 * @category Class
 * @package  GeoService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReversegeocodingApi
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
     * @return ReversegeocodingApi
     */
    public function setApiClient(\GeoService\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation reverseGeoCoding
     *
     * Reverse GeoCoding
     *
     * @param float $latitude  (required)
     * @param float $longitude  (required)
     * @param int $distance Circular range in meters from lat/lon location to search (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\GeoDataListResponseModel
     */
    public function reverseGeoCoding($latitude, $longitude, $distance)
    {
        list($response) = $this->reverseGeoCodingWithHttpInfo($latitude, $longitude, $distance);
        return $response;
    }

    /**
     * Operation reverseGeoCodingWithHttpInfo
     *
     * Reverse GeoCoding
     *
     * @param float $latitude  (required)
     * @param float $longitude  (required)
     * @param int $distance Circular range in meters from lat/lon location to search (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\GeoDataListResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseGeoCodingWithHttpInfo($latitude, $longitude, $distance)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling reverseGeoCoding');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling reverseGeoCoding');
        }
        // verify the required parameter 'distance' is set
        if ($distance === null) {
            throw new \InvalidArgumentException('Missing the required parameter $distance when calling reverseGeoCoding');
        }
        // parse inputs
        $resourcePath = "/geocode-reverse";
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
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }
        // query params
        if ($distance !== null) {
            $queryParams['distance'] = $this->apiClient->getSerializer()->toQueryValue($distance);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
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
                '/geocode-reverse'
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