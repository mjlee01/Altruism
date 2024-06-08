<?php

session_start();
include "Login-Page/db_conn.php";

$donation_id = $_POST['donation_id'];
$name = $_POST['campaign_name'];
$startDate = $_POST['campaign_startDate'];
$endDate = $_POST['campaign_endDate'];
$targetFund = $_POST['target_fund'];
$status = $_POST['status'];
$userid = $_SESSION['userid'];



$sql = "Update donation Set campaign_name = '$name', target_fund = $targetFund, start_date = '$startDate', end_date = '$endDate', d_status = '$status' 
        WHERE donation_id = '$donation_id'";
// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
  // Redirect with success message
  header("Location: Admin_Dashboard.php?message=DonationUpdate%20success!");
} else {
  // Redirect with error message
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20donation.");
}
?>