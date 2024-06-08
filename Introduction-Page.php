<?php include 'Header.php';?>
    <main>
      <!-- Introductory Video -->
      <iframe class="introduction" src="https://www.youtube-nocookie.com/embed/zcruIov45bI?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <!-- The Purpose of Altruism -->
      <div class="purpose">
        <h1>The Purpose of Altruism</h1>
        <div class="accordion-wrapper">
          <button class="purpose-accordion">1. Collective Collaboration</button>
          <div class="purpose_panel">
            <p>Altruism is a platform that fosters a collaborative space where individuals unite to pool resources, skills, and ideas, leveraging collective efforts towards solving societal challenges and making impactful changes.</p>
          </div>
  
          <button class="purpose-accordion">2. Inclusive Engagement</button>
          <div class="purpose_panel">
            <p>Emphasizing inclusivity, Altruism welcomes and empowers individuals from diverse backgrounds, encouraging active participation irrespective of expertise, location, or resources, thereby ensuring that everyone can contribute to creating a better world.</p>
          </div>
  
          <button class="purpose-accordion">3. Tangible Impact and Transparency</button>
          <div class="purpose_panel">
            <p>By emphasizing accountability and transparency, Altruism showcases tangible outcomes from collective actions. It offers a transparent view of contributions and their real-world impacts, fostering a sense of accountability and driving continuous engagement towards meaningful change.</p>
          </div>
          
          <button class="purpose-accordion">4. Amplifying Voices for Change</button>
          <div class="purpose_panel">
            <p>Altruism amplifies individual voices, providing a space for people to share their concerns, innovative ideas, and aspirations for a better world. By facilitating dialogue and collaboration, it empowers individuals to shape impactful initiatives that address pressing global issues.</p>
          </div>
        </div>

        <button class="purpose_about-us_btn"><a href="About_Us.php">About Us</a></button>
        
        <script>
          var acc = document.getElementsByClassName("purpose-accordion");
          var i;

          for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var purpose_panel = this.nextElementSibling;
              if (purpose_panel.style.maxHeight) {
                purpose_panel.style.maxHeight = null;
              } else {
                purpose_panel.style.maxHeight = purpose_panel.scrollHeight + "px";
              } 
            });
          }
        </script>
      </div>
    </main>


<?php include 'Footer.php';?>