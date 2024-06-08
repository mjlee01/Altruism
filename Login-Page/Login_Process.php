<?php

session_start();
include "db_conn.php";

$uname = $_POST['uname'];
$pass = $_POST['password'];

if(empty($uname)) {
  header ("Location: Login.php?error=Username is requried");
  exit();
}
else if(empty($pass)) {
  header ("Location: Login.php?error=Username is requried");
  exit();
}

$sql = "SELECT * FROM user WHERE name = '$uname' AND password = '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
  $row = mysqli_fetch_assoc($result);
  if($row['name'] === $uname && $row['password'] === $pass) {
    echo "Logged In!";
    $_SESSION['username'] = $row['name'];
    $_SESSION['userid'] = $row['user_id'];
    $_SESSION['role'] = $row ['role'];
    if ($row['role'] == 'admin'){
      header("Location: ../Admin_Dashboard.php");
    }
    else {
      header("Location: ../Homepage.php");
    }
    exit();
  }
  else{
    header("Location: Login.php?error=Incorrect username or password");
    exit();
  }
}
else {
  header("Location: Login.php?error=Incorrect username or password");
  exit();
}

?>