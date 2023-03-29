<?php 

 require 'inc/_global/config.php'; 
 require 'inc/backend/config.php'; 
 require 'inc/_global/views/head_start.php'; 
 require 'inc/_global/views/head_end.php'; 
 require 'inc/_global/views/page_start.php'; 
 require './remote/Ced_Chargebee_Send_HTTP_Request.php';
 
 $curl = new Ced_Chargebee_Send_HTTP_Request();
 $per_page = 1; 
 $allSubscriptions = $curl->ced_chargebee_get_all_subscription($per_page);
 $allSubscriptions = json_decode( $allSubscriptions, true);
 
  // echo '<pre>'; 
  // print_r($allSubscriptions); 

  $previousOffset = '';
  $nextOffset     = isset( $allSubscriptions['next_offset'] ) ? $allSubscriptions['next_offset'] : 0;
  // $nextOffset     = json_encode($nextOffset); 

  // print_r($offset); die('opp');
?> 

<div class="subs_head_filters row" id="subscriptions">
  <!-- <form> -->
    <!-- <div class="col"> </div>  -->
    <div class="col-3">
      <select class="form-select" id="marketplace">
        <option value="" >--Select--</option>
        <option value="web" >Web</option>
        <option value="bigcommerce" >Bigcommerce</option>
        <option value="magento" >Magento</option>
        <option value="ebay" >Ebay</option>
      </select>
    </div> 

    <div class="col-4" style="position: relative;">
      <i class="fa fa-search"></i>
      <input class="form-control" type="text" id="customer_id" placeholder="Enter Customer ID">
    </div>
    
    <div class="col-2">
      <button id="subscription_head_filters" class="btn btn-secondary" >Apply</button>
    </div>
    <div class="col-3">  </div>
    <div class="col-2">  </div>
  <!-- </form> -->
</div>

<!-- Page Content -->
<div class="content" id="content">

  <!-- Default Table Style -->
  <h2 class="content-heading">Subscriptions</h2>

  <!-- Hover Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Subscriptions</h3>
      <div class="ced_customer_filter_wrapper" >
            <div class="ced-page-dropdown" style="display: inline;">
              <select id="per_page">
                <?php
                  $per_page_array = array( 1, 2, 10,20,30,50,100 );
                  foreach( $per_page_array as $count ){
                      $selected = '';
                      if( $count == $per_page ){
                        $selected = 'selected';
                      }
                  ?> <option <?php echo $selected; ?> value="<?php echo $count; ?>"><?php echo $count; ?></option> <?php

                  }
                ?>
              </select>
              <span class="ced-etsy-content">Per page</span>
            </div>

            <div class="tablenav-pages-container">
              <div class="tablenav-pages">
                <?php
                  $nextDisabled     = isset( $nextOffset )  ?  '' : 'disabled';
                  $previousDisabled = isset($previousOffset) ? '' : 'disabled';
                  ?>
                  <button <?php echo $previousDisabled; ?> data-attr="previous-page" class="button ced_table_pagination previous-page" id = "<?php echo $previousOffset; ?>">
                    <span aria-hidden="true">Previous›</span>
                  </button>
                  
                  <button <?php echo $nextDisabled; ?> data-attr="next-page" class="button ced_table_pagination next-page" id = <?php echo $nextOffset; ?>>
                      <span aria-hidden="true">Next »</span>
                  </button>
                  </span>
              </div> 
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
      <table class="table table-hover table-vcenter" id="subscription">
        <thead>
          <tr >
            <th class="text-center" style="width: 50px;">Subscription Info</th>
            <th>Customer Info</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Next Renewal </th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Created On </th>
            <th class="text-center" style="width: 100px;">Company </th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if( !empty( $allSubscriptions['list'] ) ){
              foreach( $allSubscriptions['list'] as $subscription ){

                $subs_id    = isset( $subscription['subscription']['id'] ) ? $subscription['subscription']['id'] : '-';
                $subs_name  = isset( $subscription['subscription']['subscription_items'][0]['item_price_id'] ) ? $subscription['subscription']['subscription_items'][0]['item_price_id'] : '-'; ;
                
                $first_name = isset( $subscription['customer']['first_name'] ) ? $subscription['customer']['first_name'] : '-';
                $last_name  = isset( $subscription['customer']['last_name'] )  ? $subscription['customer']['last_name'] : '-';

                $email      = isset( $subscription['customer']['email'] ) ? $subscription['customer']['email'] : '-';
                $company    = isset( $subscription['customer']['company'] ) ? $subscription['customer']['company'] : '-';
                $billing_date = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000; 
                $creation_date = isset( $subscription['subscription']['created_at'] ) ? $subscription['subscription']['created_at'] : 0000000000; 
                
                ?>
                <tr class="customer_table" id="<?php echo $subs_id; ?>" data-toggle="layout" data-action="side_overlay_toggle">
                  <th class="text-center" scope="row">
                    <p><?php  echo $subs_name; ?></p>
                    <p><?php echo $subs_id; ?></p>
                  </th>
                  <td >
                    <p><?php echo $first_name . ' ' . $last_name; ?> </p>
                    <p><?php echo $email; ?> </p>
                  </td>
                  <td ><?php echo gmdate( 'Y-m-d', $billing_date ); ?></td> 
                  <td ><?php echo gmdate( 'Y-m-d', $creation_date ); ?></td> 
                  <td><?php  echo $company; ?></td>
                  
                </tr>
              <?php 
              } 
            }
          ?>
        </tbody>
      </table>
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

