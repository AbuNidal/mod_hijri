<?php
/**
* Hijri Date for Mambo and Joomla!
* Author: Ahmad Yussuf - Suryani Masnan, Saqr Quraish Consultant
* Website: http://sqco.coconia.net
* Date: 9 Safar 1428 H / 26 Febuary 2007 
* Version 2.0.0: New: With new formating setting and two more languages: Turkish and Deutsch
* Version 1.2.1: Display format option
* Version 1.1.1: Adjustment Hijri Date based on moon-sighting
* Version 1.0.1: French translation added by Philhadj <http://www.philhadj.com>
**/
/**************************************************************************/
/* This program is free software. You can redistribute it and/or modify   */
/* it under the terms of the GNU General Public License as published by   */
/* the Free Software Foundation; either version 2 of the License.         */
/**************************************************************************/


// no direct access
defined( '_JEXEC' ) or die;

$adjust	= intval( $params->get( 'adjust', 0 ) );
$bahasa = $params->get( 'bahasa' );

echo("\n<script language=\"javascript\" type=\"text/javascript\">\nvar adjust = {$adjust};\n</script>");
echo("\n<script language=\"javascript\" type=\"text/javascript\" src=\"modules/mod_hijri/hijri/{$bahasa}.js\"></script>");


require JModuleHelper::getLayoutPath('mod_hijri', 'default');

