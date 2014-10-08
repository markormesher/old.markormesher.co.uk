<?php
$css = array();
$css[] = 'blog-index/css/blog.css';

$js = array();
$js[] = 'global/js/photo-frames.js';

$includes = array();
$includes[] = 'global/nav.php';
$includes[] = 'blog-post/index.php';

global $activeNavItem, $showHeader;
$activeNavItem = 'blog';
$showHeader = 'Blog';