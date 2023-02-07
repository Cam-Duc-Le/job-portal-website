<link rel="stylesheet" href="./Template/editCV.css">

<div>
  <div class="border">
    <div class="wrapper">
      <div class="sidebar-wrapper">
        <div class="profile-container">
          <h1 class="name"><input disabled name="Name" style="height:50px;font-size:14pt; width: 100%;" type="text" value="<?php echo $cvData['Name']; ?>"></h1>
        </div>
        <div class="contact-container container-block">
          <ul class="list-unstyled contact-list">
            <li><input disabled name="Phone" type="text" value="<?php echo $cvData['Phone']; ?>"></li>
            <li><input disabled name="Mail" type="text" value="<?php echo $cvData['Mail']; ?>"></li>
            <li><input disabled name="Web" type="text" value="<?php echo $cvData['Web']; ?>"></li>
            <li><input disabled name="Place" type="text" value="<?php echo $cvData['Place']; ?>"></li>
          </ul>
        </div>
        <div class="education-container container-block">
          <h2 class="container-block-title">Education</h2>
          <div class="item">
            <input disabled type="text" name="education_major1" id="education_major1" value="MSc in Computer Science" class="mb-2">
            <input disabled type="text" name="education_name1" id="education_name1" value="University of London" class="mb-2">
            <input disabled type="text" name="education_time1" id="education_time1" value="2016 - 2018">
          </div>
        </div>

        <div class="languages-container container-block">
          <h2 class="container-block-title">Languages</h2>
          <ul class="list-unstyled interests-list">
            <li><input disabled type="text" name="language1" id="language1" placeholder="First Language"></li>
            <li><input disabled type="text" name="language2" id="languag2" placeholder="Second Language"></li>
            <li><input disabled type="text" name="language3" id="language3" placeholder="Third Language"></li>
          </ul>
        </div>
      </div>

      <div class="main-wrapper">

        <section class="section summary-section">
          <h2 class="section-title"><span class="icon-holder"></span>About me</h2>
          <div class="summary">
            <textarea name="About" cols="70" rows="10"><?php echo $cvData['About']; ?></textarea>
          </div>
        </section>

        <section class="section experiences-section">
          <h2 class="section-title"><span class="icon-holder"></span>Experiences</h2>

          <div class="item">
            <h4 class="container-block-title">First Company</h4>
            <div class="meta">
              <div class="upper-row">
                <input disabled class="mb-2" name="role1" type="text" value="<?php echo $cvData['role1']; ?>">
                <div class="time"><input disabled name="period1" type="text" value="<?php echo $cvData['period1']; ?>"></div>
              </div>
              <div class="company"><input disabled name="company1" type="text" value="<?php echo $cvData['company1']; ?>"></div>
            </div>
            <div class="details">
              <textarea name="companydes1" cols="40" rows="5"><?php echo $cvData['companydes1']; ?></textarea>
            </div>
          </div>
          <hr>
          <div class="item">
            <h4 class="container-block-title">Second Company</h4>
            <div class="meta">
              <div class="upper-row">
                <input disabled class="mb-2" name="role2" type="text" value="<?php echo $cvData['role2']; ?>">
                <div class="time"><input disabled name="period2" type="text" value="<?php echo $cvData['period2']; ?>"></div>
              </div>
              <div class="company"><input disabled name="company2" type="text" value="<?php echo $cvData['company2']; ?>"></div>
            </div>
            <div class="details">
              <textarea name="companydes2" cols="40" rows="5"><?php echo $cvData['companydes2']; ?></textarea>
            </div>
          </div>
          <hr>
          <div class="item">
            <h4 class="container-block-title">Third Company</h4>
            <div class="meta">
              <div class="upper-row">
                <input disabled class="mb-2" name="role3" type="text" value="<?php echo $cvData['role3']; ?>">
                <div class="time"><input disabled name="period3" type="text" value="<?php echo $cvData['period3']; ?>"></div>
              </div>
              <div class="company"><input disabled name="company3" type="text" value="<?php echo $cvData['company3']; ?>"></div>
            </div>
            <div class="details">
              <textarea name="companydes3" cols="40" rows="5"><?php echo $cvData['companydes3']; ?></textarea>
            </div>
          </div>
        </section>
        <section class="section projects-section">
          <h2 class="section-title"><span class="icon-holder"></span>Hobbies</h2>
          <textarea name="hobbies" cols="70" rows="10"><?php echo $cvData['hobbies']; ?></textarea>
        </section>

        <section class="skills-section section">
          <h2 class="section-title"><span class="icon-holder"></span>Skills &amp; Proficiency</h2>
          <div class="skillset">
            <div class="item">
              <h3 class="level-title"><input disabled name="skill1" type="text" value="<?php echo $cvData['skill1']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide1" type="range" value="<?php echo $cvData['slide1']; ?>">
              </div>
            </div>

            <div class="item">
              <h3 class="level-title"><input disabled name="skill2" type="text" value="<?php echo $cvData['skill2']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide2" type="range" value="<?php echo $cvData['slide2']; ?>">
              </div>
            </div>

            <div class="item">
              <h3 class="level-title"><input disabled name="skill3" type="text" value="<?php echo $cvData['skill3']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide3" type="range" value="<?php echo $cvData['slide3']; ?>">
              </div>
            </div>

            <div class="item">
              <h3 class="level-title"><input disabled name="skill4" type="text" value="<?php echo $cvData['skill4']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide4" type="range" value="<?php echo $cvData['slide4']; ?>">
              </div>
            </div>

            <div class="item">
              <h3 class="level-title"><input disabled name="skill5" type="text" value="<?php echo $cvData['skill5']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide5" type="range" value="<?php echo $cvData['slide5']; ?>">
              </div>
            </div>

            <div class="item">
              <h3 class="level-title"><input disabled class="skill-name" name="skill6" type="text" value="<?php echo $cvData['skill6']; ?>"></h3>
              <div class="progress level-bar">
                <input disabled class="input-range" name="slide6" type="range" value="<?php echo $cvData['slide6']; ?>">
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</div>