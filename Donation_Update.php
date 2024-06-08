<?php 
  session_start();

  include "Login-Page/db_conn.php";
  include "Header.php";

  $d_id = $_GET['d_id'];
  $sql = "SELECT * FROM donation WHERE donation_id = '$d_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <h1>Update Donation Campaign</h1>
    <form id="update-donation-form" action="Donation_UpdateProcess.php" method="post">
      <div class="login-form-container">
        <input name="donation_id" type="text" value="<?php echo $row['donation_id']; ?>" hidden>

        <div class="username-input-box">
              Campaign Name
              <div class="username-input">
                  <i class='bx bxs-user-circle'></i>
                  <input name="campaign_name" type="text" value="<?php echo $row['campaign_name']; ?>" required>
              </div>
          </div>

          <div class="username-input-box">
              Start Date
              <div class="username-input">
                  <i class='bx bxs-user-circle'></i>
                  <input name="campaign_startDate" type="Date" value="<?php echo date('Y-m-d', strtotime($row['start_date'])); ?>" required>
              </div>
          </div>

          <div class="username-input-box">
              End Date
              <div class="username-input">
                  <i class='bx bxs-user-circle'></i>
                  <input name="campaign_endDate" type="Date" value="<?php echo date('Y-m-d', strtotime($row['end_date']));?>" required>
              </div>
          </div>
          
          <div class="username-input-box">
              Target Fund
              <div class="username-input">
                  <i class='bx bxs-user-circle'></i>
                  <input name="target_fund" type="number" value="<?php echo $row['target_fund']; ?>" required>
              </div>
          </div>
          
          <div class="password-input-box">
              Status
              <div class="password-input">
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
          </div>

     

          <div class="login-button-container">
              <button type="reset">
                  RESET
              </button>
          </div>

          <div class="login-button-container">
              <button type="submit">
                  UPDATE
              </button>
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
