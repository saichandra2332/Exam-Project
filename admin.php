<?php
require_once "config.php";
?><style>
            #admin,#correction,#keyblock{
                display:none;
            }
            </style>
 <?php

if(isset($_POST['cre'])){
    $examname=$_POST['exName'];
    $questions=$_POST['exDate'];
    $time=$_POST['exTime'];
    $secname=$_POST['sec'];
    $qry=mysqli_query($conn, "INSERT INTO examdetails(ex_name,ex_tques,ex_time,ex_secname) VALUES('$examname','$questions','$time','$secname')");

    

}
if(isset($_POST['cre'])){
    ?><style>
    #admin{
        display:block;
    }
    </style>
    <?php
}
    if(isset($_POST['button2'])){
        ?><style>
    #keyblock{
        display:block;
    }
    </style>
    <?php
    }
        if(isset($_POST['button3'])){
            ?><style>
    #correction{
        display:block;
    }
    </style>
    <?php
}

if(isset($_POST['button3'])){
    $quesnum=$_POST['que'];
    $anss=$_POST['ans'];              
    $qry=mysqli_query($conn,"INSERT INTO examkey(kquestion_id,key_ans)VALUES('$quesnum','$anss')") or die(mysqli_error($conn));
    
}

if(isset($_POST['button2'])){
    $candname=$_POST['can'];
    $candid=$_POST['ide'];
    $Getname1=mysqli_query($conn, "SELECT * FROM user_details WHERE STATUS='1'") or die(mysqli_error($conn));
$resdetails3=mysqli_fetch_object($Getname1);
$candname1=$resdetails3->u_name;
$candid1=$resdetails3->u_id;
$marks=0;
echo $marks;
if($candname1==$candname && $candid1==$candid){
$Getname2=mysqli_query($conn, "SELECT * FROM answerstable WHERE u_id='$candid1'") or die(mysqli_error($conn));
while($resdetails4=mysqli_fetch_object($Getname2)){
    $qnum=$resdetails4->question_id;
    $answer=$resdetails4->answer_id;
$Getname3=mysqli_query($conn, "SELECT * FROM examkey WHERE kquestion_id='$qnum' and key_ans='$answer'") or die(mysqli_error($conn));
$count=mysqli_num_rows($Getname3);
if($count==1){
$marks++;
}
}                     
}
                
$totalmarks= $marks;       
echo $marks;
?><style>
    
    #stumarksblock{
display:block;
}
    </style>
    
            
    <?php
}

  



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('img.jpg') no-repeat;
        }
        .wrapper {
            width: 420px;
            background: rgba(0, 0, 0, 0.5); Add a background color
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
        }
        .wrapper h1 {
            font-size: 36px;
            text-align: center;
        }
        .wrapper .col-12 {
            margin-bottom: 20px; 
        }
        .wrapper label {
            color: #fff; 
        }
        .wrapper input,
        .wrapper select {
            width: 100%;
            height: 68%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        
        .wrapper ::placeholder {
            color: #fff;
        }
        .wrapper i {
            position: absolute;
            right: 20px;
            top: 25px;
            transform: translateY(-50%);
            font-size: 20px;
        }
        .wrapper button {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
        
    </style>
</head>
<body>

    <div class="wrapper">

        <form method="POST">
        <div id="admin">


            <h1>Admins</h1>


            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-12">
                        <label>Exam Name :</label>
                        <input type="text" name="exName" id="exName" placeholder="Enter exam name">
                    </div> 
                    <div class="col-12">
                        <label for="examDate">No of questions :</label>
                        <input type="text" name="exDate" id="exDate" placeholder="Enter no. of question">
                    </div> 
                    <div class="col-12">
                        <label for="examTime">Exam Time :</label>
                        <input type="text" name="exTime" id="exTime" placeholder="Enter exam time">
                    </div> 
                    <div class="col-12">
                        <label for="location">Section Names :</label>
                        <select  name="sec" id="sec">
                            <option value="Apptitude">Apptitude</option>
                            <option value="Reasoning">Reasoning</option>
                            <option value="Verbal">Verbal</option>
                            <option value="Technical">Technical</option>
                        </select>
                    </div>
        </div>
    </div>
    </div>
                    <div class="col-12">
                        <button type="submit" name="cre" id="cre"  onclick="crea()" style="text-align: center;">Create Exam</button>
                    </div>

    <div  id="correction">

                    
                    <div class="col-12"class="wrapper">
                        <label for="examTime" style="position: relative;top: 0px;left: -482px;">Question NO :</label>
                        <input type="number" name="que" id="que" placeholder="Enter question No" style="position: relative;top: 0px;left: -482px;width: 391px;height: 55px;">
                    </div>
                    <div class="col-12"class="wrapper">
                        <label for="examTime" style="position: relative;top: 0px;left: -482px;">Answer :</label>
                        <input type="text" name="ans" id="ans" placeholder="" style="position: relative;top: 0px;left: -482px;width: 391px;height: 55px;">
                    </div>
    </div>
                    <button type="submit"name="button3" id="button3"style="position: relative; left: -473px; top: 0px;">Exam Key</button>

    <!-- <div  id="keyblock">

                    <div class="col-12"class="wrapper">
                        <label for="examTime" style="position: relative;top: 0px;left: 482px;">Enter The Name Of Candidate :</label>
                        <input type="text" name="can" id="can" placeholder="Enter the candidate name" style="position: relative;top: 0px;left: 482px;width: 391px;height: 55px;">
                    </div>
                    <div class="col-12"class="wrapper">
                        <label for="examTime" style="position: relative;top: 0px;left: 482px;">Enter the I'D Of Candidate :</label>
                        <input type="tel" name="ide" id="ide" placeholder="Enter the I'D Of Candidate" style="position: relative;top: 0px;left: 482px;width: 391px;height: 55px;">
                    </div>
    </div>
    <h2 style="margin-left:100px;">Student data</h2>
<table class="table table-bordered p-0 m-0 border-dark border border-2" style="position: relative;top: 136px;left: 487px;">
                    <tr>
                        <th>S.no</th>
                        <th>Student's name</th>
                        <th>Total marks</th>
                    </tr>
                    <tr>
                        <td><?php echo $candid;?></td>
                        <td><?php echo $candname1;?></td>
                        <td><?php echo $totalmarks;?></td>
                    </tr>
                    </table>

                    <button type="submit"name="button2" id="button2" style="position: relative;top: 0px;left: 476px;">Marks</button> -->

                
            
        </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
       



    </script>
</body>
</html>
