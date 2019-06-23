<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberRS;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    /**
     * AffiliateMember construct
     * 
     * @return void
     */
    public function _construct()
    {
        $this->_init(AffiliateMemberRS::class);
    }

    /**
     * Get id
     * 
     * @return int
     */
    public function getId() :int
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    /**
     * Get name
     * 
     * @return string
     */
    public function getName() :string
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }
    
    /**
     * Get status
     * 
     * @return boolean
     */
    public function getStatus() :boolean
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * Get address
     * 
     * @return string
     */
    public function getAddress() :string
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * Get phone number
     * 
     * @return string
     */
    public function getPhoneNumber() :string
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * Get created at
     * 
     * @return string
     */
    public function getCreatedAt() :string
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * Get updated at
     * 
     * @return string
     */
    public function getUpdatedAt() :string
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    /**
     * Set id
     * 
     * @param int $id id
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setId(int $id)
    {
        $this->setData(AffiliateMemberInterface::ID, $id);
    }

    /**
     * Set name
     * 
     * @param string $name name
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName(string $name)
    {
        $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    /**
     * Set status
     * 
     * @param bool $status status
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus(bool $status)
    {
        $this->setData(AffiliateMemberInterface::STATUS, $status);
    }
    
    /**
     * Set address
     * 
     * @param string $address address
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress(string $address)
    {
        $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }
    
    /**
     * Set phone number
     * 
     * @param string $phoneNumber phoneNumber
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }
}