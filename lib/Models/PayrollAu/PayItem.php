<?php
/**
 * PayItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.3
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * PayItem Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_rates' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsRate[]',
        'deduction_types' => '\XeroAPI\XeroPHP\Models\PayrollAu\DeductionType[]',
        'leave_types' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveType[]',
        'reimbursement_types' => '\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_rates' => null,
        'deduction_types' => null,
        'leave_types' => null,
        'reimbursement_types' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'earnings_rates' => 'EarningsRates',
        'deduction_types' => 'DeductionTypes',
        'leave_types' => 'LeaveTypes',
        'reimbursement_types' => 'ReimbursementTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_rates' => 'setEarningsRates',
        'deduction_types' => 'setDeductionTypes',
        'leave_types' => 'setLeaveTypes',
        'reimbursement_types' => 'setReimbursementTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_rates' => 'getEarningsRates',
        'deduction_types' => 'getDeductionTypes',
        'leave_types' => 'getLeaveTypes',
        'reimbursement_types' => 'getReimbursementTypes'
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
        $this->container['earnings_rates'] = isset($data['earnings_rates']) ? $data['earnings_rates'] : null;
        $this->container['deduction_types'] = isset($data['deduction_types']) ? $data['deduction_types'] : null;
        $this->container['leave_types'] = isset($data['leave_types']) ? $data['leave_types'] : null;
        $this->container['reimbursement_types'] = isset($data['reimbursement_types']) ? $data['reimbursement_types'] : null;
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
     * Gets earnings_rates
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsRate[]|null
     */
    public function getEarningsRates()
    {
        return $this->container['earnings_rates'];
    }

    /**
     * Sets earnings_rates
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsRate[]|null $earnings_rates earnings_rates
     *
     * @return $this
     */
    public function setEarningsRates($earnings_rates)
    {

        $this->container['earnings_rates'] = $earnings_rates;

        return $this;
    }



    /**
     * Gets deduction_types
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\DeductionType[]|null
     */
    public function getDeductionTypes()
    {
        return $this->container['deduction_types'];
    }

    /**
     * Sets deduction_types
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\DeductionType[]|null $deduction_types deduction_types
     *
     * @return $this
     */
    public function setDeductionTypes($deduction_types)
    {

        $this->container['deduction_types'] = $deduction_types;

        return $this;
    }



    /**
     * Gets leave_types
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveType[]|null
     */
    public function getLeaveTypes()
    {
        return $this->container['leave_types'];
    }

    /**
     * Sets leave_types
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveType[]|null $leave_types leave_types
     *
     * @return $this
     */
    public function setLeaveTypes($leave_types)
    {

        $this->container['leave_types'] = $leave_types;

        return $this;
    }



    /**
     * Gets reimbursement_types
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementType[]|null
     */
    public function getReimbursementTypes()
    {
        return $this->container['reimbursement_types'];
    }

    /**
     * Sets reimbursement_types
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementType[]|null $reimbursement_types reimbursement_types
     *
     * @return $this
     */
    public function setReimbursementTypes($reimbursement_types)
    {

        $this->container['reimbursement_types'] = $reimbursement_types;

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
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


