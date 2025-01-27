<?php
/**
 * RestfulservicereturnRequestData
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
 * RestfulservicereturnRequestData Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestfulservicereturnRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'restfulservicereturnRequest_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_type' => 'string',
'use_customer_cross' => 'string',
'invoice_number' => 'string',
'return_reference_number' => 'string',
'return_service_label' => 'string',
'return_tracking_number' => 'string',
'parts' => '\Encompass\SDK\Model\RestfulservicereturnRequestDataParts[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_type' => null,
'use_customer_cross' => null,
'invoice_number' => null,
'return_reference_number' => null,
'return_service_label' => null,
'return_tracking_number' => null,
'parts' => null    ];

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
        'customer_type' => 'customerType',
'use_customer_cross' => 'useCustomerCross',
'invoice_number' => 'invoiceNumber',
'return_reference_number' => 'returnReferenceNumber',
'return_service_label' => 'returnServiceLabel',
'return_tracking_number' => 'returnTrackingNumber',
'parts' => 'parts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_type' => 'setCustomerType',
'use_customer_cross' => 'setUseCustomerCross',
'invoice_number' => 'setInvoiceNumber',
'return_reference_number' => 'setReturnReferenceNumber',
'return_service_label' => 'setReturnServiceLabel',
'return_tracking_number' => 'setReturnTrackingNumber',
'parts' => 'setParts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_type' => 'getCustomerType',
'use_customer_cross' => 'getUseCustomerCross',
'invoice_number' => 'getInvoiceNumber',
'return_reference_number' => 'getReturnReferenceNumber',
'return_service_label' => 'getReturnServiceLabel',
'return_tracking_number' => 'getReturnTrackingNumber',
'parts' => 'getParts'    ];

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
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['use_customer_cross'] = isset($data['use_customer_cross']) ? $data['use_customer_cross'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['return_reference_number'] = isset($data['return_reference_number']) ? $data['return_reference_number'] : null;
        $this->container['return_service_label'] = isset($data['return_service_label']) ? $data['return_service_label'] : null;
        $this->container['return_tracking_number'] = isset($data['return_tracking_number']) ? $data['return_tracking_number'] : null;
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

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
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
     * Gets customer_type
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string $customer_type customer type (not used for all accounts)
     *
     * @return $this
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets use_customer_cross
     *
     * @return string
     */
    public function getUseCustomerCross()
    {
        return $this->container['use_customer_cross'];
    }

    /**
     * Sets use_customer_cross
     *
     * @param string $use_customer_cross map your customer number to ours (not available for all accounts) (y/n)
     *
     * @return $this
     */
    public function setUseCustomerCross($use_customer_cross)
    {
        $this->container['use_customer_cross'] = $use_customer_cross;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number `invoiceNumber` from `orderStatus` service
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets return_reference_number
     *
     * @return string
     */
    public function getReturnReferenceNumber()
    {
        return $this->container['return_reference_number'];
    }

    /**
     * Sets return_reference_number
     *
     * @param string $return_reference_number your reference number for the return
     *
     * @return $this
     */
    public function setReturnReferenceNumber($return_reference_number)
    {
        $this->container['return_reference_number'] = $return_reference_number;

        return $this;
    }

    /**
     * Gets return_service_label
     *
     * @return string
     */
    public function getReturnServiceLabel()
    {
        return $this->container['return_service_label'];
    }

    /**
     * Sets return_service_label
     *
     * @param string $return_service_label request UPS return service label (y/n)
     *
     * @return $this
     */
    public function setReturnServiceLabel($return_service_label)
    {
        $this->container['return_service_label'] = $return_service_label;

        return $this;
    }

    /**
     * Gets return_tracking_number
     *
     * @return string
     */
    public function getReturnTrackingNumber()
    {
        return $this->container['return_tracking_number'];
    }

    /**
     * Sets return_tracking_number
     *
     * @param string $return_tracking_number customer provided return tracking #, this is only used if not requesting a return service label
     *
     * @return $this
     */
    public function setReturnTrackingNumber($return_tracking_number)
    {
        $this->container['return_tracking_number'] = $return_tracking_number;

        return $this;
    }

    /**
     * Gets parts
     *
     * @return \Encompass\SDK\Model\RestfulservicereturnRequestDataParts[]
     */
    public function getParts()
    {
        return $this->container['parts'];
    }

    /**
     * Sets parts
     *
     * @param \Encompass\SDK\Model\RestfulservicereturnRequestDataParts[] $parts array of parts to return
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
