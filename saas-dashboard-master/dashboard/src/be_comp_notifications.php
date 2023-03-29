<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Notifications -->
  <h2 class="content-heading">Notifications</h2>

  <!-- Bootstrap Toasts -->
  <div class="toast-container position-absolute top-0 end-0 p-3">
    <!-- Toast Example 1 -->
    <div id="toast-example-1" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="si si-bubble text-primary me-2"></i>
        <strong class="me-auto">Title</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        This is a nice notification based on Bootstrap implementation.
      </div>
    </div>
    <!-- END Toast Example 1 -->

    <!-- Toast Example 2 -->
    <div id="toast-example-2" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="si si-wrench text-danger me-2"></i>
        <strong class="me-auto">System</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        You can alert the user with a system message!
      </div>
    </div>
    <!-- END Toast Example 2 -->
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Toasts</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-md-6">
          <button type="button" class="btn btn-alt-secondary push" onclick="new bootstrap.Toast(document.getElementById('toast-example-1')).show();">
            <i class="fa fa-bell opacity-50 me-1"></i> Launch Toast 1
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>new bootstrap.Toast(document.getElementById('toast-example-1')).show();</code>
          </p>
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-alt-secondary push" onclick="new bootstrap.Toast(document.getElementById('toast-example-2')).show();">
            <i class="fa fa-bell opacity-50 me-1"></i> Launch Toast 2
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>new bootstrap.Toast(document.getElementById('toast-example-2')).show();</code>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Bootstrap Toasts -->

  <!-- Bootstrap Notify (.js-notify class is initialized in Helpers.jqNotify()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Notify</h3>
    </div>
    <div class="block-content">
      <div class="row items-push push">
        <div class="col-md-6 col-xl-4">
          <h4>Top Right</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <h4>Top Left</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-align="left" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-align="left" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-align="left" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-align="left" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <h4>Top Center</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-align="center" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-align="center" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-align="center" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-align="center" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <h4>Bottom Right</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <h4>Bottom Left</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-align="left" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-align="left" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-align="left" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-align="left" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <h4>Bottom Center</h4>
          <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-align="center" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-align="center" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-align="center" data-icon="fa fa-exclamation-triangle" data-message="Please make a backup before updating!">Warning</button>
          <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-align="center" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
        </div>
      </div>
      <h4>You can also trigger a notification with JS:</h4>
      <pre class="p-4 bg-body-light rounded">Codebase.helpers('jq-notify', {
    align: 'right',             // 'right', 'left', 'center'
    from: 'top',                // 'top', 'bottom'
    type: 'info',               // 'info', 'success', 'warning', 'danger'
    icon: 'fa fa-info me-5',    // Icon class
    message: 'Your message!'
});</pre>
    </div>
  </div>
  <!-- END Bootstrap Notify -->
  <!-- END Notifications -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for BS Notify plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/bootstrap-notify/bootstrap-notify.min.js'); ?>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>Codebase.helpersOnLoad(['jq-notify']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
