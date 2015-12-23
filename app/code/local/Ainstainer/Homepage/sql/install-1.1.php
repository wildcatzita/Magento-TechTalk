<?php
$installer = $this;
$installer->startSetup();
/**
 * Create table 'homepage/banner'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('homepage/banner'))
    ->addColumn('banner_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Banner ID')
    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
    ), 'Banner Url')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
    ), 'Banner Description')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, 50, array(
    ), 'Banner Title')
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
    ), 'Banner Image Url')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TEXT, 25, array(
    ), 'Banner Status')
    ->addColumn('position', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
        'default'   => '1',
    ), 'Banner Position')
    ->setComment('CMS Block Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();