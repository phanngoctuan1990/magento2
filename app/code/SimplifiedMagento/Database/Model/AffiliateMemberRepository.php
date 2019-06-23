<?php

namespace SimplifiedMagento\Database\Model;

use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;

class AffiliateMemberRepository extends Collection implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;

    /**
     * AffiliateMemberRepository construct
     * 
     * @param CollectionFactory $collectionFactory collectionFactory
     * 
     * @return void
     */
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Get list
     * 
     * @return AffiliateMemberInterface[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}