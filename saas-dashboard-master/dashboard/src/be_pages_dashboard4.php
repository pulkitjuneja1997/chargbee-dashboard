<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'dark-glass';
$cb->l_sidebar_dark = true;
$cb->l_sidebar_mini = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-primary-dark-op">
    <div class="content content-top text-center overflow-hidden">
      <div class="pt-5 pb-3">
        <h1 class="fw-bold text-white mb-2">
          Dashboard
        </h1>
        <h2 class="h4 fw-medium text-white-75">
          Welcome to your custom panel
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
          <div class="d-none d-sm-block">
            <i class="si si-bar-chart fa-2x text-primary-light"></i>
          </div>
          <div class="text-end">
            <div class="fs-3 fw-semibold">8900</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
          <div class="d-none d-sm-block">
            <i class="si si-trophy fa-2x text-earth-light"></i>
          </div>
          <div class="text-end">
            <div class="fs-3 fw-semibold">$2600</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
          <div class="d-none d-sm-block">
            <i class="si si-envelope-letter fa-2x text-elegance-light"></i>
          </div>
          <div class="text-end">
            <div class="fs-3 fw-semibold">260</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Messages</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
          <div class="d-none d-sm-block">
            <i class="si si-fire fa-2x text-corporate-light"></i>
          </div>
          <div class="text-end">
            <div class="fs-3 fw-semibold">4252</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Sales <small>This week</small>
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="pull pt-4">
            <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-dashboard-lines"></canvas>
          </div>
        </div>
        <div class="block-content">
          <div class="row items-push text-center">
            <div class="col-12 col-sm-4">
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +6%
              </div>
              <div class="fs-4 fw-semibold">35.2</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Average</div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +14%
              </div>
              <div class="fs-4 fw-semibold">960</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="fw-semibold text-danger">
                <i class="fa fa-caret-down"></i> -1%
              </div>
              <div class="fs-4 fw-semibold">263</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Earnings <small>This week</small>
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="pull pt-4">
            <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-dashboard-lines2"></canvas>
          </div>
        </div>
        <div class="block-content bg-body-extra-light">
          <div class="row items-push text-center">
            <div class="col-6 col-sm-4">
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +8%
              </div>
              <div class="fs-4 fw-semibold">$ 8,200</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="fw-semibold text-danger">
                <i class="fa fa-caret-down"></i> -9%
              </div>
              <div class="fs-4 fw-semibold">$ 1,318</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +39%
              </div>
              <div class="fs-4 fw-semibold">$ 4,850</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Balance</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Row #2 -->
  </div>
  <div class="row">
    <!-- Row #3 -->
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <i class="si si-game-controller fa-2x text-body-bg-dark"></i>
          <div class="row pt-2 pb-4 text-center">
            <div class="col-6 border-end">
              <div class="fs-3 fw-semibold">190</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Games</div>
            </div>
            <div class="col-6">
              <div class="fs-3 fw-semibold">870</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Subscriptions</div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="text-end">
            <i class="si si-wallet fa-2x text-body-bg-dark"></i>
          </div>
          <div class="row pt-2 pb-4 text-center">
            <div class="col-6 border-end">
              <div class="fs-3 fw-semibold">$840</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Today</div>
            </div>
            <div class="col-6">
              <div class="fs-3 fw-semibold">$4,490</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Last Week</div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #3 -->
  </div>
  <div class="row">
    <!-- Row #4 -->
    <div class="col-md-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="si si-earphones fa-2x text-success"></i>
            </div>
            <div class="fs-4 fw-semibold">4.8k Songs</div>
            <div class="text-muted">Your library is growing!</div>
            <div class="pt-3">
              <a class="btn btn-alt-success" href="javascript:void(0)">
                <i class="fa fa-shopping-bag opacity-50 me-1"></i> Get more
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
              <i class="si si-diamond fa-2x text-warning"></i>
            </div>
            <div class="fs-4 fw-semibold">7580 Points</div>
            <div class="text-muted">Nice, you are doing great!</div>
            <div class="pt-3">
              <a class="btn btn-alt-warning" href="javascript:void(0)">
                <i class="fa fa-check opacity-50 me-1"></i> Redeem them now
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
              <i class="si si-grid fa-2x text-info"></i>
            </div>
            <div class="fs-4 fw-semibold">2 Grid Servers</div>
            <div class="text-muted">Currently active.</div>
            <div class="pt-3">
              <a class="btn btn-alt-info" href="javascript:void(0)">
                <i class="fa fa-plus opacity-50 me-1"></i> Add More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Row #4 -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>