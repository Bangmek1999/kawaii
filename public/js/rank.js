var EcPoint1 = [];
var EcPoint2 = [];
var EcPoint3 = [];

var dallas_temp1 = [];
var dallas_temp2 = [];

var DHT11_air = [];
var DHT11_temp = [];

var LightPoints = [];

var datePoint = [];
var temp = [];
var EC = [];

var Ec_sum = [];
var Temp_sum = [];



function addData(data) {
    for (var i = data.length - 500; i < data.length; i++) {
        EcPoint1.push(
            data[i].EC1
        );
        EcPoint2.push(
            data[i].EC2
        );
        EcPoint3.push(
            data[i].EC3
        );
        dallas_temp1.push(
            data[i].dallas_temp1
        );
        dallas_temp2.push(
            data[i].dallas_temp2
        );
        DHT11_air.push(
            data[i].DHT_Humidity
        );
        DHT11_temp.push(
            data[i].DHT_temp
        );
        LightPoints.push(
            data[i].light
        );
        datePoint.push(
            data[i].time_stamp
        );

    }
    if (EcPoint1) {
        for (var i = EcPoint1.length - 500; i < EcPoint1.length; i++) {

            let x = EcPoint1[i];
            let y = EcPoint2[i];
            let z = EcPoint3[i];
            let sumEc = (x / 3) + (y / 3) + (z / 3);
            Ec_sum.push(sumEc);
        }
    }
    if (dallas_temp1) {
        for (var i = dallas_temp1.length - 500; i < dallas_temp1.length; i++) {

            let x = dallas_temp1[i];
            let y = dallas_temp2[i];
            let z = DHT11_temp[i];
            let sumTemp = (x / 3) + (y / 3) + (z / 3);
            Temp_sum.push(sumTemp);
        }
    }
}

// $.getJSON("http://127.0.0.1:8000/rawData", addData);
$.getJSON("https://devplant.csmju.com/rawData", addData);



window.onload = function() {
    setTimeout(function() {
        Call_EC(Ec_sum);
        Call_Temp(Temp_sum);
        Call_Air(DHT11_air);
        Call_Light(LightPoints);
        rank();
    }, 2000);
}

const Sum_Rank = {
    rank_ec: 0,
    rank_temp: 0,
    rank_light: 0,
    rank_air: 0,

};

function rank() {
    let a = Sum_Rank.rank_ec;
    let b = Sum_Rank.rank_temp;
    let c = Sum_Rank.rank_light;
    let d = Sum_Rank.rank_air;

    let result_rank = a + b + c + d;
    console.log('-------------------------------');
    console.log(result_rank);
    document.getElementById("rank_show").innerHTML = 'คะแนนปัจจุบัน' + ' ' + result_rank + ' ' + 'คะแนน';
    document.getElementById("rank_result").value = result_rank;


}

function Call_EC(Ec_sum) {
    let sum = 0;
    console.log("Is return function CallEC");
    for (var i = Ec_sum.length - 500; i < Ec_sum.length; i++) {
        let x = Ec_sum[i];
        if (1 <= x && x <= 40) {
            sum = sum += 0.5;
        } else if (41 <= x && x <= 60) {
            sum = sum += 1;

        } else if (61 <= x && x <= 80) {
            sum = sum += 1.5;

        } else if (81 <= x && x <= 90) {
            sum = sum += 2;

        } else if (91 <= x && x <= 94) {
            sum = sum += 1.5;

        } else if (95 <= x && x <= 98) {
            sum = sum += 1;

        } else if (99 <= x && x <= 100) {
            sum = sum += 0.5;

        }
        Sum_Rank.rank_ec = sum;

    }
    console.log(sum);
}

function Call_Temp(Temp_sum) {
    let sum = 0;
    console.log("Is return function CallTemp");
    for (var i = Temp_sum.length - 500; i < Temp_sum.length; i++) {
        let x = Temp_sum[i];
        if (1 <= x && x <= 15) {
            sum = sum += 0.5;
        } else if (16 <= x && x <= 20) {
            sum = sum += 1;

        } else if (21 <= x && x <= 25) {
            sum = sum += 1.5;

        } else if (26 <= x && x <= 35) {
            sum = sum += 2;

        } else if (36 <= x && x <= 37) {
            sum = sum += 1.5;

        } else if (38 <= x && x <= 39) {
            sum = sum += 1;

        } else if (40 <= x && x <= 45) {
            sum = sum += 0.5;
        }
        Sum_Rank.rank_temp = sum;

    }
    console.log(sum);
}

function Call_Air(DHT11_air) {
    let sum = 0;
    console.log("Is return function Call_Air");
    for (var i = DHT11_air.length - 500; i < DHT11_air.length; i++) {
        let x = DHT11_air[i];
        if (1 <= x && x < 65) {
            sum = sum += 0.5;

        } else if (66 <= x && x <= 70) {
            sum = sum += 1;

        } else if (71 <= x && x <= 74) {
            sum = sum += 1.5;

        } else if (75 <= x && x <= 80) {
            sum = sum += 2;

        } else if (81 <= x && x <= 84) {
            sum = sum += 1.5;

        } else if (85 <= x && x <= 88) {
            sum = sum += 1;

        } else if (89 <= x && x <= 95) {
            sum = sum += 0.5;

        }
        Sum_Rank.rank_air = sum;

    }
    console.log(sum);
}

function Call_Light(LightPoints) {
    let sum = 0;
    console.log("Is return function Call_Light");
    for (var i = LightPoints.length - 500; i < LightPoints.length; i++) {
        let x = LightPoints[i];
        if (0 <= x && x < 499) {
            sum = sum += 0.5;
        } else if (500 <= x && x <= 999) {
            sum = sum += 1;

        } else if (1000 <= x && x <= 1499) {
            sum = sum += 1.5;

        } else if (1500 <= x && x <= 1999) {
            sum = sum += 2;

        } else if (2000 <= x && x <= 2499) {
            sum = sum += 1.5;

        } else if (2500 <= x && x <= 2999) {
            sum = sum += 1;

        } else if (3000 <= x && x <= 4500) {
            sum = sum += 0.5;
        }
        Sum_Rank.rank_light = sum;

    }
    console.log(sum);
}
//-----------------------------------date---------------------------------------------------------------------------

function pot_user(user_pot) {
    document.getElementById("User_pot").innerHTML = 'ชื่อกระถาง' + ' ' + user_pot;
    document.getElementById("User_pot_input").value = user_pot;

}
// $.getJSON("http://127.0.0.1:8000/user_pot", pot_user);
$.getJSON("https://devplant.csmju.com/user_pot", pot_user);

function name_user(user_name) {
    document.getElementById("User_name").innerHTML = 'ชื่อ' + ' ' + user_name;
    document.getElementById("User_name_input").value = user_name;

}
// $.getJSON("http://127.0.0.1:8000/User_name", name_user);
$.getJSON("https://devplant.csmju.com/user_pot", pot_user);