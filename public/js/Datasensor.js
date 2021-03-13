var EcPoints = [];
var TempPoints = [];
var HumitityPoints = [];
var LightPoints = [];

function addData(data) {
    for (var i = data.length - 1; i < data.length; i++) {
        EcPoints.push(
            data[i].EC1
        );
        TempPoints.push(
            data[i].dallas_temp1
        );
        HumitityPoints.push(
            data[i].DHT_Humidity
        );
        LightPoints.push(
            data[i].light
        );
    }
    document.getElementById("EC").innerHTML = EcPoints;
    document.getElementById("Temp").innerHTML = TempPoints;
    document.getElementById("Humidity").innerHTML = HumitityPoints;
    document.getElementById("Light").innerHTML = LightPoints;



}
$.getJSON("http://127.0.0.1:8000/rawData", addData);