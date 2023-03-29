<?php
/**
 * get_started/rtl_landing/views/inc_header.php
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
    <!-- Right Section -->
    <div class="space-x-1">
      <!-- Logo -->
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire text-primary"></i>
        <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Right Section -->

    <!-- Left Section -->
    <div class="d-flex align-items-center space-x-2">
      <!-- Header Navigation -->
      <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
      <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
        <?php $cb->build_nav($cb->main_nav, true); ?>
      </ul>
      <!-- END Header Navigation -->

      <!-- Color Themes (used just for demonstration) -->
      <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-paint-brush"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="page-header-themes-dropdown">
          <h6 class="dropdown-header text-center">Color Themes</h6>
          <div class="row g-0 text-center">
            <div class="col-4 mb-1">
              <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
            <div class="col-4 mb-1">
              <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
            <div class="col-4 mb-1">
              <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
            <div class="col-4 mb-1">
              <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
            <div class="col-4 mb-1">
              <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
            <div class="col-4 mb-1">
              <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                <i class="fa fa-2x fa-circle"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Color Themes -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->
    </div>
    <!-- END Left Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Close Search Section -->
          <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
          <button type="button" class="btn rounded-0 btn-secondary px-3" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Search Section -->
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <button type="submit" class="btn rounded-0 btn-secondary px-3">
            <i class="fa fa-fw fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="far fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
