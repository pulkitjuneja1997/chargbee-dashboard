<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>Inbox (23)</span>
    <div class="space-x-1">
      <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-compose">New Message</button>
      <button type="button" class="btn btn-sm btn-alt-primary d-md-none" data-toggle="class-toggle" data-target=".js-inbox-nav" data-class="d-none d-md-block">Menu</button>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-5 col-xl-3">
      <!-- Collapsible Inbox Navigation -->
      <div class="js-inbox-nav d-none d-md-block">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Navigation</h3>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-flask opacity-50 me-1"></i> Filter
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-cogs opacity-50 me-1"></i> Manage
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content p-3">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-inbox opacity-50 me-1"></i> Inbox</span>
                  <span class="badge bg-black-50">23</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-star opacity-50 me-1"></i> Starred</span>
                  <span class="badge bg-black-50">30</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-paper-plane opacity-50 me-1"></i> Sent</span>
                  <span class="badge bg-black-50">79</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Draft</span>
                  <span class="badge bg-black-50">10</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-folder opacity-50 me-1"></i> Archive</span>
                  <span class="badge bg-black-50">99</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="fa fa-fw fa-trash-alt opacity-50 me-1"></i> Trash</span>
                  <span class="badge bg-black-50">13</span>
                </a>
              </li>
              <li class="nav-item">
                <hr class="my-1">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Create label
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Collapsible Inbox Navigation -->

      <!-- Recent Contacts -->
      <div class="block d-none d-md-block">
        <div class="block-header block-header-default">
          <h3 class="block-title">Recent Contacts</h3>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users opacity-50 me-1"></i> All
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-circle opacity-50 text-success me-1"></i> Online
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-circle opacity-50 text-danger me-1"></i> Busy
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-circle opacity-50 text-warning me-1"></i> Away
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-circle opacity-50 text-muted me-1"></i> Offline
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-cogs opacity-50 me-1"></i> Manage
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content p-3">
          <ul class="nav-users">
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'female'); ?>
                <i class="fa fa-circle text-success"></i>
                <div><?php $cb->get_name('female'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> New York
                </div>
              </a>
            </li>
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'male'); ?>
                <i class="fa fa-circle text-success"></i>
                <div><?php $cb->get_name('male'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> San Fransisco
                </div>
              </a>
            </li>
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'female'); ?>
                <i class="fa fa-circle text-warning"></i>
                <div><?php $cb->get_name('female'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> Beijing
                </div>
              </a>
            </li>
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'male'); ?>
                <i class="fa fa-circle text-warning"></i>
                <div><?php $cb->get_name('male'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> Tokyo
                </div>
              </a>
            </li>
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'male'); ?>
                <i class="fa fa-circle text-danger"></i>
                <div><?php $cb->get_name('male'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> London
                </div>
              </a>
            </li>
            <li>
              <a href="be_pages_generic_profile.php">
                <?php $cb->get_avatar('', 'female'); ?>
                <i class="fa fa-circle text-danger"></i>
                <div><?php $cb->get_name('female'); ?></div>
                <div class="fw-normal fs-xs text-muted">
                  <i class="fa fa-location-arrow"></i> Rio De Janeiro
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END Recent Contacts -->
    </div>
    <div class="col-md-7 col-xl-9">
      <!-- Message List -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <div class="block-title">
            <strong>1-10</strong> from <strong>23</strong>
          </div>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option">
              <i class="si si-arrow-left"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option">
              <i class="si si-arrow-right"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <!-- Messages -->
          <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.cbTableToolsCheckable()) -->
          <table class="js-table-checkable table table-hover table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 40px;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-all" name="cb-inbox-all">
                    <label class="form-check-label" for="cb-inbox-all"></label>
                  </div>
                </th>
                <th colspan="3">
                  <!-- Messages Options -->
                  <div class="d-flex justify-content-between">
                    <div>
                      <button type="button" class="btn btn-alt-secondary">
                        <i class="fa fa-fw fa-archive"></i>
                      </button>
                      <button type="button" class="btn btn-alt-secondary">
                        <i class="fa fa-fw fa-star"></i>
                      </button>
                    </div>
                    <div>
                      <button type="button" class="btn btn-alt-secondary">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- END Messages Options -->
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-1" name="cb-inbox-1">
                    <label class="form-check-label" for="cb-inbox-1"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold" style="width: 140px;"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Welcome to our service</a>
                  <div class="text-muted mt-1">It's a pleasure to have you on our service..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted" style="width: 120px;">WED</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-2" name="cb-inbox-2">
                    <label class="form-check-label" for="cb-inbox-2"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Your subscription was updated</a>
                  <div class="text-muted mt-1">We are glad you decided to go with a vip..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">WED</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-3" name="cb-inbox-3">
                    <label class="form-check-label" for="cb-inbox-3"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Update is available</a>
                  <div class="text-muted mt-1">An update is under way for your app..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">FRI</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-4" name="cb-inbox-4">
                    <label class="form-check-label" for="cb-inbox-4"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">New Sale!</a>
                  <div class="text-muted mt-1">You had a new sale and earned..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">THU</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-5" name="cb-inbox-5">
                    <label class="form-check-label" for="cb-inbox-5"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Action Required for your account!</a>
                  <div class="text-muted mt-1">Your account is inactive for a long time and..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">MON</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-6" name="cb-inbox-6">
                    <label class="form-check-label" for="cb-inbox-6"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">New Photo Pack!</a>
                  <div class="text-muted mt-1">Our new photo pack is available now! You..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">MON</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-7" name="cb-inbox-7">
                    <label class="form-check-label" for="cb-inbox-7"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Product is released!</a>
                  <div class="text-muted mt-1">This is a notification about our new product..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">TUE</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-8" name="cb-inbox-8">
                    <label class="form-check-label" for="cb-inbox-8"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Now on Sale!</a>
                  <div class="text-muted mt-1">Our Book is out! You can buy a copy and..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">WED</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-9" name="cb-inbox-9">
                    <label class="form-check-label" for="cb-inbox-9"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Monthly Report</a>
                  <div class="text-muted mt-1">The monthly report you requested for..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">SAT</td>
              </tr>
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cb-inbox-10" name="cb-inbox-10">
                    <label class="form-check-label" for="cb-inbox-10"></label>
                  </div>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold"><?php $cb->get_name(); ?></td>
                <td>
                  <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Trial Started!</a>
                  <div class="text-muted mt-1">You 30-day trial has now started and..</div>
                </td>
                <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted">SUN</td>
              </tr>
            </tbody>
          </table>
          <!-- END Messages -->
        </div>
      </div>
      <!-- END Message List -->
    </div>
  </div>

  <!-- Compose Modal -->
  <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="my-2" action="be_pages_generic_inbox.php" method="POST" onsubmit="return false;">
          <div class="block block-rounded shadow-none mb-0">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                <i class="fa fa-pencil-alt opacity-50 me-1"></i> New Message
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="block-content">
              <div class="mb-4">
                <label class="form-label" for="message-email">Email</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="message-email" name="message-email" placeholder="Where to send?">
                  <span class="input-group-text">
                    <i class="si si-envelope-open"></i>
                  </span>
                </div>
              </div>
              <div class="mb-4">
              <label class="form-label" for="message-subject">Subject</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="message-subject" name="message-subject" placeholder="What is this about?">
                  <span class="input-group-text">
                    <i class="si si-book-open"></i>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label" for="message-msg">Message</label>
                <textarea class="form-control" id="message-msg" name="message-msg" rows="6" placeholder="Write your message.."></textarea>
                <div class="form-text fs-sm text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
              </div>
            </div>
            <div class="block-content block-content-full block-content-sm text-end border-top">
              <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                Cancel
              </button>
              <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
                <i class="fa fa-paper-plane opacity-50 me-1"></i> Send Message
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Compose Modal -->

  <!-- Message Modal -->
  <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
            <div class="block-header block-header-default">
            <h3 class="block-title">Welcome to our service</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Reply">
                <i class="fa fa-reply"></i>
              </button>
              <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full bg-image text-center" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo6.jpg');">
            <?php $cb->get_avatar('4', '', 96, true); ?>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body fs-sm d-flex justify-content-between align-items-center">
            <a href="javascript:void(0)">service@example.com</a>
            <span class="text-muted">2 min ago</span>
          </div>
          <div class="block-content">
            <p>Dear Customer,</p>
            <?php $cb->get_text('small'); ?>
            <p>Best Regards,</p>
            <p><?php $cb->get_name('female'); ?></p>
          </div>
          <div class="block-content p-3 bg-body">
            <div class="row g-sm items-push">
              <div class="col-sm-4">
                <div class="options-container fx-overlay-slide-down">
                  <?php $cb->get_photo(20, false, 'img-fluid options-item'); ?>
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-fw fa-download opacity-50"></i> Download
                      </a>
                    </div>
                  </div>
                </div>
                <div class="fs-sm text-muted mt-1">Travel_Pack_1.jpg</div>
              </div>
              <div class="col-sm-4">
                <div class="options-container fx-overlay-slide-down">
                  <?php $cb->get_photo(21, false, 'img-fluid options-item'); ?>
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-fw fa-download opacity-50"></i> Download
                      </a>
                    </div>
                  </div>
                </div>
                <div class="fs-sm text-muted mt-1">Travel_Pack_2.jpg</div>
              </div>
              <div class="col-sm-4">
                <div class="options-container fx-overlay-slide-down">
                  <?php $cb->get_photo(22, false, 'img-fluid options-item'); ?>
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-fw fa-download opacity-50"></i> Download
                      </a>
                    </div>
                  </div>
                </div>
                <div class="fs-sm text-muted mt-1">Travel_Pack_3.jpg</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Message Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Helpers (Table Tools helpers) -->
<script>Codebase.helpersOnLoad(['cb-table-tools-checkable']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>