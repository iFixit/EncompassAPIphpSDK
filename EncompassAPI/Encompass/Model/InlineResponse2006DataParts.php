<?php
/**
 * InlineResponse2006DataParts
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
 * InlineResponse2006DataParts Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2006DataParts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_6_data_parts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_pn' => 'string',
'mfg_code' => 'string',
'mfg_name' => 'string',
'part_number' => 'string',
'part_description' => 'string',
'part_price' => 'string',
'available_quantity' => 'string',
'picture_path' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_pn' => null,
'mfg_code' => null,
'mfg_name' => null,
'part_number' => null,
'part_description' => null,
'part_price' => null,
'available_quantity' => null,
'picture_path' => null    ];

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
        'base_pn' => 'basePN',
'mfg_code' => 'mfgCode',
'mfg_name' => 'mfgName',
'part_number' => 'partNumber',
'part_description' => 'partDescription',
'part_price' => 'partPrice',
'available_quantity' => 'availableQuantity',
'picture_path' => 'picturePath'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_pn' => 'setBasePn',
'mfg_code' => 'setMfgCode',
'mfg_name' => 'setMfgName',
'part_number' => 'setPartNumber',
'part_description' => 'setPartDescription',
'part_price' => 'setPartPrice',
'available_quantity' => 'setAvailableQuantity',
'picture_path' => 'setPicturePath'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_pn' => 'getBasePn',
'mfg_code' => 'getMfgCode',
'mfg_name' => 'getMfgName',
'part_number' => 'getPartNumber',
'part_description' => 'getPartDescription',
'part_price' => 'getPartPrice',
'available_quantity' => 'getAvailableQuantity',
'picture_path' => 'getPicturePath'    ];

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
        $this->container['base_pn'] = isset($data['base_pn']) ? $data['base_pn'] : null;
        $this->container['mfg_code'] = isset($data['mfg_code']) ? $data['mfg_code'] : null;
        $this->container['mfg_name'] = isset($data['mfg_name']) ? $data['mfg_name'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['part_description'] = isset($data['part_description']) ? $data['part_description'] : null;
        $this->container['part_price'] = isset($data['part_price']) ? $data['part_price'] : null;
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['picture_path'] = isset($data['picture_path']) ? $data['picture_path'] : null;
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
     * @param string $base_pn internal Encompass part id#.  If this is blank, the part cannot be ordered
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
     * Gets part_description
     *
     * @return string
     */
    public function getPartDescription()
    {
        return $this->container['part_description'];
    }

    /**
     * Sets part_description
     *
     * @param string $part_description part description
     *
     * @return $this
     */
    public function setPartDescription($part_description)
    {
        $this->container['part_description'] = $part_description;

        return $this;
    }

    /**
     * Gets part_price
     *
     * @return string
     */
    public function getPartPrice()
    {
        return $this->container['part_price'];
    }

    /**
     * Sets part_price
     *
     * @param string $part_price your price for the part
     *
     * @return $this
     */
    public function setPartPrice($part_price)
    {
        $this->container['part_price'] = $part_price;

        return $this;
    }

    /**
     * Gets available_quantity
     *
     * @return string
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param string $available_quantity quantity available to ship
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets picture_path
     *
     * @return string
     */
    public function getPicturePath()
    {
        return $this->container['picture_path'];
    }

    /**
     * Sets picture_path
     *
     * @param string $picture_path URL for image
     *
     * @return $this
     */
    public function setPicturePath($picture_path)
    {
        $this->container['picture_path'] = $picture_path;

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
