<?php

session_start();
include "Login-Page/db_conn.php";

$donation_id = $_GET['d_id'];


$sql = "Delete from donation WHERE donation_id = '$donation_id'";
// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
  // Redirect with success message
  header("Location: Admin_Dashboard.php?message=DonationDelete%20success!");
} else {
  // Redirect with error message
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20donation.");
}
?>