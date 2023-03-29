<?php
/**
 * dashboards/medical/views/inc_header.php
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
    <div class="d-flex align-items-center space-x-2">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->
      
      <!-- Full Search -->
      <form class="d-none d-sm-inline-block" action="db_medical.php" method="POST" onsubmit="return false;">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-text">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Full Search -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-md d-sm-none"></i>
          <span class="d-none d-sm-inline-block fw-semibold">Dr. Stone</span>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="page-header-user-dropdown">
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Patients</span>
            <i class="far fa-fw fa-user-circle opacity-50 ms-1"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Appointments</span>
            <i class="fa fa-fw fa-calendar-alt opacity-50 ms-1"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Payments</span>
            <i class="fab fa-fw fa-paypal opacity-50 ms-1"></i>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Profile</span>
            <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
          <span>Settings</span>  
          <i class="fa fa-fw fa-cog opacity-50 ms-1"></i>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Sign Out</span>
            <i class="fa fa-fw fa-unlock-alt opacity-50 ms-1"></i>
          </a>
        </div>
      </div>
      <!-- END User Dropdown -->

      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <span class="badge bg-danger me-1 animated swing infinite">
          <i class="fa fa-exclamation-triangle"></i>
        </span>
        <i class="fa fa-fw fa-flag"></i>
      </button>
      <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Close Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Search Section -->
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <button type="submit" class="btn btn-secondary">
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
