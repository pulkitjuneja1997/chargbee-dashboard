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
          Hosting Dashboard
        </h2>
        <h3 class="fs-base fw-medium text-muted mb-0">
          You currently have 1 active server and 3 domains!
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Overview -->
  <h2 class="content-heading">Overview</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="fa fa-3x fa-globe text-primary"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            3 Active
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Domains
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="fa fa-3x fa-server text-elegance"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            1 VPS
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Server
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="far fa-3x fa-dot-circle text-pulse"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            VIP
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Plan
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-1">
            <i class="fab fa-3x fa-cc-paypal text-gray-dark"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            $49 Pending
          </p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Payment
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Overview -->

  <!-- VPS -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>VPS (1)</span>
    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('open', '#cb-add-server');">
      <i class="fa fa-plus opacity-50 me-1"></i> Add Server
    </button>
  </h2>
  <div id="cb-add-server" class="block block-rounded bg-body-light animated fadeIn d-none">
    <div class="block-header">
      <h3 class="block-title">Add a new VPS</h3>
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
      <form action="be_pages_hosting_dashboard.php" method="POST" onsubmit="return false;">
        <div class="row g-sm items-push">
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-text">
                vps798_
              </span>
              <input type="text" class="form-control" id="example-hosting-name" name="example-hosting-name" placeholder="Server Name">
            </div>
          </div>
          <div class="col-md-4">
            <select class="form-select" id="example-hosting-vps" name="example-hosting-vps">
              <option value="0">Select a configuration</option>
              <option value="1">$9/m - 2GB RAM, 30GB Storage, Unlimited Domains</option>
              <option value="2">$19/m - 4GB RAM, 60GB Storage, Unlimited Domains</option>
              <option value="3">$39/m - 6GB RAM, 120GB Storage, Unlimited Domains</option>
              <option value="4">$49/m - 8GB RAM, 240GB Storage, Unlimited Domains</option>
            </select>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-alt-success w-100">
              <i class="fa fa-plus opacity-50 me-1"></i> Create
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        vps741_game <small>Los Angeles</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <div class="row align-items-center">
        <div class="col-sm-6 py-2">
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 33%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-3">
            <span class="fw-bold">2GB</span> of <span class="fw-bold">6GB</span> RAM
          </p>
          <div class="progress mb-1" style="height: 8px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="fs-sm fw-semibold mb-0">
            <span class="fw-bold">78GB</span> of <span class="fw-bold">120GB</span> Disk Space
          </p>
        </div>
        <div class="col-sm-6 py-2 text-md-end">
          <a class="btn btn-sm btn-outline-secondary me-1 my-1" href="javascript:void(0)">
            <i class="fa fa-undo opacity-50 me-1"></i> Restart
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
  <!-- END VPS -->

  <!-- Domains -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>Domains (3)</span>
    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('open', '#cb-add-domain');">
      <i class="fa fa-plus opacity-50 me-1"></i> Add Domain
    </button>
  </h2>
  <div id="cb-add-domain" class="block block-rounded bg-body-light animated fadeIn d-none">
    <div class="block-header">
      <h3 class="block-title">Add a new Domain</h3>
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
      <form action="be_pages_hosting_dashboard.php" method="POST" onsubmit="return false;">
        <div class="row g-sm items-push">
          <div class="col-md-6">
            <input type="text" class="form-control" id="example-hosting-domain" name="example-hosting-domain" placeholder="example.com">
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-alt-secondary w-100">
              <i class="fa fa-arrows-alt-h opacity-50 me-1"></i> Transfer
            </button>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-alt-primary w-100">
              <i class="fa fa-plus opacity-50 me-1"></i> Register
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
          <h3 class="h5 fw-bold mb-2">
            <i class="fa fa-circle text-success me-1"></i> example.com
          </h3>
          <p class="fs-sm mb-2">
            <a class="me-1 mb-1" href="javascript:void(0)">DNS</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Visit</a>
            <a class="me-1 mb-1" href="javascript:void(0)">WebFTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">FTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Add IP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Email</a>
          </p>
          <p class="fs-sm text-muted mb-0">
            Expires on 15th June, 2030
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
          <h3 class="h5 fw-bold mb-2">
            <i class="fa fa-circle text-success me-1"></i> example.co.uk
          </h3>
          <p class="fs-sm mb-2">
            <a class="me-1 mb-1" href="javascript:void(0)">DNS</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Visit</a>
            <a class="me-1 mb-1" href="javascript:void(0)">WebFTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">FTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Add IP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Email</a>
          </p>
          <p class="fs-sm text-muted mb-0">
            Expires on 12th October, 2027
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
          <h3 class="h5 fw-bold mb-2">
            <i class="fa fa-circle text-warning me-1"></i> example.io
          </h3>
          <p class="fs-sm mb-2">
            <a class="me-1 mb-1" href="javascript:void(0)">DNS</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Visit</a>
            <a class="me-1 mb-1" href="javascript:void(0)">WebFTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">FTP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Add IP</a>
            <a class="me-1 mb-1" href="javascript:void(0)">Email</a>
          </p>
          <p class="fs-sm text-muted mb-0">
            <a class="fw-semibold text-danger" href="javascript:void(0)">Expires in 1 week - Renew Today</a>
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
  <!-- END Domains -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
