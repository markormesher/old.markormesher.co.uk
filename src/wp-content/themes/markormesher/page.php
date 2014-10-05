<?php
get_header();

if (isset($includes) && is_array($includes)) {
	foreach ($includes as $i) require $i;
}

get_footer();