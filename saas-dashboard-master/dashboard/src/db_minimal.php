<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/minimal/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header -->
<div class="bg-body-extra-light">
  <div class="content content-full">
    <div class="pt-5 pb-4 text-center">
      <h1 class="fw-light mb-2">Dashboard</h1>
      <h2 class="h4 text-muted fw-light mb-0">Welcome <span class="fw-semibold">Admin</span>, everything looks good.</h2>
    </div>
  </div>
</div>
<!-- END Header -->

<!-- Page Content -->
<div class="content">
  <!-- Mini Stats -->
  <div class="row">
    <div class="col-6 col-xl-3">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">869</div>
            <div class="fs-sm fw-semibold text-primary-light">Sales</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">$1,360</div>
            <div class="fs-sm fw-semibold text-primary-light">Earnings</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">$15,500</div>
            <div class="fs-sm fw-semibold text-primary-light">Total</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">$19,600</div>
            <div class="fs-sm fw-semibold text-primary-light">Estimated</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Mini Stats -->

  <!-- Charts -->
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title fw-semibold">Sales</h3>
        </div>
        <div class="block-content">
          <div class="pull">
            <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _js/pages/db_minimal.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-minimal-lines"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title fw-semibold">Earnings</h3>
        </div>
        <div class="block-content">
          <div class="pull">
            <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _js/pages/db_minimal.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-minimal-lines2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Charts -->

  <!-- Progress -->
  <div class="row">
    <div class="col-md-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fa-coffee fa-3x"></i>
            </div>
            <div class="fs-4 fw-semibold">Pro Plan</div>
            <div class="text-muted">Active plan.</div>
            <div class="pt-3">
              <a class="btn btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-arrow-up opacity-50 me-1"></i> Upgrade to VIP
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fab fa-twitter fa-3x"></i>
            </div>
            <div class="fs-4 fw-semibold">+107 followers</div>
            <div class="text-muted">Awesome!</div>
            <div class="pt-3">
              <a class="btn btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-link opacity-50 me-1"></i> Check them out
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fa-envelope-open fa-3x"></i>
            </div>
            <div class="fs-4 fw-semibold">10,000 Subscribers</div>
            <div class="text-muted">Keep it up!</div>
            <div class="pt-3">
              <a class="btn btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-cog opacity-50 me-1"></i> Manage list
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Progress -->

  <!-- More Data -->
  <div class="row">
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <i class="si si-graph fa-2x opacity-25"></i>
          <div class="row pt-2 pb-4 text-center">
            <div class="col-6 border-end">
              <div class="fs-3 fw-semibold">5</div>
              <div class="fw-semibold text-primary-light">Plans</div>
            </div>
            <div class="col-6">
              <div class="fs-3 fw-semibold">17,890</div>
              <div class="fw-semibold text-primary-light">Subscriptions</div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="text-end">
            <i class="si si-wallet fa-2x opacity-25"></i>
          </div>
          <div class="row pt-2 pb-4 text-center fw-semibold">
            <div class="col-6 border-end">
              <div class="fs-3">$1,360</div>
              <div class="fs-sm text-primary-light">Today</div>
            </div>
            <div class="col-6">
              <div class="fs-3">$5,680</div>
              <div class="fs-sm text-primary-light">Last Week</div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END More Data -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_minimal.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>