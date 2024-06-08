<?php 
  session_start();

  include "Login-Page/db_conn.php";
  include "Header.php";

  $sql = "SELECT * FROM donation WHERE d_status = 'active'";
  $result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<head>
  <title>Create Donation Campaign</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <form id="create-donation-form" action="Donation_CreateProcess.php" method="post">
    <div class="container">
      <h1>Create Donation Campaign</h1>
      <div class="event-form-desc"></div>
      <div class="donation-form">
        <label type="text">Campaign Name</label>
        <div class="username-input">
            <input name="campaign_name" type="text" placeholder="Create New Campaign" required>
        </div>
      </div>

      <div class="donation-form">
      <label type="text">Start Date</label>
        <div class="username-input">
            <input name="campaign_startDate" type="Date" placeholder="Start Date" required>
        </div>
      </div>

        <div class="donation-form">
          <label type="text">End Date</label>
          <div class="username-input">
              <input name="campaign_endDate" type="Date" placeholder="End Date" required>
          </div>
        </div>
        
        <div class="donation-form">
            <label type="text">Target Fund (RM)</label>
            <div class="username-input">
                <input name="target_fund" type="number" placeholder="Fund to raise" step="0.01" required>
            </div>
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

<?php include "Footer.php" ?>