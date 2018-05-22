<?php
	/**
	 * Installer
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */

	/* @var $installer Mage_Core_Model_Resource_Setup */
	$installer = $this;

	$installer->startSetup();

	$table = $installer->getConnection()
		->newTable($installer->getTable('intersales_googlefonts/font'))
		->addColumn(
			'font_id',
			Varien_Db_Ddl_Table::TYPE_INTEGER,
			null,
			array(
				'identity'	=> true,
				'unsigned'	=> true,
				'nullable'	=> false,
				'primary'	=> true
			),
			'Font ID'
		)->addColumn(
			'name',
			Varien_Db_Ddl_Table::TYPE_TEXT,
			255,
			array(
				'nullable'	=> false,
			),
			'Font name'
		)->addIndex(
			$installer->getIdxName(
				'intersales_googlefonts/font',
				'name',
				Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
			),
			'name',
			array('type' => Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE)
		)->setComment('Google Fonts');

	$installer->getConnection()->createTable($table);

	$installer->endSetup();