<?php
	/**
	 * Font model
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */
	class Intersales_GoogleFonts_Model_Font extends Mage_Core_Model_Abstract {
		/**
		 * Init
		 */
		protected function _construct() {
			$this->_init('intersales_googlefonts/font');
		}

		/**
		 * Retrive font id by name
		 *
		 * @param   string $name
		 * @return  integer
		 */
		public function getIdByName($name) {
			return $this->_getResource()->getIdByName($name);
		}
	}