<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">
      Add New Listing
    </h2>
    <h3 class="fs-base fw-medium text-muted mb-0">
      This is the 7th property you are adding to your portfolio.
    </h3>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <form action="be_pages_real_estate_listing_new.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <!-- Photos -->
        <h2 class="content-heading">Photos</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Add nice and clean photos to better showcase your property
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="re-listing-photos" class="form-label">Choose files</label>
              <input class="form-control" type="file" id="re-listing-photos" name="re-listing-photos" multiple>
            </div>
          </div>
        </div>
        <!-- END Photos -->

        <!-- Vital Info -->
        <h2 class="content-heading">Vital Info</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Pay extra attention since this is the data which customers will see first.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="re-listing-name">Name</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-name" name="re-listing-name" placeholder="eg Brand New Apartment">
            </div>
            <div class="mb-4">
              <label class="form-label" for="re-listing-address">Address</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="re-listing-address" placeholder="eg Street Name 45, NY">
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-status">Status</label>
                <select class="form-select form-control-lg" id="re-listing-status" name="re-listing-status">
                  <option value="0">Please select</option>
                  <option value="sale">For Sale</option>
                  <option value="rent">For Rent</option>
                  <option value="unavailable">Unavailable</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-price">Price</label>
                <input type="text" class="form-control form-control-lg" id="re-listing-price" name="re-listing-price" placeholder="eg $250,000">
              </div>
            </div>
          </div>
        </div>
        <!-- END Vital Info -->

        <!-- Additional Info -->
        <h2 class="content-heading">Additional Info</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Add more details to make your property more appealing and interesting
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="re-listing-description">Description</label>
              <textarea class="form-control form-control-lg" id="re-listing-description" name="re-listing-description" rows="8" placeholder="How old is it? Which are its key features?"></textarea>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-bedrooms">Bedrooms</label>
                <select class="form-select form-control-lg" id="re-listing-bedrooms" name="re-listing-bedrooms">
                  <option value="0">Please select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10plus">10+</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-bathrooms">Bathrooms</label>
                <select class="form-select form-control-lg" id="re-listing-bathrooms" name="re-listing-bathrooms">
                  <option value="0">Please select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10plus">10+</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-parking">Parking</label>
                <select class="form-select form-control-lg" id="re-listing-parking" name="re-listing-parking">
                  <option value="0">Please select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10plus">10+</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-heating">Heating</label>
                <select class="form-select form-control-lg" id="re-listing-heating" name="re-listing-heating">
                  <option value="0">Please select</option>
                  <option value="electricity">Electricity</option>
                  <option value="gas">Gas</option>
                  <option value="unavailable">Unavailable</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-size">Size (in sq.ft.)</label>
                <input type="text" class="form-control form-control-lg" id="re-listing-size" name="re-listing-size" placeholder="eg 300">
              </div>
            </div>
          </div>
        </div>
        <!-- END Additional Info -->

        <!-- Contact Info -->
        <h2 class="content-heading">Contact Info</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              How can your customers reach you?
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-email">Email</label>
                <input type="text" class="form-control form-control-lg" id="re-listing-email" name="re-listing-email">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <label class="form-label" for="re-listing-phone">Phone</label>
                <input type="text" class="form-control form-control-lg" id="re-listing-phone" name="re-listing-phone">
              </div>
            </div>
          </div>
        </div>
        <!-- END Contact Info -->

        <!-- Form Submission -->
        <div class="row items-push">
          <div class="col-lg-7 offset-lg-4">
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">
                <i class="fa fa-plus opacity-50 me-1"></i>
                Add Listing
              </button>
            </div>
          </div>
        </div>
        <!-- END Form Submission -->
      </form>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
