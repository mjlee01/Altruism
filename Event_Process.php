<?php

session_start();
include "Login-Page/db_conn.php";

$eventid = $_POST['event'];
$type = $_POST['role'];
$userid = $_SESSION['userid'];

$sql = "Select volunteer_reward, expert_reward From event WHERE event_id = '$eventid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$expert_reward = $row['expert_reward'];
$volunteer_reward = $row['volunteer_reward'];

$sql1 = "INSERT INTO volunteer (user_id, event_id, type) Values ('$userid','$eventid','$type')";
// echo $sql1;

if ($type === "Volunteer"){
  $sql2 = "UPDATE user SET point = (SELECT point+$volunteer_reward from user WHERE user_id = '$userid') WHERE user_id = '$userid'";
}
else {

  $sql2 = "UPDATE user SET point = (SELECT point+$expert_reward from user WHERE user_id = '$userid') WHERE user_id = '$userid'";
}
// echo $sql1;
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
if ($result) {
  header("Location: Donation.php?message=JoinEvent%20success!");
} else {
  header("Location: Donation.php?message=Error%20occurred%20while%20processing%20donation.");
}
?>