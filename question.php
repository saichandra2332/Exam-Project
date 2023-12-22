<?php
require_once "config.php";
session_start();
$main_id1=$_SESSION["main_id"];
$Getname=mysqli_query($conn, "SELECT * FROM user_details WHERE STATUS='1'and u_id='$main_id1'") or die(mysqli_error($conn));
$resdetails2=mysqli_fetch_object($Getname);
$username=$resdetails2->u_mail;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apptitude questions</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&family=Roboto&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
            .draggable {
            width: 200px;
            height: 30px;
            cursor: grab;
            margin: 10px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            }

            .draggable:active {
            cursor: grabbing;
            background-color: plum;
            }

            @keyframes colorAnimation {
            to {
                filter: hue-rotate(360deg);
            }
            }

            .dropzone {
            width: 311px;
            height: 80px;
            border: 2px dashed gray;
            position: absolute;
            left: 130px;
            top: 176px;
            }

            .red-btn {
            background-color: lightgreen;
            width: 91px;
            height: 30px;
            border: none;
            outline: none;
            border-radius: 11px;
            position: absolute;
            top: 200px;
            left: 289px;
            font-size: 17px;
            font-weight: 600;
            color: black;
            cursor: pointer;
            }

            .btn:hover {
            opacity: .6;
            }

            .bg {
            background: url('blue.jpg');
            height: 100vh;
            width: 100%;
            position: absolute;
            background-size: cover;
            filter: blur(5px);
            z-index: -1;
            opacity: 0.7;
            filter: brightness(75%);
            }

            body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            }

            * {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
            }

            .vertical-line {
            border-left: 2px solid black;
            height: 600px;
            padding: 0;
            position: absolute;
            left: 830px;
            top: -53px;
            }

            .btns {
            height: 42px;
            width: 107px;
            border: none;
            outline: none;
            border-radius: 23px;
            position: absolute;
            top: 10px;
            left: 885px;
            cursor: pointer;
            font-size: 19px;
            font-weight: 500;
            }

            .bt1{
            width: 119px;
            height: 46px;
            border-radius: 17px;
            border: none;
            outline: none;
            font-size: 18px;
            background-color: lightgreen;
            position: absolute;
            left: 1061px;
            top: 580px;
            cursor: pointer;
            font-weight: 600;
            }

            .styled-button {
            display: inline-block;
            padding: 10px 25px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            color: white;
            background-color: green;
            border: none;
            position: relative;
            clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
            top: -73px;
            left: 870px;
            }
    </style>
