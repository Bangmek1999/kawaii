var EcPoints = [];
var TempPoints = [];
var HumitityPoints = [];
var LightPoints = [];
var datePoint = [];

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
        datePoint.push(
            data[i].time_stamp
        );


    }


    const Ecd = EcPoints.toString();
    const Humitity = HumitityPoints.toString();
    const Light = LightPoints.toString();
    const date = datePoint.toString();
    const Temp = TempPoints.toString();

    document.getElementById('Temp').innerHTML = Temp;
    document.getElementById('EC').innerHTML = Ecd;
    document.getElementById('Humidity').innerHTML = Humitity;
    document.getElementById('Light').innerHTML = Light;
    document.getElementById('date').innerHTML = date;


}
$.getJSON("http://127.0.0.1:8000/rawData", addData);

//-----------------------------------date---------------------------------------------------------------------------

//standard Ec = 30
function add() {
    let addHealth = document.getElementById('EC_hp')
    var x = EcPoints.toString(); //arry to string
    if (10 < x && x < 15) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (96 < x && x < 100) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }

}



function add1() {
    let addHealth = document.getElementById('Temp_hp')
    var x = TempPoints.toString();
    if (10 < x && x < 15) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 50 + '%';
            addHealth.innerHTML = 50 * 1 + 'hp';
        }
    } else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 40 + '%';
            addHealth.innerHTML = 40 * 1 + 'hp';
        }
    } else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 30 + '%';
            addHealth.innerHTML = 30 * 1 + 'hp';
        }

    } else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 20 + '%';
            addHealth.innerHTML = 20 * 1 + 'hp';
        }
    } else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 10 + '%';
            addHealth.innerHTML = 10 * 1 + 'hp';
        }
    } else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (96 < x && x < 100) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
}

function add2() {
    let addHealth = document.getElementById('Humidity_hp')
    var x = HumitityPoints.toString();
    if (10 < x && x < 15) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (96 < x && x < 100) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
}

function add3() {
    let addHealth = document.getElementById('Light_hp')
    var x = LightPoints.toString();
    if (10 < x && x < 15) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    } else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    } else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    } else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    } else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 50 + '%';
            addHealth.innerHTML = 50 * 1 + 'hp';
        }
    } else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 40 + '%';
            addHealth.innerHTML = 40 * 1 + 'hp';
        }
    } else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    } else if (96 < x && x < 100) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
}