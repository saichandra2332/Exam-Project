


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
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
            background-size: cover;
        }

        .wrapper {
            width: 80%;
            max-width: 420px;
            margin: auto;
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

        .wrapper .input-box,
        .wrapper .input-box input,
        .wrapper .input-box i,
        .wrapper .remember-forgot,
        .wrapper .btn,
        .wrapper .register-link,
        .register-link p a {
            width: 100%;
            max-width: 100%;
        }

        .input-box input {
            padding: 15px 20px;
        }

        @media screen and (max-width: 600px) {
            .wrapper {
                width: 90%;
            }
        }
        
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php
require_once "config.php";

if(isset($_POST['sub'])){
    $examname = $_POST['lid'];
    $questions = $_POST['mail'];
    $time = $_POST['password'];

    $qry = mysqli_query($conn, "INSERT INTO user_details(u_name, u_mail, u_pwd) VALUES('$examname', '$questions', '$time')");

    if ($qry) {
        // Insertion was successful, show SweetAlert
        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "Registration successful!",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "login.php";
                    }
                });
             </script>';
    } else {
        // Insertion failed, show error SweetAlert
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Registration failed!",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                });
             </script>';
    }
}
?>
   

    <div class="wrapper">
        <form method="post"  id="myForm">
            <h1>REGISTRATION</h1>
            <div class="input-box">
                <input type="text" name="lid" id="lid" value="" placeholder="Username" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <i class='bx bxs-user' style="position: relative;left: 300px;top: -30px;color: black;"></i>
            </div>
            <div class="input-box">
                <input type="email" name="mail" id="mail" value="" placeholder="Usermail" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <i class='bx bxl-gmail' style="position: relative;left: 300px;top: -30px;color: black;"></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" required placeholder="Password" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <span class="password-toggle" onclick="togglePassword()"style="position: absolute;left: 339px ;top: 222px; cursor: pointer">👁️‍🗨️</span>
            </div><br>


            <div class="input-box">
                <input type="password" id="pwd" name="pwd" required placeholder="Confirm Password" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <span class="password-toggle" onclick="toggle()"style="position: absolute;left: 339px ;top: 292px; cursor: pointer">👁️‍🗨️</span>
            </div><br>
            <button type="submit" class="btn" name="sub" id="sub" onclick="subm()" value="" style="width: 342px;height: 46px;cursor: pointer;border: none;outline: none;border-radius: 26px;font-size: 17px;">Submit</button>

            <script>
                function togglePassword() {
                    var passwordInput = document.getElementById('password');
                    var passwordToggle = document.querySelector('.password-toggle');

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        passwordToggle.textContent = '👁️‍🗨️';
                    } else {
                        passwordInput.type = 'password';
                        passwordToggle.textContent = '👁️‍🗨️';
                    }
                }

                function toggle() {
                    var pwdInput = document.getElementById('pwd');
                    var pwdToggle = document.querySelector('.pwd-toggle');

                    if (pwdInput.type === 'password') {
                        pwdInput.type = 'text';
                        pwdToggle.textContent = '👁️‍🗨️';
                    } else {
                        pwdInput.type = 'password';
                        pwdToggle.textContent = '👁️‍🗨️';
                    }
                }



function subm() {
    var username = document.getElementById('lid').value;
    var usermail = document.getElementById('mail').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('pwd').value;

    // Check if any of the fields is empty
    if (username === '' || usermail === '' || password === '' || confirmPassword === '') {
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            text: 'Please fill in all the fields.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    } else if (!usermail.includes('@gmail.com')) {
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            text: 'Please provide a valid Gmail address.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    } else {
        // Your existing code to submit the form
        window.location.href = 'login.php';
    }
}




               
            </script>

            
        </form>
    </div>
</body>

</html>
