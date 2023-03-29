<?php
/**
 * backend/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */


function customerSubscription(){

  require './remote/Ced_Chargebee_Send_HTTP_Request.php';

  $id = isset( $_POST['id'] ) ? $_POST['id'] : 0;

  $curl = new Ced_Chargebee_Send_HTTP_Request();
  $customerSubscriptions = $curl->ced_chargebee_get_one_subscription( '', $id);
  $customerSubscriptions = json_decode( $customerSubscriptions, true );
  $subscriptionsHtml = '';
  // print_r($customerSubscriptions);

  if( ! empty( $customerSubscriptions['list'] ) ){
    foreach( $customerSubscriptions['list'] as $subscription ){
      
      $channel = isset( $subscription['subscription']['channel'] ) ? $subscription['subscription']['channel'] : 'eBay';
      
      $billingDate = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000;
      $readableBillingDate = gmdate("Y-m-d", $billingDate );

      $subscriptionsHtml .= '<li>
                              <div class="subscriptions-list" >
                                <label class="form-check-label" for="example-switch-default1"><b>Channel</b> - ' . $channel .'</label>
                                <label class="form-check-label" for="example-switch-default1">, <b>Renew</b> - ' . $readableBillingDate . '</label>
                              </div>
                            </li>';

    }

  }

  return $subscriptionsHtml;

  
}

$subscriptions_html = customerSubscription();

?> 
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="content-header">
    <!-- User Avatar -->
    <a class="img-link me-2" href="be_pages_generic_profile.php">
      <?php $cb->get_avatar(15, '', 32); ?>
    </a>
    <!-- END User Avatar -->

    <!-- User Info -->
    <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.php">
      <?php echo $cb->customerName; ?>
    </a>
    <!-- END User Info -->

    <!-- Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <button type="button" class="btn btn-sm btn-alt-danger ms-auto remove_sidebar" data-toggle="layout" data-action="side_overlay_close">
      <i class="fa fa-fw fa-times"></i>
    </button>
    <!-- END Close Side Overlay -->
  </div>
  <!-- END Side Header -->

  <!-- Side Content -->
  <div class="content-side">
    
  <?php if( $section == 'customer'){ ?> 
      <div class="block pull-x">
      <div class="block-header bg-body-light">
        <h3 class="block-title">
          <i class="fa fa-fw fa-link opacity-50 me-1"></i> Subscriptions
        </h3>
        <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
      </div>
      <div class="block-content">
        <ul class="nav-users">
          <?php echo $subscriptions_html; ?>
        </ul>
      </div>
    </div>

    <?php
    }
  ?>

    <!-- Operations -->
  <?php if( $section == 'subscription'){ ?> 
    <div class="block pull-x">
      <div class="block-header bg-body-light">
        <h3 class="block-title">
          <i class="fa fa-fw fa-cogs opacity-50 me-1"></i> Operations
        </h3>
        <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
      </div>
      <div class="block-content">
        <ul class="nav-users">
          <li>
            <div class="form-check form-switch" >
              <label class="form-check-label" for="example-switch-default1">Pause </label>
              <input class="form-check-input" type="checkbox" value="" id="pause-subs" attrControlSubs="pause" attrCustomerId="<?php echo $cb->id; ?>" name="example-switch-default1" >
            </div>
          </li>
          <li>
            <div class="form-check form-switch ">
              <label class="form-check-label" for="example-switch-default1">Delete </label>
              <input class="form-check-input" type="checkbox" value="" id="delete-subs" attrControlSubs="delete" attrCustomerId="<?php echo $cb->id; ?>" name="example-switch-default1" >
            </div>
          </li>
        </ul>
      </div>
    </div>
    <button type="button" class="btn btn-outline-primary control-subscription">Save</button>
  <?php
    }
  ?>

    <!-- END Operations -->
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
