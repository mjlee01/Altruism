<?php

session_start();
include "Login-Page/db_conn.php";

$name = $_POST['campaign_name'];
$startDate = $_POST['campaign_startDate'];
$endDate = $_POST['campaign_endDate'];
$targetFund = $_POST['target_fund'];
$userid = $_SESSION['userid'];



$sql = "INSERT INTO donation (campaign_name, target_fund, start_date, end_date, user_id, d_status) Values ('$name','$targetFund','$startDate','$endDate','$userid', 'active')";
// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
  // Redirect with success message
  header("Location: Admin_Dashboard.php?message=DonationCreate%20success!");
} else {
  // Redirect with error message
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20donation.");
}
?>