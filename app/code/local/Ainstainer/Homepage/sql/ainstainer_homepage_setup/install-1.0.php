<?php

die("Create table");
$installer = $this;
$installer->startSetup();
/**
 * Create table 'ainstainer_homepage/banner'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('ainstainer_homepage/banner'))
    ->addColumn('banner_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Banner ID')
    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => true,
    ), 'Banner Url')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => true,
    ), 'Banner Description')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, 50, array(
        'nullable'  => true,
    ), 'Banner Title')
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
    ), 'Banner Image Url')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TEXT, 25, array(
        'nullable'  => false,
    ), 'Banner Status')
    ->addColumn('position', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => true,
        'default'   => '1',
    ), 'Banner Position')
    ->setComment('CMS Block Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();