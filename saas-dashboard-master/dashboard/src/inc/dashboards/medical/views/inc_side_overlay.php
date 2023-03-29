<?php
/**
 * dashboards/medical/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>

<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="content-header">
    <!-- User Avatar -->
    <a class="img-link me-2" href="be_pages_generic_profile.php">
      <?php $cb->get_avatar(1, '', 32); ?>
    </a>
    <!-- END User Avatar -->

    <!-- User Info -->
    <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.php">
      Dr. Stone
    </a>
    <!-- END User Info -->

    <!-- Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
      <i class="fa fa-fw fa-times"></i>
    </button>
    <!-- END Close Side Overlay -->
  </div>
  <!-- END Side Header -->

  <!-- Emergency Notification -->
  <div class="content-side content-side-full bg-danger-light text-center">
    <i class="fa fa-exclamation-triangle fa-2x text-danger animated swing infinite"></i>
    <p class="fs-5 fw-bold text-danger mt-2 mb-0">
      There is an emergency, please proceed to surgery immediately!
    </p>
  </div>
  <!-- END Emergency Notification -->

  <!-- Side Content -->
  <div class="content-side">
    <!-- Mini Stats -->
    <div class="block pull-x">
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <div class="row text-center">
          <div class="col-6">
            <div class="fs-sm fw-semibold text-uppercase text-muted">Patients</div>
            <a class="link-fx fw-semibold fs-4" href="javascript:void(0)">5</a>
          </div>
          <div class="col-6">
            <div class="fs-sm fw-semibold text-uppercase text-muted">Appointments</div>
            <a class="link-fx fw-semibold fs-4" href="javascript:void(0)">6</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Mini Stats -->

    <!-- Notifications -->
    <div class="block pull-x">
      <div class="block-header bg-body-light">
        <h3 class="block-title">Recent Notifications</h3>
        <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
        </div>
      </div>
      <div class="block-content block-content-full">
        <ul class="list list-activity">
          <li>
            <i class="fa fa-exclamation-triangle text-danger"></i>
            <div class="fs-sm fw-semibold">There is an emergency!</div>
            <div class="fs-sm">
              <a class="fw-semibold text-danger" href="javascript:void(0)">Event Details</a>
            </div>
            <div class="fs-xs text-muted">just now</div>
          </li>
          <li>
            <i class="fa fa-check text-success"></i>
            <div class="fs-sm fw-semibold">New patient was added successfully</div>
            <div class="fs-sm">
              <a class="fw-semibold text-success" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
            </div>
            <div class="fs-xs text-muted">15 min ago</div>
          </li>
          <li>
            <i class="fa fa-pencil-alt text-info"></i>
            <div class="fs-sm fw-semibold">You edited a file</div>
            <div class="fs-sm">
              <a class="fw-semibold text-info" href="javascript:void(0)">
                <i class="fa fa-file-alt"></i> Prescription#2.doc
              </a>
            </div>
            <div class="fs-xs text-muted">1 day ago</div>
          </li>
          <li>
            <i class="fab fa-paypal text-primary"></i>
            <div class="fs-sm fw-semibold">New payment received!</div>
            <div class="fs-sm">
              From <a class="fw-semibold" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
            </div>
            <div class="fs-xs text-muted">1 day ago</div>
          </li>
          <li>
            <i class="fa fa-check text-success"></i>
            <div class="fs-sm fw-semibold">New appointment was scheduled successfully</div>
            <div class="fs-sm">
              Tomorrow with <a class="fw-semibold text-success" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
            </div>
            <div class="fs-xs text-muted">2 days ago</div>
          </li>
        </ul>
        <a class="btn btn-alt-secondary w-100 mb-1" href="javascript:void(0)">
          Load more..
        </a>
        <a class="btn btn-alt-primary w-100" href="javascript:void(0)">
          <i class="fa fa-flag opacity-50 me-1"></i>
          View All Notifications
        </a>
      </div>
    </div>
    <!-- END Notifications -->
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
