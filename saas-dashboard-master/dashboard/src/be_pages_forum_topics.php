<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
    <a class="breadcrumb-item" href="be_pages_forum_categories.php">Forum</a>
    <span class="breadcrumb-item active">Topics</span>
  </nav>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Topics</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="fa fa-plus"></i> New Topic
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <!-- Topics -->
      <table class="table table-striped table-borderless table-vcenter">
        <thead class="thead-light">
          <tr>
            <th colspan="2">Welcome</th>
            <th class="d-none d-md-table-cell text-center" style="width: 100px;">Replies</th>
            <th class="d-none d-md-table-cell text-center" style="width: 100px;">Views</th>
            <th class="d-none d-md-table-cell" style="width: 200px;">Last Post</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center" style="width: 65px;">
              <i class="si si-pin fa-2x"></i>
            </td>
            <td>
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Welcome to our forums!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on June 20, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 21, 2017</span>
            </td>
          </tr>
          <tr>
            <td class="text-center" style="width: 65px;">
              <i class="si si-pin fa-2x"></i>
            </td>
            <td>
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Big upgrades are coming soon!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on June 25, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 18, 2017</span>
            </td>
          </tr>
          <tr>
            <td class="text-center" style="width: 65px;">
              <i class="si si-pin fa-2x"></i>
            </td>
            <td>
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Tips &amp; tricks for staying motivated</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on January 15, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 13, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">2017, all the new features!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on January 21, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 13, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Issue when saving a file, can you help me?</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on May 26, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 2, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">New Features!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on June 29, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 2, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Question about the new features!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on June 28, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 1, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Which plan to choose?</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on March 12, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 1, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Your web app saved me tons of time</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on January 23, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 12, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Is it easy to upgrade my plan?</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on May 10, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 6, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Check out all those tips &amp; tricks!</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on May 5, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 5, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Review needed</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on May 3, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 4, 2017</span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <a class="fw-semibold" href="be_pages_forum_discussion.php">Testing out the API</a>
              <div class="fs-sm text-muted mt-1">
                <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a> on April 25, 2017
              </div>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
            </td>
            <td class="d-none d-md-table-cell text-center">
              <a class="fw-semibold" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
            </td>
            <td class="d-none d-md-table-cell">
              <span class="fs-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on January 4, 2017</span>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- END Topics -->

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end me-3">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END Pagination -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>