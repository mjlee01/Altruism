<?php
session_start();
include "Login-Page/db_conn.php";

$news_id = $_GET['n_id'];

$sql = "DELETE FROM news WHERE news_id = '$news_id'";
// echo $sql;
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Admin_Dashboard.php?message=NewsDelete%20success!");
} else {
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20news%20deletion.");
}
?>