</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <form method="POST">
  <div class="bg"></div>
  <img src="VULCANTECHS-litelogo.png" style="height: 123px;width: 542px;position: relative; left: 562px;">
  <div style="position: relative;left: 100px;top: 50px;">
  <label style="font-size: 20px;position: relative;left: -14px; top: -36px;">Q.</label>
    <input type="" name="num" id="num"style="font-size: 20px;width: 25px;height: 25px;position: relative;top: -38px;left: -14px;border: none;outline: none; background: transparent;box-shadow: none;">
    <textarea style="width: 381px;height: 80px;font-size: 20px;border: none;outline: none; background: transparent;box-shadow: none;" type="text" name="" id="inputText"></textarea><br><br>
    <input style="position:relative;left:77px;cursor: pointer;" type="radio" name="rad" id="rad1" value="A"><input style="width: 200px; height: 30px; position: relative;left: 81px;border: none;outline: none; background: transparent;box-shadow: none;font-size: 20px;"   type="text" name="input1" id="input1" value=""><br><br><br><br>
    <input style="position:relative;left:77px;cursor: pointer;" type="radio" name="rad" id="rad1" value="A"><input style="width: 200px; height: 30px; position: relative;left: 81px;border: none;outline: none; background: transparent;box-shadow: none;font-size: 20px;"   type="text" name="input2" id="input2" value=""><br><br><br><br>
    <input style="position:relative;left:77px;cursor: pointer;" type="radio" name="rad" id="rad1" value="A"><input style="width: 200px; height: 30px; position: relative;left: 81px;border: none;outline: none; background: transparent;box-shadow: none;font-size: 20px;"   type="text" name="input3" id="input3" value=""><br><br><br><br>
    <input style="position:relative;left:77px;cursor: pointer;" type="radio" name="rad" id="rad1" value="A"><input style="width: 200px; height: 30px; position: relative;left: 81px;border: none;outline: none; background: transparent;box-shadow: none;font-size: 20px;"   type="text" name="input4" id="input4" value=""><br><br><br><br>

    
    <button class="btn red-btn" type="button" onclick="qbuttons(nextid)" style="position: absolute;left: 370px;top: 450px;">NEXT</button>
    <button class="btn red-btn" type="button" onclick="qbuttons(previousid)" style="position: absolute;top: 450px;left: 200px">Previous</button>

    <div class="vertical-line"></div>
    <h3 style="position: relative;top: -483px;left: 936px;">Apptitude</h3>
    <button class="btns"type="button"onclick="qbuttons(1)" name="q1" id="q1" style="background-color: black;height: 29px;width: 58px;color: white;">01</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 10px;left: 958px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(2)"type="button" name="q2" id="q2">02</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 10px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(3)"type="button" name="q3" id="q3">03</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 885px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(4)"type="button" name="q4" id="q4">04</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 960px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(5)"type="button" name="q5" id="q5">05</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(6)"type="button" name="q6" id="q6">06</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 885px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(7)"type="button" name="q7" id="q7">07</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 963px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(8)"type="button" name="q8" id="q8">08</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color:black ;color: white;"onclick="qbuttons(9)"type="button" name="q9" id="q9">09</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 166px;left: 967px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(10)"type="button" name="q10" id="q10">10</button>
    <h3 style="position: relative;top: -504px;left: 1206px;">Reasoning</h3>
    <button class="btns"type="button"onclick="qbuttons(11)" name="q11" id="q11" style="background-color: black;height: 29px;width: 58px;top: 10px;left: 1149px;color: white;">01</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 10px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(12)"type="button" name="q12" id="q12">02</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 10px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(13)"type="button" name="q13" id="q13">03</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 1149px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(14)"type="button" name="q14" id="q14">04</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(15)"type="button" name="q15" id="q15">05</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 65px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(16)"type="button" name="q16" id="q16">06</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 1149px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(17)"type="button" name="q17" id="q17">07</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(18)"type="button" name="q18" id="q18">08</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 118px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color:black ;color: white;"onclick="qbuttons(19)"type="button" name="q19" id="q19">09</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 166px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(20)"type="button" name="q20" id="q20">10</button>
    <h3 style="position: relative;top: -260px;left: 962px;">Verbal</h3>
    <button class="btns"type="button"onclick="qbuttons(21)" name="q21" id="q21" style="background-color: black;height: 29px;width: 58px;top: 270px;left: 885px;color: white;">01</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 270px;left: 963px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(22)"type="button" name="q22" id="q22">02</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 270px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(23)"type="button" name="q23" id="q23">03</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 885px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(24)"type="button" name="q24" id="q24">04</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 963px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(25)"type="button" name="q25" id="q25">05</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(26)"type="button" name="q26" id="q26">06</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 885px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(27)"type="button" name="q27" id="q27">07</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 963px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(28)"type="button" name="q28" id="q28">08</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 1030px;cursor: pointer;font-size: 19px;font-weight: 500;background-color:black ;color: white;"onclick="qbuttons(29)"type="button" name="q29" id="q29">09</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 410px;left: 965px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(30)"type="button" name="q30" id="q30">10</button>

    <h3 style="position: relative;top: -278px;left: 1210px;">Technical</h3>
    <button class="btns"type="button"onclick ="qbuttons(31)" name="q31" id="q31" style="background-color: black;height: 29px;width: 58px;top: 270px;left: 1149px;color: white;">01</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 270px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(32)"type="button" name="q32" id="q32">02</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 270px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(33)"type="button" name="q33" id="q33">03</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 1149px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(34)"type="button" name="q34" id="q34">04</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(35)"type="button" name="q35" id="q35">05</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 320px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(36)"type="button" name="q36" id="q36">06</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 1149px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(37)"type="button" name="q37" id="q37">07</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(38)"type="button" name="q38" id="q38">08</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 365px;left: 1305px;cursor: pointer;font-size: 19px;font-weight: 500;background-color:black ;color: white;"onclick="qbuttons(39)"type="button" name="q39" id="q39">09</button>
    <button style="height: 29px;width: 58px;border: none;outline: none;border-radius: 23px;position: absolute;top: 410px;left: 1223px;cursor: pointer;font-size: 19px;font-weight: 500;background-color: black;color: white;"onclick="qbuttons(40)"type="button" name="q40" id="q40">10</button>
    
    
    <div style="font-size: 40px;position: absolute;left: 1224px;top: -141px;    font-family: 'Arial', sans-serif;" id="timer"></div>
    <input class="styled-button"type="button"name="cans" id="cans"></button>A
    <input class="styled-button" style="position: relative;top: -73px; left: 920px; background-color: red;" type="button"name="cvi" id="cvi">
    <input class="styled-button" style="position: relative;top: -73px; left: 970px; background-color: black;"type="button"name="cnv" id="cnv">


    <button class="bt1" type="button" onclick="full()">SUBMIT</button>

    <script>

    $(document).ready(function () {   
        qbuttons(currentApId);
    });


    Swal.fire({
    icon: 'info',
    title: 'Start',
    text: 'Are you sure! Do you want to start the exam.',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, proceed!',
    allowOutsideClick: false,
}).then((result) => {
    if (result.isConfirmed) {
        // Your code to proceed with the exam
        // Add your click event code here if you want it to be executed only when "Yes, proceed!" is clicked.
        const element = document.documentElement;
        if (!document.fullscreenElement) {
            element.requestFullscreen();
        }
    } else if (result.dismiss === Swal.DismissReason.cancel) {
        window.location.href = 'terms.php';
    }
});


    document.onkeydown = function(evt) {
        evt = evt || window.event;
        console.log(evt.keyCode)
        if(evt.keyCode == 27 || evt.keyCode == 116 || evt.keyCode == 122 || evt.keyCode == 123) {
            evt.preventDefault();
        }
    };




