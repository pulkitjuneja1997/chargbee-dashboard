<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_dark = true;
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-top content-full text-center">
      <div class="py-3">
        <h1 class="h2 fw-bold text-white mb-2">e-Commerce Dashboard</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">Welcome Admin, you have <a class="text-primary-light link-fx" href="be_pages_ecom_orders.php">12 pending orders</a>.</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-bottom">
  <div class="content py-1 text-center">
    <nav class="breadcrumb bg-body-light py-2 mb-0">
      <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>
  </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
  <!-- Statistics -->
  <div class="content-heading d-flex justify-content-between align-items-center">
    <span>
      Statistics <small class="d-none d-sm-inline">Awesome!</small>
    </span>
    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-dashboard-stats-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Today</span>
        <i class="fa fa-angle-down ms-1 opacity-50"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-dashboard-stats-drop">
        <a class="dropdown-item active" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> Today
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Earnings -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-chart-area text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">$2420</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Earnings</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Earnings -->

    <!-- Orders -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-dusk" href="be_pages_ecom_orders.php">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-archive text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">35</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Orders</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Orders -->

    <!-- New Customers -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-users text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">15</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">New Customers</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END New Customers -->

    <!-- Conversion Rate -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-cart-arrow-down text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">5.6%</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Conversion</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Conversion Rate -->
  </div>
  <!-- END Statistics -->

  <!-- Orders Overview -->
  <div class="content-heading d-flex justify-content-between align-items-center">
    <span>
      Orders <small class="d-none d-sm-inline">Overview</small>
    </span>
    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-overview-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>This week</span>
        <i class="fa fa-angle-down ms-1 opacity-50"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-overview-drop">
        <a class="dropdown-item active" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
        </a>
      </div>
    </div>
  </div>

  <!-- Chart.js Chart functionality is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js -->
  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
  <div class="row">
    <!-- Orders Earnings Chart -->
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-refresh">
        <div class="block-header">
          <h3 class="block-title">
            Earnings
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
        <div class="block-content block-content-full bg-body-light text-center">
          <div class="row g-sm">
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">All</div>
              <div class="fs-3 fw-semibold">$9,587</div>
            </div>
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Profit</div>
              <div class="fs-3 fw-semibold text-success">$8,087</div>
            </div>
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Expenses</div>
              <div class="fs-3 fw-semibold text-danger">$1,500</div>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="pull">
            <!-- Earnings Chart Container -->
            <canvas id="js-chartjs-ecom-dashboard-earnings"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- END Orders Earnings Chart -->

    <!-- Orders Volume Chart -->
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-refresh">
        <div class="block-header">
          <h3 class="block-title">
            Volume
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
        <div class="block-content block-content-full bg-body-light text-center">
          <div class="row g-sm">
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">All</div>
              <div class="fs-3 fw-semibold">183</div>
            </div>
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Completed</div>
              <div class="fs-3 fw-semibold text-success">175</div>
            </div>
            <div class="col-4">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Canceled</div>
              <div class="fs-3 fw-semibold text-danger">8</div>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="pull">
            <!-- Orders Chart Container -->
            <canvas id="js-chartjs-ecom-dashboard-orders"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- END Orders Volume Chart -->
  </div>
  <!-- END Orders Overview -->

  <!-- Latest Orders and Top Products -->
  <div class="row">
    <!-- Latest Orders -->
    <div class="col-xl-6">
      <h2 class="content-heading">Latest Orders</h2>
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <table class="table table-borderless table-striped mb-0">
            <thead>
              <tr>
                <th style="width: 100px;">ID</th>
                <th>Status</th>
                <th class="d-none d-sm-table-cell">Customer</th>
                <th class="d-none d-sm-table-cell text-end">Value</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 1; $i < 11; $i++) { ?>
                <tr>
                  <td>
                    <a class="fw-semibold" href="be_pages_ecom_order.php">ORD.<?php echo 1852 - $i; ?></a>
                  </td>
                  <td>
                    <?php $cb->get_tag(true, true); ?>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <a href="be_pages_ecom_customer.php"><?php $cb->get_name(); ?></a>
                  </td>
                  <td class="d-none d-sm-table-cell text-end">$<?php echo rand(100, 999); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- END Latest Orders -->

    <!-- Top Products -->
    <div class="col-xl-6">
      <h2 class="content-heading">Top Products</h2>
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <table class="table table-borderless table-striped mb-0">
            <thead>
              <tr>
                <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                <th>Product</th>
                <th class="text-center">Orders</th>
                <th class="d-none d-sm-table-cell text-center">Rating</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.258</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Dark Souls III</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">912</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.198</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Bioshock Collection</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">895</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.852</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Alien Isolation</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">820</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.741</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Bloodborne</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">793</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.985</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Forza Motorsport 7</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">782</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.056</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Fifa 18</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">776</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.036</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Gears of War 4</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">680</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.682</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Minecraft</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">670</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.478</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Dishonored 2</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">640</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.952</a>
                </td>
                <td>
                  <a href="be_pages_ecom_product_edit.php">Gran Turismo Sport</a>
                </td>
                <td class="text-center">
                  <a class="text-gray-dark" href="be_pages_ecom_orders.php">630</a>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- END Top Products -->
  </div>
  <!-- END Latest Orders and Top Products -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_ecom_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>