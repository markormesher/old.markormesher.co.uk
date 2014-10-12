<?php
// input sanitisation
if (isset($_POST)) {
	foreach ($_POST as $k => $v) {
		$_POST[$k] = filter_var(trim($v), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	}
}

get_header();

if (isset($includes) && is_array($includes)) {
	foreach ($includes as $i) require $i;
}

get_footer();