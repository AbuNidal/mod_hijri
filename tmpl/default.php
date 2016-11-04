<?php
/**------------------------------------------------------------------------
* Hijri Date for Joomla!
* Author: Dr. Ashraf Damra - Joomla! in Arabic
* Website: https://www.jarabic.com
* @copyright   Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
* @license     GNU General Public License version 2 or later
-------------------------------------------------------------------------*/
// no direct access
    defined('_JEXEC') or die('Restricted access');
$doc =JFactory::getDocument();

// $doc->addStyleSheet(JURI::root() . 'modules/mod_hijri/hijri/style.css');

?>

<script language="javascript" type="text/javascript" src="modules/mod_hijri/hijri/tarikh.js"></script>
<?php
$arah 		= $params->get( 'arah' );
$masihi		= intval( $params->get( 'masihi', 1 ) );
$hari		= intval( $params->get( 'hari', 1 ) );
$format		= intval( $params->get( 'format', 1 ) );
$manual		= trim( $params->get( 'manual' ) );
$sebelum	= trim( $params->get( 'sebelum' ) );
$selepas	= trim( $params->get( 'selepas' ) );

if ($format  == 1 )	{
	echo("\n<DIV dir=\"{$arah}\" align=\"center\">");
	} else {
	echo("\n<style type=\"text/css\">");
	echo("\n<!--");
	echo("\n.paparan {\n");
	echo strip_tags($manual);
	echo("\n-->\n</style>");
	echo("\n<DIV dir=\"{$arah}\" class=\"paparan\">");
	}

echo("\n{$sebelum}");
echo("\n<br>");
echo("\n<script language=\"javascript\" type=\"text/javascript\">");

switch ( $masihi ) {

	case 2:
      if ($hari  == 1 )
         echo("\nHari();");
      echo("\nPaparHijri();");
      break;

    case 1:
      if ($hari  == 1 )
          echo("\nHari();");
      echo("\nPaparHijri();");
      echo("\nTurun();");
      echo("\nPaparMasihi();");
      break;
}

echo("\n</script>");
echo("\n<br>");
echo("\n{$selepas}");
echo("\n</DIV>");
?>
