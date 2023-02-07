<link rel="stylesheet" href="./Template/profile.css">
<div class="Profile container">
  <!-- Header -->
  <div class="d-flex container-fluid" style="min-height: 700px;">
    <!-- Header container -->
    <div class="d-flex align-items-center">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-10" style="padding-left: 300px;">
          <h1 class="text-primary" style="font-size: 2.75rem; font-weight: 600; line-height: 1.5;">Hello <?php echo $_SESSION['username']; ?></h1>
          <p class="text-primary mt-0 mb-5" style="font-size: 1rem; font-weight: 300; line-height: 1.7;">
            <q>Hiring the right people takes time, the right questions, and a healthy dose of curiosity</q>
            <br />
            <text class="fw-normal pull-right">- Richard Branson -</text>
          </p>
          <button class='btn btn-info' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit profile</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form name="changeForm" onsubmit="return validateForm()" action="user/changeProfile/<?php echo $_SESSION['id']; ?>" method="post">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="username">New username:</label>
                      <input type="text" id="username" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                      <label for="oldPassword">Old password:</label>
                      <input type="password" id="oldPassword" class="form-control" name="oldPassword">
                    </div>
                    <div class="form-group">
                      <label for="newPassword">New password:</label>
                      <input type="password" id="newPassword" class="form-control" name="newPassword">
                    </div>
                    <div class="form-group">
                      <label for="retypePassword">Retype your new password:</label>
                      <input type="password" id="retypePassword" class="form-control" name="retypePassword">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/logout">
                      <button type="submit" name="submitAddItem" class="btn btn-primary">Save changes</button>
                    </a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="padding-right: 250px;">
          <img src="/Template/hello.webp" alt="Hello" width="100%" height="100%" style="mix-blend-mode: multiply;" />
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function validateForm() {
    let usn = document.forms["changeForm"]["username"].value;
    let oldPassword = document.forms["changeForm"]["oldPassword"].value;
    let newPassword = document.forms["changeForm"]["newPassword"].value;
    let repw = document.forms["changeForm"]["retypePassword"].value;

    if (usn.length <= 0) {
      alert("Username cannot be empty.");
      return false;
    }
    if (oldPassword.length <= 0) {
      alert("Old password cannot be empty.");
      return false;
    }
    if (newPassword.length <= 0) {
      alert("New password cannot be empty.");
      return false;
    }
    if (repw.length <= 0) {
      alert("Repeat password cannot be empty.");
      return false;
    }
    return true;
  }
</script>