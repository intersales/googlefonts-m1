<?php
	/**
	 * Font admin controller
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */

	class Intersales_GoogleFonts_Adminhtml_FontController extends Mage_Adminhtml_Controller_Action {

		/**
		 * Update action
		 */
		public function updateAction() {
			$cH = curl_init('http://fonts.googleapis.com/css?family=*');
			curl_setopt($cH, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($cH);

			$matches = array();
			if(preg_match_all('/font-family: \'((\w|\s|-)+)\'/', $result, $matches)) {
				if(count($matches) == 3 && count($matches[1]) > 0) {
					foreach($matches[1] as $match) {
						$fontId = Mage::getResourceModel('intersales_googlefonts/font')->getIdByName($match);

						if(!$fontId) {
							$font = Mage::getModel('intersales_googlefonts/font');
							$font->setName($match)->save();
							unset($font);
						}
					}

					$this->_getSession()->addSuccess(Mage::helper('intersales_googlefonts')->__('Fonts has been updated successfully!'));
				} else {
					$this->_getSession()->addSuccess(Mage::helper('intersales_googlefonts')->__('Error while updating fonts!!'));
				}
			} else {
				$this->_getSession()->addSuccess(Mage::helper('intersales_googlefonts')->__('Error while updating fonts!!'));
			}

			$this->_redirectUrl($this->_getRefererUrl());
		}
	}