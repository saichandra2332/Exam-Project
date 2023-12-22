<?php
require_once "config.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
$Getname=mysqli_query($conn, "SELECT * FROM user_details WHERE u_status='1'and u_id='$main_id1'") or die(mysqli_error($conn));
    $resdetails2=mysqli_fetch_object($Getname);
        $username=$resdetails2->u_name;
        if(isset ($_POST['submit'])){
            header ("location:examcompletedpage.php");

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exampage1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
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
            background: url('pexels-photo-255379.webp');
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
            top: 480px;
            cursor: pointer;
            font-weight: 600;
            }
    
   
  </style>

</head>
<body>
<form method="POST">
<div class="row p-0 m-0" style="background-color:#384b7a;">
<div class="col-xl-3 col-lg-3 col-3">
<img src="images/WhatsApp Image 2023-09-20 at 17.45.45_c2b202a8.jpg" style="width:120px;height:100px;border-radius:50%;margin-left:20px;"><br>
<input class="text-center ms-2 text-capitalize "style="border-radius:50px; width:130px;height:40px;border:none;background-color:#384b7a;color:white;" type="text"name="loginid" id="loginid" value="<?php echo $username;?>"></div> 
<div class="col-xl-1 col-lg-1 col-1"></div>
<div class="col-xl-5 col-lg-5 col-5 mt-5 "><h1 style="color:#20c997;">All The Best<i class="bi bi-hand-thumbs-up-fill"></i></h1> 
</div>
<div class="col-xl-3 col-lg-3 col-3">
<h1 style="color:rgb(207, 122, 10);"><u>Time left</u></h1> 
			<span style="font-size: 30px;color:white;"id="hr">00</span> 
			<span style="font-size: 20px;color:white;">Hr</span> 
			<span style="font-size: 30px;color:white;"id="min">00</span> 
			<span style="font-size: 20px;color:white;">Min</span> 
			<span style="font-size: 30px;color:white;"id="sec">00</span> 
			<span style="font-size: 20px;color:white;">Sec</span> </br> 
</div>
</div>

<div class="row p-0 m-0">
<div class="col-xl-8 col-lg-8 col-md-8">

        <div class="col-xl-8 col-lg-8 ms-5 ps-5"style="height:400px;padding:10px;margin-top:10px;">
            <div class="panel">
                <div id="examquestionsblock">
                <table border="0px">
                    <tr>
                    Q.<input style="width:25px;font-size:15px;background-color:#d7d7d7;border:none;" type="tel" name="num" id="num" value=""disabled>:<td colspan="3"><textarea class="mb-3 text-center text-capitalize form-control w-100"style="background-color:#d7d7d7;border:none;resize: none;" rows="4" cols="100" type="textarea" name="name" id="name" value=""disabled></textarea></td>
                    </tr>   
                    <tr>
                        <td>A.<input  style="width:15px;height:15px;" type="radio" name="rad" id="rad1" value="A"><input  class="my-4 text-center text-capitalize" type="text" name="a" id="a" value=""disabled></td>
                        <td></td>
                        <td>B.<input style="width:15px;height:15px;"  type="radio" name="rad" id="rad2" value="B"><input  class="my-4 text-center text-capitalize" type="text" name="b" id="b" value=""disabled></td>
                    </tr>
                    <tr>
                        <td>C.<input style="width:15px;height:15px;"  type="radio" name="rad" id="rad3" value="C"><input  class="my-4 text-center text-capitalize" type="text" name="c" id="c" value=""disabled></td>
                        <td></td>
                        <td>D.<input style="width:15px;height:15px;"  type="radio" name="rad" id="rad4" value="D"><input  class="my-4 text-center text-capitalize" type="text" name="d" id="d" value=""disabled></td>
                    </tr>

                    <tr>
                    </tr>
                </table> 
                
</div>
            </div>
</div>
        
</div>

