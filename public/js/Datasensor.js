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

            // document.getElementById("myImg").src = "https://www.dailygizmo.tv/wp-content/uploads/2020/02/sibbil-221x300.jpg";
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

function avata(data) {
    if (data == 'option1') {
        greeting = document.getElementById("avata").src = "../../img/seedV2.mp4";
        document.getElementById("avata").innerHTML = greeting;
    } else if (data == 'option2') {
        greeting = document.getElementById("avata").src = "../../img/seed_2.png";
        document.getElementById("avata").innerHTML = greeting;
    } else if (data == 'option3') {
        greeting = document.getElementById("avata").src = "../../img/seed_3.png";
        document.getElementById("avata").innerHTML = greeting;
    } else if (data == 'option4') {
        greeting = document.getElementById("avata").src = "../../img/seed_4.png";
        document.getElementById("avata").innerHTML = greeting;
    }
}
$.getJSON("http://127.0.0.1:8000/avata", avata);


// var hp = click();

// function click() {
//     let ss = width = EcPoints;
//     ss.style.width = width + '%';
// }
// document.getElementById("ha").innerHTML = hp;

//standard Ec = 30
function add() {
    let addHealth = document.getElementById('EC_hp')
    var x = EcPoints.toString();
    if (10 < x && x < 15) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (96 < x && x < 100) {
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
    }
    else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (96 < x && x < 100) {
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
    }
    else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (96 < x && x < 100) {
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
    }
    else if (16 < x && x < 20) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (21 < x && x < 25) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (26 < x && x < 30) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (31 < x && x < 35) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (36 < x && x < 40) {
        if (addHealth) {
            addHealth.style.width = 100 + '%';
            addHealth.innerHTML = 100 * 1 + 'hp';
        }
    }
    else if (41 < x && x < 45) {
        if (addHealth) {
            addHealth.style.width = 90 + '%';
            addHealth.innerHTML = 90 * 1 + 'hp';
        }
    }
    else if (46 < x && x < 50) {
        if (addHealth) {
            addHealth.style.width = 80 + '%';
            addHealth.innerHTML = 80 * 1 + 'hp';
        }
    }
    else if (51 < x && x < 55) {
        if (addHealth) {
            addHealth.style.width = 70 + '%';
            addHealth.innerHTML = 70 * 1 + 'hp';
        }
    }
    else if (56 < x && x < 60) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (61 < x && x < 65) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (66 < x && x < 70) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (71 < x && x < 75) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (76 < x && x < 80) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (81 < x && x < 85) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (86 < x && x < 90) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (91 < x && x < 95) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
    else if (96 < x && x < 100) {
        if (addHealth) {
            addHealth.style.width = 60 + '%';
            addHealth.innerHTML = 60 * 1 + 'hp';
        }
    }
}