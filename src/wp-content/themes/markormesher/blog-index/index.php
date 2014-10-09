<div class="page">
	<div class="container column-container">
		<div class="eight column">
			<?php
			if (is_tag()) {
				echo('<h1>#'. single_tag_title('', false) . '</h1>');
			}
			if (have_posts()) {
				$first = true;
				while (have_posts()) {
					the_post();
					if ($first) {
						$first = false;
					} else {
						echo('<div class="hr"><hr/></div>');
					}
					echo('<h3><a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></h3>');
					echo('<p class="date-line">' . get_the_date() . '</p>');
					echo(get_the_excerpt());
					echo('<p><i class="fa fa-arrow-circle-right orange"></i> <a href="' . get_the_permalink() . '" title="' . get_the_title() . '">Read the Full Post</a></p>');
				}
			}
			?>
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