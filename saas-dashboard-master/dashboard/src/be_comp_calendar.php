<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_m_content = '';
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/fullcalendar/main.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Calendar and Events functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _js/pages/be_comp_calendar.js -->
  <!-- For more info and examples you can check out https://fullcalendar.io/ -->
  <div class="block block-rounded">
    <div class="block-content">
      <div class="row items-push">
        <div class="col-xl-9">
          <!-- Calendar Container -->
          <div id="js-calendar"></div>
        </div>
        <div class="col-xl-3 d-none d-xl-block">
          <!-- Add Event Form -->
          <form class="js-form-add-event mb-4" action="be_comp_calendar.php" method="POST">
            <div class="input-group">
              <input type="text" class="js-add-event form-control" placeholder="Add Event..">
              <button type="submit" class="btn btn-secondary">
                <i class="fa fa-plus-circle"></i>
              </button>
            </div>
          </form>
          <!-- END Add Event Form -->

          <!-- Event List -->
          <ul id="js-events" class="list list-events">
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-info">Codename X</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-success">Weekend Adventure</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-info">Project Mars</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-warning">Meeting</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-success">Walk the dog</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-info">AI schedule</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-success">Cinema</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-danger">Project X</div>
            </li>
            <li>
              <div class="js-event p-2 text-white fs-sm fw-semibold bg-warning">Skype Meeting</div>
            </li>
          </ul>
          <div class="text-center">
            <i class="fa fa-arrows-alt"></i> Drag and drop events on the calendar
          </div>
          <!-- END Event List -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Calendar -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/fullcalendar/main.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_calendar.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
