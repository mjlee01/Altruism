<!-- <?php 
  session_start();

  include "Login-Page/db_conn.php";

  $e_id = $_GET['e_id'];
  $sql = "SELECT * FROM event WHERE event_id = '$e_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Update Event Details</h1>
  <form action="Event_UpdateProcess.php" method="POST">

    <div>
      <input type="text"  name="event_id" value="<?php echo $row['event_id']; ?>" hidden>


      <div>
        <label for="eventname">Event Name<i id="requiredlabel">(required)</i></label><br>
        <input type="text" name="event_name" value="<?php echo $row ['event_name']; ?>" required>
      </div>

      <br>

      <div>
        <label for="eventdesc">Event Desc<i id="requiredlabel">(required)</i></label><br>
        <input type="text" name="event_desc" value="<?php echo $row ['event_description']; ?>" required>
      </div>

      <br>

      <div>
        <label for="startdate">Event Start Date<i id="requiredlabel">(required)</i></label><br>
        <input type="text" name="event_start" value="<?php echo $row ['event_startdate']; ?>" required>
      </div>

      <br>
      
      <div>
        <label for="enddate">Event End Date<i id="requiredlabel">(required)</i></label><br>
        <input type="text" name="event_end" value="<?php echo $row ['event_enddate']; ?>" required>
      </div>

       <br>
      
      <div>
        <label for="volreward">Volunteer Reward<i id="requiredlabel">(required)</i></label><br>
        <input type="number" name="volreward" value="<?php echo $row ['volunteer_reward']; ?>" max="3000" required>
      </div>

      <br>

      <div>
        <label for="expreward">Expert Reward<i id="requiredlabel">(required)</i></label><br>
        <input type="number" name="volreward" max="4000" value="<?php echo $row ['expert_reward']; ?>" required>
      </div>

      <br>

      <div>
        <select name="status">
          <?php if ($row['d_status'] == 'active') { ?>
          <option value="active" selected>Active</option>
          <option value="inactive">Inactive</option>
          <?php } else { ?>
            <option value="active">Active</option>
            <option value="inactive" selected>Inactive</option>
          <?php } ?>
        </select>
      </div>

      <br>
      
        <div>
          <input type="reset">
        </div>

        <br>

        <div>
          <input type="submit">
        </div>

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
