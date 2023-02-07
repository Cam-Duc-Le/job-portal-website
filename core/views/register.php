<script>
  function validateForm() {
    let usn = document.forms["registerForm"]["username"].value;
    let psw = document.forms["registerForm"]["password"].value;
    let repw = document.forms["registerForm"]["retypePassword"].value;
    if (usn.length <= 0) {
      alert("Username cannot be empty.");
      return false;
    }
    if (psw.length <= 0) {
      alert("Password cannot be empty.");
      return false;
    }
    if (repw.length <= 0) {
      alert("Repeat password cannot be empty.");
      return false;
    }
    return true;
  }
</script>


<div class="container" style="padding: 80px 40px 80px 40px">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw1.webp" class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-lg-1">
      <form action="register" method="post">

        <!-- Username input -->
        <div class="mb-3 form-group">
          <label class="form-label" for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter username" />
        </div>

        <!-- Password input -->
        <div class="mb-3 form-group">
          <label class="form-label" for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password" />
        </div>

        <!-- Confirmed password input -->
        <div class="mb-3 form-group">
          <label class="form-label" for="retypePassword">Confirmed password</label>
          <input type="password" name="retypePassword" class="form-control" placeholder="Enter confirmed password" />
        </div>

        <!-- Role input -->
        <div class="mb-3 form-group">
          <label class="form-label" for="role">Role</label>
          <select id="role" class="form-select" name="role">
            <option selected>Select a role</option>
            <option value="candidate">Candidate</option>
            <option value="employer">Employer</option>
            <option value="admin">Admin</option>
          </select>

        </div>

        <div class="text-center text-lg-start mt-3 pt-2 mb-4">
          <button type="submit" class="btn btn-outline-primary btn-lg" style="padding-left: 2rem; padding-right: 2rem; font-size: 18px">Register</button>
          <p class="fs-5 fw-bold mt-3 pt-1 mb-0">
            Already have an account?
            <a href="login" class="text-decoration-none">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>