<?php
/**
 * dashboards/social/views/inc_header.php
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
    <div class="row g-0 align-items-center w-100">
      <div class="col">
        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
          <i class="fa fa-fw fa-bars"></i>
        </button>
        <!-- END Toggle Sidebar -->

        <!-- Header Navigation -->
        <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
        <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
          <li class="nav-main-item">
            <a class="nav-main-link active" href="javascript:void(0)">
              <i class="nav-main-link-icon fa fa-home d-none d-xl-inline-block"></i>
              <span class="nav-main-link-name">Home</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link" href="javascript:void(0)">
              <i class="nav-main-link-icon fa fa-flag d-none d-xl-inline-block"></i>
              <span class="nav-main-link-name">Notifications</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link" href="javascript:void(0)">
              <i class="nav-main-link-icon fa fa-envelope d-none d-xl-inline-block"></i>
              <span class="nav-main-link-name">Messages</span>
            </a>
          </li>
        </ul>
        <!-- END Header Navigation -->
      </div>
      <div class="col-3 text-center">
        <!-- Logo -->
        <a class="link-fx fw-bold" href="index.php">
          <i class="fa fa-fire text-primary"></i>
          <span class="d-none d-md-inline-block">
            <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
          </span>
        </a>
        <!-- END Logo -->
      </div>
      <div class="col text-end">
        <!-- Open Search Section -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
          <i class="fa fa-search"></i>
        </button>
        <!-- END Open Search Section -->

        <!-- Compose -->
        <button type="button" class="btn btn-sm btn-alt-success ms-1">
          <i class="far fa-edit opacity-50"></i>
          <span class="d-none d-sm-inline">Compose</span>
        </button>
        <!-- END Compose -->
      </div>
    </div>
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="db_social.php" method="POST">
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
