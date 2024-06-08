<?php include 'Header.php';?>


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

    <!-- 這裡是我們的Main Content for every page -->
    <main>
      <!-- Introduction -->
      <div class="introduction">
        <iframe src="https://www.youtube-nocookie.com/embed/zcruIov45bI?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <div class="beyond-introductory-video">
          <div class="intro-logo">Altruism</div>
          <div class="homepage-intro-description">A crowdsourcing platform to make the world a better place</div>
          <button class="watch-button"><a href="Introduction-Page.php">Watch the film<img src="source/icons/Introduction/watch-button.png"></a></button>
        </div>
      </div>

      <!-- News Room -->
      <div class="news">
        <div class="news-left-section">
          <div class="news-left-top" onclick="window.location.href='news.php'">
            <div class="news-title">
              Today's Story
            </div>
            <div class="news-date">
              &lt;<span id="datetime"></span>&gt;
            </div>
          </div>

          <div class="news-window" onclick="window.location.href='news.php'">
            <div class="slider">
              <img id="slide-1" src="source/pictures/News-1.jpg">
              <img id="slide-2" src="source/pictures/News-2.avif">
              <img id="slide-3" src="source/pictures/News-3.jpg">
            </div>
            <div class="slider-nav">
              <a href="#slide-1"></a>
              <a href="#slide-2"></a>
              <a href="#slide-3"></a>
            </div>
          </div>
        </div>

        <div class="news-right-section">
          <div class="news-right-title" onclick="window.location.href='news.php'">The News' Description:</div>
          <div class="news-right-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus ultrices felis, vel vehicula leo tempus porta. Praesent dignissim commodo erat, et posuere eros egestas sed. Integer lectus purus, dignissim ut purus eu, ornare scelerisque metus. Cras ultrices lobortis odio nec porttitor. Ut efficitur, purus eu tempor finibus, lorem sem elementum enim, non aliquet leo libero in lorem. Donec tellus dui, semper non tristique quis, fringilla et tortor. In arcu nibh, venenatis eu tempor ac, accumsan et turpis. Suspendisse volutpat id turpis at scelerisque. Morbi eget volutpat augue, eget auctor massa. Nam sodales suscipit dolor.
          </div>
        </div>
      </div>

      <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (("0"+dt.getDate()).slice(-2)) +"/"+ (dt.getFullYear());
      </script>

      <!-- Events -->
      <div class="events">
        <div class="event-panel">
          <img src="source/pictures/Event-1.jpg">
          <div class="event-panel-up">
          </div>
          
          <div class="event-panel-down">
            Event
            <button class="volunteer-button"><a href="event_details.php">I AM VOLUNTEERING</a></button>
          </div>
        </div>
        <div class="event-panel">
          <img src="source/pictures/Event-2.jpg">
          <div class="event-panel-up">
          </div>
          <div class="event-panel-down">
            Event
            <button class="volunteer-button"><a href="event_details.php">I AM VOLUNTEERING</a></button>
          </div>
        </div>
        <div class="event-panel">
          <img src="source/pictures/Event-3.jpg">
          <div class="event-panel-up">
          </div>
          <div class="event-panel-down">
            Event
            <button class="volunteer-button"><a href="event_details.php">I AM VOLUNTEERING</a></button>
          </div>
        </div>
      </div>
      
      <!-- Donate -->
      <div class="donate">
        <div class="donate-left">
          <img src="source/pictures/donation.jpg">
        </div>
        <div class="donate-right">
          <button class="donate-button"><a href="Donation.php">DONATE NOW</a></button>
          <div class="right-bottom-1">
            Campaign:
          </div>
          <div class="right-bottom-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus ultrices felis, vel vehicula leo tempus porta. Praesent dignissim commodo erat, et posuere eros egestas sed. Integer lectus purus, dignissim ut purus eu, ornare scelerisque metus.
          </div>
        </div>
      </div>
      
      <!-- Expert -->
      <div class="expert">
        <div class="expert-left">
          <button class="expert-button"><a href="expert.php">JOIN AS EXPERT</a></button>
          <div class="left-bottom-1">
            Expert Requirements:
          </div>
          <div class="left-bottom-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus ultrices felis, vel vehicula leo tempus porta. Praesent dignissim commodo erat, et posuere eros egestas sed. Integer lectus purus, dignissim ut purus eu, ornare scelerisque metus.
          </div>
        </div>
        <div class="expert-right">
          <img src="source/pictures/expert.avif">
        </div>
      </div>
    </main>


<?php include 'Footer.php';?>