<?php
/**
 * ApiuserApi
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
 * ApiuserApi Class Doc Comment
 *
 * @category Class
 * @package  GeoService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiuserApi
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
     * @return ApiuserApi
     */
    public function setApiClient(\GeoService\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createApiUser
     *
     * create an ApiUser
     *
     * @param \GeoService\Model\ApiUserModel $arguments ApiUser (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiSuccessResponseModel
     */
    public function createApiUser($arguments)
    {
        list($response) = $this->createApiUserWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation createApiUserWithHttpInfo
     *
     * create an ApiUser
     *
     * @param \GeoService\Model\ApiUserModel $arguments ApiUser (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiSuccessResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createApiUserWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling createApiUser');
        }
        // parse inputs
        $resourcePath = "/admin/api-user";
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
                '/admin/api-user'
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

    /**
     * Operation deleteApiUser
     *
     * inactivate an ApiUser
     *
     * @param string $id ApiUser id (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiSuccessResponseModel
     */
    public function deleteApiUser($id)
    {
        list($response) = $this->deleteApiUserWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteApiUserWithHttpInfo
     *
     * inactivate an ApiUser
     *
     * @param string $id ApiUser id (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiSuccessResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteApiUserWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteApiUser');
        }
        // parse inputs
        $resourcePath = "/admin/api-user/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\GeoService\Model\ApiSuccessResponseModel',
                '/admin/api-user/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\GeoService\Model\ApiSuccessResponseModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiSuccessResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listApiUser
     *
     * retrieve a list of ApiUsers
     *
     * @param int $offset Offset in ApiUsers (optional, default to 0)
     * @param int $limit Number of requested ApiUsers in list (optional, default to 50)
     * @param string $orderby Order by ApiUser field (optional, default to created_at)
     * @param string $order Order ascending or descending (optional, default to desc)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiUserListResponseModel
     */
    public function listApiUser($offset = '0', $limit = '50', $orderby = 'created_at', $order = 'desc')
    {
        list($response) = $this->listApiUserWithHttpInfo($offset, $limit, $orderby, $order);
        return $response;
    }

    /**
     * Operation listApiUserWithHttpInfo
     *
     * retrieve a list of ApiUsers
     *
     * @param int $offset Offset in ApiUsers (optional, default to 0)
     * @param int $limit Number of requested ApiUsers in list (optional, default to 50)
     * @param string $orderby Order by ApiUser field (optional, default to created_at)
     * @param string $order Order ascending or descending (optional, default to desc)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiUserListResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function listApiUserWithHttpInfo($offset = '0', $limit = '50', $orderby = 'created_at', $order = 'desc')
    {
        // parse inputs
        $resourcePath = "/admin/api-user";
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
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($orderby !== null) {
            $queryParams['orderby'] = $this->apiClient->getSerializer()->toQueryValue($orderby);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
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
                '\GeoService\Model\ApiUserListResponseModel',
                '/admin/api-user'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\GeoService\Model\ApiUserListResponseModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiUserListResponseModel', $e->getResponseHeaders());
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

    /**
     * Operation retrieveApiUser
     *
     * retrieve a single ApiUser
     *
     * @param string $id ApiUser id (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiUserResponseModel
     */
    public function retrieveApiUser($id)
    {
        list($response) = $this->retrieveApiUserWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation retrieveApiUserWithHttpInfo
     *
     * retrieve a single ApiUser
     *
     * @param string $id ApiUser id (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiUserResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveApiUserWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling retrieveApiUser');
        }
        // parse inputs
        $resourcePath = "/admin/api-user/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                '\GeoService\Model\ApiUserResponseModel',
                '/admin/api-user/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\GeoService\Model\ApiUserResponseModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiUserResponseModel', $e->getResponseHeaders());
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateApiUser
     *
     * update an ApiUser
     *
     * @param string $id ApiUser id (required)
     * @param \GeoService\Model\ApiUserModel $arguments ApiUser (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return \GeoService\Model\ApiSuccessResponseModel
     */
    public function updateApiUser($id, $arguments)
    {
        list($response) = $this->updateApiUserWithHttpInfo($id, $arguments);
        return $response;
    }

    /**
     * Operation updateApiUserWithHttpInfo
     *
     * update an ApiUser
     *
     * @param string $id ApiUser id (required)
     * @param \GeoService\Model\ApiUserModel $arguments ApiUser (required)
     * @throws \GeoService\ApiException on non-2xx response
     * @return array of \GeoService\Model\ApiSuccessResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateApiUserWithHttpInfo($id, $arguments)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateApiUser');
        }
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling updateApiUser');
        }
        // parse inputs
        $resourcePath = "/admin/api-user/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\GeoService\Model\ApiSuccessResponseModel',
                '/admin/api-user/{id}'
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\GeoService\Model\ApiErrorResponseModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}