<?php
class ContactDetails { 
        private  $primaryEmail;
        private  $primaryPhone;
        private  $secondaryEmail;
        private  $secondaryPhone;
        private  $faxNumber;
        private  $primaryMobileNumber;
        private  $secondaryMobileNumber;

    /**
     * ContactDetails constructor.
     * @param $primaryEmail
     * @param $primaryPhone
     * @param $secondaryEmail
     * @param $secondaryPhone
     * @param $faxNumber
     * @param $primaryMobileNumber
     * @param $secondaryMobileNumber
     */
    public function __construct($primaryEmail, $primaryPhone, $secondaryEmail, $secondaryPhone, $faxNumber, $primaryMobileNumber, $secondaryMobileNumber)
    {
        $this->primaryEmail = $primaryEmail;
        $this->primaryPhone = $primaryPhone;
        $this->secondaryEmail = $secondaryEmail;
        $this->secondaryPhone = $secondaryPhone;
        $this->faxNumber = $faxNumber;
        $this->primaryMobileNumber = $primaryMobileNumber;
        $this->secondaryMobileNumber = $secondaryMobileNumber;

    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * @param mixed $primaryEmail
     */
    public function setPrimaryEmail($primaryEmail): void
    {
        $this->primaryEmail = $primaryEmail;
    }

    /**
     * @return mixed
     */
    public function getPrimaryPhone()
    {
        return $this->primaryPhone;
    }

    /**
     * @param mixed $primaryPhone
     */
    public function setPrimaryPhone($primaryPhone): void
    {
        $this->primaryPhone = $primaryPhone;
    }

    /**
     * @return mixed
     */
    public function getSecondaryEmail()
    {
        return $this->secondaryEmail;
    }

    /**
     * @param mixed $secondaryEmail
     */
    public function setSecondaryEmail($secondaryEmail): void
    {
        $this->secondaryEmail = $secondaryEmail;
    }

    /**
     * @return mixed
     */
    public function getSecondaryPhone()
    {
        return $this->secondaryPhone;
    }

    /**
     * @param mixed $secondaryPhone
     */
    public function setSecondaryPhone($secondaryPhone): void
    {
        $this->secondaryPhone = $secondaryPhone;
    }

    /**
     * @return mixed
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param mixed $faxNumber
     */
    public function setFaxNumber($faxNumber): void
    {
        $this->faxNumber = $faxNumber;
    }

    /**
     * @return mixed
     */
    public function getPrimaryMobileNumber()
    {
        return $this->primaryMobileNumber;
    }

    /**
     * @param mixed $primaryMobileNumber
     */
    public function setPrimaryMobileNumber($primaryMobileNumber): void
    {
        $this->primaryMobileNumber = $primaryMobileNumber;
    }

    /**
     * @return mixed
     */
    public function getSecondaryMobileNumber()
    {
        return $this->secondaryMobileNumber;
    }

    /**
     * @param mixed $secondaryMobileNumber
     */
    public function setSecondaryMobileNumber($secondaryMobileNumber): void
    {
        $this->secondaryMobileNumber = $secondaryMobileNumber;
    }



}