<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Dialogs -->
  <h2 class="content-heading">Dialogs</h2>

  <!-- SweetAlert2 functionality is initialized in js/pages/be_comp_dialogs.min.js which was auto compiled from _js/pages/be_comp_dialogs.js -->
  <!-- For more info and examples you can check out https://github.com/limonte/sweetalert2 -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">SweetAlert2</h3>
    </div>
    <div class="block-content">
      <div class="row items-push">
        <div class="col-md-6">
          <button type="button" class="js-swal-success btn btn-alt-success">Success</button>
          <p class="text-muted mt-2">
            A dialog showing a message after a successful operation
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-info btn btn-alt-info">Info</button>
          <p class="text-muted mt-2">
            A dialog showing an informational message
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-warning btn btn-alt-warning">Warning</button>
          <p class="text-muted mt-2">
            A dialog showing a warning message
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-error btn btn-alt-danger">Error</button>
          <p class="text-muted mt-2">
            A dialog showing a message after a failed operation
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-simple btn btn-alt-primary">Simple</button>
          <p class="text-muted mt-2">
            A dialog showing a simple message
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-question btn btn-alt-primary">Question</button>
          <p class="text-muted mt-2">
            A dialog showing a question message
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-confirm btn btn-alt-primary">Confirm</button>
          <p class="text-muted mt-2">
            A dialog showing a confirmation message
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="js-swal-custom-position btn btn-alt-primary">Custom</button>
          <p class="text-muted mt-2">
            A dialog showing at the top right of the screen
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END SweetAlert2 -->
  <!-- END Dialogs -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_dialogs.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
