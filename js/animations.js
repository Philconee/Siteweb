window.onload = function () {
	diagram();
};
window.onresize = function () {
	diagram();
};

function diagram() {

	var width = document.body.offsetWidth;
	var color = 'white';
	var angle1 = 110;
	var angle2 = 110;

	if (width < 721) {
		color = 'black';
		angle1 = 300;
		angle2 = 200;
	}

	CanvasJS.addColorSet("myTheme", [ //colorSet Array
		"#54FFD7",
		"#2D7FAD",
		"#4681E3",
		"#FFC361",
		"#FAB55A"
	]);

	var chart1 = new CanvasJS.Chart("chart1", {
		colorSet: "myTheme",
		interactivityEnabled: false,
		backgroundColor: "#54545800",
		animationEnabled: true,
		title: {
			text: ""
		},
		data: [{
			type: "doughnut",
			innerRadius: "70%",
			radius: "80%",
			showInLegend: false,
			indexLabelFontColor: color,
			indexLabel: "{name} #percent%",
			dataPoints: [{
					y: 75,
					name: "ICO Funds"
				},
				{
					y: 11.5,
					name: "AirDrop"
				},
				{
					y: 13.5,
					name: "Team & Advisors"
				}
			]
		}]
	});
	var chart2 = new CanvasJS.Chart("chart2", {
		colorSet: "myTheme",
		interactivityEnabled: false,
		backgroundColor: "#54545800",
		animationEnabled: true,
		title: {
			text: ""
		},
		data: [{
			type: "doughnut",
			innerRadius: "70%",
			showInLegend: false,
			radius: "80%",
			indexLabelFontColor: color,
			indexLabel: "{name} #percent%",
			dataPoints: [{
					y: 10,
					name: "Capital in Istrium company"
				},
				{
					y: 30,
					name: "Communication & Marketing "
				},
				{
					y: 35,
					name: "Development of IT infrastructures"
				},
				{
					y: 20,
					name: "Bonus for creators and developers"
				},
				{
					y: 5,
					name: "Operational expense charges"
				}
			]
		}]
	});
	chart1.render();
	chart2.render();

	function explodePie(e) {
		if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
		} else {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
		}
		e.chart.render();
	}


}