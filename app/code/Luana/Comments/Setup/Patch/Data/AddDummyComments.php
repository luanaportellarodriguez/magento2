<?php   
namespace Luana\Comments\Setup\Patch\Data;

class AddDummyComments implements \Magento\Framework\Setup\Patch\DataPatchInterface
{
private \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup;

    public function __construct(\Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $table = $this->moduleDataSetup->getTable('luana_comments');
        $this->moduleDataSetup->getConnection()->insert($table, [
            'product_id' => 1,
            'customer_id' => 'First Comment',
            'comment_text' => 'This is the first dummy comment.',
        ]);
        $this->moduleDataSetup->getConnection()->insertMultiple($table, [
            [
                'product_id' => 2,
                'customer_id' => 'Second Comment',
                'comment_text' => 'This is the second dummy comment.',
            ],
            [
                'product_id' => 3,
                'customer_id' => 'Third Comment',
                'comment_text' => 'This is the third dummy comment.',
            ],
        ]);
        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}