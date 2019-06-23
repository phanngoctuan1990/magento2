<?php

namespace SimplifiedMagento\Database\Api;

use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

interface AffiliateMemberRepositoryInterface
{
    /**
     * Get list
     * 
     * @return AffiliateMemberInterface[]
     */
    public function getList();
}