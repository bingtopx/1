<?php
$GLOBALS['_ta_rp_key'] = '8f68118932e0c129eb44996728c5844a';
$GLOBALS['_ta_reverse_proxy_id'] = 'q42c0g';

require 'bootloader_69cdaf44f8caecdc2ad488fc75e9a4c9.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>