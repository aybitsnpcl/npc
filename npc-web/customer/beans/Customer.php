<?php
class Customer {
    private $customerId;
    private $customerFullName;
    private $customerAddress;
    private $contactDetails;
    private $identificationParam;
    private $paymentParams;
    private $customerStatus;
    private $dateModified;
    private $dateCreated;
    private $dateDeleted;


    /**
     * Customer constructor.
     * @param $customerId
     * @param $customerFullName
     * @param $customerAddress
     * @param $contactDetails
     * @param $identificationParam
     * @param $paymentParams
     * @param $customerStatus
     */
    public function __construct($customerId, $customerFullName, $customerAddress, $contactDetails, $identificationParam, $paymentParams, $customerStatus)
    {
        $this->customerId = $customerId;
        $this->customerFullName = $customerFullName;
        $this->customerAddress = $customerAddress;
        $this->contactDetails = $contactDetails;
        $this->identificationParam = $identificationParam;
        $this->paymentParams = $paymentParams;
        $this->customerStatus = $customerStatus;
    }


    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerFullName()
    {
        return $this->customerFullName;
    }

    /**
     * @param mixed $customerFullName
     */
    public function setCustomerFullName($customerFullName): void
    {
        $this->customerFullName = $customerFullName;
    }

    /**
     * @return mixed
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * @param mixed $customerAddress
     */
    public function setCustomerAddress($customerAddress): void
    {
        $this->customerAddress = $customerAddress;
    }

    /**
     * @return mixed
     */
    public function getContactDetails()
    {
        return $this->contactDetails;
    }

    /**
     * @param mixed $contactDetails
     */
    public function setContactDetails($contactDetails): void
    {
        $this->contactDetails = $contactDetails;
    }

    /**
     * @return mixed
     */
    public function getIdentificationParam()
    {
        return $this->identificationParam;
    }

    /**
     * @param mixed $identificationParam
     */
    public function setIdentificationParam($identificationParam): void
    {
        $this->identificationParam = $identificationParam;
    }

    /**
     * @return mixed
     */
    public function getPaymentParams()
    {
        return $this->paymentParams;
    }

    /**
     * @param mixed $paymentParams
     */
    public function setPaymentParams($paymentParams): void
    {
        $this->paymentParams = $paymentParams;
    }

    /**
     * @return mixed
     */
    public function getCustomerStatus()
    {
        return $this->customerStatus;
    }

    /**
     * @param mixed $customerStatus
     */
    public function setCustomerStatus($customerStatus): void
    {
        $this->customerStatus = $customerStatus;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param mixed $dateModified
     */
    public function setDateModified($dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return mixed
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * @param mixed $dateDeleted
     */
    public function setDateDeleted($dateDeleted): void
    {
        $this->dateDeleted = $dateDeleted;
    }





}
