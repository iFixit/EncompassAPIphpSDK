<?php
/**
 * InlineResponse2008DataParts
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
 * Swagger Codegen version: 3.0.20
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
 * InlineResponse2008DataParts Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2008DataParts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_8_data_parts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'status' => 'string',
'line_number' => 'float',
'base_pn' => 'string',
'mfg_code' => 'string',
'mfg_name' => 'string',
'part_number' => 'string',
'description' => 'string',
'order_quantity' => 'string',
'ship_quantity' => 'string',
'backorder_quantity' => 'string',
'eta' => 'string',
'unit_price' => 'string',
'unit_core_charge' => 'string',
'extended_price' => 'string',
'authorization_or_reference_number' => 'string',
'inbound_tracking' => 'string',
'original_part_number' => 'string',
'open_core' => 'string',
'outbound_trackings' => '\Encompass\SDK\Model\InlineResponse2008DataOutboundTrackings[]',
'custom_part_fields' => '\Encompass\SDK\Model\InlineResponse2008DataCustomPartFields[]',
'serial_numbers' => '\Encompass\SDK\Model\InlineResponse2008DataSerialNumbers[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'status' => null,
'line_number' => null,
'base_pn' => null,
'mfg_code' => null,
'mfg_name' => null,
'part_number' => null,
'description' => null,
'order_quantity' => null,
'ship_quantity' => null,
'backorder_quantity' => null,
'eta' => null,
'unit_price' => null,
'unit_core_charge' => null,
'extended_price' => null,
'authorization_or_reference_number' => null,
'inbound_tracking' => null,
'original_part_number' => null,
'open_core' => null,
'outbound_trackings' => null,
'custom_part_fields' => null,
'serial_numbers' => null    ];

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
        'type' => 'type',
'status' => 'status',
'line_number' => 'lineNumber',
'base_pn' => 'basePN',
'mfg_code' => 'mfgCode',
'mfg_name' => 'mfgName',
'part_number' => 'partNumber',
'description' => 'description',
'order_quantity' => 'orderQuantity',
'ship_quantity' => 'shipQuantity',
'backorder_quantity' => 'backorderQuantity',
'eta' => 'eta',
'unit_price' => 'unitPrice',
'unit_core_charge' => 'unitCoreCharge',
'extended_price' => 'extendedPrice',
'authorization_or_reference_number' => 'authorizationOrReferenceNumber',
'inbound_tracking' => 'inboundTracking',
'original_part_number' => 'originalPartNumber',
'open_core' => 'openCore',
'outbound_trackings' => 'outboundTrackings',
'custom_part_fields' => 'customPartFields',
'serial_numbers' => 'serialNumbers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'status' => 'setStatus',
'line_number' => 'setLineNumber',
'base_pn' => 'setBasePn',
'mfg_code' => 'setMfgCode',
'mfg_name' => 'setMfgName',
'part_number' => 'setPartNumber',
'description' => 'setDescription',
'order_quantity' => 'setOrderQuantity',
'ship_quantity' => 'setShipQuantity',
'backorder_quantity' => 'setBackorderQuantity',
'eta' => 'setEta',
'unit_price' => 'setUnitPrice',
'unit_core_charge' => 'setUnitCoreCharge',
'extended_price' => 'setExtendedPrice',
'authorization_or_reference_number' => 'setAuthorizationOrReferenceNumber',
'inbound_tracking' => 'setInboundTracking',
'original_part_number' => 'setOriginalPartNumber',
'open_core' => 'setOpenCore',
'outbound_trackings' => 'setOutboundTrackings',
'custom_part_fields' => 'setCustomPartFields',
'serial_numbers' => 'setSerialNumbers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'status' => 'getStatus',
'line_number' => 'getLineNumber',
'base_pn' => 'getBasePn',
'mfg_code' => 'getMfgCode',
'mfg_name' => 'getMfgName',
'part_number' => 'getPartNumber',
'description' => 'getDescription',
'order_quantity' => 'getOrderQuantity',
'ship_quantity' => 'getShipQuantity',
'backorder_quantity' => 'getBackorderQuantity',
'eta' => 'getEta',
'unit_price' => 'getUnitPrice',
'unit_core_charge' => 'getUnitCoreCharge',
'extended_price' => 'getExtendedPrice',
'authorization_or_reference_number' => 'getAuthorizationOrReferenceNumber',
'inbound_tracking' => 'getInboundTracking',
'original_part_number' => 'getOriginalPartNumber',
'open_core' => 'getOpenCore',
'outbound_trackings' => 'getOutboundTrackings',
'custom_part_fields' => 'getCustomPartFields',
'serial_numbers' => 'getSerialNumbers'    ];

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
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['base_pn'] = isset($data['base_pn']) ? $data['base_pn'] : null;
        $this->container['mfg_code'] = isset($data['mfg_code']) ? $data['mfg_code'] : null;
        $this->container['mfg_name'] = isset($data['mfg_name']) ? $data['mfg_name'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_quantity'] = isset($data['order_quantity']) ? $data['order_quantity'] : null;
        $this->container['ship_quantity'] = isset($data['ship_quantity']) ? $data['ship_quantity'] : null;
        $this->container['backorder_quantity'] = isset($data['backorder_quantity']) ? $data['backorder_quantity'] : null;
        $this->container['eta'] = isset($data['eta']) ? $data['eta'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['unit_core_charge'] = isset($data['unit_core_charge']) ? $data['unit_core_charge'] : null;
        $this->container['extended_price'] = isset($data['extended_price']) ? $data['extended_price'] : null;
        $this->container['authorization_or_reference_number'] = isset($data['authorization_or_reference_number']) ? $data['authorization_or_reference_number'] : null;
        $this->container['inbound_tracking'] = isset($data['inbound_tracking']) ? $data['inbound_tracking'] : null;
        $this->container['original_part_number'] = isset($data['original_part_number']) ? $data['original_part_number'] : null;
        $this->container['open_core'] = isset($data['open_core']) ? $data['open_core'] : null;
        $this->container['outbound_trackings'] = isset($data['outbound_trackings']) ? $data['outbound_trackings'] : null;
        $this->container['custom_part_fields'] = isset($data['custom_part_fields']) ? $data['custom_part_fields'] : null;
        $this->container['serial_numbers'] = isset($data['serial_numbers']) ? $data['serial_numbers'] : null;
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
     * @param string $type type of item |Value|Description| |-------|--------| |ORDER|| |RETURN|| |CORE RETURN|| |CORE BILLING|| |CREDIT||
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status of item |Value|Description| |-------|--------| |SHIPPING|| |BACKORDER|| |ON HOLD|| |NOT RECEIVED|| |SHIPPED|| |ISSUED|| |CANCELLED|| |BILLED||
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return float
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param float $line_number line# on our record
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets base_pn
     *
     * @return string
     */
    public function getBasePn()
    {
        return $this->container['base_pn'];
    }

    /**
     * Sets base_pn
     *
     * @param string $base_pn internal Encompass part id#
     *
     * @return $this
     */
    public function setBasePn($base_pn)
    {
        $this->container['base_pn'] = $base_pn;

        return $this;
    }

    /**
     * Gets mfg_code
     *
     * @return string
     */
    public function getMfgCode()
    {
        return $this->container['mfg_code'];
    }

    /**
     * Sets mfg_code
     *
     * @param string $mfg_code manufacturer code
     *
     * @return $this
     */
    public function setMfgCode($mfg_code)
    {
        $this->container['mfg_code'] = $mfg_code;

        return $this;
    }

    /**
     * Gets mfg_name
     *
     * @return string
     */
    public function getMfgName()
    {
        return $this->container['mfg_name'];
    }

    /**
     * Sets mfg_name
     *
     * @param string $mfg_name manufacturer name
     *
     * @return $this
     */
    public function setMfgName($mfg_name)
    {
        $this->container['mfg_name'] = $mfg_name;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string $part_number part number
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description part description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_quantity
     *
     * @return string
     */
    public function getOrderQuantity()
    {
        return $this->container['order_quantity'];
    }

    /**
     * Sets order_quantity
     *
     * @param string $order_quantity quantity ordered
     *
     * @return $this
     */
    public function setOrderQuantity($order_quantity)
    {
        $this->container['order_quantity'] = $order_quantity;

        return $this;
    }

    /**
     * Gets ship_quantity
     *
     * @return string
     */
    public function getShipQuantity()
    {
        return $this->container['ship_quantity'];
    }

    /**
     * Sets ship_quantity
     *
     * @param string $ship_quantity quantity shipped
     *
     * @return $this
     */
    public function setShipQuantity($ship_quantity)
    {
        $this->container['ship_quantity'] = $ship_quantity;

        return $this;
    }

    /**
     * Gets backorder_quantity
     *
     * @return string
     */
    public function getBackorderQuantity()
    {
        return $this->container['backorder_quantity'];
    }

    /**
     * Sets backorder_quantity
     *
     * @param string $backorder_quantity quantity on backorder
     *
     * @return $this
     */
    public function setBackorderQuantity($backorder_quantity)
    {
        $this->container['backorder_quantity'] = $backorder_quantity;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return string
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param string $eta estimated time of arrival
     *
     * @return $this
     */
    public function setEta($eta)
    {
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price unit price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_core_charge
     *
     * @return string
     */
    public function getUnitCoreCharge()
    {
        return $this->container['unit_core_charge'];
    }

    /**
     * Sets unit_core_charge
     *
     * @param string $unit_core_charge unit core charge
     *
     * @return $this
     */
    public function setUnitCoreCharge($unit_core_charge)
    {
        $this->container['unit_core_charge'] = $unit_core_charge;

        return $this;
    }

    /**
     * Gets extended_price
     *
     * @return string
     */
    public function getExtendedPrice()
    {
        return $this->container['extended_price'];
    }

    /**
     * Sets extended_price
     *
     * @param string $extended_price extended price (unitPrice+unitCoreCharge)*shipQuantity
     *
     * @return $this
     */
    public function setExtendedPrice($extended_price)
    {
        $this->container['extended_price'] = $extended_price;

        return $this;
    }

    /**
     * Gets authorization_or_reference_number
     *
     * @return string
     */
    public function getAuthorizationOrReferenceNumber()
    {
        return $this->container['authorization_or_reference_number'];
    }

    /**
     * Sets authorization_or_reference_number
     *
     * @param string $authorization_or_reference_number part reference number or manufacturer authorization
     *
     * @return $this
     */
    public function setAuthorizationOrReferenceNumber($authorization_or_reference_number)
    {
        $this->container['authorization_or_reference_number'] = $authorization_or_reference_number;

        return $this;
    }

    /**
     * Gets inbound_tracking
     *
     * @return string
     */
    public function getInboundTracking()
    {
        return $this->container['inbound_tracking'];
    }

    /**
     * Sets inbound_tracking
     *
     * @param string $inbound_tracking tracking number for a return package
     *
     * @return $this
     */
    public function setInboundTracking($inbound_tracking)
    {
        $this->container['inbound_tracking'] = $inbound_tracking;

        return $this;
    }

    /**
     * Gets original_part_number
     *
     * @return string
     */
    public function getOriginalPartNumber()
    {
        return $this->container['original_part_number'];
    }

    /**
     * Sets original_part_number
     *
     * @param string $original_part_number original Part Number
     *
     * @return $this
     */
    public function setOriginalPartNumber($original_part_number)
    {
        $this->container['original_part_number'] = $original_part_number;

        return $this;
    }

    /**
     * Gets open_core
     *
     * @return string
     */
    public function getOpenCore()
    {
        return $this->container['open_core'];
    }

    /**
     * Sets open_core
     *
     * @param string $open_core items has an open core (Y/N)
     *
     * @return $this
     */
    public function setOpenCore($open_core)
    {
        $this->container['open_core'] = $open_core;

        return $this;
    }

    /**
     * Gets outbound_trackings
     *
     * @return \Encompass\SDK\Model\InlineResponse2008DataOutboundTrackings[]
     */
    public function getOutboundTrackings()
    {
        return $this->container['outbound_trackings'];
    }

    /**
     * Sets outbound_trackings
     *
     * @param \Encompass\SDK\Model\InlineResponse2008DataOutboundTrackings[] $outbound_trackings array of outbound tracking details
     *
     * @return $this
     */
    public function setOutboundTrackings($outbound_trackings)
    {
        $this->container['outbound_trackings'] = $outbound_trackings;

        return $this;
    }

    /**
     * Gets custom_part_fields
     *
     * @return \Encompass\SDK\Model\InlineResponse2008DataCustomPartFields[]
     */
    public function getCustomPartFields()
    {
        return $this->container['custom_part_fields'];
    }

    /**
     * Sets custom_part_fields
     *
     * @param \Encompass\SDK\Model\InlineResponse2008DataCustomPartFields[] $custom_part_fields array of custom values that will be returned at the part level if they were provided during the order process
     *
     * @return $this
     */
    public function setCustomPartFields($custom_part_fields)
    {
        $this->container['custom_part_fields'] = $custom_part_fields;

        return $this;
    }

    /**
     * Gets serial_numbers
     *
     * @return \Encompass\SDK\Model\InlineResponse2008DataSerialNumbers[]
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     *
     * @param \Encompass\SDK\Model\InlineResponse2008DataSerialNumbers[] $serial_numbers array of product serial numbers sold
     *
     * @return $this
     */
    public function setSerialNumbers($serial_numbers)
    {
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
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
     */
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
