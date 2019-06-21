<?php

namespace SimplifiedMagento\FirstModule\Plugin;

use Magento\Catalog\Model\Product;
use SimplifiedMagento\FirstModule\Controller\Page\HelloWorld;

class PluginSolution3
{
    /**
     * Before execute
     * 
     * @param HelloWorld $subject subject
     * 
     * @return void
     */
    public function beforeExecute(HelloWorld $subject)
    {
        echo "Before execute sort order 30" . "</br>";
    }

    /**
     * After execute
     * 
     * @param HelloWorld $subject subject
     * 
     * @return void
     */
    public function afterExecute(HelloWorld $subject)
    {
        echo "After execute sort order 30" . "</br>";
    }
    
    /**
     * Around execute
     * 
     * @param HelloWorld $subject subject
     * @param callable   $proceed proceed
     * 
     * @return void
     */
    public function aroundExecute(HelloWorld $subject, callable $proceed)
    {
        echo "Before proceed sort order 30" . "</br>";
        $proceed();
        echo "After proceed sort order 30" . "</br>";
    }
}