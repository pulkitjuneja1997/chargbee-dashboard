<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<div class="bg-body-light hero-bubbles">
  <span class="hero-bubble hero-bubble-lg bg-primary" style="top: 20%; left: 10%;"></span>
  <span class="hero-bubble bg-success" style="top: 20%; left: 80%;"></span>
  <span class="hero-bubble hero-bubble-sm bg-corporate" style="top: 40%; left: 25%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-pulse" style="top: 30%; left: 90%;"></span>
  <span class="hero-bubble bg-danger" style="top: 40%; left: 20%;"></span>
  <span class="hero-bubble bg-warning" style="top: 60%; left: 25%;"></span>
  <span class="hero-bubble bg-info" style="top: 60%; left: 80%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-flat" style="top: 75%; left: 70%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 75%; left: 10%;"></span>
  <span class="hero-bubble bg-elegance" style="top: 90%; left: 90%;"></span>
  <div class="row g-0 justify-content-center position-relative">
    <div class="hero-static col-lg-7">
      <div class="content content-full overflow-hidden">
        <!-- Header -->
        <div class="py-5 text-center">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
          </a>
          <h1 class="h3 fw-bold mt-5 mb-2">Welcome to your new web app installation</h1>
          <h2 class="fs-base fw-medium text-muted mb-0">Let's get started, it will only take a few seconds!</h2>
        </div>
        <!-- END Header -->

        <!-- Installation form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-installation class in js/pages/op_installation.min.js which was auto compiled from _js/pages/op_installation.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-installation" action="op_installation.php" method="POST">
          <div class="block block-rounded block-fx-shadow">
            <!-- Database section -->
            <div class="block-content">
              <h2 class="content-heading pt-3">Database</h2>
              <div class="row items-push">
                <div class="col-lg-4">
                  <p class="text-muted">
                    Please pay extra attention because adding the correct database info is vital for a successful app installation.
                  </p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                  <div class="mb-4">
                    <label class="form-label" for="install-db-name">Name</label>
                    <input type="text" class="form-control form-control-lg" id="install-db-name" name="install-db-name" placeholder="What's the name of your database?">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-db-host">Host</label>
                    <input type="text" class="form-control form-control-lg" id="install-db-host" name="install-db-host" placeholder="Leave empty for 'localhost'">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-db-prefix">Table Prefix</label>
                    <input type="text" class="form-control form-control-lg" id="install-db-prefix" name="install-db-prefix" placeholder="Leave empty for 'app_'">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-db-username">Username</label>
                    <input type="text" class="form-control form-control-lg" id="install-db-username" name="install-db-username" placeholder="Database username">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-db-password">Password</label>
                    <input type="password" class="form-control form-control-lg" id="install-db-password" name="install-db-password" placeholder="Database password">
                  </div>
                </div>
              </div>
            </div>
            <!-- END Database section -->

            <!-- Administrator section -->
            <div class="block-content">
              <h2 class="content-heading pt-3">Administrator</h2>
              <div class="row items-push">
                <div class="col-lg-4">
                  <p class="text-muted">
                    Please add your email and a strong password to create the administrator account.
                  </p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                  <div class="mb-4">
                    <label class="form-label" for="install-admin-email">Email</label>
                    <input type="text" class="form-control form-control-lg" id="install-admin-email" name="install-admin-email">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-admin-password">Password</label>
                    <input type="password" class="form-control form-control-lg" id="install-admin-password" name="install-admin-password">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="install-admin-password-confirm">Password Confirmation</label>
                    <input type="password" class="form-control form-control-lg" id="install-admin-password-confirm" name="install-admin-password-confirm">
                  </div>
                </div>
              </div>
            </div>
            <!-- END Administrator section -->

            <div class="block-content">
              <div class="row mb-4">
                <div class="col-lg-6 offset-lg-5">
                  <button type="submit" class="btn btn-primary mb-2">
                    <i class="fa fa-arrow-right opacity-50 me-1"></i> Install
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- END Installation Form -->
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_installation.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>