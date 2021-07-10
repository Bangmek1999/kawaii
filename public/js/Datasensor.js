//--------------------------------------------------------------------------------------------------------------
function avata(data) {
    if (data == 'option1') {
        document.getElementById("mp4_src").src = "../../img/seed/happy.mp4";
        document.getElementById("myVideo").load();
    } else if (data == 'option2') {
        document.getElementById("mp4_src").src = "../../img/sprout/happy.mp4";
        document.getElementById("myVideo").load();
    } else if (data == 'option3') {
        document.getElementById("mp4_src").src = "../../img/buds/happy.mp4";
        document.getElementById("myVideo").load();
    } else if (data == 'option4') {
        if (Final_Result < 50) {
            document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
            document.getElementById("myVideo").load();
        }

    }
}
$.getJSON("http://127.0.0.1:8000/avata", avata);

//-------------------------------------time_stamp-------------------------------------------------------------------------

var datePoint = [];
var Final_Result = [];

function addDate(data) {
    datePoint = data;
    const date = datePoint.toString();
    var date1 = new Date(date);
    var date2 = new Date();
    var one_day = 1000 * 60 * 60 * 24

    // To calculate the time difference of two dates
    var Result = Math.round(date2.getTime() - date1.getTime()) / (one_day);
    Final_Result = Result.toFixed(0);

    document.getElementById("date1").innerHTML = date1;
    document.getElementById("date2").innerHTML = date2;
    document.getElementById("Difference_In_Days").innerHTML = Final_Result;


}
$.getJSON("http://127.0.0.1:8000/date_avata", addDate);




//-----------------------------------data---------------------------------------------------------------------------
var EcPoints = [];
var TempPoints = [];
var HumitityPoints = [];
var LightPoints = [];

function Datasensor(data) {
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


    // const Ecd = EcPoints.toString();
    // const Humitity = HumitityPoints.toString();
    // const Light = LightPoints.toString();
    // const date = datePoint.toString();
    // const Temp = TempPoints.toString();

    // document.getElementById('Temp').innerHTML = Temp;
    // document.getElementById('EC').innerHTML = Ecd;
    // document.getElementById('Humidity').innerHTML = Humitity;
    // document.getElementById('Light').innerHTML = Light;
    // document.getElementById('date').innerHTML = date;
}
$.getJSON("http://127.0.0.1:8000/rawData", Datasensor);


//-----------------------------------------------------------------------------------------------------------------