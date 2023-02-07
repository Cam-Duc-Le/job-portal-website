<div class="container" style="padding: 80px 40px 80px 40px">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-lg-1">
      <form action="login" method="post">

        <!-- Email input -->
        <div class="mb-3">
          <label class="form-label" for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter your username" />
        </div>

        <!-- Password input -->
        <div class="mb-3">
          <label class="form-label" for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password" />
        </div>

        <div class="text-center text-lg-start mt-4 pt-2 mb-4">
          <button type="submit" class="btn btn-outline-primary btn-lg" style="padding-left: 2rem; padding-right: 2rem; font-size: 18px">Login</button>
          <p class="fs-5 fw-bold mt-3 pt-1 mb-0">
            Don't have an account?
            <a href="register" class="text-decoration-none">Register</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>