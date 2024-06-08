<?php

session_start();
include "Login-Page/db_conn.php";

$event_id = $_GET['e_id'];


$sql = "Delete from event WHERE event_id = '$event_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
  // Redirect with success message
  header("Location: Admin_Dashboard.php?message=EventDelete%20success!");
} else {
  // Redirect with error message
  header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20Event.");
}
?>