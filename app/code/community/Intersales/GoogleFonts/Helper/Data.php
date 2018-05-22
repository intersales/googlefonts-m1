<?php
/**
 * TEXT
 *
 * @category   Intersales
 * @package    Intersales_GoogleFonts
 * @author     Daniel Rose <dr@intersales>
 */ 
class Intersales_GoogleFonts_Helper_Data extends Mage_Core_Helper_Abstract {
	const XML_PATH_GENERAL_SETTINGS_ENABLED = 'intersales_googlefonts/general_settings/enabled';
	const XML_PATH_GENERAL_SETTINGS_FONT = 'intersales_googlefonts/general_settings/font';

	/**
	 * Is module active
	 *
	 * @param null $store
	 * @return bool
	 */
	public function isEnabled($store = null) {
		return Mage::getStoreConfig(self::XML_PATH_GENERAL_SETTINGS_ENABLED, $store) == 1 && Mage::getStoreConfig(self::XML_PATH_GENERAL_SETTINGS_FONT, $store);
	}

	/**
	 * Get font name
	 *
	 * @param null $store
	 * @return bool
	 */
	public function getFont($store = null) {
		return Mage::getStoreConfig(self::XML_PATH_GENERAL_SETTINGS_FONT, $store);
	}
}