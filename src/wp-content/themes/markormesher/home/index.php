<div class="section hero full-screen">
	<div class="anchor"><a name="hero"></a></div>
	<div class="banner">
		<h1>I'm Mark Ormesher.</h1>
		<p>
			I’m a London based <span>programmer</span> and<br/> <span>developer</span>, creating <span>websites</span> and<br/> <span>mobile apps</span> for people and businesses.
		</p>
		<div class="hr">
			<hr/>
		</div>
		<ul class="icons">
			<li><a href="https://www.twitter.com/m_s_ormo" rel="external"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.linkedin.com/in/markormesher" rel="external"><i class="fa fa-linkedin-square"></i></a></li>
			<li><a href="https://www.github.com/markormesher" rel="external"><i class="fa fa-github"></i></a></li>
			<li><a href="http://www.stackoverflow.com/users/3227795/mark-ormesher" rel="external"><i class="fa fa-stack-overflow"></i></a></li>
			<li><a href="/contact"><i class="fa fa-envelope"></i></a></li>
		</ul>
	</div>
	<p class="scroll-icon hide-on-small"><a href="#about"><i class="fa fa-arrow-circle-down"></i></a></p>
</div>

<div class="section about">
	<div class="anchor"><a name="about"></a></div>
	<div class="waypoint"></div>
	<div class="container column-container">
		<h2>About Me</h2>
		<div class="seven column">
			<p><strong>Hi! I'm <em>Mark</em></strong>.</p>
			<p>I'm a programmer, developer and student in London. I've been coding for over 9 years, including <em>full-stack web development</em> and, most recently, <em>Android development</em>.</p>
			<div class="hr">
				<hr/>
			</div>
			<p>Right now I'm employed as the Lead Android Application Developer for <a href="http://www.unitu.co.uk/" title="Unitu - closing the feedback loop in higher eduction" rel="external">Unitu</a>, I work as a teaching assistant and co-ordinate Android training sessions at King's College London University, I'm a regular hackathon attendee, and I study Computer Science.</p>
			<p>In the past I've worked for five years as a self-employed web developer, I've taught maths and basic ICT skills in a small South American village, I've built RC robots, and I've raised close to &pound;9,000 for various charities.</p>
			<p>And I can breathe fire.</p>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="four column">
			<div class="permanent-photo-frame about-photo">
				<div>&nbsp;</div>
			</div>
		</div>
		<div class="column-fix"></div>
	</div>
</div>

<div class="section skills">
	<div class="anchor"><a name="skills"></a></div>
	<div class="waypoint"></div>
	<div class="container column-container">
		<h2>Skills</h2>
		<div class="charts hide-on-small">
			<div class="chart android-chart">
				<div class="percentage" data-percent="0"></div>
				<div class="label"><p>Android</p></div>
			</div>
			<div class="chart java-chart">
				<div class="percentage" data-percent="0"></div>
				<div class="label"><p>Java</p></div>
			</div>
			<div class="chart xhtml-chart">
				<div class="percentage" data-percent="0"></div>
				<div class="label"><p>XHTML &amp; CSS</p></div>
			</div>
			<div class="chart php-chart">
				<div class="percentage" data-percent="0"></div>
				<div class="label"><p>PHP</p></div>
			</div>
		</div>
		<div class="five-half column">
			<ul>
				<li>
					<strong>Android Application Development</strong> - As a self-taught Android enthusiast, my proficiency with the platform has grown rapidly since I started. I am currently the <em>Lead Android Application Developer</em> at Unitu, I co-ordinate Android training sessions at King's College London University, and I am preparing an app framework library that I plan to release as <em>open-source</em> material.
				</li>
				<li>
					<strong>Software Development</strong> - For desktop software I am primarily a <em>Java</em> developer, but I also have some experience with <em>Python</em> and, to a lesser extent, <em>C#</em>.
				</li>
				<li>
					<strong>Teaching</strong> - Between 2012-2013 I spent 12 months in South America, <em>volunteering</em> as a secondary school maths teacher in a very remote Guyanese village. I am now also employed by King's College London University as a <em>teaching assistant</em> for some first-year modules.
				</li>
			</ul>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="five-half column">
			<ul>
				<li>
					<strong>Website Development</strong> - Since 2006 I have been working with websites, from server admin, through back-end development and down to UI design. I've created sites for <em>content management</em>, <em>ecommerce</em> and access control, using both 3rd-party products and bespoke packages in various projects.
				</li>
				<li>
					<strong>Electronics &amp; PC Hardware</strong> - For nearly three years I worked as a PC/laptop <em>repair technician</em>, and I have built several electronic projects, including a small RPi-powered <em>self-driving robot</em>.
				</li>
				<li>
					<strong>Fire Breathing</strong> - No, really, I'm a trained fire breather and eater.
				</li>
			</ul>
		</div>
		<div class="column-fix"></div>
	</div>
</div>

<!--<div class="section projects">
	<div class="anchor"><a name="projects"></a></div>
	<div class="waypoint"></div>
	<div class="container column-container">
		<h2>Projects</h2>
		<p>Content</p>
		<p>Content</p>
		<p>Content</p>
		<p>Content</p>
		<p>Content</p>
		<p>Content</p>
		<p>Content</p>
	</div>
</div>-->

<div class="section blog">
	<div class="anchor"><a name="blog"></a></div>
	<div class="waypoint"></div>
	<div class="container column-container">
		<div class="eight column">
			<h2>Blog</h2>
			<?php
			$latestPosts = new WP_Query('showposts=2');
			$first = true;
			while ($latestPosts->have_posts()) {
				$latestPosts->the_post();
				if ($first) {
					$first = false;
				} else {
					echo('<br/>');
				}
				echo('<h3><a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></h3>');
				echo('<p class="date-line">' . get_the_date() . '</p>');
				echo(get_the_excerpt());
				echo('<p><i class="fa fa-arrow-circle-right orange"></i> <a href="' . get_the_permalink() . '" title="' . get_the_title() . '">Read the Full Post</a></p>');
			}
			?>
			<div class="hr">
				<hr/>
			</div>
			<h3 class="full-blog-link orange"><a href="/blog" title="Programming blog from Mark Ormesher"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Full Blog</a></h3>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="three column">
			<h3>Popular Tags</h3>
			<ul class="blog-tag-list">
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

<div class="section contact">
	<div class="anchor"><a name="contact"></a></div>
	<div class="waypoint"></div>
	<div class="container column-container">
		<h2>Contact Me</h2>
		<div class="seven column">
			<p></p>
			<p>If you want to get in touch with me, please fire away on any of these channels. <em>I'd love to hear from you</em>, and I promise I'll get back to you within a day or so.</p>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="four column">
			<p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;+44 (0) 7775 932063</p>
			<p><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;me@markormesher.co.uk</p>
			<p><i class="fa fa-skype"></i>&nbsp;&nbsp;&nbsp;&nbsp;mark.ormo</p>
			<p><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;@m_s_ormo</p>
		</div>
		<div class="column-fix"></div>
	</div>
</div>