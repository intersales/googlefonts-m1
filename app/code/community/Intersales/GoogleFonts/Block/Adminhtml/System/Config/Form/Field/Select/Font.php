<?php
/**
 * Font config form element renderer
 *
 * @category   Intersales
 * @package    Intersales_GoogleFonts
 * @author     Daniel Rose <dr@intersales>
 */

class Intersales_GoogleFonts_Block_Adminhtml_System_Config_Form_Field_Select_Font extends Mage_Adminhtml_Block_System_Config_Form_Field {

	/**
	 * Retrieve element html
	 *
	 * @param Varien_Data_Form_Element_Abstract $element
	 * @return string
	 */
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element) {
		$html = parent::_getElementHtml($element);

		$html .= '<div id="' . $element->getId() . '_preview" style="font-size:1.2rem; margin-top: 5px;">Lorem ipsum dolor sit</div>';

		$html .= '<script type="text/javascript">new GoogleFontPreview(\'' . $element->getId() . '\', \'' . $element->getId() . '_preview\')</script>';

		$html .= $this->getLayout()->createBlock('adminhtml/widget_button')
			->setType('button')
			->setLabel(Mage::helper('intersales_googlefonts')->__('Update Now'))
			->setOnClick('setLocation(\'' . Mage::helper('adminhtml')->getUrl('adminhtml/font/update') . '\')')
			->setStyle('margin-top: 10px;')
			->toHtml();

		return $html;
	}


} 