<div class="col-xl-2 col-lg-2 col-md-2 mt-3 border-start border-dark">
    <h3 style="color:#a40475"><u>Aptitude</u></h3>
    <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(1)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q1" id="q1" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(2)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q2" id="q2" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(3)" class="btn rounded-pill;"  style="background-color:#cfe2ff;color:white;" type="button" name="q3" id="q3" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(4)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q4" id="q4" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(5)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q5" id="q5" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(6)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q6" id="q6" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(7)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q7" id="q7" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(8)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q8" id="q8" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(9)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q9" id="q9" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(10)" style="background-color:#cfe2ff;color:white;" type="button" name="q10" id="q10" value="Q10"></center></td>
                    </tr>
                    
                </table>
                <h3 style="color:#a40475"><u>Reasoning</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(11)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q11" id="q11" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(12)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q12" id="q12" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(13)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q13" id="q13" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(14)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q14" id="q14" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(15)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q15" id="q15" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(16)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q16" id="q16" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(17)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q17" id="q17" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(18)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q18" id="q18" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(19)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q19" id="q19" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(20)" style="background-color:#cfe2ff;color:white;" type="button" name="q20" id="q20" value="Q10"></center></td>
                    </tr>
                    
                </table>
</div>
                <div class="col-xl-2 col-lg-2 col-md-2 mt-3">
                <h3 style="color:#a40475"><u>Verbal</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(21)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q21" id="q21" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(22)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q22" id="q22" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(23)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q23" id="q23" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(24)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q24" id="q24" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(25)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q25" id="q25" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(26)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q26" id="q26" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(27)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q27" id="q27" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(28)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q28" id="q28" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(29)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q29" id="q29" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(30)" style="background-color:#cfe2ff;color:white;" type="button" name="q30" id="q30" value="Q10"></center></td>
                    </tr>
                    
                </table>
                <h3 style="color:#a40475"><u>Technical</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(31)" class="btn rounded-pill;"  style="background-color:#cfe2ff;color:white;" type="button" name="q31" id="q31" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(32)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q32" id="q32" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(33)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q33" id="q33" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(34)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q34" id="q34" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(35)"class="btn rounded-pill;"style="background-color:#cfe2ff;color:white;" type="button" name="q35" id="q35" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(36)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q36" id="q36" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(37)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q37" id="q37" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(38)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q38" id="q38" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(39)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="q39" id="q39" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input onclick="setQuestionButtonBackground(40)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:white;" type="button" name="410" id="q40" value="Q10"></center></td>
                    </tr>
                    
                </table>

    
    
</div>
</div>
<div class="row p-0 m-0">
<div class="col-xl-1 col-lg-1 col-md-1"></div>
<div class="col-xl-3 col-lg-3 col-md-3">
<table border="0px" >
                    <tr>
                    <td><center><input onclick="setQuestionButtonBackground(previousid)" class="btn btn-warning rounded-pill ms-5" type="button" name="save2" id="save2" value="<<Previous"></center></td>
                    </tr> 
</table> 
</div>
<div class="col-xl-5 col-lg-5 col-md-5">
<table border="0px" >
                    <tr>
                    <td colspan="3"><center><input class="btn btn-warning rounded-pill;" onclick="setQuestionButtonBackground(nextid)" type="button" name="save" id="save" value="Next>>"></center></td>
                    </tr> 
</table> 
</div>
<div class="col-xl-2 col-lg-2 col-md-2">

<table border="0px" >
                    <tr>
                    <td><center><input  class="btn btn-success ms-3 rounded-pill" type="submit" name="submit" id="submit" value="Submit"></center></td>


                    </tr> 
</table> 
</div>
</div>

    <script>
      
