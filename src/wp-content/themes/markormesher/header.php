<?php
global $css, $js, $includes;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="width=device-width"/>
		<title><?php
			if (is_tag()) {
				single_tag_title('Tagged: #');
			} else {
				wp_title('');
			}
		?></title>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/js/jquery.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/global/js/global.js"></script>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900"/>
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