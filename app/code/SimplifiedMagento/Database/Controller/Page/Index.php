<?php

namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Index extends Action
{
    private $affiliateMemberFactory;
    /**
     * Index construct
     * 
     * @param Context $context context
     * 
     * @return void
     */
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    /**
     * Execute
     * 
     * @return void
     */
    public function execute()
    {
        $affiliateMember = $this->affiliateMemberFactory->create();
        $member = $affiliateMember->load(1);
        var_dump($member->getData());
        $member->setAddress('new address');
        $member->save();
        $affiliateMember->addData([
            'name' => 'Rand',
            'address' => 'HCM',
            'status' => true,
            'phone_number' => '0987654321'
        ]);
        $affiliateMember->save();
        $member->delete();
        
        $collection = $affiliateMember->getCollection()
            ->addFieldToSelect(['name', 'status'])
            ->addFieldToFilter('name', ['eq' => 'Alex'])
            ->addFieldToFilter('status', ['neq' => true]);
        foreach ($collection as $item) {
            print_r($item->getData());
            echo '</br>';
        }
    }
}