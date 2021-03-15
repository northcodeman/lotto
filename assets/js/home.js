var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

var ss = 0;

$(document).ready(function() {
    startTime()

    showLottoDate()

    getStockData()
});


function startTime() {



    var today = new Date();

    var DD = today.getDate();

    var MM = today.getMonth();

    var YY = today.getFullYear();

    var h = today.getHours();

    var m = today.getMinutes();

    var s = today.getSeconds();



    m = checkTime(m);

    s = checkTime(s);

    var time = "วันที่ " + DD + " " + month[MM] + " " + (YY + 543) + "  |  " + h + ":" + m + ":" + s;

    document.getElementById('current-time').innerHTML = time;



    var t = setTimeout(startTime, 100);



}

function checkTime(i) {

    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10

    return i;

}

function showLottoDate() {
    request("latest-date.php", (lottoList) => {
        if (lottoList !== null) {
            if (lottoList.length > 0) {
                var cardData = ''
                var stockBtnData = ''
                lottoList.forEach(lotto => {

                    if (lotto.name == "หวยไทย") {
                        document.getElementById('date-thai').innerHTML = lotto.date
                    } else if (lotto.name == "หวยมาเลย์") {
                        document.getElementById('date-malay').innerHTML = lotto.date
                       
                    } else if (lotto.name == "หวยฮานอยVIP") {
                        document.getElementById('date-hanoi-vip').innerHTML = lotto.date
                        
                    } else if (lotto.name == "หวยฮานอยพิเศษ") {
                        document.getElementById('date-hanoi-s').innerHTML = lotto.date
                       
                    } else if (lotto.name == "หวยฮานอย") {
                        document.getElementById('date-hanoi').innerHTML = lotto.date
                        
                    } else if (lotto.name == "หวยลาว") {

                        document.getElementById('date-lao').innerHTML = lotto.date

                    } else if (lotto.name == "หวยลาวสตาร์") {

                        document.getElementById('date-lao-star').innerHTML = lotto.date

                    } else if (lotto.name == "หวยลาว VIP") {

                        document.getElementById('date-lao-vip').innerHTML = lotto.date

                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=0",
                    success: function (response) {
                        $("#pol0").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=1",
                    success: function (response) {
                        $("#pol1").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=2",
                    success: function (response) {
                        $("#pol2").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=3",
                    success: function (response) {
                        $("#pol3").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=4",
                    success: function (response) {
                        $("#pol4").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=5",
                    success: function (response) {
                        $("#pol5").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=6",
                    success: function (response) {
                        $("#pol6").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=7",
                    success: function (response) {
                        $("#pol7").html(response);
                    }
                });
            }
        } else {
            console.log('lottoList Error', lottoList)
        }
    })

}

function getStockData() {

    var allstock = []

    var cardContent = document.getElementById('cardSlide')

    var btnContent = document.getElementById('StockBtn')

    request("stock.php", (stockdata) => {

        if (stockdata.length > 0) {

            var cardData = ''

            var stockBtnData = ''

            stockdata.forEach((Stock, index) => {

                cardData += '<div class="item" id="card-' + index + '" style="background:linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(masterpiece/assets/images/flags/bgcard.jpg); background-size: cover; background-position: center; width: 320px;">'

                cardData += '<div class="pr_obj">'

                cardData += '<div class="p-3 pr_main">'

                cardData += '<div class="row">'

                cardData += '<div class="col-12">'

                cardData += '<div class="ticket">'

                cardData += '<div class="ticket_number">'

                cardData += '<b style="color:black;margin-right: 15px;font-family: Prompt;font-size: 24px;">3ตัวบน</b>'

                cardData += '<div>' + Stock.prize1[0] + '</div>'

                cardData += '<div>' + Stock.prize1[1] + '</div>'

                cardData += '<div>' + Stock.prize1[2] + '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '<div class="col-12">'

                cardData += '<br>'

                cardData += '</div>'

                cardData += '<div class="col-6">'

                cardData += '<center>'

                cardData += '<b style="color:white;margin-right: 15px;font-family: Prompt;font-size: 16px;">2 ตัวบน</b>'

                cardData += '</center>'

                cardData += '<div class="two_reward_with_text">'

                cardData += '<div class="two_reward_number">'

                cardData += '<div>' + Stock.prize2[0][0] + '</div>'

                cardData += '<div>' + Stock.prize2[0][1] + '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '<div class="col-6">'

                cardData += '<center>'

                cardData += '<b style="color:white;margin-right: 15px;font-family: Prompt;font-size: 16px;">2 ตัวล่าง</b>'

                cardData += '</center>'

                cardData += '<div class="two_reward_with_text">'

                cardData += '<div class="two_reward_number">'

                cardData += '<div>' + Stock.prize2[1][0] + '</div>'

                cardData += '<div>' + Stock.prize2[1][1] + '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div><br><br>'

                cardData += '<div class="pr_subhead">' + Stock.date + '</div>'

                cardData += '<div class="pr_head">' + Stock.name + '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'



                stockBtnData += '<div class="col-md-2 col-4"><a id="owlnav-' + index + '" onclick="btnTrig(' + index + ')" style="margin-top:5px;font-size:12px" class="btn btn-outline-danger btn-sm btn-block">' + Stock.name + '</a></div>'



                // $('.owlnav-'+index).click(function () {

                // 	//$('#owl-carousel').trigger('to.owl.carousel', index)

                // 	console.log(index)

                // });

            });



            cardContent.innerHTML = cardData

            btnContent.innerHTML = stockBtnData



            startSlide()

        }

    })

}

function btnTrig(index) {

    console.log(index)

    $('.owl-carousel').trigger('to.owl.carousel', [index, 100, true]);

    if (index >= 13) {

        element = document.getElementsByClassName("btn-danger")

        for (var i = 0; i < 16; i++) {

            if (i !== index) {

                document.getElementById("owlnav-" + i).className = 'btn btn-outline-danger btn-sm btn-block'

            } else {

                document.getElementById("owlnav-" + index).className = 'btn btn-danger btn-sm btn-block'

            }

        }

    }

}

function onOwlChange(index) {



    console.log('trig', index)

    //var index = property.item.index;

    // var active = $(".owl-carousel").find(".owl-item.active");

    element = document.getElementsByClassName("btn-danger")

    for (var i = 0; i < 16; i++) {

        if (i !== index) {

            document.getElementById("owlnav-" + i).className = 'btn btn-outline-danger btn-sm btn-block'

        } else {

            document.getElementById("owlnav-" + index).className = 'btn btn-danger btn-sm btn-block'

        }

    }

}

function request(url, callback) {

    var xhr = new XMLHttpRequest();

    xhr.timeout = 60000;

    xhr.responseType = 'json';

    xhr.onreadystatechange = function(e) {

        if (xhr.readyState === 4) {

            if (xhr.status === 200) {

                console.log('Success !', url);

                callback(xhr.response)

            } else {

                console.log('Error !', url)

            }

        }

    }

    xhr.ontimeout = function() {

        console.log('Timeout !', url)

    }

    xhr.open('GET', url, true)

    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.send();

}

function sleep(time) {

    return new Promise((resolve) => setTimeout(resolve, time));

}