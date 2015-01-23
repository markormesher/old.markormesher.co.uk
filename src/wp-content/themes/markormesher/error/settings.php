<?php
$css = array();

$js = array();

$includes = array();
$includes[] = 'global/nav.php';
$includes[] = 'error/index.php';

global $activeNavItem, $showHeader;
$activeNavItem = '';
switch (PAGE_ERROR) {
	case 404:
		$showHeader = '404: <span>Nothing Found</span>';
		break;
	default:
		$showHeader = 'Error: <span>Unknown Cause</span>';
		break;
}