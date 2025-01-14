<?php
/**
 * RestfulservicepartResearchViewSettings
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
 * RestfulservicepartResearchViewSettings Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestfulservicepartResearchViewSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'restfulservicepartResearchView_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'json_user' => 'string',
'json_password' => 'string',
'customer_number' => 'string',
'customer_password' => 'string',
'program_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'json_user' => null,
'json_password' => null,
'customer_number' => null,
'customer_password' => null,
'program_name' => null    ];

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
        'json_user' => 'jsonUser',
'json_password' => 'jsonPassword',
'customer_number' => 'customerNumber',
'customer_password' => 'customerPassword',
'program_name' => 'programName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'json_user' => 'setJsonUser',
'json_password' => 'setJsonPassword',
'customer_number' => 'setCustomerNumber',
'customer_password' => 'setCustomerPassword',
'program_name' => 'setProgramName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'json_user' => 'getJsonUser',
'json_password' => 'getJsonPassword',
'customer_number' => 'getCustomerNumber',
'customer_password' => 'getCustomerPassword',
'program_name' => 'getProgramName'    ];

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
        $this->container['json_user'] = isset($data['json_user']) ? $data['json_user'] : null;
        $this->container['json_password'] = isset($data['json_password']) ? $data['json_password'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['customer_password'] = isset($data['customer_password']) ? $data['customer_password'] : null;
        $this->container['program_name'] = isset($data['program_name']) ? $data['program_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['json_user'] === null) {
            $invalidProperties[] = "'json_user' can't be null";
        }
        if ($this->container['json_password'] === null) {
            $invalidProperties[] = "'json_password' can't be null";
        }
        if ($this->container['program_name'] === null) {
            $invalidProperties[] = "'program_name' can't be null";
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
     * Gets json_user
     *
     * @return string
     */
    public function getJsonUser()
    {
        return $this->container['json_user'];
    }

    /**
     * Sets json_user
     *
     * @param string $json_user Must aquire credentials from Encompass
     *
     * @return $this
     */
    public function setJsonUser($json_user)
    {
        $this->container['json_user'] = $json_user;

        return $this;
    }

    /**
     * Gets json_password
     *
     * @return string
     */
    public function getJsonPassword()
    {
        return $this->container['json_password'];
    }

    /**
     * Sets json_password
     *
     * @param string $json_password Must aquire credentials from Encompass
     *
     * @return $this
     */
    public function setJsonPassword($json_password)
    {
        $this->container['json_password'] = $json_password;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number Encompass Account#
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets customer_password
     *
     * @return string
     */
    public function getCustomerPassword()
    {
        return $this->container['customer_password'];
    }

    /**
     * Sets customer_password
     *
     * @param string $customer_password Encompass Account Password
     *
     * @return $this
     */
    public function setCustomerPassword($customer_password)
    {
        $this->container['customer_password'] = $customer_password;

        return $this;
    }

    /**
     * Gets program_name
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string $program_name program_name
     *
     * @return $this
     */
    public function setProgramName($program_name)
    {
        $this->container['program_name'] = $program_name;

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
