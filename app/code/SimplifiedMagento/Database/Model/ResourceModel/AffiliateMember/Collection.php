<?php

namespace SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberRS;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Collection construct
     * 
     * @return void
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init(AffiliateMember::class, AffiliateMemberRS::class);
    }
}