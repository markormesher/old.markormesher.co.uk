<?php

// fix blank title on home page
add_filter('wp_title', 'mo_wp_title_for_home');
function mo_wp_title_for_home($title) {
	if (empty($title) && (is_home() || is_front_page())) {
		return get_bloginfo('title') . (strlen(get_bloginfo('description')) == 0 ? '' : ' | ' . get_bloginfo('description'));
	}
	return $title;
}