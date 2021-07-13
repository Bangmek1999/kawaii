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

//-------------------------------------------avata-------------------------------------------------------------------
var options = [];

function avata(data) {
    if (data == 'option1') {
        return option1(data);
    } else if (data == 'option2') {
        return option2(data);
    } else if (data == 'option3') {
        return option3(data);
    } else if (data == 'option4') {
        return option4(data);
    }
}
$.getJSON("http://127.0.0.1:8000/avata", avata);
//----------------------------------------Option1-----------------------------------------------------------------------
function option1(options) {
    if (options == 'option1') {
        if (1 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/seed/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (4 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/sprout/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (40 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/buds/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (50 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (70 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
            document.getElementById("myVideo").load();
        }
    }

}

//----------------------------------------Option2-----------------------------------------------------------------------
function option2(data) {
    if (data == 'option2') {
        if (40 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/sprout/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (50 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/buds/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (70 > Final_Result) {
            document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
            document.getElementById("myVideo").load();
        } else {
            document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
            document.getElementById("myVideo").load();
        }

    }
}

//----------------------------------------Option3-----------------------------------------------------------------------
function option3(options) {
    if (options == 'option3') {
        if (Final_Result > 1) {
            document.getElementById("mp4_src").src = "../../img/buds/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (Final_Result > 15) {
            document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (Final_Result > 35) {
            document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
            document.getElementById("myVideo").load();
        } else {
            document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
            document.getElementById("myVideo").load();
        }
    }
}
//----------------------------------------Option4-----------------------------------------------------------------------
function option4(options) {
    if (options == 'option4') {
        if (Final_Result > 1) {
            document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
            document.getElementById("myVideo").load();
        } else if (Final_Result > 25) {
            document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
            document.getElementById("myVideo").load();
        }

    }
}
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
}
$.getJSON("http://127.0.0.1:8000/rawData", Datasensor);
//-----------------------------------------------------------------------------------------------------------------