<?php
	/**
	 * Font resource collection model
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */
	class Intersales_GoogleFonts_Model_Resource_Font_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

		/**
		 * Init
		 */
		protected function _construct() {
			$this->_init('intersales_googlefonts/font');
		}

		/**
		 * Convert items to option array
		 *
		 * @return array
		 */
		public function toOptionArray() {
			return $this->_toOptionArray('name', 'name');
		}
	}