<?php
/**
 * RestfulservicepartsInformationData
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
 * RestfulservicepartsInformationData Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestfulservicepartsInformationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'restfulservicepartsInformation_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_pn' => 'string',
'search_mfg_code' => 'string',
'search_part_number' => 'string',
'bid_number' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_pn' => null,
'search_mfg_code' => null,
'search_part_number' => null,
'bid_number' => null    ];

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
'search_mfg_code' => 'searchMfgCode',
'search_part_number' => 'searchPartNumber',
'bid_number' => 'bidNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_pn' => 'setBasePn',
'search_mfg_code' => 'setSearchMfgCode',
'search_part_number' => 'setSearchPartNumber',
'bid_number' => 'setBidNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_pn' => 'getBasePn',
'search_mfg_code' => 'getSearchMfgCode',
'search_part_number' => 'getSearchPartNumber',
'bid_number' => 'getBidNumber'    ];

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
        $this->container['search_mfg_code'] = isset($data['search_mfg_code']) ? $data['search_mfg_code'] : null;
        $this->container['search_part_number'] = isset($data['search_part_number']) ? $data['search_part_number'] : null;
        $this->container['bid_number'] = isset($data['bid_number']) ? $data['bid_number'] : null;
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
     * @param string $base_pn internal Encompass part id# `basePN` returned from `search` service
     *
     * @return $this
     */
    public function setBasePn($base_pn)
    {
        $this->container['base_pn'] = $base_pn;

        return $this;
    }

    /**
     * Gets search_mfg_code
     *
     * @return string
     */
    public function getSearchMfgCode()
    {
        return $this->container['search_mfg_code'];
    }

    /**
     * Sets search_mfg_code
     *
     * @param string $search_mfg_code 3 character manufacturer code
     *
     * @return $this
     */
    public function setSearchMfgCode($search_mfg_code)
    {
        $this->container['search_mfg_code'] = $search_mfg_code;

        return $this;
    }

    /**
     * Gets search_part_number
     *
     * @return string
     */
    public function getSearchPartNumber()
    {
        return $this->container['search_part_number'];
    }

    /**
     * Sets search_part_number
     *
     * @param string $search_part_number part number to search
     *
     * @return $this
     */
    public function setSearchPartNumber($search_part_number)
    {
        $this->container['search_part_number'] = $search_part_number;

        return $this;
    }

    /**
     * Gets bid_number
     *
     * @return string
     */
    public function getBidNumber()
    {
        return $this->container['bid_number'];
    }

    /**
     * Sets bid_number
     *
     * @param string $bid_number bid number
     *
     * @return $this
     */
    public function setBidNumber($bid_number)
    {
        $this->container['bid_number'] = $bid_number;

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
