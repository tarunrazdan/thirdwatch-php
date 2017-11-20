<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category    Class
 * @description The payment_method field type represents information about the payment methods provided by the user. The value must be a nested object with the appropriate item subfields for the given payment method. Generally usedwith the create_order or transaction events.
 * @package     ai.thirdwatch
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethod implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentType' => 'string',
        'amount' => 'string',
        'currencyCode' => 'string',
        'paymentGateway' => 'string',
        'accountName' => 'string',
        'cardBin' => 'string',
        'avsResponseCode' => 'string',
        'cvvResponseCode' => 'string',
        'cardLast4' => 'string',
        'cardExpiryMonth' => 'string',
        'cardExpiryYear' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentType' => null,
        'amount' => null,
        'currencyCode' => null,
        'paymentGateway' => null,
        'accountName' => null,
        'cardBin' => null,
        'avsResponseCode' => null,
        'cvvResponseCode' => null,
        'cardLast4' => null,
        'cardExpiryMonth' => null,
        'cardExpiryYear' => null
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
        'paymentType' => '_paymentType',
        'amount' => '_amount',
        'currencyCode' => '_currencyCode',
        'paymentGateway' => '_paymentGateway',
        'accountName' => '_accountName',
        'cardBin' => '_cardBin',
        'avsResponseCode' => '_avsResponseCode',
        'cvvResponseCode' => '_cvvResponseCode',
        'cardLast4' => '_cardLast4',
        'cardExpiryMonth' => '_cardExpiryMonth',
        'cardExpiryYear' => '_cardExpiryYear'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentType' => 'setPaymentType',
        'amount' => 'setAmount',
        'currencyCode' => 'setCurrencyCode',
        'paymentGateway' => 'setPaymentGateway',
        'accountName' => 'setAccountName',
        'cardBin' => 'setCardBin',
        'avsResponseCode' => 'setAvsResponseCode',
        'cvvResponseCode' => 'setCvvResponseCode',
        'cardLast4' => 'setCardLast4',
        'cardExpiryMonth' => 'setCardExpiryMonth',
        'cardExpiryYear' => 'setCardExpiryYear'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentType' => 'getPaymentType',
        'amount' => 'getAmount',
        'currencyCode' => 'getCurrencyCode',
        'paymentGateway' => 'getPaymentGateway',
        'accountName' => 'getAccountName',
        'cardBin' => 'getCardBin',
        'avsResponseCode' => 'getAvsResponseCode',
        'cvvResponseCode' => 'getCvvResponseCode',
        'cardLast4' => 'getCardLast4',
        'cardExpiryMonth' => 'getCardExpiryMonth',
        'cardExpiryYear' => 'getCardExpiryYear'
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
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['paymentGateway'] = isset($data['paymentGateway']) ? $data['paymentGateway'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['cardBin'] = isset($data['cardBin']) ? $data['cardBin'] : null;
        $this->container['avsResponseCode'] = isset($data['avsResponseCode']) ? $data['avsResponseCode'] : null;
        $this->container['cvvResponseCode'] = isset($data['cvvResponseCode']) ? $data['cvvResponseCode'] : null;
        $this->container['cardLast4'] = isset($data['cardLast4']) ? $data['cardLast4'] : null;
        $this->container['cardExpiryMonth'] = isset($data['cardExpiryMonth']) ? $data['cardExpiryMonth'] : null;
        $this->container['cardExpiryYear'] = isset($data['cardExpiryYear']) ? $data['cardExpiryYear'] : null;
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
     * Gets paymentType
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param string $paymentType Values like - _cash, _check, _creditCard, _debitCard, _netBanking, _wallet, _cryptoCurrency, _electronicFundTransfer, _financing, _giftCard, _interac, _invoice, _moneyOrder, _masterPass, _points, _storeCredit, _thirdPartyProcessor, _voucher
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount The item unit price in numbers, in the base unit of the currency_code.e.g. \"2500\". In case of multiple payment methods in order it's useful.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     * @param string $currencyCode The [ISO-4217](http://en.wikipedia.org/wiki/ISO_4217) currency code for the amount. e.g., USD, INR alternative currencies, like bitcoin or points systems. In case of multiple payment methods in order it's useful.
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets paymentGateway
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->container['paymentGateway'];
    }

    /**
     * Sets paymentGateway
     * @param string $paymentGateway fill value like bank name, gateway name, wallet name etc, e.g. payu, paypal, icici, paytm
     * @return $this
     */
    public function setPaymentGateway($paymentGateway)
    {
        $this->container['paymentGateway'] = $paymentGateway;

        return $this;
    }

    /**
     * Gets accountName
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     * @param string $accountName Account name oif the user for that payment method
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets cardBin
     * @return string
     */
    public function getCardBin()
    {
        return $this->container['cardBin'];
    }

    /**
     * Sets cardBin
     * @param string $cardBin The first six digits of the credit card number. These numbers contain information about the card issuer, the geography and other card details.
     * @return $this
     */
    public function setCardBin($cardBin)
    {
        $this->container['cardBin'] = $cardBin;

        return $this;
    }

    /**
     * Gets avsResponseCode
     * @return string
     */
    public function getAvsResponseCode()
    {
        return $this->container['avsResponseCode'];
    }

    /**
     * Sets avsResponseCode
     * @param string $avsResponseCode Response code from the AVS address verification system. Used in payments involving credit cards.
     * @return $this
     */
    public function setAvsResponseCode($avsResponseCode)
    {
        $this->container['avsResponseCode'] = $avsResponseCode;

        return $this;
    }

    /**
     * Gets cvvResponseCode
     * @return string
     */
    public function getCvvResponseCode()
    {
        return $this->container['cvvResponseCode'];
    }

    /**
     * Sets cvvResponseCode
     * @param string $cvvResponseCode Response code from the credit card company indicating if the CVV number entered matches the number on record. Used in payments involving credit cards.
     * @return $this
     */
    public function setCvvResponseCode($cvvResponseCode)
    {
        $this->container['cvvResponseCode'] = $cvvResponseCode;

        return $this;
    }

    /**
     * Gets cardLast4
     * @return string
     */
    public function getCardLast4()
    {
        return $this->container['cardLast4'];
    }

    /**
     * Sets cardLast4
     * @param string $cardLast4 The last four digits of the credit card number.
     * @return $this
     */
    public function setCardLast4($cardLast4)
    {
        $this->container['cardLast4'] = $cardLast4;

        return $this;
    }

    /**
     * Gets cardExpiryMonth
     * @return string
     */
    public function getCardExpiryMonth()
    {
        return $this->container['cardExpiryMonth'];
    }

    /**
     * Sets cardExpiryMonth
     * @param string $cardExpiryMonth Expiry month of the card.
     * @return $this
     */
    public function setCardExpiryMonth($cardExpiryMonth)
    {
        $this->container['cardExpiryMonth'] = $cardExpiryMonth;

        return $this;
    }

    /**
     * Gets cardExpiryYear
     * @return string
     */
    public function getCardExpiryYear()
    {
        return $this->container['cardExpiryYear'];
    }

    /**
     * Sets cardExpiryYear
     * @param string $cardExpiryYear Expiry year of the card.
     * @return $this
     */
    public function setCardExpiryYear($cardExpiryYear)
    {
        $this->container['cardExpiryYear'] = $cardExpiryYear;

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

