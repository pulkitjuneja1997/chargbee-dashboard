<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- User Info -->
<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo13@2x.jpg');">
  <div class="bg-black-75 py-4">
    <div class="content content-full text-center">
      <!-- Avatar -->
      <div class="mb-3">
        <a class="img-link" href="be_pages_generic_profile.php">
          <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
        </a>
      </div>
      <!-- END Avatar -->

      <!-- Personal -->
      <h1 class="h3 text-white fw-bold mb-2">John Smith</h1>
      <h2 class="h5 text-white-75">
        Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
      </h2>
      <!-- END Personal -->

      <!-- Actions -->
      <a href="be_pages_generic_profile.php" class="btn btn-primary">
        <i class="fa fa-arrow-left opacity-50 me-1"></i> Back to Profile
      </a>
      <!-- END Actions -->
    </div>
  </div>
</div>
<!-- END User Info -->

<!-- Main Content -->
<div class="content">
  <!-- User Profile -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-user-circle me-1 text-muted"></i> User Profile
      </h3>
    </div>
    <div class="block-content">
      <form action="be_pages_generic_profile.edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Your account’s vital info. Your username will be publicly visible.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="profile-settings-username">Username</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="profile-settings-username" placeholder="Enter your username.." value="john.doe">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-name">Name</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="profile-settings-name" placeholder="Enter your name.." value="John Doe">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-email">Email Address</label>
              <input type="email" class="form-control form-control-lg" id="profile-settings-email" name="profile-settings-email" placeholder="Enter your email.." value="john.doe@example.com">
            </div>
            <div class="row mb-4">
              <div class="col-md-10 col-xl-6">
                <div class="push">
                  <?php $cb->get_avatar(15); ?>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="profile-settings-avatar" class="form-label">Choose new avatar</label>
                  <input class="form-control" type="file" id="profile-settings-avatar" name="profile-settings-avatar">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END User Profile -->

  <!-- Connections -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-share-alt me-1 text-muted"></i> Connections
      </h3>
    </div>
    <div class="block-content">
      <form action="be_pages_generic_profile.edit.php" method="POST" onsubmit="return false;">
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              You can connect your account to third party networks to get extra features.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 text-start btn-alt-danger bg-white" href="javascript:void(0)">
                  <i class="fab fa-google me-1"></i> john_doe
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-flex align-items-center">
                <a class="text-muted" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt me-1"></i> Edit Google Connection
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 text-start btn-alt-info bg-white" href="javascript:void(0)">
                  <i class="fa fab fa-twitter me-1"></i> @john_doe
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center">
                <a class="text-muted" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt me-1"></i> Edit Twitter Connection
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 text-start btn-alt-primary" href="javascript:void(0)">
                  <i class="fab fa-facebook-f me-1"></i> Connect to Facebook
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 text-start btn-alt-warning" href="javascript:void(0)">
                  <i class="fab fa-instagram me-1"></i> Connect to Instagram
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Connections -->

  <!-- Change Password -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-asterisk me-1 text-muted"></i> Change Password
      </h3>
    </div>
    <div class="block-content">
      <form action="be_pages_generic_profile.edit.php" method="POST" onsubmit="return false;">
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Changing your sign in password is an easy way to keep your account secure.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="profile-settings-password">Current Password</label>
              <input type="password" class="form-control form-control-lg" id="profile-settings-password" name="profile-settings-password">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-password-new">New Password</label>
              <input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="profile-settings-password-new">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-password-new-confirm">Confirm New Password</label>
              <input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="profile-settings-password-new-confirm">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Change Password -->

  <!-- Billing Information -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fab fa-paypal me-1 text-muted"></i> Billing Information
      </h3>
    </div>
    <div class="block-content">
      <form action="be_pages_generic_profile.edit.php" method="POST" onsubmit="return false;">
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Your billing information is never shown to other users and only used for creating your invoices.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="profile-settings-company">Company Name (Optional)</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-company" name="profile-settings-company">
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="profile-settings-firstname">Firstname</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-firstname" name="profile-settings-firstname">
              </div>
              <div class="col-6">
                <label class="form-label" for="profile-settings-lastname">Lastname</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-lastname" name="profile-settings-lastname">
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-street-1">Street Address 1</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-street-1" name="profile-settings-street-1">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-street-2">Street Address 2</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-street-2" name="profile-settings-street-2">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-city">City</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-city" name="profile-settings-city">
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="profile-settings-postal">Postal code</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-postal" name="profile-settings-postal">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="profile-settings-vat">VAT Number</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-vat" name="profile-settings-vat" value="IA00000000" disabled>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Billing Information -->
</div>
<!-- END Main Content -->
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>