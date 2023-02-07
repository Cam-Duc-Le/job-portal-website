<link rel="stylesheet" href="./Template/editCV.css">

<div>
  <div class="border">
    <form name="cvForm" class="bg-light p-2" action="cv/create" method="post">
      <div class="wrapper">
        <div class="sidebar-wrapper">
          <div class="profile-container">
            <h1 class="name"><input name="Name" style="height:50px;font-size:14pt; width: 100%;" type="text" placeholder="Tam Nguyen"></h1>
          </div>
          <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
              <li><input name="Phone" type="text" placeholder="+123-45-678"></li>
              <li><input name="Mail" type="text" placeholder="abc@gmail.com"></li>
              <li><input name="Web" type="text" placeholder="abc.com"></li>
              <li><input name="Place" type="text" placeholder="HCMC, Vietnam"></li>
            </ul>
          </div>
          <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <div class="item">
              <input type="text" name="education_major1" id="education_major1" placeholder="MSc in Computer Science" class="mb-2">
              <input type="text" name="education_name1" id="education_name1" placeholder="University of London" class="mb-2">
              <input type="text" name="education_time1" id="education_time1" placeholder="2016 - 2018">
            </div>
          </div>

          <div class="languages-container container-block">
            <h2 class="container-block-title">Languages</h2>
            <ul class="list-unstyled interests-list">
              <li><input type="text" name="language1" id="language1" placeholder="First Language"></li>
              <li><input type="text" name="language2" id="languag2" placeholder="Second Language"></li>
              <li><input type="text" name="language3" id="language3" placeholder="Third Language"></li>
            </ul>
          </div>
        </div>

        <div class="main-wrapper">

          <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"></span>About me</h2>
            <div class="summary">
              <textarea name="About" cols="70" rows="10" placeholder="Describe about yourself"></textarea>
            </div>
          </section>

          <section class="section experiences-section">
            <h2 class="section-title"><span class="icon-holder"></span>Experiences</h2>

            <div class="item">
              <h4 class="container-block-title">First Company</h4>
              <div class="meta">
                <div class="upper-row">
                  <input class="mb-2" name="role1" type="text" placeholder="Job position">
                  <div class="time"><input name="period1" type="text" placeholder="Dec 2022 - Present"></div>
                </div>
                <div class="company"><input name="company1" type="text" placeholder="Company name"></div>
              </div>
              <div class="details">
                <textarea name="companydes1" cols="40" rows="5" placeholder="Company description"></textarea>
              </div>
            </div>
            <hr>
            <div class="item">
              <h4 class="container-block-title">Second Company</h4>
              <div class="meta">
                <div class="upper-row">
                  <input class="mb-2" name="role2" type="text" placeholder="Job position">
                  <div class="time"><input name="period2" type="text" placeholder="Dec 2022 - Present"></div>
                </div>
                <div class="company"><input name="company2" type="text" placeholder="Company name"></div>
              </div>
              <div class="details">
                <textarea name="companydes2" cols="40" rows="5" placeholder="Company description"></textarea>
              </div>
            </div>
            <hr>
            <div class="item">
              <h4 class="container-block-title">Third Company</h4>
              <div class="meta">
                <div class="upper-row">
                  <input class="mb-2" name="role3" type="text" placeholder="Job position">
                  <div class="time"><input name="period3" type="text" placeholder="Dec 2022 - Present"></div>
                </div>
                <div class="company"><input name="company3" type="text" placeholder="Company name"></div>
              </div>
              <div class="details">
                <textarea name="companydes3" cols="40" rows="5" placeholder="Company description"></textarea>
              </div>
            </div>
          </section>
          <section class="section projects-section">
            <h2 class="section-title"><span class="icon-holder"></span>Hobbies</h2>
            <textarea name="hobbies" cols="70" rows="10" placeholder="Describe your hobbies"></textarea>
          </section>

          <section class="skills-section section">
            <h2 class="section-title"><span class="icon-holder"></span>Skills &amp; Proficiency</h2>
            <div class="skillset">
              <div class="item">
                <h3 class="level-title"><input name="skill1" type="text" placeholder="HTML"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide1" type="range">
                </div>
              </div>

              <div class="item">
                <h3 class="level-title"><input name="skill2" type="text" placeholder="CSS"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide2" type="range">
                </div>
              </div>

              <div class="item">
                <h3 class="level-title"><input name="skill3" type="text" placeholder="PHP"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide3" type="range">
                </div>
              </div>

              <div class="item">
                <h3 class="level-title"><input name="skill4" type="text" placeholder="PYTHON"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide4" type="range">
                </div>
              </div>

              <div class="item">
                <h3 class="level-title"><input name="skill5" type="text" placeholder="JAVASCRIPT"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide5" type="range">
                </div>
              </div>

              <div class="item">
                <h3 class="level-title"><input name="skill6" type="text" placeholder="REACT"></h3>
                <div class="progress level-bar">
                  <input class="input-range" name="slide6" type="range">
                </div>
              </div>
            </div>
          </section>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>

    </form>
  </div>

</div>