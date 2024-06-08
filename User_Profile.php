<?php 
  include "Header.php";

  include "Login-Page/db_conn.php";

  $userid = $_SESSION['userid'];
  $sql = "SELECT * FROM user u left join donation_details dd on u.user_id = dd.user_id left join donation d on d.donation_id = dd.donation_id WHERE u.user_id = '$userid'";
  $result = mysqli_query($conn, $sql);

  $sql1 = "SELECT * FROM volunteer v left join event e on e.event_id = v.event_id left join user u on v.user_id = u.user_id left join expert ex on u.user_id = ex.user_id 
           WHERE v.user_id = '$userid'";
  $result1 = mysqli_query($conn, $sql1);
  
  $sql2 = "SELECT SUM(point) AS pts FROM user u WHERE user_id = '$userid'";
  $result2 = mysqli_query($conn, $sql2);
  $row2= mysqli_fetch_assoc($result2);
?>

  <!-- 這個是 Daily Rewards -->
  <div class="daily-rewards">
    <div class="daily-rewards-title">
      Daily Rewards
    </div>
    <div class="daily-rewards-day">
      <!-- Day 1 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img style="
          position: absolute;
          z-index: 2;
          display: block;
          object-fit:contain;
          width: 90%;
          margin:auto;
          cursor: pointer;" src="source/icons/Daily-Rewards/Tick.png">
          <img class="badge-logo" src="source/icons/Daily-Rewards/Medal.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 1
          </button>
        </div>
      </div>
      <!-- Day 2 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img style="
            position: absolute;
            z-index: 2;
            display: block;
            object-fit:contain;
            width: 90%;
            margin:auto;" src="source/icons/Daily-Rewards/Tick.png">
          <img src="source/icons/Daily-Rewards/Medal.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 2
          </button>
        </div>
      </div>
      <!-- Day 3 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img style="
              position: absolute;
              z-index: 2;
              display: block;
              object-fit:contain;
              width: 90%;
              margin:auto;" src="source/icons/Daily-Rewards/Tick.png">
          <img src="source/icons/Daily-Rewards/Medal.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 3
          </button>
        </div>
      </div>
      <!-- Day 4 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img src="source/icons/Daily-Rewards/Heart-Badge.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 4
          </button>
        </div>
      </div>
      <!-- Day 5 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img src="source/icons/Daily-Rewards/Medal-Locked.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 5
          </button>
        </div>
      </div>
      <!-- Day 6 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img src="source/icons/Daily-Rewards/Medal-Locked.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 6
          </button>
        </div>
      </div>
      <!-- Day 7 按鈕 -->
      <div class="rewards-background">
        <div class="badge">
          <img src="source/icons/Daily-Rewards/Diamond-Badge-Locked.svg">
        </div>
        <div class="day">
          <button class="btn">
            Day 7
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <section class="altruism-points">
    <h2> Altruism Points </h2>
    <?php 
      if ($row2['pts'] < 100){
        echo '<p style="color:brown; border: 2px solid brown"> Bronze - ';
        echo $row2['pts'];
        echo '</p>';
      }
      elseif ($row2['pts'] > 100 && $row2['pts'] <= 500){
        echo '<p style="color:silver; border: 2px solid silver;"> Silver - ';
        echo $row2['pts'];
        echo '</p>';
      }
      elseif ($row2['pts'] > 500){
        echo '<p style="color:gold; border: 2px solid gold"> Gold - ';
        echo $row2['pts'];
        echo '</p>';
      }
      else {
        echo '<p style="color:purple; border: 2px solid purple"> platinum - ';
        echo $row2['pts'];
        echo '</p>';
      }
    ?>
  </section>

  
  <section class="user-records">
    <div class="donation-history">
      <h2> Donation History </h2>
      <table>
        <tr>
          <th>Campaign Name</th>
          <th>Donated Amount</th>
          <th>Payment Method</th>
        </tr>
        <?php
          while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <td><?php echo $row['campaign_name']; ?></td>
          <td><?php echo $row['amount']; ?></td>
          <td><?php echo $row['method']; ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    
    <div class="event-history">
      <h2> Event History </h2>
      <table>
        <tr>
          <th>Event Name</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Reward</th>
        </tr>
        <?php
          while($row1= mysqli_fetch_assoc($result1)){
        ?>
        <tr>
          <td><?php echo $row1['event_name']; ?></td>
          <td><?php echo $row1['event_startdate']; ?></td>
          <td><?php echo $row1['event_enddate']; ?></td>
          <td><?php if($row1['expert_id'] != null){
            echo $row1['expert_reward']; 
          }else{
            echo $row1['volunteer_reward']; 
          }
          ?></td>
        </tr>
        <?php } ?>
      </table>

    </div>
  </section>

  <div class="user-button">
    <button onclick="goBack()">Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <?php 
      if ($_SESSION['username'] != null) {
          echo "<form action='Login-Page/logout.php' method='post'>";
          echo "<button type='submit' name='logout'>SIGN OUT`</button>";
          echo "</form>";
      } else {
          echo "<form action='Login-Page/Login.php' method='post'>";
          echo "<button type='submit' name='logout'>SIGN IN</button>";
          echo "</form>";
      }
    ?>
  </div>
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