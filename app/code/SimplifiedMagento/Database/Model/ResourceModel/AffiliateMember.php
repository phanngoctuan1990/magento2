<?php

namespace SimplifiedMagento\Database\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AffiliateMember extends AbstractDb
{
    /**
     * AffiliateMember construct
     * 
     * @return void
     */
    public function _construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}