<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Login-style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="login-title-container">
            <h1>Login</h1>
        </div>

        <form action="Login_Process.php" method="post">
            <?php if(isset($_GET['error'])){?>
                <p class = "error"> <?php echo $_GET['error'];?></p>
            <?php } ?>

            <div class="login-form-container">
                <div class="username-input-box">
                    Username
                    <div class="username-input">
                        <i class='bx bxs-user-circle'></i>
                        <input name="uname" type="text" placeholder="Username" required>
                    </div>
                </div>
        
                <div class="password-input-box">
                    Password
                    <div class="password-input">
                        <i class='bx bxs-lock-alt'></i>
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="login-button-container">
                    <button type="submit">
                        LOGIN
                    </button>
                </div>
            </div>
        </form>

    </div>
</body>
</html>