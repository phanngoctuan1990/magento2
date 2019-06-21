<?php

namespace SimplifiedMagento\FirstModule\Plugin;

use Magento\Catalog\Model\Product;
use SimplifiedMagento\FirstModule\Controller\Page\HelloWorld;

class PluginSolution
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
        echo "Before execute sort order 10" . "</br>";
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
        echo "After execute sort order 10" . "</br>";
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
        echo "Before proceed sort order 10" . "</br>";
        $proceed();
        echo "After proceed sort order 10" . "</br>";
    }

    /**
     * Before set name
     * 
     * @param Product $subject subject
     * @param String  $name    name
     * 
     * @return string
     */
    public function beforeSetName(Product $subject, $name)
    {
        return "Before plugin set Name" . $name;
    }

    /**
     * After get name
     * 
     * @param Product $subject subject
     * @param String $result   result
     * 
     * @return string
     */
    public function afterGetName(Product $subject, $result)
    {
        return $result . " After plugin set name";
    }

    /**
     * Around get name
     * 
     * @param Product  $subject subject
     * @param callable $proceed proceed
     * 
     * @return string
     */
    public function aroundGetName(Product $subject, callable $proceed)
    {
        echo "before processd get name" . "</br>";
        $name = $proceed();
        echo $name . "</br>";
        echo "after proceed get name" . "</br>";
        return $name;
    }

    /**
     * Around get id by sku
     * 
     * @param Product  $subject subject
     * @param callable $proceed proceed
     * @param string   $sku     sku
     * 
     * @return int
     */
    public function aroundGetIdBySku(Product $subject, callable $proceed, $sku)
    {
        echo "before processd get id by sku" . "</br>";
        $id = $proceed($sku);
        echo $id . "</br>";
        echo "after proceed get id by sku" . "</br>";
        return $id;
    }
}