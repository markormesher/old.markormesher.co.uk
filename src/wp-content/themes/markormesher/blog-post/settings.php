<?php
$css = array();
$css[] = 'global/css/font-defaults.css';
$css[] = 'global/css/header.css';
$css[] = 'global/css/nav.css';
$css[] = 'global/css/columns.css';
$css[] = 'global/css/layout-items.css';
$css[] = 'global/css/pages.css';
$css[] = 'blog-index/css/blog.css';

$js = array();
$js[] = 'global/js/photo-frames.js';

$includes = array();
$includes[] = 'global/nav.php';
$includes[] = 'blog-post/index.php';

global $activeNavItem, $showHeader;
$activeNavItem = 'blog';
$showHeader = 'Blog';