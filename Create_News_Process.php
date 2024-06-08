<?php
session_start();
include "Login-Page/db_conn.php";

// Retrieve form data
$userid = $_SESSION['userid'];
$date = $_POST['news_date'];
$title = $_POST['news_title'];
$description = $_POST['news_description'];

// File upload handling
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Insert the news into the database
$sql = "INSERT INTO news (user_id, news_date, news_title, article, thumbnail) VALUES ('$userid', '$date', '$title', '$description', '$target_file')";
echo $sql;

$result = mysqli_query($conn, $sql);
if ($result) {
  header("Location: Admin_Dashboard.php?message=NewsCreate%20success!");
} else {
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20creating%20news.");
}
?>
