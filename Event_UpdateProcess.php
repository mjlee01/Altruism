<?php

session_start();
include "Login-Page/db_conn.php";

$event_id = $_POST['event_id'];
$event_name = $_POST['event_name'];
$event_desc = $_POST['event_description'];
$startDate = $_POST['event_startdate'];
$endDate = $_POST['event_enddate'];
$vol_reward = $_POST['volunteer_reward'];
$exp_reward = $_POST['expert_reward'];
$status = $_POST['status'];
$userid = $_SESSION['userid'];



$sql = "Update event Set event_name = '$event_name', event_description = '$event_desc, event_startdate = '$startDate', event_enddate = '$endDate', e_status = '$status' WHERE event_id = '$event_id'";
// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
  // Redirect with success message
  header("Location: Admin_Dashboard.php?message=EventUpdate%20success!");
} else {
  // Redirect with error message
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20Event.");
}
?>