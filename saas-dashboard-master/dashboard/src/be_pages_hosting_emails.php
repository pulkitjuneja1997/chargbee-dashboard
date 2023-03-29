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
          Email Management
        </h2>
        <h3 class="fs-base fw-medium text-muted mb-0">
          You currently have 6 active mailboxes and 3 forwarding email addresses!
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Overview -->
  <h2 class="content-heading">Overview</h2>
  <div class="row">
    <div class="col-lg-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="fa fa-3x fa-envelope text-primary"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            6 Active
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Mailboxes
          </p>
        </div>
      </a>
    </div>
    <div class="col-lg-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="fa fa-3x fa-share text-elegance"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            3 Forwarding
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Email Addresses
          </p>
        </div>
      </a>
    </div>
    <div class="col-lg-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="far fa-save fa-3x text-pulse"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            1GB Storage
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Current Usage
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Overview -->

  <!-- Mailboxes -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>Mailboxes (6)</span>
    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('open', '#cb-add-mailbox');">
      <i class="fa fa-plus opacity-50 me-1"></i> Add Mailbox
    </button>
  </h2>
  <div id="cb-add-mailbox" class="block block-rounded bg-body-light animated fadeIn d-none">
    <div class="block-header">
      <h3 class="block-title">Add a new Mailbox</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-question"></i>
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
          <i class="si si-close"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <form action="be_pages_hosting_emails.php" method="POST" onsubmit="return false;">
        <div class="row g-sm">
          <div class="col-md-5">
            <input type="text" class="form-control" id="example-hosting-mailbox" name="example-hosting-mailbox" placeholder="Mailbox Name">
          </div>
          <div class="col-md-4">
            <select class="form-select" id="example-hosting-domains" name="example-hosting-domains">
              <option value="0">Select a domain</option>
              <option value="1">@example.com</option>
              <option value="2">@example.co.uk</option>
              <option value="3">@example.io</option>
            </select>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-alt-primary w-100">
              <i class="fa fa-plus opacity-50 me-1"></i> Create
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full border-bottom">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            info<span class="text-muted">@example.com</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 12%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.12GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
    <div class="block-content block-content-full border-bottom">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            support<span class="text-muted">@example.com</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 23%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.23GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            hostmaster<span class="text-muted">@example.com</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 15%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.15GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full border-bottom">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            admin<span class="text-muted">@example.io</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 7%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.07GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            hostmaster<span class="text-muted">@example.io</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 3%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.03GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-3">
            info<span class="text-muted">@example.co.uk</span>
          </h3>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">0.5GB</span> of <span class="fw-bold">1GB</span> Storage
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-globe opacity-50 me-1"></i> Webmail
          </a>
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Mailboxes -->

  <!-- Email Forwarding -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>Email Forwarding (3)</span>
    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('open', '#cb-add-forwarder');">
      <i class="fa fa-plus opacity-50 me-1"></i> Add Forwarder
    </button>
  </h2>
  <div id="cb-add-forwarder" class="block block-rounded bg-body-light animated fadeIn d-none">
    <div class="block-header">
      <h3 class="block-title">Add a new Forwarder</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-question"></i>
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
          <i class="si si-close"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <form action="be_pages_hosting_emails.php" method="POST" onsubmit="return false;">
        <div class="row g-sm items-push">
          <div class="col-md-5">
            <input type="text" class="form-control" id="example-hosting-virtual-address" name="example-hosting-virtual-address" placeholder="Virtual Email Address">
          </div>
          <div class="col-md-5">
            <select class="form-select" id="example-hosting-forwarder-mailbox" name="example-hosting-forwarder-mailbox">
              <option value="0">Select a mailbox to forward</option>
              <option value="1">info@example.com</option>
              <option value="2">support@example.com</option>
              <option value="3">hostmaster@example.com</option>
              <option value="4">admin@example.io</option>
              <option value="5">hostmaster@example.io</option>
              <option value="6">info@example.co.uk</option>
            </select>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-alt-primary w-100">
              <i class="fa fa-plus opacity-50 me-1"></i> Add
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-0">
            testing@example.com
          </h3>
          <i class="fa fa-arrow-down text-primary py-2"></i>
          <p class="h5 fw-bold text-muted mb-0">
            info@example.com
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-0">
            store@example.com
          </h3>
          <i class="fa fa-arrow-down text-primary py-2"></i>
          <p class="h5 fw-bold text-muted mb-0">
            hostmaster@example.io
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <h3 class="h5 fw-bold mb-0">
            john@example.com
          </h3>
          <i class="fa fa-arrow-down text-primary py-2"></i>
          <p class="h5 fw-bold text-muted mb-0">
            admin@example.io
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-wrench opacity-50 me-1"></i> Manage
          </a>
          <a class="btn btn-sm btn-outline-danger me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-times opacity-50 me-1"></i> Delete
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Email Forwarding -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
