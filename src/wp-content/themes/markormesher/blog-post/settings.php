<?php
$css = array();
$css[] = 'blog-index/css/blog.css';

$js = array();

$includes = array();
$includes[] = 'global/nav.php';
$includes[] = 'blog-post/index.php';

global $activeNavItem, $showHeader;
$activeNavItem = 'blog';
$showHeader = 'Blog';