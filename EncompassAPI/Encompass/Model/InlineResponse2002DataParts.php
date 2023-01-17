<?php
/**
 * InlineResponse2002DataParts
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
 * InlineResponse2002DataParts Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002DataParts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_data_parts';

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
'category_description' => 'string',
'demand' => 'string',
'small_image_url' => 'string'    ];

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
'category_description' => null,
'demand' => null,
'small_image_url' => null    ];

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
'category_description' => 'categoryDescription',
'demand' => 'demand',
'small_image_url' => 'smallImageURL'    ];

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
'category_description' => 'setCategoryDescription',
'demand' => 'setDemand',
'small_image_url' => 'setSmallImageUrl'    ];

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
'category_description' => 'getCategoryDescription',
'demand' => 'getDemand',
'small_image_url' => 'getSmallImageUrl'    ];

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
        $this->container['category_description'] = isset($data['category_description']) ? $data['category_description'] : null;
        $this->container['demand'] = isset($data['demand']) ? $data['demand'] : null;
        $this->container['small_image_url'] = isset($data['small_image_url']) ? $data['small_image_url'] : null;
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
     * @param string $base_pn base_pn
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
     * @param string $mfg_code mfg_code
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
     * @param string $mfg_name mfg_name
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
     * @param string $part_number part_number
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
     * @param string $part_description part_description
     *
     * @return $this
     */
    public function setPartDescription($part_description)
    {
        $this->container['part_description'] = $part_description;

        return $this;
    }

    /**
     * Gets category_description
     *
     * @return string
     */
    public function getCategoryDescription()
    {
        return $this->container['category_description'];
    }

    /**
     * Sets category_description
     *
     * @param string $category_description category_description
     *
     * @return $this
     */
    public function setCategoryDescription($category_description)
    {
        $this->container['category_description'] = $category_description;

        return $this;
    }

    /**
     * Gets demand
     *
     * @return string
     */
    public function getDemand()
    {
        return $this->container['demand'];
    }

    /**
     * Sets demand
     *
     * @param string $demand demand
     *
     * @return $this
     */
    public function setDemand($demand)
    {
        $this->container['demand'] = $demand;

        return $this;
    }

    /**
     * Gets small_image_url
     *
     * @return string
     */
    public function getSmallImageUrl()
    {
        return $this->container['small_image_url'];
    }

    /**
     * Sets small_image_url
     *
     * @param string $small_image_url small_image_url
     *
     * @return $this
     */
    public function setSmallImageUrl($small_image_url)
    {
        $this->container['small_image_url'] = $small_image_url;

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
