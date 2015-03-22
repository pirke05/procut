<?php
/**
* @version   $Id: index.php 6263 2013-01-01 22:00:40Z kevin $
 * @author ThemeRox http://www.themerox.com
 * @copyright Copyright (C) 2007 - 2013 ThemeRox
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// load and inititialize gantry class
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

?>
<?php if (JRequest::getString('type')=='raw'):?>
	<jdoc:include type="component" />
<?php else: ?>
	<!doctype html>
	<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
		<head>
			<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
			<meta name="viewport" content="width=960px">
			<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
			<meta name="viewport" content="width=1200px">
			<?php else : ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<?php endif; ?>
			<?php
				$gantry->displayHead();
				$gantry->addLess('global.less', 'master.css', 8, array('headerstyle'=>$gantry->get('headerstyle','dark')));
			?>
		</head>
		<body class="component-body">
			<div class="component-content">
		    	<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
		</body>
	</html>
<?php endif; ?>
<?php
$gantry->finalize();
?>
