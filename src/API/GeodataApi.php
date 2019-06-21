<?php
/**
 * GeodataApi
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
 * GeodataApi Class Doc Comment
 *
 * @category Class
 * @package  GeoService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeodataApi
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
     * @return GeodataApi
     */
    public function setApiClient(\GeoService\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createGeoData
     *
     * create a GeoData entry
     *
     * @param \GeoService\Model\GeoDataModel $arguments GeoData (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiSuccessResponseModel
     */
    public function createGeoData($arguments)
    {
        list($response) = $this->createGeoDataWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation createGeoDataWithHttpInfo
     *
     * create a GeoData entry
     *
     * @param \GeoService\Model\GeoDataModel $arguments GeoData (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiSuccessResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGeoDataWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling createGeoData');
        }
        // parse inputs
        $resourcePath = "/admin/geodata";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\GeoService\Model\ApiSuccessResponseModel',
                '/admin/geodata'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\GeoService\Model\ApiSuccessResponseModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiSuccessResponseModel', $e->getResponseHeaders());
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
