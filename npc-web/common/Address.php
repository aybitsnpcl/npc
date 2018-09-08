<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/5/2018
 * Time: 4:48 PM
 */

class Address
{
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $state;
    private $pinCode;
    private $country;

    /**
     * Address constructor.
     * @param $addressLine1
     * @param $addressLine2
     * @param $city
     * @param $state
     * @param $pinCode
     * @param $country
     */
    public function __construct($addressLine1, $addressLine2, $city, $state, $pinCode, $country)
    {
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->city = $city;
        $this->state = $state;
        $this->pinCode = $pinCode;
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param mixed $addressLine1
     */
    public function setAddressLine1($addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param mixed $addressLine2
     */
    public function setAddressLine2($addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getPinCode()
    {
        return $this->pinCode;
    }

    /**
     * @param mixed $pinCode
     */
    public function setPinCode($pinCode): void
    {
        $this->pinCode = $pinCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }



}