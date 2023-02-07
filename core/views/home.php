<div class="js-intro">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="js-intro-image">
          <img src="https://cdn.dribbble.com/users/3848091/screenshots/7827479/media/5f226eb6aa71d3b639a73d214e716db6.gif" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="white-box">
            <div class="white-box-header">Find the right job for you </div>
            <div class="white-box-content">
              We help employers and candidates find the right fit. With over 6 million active jobseekers,
              BKWorks is Vietnam’s largest market for work. As of 2020, we have helped
              over 76,700 people worldwide be gainfully employed. BKWorks ranked 89th in the 2018 Fortune
              500 list of the largest Vietnam corporations by total revenue.
            </div>
            <div class="js-button js-button-colored mt-4">
              <?php
              if ($_SESSION['isLoggedIn']) {
                echo '<a href="/home" class="text-decoration-none text-white">
                Get started &nbsp; <i class="arrow right"></i>
                </a>';
              } else {
                echo '<a href="/login" class="text-decoration-none text-white">
                Get started &nbsp; <i class="arrow right"></i>
                </a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="js-body">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="js-body-header"> Why BKWorks? </div>
        <div class="js-body-intro">
          Join the leading financial services and technology career website to secure your next job
        </div>
        <div class="js-button js-button-colored mb-4">
          <?php
          if ($_SESSION['isLoggedIn']) {
            echo '<a href="/cv" class="text-decoration-none text-white">
          Create your CV &nbsp; <i class="arrow right"></i>
          </a>';
          } else {
            echo '<a href="/login" class="text-decoration-none text-white">
          Create your CV &nbsp; <i class="arrow right"></i>
          </a>';
          }
          ?>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="js-body-content">
          <div class="js-card">
            <div class="js-card-icon">
              <img src="./Template/user.gif" alt="">
            </div>
            <div class="js-card-header">Follow leading recruiters </div>
            <div class="js-card-body">Stay ahead of who is actively hiring </div>
          </div>
          <div class="js-card">
            <div class="js-card-icon"><img src="./Template/speech-bubble.gif" alt=""></div>
            <div class="js-card-header">Fast conversations </div>
            <div class="js-card-body">Connect quickly with instant messaging</div>
          </div>
          <div class="js-card">
            <div class="js-card-icon"><img src="./Template/phone.gif" alt=""></div>
            <div class="js-card-header">Face-to-face connections </div>
            <div class="js-card-body">Voice or video calls within the safety of our site</div>
          </div>
          <div class="js-card">
            <div class="js-card-icon"><img src="./Template/briefcase.gif" alt=""></div>
            <div class="js-card-header">Get hired </div>
            <div class="js-card-body">Showcase your experience and skills</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="js-candidate">
  <div class="container js-candidate-container">
    <div class="row flex-wrap-reverse">
      <div class="col-12 col-lg-5  js-candidate-content d-flex align-items-start flex-column justify-content-center gap-2">
        <div class="js-candidate-content-header">See right away whether candidates are the right fit </div>
        <div class="js-candidate-content-body">
          We help candidates know whether they're qualified for a job - and allow employers to see their
          match potential - giving employers a better pool of qualified candidates to choose from.
        </div>
        <div class="mt-3 js-button js-button-colored mb-4">
          <?php
          if ($_SESSION['isLoggedIn']) {
            echo '<a href="/cv" class="text-decoration-none text-white">
          View all CVs &nbsp; <i class="arrow right"></i>
          </a>';
          } else {
            echo '<a href="/login" class="text-decoration-none text-white">
          View all CVs &nbsp; <i class="arrow right"></i>
          </a>';
          }
          ?>
        </div>
      </div>
      <div class="col-12 col-lg-7 js-candidate-bg">
        <img src="https://dreamjobs.in/images/staffing.gif" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6  js-candidate-bg">
        <img src="https://www.cyanous.com/img/generalstaf.gif" alt="">
      </div>
      <div class="col-12 col-lg-6 js-candidate-content d-flex align-items-start flex-column justify-content-center gap-2">
        <div class="js-candidate-content-header">Millions of jobs. Find the one that suits you </div>
        <div class="js-candidate-content-body">
          Search all the open positions on the web. Get your own personalized salary estimate.
          Read reviews on over 600,000 companies worldwide.
        </div>
        <div class="mt-3 js-button js-button-colored mb-4">
          <?php
          if ($_SESSION['isLoggedIn']) {
            echo '<a href="/recruit" class="text-decoration-none text-white">
          All job offers &nbsp; <i class="arrow right"></i>
          </a>';
          } else {
            echo '<a href="/login" class="text-decoration-none text-white">
          All job offers &nbsp; <i class="arrow right"></i>
          </a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>