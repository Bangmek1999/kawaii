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
            console.log(temp);
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
        light(LightPoints);


}

window.onload = function() {
    setTimeout(function() {
        loadJs();
    }, 2000);
}







function test(temp) {
    let addHealth = document.getElementById('Temp_hp')
    var x = temp.toString();
    if (1 <= x && x <= 15) {
        addHealth.style.width = 17.8 + '%';
    } else if (16 <= x && x <= 20) {
        addHealth.style.width = 33.3 + '%';

    } else if (21 <= x && x <= 25) {
        addHealth.style.width = 40 + '%';

    } else if (26 <= x && x <= 35) {
        addHealth.style.width = 51.1 + '%';

    } else if (36 <= x && x <= 37) {
        addHealth.style.width = 60 + '%';

    } else if (38 <= x && x <= 39) {
        addHealth.style.width = 66.6 + '%';

    } else if (40 <= x && x <= 45) {
        addHealth.style.width = 84.4 + '%';

    }
}


function hu(DHT11_air) {
    let addHealth = document.getElementById('Humidity_hp')
    var x = DHT11_air.toString();
    if (1 <= x && x < 65) {
        addHealth.style.width = 17.3 + '%';

    } else if (66 <= x && x <= 70) {
        addHealth.style.width = 33.3 + '%';

    } else if (71 <= x && x <= 74) {
        addHealth.style.width = 40 + '%';

    } else if (75 <= x && x <= 80) {
        addHealth.style.width = 51.1 + '%';

    } else if (81 <= x && x <= 84) {
        addHealth.style.width = 60 + '%';

    } else if (85 <= x && x <= 88) {
        addHealth.style.width = 66.6 + '%';

    } else if (89 <= x && x <= 95) {
        addHealth.style.width = 84.4 + '%';

    }
}

function soil(EC) {
    let addHealth = document.getElementById('EC_hp')
    var x = EC.toString();
    if (1 <= x && x <= 40) {
        addHealth.style.width = 17.3 + '%';

    } else if (41 <= x && x <= 60) {
        addHealth.style.width = 33.3 + '%';

    } else if (61 <= x && x <= 80) {
        addHealth.style.width = 40 + '%';

    } else if (81 <= x && x <= 90) {
        addHealth.style.width = 51.1 + '%';

    } else if (91 <= x && x <= 94) {
        addHealth.style.width = 60 + '%';

    } else if (95 <= x && x <= 98) {
        addHealth.style.width = 66.6 + '%';

    } else if (99 <= x && x <= 100) {
        addHealth.style.width = 84.4 + '%';

    }
}


function light(LightPoints) {
    let addHealth = document.getElementById('Light_hp')
    var x = LightPoints.toString();
    if (0 <= x && x < 499) {
        addHealth.style.width = 17.8 + '%';
    } else if (500 <= x && x <= 999) {
        addHealth.style.width = 33.3 + '%';

    } else if (1000 <= x && x <= 1499) {
        addHealth.style.width = 40 + '%';

    } else if (1500 <= x && x <= 1999) {
        addHealth.style.width = 51.1 + '%';

    } else if (2000 <= x && x <= 2499) {
        addHealth.style.width = 60 + '%';

    } else if (2500 <= x && x <= 2999) {
        addHealth.style.width = 66.6 + '%';

    } else if (3000 <= x && x <= 4500) {
        addHealth.style.width = 84.4 + '%';
    }
}