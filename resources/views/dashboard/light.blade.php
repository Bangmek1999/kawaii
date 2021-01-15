<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {

            var dataPoints = [];

            var options = {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Light"
                },
                axisX: {
                    valueFormatString: "DD MMM YYYY",
                },
                axisY: {
                    title: "Light",
                    titleFontSize: 24
                },
                data: [{
                    type: "spline",
                    yValueFormatString: "$#,###.##",
                    dataPoints: dataPoints
                }]
            };

            function addData(data) {
                for (var i = 0; i < data.length; i++) {
                    dataPoints.push({
                        x: new Date(data[i].time_stamp),
                        y: data[i].light
                    });
                }
                $("#chartContainer").CanvasJSChart(options);

            }
            $.getJSON("http://127.0.0.1:8000/rawData", addData);

        }
    </script>
    
</head>

<body>
    <div class="container" id="chartContainer" style="height: 400px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>

</html>