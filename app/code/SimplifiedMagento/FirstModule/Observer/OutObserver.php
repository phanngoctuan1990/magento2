<?php

namespace SimplifiedMagento\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class OutObserver implements ObserverInterface
{
    /**
     * Execute
     * 
     * @param Observer $observer observer
     * 
     * @return void
     */
    public function execute(Observer $observer)
    {
        $message = $observer->getData('greeting');
        $message->setGreeting('Good evening');
    }
}