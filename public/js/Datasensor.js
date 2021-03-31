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
        var ec = [];
        ec.push(
            data[i].EC1
        )
        if (ec < 10) {
            greeting = "Good morning";
        } else if (ec < 90) {

            document.getElementById("myImg").src = "https://www.dailygizmo.tv/wp-content/uploads/2020/02/sibbil-221x300.jpg";
        } else {
            greeting = "Good evening";
        }
        // document.getElementById("greeting").innerHTML = greeting;
        // console.log(greeting);

    }

    document.getElementById("EC").innerHTML = EcPoints;
    document.getElementById("Temp").innerHTML = TempPoints;
    document.getElementById("Humidity").innerHTML = HumitityPoints;
    document.getElementById("Light").innerHTML = LightPoints;
}
$.getJSON("http://127.0.0.1:8000/rawData", addData);

function myFunction() {
    document.getElementById("myImg").src = "https://i.pinimg.com/originals/fa/70/39/fa703961498286f1519ce3c083b9baf5.png";
}