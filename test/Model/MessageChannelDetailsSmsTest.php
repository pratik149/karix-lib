<?php
/**
 * MessageChannelDetailsSmsTest
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
 * Please update the test case below to test the model.
 */

namespace Karix;

/**
 * MessageChannelDetailsSmsTest Class Doc Comment
 *
 * @category    Class
 * @description Details related to &#x60;sms&#x60; channel when message is sent over &#x60;sms&#x60;
 * @package     Karix
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MessageChannelDetailsSmsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "MessageChannelDetailsSms"
     */
    public function testMessageChannelDetailsSms()
    {
    }

    /**
     * Test attribute "mobile_country_code"
     */
    public function testPropertyMobileCountryCode()
    {
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms();
        $mobile_country_code = "400";
        
        $message_channel_details_sms->setMobileCountryCode($mobile_country_code);
        $this->assertEquals($mobile_country_code, $message_channel_details_sms->getMobileCountryCode());

    }

    /**
     * Test attribute "mobile_network_code"
     */
    public function testPropertyMobileNetworkCode()
    {
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms();
        $mobile_network_code = "400";
        
        $message_channel_details_sms->setMobileNetworkCode($mobile_network_code);
        $this->assertEquals($mobile_network_code, $message_channel_details_sms->getMobileNetworkCode());

    }

    /**
     * Test attribute "rate"
     */
    public function testPropertyRate()
    {
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms();
        $rate = "0.0032";
        
        $message_channel_details_sms->setRate($rate);
        $this->assertEquals($rate, $message_channel_details_sms->getRate());

    }

    /**
     * Test attribute "parts"
     */
    public function testPropertyParts()
    {
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms();
        
        $subobj = 1;
        

        $parts = $subobj;
        
        $message_channel_details_sms->setParts($parts);
        $this->assertEquals($parts, $message_channel_details_sms->getParts());

    }

    /**
    * Helper to create a good example of model
    */
    public function getGoodExample()
    {
        $mobile_country_code = "400";
        
        $mobile_network_code = "400";
        
        $rate = "0.0032";
        
        
        $subobj = 1;
        

        $parts = $subobj;
        
        return array(
            "mobile_country_code" => $mobile_country_code,
            "mobile_network_code" => $mobile_network_code,
            "rate" => $rate,
            "parts" => $parts,
        );
    }

    /**
    * Test MessageChannelDetailsSms validation
    */
    public function testValidation()
    {
        $example = $this->getGoodExample();
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms($example);
        $this->assertTrue($message_channel_details_sms->valid());
    }

    /**
    *
    */
    public function testRequiredPropertyMobileCountryCode()
    {
        $example = $this->getGoodExample();
        $example['mobile_country_code'] = null;
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms($example);
        $this->assertFalse($message_channel_details_sms->valid());

        $invalidProperties = $message_channel_details_sms->listInvalidProperties();
        $this->assertContains("'mobile_country_code' can't be null", $invalidProperties);
    }

    /**
    *
    */
    public function testRequiredPropertyMobileNetworkCode()
    {
        $example = $this->getGoodExample();
        $example['mobile_network_code'] = null;
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms($example);
        $this->assertFalse($message_channel_details_sms->valid());

        $invalidProperties = $message_channel_details_sms->listInvalidProperties();
        $this->assertContains("'mobile_network_code' can't be null", $invalidProperties);
    }

    /**
    *
    */
    public function testRequiredPropertyRate()
    {
        $example = $this->getGoodExample();
        $example['rate'] = null;
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms($example);
        $this->assertFalse($message_channel_details_sms->valid());

        $invalidProperties = $message_channel_details_sms->listInvalidProperties();
        $this->assertContains("'rate' can't be null", $invalidProperties);
    }

    /**
    *
    */
    public function testRequiredPropertyParts()
    {
        $example = $this->getGoodExample();
        $example['parts'] = null;
        $message_channel_details_sms = new \Karix\Model\MessageChannelDetailsSms($example);
        $this->assertFalse($message_channel_details_sms->valid());

        $invalidProperties = $message_channel_details_sms->listInvalidProperties();
        $this->assertContains("'parts' can't be null", $invalidProperties);
    }

}
