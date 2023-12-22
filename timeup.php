<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bt1{
                width: 180px;
            height: 46px;
            border-radius: 17px;
            border: none;
            outline: none;
            font-size: 18px;
            background-color: red;
            position: absolute;
            left: 1269px;
            top: 635px;
            cursor: pointer;
            font-weight: 600;
            }
    </style>
   
</head>
<body>
    <img src="time up.jpg" style="width: 1522px;height: 930px;position: relative;top: -9px;left: -8px;">
    <button class="bt1" type="button" onclick="full()">LOGOUT</button>

    <script>

function full() {
    window.location.href = 'login.php';
}




    </script>
    
</body>

</html>