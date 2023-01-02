


<?php
session_start();
include('db_connect.php');
$msg = false;
if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){
        header('Location:index.php');
    }
    else{
        $msg =  "Invalid  password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="left-bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Username.." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password" required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name=""> <span>Remeber Me</span>
                    </div>
                    <p>Don't have a account yet? <a href="signup.php">SignUp</a> </p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
        <img src="login_png.jpg" class="login_img" alt="">
        <?php
                echo ('<h3>'.$msg.'</h3>')
            ?>
        </div>
        <!-- <h3>Incorrect Password</h3> -->
        
    </header>
</body>
</html>