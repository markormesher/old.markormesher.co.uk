<?php
$active = isset($activeNavItem) ? $activeNavItem : 'hero';
$header = isset($showHeader) ? $showHeader : false;
if ($header) { ?>
<div class="header">
	<?php
	if (strpos($header, '<') > -1) {
		echo('<p>' . $header . '</p>');
	} else {
		echo('<p><span>Mark Ormesher:</span> ' . $header . '</p>');
	}
	?>
	<div class="nav">
		<ul>
			<li class="<?= ($active == 'hero' ? 'active ' : ''); ?>hero"><a href="/" title="Mark Ormesher">ME</a></li>
			<li class="<?= ($active == 'about' ? 'active ' : ''); ?>about"><a href="/about" title="Mark Ormesher: programmer and teacher">ABOUT</a></li>
			<li class="<?= ($active == 'skills' ? 'active ' : ''); ?>skills"><a href="/skills" title="Programming and development skills">SKILLS</a></li>
			<!--<li class="projects"><a href="/projects">PROJECTS</a></li>-->
			<li class="<?= ($active == 'blog' ? 'active ' : ''); ?>blog"><a href="/blog" title="Programming and development blog">BLOG</a></li>
			<li class="<?= ($active == 'contact' ? 'active ' : ''); ?>contact"><a href="/contact" title="Contact Mark Ormesher">CONTACT</a></li>
		</ul>
	</div>
</div>
<?php } else { ?>
<div class="nav floating">
	<ul>
		<li class="<?= ($active == 'hero' ? 'active ' : ''); ?>hero"><a href="/" title="Mark Ormesher">ME</a></li>
		<li class="<?= ($active == 'about' ? 'active ' : ''); ?>about"><a href="/about" title="Mark Ormesher: programmer and teacher">ABOUT</a></li>
		<li class="<?= ($active == 'skills' ? 'active ' : ''); ?>skills"><a href="/skills" title="Programming and development skills">SKILLS</a></li>
		<!--<li class="projects"><a href="/projects">PROJECTS</a></li>-->
		<li class="<?= ($active == 'blog' ? 'active ' : ''); ?>blog"><a href="/blog" title="Programming and development blog">BLOG</a></li>
		<li class="<?= ($active == 'contact' ? 'active ' : ''); ?>contact"><a href="/contact" title="Contact Mark Ormesher">CONTACT</a></li>
	</ul>
</div>
<?php } ?>