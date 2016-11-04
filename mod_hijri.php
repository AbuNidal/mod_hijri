<?php
/**
* Hijri Date for Joomla!
* Author: Ahmad Yussuf - Suryani Masnan, Saqr Quraish Consultant
* Module rebuild by Dr. Ashraf Damra - Joomla! in Arabic
* Website: https://www.jarabic.com
* @copyright   Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
* @license     GNU General Public License version 2 or later
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

