<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
<!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
<div class="content">
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">
      Downtown Apartment
    </h2>
    <h3 class="fs-base fw-medium text-muted mb-0">
      <i class="fa fa-map-pin me-1"></i> 965 Westwood Avenue, NY
    </h3>
  </div>
  <div class="block block-rounded block-fx-shadow">
    <div class="block-content p-0 bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo35@2x.jpg');">
      <div class="px-3 py-8 bg-black-50 text-center rounded-top">
        <h5 class="fs-1 fw-light text-white mb-2">$350,000</h5>
        <span class="badge bg-primary text-uppercase fw-bold py-2 px-3">For Sale</span>
      </div>
    </div>
    <div class="block-content bg-body-light">
      <div class="row py-2">
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-bed opacity-50 me-1"></i>
            <strong>2</strong> Bedrooms
          </p>
        </div>
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-bath opacity-50 me-1"></i>
            <strong>1</strong> Bathroom
          </p>
        </div>
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-car opacity-50 me-1"></i>
            <strong>1</strong> Parking
          </p>
        </div>
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-expand-arrows-alt opacity-50 me-1"></i>
            <strong>310</strong> sq.ft.
          </p>
        </div>
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-fire opacity-50 me-1"></i> Electricity
          </p>
        </div>
        <div class="col-6 col-md-4">
          <p>
            <i class="fa fa-fw fa-globe opacity-50 me-1"></i>
            <strong>1</strong> Gbps
          </p>
        </div>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="row">
        <div class="col-md-6 order-md-2 py-3">
          <div class="row g-sm js-gallery img-fluid-100">
            <div class="col-6">
              <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo35@2x.jpg">
                <?php $cb->get_photo(35, false, 'img-fluid'); ?>
              </a>
            </div>
            <div class="col-6">
              <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo41@2x.jpg">
                <?php $cb->get_photo(41, false, 'img-fluid'); ?>
              </a>
            </div>
            <div class="col-6">
              <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo42@2x.jpg">
                <?php $cb->get_photo(42, false, 'img-fluid'); ?>
              </a>
            </div>
            <div class="col-6">
              <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo43@2x.jpg">
                <?php $cb->get_photo(43, false, 'img-fluid'); ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-1 py-3">
          <?php echo $cb->get_text('small', 4); ?>
        </div>
      </div>
    </div>
    <div class="block-content block-content-full border-top d-flex justify-content-between align-items-center">
      <a class="btn btn-alt-primary" href="javascript:void(0)">
        <i class="fa fa-envelope opacity-50 me-1"></i>
        <span>Get in touch</span>
      </a>
      <a class="btn btn-alt-danger" href="javascript:void(0)">
        <i class="far fa-fw fa-heart"></i>
      </a>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Codebase.helpersOnLoad(['jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