var countdownTime = 3600;
var sweetAlertShown = false; 

function updateTimer() {
    var hours = Math.floor(countdownTime / 3600);
    var minutes = Math.floor((countdownTime % 3600) / 60);
    var seconds = countdownTime % 60;

    document.getElementById('timer').innerHTML = formatTime(hours) + ':' + formatTime(minutes) + ':' + formatTime(seconds);

    if (countdownTime === 300 && !sweetAlertShown) {
        sweetAlertShown = true;
        Swal.fire({
            icon: 'warning',
            title: 'Time is up!',
            text: 'Your time is almost up!',
        });
    } else if (countdownTime <= 0) {
        // Redirect to another page after 1 hour
        clearInterval(timerInterval);
        window.location.href = 'timeup.php';
    } else {
        countdownTime--;
    }
}

function formatTime(time) {
    return time < 10 ? '0' + time : time;
}

var timerInterval = setInterval(updateTimer, 1000);



let currentApId= 1; 
let nextid=1;
let preid=0;
let previousid=currentApId-1;
let anscount=0;
let viewcount=0;
let ntviewcount=0;
let vvc=0;
// let g = "";
function qbuttons(currentApId) {
    document.getElementById("q" + currentApId).style.background='red';
    viewcount++;
    fetchData1(currentApId);
    let g=radioanswer();   
    saveAnswer(currentApId,g);
    console.log(currentApId);
    console.log(g);
    nextid=currentApId;
    nextid++; 
    preid=currentApId;  
    previousid=currentApId;
    previousid--;  
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.checked = false;
    });
}
function radioanswer(g){
    const ansfield = document.getElementsByName("rad");

    for (let j = 0; j < ansfield.length; j++) {
        if (ansfield[j].checked) {
            g = ansfield[j].value;
            console.log(g);
    if(g==null){
        document.getElementById("q" + preid).style.background='yellow';
    }else if(g!=""){
        document.getElementById("q" + preid).style.background='green';
        anscount++;
        vvc=viewcount-anscount;
    }
    ntviewcount=40-(viewcount);
    
    $('#cans').val(anscount);
    $('#cvi').val(vvc);
    $('#cnv').val(ntviewcount);
        return g;
        }
    }
        
}


function fetchData1(currentApId) {
       

    if (currentApId<= 10) {
        aptitudesection(currentApId);
        
    }else if(currentApId > 10 && currentApId<= 20) {
        
        reasoningsection(currentApId);
        
    }else if(currentApId > 20 && currentApId<= 30) {
       verbalsection(currentApId);
       
    }else if (currentApId> 30 && currentApId<= 40) {
       
       technicalsection(currentApId);
    }else{

    }
    

   
}


function aptitudesection(currentApId){
    table = 'apptitude';  
        $.ajax({
        url: 'ap.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, ap_id:currentApId},
        success: function (data) {
        if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.ap_id);
                $('#inputText').val(data.ap_question);
                $('#input1').val(data.apo_1);
                $('#input2').val(data.apo_2);
                $('#input3').val(data.apo_3);
                $('#input4').val(data.apo_4);
                currentApId++;
                
                 
                
            } else {
                console.log('No more data found or invalid data format.');
            }
    },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    });
}


function reasoningsection(currentApId){
        table = 'reasoning';  
        $.ajax({
        url: 're.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, r_id: currentApId },
        success: function (data) {
        if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.r_id);
                $('#inputText').val(data.re_question);
                $('#input1').val(data.reo_1);
                $('#input2').val(data.reo_2);
                $('#input3').val(data.reo_3);
                $('#input4').val(data.reo_4);
                
                currentApId++;

                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
    }
    });
}


function verbalsection(currentApId){
    table = 'verbal';  
        $.ajax({
        url: 've.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, ve_id: currentApId },
        success: function (data) {
        if (data && Object.keys(data).length > 0) {
                $('#num').val(data.ve_id);
                $('#inputText').val(data.ve_question);
                $('#input1').val(data.veo_1);
                $('#input2').val(data.veo_2);
                $('#input3').val(data.veo_3);
                $('#input4').val(data.veo_4);
                currentApId++;
                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    });
}


function technicalsection(currentApId){
    table = 'tech'; 
        $.ajax({
        url: 'te.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, te_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                $('#num').val(data.te_id);
                $('#inputText').val(data.te_question);
                $('#input1').val(data.teo_1);
                $('#input2').val(data.teo_2);
                $('#input3').val(data.teo_3);
                $('#input4').val(data.teo_4);
                currentApId++;
                
                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    }); 
}


function saveAnswer(currentApId, g) {
    $.ajax({
        url: 'save.php',
        type: 'POST',
        data: { question_id: currentApId-1, answer_id: g },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error('Error saving answer:', status, error);
        }
    });
}


function full() {
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to submit ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, proceed!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'examover.php';
        }
    });
}


</script>
  </div>
</form>
</body>
</html>