<?php

namespace Dn\Testimonial\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'testimonial'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('testimonial')
        )->addColumn(
            'testimonial_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Testimonial Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            [],
            'Name'
        )->addColumn(
            'information',
            Table::TYPE_TEXT,
            255,
            [],
            'Information'
        )->addColumn(
            'avatar',
            Table::TYPE_TEXT,
            255,
            [],
            'Avatar'
        )->addColumn(
            'content',
            Table::TYPE_TEXT,
            '2M',
            [],
            'Content'
        )->addColumn(
            'status',
            Table::TYPE_SMALLINT,
            null,
            ['nullable' => false, 'default' => 1],
            'Is Active'
        // Date
        )->addColumn(
            'testimonial_date',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Data'
        );

        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
