<?php
	header('X-Frame-Options: DENY');
	global $css, $js, $includes;

	// is this a 404? could it be a project link?
	if (is_404()) {
		$attempt = substr($_SERVER['REQUEST_URI'], 1);
		$projectsLinks = [
			'bf' => 'projects/bf/',
			'snake' => 'projects/snake',
			'3peaks' => 'projects/three-peaks',
			'3p' => 'projects/three-peaks'
		];
		if (isset($projectsLinks[$attempt])) {
			header('Location: ' . $projectsLinks[$attempt]);
		}
	}
?><!DOCTYPE html>
<!-- NEW SERVER -->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="width=device-width"/>
		<title><?php
			if (is_tag()) {
				single_tag_title('Tagged: #');
			} elseif (is_404()) {
				echo('404: Nothing Found');
			} else {
				wp_title('');
			}
			?></title>

		<!-- ANTI CLICKJACK -->
		<style id="antiClickjack" type="text/css">
			body {
				display: none !important;
			}
		</style>
		<script type="text/javascript">
			if (self === top) {
				var antiClickjack = document.getElementById("antiClickjack");
				antiClickjack.parentNode.removeChild(antiClickjack);
			} else {
				top.location = self.location;
			}
		</script>
		<!-- END ANTI CLICKJACK -->

		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/js/jquery.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/js/global.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/fancybox/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/js/photo-frames.js"></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/fancybox/jquery.fancybox.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/font-awesome/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/font-defaults.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/nav.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/columns.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/pages.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/footer.css"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/global/css/layout-items.css"/>
		<?php
		$settingsFile = false;
		if (is_page()) {
			while (have_posts()) {
				the_post();
				$content = strip_tags(get_the_content());
				if (substr($content, 0, 4) == 'DIR:') {
					$settingsFile = substr($content, 4) . '/settings.php';
				}
			}
		} elseif (is_single()) {
			$settingsFile = 'blog-post/settings.php';
		} elseif (is_404()) {
			define('PAGE_ERROR', 404);
			$settingsFile = 'error/settings.php';
		} else {
			$settingsFile = 'blog-index/settings.php';
		}
		if ($settingsFile) {
			require_once($settingsFile);
			if (isset($css) && is_array($css)) {
				foreach ($css as $c) {
					echo('		<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/' . $c . '"/>' . "\n");
				}
			}
			if (isset($js) && is_array($js)) {
				foreach ($js as $j) {
					echo('		<script type="text/javascript" src="' . get_template_directory_uri() . '/' . $j . '"></script>' . "\n");
				}

			}
		}
		?>
	</head>

	<body <?php body_class(); ?>>
