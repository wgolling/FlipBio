<?php
/**
 * Helper class for Flip Bio module
 * 
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModFlipBioHelper {
	/**
	 * Sets up info array.
	 *
	 * @param array $params An object containing the module parameters
	 * 
	 * @access public
	 */
	public static function getInfo($params) {
		$result = array();
		$result['front'] = array();
		array_push($result['front'], $params->get('name'));
		array_push($result['front'], $params->get('joined_ind'));
		array_push($result['front'], $params->get('joined'));
		array_push($result['front'], $params->get('experience'));
		array_push($result['front'], $params->get('prof_vol'));
		array_push($result['front'], $params->get('pub'));
		array_push($result['front'], $params->get('comm_vol'));
		array_push($result['front'], $params->get('specialty'));
		array_push($result['front'], $params->get('coffee'));
		$result['back'] = array();
		array_push($result['back'], $params->get('skill'));
		array_push($result['back'], $params->get('theme'));
		array_push($result['back'], $params->get('fad'));
		array_push($result['back'], $params->get('food'));
		array_push($result['back'], $params->get('risk'));
		array_push($result['back'], $params->get('fav_char'));
		array_push($result['back'], $params->get('doppel'));
		array_push($result['back'], $params->get('trip'));
		array_push($result['back'], $params->get('genre'));
		array_push($result['back'], $params->get('concert'));
		return $result;
	}
	/**
	 * Sets up labels array.
	 *
	 * @param array $params An object containing the module parameters
	 * 
	 * @access public
	 */
	public static function getLabels($params) {
		$result = array();
		$result['front'] = array();
		array_push($result['front'], "Name");
		$occ = $params->get('occupation');
		if ($occ == 0) {
			array_push($result['front'], "Pedorthist Since:");
		} elseif ($occ == 1) {
			array_push($result['front'], "Office Admin Since:");
		} else {
			array_push($result['front'], "Joined Industry:");			
		}
		array_push($result['front'], "Joined Us:");
		array_push($result['front'], "Experience:");
		array_push($result['front'], "Industry Volunteering:");
		array_push($result['front'], "Publications:");
		array_push($result['front'], "Other Volunteering");
		array_push($result['front'], "Specialty:");
		array_push($result['front'], "Coffee:");
		$result['back'] = array();
		array_push($result['back'], "Useless Skill:");
		array_push($result['back'], "Theme Song:");
		array_push($result['back'], "Favourite Fad");
		array_push($result['back'], "Weirdest Food:");
		array_push($result['back'], "Biggest Risk:");
		array_push($result['back'], "No.1 Sitcom Character:");
		array_push($result['back'], "Doppelganger:");
		array_push($result['back'], "Favourite Trip:");
		array_push($result['back'], "Favourite Music Genre:");
		array_push($result['back'], "Favourite Concert:");
		return $result;
	}
	/**
	 * Sets up photos array.
	 *
	 * @param array $params An object containing the module parameters
	 * 
	 * @access public
	 */
	public static function getPhotos($params) {
		$result = array();
		// If the image parameter is not set, use the default.
		$mediaPath = JURI::base() . 'modules/mod_flip_bio/media/';
		$front = $params->get('prof_img');
		$result['front'] = ($front ? JURI::base().$front : $mediaPath.'defaultfront.png');
		$back  = $params->get('pers_img');
		$result['back']  = ($back  ? JURI::base().$back  : $mediaPath.'defaultback.png');
		return $result;
	}	
	/**
	 * Sets up subforms array.
	 *
	 * @param array $params An object containing the module parameters
	 * 
	 * @access public
	 */
	public static function getSubformContent($params) {
		return $params->get('personal_fields');
	}


}
