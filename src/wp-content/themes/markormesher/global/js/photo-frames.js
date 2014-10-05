$(document).ready(function () {

	// get frames
	var frames = $('.photo-frame');

	for (var fi = 0; fi < frames.length; ++fi) {
		// get info
		f = $(frames[fi]);
		var imageUrl = f.attr('data-source');
		var originalW = f.attr('data-originalWidth');
		var originalH = f.attr('data-originalHeight');
		var frameWidth = f.attr('data-frameWidth');

		// set up inner div
		var div = f.find('div').eq(0);
		div.css({
			position: 'absolute',
			top: 0,
			bottom: 0,
			left: 0,
			right: 0
		});
		div.html('');
		div.css({
			borderSize: '0.4em',
			borderStyle: 'solid',
			borderColor: '#222222',
			'background-image': 'url(' + imageUrl + ')',
			'background-repeat': 'no-repeat',
			'background-position': 'center',
			'background-size': 'cover'
		});

		// set up outer div
		f.css({
			width: (frameWidth * 100) + '%',
			marginTop: '0.4em',
			marginBottom: '1.2em',
			marginLeft: ((1 - frameWidth) / 0.02) + '%',
			marginRight: ((1 - frameWidth) / 0.02) + '%',
			paddingBottom: Math.round((originalH/originalW) * 100 * frameWidth) + '%'
		});
	}

});