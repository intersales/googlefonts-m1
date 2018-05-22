<?php
	/**
	 * Font resource model
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */
	class Intersales_GoogleFonts_Model_Resource_Font extends Mage_Core_Model_Resource_Db_Abstract {
		/**
		 * Init
		 */
		protected function _construct() {
			$this->_init('intersales_googlefonts/font', 'font_id');
		}

		/**
		 * Get font id by name
		 *
		 * @param string $name
		 * @return int|false
		 */
		public function getIdByName($name) {
			$adapter = $this->_getReadAdapter();

			$select = $adapter->select()
				->from($this->getMainTable(), 'font_id')
				->where('name = :name');

			$bind = array(':name' => (string) $name);

			return $adapter->fetchOne($select, $bind);
		}
	}