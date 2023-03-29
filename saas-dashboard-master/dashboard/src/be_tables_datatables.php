<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css'); ?>
<?php $cb->get_css('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css'); ?>
<?php $cb->get_css('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">DataTables Plugin</h2>

  <!-- Dynamic Table Full -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Dynamic Table <small>Full</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell">Email</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 15%;">Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 21; $i++) { ?>
            <tr>
              <td class="text-center"><?php echo $i; ?></td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td class="d-none d-sm-table-cell">customer<?php echo $i; ?>@example.com</td>
              <td class="d-none d-sm-table-cell">
                <?php $cb->get_tag(); ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                  <i class="fa fa-user"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Full -->

  <!-- Dynamic Table with Export Buttons -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Dynamic Table <small>Export Buttons</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell">Email</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 15%;">Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 16; $i++) { ?>
            <tr>
              <td class="text-center"><?php echo $i; ?></td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td class="d-none d-sm-table-cell">customer<?php echo $i; ?>@example.com</td>
              <td class="d-none d-sm-table-cell">
                <?php $cb->get_tag(); ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                  <i class="fa fa-user"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table with Export Buttons -->

  <!-- Dynamic Table Full Pagination -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Dynamic Table <small>Full pagination</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell">Email</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 15%;">Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 16; $i++) { ?>
            <tr>
              <td class="text-center"><?php echo $i; ?></td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td class="d-none d-sm-table-cell">customer<?php echo $i; ?>@example.com</td>
              <td class="d-none d-sm-table-cell">
                <?php $cb->get_tag(); ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                  <i class="fa fa-user"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Full Pagination -->

  <!-- Dynamic Table Simple -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Dynamic Table <small>With only sorting and pagination</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables functionality is initialized with .js-dataTable-simple class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell">Email</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 15%;">Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 21; $i++) { ?>
            <tr>
              <td class="text-center"><?php echo $i; ?></td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td class="d-none d-sm-table-cell">customer<?php echo $i; ?>@example.com</td>
              <td class="d-none d-sm-table-cell">
                <?php $cb->get_tag(); ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                  <i class="fa fa-user"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Simple -->

  <!-- Dynamic Table Responsive -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Dynamic Table <small>DataTables Responsive Mode</small>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables functionality is initialized with .js-dataTable-responsive class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
        <thead>
          <tr>
            <th class="text-center"></th>
            <th>Name</th>
            <th>Email</th>
            <th style="width: 15%;">Access</th>
            <th class="text-center" style="width: 15%;">Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 21; $i++) { ?>
            <tr>
              <td class="text-center"><?php echo $i; ?></td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td>customer<?php echo $i; ?>@example.com</td>
              <td>
                <?php $cb->get_tag(); ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                  <i class="fa fa-user"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Dynamic Table Responsive -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for DataTables plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/dataTables.buttons.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-jszip/jszip.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/buttons.print.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/buttons.html5.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>