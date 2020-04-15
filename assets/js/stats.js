 // Chart.
 function initChart( { date, confirmed, deaths, recovered } ) {
	// Localize moment.js
	moment.locale('ka')

	const config = {
		type: 'line',
		data: {
			labels: date,
			datasets: [{
				label: 'დაფიქსირებული',
				backgroundColor: '#F79403',
				borderColor: '#CCCCCC',
				pointBorderColor:'#F79403',
				data: confirmed,
				fill: false
			},
			{
				label: 'გამოჯანმრთელებული',
				backgroundColor: '#0AC918',
				borderColor: '#CCCCCC',
				pointBorderColor:'#0AC918',
				data: recovered,
				fill: false
			},
			{
				label: 'გარდაცვლილი',
				backgroundColor: '#E84F4F',
				borderColor: '#CCCCCC',
				pointBorderColor:'#E84F4F',
				data: deaths,
				fill: false
			}
		]
		},
		options: {
			layout: {
				padding: {
				right: 20
				}
			},
			responsive: true,
			defaultFontFamily: 'helvetica-regular',
			title: {
				display: false,
				text: ''
			},
			legend: {
				display: false
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					type: 'time',
					gridLines: {
						display: false
					},
					time: {
						minUnit: 'month'
					}
				}]
			}
		}
	};

	window.onload = function () {
		const ctx = document.getElementById('canvas').getContext('2d');
		window.myLine = new Chart(ctx, config);
	};
}

initChart( window.covidData );
