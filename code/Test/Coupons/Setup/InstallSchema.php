<?php
namespace Test\Coupons\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
        $installer = $setup;

        $installer->startSetup();
        
        $table = '';

		if ($installer->tableExists('salesrule_coupon')) {
			$table = $installer->getConnection()->table('salesrule_coupon');
        }

		$installer->endSetup();
    }
}