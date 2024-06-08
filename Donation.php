<?php include 'Header.php';?>
  <?php 
    include "Login-Page/db_conn.php";

    $sql = "SELECT * FROM donation WHERE d_status = 'active'";
    $result = mysqli_query($conn, $sql);

  ?>
    <main>
      <section class="donation_description">
        <div class="donation_intro">
          <div class="donation_title">Donation</div>

          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1279 199" fill="none">
            <path d="M-1 -20H1279V49L658 198.5L-1 49V-20Z" fill="#35676d" fill-opacity="0.96"/>
          </svg>

          <div class="donation_intro_wrapper">
            <div class="donation_intro_wrapper_left">
              <img src="source/pictures/donation.jpg">
            </div>
            <div class="donation_intro_wrapper_right">
              <div class="donation-intro-title">Altruism<br> Fundraising Campaign</div>
              
              <div class="donation-intro-description">Fund raised would be distributed to the organizations that crave for financial aids.</div>

              <div class="donate_button" onclick="window.location.href='#donation-status'">DONATE NOW</div>
            </div>
          </div>
        </div>
      </section>

      <section class="donation-money-flow">
        <div class="money-up">
          <div class="money-up-title">Where did the fund go?</div>
          <div class="money-up-description">Altruism fund, where every contribution, big or small, becomes the cornerstone of positive change, amplifying our collective capacity to empower communities and create lasting impact.</div>
        </div>

        <div class="money-down">
          <div class="money-down-box1">
            <div class="money-flow-title">Community Empowerment</div>
            <div class="money-flow-description">Donations directly support local communities, fostering impactful change where it's needed most.</div>
          </div>
          <div class="money-down-box2">
            <div class="money-flow-title">Verified Impact</div>
            <div class="money-flow-description">Funds fuel verified projects, spanning resources for families, education, environmental conservation, and healthcare accessibility.</div>
          </div>
          <div class="money-down-box3">
            <div class="money-flow-title">Transparent Allocation</div>
            <div class="money-flow-description">Altruism ensures transparent and accountable fund allocation, directing each contribution to validated projects that create tangible impacts.</div>
          </div>
          <div class="money-down-box4">
            <div class="money-flow-title">Grassroots Progress</div>
            <div class="money-flow-description">Your generosity fuels grassroots progress, driving community development and social change at its core.</div>
          </div>
        </div>
      </section>
      
      <section class="donation_status">
        <div class="donation_status-up">
          <img id="donation-status" class="we-are-growing-fast" src="source/pictures/We are growing fast!.png">
          <div class="donation_status-description">We need your help to make it all the way.<br>Just click on the progress bar to contribute in the donation</div>
        </div>


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
          <button class="status-donate-button"><a href="Donation_Form.php">DONATE</a></button>
        </div>
      <?php
        }
      ?>
      </section>
    
<?php include 'Footer.php';?>