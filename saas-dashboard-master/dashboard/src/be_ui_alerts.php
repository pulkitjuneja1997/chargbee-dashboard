<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Alerts -->
  <h2 class="content-heading">Alerts</h2>

  <!-- Simple -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Simple</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-md-6">
          <!-- Primary Alert -->
          <div class="alert alert-primary" role="alert">
            <p class="mb-0">
              This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Primary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Secondary Alert -->
          <div class="alert alert-secondary" role="alert">
            <p class="mb-0">
              This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Secondary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Success Alert -->
          <div class="alert alert-success" role="alert">
            <p class="mb-0">
              This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Success Alert -->
        </div>
        <div class="col-md-6">
          <!-- Info Alert -->
          <div class="alert alert-info" role="alert">
            <p class="mb-0">
              This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Info Alert -->
        </div>
        <div class="col-md-6">
          <!-- Warning Alert -->
          <div class="alert alert-warning" role="alert">
            <p class="mb-0">
              This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Warning Alert -->
        </div>
        <div class="col-md-6">
          <!-- Danger Alert -->
          <div class="alert alert-danger" role="alert">
            <p class="mb-0">
              This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Danger Alert -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Simple -->

  <!-- With Icons -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">With Icons</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-md-6">
          <!-- Primary Alert -->
          <div class="alert alert-primary d-flex align-items-center" role="alert">
            <i class="fa fa-fw fa-book me-2"></i>
            <p class="mb-0">
              This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Primary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Secondary Alert -->
          <div class="alert alert-secondary d-flex align-items-center justify-content-between" role="alert">
            <p class="mb-0">
              This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <i class="fa fa-fw fa-arrow-left ms-2"></i>
          </div>
          <!-- END Secondary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Success Alert -->
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="fa fa-fw fa-check me-2"></i>
            <p class="mb-0">
              This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Success Alert -->
        </div>
        <div class="col-md-6">
          <!-- Info Alert -->
          <div class="alert alert-info d-flex align-items-center justify-content-between" role="alert">
            <p class="mb-0">
              This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <i class="fa fa-fw fa-info ms-2"></i>
          </div>
          <!-- END Info Alert -->
        </div>
        <div class="col-md-6">
          <!-- Warning Alert -->
          <div class="alert alert-warning d-flex align-items-center" role="alert">
            <i class="fa fa-fw fa-exclamation-triangle me-2"></i>
            <p class="mb-0">
              This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Warning Alert -->
        </div>
        <div class="col-md-6">
          <!-- Danger Alert -->
          <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
            <p class="mb-0">
              This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <i class="fa fa-fw fa-times ms-2"></i>
          </div>
          <!-- END Danger Alert -->
        </div>
      </div>
    </div>
  </div>
  <!-- END With Icons -->

  <!-- With Close Button -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">With Close Button</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-md-6">
          <!-- Primary Alert -->
          <div class="alert alert-primary alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Primary</h3>
            <p class="mb-0">
              This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Primary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Secondary Alert -->
          <div class="alert alert-secondary alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Secondary</h3>
            <p class="mb-0">
              This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Secondary Alert -->
        </div>
        <div class="col-md-6">
          <!-- Success Alert -->
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Success</h3>
            <p class="mb-0">
              This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Success Alert -->
        </div>
        <div class="col-md-6">
          <!-- Info Alert -->
          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Information</h3>
            <p class="mb-0">
              This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Info Alert -->
        </div>
        <div class="col-md-6">
          <!-- Warning Alert -->
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Warning</h3>
            <p class="mb-0">
              This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Warning Alert -->
        </div>
        <div class="col-md-6">
          <!-- Danger Alert -->
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h3 class="alert-heading fs-5 fw-bold mb-1">Error</h3>
            <p class="mb-0">
              This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
          </div>
          <!-- END Danger Alert -->
        </div>
      </div>
    </div>
  </div>
  <!-- END With Close Button -->
  <!-- END Alerts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
