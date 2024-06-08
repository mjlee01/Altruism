<?php 
  session_start();

  include "Login-Page/db_conn.php";
  include "Header.php";
  
  $sql = "SELECT * FROM donation WHERE d_status = 'active'";
  $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Event</title>
    <link rel="stylesheet" href="event_create.css">
</head>
<body>
    <h1>Start New Event</h1>

    <form action="Event_CreateProcess.php" method="POST">

        <div>
            <label for="eventname">Event Name <i id="requiredlabel">(required)</i></label><br>
            <input name="event_name" type="text" id="eventname" class="eventname" placeholder="Enter Event Name" required>
        </div>

        <br>

        <div>
            <label for="eventdesc">Event Description <i id="requiredlabel">(required)</i></label><br>
            <input name="event_desc" type="text" id="eventdesc" class="eventdesc" placeholder="Enter Event Description" required>
        </div>

        <br>

        <div>
            <label for="startdate">Event Start Date <i id="requiredlabel">(required)</i></label><br>
            <input name="start_date" type="date" id="startdate" class="startdate" placeholder="Enter Start Date" required>
        </div>
        
        <br>

        <div>
            <label for="enddate">Event End Date <i id="requiredlabel">(required)</i></label><br>
            <input name="end_date" type="date" id="enddate" class="enddate" placeholder="Enter End Date" required>
        </div>
            
        <br>

        <div>    
            <label for="volreward">Volunteer Reward <i id="requiredlabel">(required)</i></label><br>
            <input name="vol_reward" type="number" id="volreward" class="volreward" placeholder="Enter Volunter Reward" maxlength="4" required>
        </div>

        <br>

        <div>
            <label for="expreward">Expert Reward <i id="requiredlabel">(required)</i></label><br>
            <input name="exp_reward" type="number" id="expreward" class="expreward" placeholder="Enter Expert Reward" maxlength="4" required>
        </div>

        <br>

        <div>
            <input type="reset">
        </div>

        <br>

        <div>
            <input type="submit">
            </div>
    </form>
</body>
</html>