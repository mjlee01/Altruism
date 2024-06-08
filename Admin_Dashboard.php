<?php 
  include "Header.php";

  include "Login-Page/db_conn.php";

  $sql = "SELECT * FROM donation ORDER BY d_status, end_date DESC";
  $result = mysqli_query($conn, $sql);

  $sql1 ="SELECT * FROM event WHERE e_status = 'active' ORDER BY event_enddate DESC;";
  $result1 = mysqli_query($conn, $sql1);
  
  $sql2 ="SELECT * FROM news ORDER BY news_date DESC;";
  $result2 = mysqli_query($conn, $sql2);
?>

<div style="font-family: Poppins; margin-bottom: 50px;">
    <h2> Donation List </h2>
    <button class="button" onclick="window.location.href='Donation_Create.php'">+ New Donation</button>
    <table style="text-align: center;">
      <tr>
        <th>Campaign Name</th>
        <th>Target Fund</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['campaign_name']; ?></td>
        <td><?php echo $row['target_fund']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row['d_status']; ?></td>
        <td><button class="button" onclick="window.location.href='Donation_Update.php?d_id=<?php echo $row['donation_id'] ?>'">Edit</button>
        <a href="Donation_Delete.php?d_id=<?php echo $row['donation_id'] ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
</div>


<script type="text/javascript">
  // Retrieve message from URL parameter
  var message = "<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>";
  // Display message in alert
  if (message !== '') {
    alert(message);
  }
</script>

<div style="font-family: Poppins; margin-bottom: 50px;">
    <h2> Event List </h2>
    <button class="button" onclick="window.location.href='Event_Create.php'">+ New Event</button>
    <table style="text-align: center;">
      <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Volunteer Reward</th>
        <th>Expert Reward</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <?php
        while($row1 = mysqli_fetch_assoc($result1)){
      ?>
      <tr>
        <td><?php echo $row1['event_name']; ?></td>
        <td><?php echo $row1['event_description']; ?></td>
        <td><?php echo $row1['event_startdate']; ?></td>
        <td><?php echo $row1['event_enddate']; ?></td>
        <td><?php echo $row1['volunteer_reward']; ?></td>
        <td><?php echo $row1['expert_reward']; ?></td>
        <td><?php echo $row1['e_status']; ?></td>
        <td><button class="button" onclick="window.location.href='Event_Update.php?d_id=<?php echo $row1['event_id'] ?>'">Edit</button>
        <a href="Event_Delete.php?e_id=<?php echo $row1['event_id'] ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
</div>

<div style="font-family: Poppins; margin-bottom: 50px;">
    <h2> News List </h2>
    <button class="button" onclick="window.location.href='Create_News_Form.php'">+ New News</button>
    <table style="text-align: center;">
      <tr>
        <th>News Date</th>
        <th>News Title</th>
        <th>Article</th>
        <th>Thumbnail</th>
      </tr>
      <?php
        while($row2 = mysqli_fetch_assoc($result2)){
      ?>
      <tr>
        <td><?php echo $row2['news_date']; ?></td>
        <td><?php echo $row2['news_title']; ?></td>
        <td><?php echo $row2['article']; ?></td>
        <td><?php echo $row2['thumbnail']; ?></td>
        <td>
          <!-- <button class="button" onclick="window.location.href='Event_Update.php?d_id=<?php //echo $row2['news_id'] ?>'">Edit</button> -->
          
          <a href="News_DeleteProcess.php?n_id=<?php echo $row2['news_id'] ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
</div>

<?php include "Footer.php"; ?>