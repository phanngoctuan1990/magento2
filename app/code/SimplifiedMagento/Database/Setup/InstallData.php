<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup setup
     * @param ModuleContextInterface $context context
     * 
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            [
                'name' => 'Bob',
                'address' => 'Da Nang',
                'status' => true
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            [
                'name' => 'Alex',
                'address' => 'Ha Noi',
            ]
        );
        $setup->endSetup();
    }
}