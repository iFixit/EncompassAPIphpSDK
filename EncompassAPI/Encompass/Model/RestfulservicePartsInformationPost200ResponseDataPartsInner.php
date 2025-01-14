<?php
/**
 * RestfulservicePartsInformationPost200ResponseDataPartsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Encompass Supply Chain Solutions
 *
 * Services require a user name and password that must be obtained from Encompass.  We issue a single set of credentials for all invironments.  Please make sure you are pointing to the correct endpoint described in the __servers__ section.  Services all return the elements `status->errorCode` and `status->errorMessage`.  Successful reqeusts will return a __100__ `errorCode`.   If you have any questions that are not answered here or would like to discuss the overall process, please contact your account rep to schedule a technical call.
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Encompass\SDK\Model;

use \ArrayAccess;
use \Encompass\SDK\ObjectSerializer;

/**
 * RestfulservicePartsInformationPost200ResponseDataPartsInner Class Doc Comment
 *
 * @category Class
 * @package  Encompass\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestfulservicePartsInformationPost200ResponseDataPartsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_restfulservice_partsInformation_post_200_response_data_parts_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'base_pn' => 'string',
        'mfg_code' => 'string',
        'mfg_name' => 'string',
        'part_number' => 'string',
        'part_description' => 'string',
        'detailed_part_description' => 'string',
        'weight' => 'string',
        'length' => 'string',
        'width' => 'string',
        'height' => 'string',
        'hts_code' => 'string',
        'carrier_size' => 'float',
        'authorization_required' => 'string',
        'availability' => 'string',
        'availability_by_location' => '\Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerAvailabilityByLocationInner[]',
        'available_quantity_manufacturer' => 'string',
        'eta' => 'string',
        'estimated_delivery_date' => 'string',
        'list_price' => 'string',
        'core_price' => 'string',
        'part_price' => 'string',
        'total_price' => 'string',
        'sub_part' => 'string',
        'allow_rts' => 'string',
        'allow_iwr' => 'string',
        'small_image_url' => 'string',
        'compatible_models' => '\Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerCompatibleModelsInner[]',
        'symptoms' => '\Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerSymptomsInner[]',
        'wiseable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'base_pn' => null,
        'mfg_code' => null,
        'mfg_name' => null,
        'part_number' => null,
        'part_description' => null,
        'detailed_part_description' => null,
        'weight' => null,
        'length' => null,
        'width' => null,
        'height' => null,
        'hts_code' => null,
        'carrier_size' => null,
        'authorization_required' => null,
        'availability' => null,
        'availability_by_location' => null,
        'available_quantity_manufacturer' => null,
        'eta' => null,
        'estimated_delivery_date' => null,
        'list_price' => null,
        'core_price' => null,
        'part_price' => null,
        'total_price' => null,
        'sub_part' => null,
        'allow_rts' => null,
        'allow_iwr' => null,
        'small_image_url' => null,
        'compatible_models' => null,
        'symptoms' => null,
        'wiseable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'base_pn' => false,
        'mfg_code' => false,
        'mfg_name' => false,
        'part_number' => false,
        'part_description' => false,
        'detailed_part_description' => false,
        'weight' => false,
        'length' => false,
        'width' => false,
        'height' => false,
        'hts_code' => false,
        'carrier_size' => false,
        'authorization_required' => false,
        'availability' => false,
        'availability_by_location' => false,
        'available_quantity_manufacturer' => false,
        'eta' => false,
        'estimated_delivery_date' => false,
        'list_price' => false,
        'core_price' => false,
        'part_price' => false,
        'total_price' => false,
        'sub_part' => false,
        'allow_rts' => false,
        'allow_iwr' => false,
        'small_image_url' => false,
        'compatible_models' => false,
        'symptoms' => false,
        'wiseable' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'detailed_part_description' => 'detailedPartDescription',
        'weight' => 'weight',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'hts_code' => 'htsCode',
        'carrier_size' => 'carrierSize',
        'authorization_required' => 'authorizationRequired',
        'availability' => 'availability',
        'availability_by_location' => 'availabilityByLocation',
        'available_quantity_manufacturer' => 'availableQuantityManufacturer',
        'eta' => 'eta',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'list_price' => 'listPrice',
        'core_price' => 'corePrice',
        'part_price' => 'partPrice',
        'total_price' => 'totalPrice',
        'sub_part' => 'subPart',
        'allow_rts' => 'allowRTS',
        'allow_iwr' => 'allowIWR',
        'small_image_url' => 'smallImageURL',
        'compatible_models' => 'compatibleModels',
        'symptoms' => 'symptoms',
        'wiseable' => 'wiseable'
    ];

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
        'detailed_part_description' => 'setDetailedPartDescription',
        'weight' => 'setWeight',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'hts_code' => 'setHtsCode',
        'carrier_size' => 'setCarrierSize',
        'authorization_required' => 'setAuthorizationRequired',
        'availability' => 'setAvailability',
        'availability_by_location' => 'setAvailabilityByLocation',
        'available_quantity_manufacturer' => 'setAvailableQuantityManufacturer',
        'eta' => 'setEta',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'list_price' => 'setListPrice',
        'core_price' => 'setCorePrice',
        'part_price' => 'setPartPrice',
        'total_price' => 'setTotalPrice',
        'sub_part' => 'setSubPart',
        'allow_rts' => 'setAllowRts',
        'allow_iwr' => 'setAllowIwr',
        'small_image_url' => 'setSmallImageUrl',
        'compatible_models' => 'setCompatibleModels',
        'symptoms' => 'setSymptoms',
        'wiseable' => 'setWiseable'
    ];

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
        'detailed_part_description' => 'getDetailedPartDescription',
        'weight' => 'getWeight',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'hts_code' => 'getHtsCode',
        'carrier_size' => 'getCarrierSize',
        'authorization_required' => 'getAuthorizationRequired',
        'availability' => 'getAvailability',
        'availability_by_location' => 'getAvailabilityByLocation',
        'available_quantity_manufacturer' => 'getAvailableQuantityManufacturer',
        'eta' => 'getEta',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'list_price' => 'getListPrice',
        'core_price' => 'getCorePrice',
        'part_price' => 'getPartPrice',
        'total_price' => 'getTotalPrice',
        'sub_part' => 'getSubPart',
        'allow_rts' => 'getAllowRts',
        'allow_iwr' => 'getAllowIwr',
        'small_image_url' => 'getSmallImageUrl',
        'compatible_models' => 'getCompatibleModels',
        'symptoms' => 'getSymptoms',
        'wiseable' => 'getWiseable'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('base_pn', $data ?? [], null);
        $this->setIfExists('mfg_code', $data ?? [], null);
        $this->setIfExists('mfg_name', $data ?? [], null);
        $this->setIfExists('part_number', $data ?? [], null);
        $this->setIfExists('part_description', $data ?? [], null);
        $this->setIfExists('detailed_part_description', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('hts_code', $data ?? [], null);
        $this->setIfExists('carrier_size', $data ?? [], null);
        $this->setIfExists('authorization_required', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('availability_by_location', $data ?? [], null);
        $this->setIfExists('available_quantity_manufacturer', $data ?? [], null);
        $this->setIfExists('eta', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('list_price', $data ?? [], null);
        $this->setIfExists('core_price', $data ?? [], null);
        $this->setIfExists('part_price', $data ?? [], null);
        $this->setIfExists('total_price', $data ?? [], null);
        $this->setIfExists('sub_part', $data ?? [], null);
        $this->setIfExists('allow_rts', $data ?? [], null);
        $this->setIfExists('allow_iwr', $data ?? [], null);
        $this->setIfExists('small_image_url', $data ?? [], null);
        $this->setIfExists('compatible_models', $data ?? [], null);
        $this->setIfExists('symptoms', $data ?? [], null);
        $this->setIfExists('wiseable', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * @return string|null
     */
    public function getBasePn()
    {
        return $this->container['base_pn'];
    }

    /**
     * Sets base_pn
     *
     * @param string|null $base_pn internal Encompass part id#.  If this is blank, the part cannot be ordered
     *
     * @return self
     */
    public function setBasePn($base_pn)
    {
        if (is_null($base_pn)) {
            throw new \InvalidArgumentException('non-nullable base_pn cannot be null');
        }
        $this->container['base_pn'] = $base_pn;

        return $this;
    }

    /**
     * Gets mfg_code
     *
     * @return string|null
     */
    public function getMfgCode()
    {
        return $this->container['mfg_code'];
    }

    /**
     * Sets mfg_code
     *
     * @param string|null $mfg_code manufacturer code
     *
     * @return self
     */
    public function setMfgCode($mfg_code)
    {
        if (is_null($mfg_code)) {
            throw new \InvalidArgumentException('non-nullable mfg_code cannot be null');
        }
        $this->container['mfg_code'] = $mfg_code;

        return $this;
    }

    /**
     * Gets mfg_name
     *
     * @return string|null
     */
    public function getMfgName()
    {
        return $this->container['mfg_name'];
    }

    /**
     * Sets mfg_name
     *
     * @param string|null $mfg_name manufacturer name
     *
     * @return self
     */
    public function setMfgName($mfg_name)
    {
        if (is_null($mfg_name)) {
            throw new \InvalidArgumentException('non-nullable mfg_name cannot be null');
        }
        $this->container['mfg_name'] = $mfg_name;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number part number
     *
     * @return self
     */
    public function setPartNumber($part_number)
    {
        if (is_null($part_number)) {
            throw new \InvalidArgumentException('non-nullable part_number cannot be null');
        }
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets part_description
     *
     * @return string|null
     */
    public function getPartDescription()
    {
        return $this->container['part_description'];
    }

    /**
     * Sets part_description
     *
     * @param string|null $part_description part description
     *
     * @return self
     */
    public function setPartDescription($part_description)
    {
        if (is_null($part_description)) {
            throw new \InvalidArgumentException('non-nullable part_description cannot be null');
        }
        $this->container['part_description'] = $part_description;

        return $this;
    }

    /**
     * Gets detailed_part_description
     *
     * @return string|null
     */
    public function getDetailedPartDescription()
    {
        return $this->container['detailed_part_description'];
    }

    /**
     * Sets detailed_part_description
     *
     * @param string|null $detailed_part_description detailed part description
     *
     * @return self
     */
    public function setDetailedPartDescription($detailed_part_description)
    {
        if (is_null($detailed_part_description)) {
            throw new \InvalidArgumentException('non-nullable detailed_part_description cannot be null');
        }
        $this->container['detailed_part_description'] = $detailed_part_description;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string|null $weight weight in lbs.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets length
     *
     * @return string|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param string|null $length length in inches
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string|null $width width in inches
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height height in inches
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets hts_code
     *
     * @return string|null
     */
    public function getHtsCode()
    {
        return $this->container['hts_code'];
    }

    /**
     * Sets hts_code
     *
     * @param string|null $hts_code Harmonized Tariff Schedule code used for export
     *
     * @return self
     */
    public function setHtsCode($hts_code)
    {
        if (is_null($hts_code)) {
            throw new \InvalidArgumentException('non-nullable hts_code cannot be null');
        }
        $this->container['hts_code'] = $hts_code;

        return $this;
    }

    /**
     * Gets carrier_size
     *
     * @return float|null
     */
    public function getCarrierSize()
    {
        return $this->container['carrier_size'];
    }

    /**
     * Sets carrier_size
     *
     * @param float|null $carrier_size items with a value greater than zero might incur additional freight charges |Value|Description| |-------|--------| |0|normal| |3|Dim| |1|oversized| |2|truck|
     *
     * @return self
     */
    public function setCarrierSize($carrier_size)
    {
        if (is_null($carrier_size)) {
            throw new \InvalidArgumentException('non-nullable carrier_size cannot be null');
        }
        $this->container['carrier_size'] = $carrier_size;

        return $this;
    }

    /**
     * Gets authorization_required
     *
     * @return string|null
     */
    public function getAuthorizationRequired()
    {
        return $this->container['authorization_required'];
    }

    /**
     * Sets authorization_required
     *
     * @param string|null $authorization_required requires manufacturer authorization # (Y/N)
     *
     * @return self
     */
    public function setAuthorizationRequired($authorization_required)
    {
        if (is_null($authorization_required)) {
            throw new \InvalidArgumentException('non-nullable authorization_required cannot be null');
        }
        $this->container['authorization_required'] = $authorization_required;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string|null $availability quantity available to ship
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets availability_by_location
     *
     * @return \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerAvailabilityByLocationInner[]|null
     */
    public function getAvailabilityByLocation()
    {
        return $this->container['availability_by_location'];
    }

    /**
     * Sets availability_by_location
     *
     * @param \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerAvailabilityByLocationInner[]|null $availability_by_location array of part availability by warehouse location
     *
     * @return self
     */
    public function setAvailabilityByLocation($availability_by_location)
    {
        if (is_null($availability_by_location)) {
            throw new \InvalidArgumentException('non-nullable availability_by_location cannot be null');
        }
        $this->container['availability_by_location'] = $availability_by_location;

        return $this;
    }

    /**
     * Gets available_quantity_manufacturer
     *
     * @return string|null
     */
    public function getAvailableQuantityManufacturer()
    {
        return $this->container['available_quantity_manufacturer'];
    }

    /**
     * Sets available_quantity_manufacturer
     *
     * @param string|null $available_quantity_manufacturer quantity available to ship from Manufacturer
     *
     * @return self
     */
    public function setAvailableQuantityManufacturer($available_quantity_manufacturer)
    {
        if (is_null($available_quantity_manufacturer)) {
            throw new \InvalidArgumentException('non-nullable available_quantity_manufacturer cannot be null');
        }
        $this->container['available_quantity_manufacturer'] = $available_quantity_manufacturer;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return string|null
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param string|null $eta estimated ship date
     *
     * @return self
     */
    public function setEta($eta)
    {
        if (is_null($eta)) {
            throw new \InvalidArgumentException('non-nullable eta cannot be null');
        }
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param string|null $estimated_delivery_date estimated delivery date - will only be returned if `serviceLevel`, `destinationZipCode`, and `destinationCountry` were provided.  Valid in the US only.
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        if (is_null($estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_date cannot be null');
        }
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return string|null
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param string|null $list_price list / retail price for the part
     *
     * @return self
     */
    public function setListPrice($list_price)
    {
        if (is_null($list_price)) {
            throw new \InvalidArgumentException('non-nullable list_price cannot be null');
        }
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets core_price
     *
     * @return string|null
     */
    public function getCorePrice()
    {
        return $this->container['core_price'];
    }

    /**
     * Sets core_price
     *
     * @param string|null $core_price price of core (core part must be returned to receive credit)
     *
     * @return self
     */
    public function setCorePrice($core_price)
    {
        if (is_null($core_price)) {
            throw new \InvalidArgumentException('non-nullable core_price cannot be null');
        }
        $this->container['core_price'] = $core_price;

        return $this;
    }

    /**
     * Gets part_price
     *
     * @return string|null
     */
    public function getPartPrice()
    {
        return $this->container['part_price'];
    }

    /**
     * Sets part_price
     *
     * @param string|null $part_price your price for the part
     *
     * @return self
     */
    public function setPartPrice($part_price)
    {
        if (is_null($part_price)) {
            throw new \InvalidArgumentException('non-nullable part_price cannot be null');
        }
        $this->container['part_price'] = $part_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return string|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param string|null $total_price part price + core price
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        if (is_null($total_price)) {
            throw new \InvalidArgumentException('non-nullable total_price cannot be null');
        }
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets sub_part
     *
     * @return string|null
     */
    public function getSubPart()
    {
        return $this->container['sub_part'];
    }

    /**
     * Sets sub_part
     *
     * @param string|null $sub_part 
     *
     * @return self
     */
    public function setSubPart($sub_part)
    {
        if (is_null($sub_part)) {
            throw new \InvalidArgumentException('non-nullable sub_part cannot be null');
        }
        $this->container['sub_part'] = $sub_part;

        return $this;
    }

    /**
     * Gets allow_rts
     *
     * @return string|null
     */
    public function getAllowRts()
    {
        return $this->container['allow_rts'];
    }

    /**
     * Sets allow_rts
     *
     * @param string|null $allow_rts allow good/unused return(Y/N)
     *
     * @return self
     */
    public function setAllowRts($allow_rts)
    {
        if (is_null($allow_rts)) {
            throw new \InvalidArgumentException('non-nullable allow_rts cannot be null');
        }
        $this->container['allow_rts'] = $allow_rts;

        return $this;
    }

    /**
     * Gets allow_iwr
     *
     * @return string|null
     */
    public function getAllowIwr()
    {
        return $this->container['allow_iwr'];
    }

    /**
     * Sets allow_iwr
     *
     * @param string|null $allow_iwr allow in waranty return(Y/N)
     *
     * @return self
     */
    public function setAllowIwr($allow_iwr)
    {
        if (is_null($allow_iwr)) {
            throw new \InvalidArgumentException('non-nullable allow_iwr cannot be null');
        }
        $this->container['allow_iwr'] = $allow_iwr;

        return $this;
    }

    /**
     * Gets small_image_url
     *
     * @return string|null
     */
    public function getSmallImageUrl()
    {
        return $this->container['small_image_url'];
    }

    /**
     * Sets small_image_url
     *
     * @param string|null $small_image_url URL for image
     *
     * @return self
     */
    public function setSmallImageUrl($small_image_url)
    {
        if (is_null($small_image_url)) {
            throw new \InvalidArgumentException('non-nullable small_image_url cannot be null');
        }
        $this->container['small_image_url'] = $small_image_url;

        return $this;
    }

    /**
     * Gets compatible_models
     *
     * @return \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerCompatibleModelsInner[]|null
     */
    public function getCompatibleModels()
    {
        return $this->container['compatible_models'];
    }

    /**
     * Sets compatible_models
     *
     * @param \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerCompatibleModelsInner[]|null $compatible_models models that the part is used in for parts verification
     *
     * @return self
     */
    public function setCompatibleModels($compatible_models)
    {
        if (is_null($compatible_models)) {
            throw new \InvalidArgumentException('non-nullable compatible_models cannot be null');
        }
        $this->container['compatible_models'] = $compatible_models;

        return $this;
    }

    /**
     * Gets symptoms
     *
     * @return \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerSymptomsInner[]|null
     */
    public function getSymptoms()
    {
        return $this->container['symptoms'];
    }

    /**
     * Sets symptoms
     *
     * @param \Encompass\SDK\Model\RestfulservicePartsInformationPost200ResponseDataPartsInnerSymptomsInner[]|null $symptoms list of symptoms that you are using this part to fix. This will help us provide you with better part prediction data.
     *
     * @return self
     */
    public function setSymptoms($symptoms)
    {
        if (is_null($symptoms)) {
            throw new \InvalidArgumentException('non-nullable symptoms cannot be null');
        }
        $this->container['symptoms'] = $symptoms;

        return $this;
    }

    /**
     * Gets wiseable
     *
     * @return string|null
     */
    public function getWiseable()
    {
        return $this->container['wiseable'];
    }

    /**
     * Sets wiseable
     *
     * @param string|null $wiseable Is the part WISE-able? This only pertains to Whirlpool. |Value|Description| |-------|--------| |null|does not apply| |Y|not a WISE-able part| |N|WISE-able part|
     *
     * @return self
     */
    public function setWiseable($wiseable)
    {
        if (is_null($wiseable)) {
            throw new \InvalidArgumentException('non-nullable wiseable cannot be null');
        }
        $this->container['wiseable'] = $wiseable;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


