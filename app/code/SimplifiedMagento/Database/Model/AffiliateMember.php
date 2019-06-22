<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberRS;

class AffiliateMember extends AbstractModel
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
}