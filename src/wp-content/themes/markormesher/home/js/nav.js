$(document).ready(function () {

	/* set up way points */

	$('.section.hero > .banner').waypoint(function (d) {
		if (d == 'down') {
			setActiveItem('about');
		} else {
			setActiveItem('hero');
		}
	});
	$('.section.about > .waypoint').waypoint(function (d) {
		if (d == 'down') {
			setActiveItem('skills');
			skillsSectionActive()
		} else {
			setActiveItem('about');
		}
	});
	$('.section.skills > .waypoint').waypoint(function (d) {
		if (d == 'down') {
			setActiveItem('blog');
		} else {
			setActiveItem('skills');
			skillsSectionActive()
		}
	});
	/*$('.section.projects > .waypoint').waypoint(function (d) {
		if (d == 'down') {
			setActiveItem('blog');
		} else {
			setActiveItem('projects');
		}
	});*/
	$('.section.blog > .waypoint').waypoint(function (d) {
		if (d == 'down') {
			setActiveItem('contact');
		} else {
			setActiveItem('blog');
		}
	});
	$('.section.contact > .waypoint').waypoint(function () {
		setActiveItem('contact');
	});

	/* set up scroll links */

	$('div.nav ul li a').click(function (e) {
		e.preventDefault();
		var target = $(this).attr('href').substr(1);
		scrollToAnchor(target == '' ? 'hero' : target);
	});

	$('div.hero i.fa-envelope').click(function (e) {
		e.preventDefault();
		var target = $(this).parent().attr('href').substr(1);
		scrollToAnchor(target);
	});
});

function setActiveItem(i) {
	$('div.nav ul li').removeClass('active');
	$('div.nav ul li.' + i).addClass('active');
}