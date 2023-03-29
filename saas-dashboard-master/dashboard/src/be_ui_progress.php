<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Progress Bars -->
  <h2 class="content-heading">Progress Bars</h2>

  <!-- Bars -->
  <!-- Randomize Values Buttons functionality is initialized with .js-bar-randomize class in js/pages/be_ui_progress.min.js which was auto compiled from _js/pages/be_ui_progress.js -->
  <div class="row">
    <div class="col-xl-6">
      <!-- Progress Normal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Progress <small>Normal</small>
          </h3>
          <div class="block-options">
            <button type="button" class="js-bar-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="progress push">
            <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </div>
      </div>
      <!-- END Progress Normal -->
    </div>
    <div class="col-xl-6">
      <!-- Progress Striped -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Progress <small>Striped</small>
          </h3>
          <div class="block-options">
            <button type="button" class="js-bar-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="progress push">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </div>
      </div>
      <!-- END Progress Striped -->
    </div>
    <div class="col-xl-6">
      <!-- Progress Animated -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Progress <small>Animated</small>
          </h3>
          <div class="block-options">
            <button type="button" class="js-bar-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="progress push">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="progress-bar-label fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </div>
      </div>
      <!-- END Progress Animated -->
    </div>
    <div class="col-xl-6">
      <!-- Progress Mini -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Progress <small>Mini</small>
          </h3>
          <div class="block-options">
            <button type="button" class="js-bar-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-flat" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress push" style="height: 8px;">
            <div class="progress-bar bg-pulse" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <!-- END Progress Mini -->
    </div>
  </div>
  <!-- END Bars -->
  <!-- END Progress Bars -->

  <!-- Progress Spinners -->
  <h2 class="content-heading">Progress Spinners</h2>

  <!-- Loading Icons -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Loading Icons</h3>
    </div>
    <div class="block-content">
      <p class="mb-5">You can create a loading indicator by adding the class <code>fa-spin</code> to any Font Awesome icon. Combining it with size classes and colors, you can get a lot of variations.</p>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="far fa-4x fa-sun fa-spin text-warning"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="far fa-3x fa-sun fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="far fa-2x fa-sun fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="far fa-sun fa-spin"></i>
        </div>
      </div>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="fa fa-4x fa-cog fa-spin text-success"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-3x fa-cog fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-2x fa-cog fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-cog fa-spin"></i>
        </div>
      </div>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="fa fa-4x fa-asterisk fa-spin text-info"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-3x fa-asterisk fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-2x fa-asterisk fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-asterisk fa-spin"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- END Loading Icons -->

  <!-- Bootstrap Spinners -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Bootstrap Spinners
      </h3>
    </div>
    <div class="block-content">
      <div class="row items-push">
        <div class="col-md-6">
          <div class="spinner-border spinner-border-sm text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-dark" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="spinner-grow spinner-grow-sm text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-dark" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-dark" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Bootstrap Spinners -->
  <!-- END Progress Spinners -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_ui_progress.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
