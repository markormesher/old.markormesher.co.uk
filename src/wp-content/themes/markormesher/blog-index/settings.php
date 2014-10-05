<?php
$css = array();
$css[] = 'global/css/font-defaults.css';
$css[] = 'global/css/header.css';
$css[] = 'global/css/nav.css';
$css[] = 'global/css/columns.css';
$css[] = 'global/css/layout-items.css';
$css[] = 'global/css/pages.css';

$js = array();

$includes = array();
$includes[] = 'global/nav.php';
$includes[] = 'blog-index/index.php';

global $activeNavItem, $showHeader;
$activeNavItem = 'blog';
$showHeader = 'Blog';