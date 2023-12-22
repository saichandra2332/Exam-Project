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
            width: 793px;
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
        <form method="post">
            <h1>SECTION</h1>
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-12">
                        <label>Section Name :</label>
                        <input type="text" name="examName" id="examName" placeholder="Enter section name">
                    </div> 
                    <div class="col-12">
                        <label>Questions :</label>
                        <input type="text" name="examName" id="examName" placeholder="Enter no.of questions">
                    </div> 
                        
                    <div class="col-12">
                        <button type="submit" style="text-align: center;">Start Creation</button>
                    </div>
                </div>
            </div>   
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
