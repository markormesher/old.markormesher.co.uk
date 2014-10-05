<?php
$active = isset($activeNavItem) ? $activeNavItem : 'hero';
$header = isset($showHeader) ? $showHeader : false;
if ($header) { ?>
<div class="header">
	<p><span>Mark Ormesher:</span> <?=$header;?></p>
	<div class="nav">
		<ul>
			<li class="<?= ($active == 'hero' ? 'active ' : ''); ?>hero"><a href="/">ME</a></li>
			<li class="<?= ($active == 'about' ? 'active ' : ''); ?>about"><a href="/about">ABOUT</a></li>
			<li class="<?= ($active == 'skills' ? 'active ' : ''); ?>skills"><a href="/skills">SKILLS</a></li>
			<!--<li class="projects"><a href="/projects">PROJECTS</a></li>-->
			<li class="<?= ($active == 'blog' ? 'active ' : ''); ?>blog"><a href="/blog">BLOG</a></li>
			<li class="<?= ($active == 'contact' ? 'active ' : ''); ?>contact"><a href="/contact">CONTACT</a></li>
		</ul>
	</div>
</div>
<?php } else { ?>
<div class="nav floating">
	<ul>
		<li class="<?= ($active == 'hero' ? 'active ' : ''); ?>hero"><a href="/">ME</a></li>
		<li class="<?= ($active == 'about' ? 'active ' : ''); ?>about"><a href="/about">ABOUT</a></li>
		<li class="<?= ($active == 'skills' ? 'active ' : ''); ?>skills"><a href="/skills">SKILLS</a></li>
		<!--<li class="projects"><a href="/projects">PROJECTS</a></li>-->
		<li class="<?= ($active == 'blog' ? 'active ' : ''); ?>blog"><a href="/blog">BLOG</a></li>
		<li class="<?= ($active == 'contact' ? 'active ' : ''); ?>contact"><a href="/contact">CONTACT</a></li>
	</ul>
</div>
<?php } ?>