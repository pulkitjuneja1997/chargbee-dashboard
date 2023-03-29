<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23@2x.jpg');">
  <div class="hero bg-black-50">
    <div class="hero-inner">
      <div class="content content-full">
        <div class="row justify-content-center">
          <div class="col-md-6 py-4 text-center">
            <h1 class="display-4 fw-bold text-white mb-2">Codebase</h1>
            <h2 class="h4 fw-normal text-white-75 pb-4 mb-3 border-white-op-b">We’re working on it! Coming soon..</h2>

            <!-- Countdown.js functionality is initialized with .js-countdown class in js/pages/op_coming_soon.min.js which was auto compiled from _js/pages/op_coming_soon.js -->
            <!-- For more info and examples you can check out https://github.com/hilios/jQuery.countdown -->
            <div class="js-countdown mb-3"></div>

            <a class="btn rounded-pill btn-outline-warning" href="be_pages_generic_blank.php">
              <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back to Dashboard
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Countdown plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-countdown/jquery.countdown.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_coming_soon.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>