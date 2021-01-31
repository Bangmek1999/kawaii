<!-- <!DOCTYPE HTML>
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

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <canvas id="myChart"></canvas>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: dataPoints,
        options: options
    });
    var dataPoints = [];

    var options = {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Soil Moisture"
        },
        axisX: {
            valueFormatString: "DD MMM YYYY",
        },
        axisY: {
            title: "EC",
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
                y: data[i].EC1
            });
        }
        $("#chartContainer").CanvasJSChart(options);

    }
    $.getJSON("http://127.0.0.1:8000/lightandtime", addData);
</script>

</html>