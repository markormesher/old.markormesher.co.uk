<div class="page">
	<div class="container column-container">
		<div class="eight column">
			<p>Content</p>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="three column">
			<h3>Popular Tags</h3>
			<ul class="tag-list">
				<?php
				$tags = get_tags(array('orderby' => 'count', 'number' => 6));
				foreach ($tags as $t) {
					$link = get_tag_link($t->term_id);
					echo('<li><a href="' . $link . '" title="' . $t->name . ' posts">#' . $t->name . '</a></li>');
				}
				?>
			</ul>
		</div>
		<div class="column-fix"></div>
	</div>
</div>