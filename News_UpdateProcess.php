<?php
session_start();
include "Login-Page/db_conn.php";

$news_id = $_POST['news_id'];
$title = $_POST['news_title'];
$description = $_POST['news_description'];
$userid = $_SESSION['userid'];

// Update the news
$sql = "UPDATE news SET title = '$title', description = '$description', updated_by = '$userid', updated_at = NOW() WHERE news_id = '$news_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Admin_Dashboard.php?message=NewsUpdate%20success!");
} else {
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20news%20update.");
}
?>
