<?php
/**
 * MessageChannelDetailsSms
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Karix\Model;

use \ArrayAccess;
use \Karix\ObjectSerializer;

/**
 * MessageChannelDetailsSms Class Doc Comment
 *
 * @category Class
 * @description Details related to &#x60;sms&#x60; channel when message is sent over &#x60;sms&#x60;
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageChannelDetailsSms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Message_channel_details_sms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile_country_code' => 'string',
        'mobile_network_code' => 'string',
        'rate' => 'BigDecimal',
        'parts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile_country_code' => null,
        'mobile_network_code' => null,
        'rate' => 'number',
        'parts' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     *
     * @codeCoverageIgnore
     */
    protected static $attributeMap = [
        'mobile_country_code' => 'mobile_country_code',
        'mobile_network_code' => 'mobile_network_code',
        'rate' => 'rate',
        'parts' => 'parts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_country_code' => 'setMobileCountryCode',
        'mobile_network_code' => 'setMobileNetworkCode',
        'rate' => 'setRate',
        'parts' => 'setParts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_country_code' => 'getMobileCountryCode',
        'mobile_network_code' => 'getMobileNetworkCode',
        'rate' => 'getRate',
        'parts' => 'getParts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['mobile_country_code'] = isset($data['mobile_country_code']) ? $data['mobile_country_code'] : null;
        $this->container['mobile_network_code'] = isset($data['mobile_network_code']) ? $data['mobile_network_code'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['parts'] = isset($data['parts']) ? $data['parts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mobile_country_code'] === null) {
            $invalidProperties[] = "'mobile_country_code' can't be null";
        }
        if ($this->container['mobile_network_code'] === null) {
            $invalidProperties[] = "'mobile_network_code' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['parts'] === null) {
            $invalidProperties[] = "'parts' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets mobile_country_code
     *
     * @return string
     */
    public function getMobileCountryCode()
    {
        return $this->container['mobile_country_code'];
    }

    /**
     * Sets mobile_country_code
     *
     * @param string $mobile_country_code Mobile Country Code of the destination number. Refer to [Wikipedia: Mobile country code](https://en.wikipedia.org/wiki/Mobile_country_code)
     *
     * @return $this
     */
    public function setMobileCountryCode($mobile_country_code)
    {
        $this->container['mobile_country_code'] = $mobile_country_code;

        return $this;
    }

    /**
     * Gets mobile_network_code
     *
     * @return string
     */
    public function getMobileNetworkCode()
    {
        return $this->container['mobile_network_code'];
    }

    /**
     * Sets mobile_network_code
     *
     * @param string $mobile_network_code Mobile Network Code of the destination number. Refer to [Wikipedia: Mobile country code](https://en.wikipedia.org/wiki/Mobile_country_code)
     *
     * @return $this
     */
    public function setMobileNetworkCode($mobile_network_code)
    {
        $this->container['mobile_network_code'] = $mobile_network_code;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return BigDecimal
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param BigDecimal $rate Cost per part of this message. Refer to [`text`](#/definitions/Message/properties/content/text)
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets parts
     *
     * @return int
     */
    public function getParts()
    {
        return $this->container['parts'];
    }

    /**
     * Sets parts
     *
     * @param int $parts Number of parts to the message if the message was too long Refer to [`text`](#/definitions/Message/properties/text)
     *
     * @return $this
     */
    public function setParts($parts)
    {
        $this->container['parts'] = $parts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     *
     * @codeCoverageIgnore
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     *
     * @codeCoverageIgnore
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
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
     *
     * @param integer $offset Offset
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


