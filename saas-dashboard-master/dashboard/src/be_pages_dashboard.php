<?php 
  require 'inc/_global/config.php'; 
  require 'inc/backend/config.php'; 
  require 'inc/_global/views/head_start.php'; 
  require 'inc/_global/views/head_end.php'; 
  require 'inc/_global/views/page_start.php'; 
  require './remote/Ced_Chargebee_Send_HTTP_Request.php';

  $curl = new Ced_Chargebee_Send_HTTP_Request();
  $activeSubscriptions = $curl->ced_chargebee_get_all_subscription( '', 'active');
  $activeSubscriptions = json_decode( $activeSubscriptions, true);

  if( !empty($activeSubscriptions['list']) ){
    $activeSubscriptionsCount = count($activeSubscriptions['list']);
  } else{
    $activeSubscriptionsCount = 0;
  }

  $cancelledSubscriptions = $curl->ced_chargebee_get_all_subscription( '', 'cancelled');
  $cancelledSubscriptions = json_decode( $cancelledSubscriptions, true);

  if( !empty($cancelledSubscriptions['list']) ){
    $cancelledSubscriptions = count($cancelledSubscriptions['list']);
  } else{
    $cancelledSubscriptionsCount = 0;
  }

  $freeSubscriptions = $curl->ced_chargebee_get_all_subscription( '', 'in_trial');
  $freeSubscriptions = json_decode( $freeSubscriptions, true );

  if( !empty($freeSubscriptions['list']) ){
    $freeSubscriptionsCount = count($freeSubscriptions['list']);
  } else{
    $freeSubscriptionsCount = 0;
  }


  $allCustomers      = $curl->ced_chargebee_get_all_customers();
  $allCustomers      = json_decode( $allCustomers, true);

  if( !empty($allCustomers['list']) ){
      $allCustomersCount = count($allCustomers['list']);
  } else{
      $allCustomersCount = 0;
  }

  //  print_r($allCustomersCount);
  //  print_r($allSubscriptionsCount); die;

?>


<div class="dashboard_head_filters row">
  <!-- <form> -->
    <!-- <div class="col"> </div>  -->
    <div class="col-4" style="display: flex;" >
      <label class="dashboard_filter_label" >Start Date</label>
      <input id="startDate" class="form-control" type="date" />
    </div> 
    <div class="col-4" style=" display: flex;">
      <label class="dashboard_filter_label">End Date</label>
      <input id="endDate" class="form-control" type="date" />
    </div> 
    <div class="col-2">
      <button class="btn btn-secondary" id="dashboard_date_filters" >Apply</button>
    </div>
    <div class="col-2">  </div>
  <!-- </form> -->
</div>


<!-- Page Content --> 
<div class="content">
<button class="test">test</button>
  <div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold"><?php echo $freeSubscriptionsCount; ?></div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Free Trial</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-wallet fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold"><?php echo $allCustomersCount; ?></div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Customers</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-envelope-open fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold"><?php echo $activeSubscriptionsCount; ?></div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Subscriptions</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-users fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold"><?php echo $cancelledSubscriptionsCount; ?></div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Exp. Subs.</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>

  <div class="row">
    <!-- Row #2 -->
    <div class="col-12 freeToPaidGraph" >
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">
            Conversion <small>Free trial to Paid </small>
          </h3>
          <select class="form-select" id="conversion_filter">
            <option value="month">Month</option>
            <option value="week">Week</option>
            <option value="day">Day</option>
            <option value="year">Year</option>
          <select>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content p-1 bg-body-light">
          <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-dashboard-lines"></canvas>
        </div>
        <!-- <div class="block-content">
          <div class="row items-push">
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
              <div class="fs-4 fw-semibold">720</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +16%
              </div>
            </div>
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
              <div class="fs-4 fw-semibold">160</div>
              <div class="fw-semibold text-danger">
                <i class="fa fa-caret-down"></i> -3%
              </div>
            </div>
            <div class="col-12 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Average</div>
              <div class="fs-4 fw-semibold">24.3</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +9%
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
   
    <!-- END Row #2 -->
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
<?php $cb->get_js('js/pages/jquery-3.6.0.min.js'); ?>
<?php $cb->get_js('js/customDashboard.js'); ?>
<?php $cb->get_css('css/customDashboard.css'); ?>
