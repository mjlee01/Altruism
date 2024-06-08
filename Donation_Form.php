<?php 
  session_start();
  include "Header.php";
  include "Login-Page/db_conn.php";

  $sql = "SELECT * FROM donation WHERE d_status = 'active'";
  $result = mysqli_query($conn, $sql);

?>
<head>
  <link rel="stylesheet" href="styles/styles.css">
</head>

<div style='font-family: Poppins;'>
  <section class="donation_status">
    <?php
      while($row = mysqli_fetch_assoc($result)){
        $donation_id = $row['donation_id'];
        $sql1 = "SELECT SUM(amount) as amount FROM donation_details WHERE donation_id = $donation_id"; 
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $progress = round($row1['amount'] / $row['target_fund'] * 100,2);
    ?>

    <div class="donation_status-down">
      <div class="campaign-name"><?php echo $row['campaign_name'] ?></div>
      <div class="fund-stats">
        <div class="fund-stats-left">
          <div class="current-fund">RM <?php echo $row1['amount']?></div>
          <div class="target">of RM <?php echo $row['target_fund']?> Funded</div>
        </div>
        <div class="fund-stats-right">
          <div class="current-fund"><?php echo $progress?>%</div>
          <div class="target">of Goal</div>
        </div>
      </div>
      <div class="progressBar-border">
        <div class="progressBar-khaki" style="height:35px;width:<?php echo $progress?>%;">
          <?php echo $progress?>%
        </div>
      </div>
    </div>
  <?php
    }
  ?>
  </section>

  <form id="donation-form" action="Donation_Process.php" method="post">
    <?php if(isset($_GET['error'])){?>
        <p class = "error"> <?php echo $_GET['error'];?></p>
    <?php } ?>

    <div class="container">
      <h1>Donate Form</h1>
      <div class="donation-form">
        <div class="event-form-desc">Always give without remembering and always receive without forgetting</div>
        <label type="text">Campaign</label>
          <div class="password-input">
              <select name="campaign">
                <?php 
                  $result2 = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result2)){
                ?>
                    <option value="<?php echo $row['donation_id'] ?>"><?php echo $row['campaign_name']?></option>
                  <?php
                  }
                  ?>
              </select>
          </div>
      </div>

      <div class="donation-form">
          <label type="text">Donation Amount</label>
          <div class="username-input">
              <input class="donateAmount" name="donation_amount" type="float" placeholder="Amount of Donation" required>
          </div>
      </div>

      <div class="donation-form">
          <label type="text">Payment Method</label>
          <div class="password-input">
              <select name="payment_method">
                <option value="e-wallet">E-wallet</option>
                <option value="online-banking">Online Banking</option>
                <option value="visa-&-mastercard">Visa & Mastercard</option>
              </select>
          </div>
      </div>

      <div class="#">
          <button type="submit" class="form-submit">
              DONATE
          </button>
          <button onclick="goBack()" class="form-back">BACK</button>
          <script>
              function goBack() {
                  window.history.back();
              }
          </script>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
  // Retrieve message from URL parameter
  var message = "<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>";
  // Display message in alert
  if (message !== '') {
    alert(message);
  }
</script>

<?php   
include "Footer.php";?>