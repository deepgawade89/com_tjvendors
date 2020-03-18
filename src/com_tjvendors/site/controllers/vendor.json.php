<?php
/**
 * @package     TJVendor
 * @subpackage  com_tjvendors
 *
 * @author      Techjoomla <extensions@techjoomla.com>
 * @copyright   Copyright (C) 2009 - 2010 Techjoomla. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
/**
 * Vendor Json controller class
 *
 * @since  __DEPLOY_VERSION__
 */
class TjvendorsControllerVendor extends TjvendorsController
{
	/**
	 * This method loads regions according to selected country
	 * called via jquery ajax
	 *
	 * @return  void
	 */
	public function getRegion()
	{		
		$input         = Factory::getApplication()->input;
		$country       = $input->get('country', 0, 'INT');
		$defaultRegion = array("id" => 0, "region" => JText::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'),"region_jtext" => JText::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'));
		$utilitiesObj  = TJVendors::utilities();
		$regions       = $utilitiesObj->getRegions($country);
		array_unshift($regions, $defaultRegion);
			
		echo new JResponseJson($regions, Text::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'));
	}

	/**
	 * loads city according to selected country
	 * called via jquery ajax
	 *
	 * @return  void
	 */
	public function getCity()
	{
		$input       = Factory::getApplication()->input;
		$country     = $input->get('country', 0, 'INT');
		$defaultCity = array("id" => 0, "city" => JText::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'),"city_jtext" => JText::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'));

		// Use helper file function
		$utilitiesObj  = TJVendors::utilities();
		$city = $utilitiesObj->getCities($country);
		array_unshift($city, $defaultCity);
		echo new JResponseJson($city, JText::_('COM_TJVENDORS_FORM_LIST_SELECT_OPTION'));
	}
}
