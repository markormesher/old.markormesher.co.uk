var chartsDone = false;
var chartsReady = false;
var updateWhenReady = false;

$(document).ready(function () {
	$('.charts').show();
	$('.chart .percentage').easyPieChart({
		barColor: '#ff590d',
		trackColor: false,
		scaleColor: '#999999'
	});
	chartsReady = true;
	if (updateWhenReady) {
		updateCharts();
	}
});

function skillsSectionActive() {
	if (!chartsDone) {
		chartsDone = true;
		if (chartsReady) {
			updateCharts();
		} else {
			updateWhenReady = true;
		}
	}
}

function updateCharts() {
	$('.android-chart .percentage').data('easyPieChart').update(80);
	$('.java-chart .percentage').data('easyPieChart').update(70);
	$('.xhtml-chart .percentage').data('easyPieChart').update(80);
	$('.php-chart .percentage').data('easyPieChart').update(90);
}