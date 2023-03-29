<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="row mx-0 bg-pulse-op">
    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
      <div class="p-4">
        <p class="fs-3 fw-semibold text-white">
          <i class="fa fa-bell opacity-50"></i> You have <a class="link-fx text-white" href="javascript:void(0)">5 new notifications</a>!
        </p>
        <p class="text-white-75 fw-medium">
          Copyright &copy; <span data-toggle="year-copy"></span>
        </p>
      </div>
    </div>
    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
      <div class="content content-full">
        <!-- Header -->
        <div class="px-4 py-2 mb-4">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
          </a>
          <h1 class="h3 fw-bold mt-4 mb-2">Welcome back, Admin</h1>
          <h2 class="h5 fw-medium text-muted mb-4">Please enter your password</h2>
          <?php $cb->get_avatar(15, '', 96); ?>
        </div>
        <!-- END Header -->

        <!-- Unlock Form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-lock class in js/pages/op_auth_lock.min.js which was auto compiled from _js/pages/op_auth_lock.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-lock px-4" action="be_pages_auth_all.php" method="POST">
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="lock-password" name="lock-password" placeholder="Enter your password">
            <label class="form-label" for="lock-password">Password</label>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
              Unlock
            </button>
            <div class="mt-4">
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_signin2.php">
                <i class="fa fa-arrow-left opacity-50 me-1"></i> Not you? Sign In
              </a>
            </div>
          </div>
        </form>
        <!-- END Unlock Form -->
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
<?php $cb->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>