<?php
    $con = mysqli_connect('localhost', 'root', '', 'jahid');
    session_start();
    $error = "";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //require 'includes/database.php';
        $qyery = "SELECT * FROM login_check WHERE username='$username' && passwords='$password'";
        $sql = mysqli_query($con, $qyery);
        $row_count = mysqli_num_rows($sql);

        if($row_count){
            $row = mysqli_fetch_assoc($sql);

            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['is_login'] = 'yes';

            if($row['role'] == 1){
                header('location: home.php');
            }
            if($row['role'] == 0){
                header('location: personal info.php');
            }
        }else{
            $error = "Please enter correct login details.";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="login-style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!--***====LOGIN FORM STSRT====***-->

    <div class="login_wrapper">
        <form action="" method="post" class="form">
            <i class="fas fa-user-tie"></i>
            <h3 class="h2login">LOGIN</h3>
            <a href="#signup_r" class="signup_form">Sign Up</a>
            <div class="input_group">
                <input type="text" name="username" id="username" required>
                <label for="username">User Name</label>
            </div>
            <div class="input_group">
                <input type="password" name="password" id="loginpassword" required>
                <label for="loginpassword">Password</label>
            </div>
            <input type="submit" value="Log in" name="submit" class="submit_btn">
            <a href="#forgot_pw" class="forgot_pw">Forgot password?</a>
            <div class="error">
                <?php echo $error ?>
            </div>
        </form>
        <!--***===LOGIN FORM STSRT===***-->
        <!--***===SIGNUP FORM STSRT===***-->

        <div id="signup_r">
            <form action="" class="form">

                <h2>SIGNUP</h2>
                <div class="input_group">
                    <input type="text" name="loginUser" id="loginUser" required>
                    <label for="loginUser">User Name</label>
                </div>
                <div class="input_group">
                    <input type="password" name="loginpassword" id="loginpassword" required>
                    <label for="loginpassword">Password</label>
                </div>
                <div class="input_group">
                    <input type="password" name="loginpassword" id="loginpassword" required>
                    <label for="loginpassword">Reset Password</label>
                </div>
                <div class="input_group">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email Address</label>
                </div>
                <input type="submit" value="Sign in" class="submit_btn">
                <a href="#" class="forgot_pw">Already Member?</a>
                <a href="#" class="forgot_pw close">&times;</a>
                <!--                <a href="#" class="forgot_pw sign_close">Back</a>-->
            </form>
        </div>

        <!--***===SIGNUP FORM END===***-->
        <!--***===FORGOT PASSWORD FORM START===***-->

        <div id="forgot_pw">
            <form action="" class="form">
                <a href="#" class="close">&times;</a>
                <h2>Reset Password</h2>
                <div class="input_group">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <input type="Submit" value="Submit" class="submit_btn">
            </form>
        </div>

        <!--***===FORGOT PASSWORD FORM END===***-->


    <!-- font awesome cdn -->
    <script src="https://kit.fontawesome.com/abaf722d21.js" crossorigin="anonymous"></script>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>