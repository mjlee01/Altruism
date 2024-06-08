<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Altruism</title>
    <link rel="icon" href="source/pictures/Altruism-Logo.png">

    <!-- General Styles -->
    <link rel="stylesheet" href="styles/General.css">
    <link rel="stylesheet" href="styles/Header-&-Footer.css">
    
    <!-- Login & Sign Up Styles -->
    <!-- <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="signup-style.css"> -->

    <!-- Homepage Styles -->
    <link rel="stylesheet" href="styles/homepage_daily-rewards.css">
    <link rel="stylesheet" href="styles/homepage_introductory-video.css">
    <link rel="stylesheet" href="styles/homepage_news.css">
    <link rel="stylesheet" href="styles/homepage_events.css">
    <link rel="stylesheet" href="styles/homepage_donate.css">
    <link rel="stylesheet" href="styles/homepage_expert.css">
    
    <!-- Introduction Page Styles -->
    <link rel="stylesheet" href="styles/introduction-page_purpose.css">
    
    <!-- Donation Page Styles -->
    <link rel="stylesheet" href="styles/donation_introduction.css">
    <link rel="stylesheet" href="styles/donation_money-flow.css">
    <link rel="stylesheet" href="styles/donation_status.css">

    <!-- About Us Style -->
    <link rel="stylesheet" href="styles/about-style.css">

    <!-- User Profile Styles -->
    <link rel="stylesheet" href="styles/user_profile.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>
  <body>
    <!-- 這裡是我們的header -->
    <header class="header">
      <!-- 左邊header -->
      <div class="left-section">
        <div class="altruism-logo"><a href="Homepage.php">Altruism</a></div>
      </div>
      <!-- 中間header -->
      <!-- admin header-->
      <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
        <div class="middle-section" style="justify-content:end; margin-right:-250px;">
          <button class="home-button" onclick="window.location.href='Homepage.php'">Home</button>
          <button class="home-button" onclick="window.location.href='Admin_Dashboard.php'">Dashboard</button>
          <!-- <button class="experts-button">Experts</button> -->
        </div>

      <!-- user header-->
      <?php }elseif(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){ ?>
        <div class="middle-section">
          <button class="home-button" onclick="window.location.href='Homepage.php'">Home</button>
          <button class="news-room-button" onclick="window.location.href='news.php'">News Room</button>
          <button class="events-button" onclick="window.location.href='event_details.php'">Events</button>
          <button class="donation-button" onclick="window.location.href='Donation.php'">Donation</button>
          <button class="experts-button" onclick="window.location.href='expert.php'">Experts</button>
          <!-- <button class="daily-rewards-button" onclick="window.location.href='User_Profile.php'">Profile</button> -->
          <button class="daily-rewards-button" onclick="window.location.href='About_Us.php'">About Us</button>
        </div>
      
      <!-- non-user header-->
      <?php  } else{ ?>
        <div class="middle-section">
          <button class="home-button" onclick="window.location.href='Homepage.php'">Home</button>
          <button class="news-room-button" onclick="window.location.href='news.php'">News Room</button>
          <button class="events-button" onclick="window.location.href='event_details.php'">Events</button>
          <button class="donation-button" onclick="window.location.href='Donation.php'">Donation</button>
          <button class="experts-button" onclick="window.location.href='expert.php'">Experts</button>
          <!-- <button class="daily-rewards-button" onclick="window.location.href='User_Profile.php'">Profile</button> -->
          <button class="daily-rewards-button" onclick="window.location.href='About_Us.php'">About Us</button>
        </div>

      <?php } ?>
        
      <!-- 右邊header -->
      <div class="right-section" onclick="window.location.href='User_Profile.php'">
        <img src="source/icons/login-white.png">
        <div>
          <?php 
          if ($_SESSION['username'] != null){
            echo $_SESSION['username'];
          }
          else{
            echo "<a href='Login-Page/Login.php' style='text-decoration: none;color: white;'> Sign In </a>";
          }
          ?>
        </div>
      </div>
    </header>
