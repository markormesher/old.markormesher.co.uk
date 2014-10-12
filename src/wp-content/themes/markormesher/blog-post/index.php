<?php
while (have_posts()) {
	the_post();
	break;
}
?><div class="page">
	<div class="container column-container">
		<h1><?php the_title(); ?></h1>
		<div class="eight column">
			<p class="date-line"><?php the_date(); ?></p>
			<?php the_content(); ?>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="three column">
			<div class="hr hide-on-large block-on-small"><hr/></div>

			<h3 class="ta-center"><a href="/blog" title="Mark Ormesher's programming blog"><i class="fa fa-arrow-circle-left"></i> Back to Blog</a></h3>

			<div class="hr"><hr/></div>

			<h3>Tags</h3>
			<p class="tag-list">
			<?php
			$tags = get_the_tags();
			$output = array();
			foreach ($tags as $t) {
				$link = get_tag_link($t->term_id);
				$output[] = '<a href="' . $link . '" title="' . $t->name . ' posts">#' . $t->name . '</a>';
			}
			echo(implode('&nbsp;&nbsp; ', $output));
			?>
			</p>

			<div class="hr"><hr/></div>

			<?php echo do_shortcode('[ssba]'); ?>
			<p class="caption">(Because sharing is caring)</p>
		</div>
		<div class="column-fix"></div>
	</div>
</div>