<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
    <a class="breadcrumb-item" href="be_pages_forum_categories.php">Forum</a>
    <a class="breadcrumb-item" href="be_pages_forum_topics.php">Welcome</a>
    <span class="breadcrumb-item active">Just a small question!</span>
  </nav>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Just a small question!</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <!-- Discussion -->
      <table class="table table-borderless">
        <tbody>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a class="fw-medium" href="be_pages_generic_profile.php"><?php $cb->get_name('female'); ?></a> on February 1, 2017 16:15
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <div class="mb-2">
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'female'); ?>
                </a>
              </div>
              <span class="fs-sm text-muted"><?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?></span>
            </td>
            <td>
              <?php $cb->get_text('medium', 1); ?>
              <hr>
              <p class="fs-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a class="fw-medium" href="be_pages_generic_profile.php"><?php $cb->get_name('male'); ?></a> on February 10, 2017 10:09
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <div class="mb-2">
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                </a>
              </div>
              <span class="fs-sm text-muted"><?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?></span>
            </td>
            <td>
              <?php $cb->get_text('large', 2); ?>
              <hr>
              <p class="fs-sm text-muted">Be yourself; everyone else is already taken.</p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a class="fw-medium" href="be_pages_generic_profile.php"><?php $cb->get_name('male'); ?></a> on February 15, 2017 20:17
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <div class="mb-2">
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                </a>
              </div>
              <span class="fs-sm text-muted"><?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?></span>
            </td>
            <td>
              <?php $cb->get_text('medium', 4); ?>
              <hr>
              <p class="fs-sm text-muted">Don't cry because it's over, smile because it happened.</p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a class="fw-medium" href="be_pages_generic_profile.php"><?php $cb->get_name('female'); ?></a> on February 20, 2017 20:29
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <div class="mb-2">
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'female'); ?>
                </a>
              </div>
              <span class="fs-sm text-muted"><?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?></span>
            </td>
            <td>
              <?php $cb->get_text('medium', 3); ?>
              <hr>
              <p class="fs-sm text-muted">Strive not to be a success, but rather to be of value.</p>
            </td>
          </tr>
          <tr class="table-active" id="forum-reply-form">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a class="fw-medium" href="be_pages_generic_profile.php"><?php $cb->get_name('male'); ?></a> Just now
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center">
              <div class="mb-2">
                <a href="be_pages_generic_profile.php">
                  <?php $cb->get_avatar('', 'male'); ?>
                </a>
              </div>
              <span class="fs-sm text-muted"><?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?></span>
            </td>
            <td>
              <form action="be_pages_forum_discussion.php" method="POST" onsubmit="return false;">
                <div class=" mb-4">
                  <!-- CKEditor (js-ckeditor id is initialized in Helpers.jsCkeditor()) -->
                  <!-- For more info and examples you can check out http://ckeditor.com -->
                  <textarea id="js-ckeditor" name="ckeditor"></textarea>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-reply opacity-50 me-1"></i> Reply
                  </button>
                </div>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- END Discussion -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/ckeditor/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor plugin) -->
<script>Codebase.helpersOnLoad(['js-ckeditor']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>