document.addEventListener('click', () => {
    const element = document.documentElement;

    // Check if fullscreen is allowed
    if (element.requestFullscreen || element.mozRequestFullScreen || element.webkitRequestFullscreen || element.msRequestFullscreen) {
        // Use a user gesture to request fullscreen
        element.requestFullscreen = element.requestFullscreen || element.mozRequestFullScreen || element.webkitRequestFullscreen || element.msRequestFullscreen;
        element.requestFullscreen();
        
        // Exit fullscreen after a delay of 15 minutes (900,000 milliseconds)
        setTimeout(() => {
            document.exitFullscreen();
        }, 900000);
    } else {
        console.error('Fullscreen not supported');
    }
});

document.addEventListener('keydown', (event) => {
    const element = document.documentElement;

    if (event.key === 'Escape' && document.fullscreenElement) {
        // Prevent default behavior to disable exiting fullscreen using the "Esc" key
        event.preventDefault();

        // Exit fullscreen after a delay of 15 minutes (900,000 milliseconds)
        setTimeout(() => {
            document.exitFullscreen();
        }, 900000);
    }
});

let exitFullscreenTimeout; // Declare exitFullscreenTimeout

  // ... (existing code)

  document.addEventListener('click', () => {
    if (document.fullscreenElement) {
      clearTimeout(exitFullscreenTimeout);
    }
  });



let hour = 1;
let minute = 0;
let second = 0;
let timer = setInterval(stopwatch, 1000); // Use setInterval to update the timer every second

document.getElementById('hr').innerHTML = formatTime(hour);
document.getElementById('min').innerHTML = formatTime(minute);
document.getElementById('sec').innerHTML = formatTime(second);

function formatTime(time) {
    return time < 10 ? "0" + time : time;
}

function stopwatch() {
    if (timer) {
        if (hour > 0 || minute > 0 || second > 0) {
            if (second > 0) {
                second--;
            } else if (minute > 0) {
                minute--;
                second = 59;
            } else {
                hour--;
                minute = 59;
                second = 59;
            }

            document.getElementById('hr').innerHTML = formatTime(hour);
            document.getElementById('min').innerHTML = formatTime(minute);
            document.getElementById('sec').innerHTML = formatTime(second);
        } else {
            clearInterval(timer); // Stop the timer
        }
    }
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
let currentApId= 1; 
let nextid=1;
let preid=0;
let previousid=currentApId-1;
$(document).ready(function () {
        
        setQuestionButtonBackground(currentApId);
});

function setQuestionButtonBackground(currentApId) {
    document.getElementById("q" + currentApId).style.background='purple';
    let g = radioanswer();   
    fetchData1(currentApId);
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
            
    if(g==null){
        document.getElementById("q" + preid).style.background='yellow';
    }else if(g!=""){
        document.getElementById("q" + preid).style.background='green';
    }
        break;
        }
    }
    return g;
}

function fetchData1(currentApId) {
   
    let table = '';  
    

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
    table = 'aptitude';  
        $.ajax({
        url: 'examphppage.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, ap_id:currentApId},
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.ap_id);
                $('#name').val(data.ap_question);
                $('#a').val(data.apo_1);
                $('#b').val(data.apo_2);
                $('#c').val(data.apo_3);
                $('#d').val(data.apo_4);
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
        url: 'examphppage1.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, r_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.r_id);
                $('#name').val(data.re_question);
                $('#a').val(data.reo_1);
                $('#b').val(data.reo_2);
                $('#c').val(data.reo_3);
                $('#d').val(data.reo_4);
                
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
        url: 'examphppage2.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, v_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.v_id);
                $('#name').val(data.v_question);
                $('#a').val(data.vo_1);
                $('#b').val(data.vo_2);
                $('#c').val(data.vo_3);
                $('#d').val(data.vo_4);
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
    table = 'technical'; 
        $.ajax({
        url: 'examphppage3.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, t_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.t_id);
                $('#name').val(data.t_question);
                $('#a').val(data.t_1);
                $('#b').val(data.t_2);
                $('#c').val(data.t_3);
                $('#d').val(data.t_4);
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
        url: 'examsaveanswer.php',
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






    </script>
    </form>
</body>

</html>
