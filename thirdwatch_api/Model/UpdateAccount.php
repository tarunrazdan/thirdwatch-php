<?php
/**
 * UpdateAccount
 *
 * PHP version 5
 *
 * @category Class
 * @package  ai\thirdwatch
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

namespace ai\thirdwatch\Model;

use \ArrayAccess;

/**
 * UpdateAccount Class Doc Comment
 *
 * @category    Class
 * @package     ai\thirdwatch
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userId' => 'string',
        'sessionId' => 'string',
        'deviceIp' => 'string',
        'originTimestamp' => 'string',
        'userEmail' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'phone' => 'string',
        'age' => 'string',
        'gender' => 'string',
        'referralCode' => 'string',
        'referrerUserId' => 'string',
        'billingAddress' => '\ai\thirdwatch\Model\BillingAddress',
        'shippingAddress' => '\ai\thirdwatch\Model\ShippingAddress',
        'paymentMethods' => '\ai\thirdwatch\Model\PaymentMethod[]',
        'promotions' => '\ai\thirdwatch\Model\Promotion[]',
        'socialSignOnType' => 'string',
        'emailConfirmedStatus' => 'string',
        'phoneConfirmedStatus' => 'string',
        'isNewsletterSubscribed' => 'bool',
        'accountStatus' => 'string',
        'facebookId' => 'string',
        'googleId' => 'string',
        'twitterId' => 'string',
        'customInfo' => '\ai\thirdwatch\Model\CustomInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userId' => null,
        'sessionId' => null,
        'deviceIp' => null,
        'originTimestamp' => null,
        'userEmail' => null,
        'firstName' => null,
        'lastName' => null,
        'phone' => null,
        'age' => null,
        'gender' => null,
        'referralCode' => null,
        'referrerUserId' => null,
        'billingAddress' => null,
        'shippingAddress' => null,
        'paymentMethods' => null,
        'promotions' => null,
        'socialSignOnType' => null,
        'emailConfirmedStatus' => null,
        'phoneConfirmedStatus' => null,
        'isNewsletterSubscribed' => null,
        'accountStatus' => null,
        'facebookId' => null,
        'googleId' => null,
        'twitterId' => null,
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
        'sessionId' => '_sessionId',
        'deviceIp' => '_deviceIp',
        'originTimestamp' => '_originTimestamp',
        'userEmail' => '_userEmail',
        'firstName' => '_firstName',
        'lastName' => '_lastName',
        'phone' => '_phone',
        'age' => '_age',
        'gender' => '_gender',
        'referralCode' => '_referralCode',
        'referrerUserId' => '_referrerUserId',
        'billingAddress' => '_billingAddress',
        'shippingAddress' => '_shippingAddress',
        'paymentMethods' => '_paymentMethods',
        'promotions' => '_promotions',
        'socialSignOnType' => '_socialSignOnType',
        'emailConfirmedStatus' => '_emailConfirmedStatus',
        'phoneConfirmedStatus' => '_phoneConfirmedStatus',
        'isNewsletterSubscribed' => '_isNewsletterSubscribed',
        'accountStatus' => '_accountStatus',
        'facebookId' => '_facebookId',
        'googleId' => '_googleId',
        'twitterId' => '_twitterId',
        'customInfo' => '_customInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userId' => 'setUserId',
        'sessionId' => 'setSessionId',
        'deviceIp' => 'setDeviceIp',
        'originTimestamp' => 'setOriginTimestamp',
        'userEmail' => 'setUserEmail',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'phone' => 'setPhone',
        'age' => 'setAge',
        'gender' => 'setGender',
        'referralCode' => 'setReferralCode',
        'referrerUserId' => 'setReferrerUserId',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress',
        'paymentMethods' => 'setPaymentMethods',
        'promotions' => 'setPromotions',
        'socialSignOnType' => 'setSocialSignOnType',
        'emailConfirmedStatus' => 'setEmailConfirmedStatus',
        'phoneConfirmedStatus' => 'setPhoneConfirmedStatus',
        'isNewsletterSubscribed' => 'setIsNewsletterSubscribed',
        'accountStatus' => 'setAccountStatus',
        'facebookId' => 'setFacebookId',
        'googleId' => 'setGoogleId',
        'twitterId' => 'setTwitterId',
        'customInfo' => 'setCustomInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userId' => 'getUserId',
        'sessionId' => 'getSessionId',
        'deviceIp' => 'getDeviceIp',
        'originTimestamp' => 'getOriginTimestamp',
        'userEmail' => 'getUserEmail',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'phone' => 'getPhone',
        'age' => 'getAge',
        'gender' => 'getGender',
        'referralCode' => 'getReferralCode',
        'referrerUserId' => 'getReferrerUserId',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress',
        'paymentMethods' => 'getPaymentMethods',
        'promotions' => 'getPromotions',
        'socialSignOnType' => 'getSocialSignOnType',
        'emailConfirmedStatus' => 'getEmailConfirmedStatus',
        'phoneConfirmedStatus' => 'getPhoneConfirmedStatus',
        'isNewsletterSubscribed' => 'getIsNewsletterSubscribed',
        'accountStatus' => 'getAccountStatus',
        'facebookId' => 'getFacebookId',
        'googleId' => 'getGoogleId',
        'twitterId' => 'getTwitterId',
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
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['deviceIp'] = isset($data['deviceIp']) ? $data['deviceIp'] : null;
        $this->container['originTimestamp'] = isset($data['originTimestamp']) ? $data['originTimestamp'] : null;
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['referralCode'] = isset($data['referralCode']) ? $data['referralCode'] : null;
        $this->container['referrerUserId'] = isset($data['referrerUserId']) ? $data['referrerUserId'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['paymentMethods'] = isset($data['paymentMethods']) ? $data['paymentMethods'] : null;
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null;
        $this->container['socialSignOnType'] = isset($data['socialSignOnType']) ? $data['socialSignOnType'] : null;
        $this->container['emailConfirmedStatus'] = isset($data['emailConfirmedStatus']) ? $data['emailConfirmedStatus'] : null;
        $this->container['phoneConfirmedStatus'] = isset($data['phoneConfirmedStatus']) ? $data['phoneConfirmedStatus'] : null;
        $this->container['isNewsletterSubscribed'] = isset($data['isNewsletterSubscribed']) ? $data['isNewsletterSubscribed'] : null;
        $this->container['accountStatus'] = isset($data['accountStatus']) ? $data['accountStatus'] : null;
        $this->container['facebookId'] = isset($data['facebookId']) ? $data['facebookId'] : null;
        $this->container['googleId'] = isset($data['googleId']) ? $data['googleId'] : null;
        $this->container['twitterId'] = isset($data['twitterId']) ? $data['twitterId'] : null;
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
     * Gets sessionId
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     * @param string $sessionId The user's current session ID, used to tie a user's action before and after login or account creation. Required if no user_id values is provided.
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets deviceIp
     * @return string
     */
    public function getDeviceIp()
    {
        return $this->container['deviceIp'];
    }

    /**
     * Sets deviceIp
     * @param string $deviceIp IP address of the request made by the user. Recommended for historical backfills and customers with mobile apps.
     * @return $this
     */
    public function setDeviceIp($deviceIp)
    {
        $this->container['deviceIp'] = $deviceIp;

        return $this;
    }

    /**
     * Gets originTimestamp
     * @return string
     */
    public function getOriginTimestamp()
    {
        return $this->container['originTimestamp'];
    }

    /**
     * Sets originTimestamp
     * @param string $originTimestamp Represents the time the event occured in your system. Send as a UNIX timestamp in milliseconds in string.
     * @return $this
     */
    public function setOriginTimestamp($originTimestamp)
    {
        $this->container['originTimestamp'] = $originTimestamp;

        return $this;
    }

    /**
     * Gets userEmail
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['userEmail'];
    }

    /**
     * Sets userEmail
     * @param string $userEmail Email of the user creating this order. Note - If the user's email is also their account ID in your system, set both the userId and userEmail fields to their email address.
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->container['userEmail'] = $userEmail;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName Provide the first name associated with the user here.
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Provide the last name associated with the user here.
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone The primary phone number of the user associated with this account. Provide the phone number as a string.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets age
     * @return string
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     * @param string $age Age of the user e.g. \"25\"
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender Gender of the user e.g. \"_male\", \"_female\" or \"_trans\"
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets referralCode
     * @return string
     */
    public function getReferralCode()
    {
        return $this->container['referralCode'];
    }

    /**
     * Sets referralCode
     * @param string $referralCode Code or promotion used by the user while creating account.
     * @return $this
     */
    public function setReferralCode($referralCode)
    {
        $this->container['referralCode'] = $referralCode;

        return $this;
    }

    /**
     * Gets referrerUserId
     * @return string
     */
    public function getReferrerUserId()
    {
        return $this->container['referrerUserId'];
    }

    /**
     * Sets referrerUserId
     * @param string $referrerUserId The ID of the user that referred the current user to your business. This field is required for detecting referral fraud.
     * @return $this
     */
    public function setReferrerUserId($referrerUserId)
    {
        $this->container['referrerUserId'] = $referrerUserId;

        return $this;
    }

    /**
     * Gets billingAddress
     * @return \ai\thirdwatch\Model\BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     * @param \ai\thirdwatch\Model\BillingAddress $billingAddress
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \ai\thirdwatch\Model\ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \ai\thirdwatch\Model\ShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets paymentMethods
     * @return \ai\thirdwatch\Model\PaymentMethod[]
     */
    public function getPaymentMethods()
    {
        return $this->container['paymentMethods'];
    }

    /**
     * Sets paymentMethods
     * @param \ai\thirdwatch\Model\PaymentMethod[] $paymentMethods The payment information associated with this account. Represented as an array of nested payment_method objects containing payment type, payment gateway, credit card bin, etc.
     * @return $this
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->container['paymentMethods'] = $paymentMethods;

        return $this;
    }

    /**
     * Gets promotions
     * @return \ai\thirdwatch\Model\Promotion[]
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     * @param \ai\thirdwatch\Model\Promotion[] $promotions The list of promotions that apply to this account. You can add one or more promotions when creating or updating an order. Represented as a JSON array of promotion objects. You can also separately add promotions to the account via the addPromotion event.
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets socialSignOnType
     * @return string
     */
    public function getSocialSignOnType()
    {
        return $this->container['socialSignOnType'];
    }

    /**
     * Sets socialSignOnType
     * @param string $socialSignOnType If the user logged in with a social identify provider, give the name here. e.g. _google, _facebook, _twitter, _linkedin, _other
     * @return $this
     */
    public function setSocialSignOnType($socialSignOnType)
    {
        $this->container['socialSignOnType'] = $socialSignOnType;

        return $this;
    }

    /**
     * Gets emailConfirmedStatus
     * @return string
     */
    public function getEmailConfirmedStatus()
    {
        return $this->container['emailConfirmedStatus'];
    }

    /**
     * Sets emailConfirmedStatus
     * @param string $emailConfirmedStatus Status of email verification. e.g. _success, _failure, _pending
     * @return $this
     */
    public function setEmailConfirmedStatus($emailConfirmedStatus)
    {
        $this->container['emailConfirmedStatus'] = $emailConfirmedStatus;

        return $this;
    }

    /**
     * Gets phoneConfirmedStatus
     * @return string
     */
    public function getPhoneConfirmedStatus()
    {
        return $this->container['phoneConfirmedStatus'];
    }

    /**
     * Sets phoneConfirmedStatus
     * @param string $phoneConfirmedStatus Status of phone verification. e.g. _success, _failure, _pending
     * @return $this
     */
    public function setPhoneConfirmedStatus($phoneConfirmedStatus)
    {
        $this->container['phoneConfirmedStatus'] = $phoneConfirmedStatus;

        return $this;
    }

    /**
     * Gets isNewsletterSubscribed
     * @return bool
     */
    public function getIsNewsletterSubscribed()
    {
        return $this->container['isNewsletterSubscribed'];
    }

    /**
     * Sets isNewsletterSubscribed
     * @param bool $isNewsletterSubscribed Is user subscribed for newsletter. e.g. true, false
     * @return $this
     */
    public function setIsNewsletterSubscribed($isNewsletterSubscribed)
    {
        $this->container['isNewsletterSubscribed'] = $isNewsletterSubscribed;

        return $this;
    }

    /**
     * Gets accountStatus
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['accountStatus'];
    }

    /**
     * Sets accountStatus
     * @param string $accountStatus Current status of account, e.g. _active, _inactive
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->container['accountStatus'] = $accountStatus;

        return $this;
    }

    /**
     * Gets facebookId
     * @return string
     */
    public function getFacebookId()
    {
        return $this->container['facebookId'];
    }

    /**
     * Sets facebookId
     * @param string $facebookId Facebook user id or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setFacebookId($facebookId)
    {
        $this->container['facebookId'] = $facebookId;

        return $this;
    }

    /**
     * Gets googleId
     * @return string
     */
    public function getGoogleId()
    {
        return $this->container['googleId'];
    }

    /**
     * Sets googleId
     * @param string $googleId Google user id or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setGoogleId($googleId)
    {
        $this->container['googleId'] = $googleId;

        return $this;
    }

    /**
     * Gets twitterId
     * @return string
     */
    public function getTwitterId()
    {
        return $this->container['twitterId'];
    }

    /**
     * Sets twitterId
     * @param string $twitterId Twitter handle or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setTwitterId($twitterId)
    {
        $this->container['twitterId'] = $twitterId;

        return $this;
    }

    /**
     * Gets customInfo
     * @return \ai\thirdwatch\Model\CustomInfo
     */
    public function getCustomInfo()
    {
        return $this->container['customInfo'];
    }

    /**
     * Sets customInfo
     * @param \ai\thirdwatch\Model\CustomInfo $customInfo
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
            return json_encode(\ai\thirdwatch\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ai\thirdwatch\ObjectSerializer::sanitizeForSerialization($this));
    }
}


