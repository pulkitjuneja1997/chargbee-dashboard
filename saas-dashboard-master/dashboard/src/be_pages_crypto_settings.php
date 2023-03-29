<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">John Smith</h2>
    <h3 class="h5 text-muted mb-0">Crypto Investor</h3>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <!-- User Profile -->
      <form action="be_pages_crypto_settings.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading">User Profile</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Your account’s vital info. Your nickname will be publicly visible.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-nickname">Nickname</label>
              <input type="text" class="form-control form-control-lg" id="crypto-settings-nickname" name="crypto-settings-nickname" placeholder="Enter your nickname.." value="John S">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-email">Email Address</label>
              <input type="email" class="form-control form-control-lg" id="crypto-settings-email" name="crypto-settings-email" placeholder="Enter your email.." value="crypto@example.com">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
      <!-- END User Profile -->

      <!-- Personal Details -->
      <form action="be_pages_crypto_settings.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading">Personal Details</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Your personal information is never shown to other users.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="crypto-settings-firstname">Firstname</label>
                <input type="text" class="form-control form-control-lg" id="crypto-settings-firstname" name="crypto-settings-firstname" value="John" disabled>
              </div>
              <div class="col-6">
                <label class="form-label" for="crypto-settings-lastname">Lastname</label>
                <input type="text" class="form-control form-control-lg" id="crypto-settings-lastname" name="crypto-settings-lastname" value="Smith" disabled>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-street-1">Street Address 1</label>
              <input type="text" class="form-control form-control-lg" id="crypto-settings-street-1" name="crypto-settings-street-1">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-street-2">Street Address 2</label>
              <input type="text" class="form-control form-control-lg" id="crypto-settings-street-2" name="crypto-settings-street-2">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-city">City</label>
              <input type="text" class="form-control form-control-lg" id="crypto-settings-city" name="crypto-settings-city">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-postal">Postal code</label>
              <input type="text" class="form-control form-control-lg" id="crypto-settings-postal" name="crypto-settings-postal">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
      <!-- END Personal Details -->

      <!-- Change Password -->
      <form action="be_pages_crypto_settings.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading">Change Password</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Changing your sign in password is an easy way to keep your account secure.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-password">Current Password</label>
              <input type="password" class="form-control form-control-lg" id="crypto-settings-password" name="crypto-settings-password">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-password-new">New Password</label>
              <input type="password" class="form-control form-control-lg" id="crypto-settings-password-new" name="crypto-settings-password-new">
            </div>
            <div class="mb-4">
              <label class="form-label" for="crypto-settings-password-new-confirm">Confirm New Password</label>
              <input type="password" class="form-control form-control-lg" id="crypto-settings-password-new-confirm" name="crypto-settings-password-new-confirm">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
      <!-- END Change Password -->

      <!-- Security -->
      <form action="be_pages_crypto_settings.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading">Security</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Keep your account as secure and as private as you like.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-status" name="crypto-settings-security-status" checked>
                    <label class="form-check-label fw-medium" for="crypto-settings-security-status">Online Status</label>
                    <div class="fs-sm text-muted">Show your status to all</div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-verify" name="crypto-settings-security-verify">
                    <label class="form-check-label fw-medium" for="crypto-settings-security-verify">Verify on Login</label>
                    <div class="fs-sm text-muted">Most secure option</div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-updates" name="crypto-settings-security-updates" checked>
                    <label class="form-check-label fw-medium" for="crypto-settings-security-updates">Auto Updates</label>
                    <div class="fs-sm text-muted">Keep app updated</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-notifications" name="crypto-settings-security-notifications" checked>
                    <label class="form-check-label fw-medium" for="crypto-settings-security-notifications">Notifications</label>
                    <div class="fs-sm text-muted">For every transaction</div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-api" name="crypto-settings-security-api" checked>
                    <label class="form-check-label fw-medium" for="crypto-settings-security-api">API Access</label>
                    <div class="fs-sm text-muted">Enable access from third party apps</div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="crypto-settings-security-2fa" name="crypto-settings-security-2fa">
                    <label class="form-check-label fw-medium" for="crypto-settings-security-2fa">Two Factor Auth</label>
                    <div class="fs-sm text-muted">Using an authenticator</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- END Security -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
