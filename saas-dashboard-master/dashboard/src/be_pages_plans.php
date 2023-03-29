<?php 

  require 'inc/_global/config.php';
  require 'inc/backend/config.php'; 
  require 'inc/_global/views/head_start.php'; 
  require 'inc/_global/views/head_end.php'; 
  require 'inc/_global/views/page_start.php'; 

  $per_page = 10; 
  $customersCount = 100;
  $CurrentPageNum = 1;
  $totalPages = $customersCount / $per_page;

  if( is_float( $totalPages ) ){
      $totalPages = intval( $totalPages ) + 1;
  } else{
      $totalPages = intval( $totalPages );
  }
  
 
?> 

<!-- Page Content -->
<div class="content" id="content">

  <!-- Default Table Style -->
  <!-- <h2 class="content-heading">CreatePlan</h2> -->
    <form class="needs-validation" novalidate>
        <!-- <div class="modal fade show" id="modal-fadein" tabindex="-1" style="display: block; padding-left: 0px;"> -->
            <div class="modal-dialog plan-form" role="document">
                <div class="modal-content">
                    <div class="block block-rounded shadow-none mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Create Plan</h3>
                        </div>
                        <div class="block-content fs-sm">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Name</label>
                                <input type="text" required class="form-control" id="example-text-input" name="name" placeholder="Enter Plan Name">
                            </div>

                            <div class="row">
                                <div class="col-6 mb-4">
                                    <label class="form-label" for="example-text-input">Period</label>
                                    <input type="text" required class="form-control" id="example-text-input" name="period" placeholder="Enter Plan Name">
                                </div>

                                <div class="col-6 mb-4">
                                    <label class="form-label" for="example-text-input">Period Unit</label>
                                    <select class="form-select" required id="example-select" name="period_unit">
                                        <option value="">--Select--</option>
                                        <option value="day">Day</option>
                                        <option value="week">Week</option>
                                        <option value="month">Month</option>
                                        <option value="year">Year</option>
                                    </select>
                                </div>
                            </div>    

                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Price</label>
                                <input type="number" required class="form-control" id="example-text-input" name="price" placeholder="Enter Plan Price">
                            </div>

                        </div>
                        <div class="block-content block-content-full block-content-sm text-end">
                            <button type="button" class="btn btn-alt-secondary" id="preparePlan" >
                              Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </form>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>


<?php $cb->get_js('js/pages/jquery-3.6.0.min.js'); ?>
<?php $cb->get_js('js/customDashboard.js'); ?>
<?php $cb->get_css('css/customDashboard.css'); ?>