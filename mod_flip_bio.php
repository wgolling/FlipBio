<?php
/**
 * Flip Bio Module Entry Point
 */
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

// print_r($params);

// Get document object.
$document = JFactory::getDocument();
// Get module path.
$modulePath = JURI::base() . 'modules/mod_flip_bio/';
// Add JS and CSS.
$document->addScript($modulePath.'media/script.js');
$document->addStyleSheet($modulePath.'media/stylesheet.css');

// Initialize variables to be used by the template.
$photos = ModFlipBioHelper::getPhotos($params);
$labels = ModFlipBioHelper::getLabels($params);
$info   = ModFlipBioHelper::getInfo($params);
$subfields = ModFlipBioHelper::getSubformContent($params);

$number_of_divs = count(get_object_vars($subfields));
$spacing = 5;
$row_height = 5;
$padding = 100 - $number_of_divs*($row_height + ($spacing / 2));
$style = 
	"#flip-bio-back-" . $module->id . "{ " .
		"grid-row-gap: " . $spacing . "px; ".
		"grid-template-rows: " . $padding . "% repeat(" . $number_of_divs . ", " . $row_height . "%); " .
  		"grid-template-columns: 60% 43%; " .  
  		"justify-content: end;" .
		"}";
$document->addStyleDeclaration($style);

// Load template file.
require JModuleHelper::getLayoutPath('mod_flip_bio');
