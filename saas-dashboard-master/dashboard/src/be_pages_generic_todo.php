<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Hero -->
  <div class="block block-rounded">
    <div class="block-content">
      <div class="py-3 text-center">
        <h1 class="h3 mb-1">ACME Inc</h1>
        <p class="fw-medium text-muted mb-2">
          Deadline: July 19, 2022
        </p>
        <p class="fs-sm fw-medium">
          Web Design and Development of ACME’s website. Brand identity as well as promo mobile app development for their projects.
        </p>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Tasks Content -->
  <div class="row">
    <div class="col-md-5 col-xl-3">
      <!-- Toggle Tasks Navigation on mobile -->
      <button type="button" class="btn w-100 btn-primary d-md-none mb-2" data-toggle="class-toggle" data-target=".js-tasks-nav" data-class="d-none d-md-block">Menu</button>

      <!-- Collapsible Tasks Navigation -->
      <div class="js-tasks-nav d-none d-md-block">
        <!-- Tasks Info -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Tasks</h3>
          </div>
          <div class="block-content p-3">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fa fa-fw fa-tasks opacity-50 me-1"></i> Active</span>
                <span class="js-task-badge badge bg-primary animated bounceIn"></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fa fa-fw fa-star opacity-50 me-1"></i> Starred</span>
                <span class="js-task-badge-starred badge bg-warning animated bounceIn"></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fa fa-fw fa-check opacity-50 me-1"></i> Completed</span>
                <span class="js-task-badge-completed badge bg-success animated bounceIn"></span>
              </li>
            </ul>
          </div>
        </div>
        <!-- END Tasks Info -->

        <!-- People -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">People</h3>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="si si-settings"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-eye opacity-50 me-1"></i> Make Private
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit People
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content p-3">
            <ul class="nav-users push">
              <li>
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'female'); ?>
                  <i class="fa fa-circle text-success"></i>
                  <div><?php $cb->get_name('female'); ?></div>
                  <div class="fw-medium fs-sm text-muted"><i class="fa fa-location-arrow opacity-50 me-1"></i> New York</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                  <i class="fa fa-circle text-success"></i>
                  <div><?php $cb->get_name('male'); ?></div>
                  <div class="fw-medium fs-sm text-muted"><i class="fa fa-location-arrow opacity-50 me-1"></i> San Fransisco</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'female'); ?>
                  <i class="fa fa-circle text-warning"></i>
                  <div><?php $cb->get_name('female'); ?></div>
                  <div class="fw-medium fs-sm text-muted"><i class="fa fa-location-arrow opacity-50 me-1"></i> Beijing</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                  <i class="fa fa-circle text-warning"></i>
                  <div><?php $cb->get_name('male'); ?></div>
                  <div class="fw-medium fs-sm text-muted"><i class="fa fa-location-arrow opacity-50 me-1"></i> Tokyo</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                  <i class="fa fa-circle text-danger"></i>
                  <div><?php $cb->get_name('male'); ?></div>
                  <div class="fw-medium fs-sm text-muted"><i class="fa fa-location-arrow opacity-50 me-1"></i> London</div>
                </a>
              </li>
            </ul>
            <form action="be_pages_generic_todo.php" method="POST" onsubmit="return false;">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Invite more people..">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END People -->
      </div>
      <!-- END Collapsible Tasks Navigation -->
    </div>
    <div class="col-md-7 col-xl-9">
      <!-- Tasks -->
      <!-- Tasks functionality is initialized in js/pages/be_pages_generic_todo.min.js which was auto compiled from _js/pages/be_pages_generic_todo.js -->
      <div class="js-tasks">
        <!-- Add task -->
        <form id="js-task-form" action="be_pages_generic_todo.php" method="POST">
          <div class="input-group input-group-lg">
            <input class="form-control" type="text" id="js-task-input" name="js-task-input" placeholder="Add a task and press enter..">
            <span class="input-group-text">
              <i class="fa fa-plus"></i>
            </span>
          </div>
        </form>
        <!-- END Add task -->

        <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
          Active <span class="js-task-badge badge rounded-pill bg-primary animated fadeIn"></span>
        </h2>
        <div class="js-task-list">
          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="9" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id9" name="tasks-cb-id9">
                    <label class="form-check-label" for="tasks-cb-id9"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  Backend framework
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="8" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id8" name="tasks-cb-id8">
                    <label class="form-check-label" for="tasks-cb-id8"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  Customer on-boarding process
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="7" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id7" name="tasks-cb-id7">
                    <label class="form-check-label" for="tasks-cb-id7"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  Logo design
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="6" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id6" name="tasks-cb-id6">
                    <label class="form-check-label" for="tasks-cb-id6"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  Website Marketing
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->
        </div>
        <!-- END Tasks List -->

        <!-- Starred Tasks List -->
        <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
          Starred <span class="js-task-badge-starred badge rounded-pill bg-primary animated fadeIn"></span>
        </h2>
        <div class="js-task-list-starred">
          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="5" data-task-completed="false" data-task-starred="true">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id5" name="tasks-cb-id5">
                    <label class="form-check-label" for="tasks-cb-id5"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  Brand Identity
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="fa fa-star"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="4" data-task-completed="false" data-task-starred="true">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id4" name="tasks-cb-id4">
                    <label class="form-check-label" for="tasks-cb-id4"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  UI design and implementation
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="fa fa-star"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->
        </div>
        <!-- END Starred Tasks List -->

        <!-- Tasks List Completed -->
        <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
          Completed <span class="js-task-badge-completed badge rounded-pill bg-primary animated fadeIn"></span>
        </h2>
        <div class="js-task-list-completed">
          <!-- Completed Task -->
          <div class="js-task block block-rounded bg-body-light mb-2 animated fadeIn" data-task-id="3" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id3" name="tasks-cb-id3" checked>
                    <label class="form-check-label" for="tasks-cb-id3"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  <del>Website and App Wireframes</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->

          <!-- Completed Task -->
          <div class="js-task block block-rounded bg-body-light mb-2 animated fadeIn" data-task-id="2" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id2" name="tasks-cb-id2" checked>
                    <label class="form-check-label" for="tasks-cb-id2"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  <del>Contract Signing</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->

          <!-- Completed Task -->
          <div class="js-task block block-rounded bg-body-light mb-2 animated fadeIn" data-task-id="1" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id1" name="tasks-cb-id1" checked>
                    <label class="form-check-label" for="tasks-cb-id1"></label>
                  </div>
                </td>
                <td class="js-task-content fw-medium ps-0">
                  <del>Explore ideas</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->
        </div>
        <!-- END Tasks List Completed -->
      </div>
      <!-- END Tasks -->
    </div>
  </div>
  <!-- END Tasks Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Todo demo functionality) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_generic_todo.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>