<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
        window.onload = function() {

            var dataPoints = [];
            var LightdataPoints = [];
            var TempdataPoints = [];
            var ECdataPoints = [];

            var options = {
                animationEnabled: true,
                backgroundColor: "rgba(78, 115, 255, 0.01)",
                borderColor: "rgba(78, 115, 223, 1)",

                theme: {
                    mode: 'light',
                    palette: 'palette4',
                    monochrome: {
                        enabled: false,
                        color: '#255aee',
                        shadeTo: 'light',
                        shadeIntensity: 0.65
                    },
                },
                title: {
                    text: "Humidity"
                },
                axisX: {
                    valueFormatString: "DD MMM YY",
                    lineColor: "#ff6384",

                },
                axisY: {
                    title: "DHT_Humidity",
                    titleFontSize: 24,

                },
                data: [{
                    type: "spline",
                    yValueFormatString: "$#,###.##",
                    dataPoints: dataPoints,

                }]
            };

            var optionslight = {
                animationEnabled: true,
                backgroundColor: "rgba(78, 115, 255, 0.01)",
                borderColor: "rgba(78, 115, 223, 1)",

                theme: {
                    mode: 'light',
                    palette: 'palette4',
                    monochrome: {
                        enabled: false,
                        color: '#255aee',
                        shadeTo: 'light',
                        shadeIntensity: 0.65
                    },
                },
                title: {
                    text: "Light"
                },
                axisX: {
                    valueFormatString: "DD MMM YY",
                    lineColor: "#ff6384",

                },
                axisY: {
                    title: "Light",
                    titleFontSize: 24,

                },
                data: [{
                    type: "spline",
                    yValueFormatString: "$#,###.##",
                    dataPoints: LightdataPoints,

                }]
            };

            var optionsTemp = {
                animationEnabled: true,
                backgroundColor: "rgba(78, 115, 255, 0.01)",
                borderColor: "rgba(78, 115, 223, 1)",

                theme: {
                    mode: 'light',
                    palette: 'palette4',
                    monochrome: {
                        enabled: false,
                        color: '#255aee',
                        shadeTo: 'light',
                        shadeIntensity: 0.65
                    },
                },
                title: {
                    text: "Temp"
                },
                axisX: {
                    valueFormatString: "DD MMM YY",
                    lineColor: "#ff6384",

                },
                axisY: {
                    title: "Dallas_Temp",
                    titleFontSize: 24,

                },
                data: [{
                    type: "spline",
                    yValueFormatString: "$#,###.##",
                    dataPoints: TempdataPoints,

                }]
            };

            var optionsEC = {
                animationEnabled: true,
                backgroundColor: "rgba(78, 115, 255, 0.01)",
                borderColor: "rgba(78, 115, 223, 1)",

                theme: {
                    mode: 'light',
                    palette: 'palette4',
                    monochrome: {
                        enabled: false,
                        color: '#255aee',
                        shadeTo: 'light',
                        shadeIntensity: 0.65
                    },
                },
                title: {
                    text: "Soil Moisture"
                },
                axisX: {
                    valueFormatString: "DD MMM YY",
                    lineColor: "#fd6884",

                },
                axisY: {
                    title: "EC",
                    titleFontSize: 24,

                },
                data: [{
                    type: "spline",
                    yValueFormatString: "$#,###.##",
                    dataPoints: ECdataPoints,

                }]
            };


            function addData(data) {
                for (var i = data.length - 500; i < data.length; i++) {
                    dataPoints.push({
                        x: new Date(data[i].time_stamp),
                        y: data[i].DHT_Humidity
                    });
                }
                $("#DHTContainer").CanvasJSChart(options);

                for (var i = data.length - 200; i < data.length; i++) {
                    LightdataPoints.push({
                        x: new Date(data[i].time_stamp),
                        y: data[i].light
                    });
                }
                $("#LightContainer").CanvasJSChart(optionslight);

                for (var i = data.length - 200; i < data.length; i++) {
                    TempdataPoints.push({
                        x: new Date(data[i].time_stamp),
                        y: data[i].dallas_temp1
                    });
                }
                $("#TempContainer").CanvasJSChart(optionsTemp);

                for (var i = data.length - 200; i < data.length; i++) {
                    ECdataPoints.push({
                        x: new Date(data[i].time_stamp),
                        y: data[i].EC3
                    });
                }
                $("#ECContainer").CanvasJSChart(optionsEC);

            }
            $.getJSON("https://devplant.csmju.com/rawData", addData);

        }

    </script>
    <style>
        html,
        body {
            background-color: #afdbd2;
            /* background-image: url("https://i.pinimg.com/originals/d9/0a/71/d90a71aef02bb2d09ba5193a2569e889.jpg"); */
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
        }

        .chart {
            position: absolute;
            /* left: 100px;
            top: 50px; */
            width: 100%;
            height: auto;
        }

        .chart2 {
            position: absolute;
            /* left: 1000px;
            top: 50px; */
            width: 100%;
            height: auto;
        }

        .chart3 {
            position: absolute;
            /* left: 1000px;*/
            top: 500px;
            width: 100%;
            height: auto;
        }

        .chart4 {
            position: absolute;
            /* left: 1000px;*/
            top: 500px;
            width: 100%;
            height: auto;
        }

        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 10%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }

        .text-name {
            color: #ffffff !important
        }

    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ">
                <div class="chart" id="DHTContainer"></div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="chart2" id="LightContainer"></div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="chart3" id="TempContainer"></div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="chart4" id="ECContainer"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 ">
                    <h1><a href="{{ route('dashboard') }}">Dashboard</a></h1>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                    <h1><a href="{{ route('home') }}">Animation</a></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>

</html>
