<?php
/**
 * MessageChannelDetailsWhatsapp
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
 * MessageChannelDetailsWhatsapp Class Doc Comment
 *
 * @category Class
 * @description Details related to &#x60;whatsapp&#x60; channel when message is sent over &#x60;whatsapp&#x60;
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageChannelDetailsWhatsapp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Message_channel_details_whatsapp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'platform_fee' => 'BigDecimal',
        'whatsapp_fee' => 'BigDecimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'platform_fee' => 'number',
        'whatsapp_fee' => 'number'
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
        'type' => 'type',
        'platform_fee' => 'platform_fee',
        'whatsapp_fee' => 'whatsapp_fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'platform_fee' => 'setPlatformFee',
        'whatsapp_fee' => 'setWhatsappFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'platform_fee' => 'getPlatformFee',
        'whatsapp_fee' => 'getWhatsappFee'
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

    const TYPE_CONVERSATION = 'conversation';
    const TYPE_NOTIFICATION = 'notification';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CONVERSATION,
            self::TYPE_NOTIFICATION,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['platform_fee'] = isset($data['platform_fee']) ? $data['platform_fee'] : null;
        $this->container['whatsapp_fee'] = isset($data['whatsapp_fee']) ? $data['whatsapp_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['platform_fee'] === null) {
            $invalidProperties[] = "'platform_fee' can't be null";
        }
        if ($this->container['whatsapp_fee'] === null) {
            $invalidProperties[] = "'whatsapp_fee' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Message type used to send over whatsapp. Whatsapp supports types: - `conversation`: Message sent within the free window of whatsapp - `notification`: Message sent using a whatsapp template Whatsapp charges differ according to message type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets platform_fee
     *
     * @return BigDecimal
     */
    public function getPlatformFee()
    {
        return $this->container['platform_fee'];
    }

    /**
     * Sets platform_fee
     *
     * @param BigDecimal $platform_fee Fees charged by Karix platform for this message
     *
     * @return $this
     */
    public function setPlatformFee($platform_fee)
    {
        $this->container['platform_fee'] = $platform_fee;

        return $this;
    }

    /**
     * Gets whatsapp_fee
     *
     * @return BigDecimal
     */
    public function getWhatsappFee()
    {
        return $this->container['whatsapp_fee'];
    }

    /**
     * Sets whatsapp_fee
     *
     * @param BigDecimal $whatsapp_fee Fees charged by WhatsApp for this message
     *
     * @return $this
     */
    public function setWhatsappFee($whatsapp_fee)
    {
        $this->container['whatsapp_fee'] = $whatsapp_fee;

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


