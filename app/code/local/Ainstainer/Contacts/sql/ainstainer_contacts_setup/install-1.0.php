<?php
die("Create contactus");
$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('ainstainer_contacts/contactus'))
    ->addColumn('contact_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, '25', array(
        'nullable'  => true,
    ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('created', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => true,
    ));
$installer->getConnection()->createTable($table);
$installer->endSetup();