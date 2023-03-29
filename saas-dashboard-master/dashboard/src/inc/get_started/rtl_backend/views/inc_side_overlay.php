<?php
/**
 * get_started/rtl_backend/views/inc_side_overlay.php
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
    <a class="img-link ms-2" href="be_pages_generic_profile.php">
      <?php $cb->get_avatar(15, '', 32); ?>
    </a>
    <!-- END User Avatar -->

    <!-- User Info -->
    <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.php">
      Admin
    </a>
    <!-- END User Info -->

    <!-- Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <button type="button" class="btn btn-sm btn-alt-danger me-auto" data-toggle="layout" data-action="side_overlay_close">
      <i class="fa fa-fw fa-times"></i>
    </button>
    <!-- END Close Side Overlay -->
  </div>
  <!-- END Side Header -->

  <!-- Side Content -->
  <div class="content-side">
    <!-- Search -->
    <div class="block pull-t pull-x">
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <form>
          <div class="input-group">
            <button type="submit" class="btn rounded-0 btn-secondary px-2">
              <i class="fa fa-search"></i>
            </button>
            <input type="text" class="form-control rounded-0" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
          </div>
        </form>
      </div>
    </div>
    <!-- END Search -->

    <!-- Mini Stats -->
    <div class="block pull-x">
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <div class="row">
          <div class="col-4">
            <div class="fs-sm fw-semibold text-uppercase text-muted">Stat</div>
            <div class="fs-4">100</div>
          </div>
          <div class="col-4">
            <div class="fs-sm fw-semibold text-uppercase text-muted">Stat</div>
            <div class="fs-4">200</div>
          </div>
          <div class="col-4">
            <div class="fs-sm fw-semibold text-uppercase text-muted">Stat</div>
            <div class="fs-4">300</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Mini Stats -->

    <!-- Block -->
    <div class="block pull-x">
      <div class="block-header bg-body-light">
        <h3 class="block-title">Title</h3>
        <div class="block-options ps-0">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
      </div>
      <div class="block-content">
        <p>Content...</p>
      </div>
    </div>
    <!-- END Block -->
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
