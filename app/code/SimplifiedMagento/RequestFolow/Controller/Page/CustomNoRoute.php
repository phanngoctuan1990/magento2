<?php

namespace SimplifiedMagento\RequestFolow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class CustomNoRoute extends Action
{
    /**
     * CustomNoRoute construct
     * 
     * @param Context $context context
     * 
     * @return void
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * CustomNoRoute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * 
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        echo "This is our custom 404 page";
    }
}