window.onload = function() {
    setTimeout(function() {
        $.getJSON("https://devplant.csmju.com/avata", avata);
        // $.getJSON("http://127.0.0.1:8000/avata", avata);

    }, 2000);
    //-----------------------------------data---------------------------------------------------------------------------
    var EcPoint1 = [];
    var EcPoint2 = [];
    var EcPoint3 = [];

    var dallas_temp1 = [];
    var dallas_temp2 = [];

    var DHT11_air = [];
    var DHT11_temp = [];

    var LightPoints = [];

    var temp = [];
    var EC = [];

    var result = [];

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
                console.log('All_EC' + EC);
            }
        }
        return temps(temp),
            air(DHT11_air),
            soil(EC),
            light(LightPoints),
            hp(),
            sumd(result);

    }
    // $.getJSON("http://127.0.0.1:8000/rawData", addData);
    $.getJSON("https://devplant.csmju.com/rawData", addData);


    //-----------------------------------date---------------------------------------------------------------------------
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

        console.log(hp_resulte.hp_temp);
        console.log(hp_resulte.hp_air);
        console.log(hp_resulte.hp_light);
        console.log(hp_resulte.hp_ec);

        console.log(result_hp);

        if (result_hp >= 0) {
            sumHealth.style.width = result_hp + '%';
            sumHealth.innerHTML = result_hp + '%';
        }

    }
    const sum = {
        temp: '',
        ec: '',
        light: '',
        air: '',

        happy: '',
        moist: '',
        dry: '',
        cool: '',
        hot: '',
        dark: '',
        light_select: '',

    }

    function temps(sd) {
        var x = sd.toString();
        if (1 <= x && x <= 15) {
            hp_resulte.hp_temp += 25;
            low = "cool";
            sum.temp = low
        } else if (16 <= x && x <= 20) {
            hp_resulte.hp_temp += 50;
        } else if (21 <= x && x <= 25) {
            hp_resulte.hp_temp += 75;
        } else if (26 <= x && x <= 35) {
            hp_resulte.hp_temp += 100;
        } else if (36 <= x && x <= 37) {
            hp_resulte.hp_temp += 75;
            hight = "hot";
            sum.temp = hight;
        } else if (38 <= x && x <= 39) {
            hp_resulte.hp_temp += 50;
            hight = "hot";
            sum.temp = hight;
        } else if (40 <= x && x <= 45) {
            hp_resulte.hp_temp += 25;
            hight = "hot";
            sum.temp = hight;
        }

    }

    function air(DHT11_air) {
        var x = DHT11_air.toString();
        if (1 <= x && x <= 65) {
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
        if (1 <= x && x <= 40) {
            hp_resulte.hp_ec += 25;
            low = "dry";
            sum.ec = low;
        } else if (41 <= x && x <= 60) {
            hp_resulte.hp_ec += 50;

        } else if (61 <= x && x <= 80) {
            hp_resulte.hp_ec += 75;

        } else if (81 <= x && x <= 90) {
            hp_resulte.hp_ec += 100;

        } else if (91 <= x && x <= 100) {
            hp_resulte.hp_ec += 75;
            hight = "moist";
            sum.ec = hight;
        }
    }


    function light(LightPoints) {
        var x = LightPoints.toString();
        if (0 <= x && x < 499) {
            hp_resulte.hp_light += 25;
            low = "dark";
            sum.light = low;
        } else if (500 < x && x < 999) {
            hp_resulte.hp_light += 50;
        } else if (1000 < x && x < 1499) {
            hp_resulte.hp_light += 75;

        } else if (1500 < x && x < 1999) {
            hp_resulte.hp_light += 100;

        } else if (2000 < x && x < 2499) {
            hp_resulte.hp_light += 75;

        } else if (2500 < x && x < 2999) {
            hp_resulte.hp_light += 50;
            hight = "light";
        } else if (3000 < x && x < 4950) {
            hp_resulte.hp_light += 25;
            hight = "light";

        }
    }
    //------------------------------------------------constData-----------------------------------------------------------------------------------


    function sumd(result) {
        result = sum.ec + sum.temp + sum.light;
        console.log(result);
        if (result == "moistcooldark" || result == "moistcoollight" || result == "moisthotdark" | result == "moisthotlight" || result == "moistdark" || result == "moistlight" || result == "moistcool" || result == "moisthot" || result == "moist") {
            sum.moist = 'moist';
            console.log("Is moist");
            return avata();

        } else if (result == 'drycooldark' || result == 'drycoollight' || result == 'dryhotdark' || result == 'dryhotlight' || result == 'drydark' || result == 'drylight' || result == 'drycool' || result == 'dryhot' || result == 'dry') {
            sum.dry = 'dry';
            console.log("Is dry");
            return avata();

        } else if (result == 'cooldark' || result == 'coollight' || result == 'cool') {
            sum.cool = 'cool';
            console.log("Is cool");
            return avata();

        } else if (result == 'hotdark' || result == 'hotlight' || result == 'hot') {
            sum.hot = 'hot';
            console.log("Is hot");
            return avata();

        } else if (result == 'dark') {
            sum.dark = 'dark';
            console.log("Is dark");
            return avata();

        } else if (result == 'light') {
            sum.light_select = 'light';
            console.log("Is light");
            return avata();

        } else if (result == '') {
            sum.happy = 'happy';
            console.log("Is happy");
            return avata();
        }
    }


    var datePoint = [];
    var Final_Result = [];

    function addDate(data) {
        datePoint = data;
        const date = datePoint;
        var date1 = new Date(date);
        var date2 = new Date();
        var one_day = 1000 * 60 * 60 * 24

        // To calculate the time difference of two dates
        var Result = Math.round(date2.getTime() - date1.getTime()) / (one_day);
        Final_Result = Result.toFixed(0);
        // document.getElementById("date1").innerHTML = date1;
        // document.getElementById("date2").innerHTML = date2;
        document.getElementById("Difference_In_Days").innerHTML = 'วันปลูก' + Final_Result + '    วัน';
        console.log('date' + Final_Result);

    }
    // $.getJSON("http://127.0.0.1:8000/date_avata", addDate);
    $.getJSON("https://devplant.csmju.com/date_avata", addDate);

    //-------------------------------------------avata-------------------------------------------------------------------
    function pot_user(user_pot) {
        document.getElementById("User_pot").innerHTML = user_pot;
    }
    // $.getJSON("http://127.0.0.1:8000/user_pot", pot_user);
    $.getJSON("https://devplant.csmju.com/user_pot", pot_user);

    function avata(data) {
        console.log('Avata_function' + data);

        if (data == 'option1') {
            console.log("Is turn option1");
            return option1(data);

        } else if (data == 'option2') {
            console.log("Is turn option2");
            return option2(data);

        } else if (data == 'option3') {
            console.log("Is turn option3");
            return option3(data);

        } else if (data == 'option4') {
            console.log("Is turn option4");
            return option4(data);

        }
    }
    // $.getJSON("http://127.0.0.1:8000/avata", avata);

    //----------------------------------------Option1-----------------------------------------------------------------------
    function option1(options) {
        if (options == 'option1') {
            if (1 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return seed_happy();
                } else if (sum.moist == 'moist') {
                    return seed_moist();
                } else if (sum.dry == 'dry') {
                    return seed_dry();
                } else if (sum.cool == 'cool') {
                    return seed_cool();
                } else if (sum.dark == 'dark') {
                    return seed_dark();
                } else if (sum.hot == 'hot') {
                    console.log("return is true");
                    return seed_hot();
                } else if (sum.light_select == 'light') {
                    return seed_light();
                }
            } else if (4 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return sprout_happy();
                } else if (sum.moist == 'moist') {
                    return sprout_moist();
                } else if (sum.dry == 'dry') {
                    return sprout_dry();
                } else if (sum.cool == 'cool') {
                    return sprout_cool();
                } else if (sum.dark == 'dark') {
                    return sprout_dark();
                } else if (sum.hot == 'hot') {
                    return sprout_hot();
                } else if (sum.light_select == 'light') {
                    return sprout_light();
                }
            } else if (40 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bud_happy();
                } else if (sum.moist == 'moist') {
                    return bud_moist();
                } else if (sum.dry == 'dry') {
                    return bud_dry();
                } else if (sum.cool == 'cool') {
                    return bud_cool();
                } else if (sum.dark == 'dark') {
                    return bud_dark();
                } else if (sum.hot == 'hot') {
                    return bud_hot();
                } else if (sum.light_select == 'light') {
                    return bud_light();
                }

            } else if (50 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bloom_happy();
                } else if (sum.moist == 'moist') {
                    return bloom_moist();
                } else if (sum.dry == 'dry') {
                    return bloom_dry();
                } else if (sum.cool == 'cool') {
                    return bloom_cool();
                } else if (sum.dark == 'dark') {
                    return bloom_dark();
                } else if (sum.hot == 'hot') {
                    return bloom_hot();
                } else if (sum.light_select == 'light') {
                    return bloom_light();
                } else if (70 >= Final_Result) {
                    document.getElementById("mp4_src").src = "../../img/bloom/dead.mp4";
                    document.getElementById("myVideo").load();
                }
            }

        }
    }
    //----------------------------------------Option2-----------------------------------------------------------------------
    function option2(data) {
        if (data == 'option2') {
            if (35 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return sprout_happy();
                } else if (sum.moist == 'moist') {
                    console.log("Is turn moist option2");
                    return sprout_moist();
                } else if (sum.dry == 'dry') {
                    return sprout_dry();
                } else if (sum.cool == 'cool') {
                    return sprout_cool();
                } else if (sum.dark == 'dark') {
                    return sprout_dark();
                } else if (sum.hot == 'hot') {
                    return sprout_hot();
                } else if (sum.light_select == 'light') {
                    return sprout_light();
                }

                console.log(sum.moist);
                document.getElementById("mp4_src").src = "../../img/sprout/hot.mp4";
                document.getElementById("myVideo").load();
            } else if (36 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bud_happy();
                } else if (sum.moist == 'moist') {
                    return bud_moist();
                } else if (sum.dry == 'dry') {
                    return bud_dry();
                } else if (sum.cool == 'cool') {
                    return bud_cool();
                } else if (sum.dark == 'dark') {
                    return bud_dark();
                } else if (sum.hot == 'hot') {
                    return bud_hot();
                } else if (sum.light_select == 'light') {
                    return bud_light();
                }
            } else if (46 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bloom_happy();
                } else if (sum.moist == 'moist') {
                    return bloom_moist();
                } else if (sum.dry == 'dry') {
                    return bloom_dry();
                } else if (sum.cool == 'cool') {
                    return bloom_cool();
                } else if (sum.dark == 'dark') {
                    return bloom_dark();
                } else if (sum.hot == 'hot') {
                    return bloom_hot();
                } else if (sum.light_select == 'light') {
                    return bloom_light();
                }
            } else if (66 >= Final_Result) {
                document.getElementById("mp4_src").src = "../../img/bloom/dead.mp4";
                document.getElementById("myVideo").load();
            }

        }
    }

    //----------------------------------------Option3-----------------------------------------------------------------------
    function option3(options) {
        if (options == 'option3') {
            if (1 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bud_happy();
                } else if (sum.moist == 'moist') {
                    return bud_moist();
                } else if (sum.dry == 'dry') {
                    return bud_dry();
                } else if (sum.cool == 'cool') {
                    return bud_cool();
                } else if (sum.dark == 'dark') {
                    return bud_dark();
                } else if (sum.hot == 'hot') {
                    return bud_hot();
                } else if (sum.light_select == 'light') {
                    return bud_light();
                }
            } else if (11 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bloom_happy();
                } else if (sum.moist == 'moist') {
                    return bloom_moist();
                } else if (sum.dry == 'dry') {
                    return bloom_dry();
                } else if (sum.cool == 'cool') {
                    return bloom_cool();
                } else if (sum.dark == 'dark') {
                    return bloom_dark();
                } else if (sum.hot == 'hot') {
                    return bloom_hot();
                } else if (sum.light_select == 'light') {
                    return bloom_light();
                }
            } else if (31 >= Final_Result) {
                document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
                document.getElementById("myVideo").load();
            }
        }
    }
    //----------------------------------------Option4-----------------------------------------------------------------------
    function option4(options) {
        if (options == 'option4') {
            if (1 >= Final_Result) {
                if (sum.happy == 'happy') {
                    return bloom_happy();
                } else if (sum.moist == 'moist') {
                    return bloom_moist();
                } else if (sum.dry == 'dry') {
                    return bloom_dry();
                } else if (sum.cool == 'cool') {
                    return bloom_cool();
                } else if (sum.dark == 'dark') {
                    return bloom_dark();
                } else if (sum.hot == 'hot') {
                    return bloom_hot();
                } else if (sum.light_select == 'light') {
                    return bloom_light();
                }
            } else if (21 >= Final_Result) {
                document.getElementById("mp4_src").src = "../../img/Bloom/dead.mp4";
                document.getElementById("myVideo").load();
            }

        }
    }
    //---------------------------------------------seedAvata-----------------------------------------------------------------------------------------------
    function seed_happy() {
        document.getElementById("mp4_src").src = "../../img/seed/happy.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_moist() {
        document.getElementById("mp4_src").src = "../../img/seed/moist.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_dry() {
        document.getElementById("mp4_src").src = "../../img/seed/dry.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_cool() {
        document.getElementById("mp4_src").src = "../../img/seed/cool.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_hot() {
        document.getElementById("mp4_src").src = "../../img/seed/hot.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_dark() {
        document.getElementById("mp4_src").src = "../../img/seed/dark.mp4";
        document.getElementById("myVideo").load();
    }

    function seed_light() {
        document.getElementById("mp4_src").src = "../../img/seed/light.mp4";
        document.getElementById("myVideo").load();
    }

    //---------------------------------------------sproutAvata-----------------------------------------------------------------------------------------------
    function sprout_happy() {
        document.getElementById("mp4_src").src = "../../img/sprout/happy.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_moist() {
        document.getElementById("mp4_src").src = "../../img/sprout/moist.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_dry() {
        document.getElementById("mp4_src").src = "../../img/sprout/dry.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_cool() {
        document.getElementById("mp4_src").src = "../../img/sprout/cool.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_hot() {
        document.getElementById("mp4_src").src = "../../img/sprout/hot.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_dark() {
        document.getElementById("mp4_src").src = "../../img/sprout/dark.mp4";
        document.getElementById("myVideo").load();
    }

    function sprout_light() {
        document.getElementById("mp4_src").src = "../../img/sprout/light.mp4";
        document.getElementById("myVideo").load();
    }

    //---------------------------------------------BudsAvata-----------------------------------------------------------------------------------------------
    function bud_happy() {
        document.getElementById("mp4_src").src = "../../img/buds/happy.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_moist() {
        document.getElementById("mp4_src").src = "../../img/buds/moist.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_dry() {
        document.getElementById("mp4_src").src = "../../img/buds/dry.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_cool() {
        document.getElementById("mp4_src").src = "../../img/buds/cool.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_hot() {
        document.getElementById("mp4_src").src = "../../img/buds/hot.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_dark() {
        document.getElementById("mp4_src").src = "../../img/buds/dark.mp4";
        document.getElementById("myVideo").load();
    }

    function bud_light() {
        document.getElementById("mp4_src").src = "../../img/buds/light.mp4";
        document.getElementById("myVideo").load();
    }

    //---------------------------------------------BloomAvata-----------------------------------------------------------------------------------------------

    function bloom_happy() {
        document.getElementById("mp4_src").src = "../../img/Bloom/happy.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_moist() {
        document.getElementById("mp4_src").src = "../../img/Bloom/moist.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_dry() {
        document.getElementById("mp4_src").src = "../../img/Bloom/dry.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_cool() {
        document.getElementById("mp4_src").src = "../../img/Bloom/cool.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_hot() {
        document.getElementById("mp4_src").src = "../../img/Bloom/hot.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_dark() {
        document.getElementById("mp4_src").src = "../../img/Bloom/dark.mp4";
        document.getElementById("myVideo").load();
    }

    function bloom_light() {
        document.getElementById("mp4_src").src = "../../img/Bloom/light.mp4";
        document.getElementById("myVideo").load();
    }




}