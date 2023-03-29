<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_dark = true;
$cb->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-gd-dusk">
  <div class="bg-black-25">
    <div class="content content-top content-full text-center">
      <div class="mb-3">
        <a class="img-link" href="be_pages_ecom_customer.php">
          <?php $cb->get_avatar(15, '', 64, 'img-thumb'); ?>
        </a>
      </div>
      <h1 class="h3 text-white fw-bold mb-2">
        John Smith <i class="fa fa-star text-white-75 ms-1"></i>
      </h1>
      <h2 class="h5 text-white-75">
        Premium Member with <a class="text-primary-lighter link-fx" href="javascript:void(0)">39 Orders</a>
      </h2>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-bottom">
  <div class="content py-1 text-center">
    <nav class="breadcrumb bg-body-light py-2 mb-0">
      <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
      <a class="breadcrumb-item" href="javascript:void(0)">Customers</a>
      <span class="breadcrumb-item active">John Smith</span>
    </nav>
  </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
  <!-- Overview -->
  <h2 class="content-heading">Overview</h2>
  <div class="row">
    <!-- Orders -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-chart-line fa-2x opacity-25"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">39</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Orders</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Orders -->

    <!-- In Cart -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-shopping-cart fa-2x opacity-25"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0">3</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">In Cart</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END In Cart -->

    <!-- Edit Customer -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-user fa-2x opacity-25"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-info">
              <i class="fa fa-pencil-alt"></i>
            </div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Edit Customer</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Edit Customer -->

    <!-- Remove Customer -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-user fa-2x opacity-25"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-danger">
              <i class="fa fa-times"></i>
            </div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Remove Customer</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Remove Customer -->
  </div>
  <!-- END Overview -->

  <!-- Addresses -->
  <h2 class="content-heading">Addresses</h2>
  <div class="row">
    <!-- Billing Address -->
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Billing Address</h3>
        </div>
        <div class="block-content">
          <div class="fs-lg mb-1">John Smith</div>
          <address>
            5110 8th Ave<br>
            New York 11220<br>
            United States<br><br>
            <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
            <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
          </address>
        </div>
      </div>
    </div>
    <!-- END Billing Address -->

    <!-- Shipping Address -->
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Shipping Address</h3>
        </div>
        <div class="block-content">
          <div class="fs-lg mb-1">John Smith</div>
          <address>
            5110 8th Ave<br>
            New York 11220<br>
            United States<br><br>
            <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
            <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
          </address>
        </div>
      </div>
    </div>
    <!-- END Shipping Address -->
  </div>
  <!-- END Addresses -->

  <!-- Cart -->
  <h2 class="content-heading">Cart</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <!-- Products Table -->
      <table class="table table-borderless table-striped mb-0">
        <thead>
          <tr>
            <th style="width: 100px;">ID</th>
            <th class="d-none d-sm-table-cell" style="width: 120px;">Status</th>
            <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
            <th>Product</th>
            <th class="d-none d-md-table-cell">Category</th>
            <th class="d-none d-sm-table-cell text-end">Value</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 4; $i++) { ?>
            <tr>
              <td>
                <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.<?php echo 425 - $i; ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php if (rand(0, 1) == 1) { ?>
                  <span class="badge bg-success">Available</span>
                <?php } else { ?>
                  <span class="badge bg-danger">Out of Stock</span>
                <?php } ?>
              </td>
              <td class="d-none d-sm-table-cell">
                2017/09/<?php echo 28 - $i; ?>
              </td>
              <td>
                <a href="be_pages_ecom_product_edit.php">Product #<?php echo 25 - $i; ?></a>
              </td>
              <td class="d-none d-md-table-cell">
                <?php
                // Category seed data
                $be_ecom_cat = array(
                    '0' => 'Video Games',
                    '1' => 'Electronics',
                    '2' => 'Mobile Phones',
                    '3' => 'House',
                    '4' => 'Hobby',
                    '5' => 'Auto - Moto',
                    '6' => 'Kids',
                    '7' => 'Health',
                    '8' => 'Fashion'
                );
                ?>
                <a href="be_pages_ecom_products.php"><?php echo $be_ecom_cat[rand(0, 8)]; ?></a>
              </td>
              <td class="d-none d-sm-table-cell text-end">$<?php echo rand(10, 99); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- END Products Table -->
    </div>
  </div>
  <!-- END Cart -->

  <!-- Past Orders -->
  <h2 class="content-heading">Past Orders</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <!-- Orders Table -->
      <table class="table table-borderless table-striped mb-0">
        <thead>
          <tr>
            <th style="width: 100px;">ID</th>
            <th style="width: 120px;">Status</th>
            <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
            <th class="d-none d-sm-table-cell">Customer</th>
            <th class="d-none d-sm-table-cell text-end">Value</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 6; $i++) { ?>
            <tr>
              <td>
                <a class="fw-semibold" href="be_pages_ecom_order.php">ORD.<?php echo rand(100, 999); ?></a>
              </td>
              <td>
                <span class="badge bg-success">Completed</span>
              </td>
              <td class="d-none d-sm-table-cell">
                2017/10/<?php echo 28 - $i; ?>
              </td>
              <td class="d-none d-sm-table-cell">
                <a href="be_pages_ecom_customer.php">John Smith</a>
              </td>
              <td class="d-none d-sm-table-cell text-end">$<?php echo rand(100, 999); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- END Orders Table -->
    </div>
  </div>
  <!-- END Past Orders -->

  <!-- Private Notes -->
  <h2 class="content-heading">Private Notes</h2>
  <div class="block block-rounded">
    <div class="block-content">
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p class="mb-0"><i class="fa fa-info-circle me-1"></i> This note is only for internal use and will not be displayed to the customer.</p>
      </div>
      <form action="be_pages_ecom_customer.php" method="POST" onsubmit="return false;">
        <div class="mb-2">
          <textarea class="form-control" id="ecom-customer-note" name="ecom-customer-note" placeholder="Add a private note.." rows="4"></textarea>
        </div>
        <div class="mb-4">
          <button type="submit" class="btn btn-alt-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Private Notes -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>