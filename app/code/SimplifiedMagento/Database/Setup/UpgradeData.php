<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * Upgrades DB schema for a module
     *
     * @param ModuleDataSetupInterface $setup   setup
     * @param ModuleContextInterface   $context context
     * 
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '0.0.3', '<')) {
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                [
                    'name' => 'Ade',
                    'status' => true,
                    'address' => 'Quang Nam',
                    'phone_number' => '0123456789'
                ]
            );
        }
        $setup->endSetup();
    }
}