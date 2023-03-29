<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<div class="bg-body-light">
  <div class="row g-0 justify-content-center">
    <div class="hero-static col-lg-7">
      <div class="content content-full overflow-hidden">
        <!-- Header -->
        <div class="py-5 text-center">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
          </a>
          <h1 class="h2 fw-bold mt-5 mb-2">Status Page</h1>
          <h2 class="fs-base fw-medium text-muted mb-0">Check out the current status of our services</h2>
        </div>
        <!-- END Header -->

        <!-- Status -->
        <div class="row g-0 d-flex justify-content-center">
          <div class="col-md-10 col-xl-7">
            <div class="d-flex justify-content-between">
              <a class="btn btn-alt-primary" href="be_pages_dashboard.php">
                <i class="fa fa-fw fa-arrow-left opacity-50 me-1"></i> Dashboard
              </a>
              <a class="btn btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-fw fa-rss opacity-50"></i> <span class="d-none d-sm-inline-block ms-1">Subscribe</span>
              </a>
            </div>
            <hr>
            <div class="alert alert-warning d-flex align-items-center justify-content-between mb-3" role="alert">
              <div class="flex-fill me-2">
                <p class="mb-0">API is currently under maintenance. Please stand by for a while as we are working on it.</p>
              </div>
              <div class="flex-shrink-0">
                <i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>
              </div>
            </div>
            <div class="alert alert-danger d-flex align-items-center justify-content-between mb-3" role="alert">
              <div class="flex-fill me-2">
                <p class="mb-0">Helpdesk service is experiencing some issues but our ninja developers are on it and should be back shortly!</p>
              </div>
              <div class="flex-shrink-0">
                <i class="fa fa-fw fa-2x fa-bug"></i>
              </div>
            </div>
            <ul class="list-group push">
              <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                Backend
                <span class="badge rounded-pill bg-success">Operational</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                Frontend
                <span class="badge rounded-pill bg-success">Operational</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                API
                <span class="badge rounded-pill bg-warning">Maintenance</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                Payments
                <span class="badge rounded-pill bg-success">Operational</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                Helpdesk
                <span class="badge rounded-pill bg-danger">Down</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- END Status -->
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>