$(function () {
	"use strict";
	// chart 1
		// Highcharts.chart('chart1', {
		// 	chart: {
		// 		height: 350,
		// 		plotBackgroundColor: null,
		// 		plotBorderWidth: null,
		// 		plotShadow: false,
		// 		type: 'pie',
		// 		styledMode: true
		// 	},
		// 	credits: {
		// 		enabled: false
		// 	},
		// 	title: {
		// 		text: 'Sessions Device'
		// 	},
		// 	subtitle: {
		// 		text: 'Ratio of devices use by users'
		// 	},
		// 	tooltip: {
		// 		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		// 	},
		// 	accessibility: {
		// 		point: {
		// 			valueSuffix: '%'
		// 		}
		// 	},
		// 	plotOptions: {
		// 		pie: {
		// 			allowPointSelect: true,
		// 			cursor: 'pointer',
		// 			innerSize: 120,
		// 			dataLabels: {
		// 				enabled: true,
		// 				format: '<b>{point.name}</b>: {point.percentage:.1f} %'
		// 			},
		// 			showInLegend: true
		// 		}
		// 	},
		// 	//colors: ['#ff9ad5', '#50b5ff', '#5a65dc'],
		// 	series: [{
		// 		name: 'Users',
		// 		colorByPoint: true,
		// 		data: [{
		// 			name: 'Desktop',
		// 			y: 56
		// 		}, {
		// 			name: 'Mobile',
		// 			y: 30
		// 		}, {
		// 			name: 'Tablet',
		// 			y: 14
		// 		}]
		// 	}],
		// 	responsive: {
		// 		rules: [{
		// 			condition: {
		// 				maxWidth: 500
		// 			},
		// 			chartOptions: {
		// 				plotOptions: {
		// 					pie: {
		// 						innerSize: 140,
		// 						dataLabels: {
		// 							enabled: false
		// 						}
		// 					}
		// 				},
		// 			}
		// 		}]
		// 	}
		// });
	// chart 2
	// Create the chart
	Highcharts.chart('chart2', {
		chart: {
			height: 350,
			type: 'column',
			styledMode: false
		},
		credits: {
			enabled: false
		},
		title: {
			text: 'Browser usage'
		},
		subtitle: {
			text: 'Records of browser usage by users'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Browsers usage by users'
			}
		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y:.1f}%'
				}
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
		},
		colors: ['#ff6459', '#f5964b', '#56aafb', '#62aedf', '#9a78f0', '#5bb75f'],
		series: [{
			name: "Browsers",
			colorByPoint: true,
			data: [{
				name: "Chrome",
				y: 47.29,
				drilldown: "Chrome"
			}, {
				name: "Firefox",
				y: 24.25,
				drilldown: "Firefox"
			}, {
				name: "Internet Explorer",
				y: 41.48,
				drilldown: "Internet Explorer"
			}, {
				name: "Safari",
				y: 44.32,
				drilldown: "Safari"
			}, {
				name: "Edge",
				y: 76.39,
				drilldown: "Edge"
			}, {
				name: "Opera",
				y: 16.92,
				drilldown: "Opera"
			}]
		}],
		drilldown: {
			series: [{
				name: "Chrome",
				id: "Chrome",
				data: [
					["v65.0",
						0.1
					],
					["v64.0",
						1.3
					],
					["v63.0",
						53.02
					],
					["v62.0",
						1.4
					],
					["v61.0",
						0.88
					],
					["v60.0",
						0.56
					],
					["v59.0",
						0.45
					],
					["v58.0",
						0.49
					],
					["v57.0",
						0.32
					],
					["v56.0",
						0.29
					],
					["v55.0",
						0.79
					],
					["v54.0",
						0.18
					],
					["v51.0",
						0.13
					],
					["v49.0",
						2.16
					],
					["v48.0",
						0.13
					],
					["v47.0",
						0.11
					],
					["v43.0",
						0.17
					],
					["v29.0",
						0.26
					]
				]
			}, {
				name: "Firefox",
				id: "Firefox",
				data: [
					["v58.0",
						1.02
					],
					["v57.0",
						7.36
					],
					["v56.0",
						0.35
					],
					["v55.0",
						0.11
					],
					["v54.0",
						0.1
					],
					["v52.0",
						0.95
					],
					["v51.0",
						0.15
					],
					["v50.0",
						0.1
					],
					["v48.0",
						0.31
					],
					["v47.0",
						0.12
					]
				]
			}, {
				name: "Internet Explorer",
				id: "Internet Explorer",
				data: [
					["v11.0",
						6.2
					],
					["v10.0",
						0.29
					],
					["v9.0",
						0.27
					],
					["v8.0",
						0.47
					]
				]
			}, {
				name: "Safari",
				id: "Safari",
				data: [
					["v11.0",
						3.39
					],
					["v10.1",
						0.96
					],
					["v10.0",
						0.36
					],
					["v9.1",
						0.54
					],
					["v9.0",
						0.13
					],
					["v5.1",
						0.2
					]
				]
			}, {
				name: "Edge",
				id: "Edge",
				data: [
					["v16",
						2.6
					],
					["v15",
						0.92
					],
					["v14",
						0.4
					],
					["v13",
						0.1
					]
				]
			}, {
				name: "Opera",
				id: "Opera",
				data: [
					["v50.0",
						0.96
					],
					["v49.0",
						0.82
					],
					["v12.1",
						0.14
					]
				]
			}]
		}
	});

	// chart 5
	Highcharts.chart('chart5', {
		chart: {
			type: 'line',
			styledMode: true
		},
		title: {
			text: 'Popular Pages'
		},
		credits: {
			enabled: false
		},
		exporting: {
			buttons: {
				contextButton: {
					enabled: false,
				}
			}
		},
		yAxis: {
			title: {
				text: 'Popular Pages',
				style: {
					display: 'none',
				}
			}
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr']
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle'
		},
		plotOptions: {
			series: {
				label: {
					connectorAllowed: false
				},
				pointStart: 2010
			}
		},
		//colors: ['#dc3545', '#01adff', '#673ab7'],
		series: [{
			name: 'Search',
			data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
		}, {
			name: 'Payment',
			data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
		}, {
			name: 'Profile',
			data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
		}],
		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom'
					}
				}
			}]
		}
	});
	// chart 6
	Highcharts.chart('chart6', {
		chart: {
			type: 'bar',
			styledMode: true
		},
		credits: {
			enabled: false
		},
		exporting: {
			buttons: {
				contextButton: {
					enabled: false,
				}
			}
		},
		//colors: ['#7c6cfb', '#02c9ef', '#f7a103'],
		title: {
			text: 'Visitor by Gender'
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Visitor by Genders',
				style: {
					display: 'none',
				}
			}
		},
		legend: {
			reversed: false
		},
		plotOptions: {
			series: {
				stacking: 'normal'
			}
		},
		series: [{
			name: 'Male',
			data: [5, 3, 4, 7, 2]
		}, {
			name: 'Female',
			data: [2, 2, 3, 2, 1]
		}, {
			name: 'Others',
			data: [3, 4, 4, 2, 5]
		}]
	});
});