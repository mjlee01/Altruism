<?php
    include("db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="confirm-password.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="signup-title-container">
            <img src="Altruism-Dark.png">
            <h1>Join the Community!</h1>
        </div>

        <form action="signup.php" method="post">
            <div class="signup-form-container">
                <div class="username-input-box">
                    <div class="username-input">
                        <input name="uname" type="text" placeholder="Username" required>
                    </div>
                </div>
        
                <div class="age-input-box">
                    <div class="age-input">
                        <input name="age" type="text" placeholder="Age" required>
                    </div>
                </div>

                <div class="gender-input-box">
                        Gender: 
                        <div class="male-gender-box">
                            <input type="radio" name="gender" value="Male">Male
                        </div>

                        <div class="female-gender-box">
                            <input type="radio" name="gender" value="Female">Female
                        </div>
                </div>

                <div class="email-input-box">
                    <div class="email-input">
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="password-input-box">
                    <div class="password-input">
                        <input name="password" id="password" type="password" placeholder="Password" onkeyup='check();' required>
                    </div>
                </div>

                <div class="confirm-password-input-box">
                    <div class="password-input">
                        <input name="confirm-password" id="confirm_password" type="password" placeholder="Confirm Password" onkeyup='check();' required>
                        <span id='message'></span>
                    </div>
                </div>

                <div class="contact-input-box">
                    <div class="contact-input">
                        <input name="contact" type="text" placeholder="Contact Number" required>
                    </div>
                </div>

                <div class="signup-button-container">
                    <input type="submit" name="submit" value="Create an Account">
                </div>
            </div>
        </form>

        <div class="login-container">
            Already have an account? &nbsp; <a href="login.php">Log In</a>
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST["uname"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $contact_number = $_POST["contact"];

        $sql = "INSERT INTO user (name, age, gender, email, password, contact_number, role, point) 
                VALUES ('$uname', '$age', '$gender', '$email', '$password', '$contact_number', 'user', 0)";

        $result = mysqli_query($conn, $sql);
        if ($result){
            header("Location: Login.php?message=SignUp%20success!");
            exit();
        } else{
            header("Location: Login-Page/signup.php?message=Error%20occurred%20while%signing%20up.");
            exit();
        }
    }
?>