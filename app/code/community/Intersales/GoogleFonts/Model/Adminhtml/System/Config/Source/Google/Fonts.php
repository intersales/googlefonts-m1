<?php
	class Intersales_GoogleFonts_Model_Adminhtml_System_Config_Source_Google_Fonts {
		protected $_options = null;

		/**
		 * Options getter
		 *
		 * @return array
		 */
		public function toOptionArray() {
			if($this->_options == null) {
				$this->_options = Mage::getResourceModel('intersales_googlefonts/font_collection')->toOptionArray();
			}

			return $this->_options;
		}
	}
?>