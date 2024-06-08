<?php 
  session_start();

  include "Login-Page/db_conn.php";
  include "Header.php";
  $sql = "SELECT * FROM news";
  $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/styles.css"> 
</head>
<body>
    <form action="Create_News_Process.php" method="post" enctype="multipart/form-data">
        <?php if(isset($_GET['error'])){?>
            <p class = "error"> <?php echo $_GET['error'];?></p>
        <?php } ?>
        <div class="container">
            <h1>Create News</h1>
            <div class="event-form-desc"></div>

            <div class="donation-form">
                <label type="text">Date</label>
                <div class="username-input">
                    <input name="news_date" type="Date" placeholder="Start Date" required>
                </div>
            </div>

            <div class="donation-form">
                <label type="text">News Title</label>
                <div class="username-input">
                    <input name="news_title" type="text" placeholder="Insert News Title" required>
                </div>
            </div>
            
            <div class="donation-form">
                <label type="text">Article</label>
                <div class="username-input">
                    <input name="news_description" type="text" placeholder="Insert Article" required>
                </div>
            </div>

            <div class="donation-form">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>


            <div class="login-button-container">
                <button class="form-submit" type="submit">
                    SUBMIT
                </button><br>
                <button class="form-back" onclick="goBack()">BACK</button>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
            </div>
        </div>
    </form>
</body>
</html>
