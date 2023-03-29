<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/medical/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Quick Navigation -->
<div class="bg-body-dark">
  <div class="content">
    <div class="row">
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="far fa-envelope text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Inbox</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="fa fa-pencil-alt text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Profile</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="fa fa-wrench text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Settings</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="far fa-plus-square text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Patient</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="far fa-plus-square text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Event</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded text-center" href="javascript:void(0)">
          <div class="block-content px-2">
            <p class="mt-1 mb-3">
              <i class="far fa-plus-square text-gray fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Payment</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Quick Navigation -->

<!-- Page Content -->
<div class="content">
  <!-- Overview -->
  <div class="row">
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="far fa-user-circle fa-3x text-corporate"></i>
            </div>
            <div class="fs-4 fw-semibold mb-1">5 Patients</div>
            <div class="fw-medium text-muted">2 were added today!</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fa-calendar-alt fa-3x text-elegance"></i>
            </div>
            <div class="fs-4 fw-semibold mb-1">6 Appointments</div>
            <div class="fw-medium text-muted">4 are scheduled for today!</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fab fa-paypal fa-3x text-primary"></i>
            </div>
            <div class="fs-4 fw-semibold mb-1">2 Payments</div>
            <div class="fw-medium text-muted">Pending for tomorrow.</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Overview -->

  <!-- Patients -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Current Patients</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
          <thead>
            <tr>
              <th style="width: 100px;">ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Condition</th>
              <th>Actions</th>
              <th>Added</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">54874</a>
              </td>
              <td>
                <strong>Roy</strong>
              </td>
              <td>
                <strong>Obrien</strong>
              </td>
              <td>
                <span class="badge bg-success">Normal</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
              <td>
                <span class="text-muted">today</span>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">54873</a>
              </td>
              <td>
                <strong>Bobby</strong>
              </td>
              <td>
                <strong>Lane</strong>
              </td>
              <td>
                <span class="badge bg-info">Stable</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
              <td>
                <span class="text-muted">today</span>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">54872</a>
              </td>
              <td>
                <strong>Amanda</strong>
              </td>
              <td>
                <strong>Ray</strong>
              </td>
              <td>
                <span class="badge bg-danger">Critical</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
              <td>
                <span class="text-muted">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">54871</a>
              </td>
              <td>
                <strong>Rose</strong>
              </td>
              <td>
                <strong>Alvarado</strong>
              </td>
              <td>
                <span class="badge bg-warning">Pending..</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
              <td>
                <span class="text-muted">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">54870</a>
              </td>
              <td>
                <strong>Jose</strong>
              </td>
              <td>
                <strong>Fowler</strong>
              </td>
              <td>
                <span class="badge bg-info">Stable</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
              <td>
                <span class="text-muted">5 days ago</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Patients -->

  <!-- Appointments -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Appointments</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
          <thead>
            <tr>
              <th style="width: 100px;">ID</th>
              <th>Patient</th>
              <th>First time?</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36986</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 10:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36985</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 12:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36984</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 14:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36983</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-times-circle text-danger"></i>
              </td>
              <td>
                Today at 16:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36982</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Tomorrow at 08:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">36981</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <i class="fa fa-times-circle text-danger"></i>
              </td>
              <td>
                Tomorrow at 10:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-sync text-primary me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Appointments -->

  <!-- Payments -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Open Payments</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
          <thead>
            <tr>
              <th style="width: 100px;">ID</th>
              <th>Patient</th>
              <th>Invoice</th>
              <th>Due</th>
              <th>Actions</th>
              <th class="text-end">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">158214</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <a href="javascript:void(0)">
                  INV_158214.pdf
                </a>
              </td>
              <td>
                <span class="badge bg-primary">tomorrow</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
              <td class="text-end">
                $3.500,00
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">158213</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
              </td>
              <td>
                <a href="javascript:void(0)">
                  INV_158213.pdf
                </a>
              </td>
              <td>
                <span class="badge bg-primary">tomorrow</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
              <td class="text-end">
                $1.280,00
              </td>
            </tr>
            <tr>
              <td colspan="5" class="text-end">
                <strong class="text-uppercase">Total Due</strong>
              </td>
              <td class="text-end">
                <strong>$4.780,00</strong>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Payments -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>