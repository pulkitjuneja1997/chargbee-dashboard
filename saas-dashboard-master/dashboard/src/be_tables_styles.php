<?php 

  require 'inc/_global/config.php';
  require 'inc/backend/config.php'; 
  require 'inc/_global/views/head_start.php'; 
  require 'inc/_global/views/head_end.php'; 
  require 'inc/_global/views/page_start.php'; 
  require './remote/Ced_Chargebee_Send_HTTP_Request.php';
 
  $curl = new Ced_Chargebee_Send_HTTP_Request();
  $allCustomers = $curl->ced_chargebee_get_all_customers(2);
  $allCustomers = json_decode( $allCustomers, true);

  // echo '<pre>';
  // print_r($allCustomers); die;

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

<div class="cust_head_filters row" id="customers">
  <!-- <form> -->
    <!-- <div class="col"> </div>  -->
    <div class="col-3">
      <select class="form-select" id="cust_head_filters_key">
        <option value="" >--Select--</option>
        <option value="id" >ID</option>
        <option value="first_name" >First Name</option>
        <option value="last_name" >Last Name</option>
        <option value="email" >Email</option>
      </select>
    </div> 
    <div class="col-4" style="position: relative;">
      <i class='fa fa-search'></i>
      <input class="form-control" type="text" id="cust_head_filters_value" placeholder="Enter ID / First Name / Last Name / Email-Id"/>
    </div> 
    <div class="col-2">
      <button class="btn btn-secondary" id="customer_head_filters" >Apply</button>
    </div>
    <div class="col-2">  </div>
  <!-- </form> -->
</div>

