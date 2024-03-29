<?php
/**
 * JEvents Component for Joomla 1.5.x
 *
 * @version     $Id: helper.php 941 2010-05-20 13:21:57Z geraintedwards $
 * @package     JEvents
 * @subpackage  Module JEvents Filter
 * @copyright   Copyright (C) 2008 GWE Systems Ltd
 * @license     GNU/GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html
 * @link        http://www.gwesystems.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

class modJeventsFilterHelper
{
	private $params = null;
	
	function modJeventsFilterHelper($params){
		$this->params = $params;
		// setup for all required function and classes
		$file = JPATH_SITE . '/components/com_jevents/mod.defines.php';
		if (file_exists($file) ) {
			include_once($file);
			include_once(JEV_LIBS."/modfunctions.php");

		} else {
			die ("JEvents Calendar\n<br />This module needs the JEvents component");
		}

		// load language constants
		JEVHelper::loadLanguage('modfilter');
		
	}
	
	function getFilters(){
		JLoader::register('jevFilterProcessing',JEV_PATH."/libraries/filters.php");
		$pluginsDir = JPATH_ROOT.DS.'plugins'.DS.'jevents';
		$filterlist	= explode(",",str_replace(" ","",$this->params->get('filters', "search")));
		//$filters = jevFilterProcessing::getInstance(array("artist","category","reset"),$pluginsDir.DS."filters".DS);
		$filters = jevFilterProcessing::getInstance($filterlist,$pluginsDir.DS."filters".DS);
		return $filters;
	}
	
	
}
