<?php
  session_start();
  include "Login-Page/db_conn.php";

  $name = $_POST['event_name'];
  $desc = $_POST['event_desc'];
  $startDate = $_POST['start_date'];
  $endDate = $_POST['end_date'];
  $volunteerReward = $_POST['vol_reward'];
  $expertReward = $_POST['exp_reward'];
  $userid = $_SESSION['userid'];

  $sql = "INSERT INTO event (event_name, event_description, event_startdate, event_enddate, volunteer_reward, expert_reward, user_id, e_status) Values ('$name','$desc','$startDate','$endDate',$volunteerReward,$expertReward, $userid, 'active')";
  echo $sql;

  $result = mysqli_query($conn, $sql);
  if ($result) {
      // Redirect with success message
      header("Location: Admin_Dashboard.php?message=EventCreate%20success!");
    } else {
      // Redirect with error message
      header("Location: Admin_Dashboard.php?message=Error%20occurred%20while%20processing%20event.");
    }
?>