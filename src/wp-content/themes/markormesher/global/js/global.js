$(document).ready(function() {

	// external links
	$("a[rel=external]").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		window.open(this.href, '_blank');
	});

	// smooth scrolling
	$('a[href^=#]').click(function (e) {
		e.preventDefault();
		var target = $(this).attr('href').substr(1);
		scrollToAnchor(target == '' ? 'hero' : target);
	});

});

function scrollToAnchor(aid) {
	try {
		var aTag = $("a[name='" + aid + "']").parent();
		$('html, body').animate({scrollTop: aTag.offset().top}, 800);
	} catch (e) {
		// oh well, we tried!
	}
}