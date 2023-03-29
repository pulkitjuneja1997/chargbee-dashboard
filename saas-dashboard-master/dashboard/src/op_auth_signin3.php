<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-body-dark">
  <div class="row mx-0 justify-content-center">
    <div class="hero-static col-lg-6 col-xl-4">
      <div class="content content-full overflow-hidden">
        <!-- Header -->
        <div class="py-4 text-center">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
          </a>
          <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
          <h2 class="h5 fw-medium text-muted mb-0">It’s a great day today!</h2>
        </div>
        <!-- END Header -->

        <!-- Sign In Form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-signin" action="be_pages_auth_all.php" method="POST">
          <div class="block block-themed block-rounded block-fx-shadow">
            <div class="block-header bg-gd-dusk">
              <h3 class="block-title">Please Sign In</h3>
            </div>
            <div class="block-content">
              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Enter your username">
                <label class="form-label" for="login-username">Username</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Enter your password">
                <label class="form-label" for="login-password">Password</label>
              </div>
              <div class="row">
                <div class="col-sm-6 d-sm-flex align-items-center push">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me">
                    <label class="form-check-label" for="login-remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm-6 text-sm-end push">
                  <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                    Sign In
                  </button>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_signup3.php">
                <i class="fa fa-plus opacity-50 me-1"></i> Create Account
              </a>
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_reminder3.php">
                Forgot Password
              </a>
            </div>
          </div>
        </form>
        <!-- END Sign In Form -->
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>