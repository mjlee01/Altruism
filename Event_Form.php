<?php 
  include "Login-Page/db_conn.php";
  include "Header.php";
  $sql = "SELECT * FROM event WHERE e_status = 'active'";
  $result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <form action="Event_Process.php" method="post">
      <?php if(isset($_GET['error'])){?>
          <p class = "error"> <?php echo $_GET['error'];?></p>
      <?php } ?>


      <div class="container">
        <h1>Join Event</h1>
        <div class="event-form-desc">Lend a hand to those who in need</div>

        <div class="event-form">
          <label type="text">Event Name:</label><br>
          <select name="event">
            <?php 
              $result2 = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result2)){
                ?>
                <option value="<?php echo $row['event_id'] ?>"><?php echo $row['event_name']?></option>
                <?php
              }
              ?>
          </select>
        </div>
        
        <div class="event-form">
          <label type="text">Role:</label><br>
          <select name="role">
                    <option value="Volunteer">Volunteer</option>
                    <option value="Expert">Expert</option>
              </select>
        </div>
        <div class="login-button-container">
            <button class="form-submit" type="submit">
                SUBMIT
            </button><br>
            <button class="form-back" onclick="goBack()">BACK</button>
            <script>
              function goBack() {
                window.history.back();
              }
            </script>
        </div>
      </div>
  </form>
</body>
</html>

<script type="text/javascript">
  // Retrieve message from URL parameter
  var message = "<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>";
  // Display message in alert
  if (message !== '') {
    alert(message);
  }
</script>

<?php include "Footer.php"?>