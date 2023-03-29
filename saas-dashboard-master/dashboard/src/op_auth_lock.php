<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg');">
  <div class="hero-static content content-full bg-body-extra-light">
    <!-- Avatar -->
    <div class="py-4 px-1 text-center mb-4">
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire"></i>
        <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
      </a>
      <h1 class="h3 fw-bold mt-5 mb-2">Welcome back, Admin</h1>
      <h2 class="h5 fw-normal text-muted mb-4">Please enter your password</h2>
      <?php $cb->get_avatar(15, '', 96); ?>
    </div>
    <!-- END Avatar -->

    <!-- Unlock Content -->
    <div class="row justify-content-center px-1">
      <div class="col-sm-8 col-md-6 col-xl-4">
        <!-- jQuery Validation functionality is initialized with .js-validation-lock class in js/pages/op_auth_lock.min.js which was auto compiled from _js/pages/op_auth_lock.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-lock" action="be_pages_auth_all.php" method="POST">
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="lock-password" name="lock-password" placeholder="Enter your password">
            <label class="form-label" for="lock-password">Password</label>
          </div>
          <div class="mb-4 space-y-2">
            <button type="submit" class="btn btn-lg btn-alt-primary w-100 py-2 fw-semibold">
              Unlock
            </button>
            <a class="btn btn-alt-secondary w-100" href="op_auth_signin.php">
              Sign Out
            </a>
          </div>
        </form>
      </div>
    </div>
    <!-- END Unlock Content -->
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
<?php $cb->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>