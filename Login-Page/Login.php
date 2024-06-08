<?php
    include("db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="confirm-password.js"></script>
</head>
<body>
    <div class="wrapper" style="background-image: url('https://unsplash.com/photos/landscape-photography-of-mountain-hit-by-sun-rays-78A265wPiO4')">
        <div class="login-title-container">
            <img src="Altruism-Dark.png">
            <h2>Making the world a better place</h2>
        </div>

        <form action="Login_Process.php" method="post">
            <?php if(isset($_GET['error'])){?>
                <p class = "error"> <?php echo $_GET['error'];?></p>
            <?php } ?>

            <div class="login-form-container">
                <div class="input-container">
                    <div class="username-input">
                        <input name="uname" type="text" placeholder="Username" required>
                    </div>
            
                    <div class="password-input">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                </div>
                
                <div class="remember-me-container">
                    <input type="checkbox" name="remember">Remember Me
                </div>

                <div class="forgot-container">
                    <a href="login.php" onclick="window.alert('Please check your email for a password reset!')">Forgot Password?</a>
                </div>


                <div class="login-button-container">
                    <input type="submit" name="login" value="LOGIN">
                </div>
            </div>
        </form>
        <div class="sign-up-container">
            Don't have an account? &nbsp; <a href="signup.php">Create Account</a>
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST["uname"];
        $pass = $_POST["password"];
        $remember = $_POST["remember"] ?? null;
        
        $sql = "SELECT * FROM user WHERE name = '$uname' AND password = '$pass'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['name'] === $uname && $row['password'] === $pass) {
            //echo "Logged In!";
            $_SESSION['username'] = $row['name'];
            $_SESSION['role'] = $row ['role'];
            if($remember){
                setcookie('username_cookie',$_POST["uname"],time()+86400);
                setcookie('password_cookie',$_POST["password"],time()+86400);
            }
            else{
                setcookie('username_cookie',$_POST["uname"],time()-1);
                setcookie('password_cookie',$_POST["password"],time()-1);
            }
            header("Location:../Homepage.php");
            exit();
            }
        }
        else{
            header("Location: Login.php");
        }
    }
?>