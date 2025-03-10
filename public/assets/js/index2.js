$(function () {
    "use strict";

    // chart 1 - Total Mata Kuliah Aktif
    var options = {
        series: [
            {
                name: "Mata Kuliah Aktif",
                data: [15, 18, 14, 16, 20, 24, 22, 18, 16, 20, 22, 24],
            },
        ],
        chart: {
            type: "area",
            height: 65,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#f41127",
            },
            sparkline: {
                enabled: true,
            },
        },
        markers: {
            size: 0,
            colors: ["#f41127"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2.4,
            curve: "smooth",
        },
        colors: ["#f41127"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: false,
            },
            x: {
                show: false,
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return "";
                    },
                },
            },
            marker: {
                show: false,
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
    // chart 2 - Total Mahasiswa Aktif
    var options = {
        series: [
            {
                name: "Mahasiswa Aktif",
                data: [
                    1100, 1150, 1200, 1180, 1250, 1247, 1300, 1280, 1350, 1400,
                    1380, 1420,
                ],
            },
        ],
        chart: {
            type: "area",
            height: 65,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#8833ff",
            },
            sparkline: {
                enabled: true,
            },
        },
        markers: {
            size: 0,
            colors: ["#8833ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2.4,
            curve: "smooth",
        },
        colors: ["#8833ff"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: false,
            },
            x: {
                show: false,
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return "";
                    },
                },
            },
            marker: {
                show: false,
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
    // chart 3 - Total Tugas Dikumpulkan
    var options = {
        series: [
            {
                name: "Tugas Dikumpulkan",
                data: [
                    280, 320, 325, 310, 342, 350, 365, 380, 375, 395, 405, 410,
                ],
            },
        ],
        chart: {
            type: "area",
            height: 65,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#ffb207",
            },
            sparkline: {
                enabled: true,
            },
        },
        markers: {
            size: 0,
            colors: ["#ffb207"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2.4,
            curve: "smooth",
        },
        colors: ["#ffb207"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: false,
            },
            x: {
                show: false,
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return "";
                    },
                },
            },
            marker: {
                show: false,
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();
    // chart 4 - Rata-rata Nilai
    var options = {
        series: [
            {
                name: "Rata-rata Nilai",
                data: [
                    75.5, 78.2, 80.1, 82.5, 81.8, 83.4, 82.5, 84.2, 85.1, 83.8,
                    85.5, 86.2,
                ],
            },
        ],
        chart: {
            type: "area",
            height: 65,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#29cc39",
            },
            sparkline: {
                enabled: true,
            },
        },
        markers: {
            size: 0,
            colors: ["#29cc39"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2.4,
            curve: "smooth",
        },
        colors: ["#29cc39"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: false,
            },
            x: {
                show: false,
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return "";
                    },
                },
            },
            marker: {
                show: false,
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart4"), options);
    chart.render();

    // chart 5
    Highcharts.chart("chart5", {
        chart: {
            type: "area",
            height: 420,
            styledMode: true,
        },
        credits: {
            enabled: false,
        },
        accessibility: {
            //description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
        },
        title: {
            text: "Statistik Mahasiswa dan Performa",
        },

        xAxis: {
            allowDecimals: false,
            type: "datetime",
            labels: {
                formatter: function () {
                    return this.value; // clean, unformatted number for year
                },
            },
            accessibility: {
                //rangeDescription: 'Range: 1940 to 2017.'
            },
        },
        yAxis: {
            title: {
                text: "",
            },
            labels: {
                formatter: function () {
                    return this.value / 1000 + "k";
                },
            },
        },
        tooltip: {
            pointFormat:
                "{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}",
        },
        plotOptions: {
            area: {
                pointStart: 1940,
                marker: {
                    enabled: false,
                    symbol: "circle",
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true,
                        },
                    },
                },
            },
        },
        series: [
            {
                name: "Kehadiran",
                data: [85, 88, 90, 87, 92, 88, 91, 89, 90, 92, 94, 93],
            },
            {
                name: "Penyelesaian Tugas",
                data: [75, 82, 80, 85, 83, 87, 84, 88, 86, 89, 90, 88],
            },
        ],
    });

    // chart 6 - Target Kelulusan
    var options = {
        chart: {
            height: 300,
            type: "radialBar",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            radialBar: {
                //startAngle: -135,
                //endAngle: 225,
                hollow: {
                    margin: 0,
                    size: "78%",
                    //background: '#fff',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: "front",
                    dropShadow: {
                        enabled: false,
                        top: 3,
                        left: 0,
                        blur: 4,
                        color: "rgba(0, 169, 255, 0.25)",
                        opacity: 0.65,
                    },
                },
                track: {
                    background: "#f0e6ff",
                    //strokeWidth: '67%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        color: "rgba(0, 169, 255, 0.85)",
                        opacity: 0.65,
                    },
                },
                dataLabels: {
                    showOn: "always",
                    name: {
                        offsetY: -25,
                        show: true,
                        color: "#6c757d",
                        fontSize: "16px",
                    },
                    value: {
                        formatter: function (val) {
                            return val + "%";
                        },
                        color: "#000",
                        fontSize: "45px",
                        show: true,
                        offsetY: 10,
                    },
                },
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "horizontal",
                shadeIntensity: 0.5,
                gradientToColors: ["#8833ff"],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100],
            },
        },
        colors: ["#8833ff"],
        series: [85], // 85% target tercapai
        stroke: {
            lineCap: "round",
            //dashArray: 4
        },
        labels: ["Target Kelulusan"],
    };
    var chart = new ApexCharts(document.querySelector("#chart6"), options);
    chart.render();

    // chart 7
    Highcharts.chart("chart7", {
        chart: {
            type: "variablepie",
            height: 330,
            styledMode: true,
        },
        credits: {
            enabled: false,
        },
        title: {
            text: "Total Traffic by Source",
        },
        tooltip: {
            pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>",
        },
        accessibility: {
            point: {
                valueSuffix: "%",
            },
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: "pointer",
                dataLabels: {
                    enabled: true,
                    format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                },
            },
        },
        series: [
            {
                minPointSize: 10,
                innerSize: "65%",
                zMin: 0,
                name: "Traffic",
                data: [
                    {
                        name: "Organic",
                        y: 505370,
                        z: 92.9,
                    },
                    {
                        name: "Paid",
                        y: 551500,
                        z: 118.7,
                    },
                    {
                        name: "Email",
                        y: 312685,
                        z: 124.6,
                    },
                    {
                        name: "Google",
                        y: 78867,
                        z: 137.5,
                    },
                    {
                        name: "Direct",
                        y: 301340,
                        z: 201.8,
                    },
                    {
                        name: "Bing",
                        y: 357022,
                        z: 235.6,
                    },
                ],
            },
        ],
    });

    // chart 8

    var options = {
        series: [
            {
                name: "Online Sales",
                data: [33, 44, 55, 57, 56, 61, 58, 63, 60, 66, 72, 68],
            },
            {
                name: "Offline Sales",
                data: [38, 35, 41, 36, 26, 45, 48, 52, 53, 41, 55, 43],
            },
        ],
        chart: {
            foreColor: "#9ba7b2",
            type: "bar",
            height: 280,
            stacked: true,
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "25%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: true,
            position: "top",
            horizontalAlign: "right",
        },
        stroke: {
            show: true,
            width: 2,
            //curve: 'smooth'
            // colors: ['transparent']
        },
        colors: ["#0dcaf0", "#e5e7e8"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        grid: {
            show: true,
            borderColor: "rgba(0, 0, 0, 0.15)",
            strokeDashArray: 4,
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "" + val + " thousands";
                },
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart8"), options);
    chart.render();

    // chart 9
    var options = {
        series: [
            {
                name: "Total Orders",
                data: [340, 160, 671, 414, 555, 414, 555, 257],
            },
        ],
        chart: {
            type: "area",
            height: 180,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#29cc39",
            },
            sparkline: {
                enabled: true,
            },
        },
        markers: {
            size: 0,
            colors: ["#29cc39"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2.4,
            curve: "smooth",
        },
        colors: ["#29cc39"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: false,
            },
            x: {
                show: false,
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return "";
                    },
                },
            },
            marker: {
                show: false,
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart9"), options);
    chart.render();

    // world map

    jQuery("#geographic-map").vectorMap({
        map: "world_mill_en",
        backgroundColor: "transparent",
        borderColor: "#818181",
        borderOpacity: 0.25,
        borderWidth: 1,
        zoomOnScroll: false,
        color: "#009efb",
        regionStyle: {
            initial: {
                fill: "#6c757d",
            },
        },
        markerStyle: {
            initial: {
                r: 9,
                fill: "#fff",
                "fill-opacity": 1,
                stroke: "#000",
                "stroke-width": 5,
                "stroke-opacity": 0.4,
            },
        },
        enableZoom: true,
        hoverColor: "#009efb",
        markers: [
            {
                latLng: [21.0, 78.0],
                name: "I Love My India",
            },
        ],
        series: {
            regions: [
                {
                    values: {
                        IN: "#8833ff",
                        US: "#29cc39",
                        RU: "#f41127",
                        AU: "#ffb207",
                    },
                },
            ],
        },
        hoverOpacity: null,
        normalizeFunction: "linear",
        scaleColors: ["#b6d6ff", "#005ace"],
        selectedColor: "#c9dfaf",
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function (element, code, region) {
            var message =
                'You clicked "' +
                region +
                '" which has the code: ' +
                code.toUpperCase();
            alert(message);
        },
    });
});
