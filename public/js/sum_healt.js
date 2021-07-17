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



function addData(data) {
    for (var i = data.length - 1; i < data.length; i++) {
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

        if (dallas_temp1) {
            let x = dallas_temp1;
            let y = dallas_temp2;
            let z = DHT11_temp;

            temp = (x / 3) + (y / 3) + (z / 3);


        }
        if (EcPoint1) {
            let x = EcPoint1;
            let y = EcPoint2;
            let z = EcPoint3;

            EC = (x / 3) + (y / 3) + (z / 3);

        }
    }
}
$.getJSON("http://127.0.0.1:8000/rawData", addData);

//-----------------------------------date---------------------------------------------------------------------------


function loadJs() {
    return test(temp),
        hu(DHT11_air),
        soil(EC),
        light(LightPoints),
        hp();

}

window.onload = function() {
    setTimeout(function() {
        loadJs();
    }, 2000);
}

const hp_resulte = {
    hp_ec: '',
    hp_temp: '',
    hp_light: '',
    hp_air: '',

};

function hp() {
    let a = hp_resulte.hp_temp;
    let b = hp_resulte.hp_air;
    let c = hp_resulte.hp_light;
    let d = hp_resulte.hp_ec;

    let sumHealth = document.getElementById('sumhp')
    var result_hp = (a / 4) + (b / 4) + (c / 4) + (d / 4);
    if (result_hp >= 0) {
        sumHealth.style.width = result_hp + '%';
    }

}



function test(temp) {
    var x = temp.toString();
    if (10 < x && x <= 15) {
        hp_resulte.hp_temp += 25;
    } else if (16 < x && x <= 20) {
        hp_resulte.hp_temp += 50;
    } else if (21 < x && x <= 25) {
        hp_resulte.hp_temp += 75;
    } else if (26 <= x && x <= 35) {
        hp_resulte.hp_temp += 100;
    } else if (36 < x && x <= 37) {
        hp_resulte.hp_temp += 75;
    } else if (38 < x && x <= 39) {
        hp_resulte.hp_temp += 50;
    } else if (40 < x && x <= 45) {
        hp_resulte.hp_temp += 25;
    }
}


function hu(DHT11_air) {
    var x = DHT11_air.toString();
    if (61 < x && x < 65) {
        hp_resulte.hp_air += 25;
    } else if (66 <= x && x <= 70) {
        hp_resulte.hp_air += 50;

    } else if (71 <= x && x <= 74) {
        hp_resulte.hp_air += 75;

    } else if (75 <= x && x <= 80) {
        hp_resulte.hp_air += 100;

    } else if (81 <= x && x <= 84) {
        hp_resulte.hp_air += 75;

    } else if (85 <= x && x <= 88) {
        hp_resulte.hp_air += 50;

    } else if (89 <= x && x <= 95) {
        hp_resulte.hp_air += 25;

    }
}

function soil(EC) {
    var x = EC.toString();
    if (61 <= x && x <= 65) {
        hp_resulte.hp_ec += 25;

    } else if (10 <= x && x <= 49) {
        hp_resulte.hp_ec += 50;

    } else if (50 <= x && x <= 80) {
        hp_resulte.hp_ec += 75;

    } else if (81 <= x && x <= 90) {
        hp_resulte.hp_ec += 100;

    } else if (91 <= x && x <= 94) {
        hp_resulte.hp_ec += 75;

    } else if (95 <= x && x <= 98) {
        hp_resulte.hp_ec += 50;

    } else if (99 <= x && x <= 100) {
        hp_resulte.hp_ec += 25;

    }
}


function light(LightPoints) {
    var x = LightPoints.toString();
    if (10 < x && x < 15) {
        hp_resulte.hp_light += 25;

    } else if (16 < x && x < 20) {
        hp_resulte.hp_light += 50;

    } else if (21 < x && x < 25) {
        hp_resulte.hp_light += 75;

    } else if (150 < x && x < 300) {
        hp_resulte.hp_light += 100;

    } else if (31 < x && x < 35) {
        hp_resulte.hp_light += 75;

    } else if (31 < x && x < 35) {
        hp_resulte.hp_light += 50;

    } else if (36 < x && x < 40) {
        hp_resulte.hp_light += 25;

    }
}