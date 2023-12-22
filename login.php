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

        .wrapper a.register-link:hover {
        color: #ffd700 !important;
    }
    .shine-button {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      color: #fff;
      background-color: blueviolet;
      overflow: hidden;
      transition: background-color 0.3s ease; 
    }

    .shine-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 0.5) 50%, transparent 100%);
      animation: shine 2s infinite linear; 
    }

    @keyframes shine {
      to {
        left: 200%;
      }
    }

        

    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php
    require_once "config.php";
    if (isset($_POST['sub'])) {
        $loginid1 = $_POST['lid'];
        $pwd2 = $_POST['password'];
        $Getdetails = mysqli_query($conn, "SELECT u_id FROM user_details WHERE STATUS='1'and u_mail='$loginid1' and u_pwd='$pwd2'") or die(mysqli_error($conn));
        $resdetails = mysqli_fetch_object($Getdetails);
        $main_id = $resdetails->u_id;
        session_start();
        $_SESSION["main_id"] = $main_id;
        $count = mysqli_num_rows($Getdetails);
        if ($count > 0) {
            header("location:terms.php");
        } else {

            $Getdetails1 = mysqli_query($conn, "SELECT a_id FROM table_name WHERE a_status='1'and a_mail='$loginid1' and a_pwd='$pwd2'") or die(mysqli_error($conn));
            $resdetails1 = mysqli_fetch_object($Getdetails1);
            $main_id = $resdetails1->u_id;
            session_start();
            $_SESSION["main_id1"] = $main_id1;
            $count = mysqli_num_rows($Getdetails1);
            if ($count > 0) {
                header("location:admin.php");
            } else {
                echo "
            <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Login failed',
                        text: 'Invalid username or password',
                    });
                </script>
            ";
            }
        }
    }

    ?>

    <div class="wrapper">
        <form method="post">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="text" name="lid" id="lid" value="" placeholder="Username" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <i class='bx bxs-user' style="position: relative;left: 300px;top: -30px;color: black;"></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" required placeholder="Password" style="border: none;outline: none;border-radius: 26px;font-size: 17px;">
                <span class="password-toggle" onclick="togglePassword()"style="position: absolute;left: 339px ;top: 154px; cursor: pointer">👁️‍🗨️</span>
            </div><br>
            <label style="position: relative;top: -13px ">Don't have an account</label>
            <a href="reg.php" style="color: white;position: relative;top: -13px;" class="register-link"> Sign up</a>
            <button type="submit" class="shine-button" name="sub" id="sub" value="" style="width: 342px;height: 46px;cursor: pointer;border: none;outline: none;border-radius: 26px;font-size: 17px;">Login</button>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('sub').addEventListener('click', function (event) {
                        var username = document.getElementById('lid').value.trim();
                        var password = document.getElementById('password').value.trim();

                        if (username === '' || password === '') {
                            event.preventDefault(); // Prevent form submission

                            Swal.fire({
                                icon: 'error',
                                title: 'Empty Fields',
                                text: 'Please enter both username and password',
                            });
                        }
                    });
                });

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
            </script>
        </form>
    </div>
</body>

</html>
