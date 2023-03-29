<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Hero -->
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h2 class="fw-bold mb-2">
          Manage Account
        </h2>
        <h3 class="fs-base fw-medium text-muted mb-0">
          View your account and change your settings.
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Overview -->
  <h2 class="content-heading">Overview</h2>
  <div class="row items-push">
    <div class="col-md-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <i class="fa fa-user fa-fw me-1 text-muted"></i> Account
          </h3>
        </div>
        <div class="block-content block-content-full">
          <p class="mb-1">
            <strong>Start Date:</strong> July 25, 2015
          </p>
          <p class="mb-1">
            <strong>ID:</strong> #687412
          </p>
          <p>
            <strong>Name:</strong> Business Hosting
          </p>
          <button type="button" class="btn btn-sm btn-alt-primary me-1">
            Rename
          </button>
          <button type="button" class="btn btn-sm btn-alt-danger">
            Close Account
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <i class="far fa-money-bill-alt fa-fw me-1 text-muted"></i> Billing Cycle
          </h3>
        </div>
        <div class="block-content block-content-full">
          <p class="mb-1">
            <strong>2019-07-25</strong> to <strong>2019-08-25</strong>
          </p>
          <p class="text-muted">
            You are rebilled on <strong>day 1</strong> of each month if you owe more than $4.99.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <i class="fab fa-cc-paypal fa-fw me-1 text-muted"></i> Amount Due
          </h3>
        </div>
        <div class="block-content block-content-full">
          <p class="mb-1">
            <strong>$49</strong> <a class="link-fx" href="javascript:void(0)">View Invoice</a>
          </p>
          <p class="text-muted">
            Save time and hassle by setting up automatic recurring payments!
          </p>
          <button type="button" class="btn btn-sm btn-alt-primary me-1">
            Set Up Autopay
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Overview -->

  <!-- Settings -->
  <h2 class="content-heading">Settings</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-pencil-alt fa-fw me-1 text-muted"></i> Profile
      </h3>
    </div>
    <div class="block-content">
      <div class="row items-push">
        <div class="col-lg-3">
          <p class="text-muted">
            Your account’s vital info. Your name should match your public ID.
          </p>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="mb-4">
            <label class="form-label" for="hosting-settings-profile-name">Name</label>
            <input type="text" class="form-control form-control-lg" id="hosting-settings-profile-name" name="hosting-settings-profile-name" placeholder="Enter your name.." value="John Smith">
          </div>
          <div class="mb-4">
            <label class="form-label" for="hosting-settings-profile-email">Email Address</label>
            <input type="email" class="form-control form-control-lg" id="hosting-settings-profile-email" name="hosting-settings-profile-email" placeholder="Enter your email.." value="hosting@example.com">
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-lock fa-fw me-1 text-muted"></i> Security
      </h3>
    </div>
    <div class="block-content">
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
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-status" name="hosting-settings-security-status" checked>
                  <label class="form-check-label fw-medium" for="hosting-settings-security-status">Online Status</label>
                  <div class="fs-sm text-muted">Show your status to all</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-verify" name="hosting-settings-security-verify">
                  <label class="form-check-label fw-medium" for="hosting-settings-security-verify">Verify on Login</label>
                  <div class="fs-sm text-muted">Most secure option</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-updates" name="hosting-settings-security-updates" checked>
                  <label class="form-check-label fw-medium" for="hosting-settings-security-updates">Auto Updates</label>
                  <div class="fs-sm text-muted">Keep app updated</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-notifications" name="hosting-settings-security-notifications" checked>
                  <label class="form-check-label fw-medium" for="hosting-settings-security-notifications">Notifications</label>
                  <div class="fs-sm text-muted">For every transaction</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-api" name="hosting-settings-security-api" checked>
                  <label class="form-check-label fw-medium" for="hosting-settings-security-api">API Access</label>
                  <div class="fs-sm text-muted">Enable access from third party apps</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="hosting-settings-security-2fa" name="hosting-settings-security-2fa">
                  <label class="form-check-label fw-medium" for="hosting-settings-security-2fa">Two Factor Auth</label>
                  <div class="fs-sm text-muted">Using an authenticator</div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-building fa-fw me-1 text-muted"></i> Address
      </h3>
    </div>
    <div class="block-content">
      <div class="row items-push">
        <div class="col-lg-3">
          <p class="text-muted">
            Your personal information is only used for invoices.
          </p>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="row">
            <div class="col-6">
              <div class="mb-4">
                <label class="form-label" for="hosting-settings-address-firstname">Firstname</label>
                <input type="text" class="form-control form-control-lg" id="hosting-settings-address-firstname" name="hosting-settings-address-firstname" value="John" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-4">
                <label class="form-label" for="hosting-settings-address-lastname">Lastname</label>
                <input type="text" class="form-control form-control-lg" id="hosting-settings-address-lastname" name="hosting-settings-address-lastname" value="Smith" disabled>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label" for="hosting-settings-address-street-1">Street Address 1</label>
            <input type="text" class="form-control form-control-lg" id="hosting-settings-address-street-1" name="hosting-settings-address-street-1">
          </div>
          <div class="mb-4">
            <label class="form-label" for="hosting-settings-address-street-2">Street Address 2</label>
            <input type="text" class="form-control form-control-lg" id="hosting-settings-address-street-2" name="hosting-settings-address-street-2">
          </div>
          <div class="mb-4">
            <label class="form-label" for="hosting-settings-address-city">City</label>
            <input type="text" class="form-control form-control-lg" id="hosting-settings-address-city" name="hosting-settings-address-city">
          </div>
          <div class="row mb-4">
            <div class="col-6">
              <label class="form-label" for="hosting-settings-address-postal">Postal code</label>
              <input type="text" class="form-control form-control-lg" id="hosting-settings-address-postal" name="hosting-settings-address-postal">
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Settings -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
