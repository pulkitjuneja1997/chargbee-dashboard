<?php
/**
 * landing/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="space-x-1 d-flex align-items-center space-x-2">
      <!-- Logo -->
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire text-primary"></i>
        <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
      </a>
      <!-- END Logo -->

      <!-- Version -->
      <span class="d-inline-block fs-xs fw-medium bg-primary-dark text-white rounded-pill py-1 px-2"><?php echo $cb->version; ?></span>
      <!-- END Version -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="btn btn-alt-secondary px-3" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
        <i class="fa fa-burn"></i>
      </a>
      <a class="btn btn-alt-primary px-3 d-none d-sm-inline-block" href="be_pages_dashboard.php" target="_blank">
        <i class="fa fa-rocket opacity-50"></i>
        <span class="ms-1 d-none d-sm-inline-block">Live Preview</span>
      </a>
      <a class="btn btn-alt-success px-3" href="https://1.envato.market/95j">
        <i class="fa fa-shopping-bag opacity-50"></i>
        <span class="ms-1 d-none d-sm-inline-block">Purchase</span>
      </a>
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->
</header>
<!-- END Header -->
