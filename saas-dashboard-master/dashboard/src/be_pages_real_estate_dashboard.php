<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">
      Property Management
    </h2>
    <h3 class="fs-base fw-medium text-muted mb-0">
      You currently have 6 properties! <a href="be_pages_real_estate_listing_new.php">Add a new one</a>
    </h3>
  </div>
  <div class="row">
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(35, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">Downtown Apartment</h4>
          <h5 class="fs-1 fw-light mb-1">$350,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 965 Westwood Avenue, NY
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>2</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>1</strong> Bathroom
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(36, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">Luxury House</h4>
          <h5 class="fs-1 fw-light mb-1">$1,230,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 1333 Stanley Avenue, MA
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>4</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>2</strong> Bathrooms
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(37, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">Detached House</h4>
          <h5 class="fs-1 fw-light mb-1">$770,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 725 Berkley Street, PA
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>6</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>3</strong> Bathrooms
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(38, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">Renovated Cottage</h4>
          <h5 class="fs-1 fw-light mb-1">$220,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 961 South Street, TX
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>2</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>1</strong> Bathroom
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(40, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">Renovated Apartment</h4>
          <h5 class="fs-1 fw-light mb-1">$490,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 3034 Coventry Court, NY
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>2</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>1</strong> Bathroom
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Property -->
      <div class="block block-rounded">
        <div class="block-content p-0 overflow-hidden">
          <a class="img-link" href="be_pages_real_estate_listing.php">
            <?php $cb->get_photo(39, false, 'img-fluid rounded-top'); ?>
          </a>
        </div>
        <div class="block-content border-bottom">
          <h4 class="fs-5 mb-2">New Apartment</h4>
          <h5 class="fs-1 fw-light mb-1">$680,000</h5>
          <p class="text-muted">
            <i class="fa fa-map-pin me-1"></i> 1890 Locust View Drive, CA
          </p>
        </div>
        <div class="block-content border-bottom">
          <div class="row">
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
                <strong>2</strong> Bedrooms
              </p>
            </div>
            <div class="col-6">
              <p>
                <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
                <strong>1</strong> Bathroom
              </p>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-8">
              <a class="btn btn-sm btn-primary w-100" href="be_pages_real_estate_listing.php">
                More Info
              </a>
            </div>
            <div class="col-4">
              <a class="btn btn-sm btn-alt-primary w-100" href="be_pages_real_estate_listing_new.php">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Property -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
