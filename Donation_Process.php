<?php

session_start();
include "Login-Page/db_conn.php";

$amount = (int)$_POST['donation_amount'];
$method = $_POST['payment_method'];
$campaign = $_POST['campaign'];
$userid = $_SESSION['userid'];



$sql = "INSERT INTO donation_details (amount, method, donation_id, user_id) Values ('$amount','$method','$campaign','$userid')";
$sql1 = "UPDATE user SET point = (SELECT point+$amount from user WHERE user_id = '$userid') WHERE user_id = '$userid'";
// echo $sql1;
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
if ($result) {
  // Redirect with success message
  header("Location: Donation.php?message=Donation%20success!");
} else {
  // Redirect with error message
  header("Location: Donation.php?message=Error%20occurred%20while%20processing%20donation.");
}
?>