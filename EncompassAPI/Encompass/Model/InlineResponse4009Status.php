<?php
/**
 * InlineResponse4009Status
 *
 * PHP version 5
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Encompass Supply Chain Solutions
 *
 * Services require a user name and password that must be obtained from Encompass.  We issue a single set of credentials for all invironments.  Please make sure you are pointing to the correct endpoint described in the __servers__ section.  Services all return the elements `status->errorCode` and `status->errorMessage`.  Successful reqeusts will return a __100__ `errorCode`.   If you have any questions that are not answered here or would like to discuss the overall process, please contact your account rep to schedule a technical call.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Encompass\SDK\Model;

use \ArrayAccess;
use \Encompass\SDK\ObjectSerializer;

/**
 * InlineResponse4009Status Class Doc Comment
 *
 * @category Class
 * @description |errorCode|errorMessage| |-------|--------| |-200|files did not open (host issue)| |-201|invalid jsonUser| |-202|invalid customer number from customer cross| |-203|customer number is required| |-204|invalid customer number| |-205|invoiceNumber is required| |-206|invoiceNumber does not exist| |-207|customerNumber does not match invoice| |-208|account does not allow return service| |-209|basePN is required| |-210|invalid basePN| |-211|invalid lineNumber| |-212|basePN does not exist on lineNumber| |-213|invalid returnQuantity| |-214|no items were shipped on this line| |-215|only n item(s) were shipped on this line| |-216|return good and un-used parts on invoice x| |-217|n part(s) were already returned - there are only n left to return| |-218|account does not allow good and un-used part returns| |-219|x cannot be returned to stock| |-220|this good and un-used part is n days old| |-221|this good and un-used part is n days old| |-222|this good and un-used part is n days old| |-223|special order products may not be returned| |-224|Toshiba computer products may not be returned| |-225|return warranty or replacement parts on invoice x| |-226|n part(s) were already returned - there are only n left to return| |-227|missing reasonCode| |-228|invalid reasonCode| |-229|password is required| |-230|password is invalid| |-231|please contact us with details of the physical damage| |-232|modelNumber is required on warranty or replacement parts| |-233|serialNumber is required on warranty or replacement parts| |-234|this warranty or replacement part is n days old| |-235|this warranty or replacement part is n days old| |-236|this warranty or replacement part is n days old| |-237|this warranty or replacement part is n days old| |-238|this warranty or replacement part is n days old| |-239|replacementOrderNumber is required on warranty or replacement parts| |-240|invalid replacementOrderNumber| |-241|invalid replacementOrderNumber| |-242|invalid replacementOrderNumber - customerNumber does not match| |-243|part does not exist on replacementOrderNumber x| |-244|replacement quantity n is less than return quantity n| |-245|x is not a replacement order| |-246|already placed quantity n against replacement order x| |-247|cores were not billed on this invoice try invoice x| |-248|cores were not billed on this invoice| |-249|n core(s) were already returned - there are only n left to return| |-250|this core is n days old| |-251|this core is n days old| |-252|invalid returnType n| |-253|x cannot be returned. For more information (link)| |-254|x cannot be returned. For more information (link)| |-255|x cannot be returned. For more information (link)| |-256|no valid parts were submitted| |-257|return against this invoice is already in process| |-258|invalid carrying branch n| |-259|invalid return location n| |-260|return service request error|
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse4009Status implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_400_9_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_code' => 'string',
'error_message' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_code' => null,
'error_message' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
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
     */
    protected static $attributeMap = [
        'error_code' => 'errorCode',
'error_message' => 'errorMessage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
'error_message' => 'setErrorMessage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
'error_message' => 'getErrorMessage'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
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
    public function __construct(?array $data = null)
    {
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code This field will display error codes for troubleshooting.
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message This field will display descriptions for troubleshooting.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
     */
    #[\ReturnTypeWillChange] 
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
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
