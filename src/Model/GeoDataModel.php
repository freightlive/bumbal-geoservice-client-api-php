<?php
/**
 * GeoDataModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  GeoService
 * @author   Swaagger Codegen team
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

namespace GeoService\Model;

use \ArrayAccess;

/**
 * GeoDataModel Class Doc Comment
 *
 * @category    Class
 * @package     GeoService
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeoDataModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeoDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\GeoService\Model\AddressModel',
        'location' => '\GeoService\Model\LocationModel',
        'provider_name' => 'string',
        'provider_id' => 'string',
        'accuracy' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'location' => null,
        'provider_name' => null,
        'provider_id' => null,
        'accuracy' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'location' => 'location',
        'provider_name' => 'provider_name',
        'provider_id' => 'provider_id',
        'accuracy' => 'accuracy'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'location' => 'setLocation',
        'provider_name' => 'setProviderName',
        'provider_id' => 'setProviderId',
        'accuracy' => 'setAccuracy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'location' => 'getLocation',
        'provider_name' => 'getProviderName',
        'provider_id' => 'getProviderId',
        'accuracy' => 'getAccuracy'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['provider_name'] = isset($data['provider_name']) ? $data['provider_name'] : 'manual';
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['accuracy'] = isset($data['accuracy']) ? $data['accuracy'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets address
     * @return \GeoService\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \GeoService\Model\AddressModel $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets location
     * @return \GeoService\Model\LocationModel
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \GeoService\Model\LocationModel $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets provider_name
     * @return string
     */
    public function getProviderName()
    {
        return $this->container['provider_name'];
    }

    /**
     * Sets provider_name
     * @param string $provider_name Name of provider of this GeoData
     * @return $this
     */
    public function setProviderName($provider_name)
    {
        $this->container['provider_name'] = $provider_name;

        return $this;
    }

    /**
     * Gets provider_id
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     * @param string $provider_id ID of this GeoData as registered by provider (when left empty when creating manual GeoData, a value will be generated)
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets accuracy
     * @return float
     */
    public function getAccuracy()
    {
        return $this->container['accuracy'];
    }

    /**
     * Sets accuracy
     * @param float $accuracy A measure for how accurately we deem the address data to match the location data. [0..1]
     * @return $this
     */
    public function setAccuracy($accuracy)
    {
        $this->container['accuracy'] = $accuracy;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\GeoService\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\GeoService\ObjectSerializer::sanitizeForSerialization($this));
    }
}


