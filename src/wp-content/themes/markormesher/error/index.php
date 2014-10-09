<div class="page">
	<div class="container column-container">
		<div class="eight column">
			<h1>Oops!</h1>
			<p>Unfortunately, there's been an error - <em>sorry!</em></p>
			<?php
			switch (PAGE_ERROR) {
				case 404:
			?>
			<p>A <em>404</em> error means that the resource you're looking for couldn't be found. The link may be wrong, or the resource may have moved or been deleted.</p>
			<?php
					break;
				default:
			?>
			<p>An <em>unknown</em> error means that my site isn't actually sure what went wrong. This is very rare, and is often caused by something external to the site, like a temporary problem on my server.</p>
			<?php
					break;
			}
			?>
			<p>This error has been logged, and I'll look into it <em>asap</em>.</p>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="three column">
			<h3>Where Now?</h3>
			<ul class="inside">
				<li><a href="/" title="Mark Ormesher">Start at the home page</a></li>
				<li><a href="/blog" title="Mark Ormesher's programming blog">Check out my blog</a></li>
				<li><a href="/about" title="Mark Ormesher technical profile">Read my profile</a></li>
				<li><a href="/skills" title="Mark Ormesher's programming skills">Read my skills summary</a></li>
			</ul>
		</div>
		<div class="column-fix"></div>
	</div>
</div>