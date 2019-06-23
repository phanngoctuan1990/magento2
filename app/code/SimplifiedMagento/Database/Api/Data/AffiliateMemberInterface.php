<?php

namespace SimplifiedMagento\Database\Api\Data;

interface AffiliateMemberInterface
{
    const NAME = 'name';
    const ID = 'entity_id';
    const STATUS = 'status';
    const ADDRESS = 'address';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const PHONE_NUMBER = 'phone_number';

    /**
     * Get id
     * 
     * @return int
     */
    public function getId() :int;

    /**
     * Get name
     * 
     * @return string
     */
    public function getName() :string;
    
    /**
     * Get status
     * 
     * @return boolean
     */
    public function getStatus() :boolean;

    /**
     * Get address
     * 
     * @return string
     */
    public function getAddress() :string;

    /**
     * Get phone number
     * 
     * @return string
     */
    public function getPhoneNumber() :string;

    /**
     * Get created at
     * 
     * @return string
     */
    public function getCreatedAt() :string;

    /**
     * Get updated at
     * 
     * @return string
     */
    public function getUpdatedAt() :string;

    /**
     * Set id
     * 
     * @param int $id id
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setId(int $id);

    /**
     * Set name
     * 
     * @param string $name name
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName(string $name);

    /**
     * Set status
     * 
     * @param bool $status status
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus(bool $status);
    
    /**
     * Set address
     * 
     * @param string $address address
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress(string $address);
    
    /**
     * Set phone number
     * 
     * @param string $phoneNumber phoneNumber
     * 
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phoneNumber);
}