<?php
	/**
	 * Observer
	 *
	 * @category   Intersales
	 * @package    Intersales_GoogleFonts
	 * @author     Daniel Rose <dr@intersales>
	 */
	class Intersales_GoogleFonts_Model_Observer {
		/**
		 * @param Varien_Event_Observer $observer
		 */
		public function includeFont($observer) {
			$store = Mage::app()->getStore();

			if(Mage::helper('intersales_googlefonts')->isEnabled($store)) {
				if($observer && ($event = $observer->getEvent())) {
					$block = $event->getBlock();

					if ($block instanceof Mage_Page_Block_Html_Head) {
						$block->addItem('link_rel', 'https://fonts.googleapis.com/css?family=' . Mage::helper('intersales_googlefonts')->getFont($store), 'rel="stylesheet" type="text/css"');
					}
				}
			}
		}
	}