<!-- Page Content -->
<div class="content" id="content">
    <button class="test">test</button>

  <!-- Default Table Style -->
  <!-- <h2 class="content-heading">Customers</h2> -->


  <!-- Hover Table -->
  <div class="block block-rounded">


    <div class="block-header block-header-default">
      <div class="row" style="width: 100%;">
        <div class="ced-filter-all-wrapper" id="customers" >
          <!-- <label class="block-title">Customers</label>  -->
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="DataTables_Table_2_length">
                <label>
                  <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select" id="per_page">
                  <?php
                      $per_page_array = array( 10,20,30,50,100 );
                      foreach( $per_page_array as $count ){
                          $selected = '';
                          if( $count == $per_page ){
                            $selected = 'selected';
                          }
                      ?> <option <?php echo $selected; ?> value="<?php echo $count; ?>"><?php echo $count; ?></option> <?php

                      }
                    ?>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div id="DataTables_Table_2_filter" class="dataTables_filter">
                <label><input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_2"></label>
              </div>
            </div>
          </div>
          <!-- <div class="ced_customer_filter_wrapper" >
            <div class="ced-page-dropdown" style="display: inline;">
              <select id="per_page">
                <?php
                  // $per_page_array = array( 10,20,30,50,100 );
                  // foreach( $per_page_array as $count ){
                  //     $selected = '';
                  //     if( $count == $per_page ){
                  //       $selected = 'selected';
                  //     }
                  ?> <option <?php //echo $selected; ?> value="<?php //echo $count; ?>"><?php // echo $count; ?></option> <?php

                 // }
                ?>
              </select>
              <span class="ced-etsy-content">Per page</span>
            </div>

            <div class="tablenav-pages-container">
              <div class="tablenav-pages">
                  <span class="displaying-num"><?php //echo $customersCount; ?></span>
                  <span class="pagination-links">
                    <button> 
                      <span class="tablenav-pages-navspan button start-page ced_table_pagination" disabled="disabled" aria-hidden="true">«</span> 
                    </button> 
                    <button>
                      <span class="tablenav-pages-navspan button previous-page ced_table_pagination" disabled="disabled" aria-hidden="true">‹</span> 
                    </button> 
                      <span class="paging-input">
                          <label for="current-page-selector" class="screen-reader-text">Current Page</label>
                          <input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging">
                          <span class="tablenav-paging-text"> of <span class="total-pages">2</span>
                      </span>
                  </span>
                  <?php
                  $nextPage = $CurrentPageNum + 1;
                  $nextDisabled = $CurrentPageNum == $nextPage || $CurrentPageNum > $nextPage ? 'disabled' : '';
                  $lastDisabled = $CurrentPageNum >= $totalPages ? 'disabled' : '';
                  ?>
                  <button <?php echo $nextDisabled; ?> data-attr="next-page" class="next-page button ced_table_pagination" id="<?php echo $CurrentPageNum + 1; ?>">
                      <span class="screen-reader-text" id="<?php echo $CurrentPageNum + 1; ?>">Next page</span>
                      <span aria-hidden="true">›</span>
                  </button>
                  <button <?php echo $lastDisabled; ?> data-attr="last-page" class="last-page button ced_table_pagination" id="<?php echo $totalPages; ?>">
                      <span class="screen-reader-text" id="<?php echo $totalPages; ?>">Last page</span>
                      <span aria-hidden="true">»</span>
                  </button>
                  </span>
              </div> 
            </div> 
          </div> -->

        </div>
      </div>
      <div class="block-options">
        <div class="block-options-item">
          <code>
            <!-- .table-hover -->
          </code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-hover table-vcenter" id="customer" >
         <thead>
          <tr >
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">E-mail</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Created At</th>
            <th class="text-center" style="width: 100px;">Company</th>
            <th class="text-center" style="width: 100px;">Address</th>
          </tr>
        </thead>
        <tbody class="ced_filter_table_body" >
          <?php 
            if( !empty( $allCustomers['list'] ) ){
              foreach( $allCustomers['list'] as $customer ){

                $cust_id    = isset( $customer['customer']['id'] ) ? $customer['customer']['id'] : '-';
                // $subs_name  = isset( $subscription['subscription']['subscription_items'][0]['item_price_id'] ) ? $subscription['subscription']['subscription_items'][0]['item_price_id'] : '-'; ;
                
                $first_name = isset( $customer['customer']['first_name'] ) ? $customer['customer']['first_name'] : '-';
                $last_name  = isset( $customer['customer']['last_name'] )  ? $customer['customer']['last_name'] : '-';

                $email      = isset( $customer['customer']['email'] ) ? $customer['customer']['email'] : '-';
                $company    = isset( $customer['customer']['company'] ) ? $customer['customer']['company'] : '-';
                // $billing_date = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000; 
                $creation_date = isset( $customer['customer']['created_at'] ) ? $customer['customer']['created_at'] : 0000000000; 
                
                $line1 = isset( $customer['customer']['billing_address']['line1'] ) ? $customer['customer']['billing_address']['line1'] : '-';
                $line2 = isset( $customer['customer']['billing_address']['line2'] ) ? $customer['customer']['billing_address']['line2'] : '-';
                $city = isset( $customer['customer']['billing_address']['city'] ) ? $customer['customer']['billing_address']['city'] : '-';
                $zip = isset( $customer['customer']['billing_address']['zip'] ) ? $customer['customer']['billing_address']['zip'] : '-';
                $country = isset( $customer['customer']['billing_address']['country'] ) ? $customer['customer']['billing_address']['country'] : '-';
                $state = isset( $customer['customer']['billing_address']['state'] ) ? $customer['customer']['billing_address']['state'] : '-';
            
                ?>
                <tr class="customer_table" id="<?php echo $cust_id; ?>" data-toggle="layout" data-action="side_overlay_toggle">
                  <th >
                    <p><?php echo $first_name . ' ' . $last_name; ?> </p>
                    <p><?php echo $email; ?> </p>
                  </th>
                  <th class="text-center" scope="row">
                    <p><?php  echo ''; ?></p>
                    <p><?php echo ''; ?></p>
                  </th>
                  <td ><?php echo gmdate( 'Y-m-d', $creation_date ); ?></td> 
                  <td><?php  echo $company; ?></td>
                  <td ><?php echo $line1 . ' ' . $line2 . ' '. $city . ' '. $zip. ' ' . $country . ' ' . $state; ?></td> 
                  
                </tr>
                <?php 
              }
            } 
          
          ?>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Page <strong>1</strong> of <strong>3</strong></div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_2_paginate">
          <ul class="pagination">
            <li class="paginate_button page-item first disabled" id="DataTables_Table_2_first">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link">
                <i class="fa fa-angle-double-left"></i>
              </a>
            </li>
            <li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">
                <i class="fa fa-angle-left"></i>
              </a>
            </li>
            <li class="paginate_button page-item active">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link">1</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" class="page-link">2</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="4" tabindex="0" class="page-link">3</a>
            </li>
            <li class="paginate_button page-item next" id="DataTables_Table_2_next">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="paginate_button page-item last" id="DataTables_Table_2_last">
              <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="6" tabindex="0" class="page-link">
                <i class="fa fa-angle-double-right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      </div>
  </div>
  <!-- END Hover Table -->


  <!-- END Default Table Style -->


    <!-- Fade In Modal -->
    <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm mail-body">
              <div class="mb-4">
                <label class="form-label" for="example-text-input">Subject</label>
                <input type="text" class="form-control mail-subject" id="example-text-input" name="example-text-input" placeholder="Mail Subject">
              </div>
              <div class="mb-4">
                <label class="form-label" for="example-textarea-input">Content</label>
                <textarea class="form-control mail-content" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Mail content.."></textarea>
              </div>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary send-email" >
              Send
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Fade In Modal -->

</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>


<?php $cb->get_js('js/pages/jquery-3.6.0.min.js'); ?>
<?php $cb->get_js('js/customDashboard.js'); ?>
<?php $cb->get_css('css/customDashboard.css'); ?>