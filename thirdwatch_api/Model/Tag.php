<?php
/**
 * Tag
 *
 * PHP version 5
 *
 * @category Class
 * @package  ai.thirdwatch
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Thirdwatch API
 *
 * The first version of the Thirdwatch API is an exciting step forward towards making it easier for developers to pass data to Thirdwatch.  Once you've [registered your website/app](https://thirdwatch.ai) it's easy to start sending data to Thirdwatch.  All endpoints are only accessible via https and are located at `api.thirdwatch.ai`. For instance: you can send event at the moment by ```HTTP POST``` Request to the following URL with your API key in ```Header``` and ```JSON``` data in request body. ```   https://api.thirdwatch.ai/event/v1 ``` Every API request must contain ```API Key``` in header value ```X-THIRDWATCH-API-KEY```  Every event must contain your ```_userId``` (if this is not available, you can alternatively provide a ```_sessionId``` value also in ```_userId```).  JavaScript Fingerprinting module for capturing unique devices and tracking user interaction.  This script will identify unique devices with respect to the browser. For e.g., if chrome is opened in normal mode a unique device id is generated and this will be same if chrome is opened in incognito mode or reinstalled.  Paste the below script onto your webpage, just after the opening `<body>` tag. This script should be added to the page which is accessed externally by the user of your website. For e.g., If you want to track three different webpages then paste the below script onto each webpage, just after the opening `<body>` tag. This script should not be added onto internal tools or admin panels. ```   &lt;script id=\"thirdwatch\"     data-session-cookie-name=\"&lt;cookie_name&gt;\"     data-session-id-value=\"&lt;session_id&gt;\"     data-user-id=\"&lt;user_id&gt;\"     data-app-secret=\"&lt;app_secret&gt;\"     data-is-track-pageview=\"true\"&gt; (function() {         var loadDeviceJs = function() {         var element = document.createElement(\"script\");         element.async = 1;         element.src = \"https://cdn.thirdwatch.ai/tw.min.js\";         document.body.appendChild(element);         };         if (window.addEventListener) {              window.addEventListener(\"load\", loadDeviceJs, false);         } else if (window.attachEvent) {         window.attachEvent(\"onload\", loadDeviceJs);         }     })();   &lt;/script&gt; ``` * `data-session-cookie-name` -- The cookie name where you are saving the unique session id. We will pick the session id by reading its value from the cookie name. (Optional) * `data-session-id-value` -- In case you are not passing `data-session-cookie-name` than you can put session id directly in this parameter. In absence of both `data-session-cookie-name` and `data-session-id-value`, our system will generate a session Id. (Optional) * `data-user-id` -- Unique user id at your end. This can be email id or primary key in the database. In case of guest user, you can insert session Id here. * `data-app-secret` -- Unique App secret generated for you by Thirdwatch. * `data-is-track-pageview` -- If this is set to true, then the url on which this script is running will be sent to Thirdwatch, else the url will not be captured.   The Score API is use to get an up to date cutomer trust score after you have sent transaction event and order successful. This API will provide the riskiness score of the order with reasons. Some examples of when you may want to check the score are before:    - Before Shippement of a package   - Finalizing a money transfer   - Giving access to a prearranged vacation rental   - Sending voucher on mail  ```   https://api.thirdwatch.ai/neo/v1/score?api_key=<your api key>&order_id=<Order id> ```  According to Score you can decide to take action Approve or Reject. Orders with score more than 70 will consider as Riskey orders. We'll provide some reasons also in rules section.   ``` {   \"order_id\": \"OCT45671\",   \"user_id\": \"ajay_245\",   \"order_timestamp\": \"2017-05-09T09:40:45.717Z\",   \"score\": 82,   \"flag\": \"red\",     -\"reasons\": [     {         \"name\": \"_numOfFailedTransactions\",         \"display_name\": \"Number of failed transactions\",         \"flag\": \"green\",         \"value\": \"0\",         \"is_display\": true       },       {         \"name\": \"_accountAge\",         \"display_name\": \"Account age\",         \"flag\": \"red\",         \"value\": \"0\",         \"is_display\": true       },       {         \"name\": \"_numOfOrderSameIp\",         \"display_name\": \"Number of orders from same IP\",         \"flag\": \"red\",         \"value\": \"11\",         \"is_display\": true       }     ] } ```
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ai.thirdwatch\Model;

use \ArrayAccess;

/**
 * Tag Class Doc Comment
 *
 * @category    Class
 * @package     ai.thirdwatch
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tag implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userId' => 'string',
        'isBad' => 'bool',
        'abuseType' => 'string',
        'description' => 'string',
        'source' => 'string',
        'analyst' => 'string',
        'customInfo' => '\ai.thirdwatch\Model\CustomInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userId' => null,
        'isBad' => null,
        'abuseType' => null,
        'description' => null,
        'source' => null,
        'analyst' => null,
        'customInfo' => null
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
        'userId' => '_userId',
        'isBad' => '_isBad',
        'abuseType' => '_abuseType',
        'description' => '_description',
        'source' => '_source',
        'analyst' => '_analyst',
        'customInfo' => '_customInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userId' => 'setUserId',
        'isBad' => 'setIsBad',
        'abuseType' => 'setAbuseType',
        'description' => 'setDescription',
        'source' => 'setSource',
        'analyst' => 'setAnalyst',
        'customInfo' => 'setCustomInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userId' => 'getUserId',
        'isBad' => 'getIsBad',
        'abuseType' => 'getAbuseType',
        'description' => 'getDescription',
        'source' => 'getSource',
        'analyst' => 'getAnalyst',
        'customInfo' => 'getCustomInfo'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['isBad'] = isset($data['isBad']) ? $data['isBad'] : null;
        $this->container['abuseType'] = isset($data['abuseType']) ? $data['abuseType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['analyst'] = isset($data['analyst']) ? $data['analyst'] : null;
        $this->container['customInfo'] = isset($data['customInfo']) ? $data['customInfo'] : null;
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
     * Gets userId
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId The user's account ID according to your systems. Note that user IDs are case sensitive.
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets isBad
     * @return bool
     */
    public function getIsBad()
    {
        return $this->container['isBad'];
    }

    /**
     * Sets isBad
     * @param bool $isBad Indicates whether a user is engaging in behavior deemed harmful to your business. Set to true if the user is engaging in abusive activity. Set to false if the user is engaging in valid activity.
     * @return $this
     */
    public function setIsBad($isBad)
    {
        $this->container['isBad'] = $isBad;

        return $this;
    }

    /**
     * Gets abuseType
     * @return string
     */
    public function getAbuseType()
    {
        return $this->container['abuseType'];
    }

    /**
     * Sets abuseType
     * @param string $abuseType The type of abuse for which you want to send a tag. It's important to send a tag specific to the type of abuse the user is committing so that thirdwatch can learn about specific patterns of behavior. You'll end up with more accurate results this way. e.g. _paymentAbuse, _contentAbuse, _promotionAbuse, _accountAbuse
     * @return $this
     */
    public function setAbuseType($abuseType)
    {
        $this->container['abuseType'] = $abuseType;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The text content of the tag.Useful as annotation on why the label was added.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source String describing the original source of the tag information (e.g. payment gateway, manual review, etc.).
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets analyst
     * @return string
     */
    public function getAnalyst()
    {
        return $this->container['analyst'];
    }

    /**
     * Sets analyst
     * @param string $analyst Unique identifier (e.g. email address) of the analyst who applied the label. Useful for tracking purposes after the fact.
     * @return $this
     */
    public function setAnalyst($analyst)
    {
        $this->container['analyst'] = $analyst;

        return $this;
    }

    /**
     * Gets customInfo
     * @return \ai.thirdwatch\Model\CustomInfo
     */
    public function getCustomInfo()
    {
        return $this->container['customInfo'];
    }

    /**
     * Sets customInfo
     * @param \ai.thirdwatch\Model\CustomInfo $customInfo
     * @return $this
     */
    public function setCustomInfo($customInfo)
    {
        $this->container['customInfo'] = $customInfo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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
            return json_encode(\ai.thirdwatch\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ai.thirdwatch\ObjectSerializer::sanitizeForSerialization($this));
    }
}

