<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick-carousel/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick-carousel/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">Project X <small>Web Design and Development</small></h2>
  <div class="block block-rounded overflow-hidden">
    <!-- Navigation -->
    <div class="block-content block-content-full border-bottom d-flex justify-content-between align-items-center">
      <a class="btn btn-primary" href="be_pages_generic_project_list.php">
        <i class="fa fa-arrow-left opacity-50 me-1 "></i> All Projects
      </a>
      <div class="btn-group">
        <a class="btn btn-alt-secondary" href="javascript:void(0)">
          <i class="fa fa-chevron-left opacity-50 me-1"></i>
        </a>
        <a class="btn btn-alt-secondary" href="javascript:void(0)">
          <i class="fa fa-chevron-right opacity-50 ms-1"></i>
        </a>
      </div>
    </div>
    <!-- END Navigation -->

    <!-- Project -->
    <div class="block-content block-content-full">
      <div class="row py-3">
        <div class="col-sm-6">
          <!-- Image Slider (.js-slider class is initialized in Helpers.jqSlick()) -->
          <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
          <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
            <div>
              <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project Promo 1">
            </div>
            <div>
              <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project Promo 2">
            </div>
            <div>
              <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project Promo 3">
            </div>
          </div>
          <!-- END Image Slider -->

          <!-- Project Info -->
          <table class="table table-striped table-borderless mt-3">
            <tbody>
              <tr>
                <td class="fw-semibold">Client</td>
                <td>Company S.A.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Budget</td>
                <td>$10.000</td>
              </tr>
              <tr>
                <td class="fw-semibold">Category</td>
                <td>Web Development</td>
              </tr>
              <tr>
                <td class="fw-semibold">Website</td>
                <td>
                  <a href="javascript:void(0)">https://example.com/</a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- END Project Info -->
        </div>
        <div class="col-sm-6">
          <!-- Project Description -->
          <h3 class="mb-2">Introduction</h3>
          <?php $cb->get_text('small'); ?>
          <h3 class="mt-3 mb-2">Research</h3>
          <?php $cb->get_text('small', 2); ?>
          <!-- END Project Description -->
        </div>
      </div>
    </div>
    <!-- END Project -->

    <!-- Key Features -->
    <div class="block-content-full border-top">
      <div class="row text-center py-4">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-primary-lighter push">
            <i class="si si-rocket fa-2x text-primary"></i>
          </div>
          <h5 class="mb-0">Bootstrap Powered</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-pulse-lighter push">
            <i class="si si-screen-smartphone fa-2x text-pulse"></i>
          </div>
          <h5 class="mb-0">Fully Responsive</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-corporate-lighter push">
            <i class="si si-speech fa-2x text-corporate"></i>
          </div>
          <h5 class="mb-0">AI Powered</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-warning-light push">
            <i class="si si-moustache fa-2x text-warning"></i>
          </div>
          <h5 class="mb-0">Clean Code</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-earth-lighter push">
            <i class="si si-globe-alt fa-2x text-earth"></i>
          </div>
          <h5 class="mb-0">Global</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-elegance-lighter push">
            <i class="si si-earphones-alt fa-2x text-elegance"></i>
          </div>
          <h5 class="mb-0">Support Center</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-info-light push">
            <i class="si si-graduation fa-2x text-info"></i>
          </div>
          <h5 class="mb-0">Smart UI</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-gray-light push">
            <i class="si si-book-open fa-2x text-gray-dark"></i>
          </div>
          <h5 class="mb-0">Ready Pages</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-danger-light push">
            <i class="si si-energy fa-2x text-danger"></i>
          </div>
          <h5 class="mb-0">Super Fast</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-success-light push">
            <i class="si si-speedometer fa-2x text-success"></i>
          </div>
          <h5 class="mb-0">Extra Smooth</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-warning-light push">
            <i class="si si-settings fa-2x text-warning"></i>
          </div>
          <h5 class="mb-0">Services</h5>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded item-2x mx-auto bg-flat-lighter push">
            <i class="si si-support fa-2x text-flat"></i>
          </div>
          <h5 class="mb-0">Support</h5>
        </div>
      </div>
    </div>
    <!-- END Key Features -->

    <!-- Testimonial -->
    <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo30@2x.jpg');">
      <div class="block-content block-content-full bg-primary-dark-op text-center">
        <div class="py-4">
          <div class="py-2">
            <?php $cb->get_avatar(10, '', 96, true); ?>
          </div>
          <div class="row justify-content-center py-2">
            <div class="col-md-8">
              <div class="mb-2">
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
              </div>
              <h3 class="fw-bold text-white mb-2">Highly recommended! <i class="fa fa-thumbs-up"></i></h3>
              <p class="fs-lg text-white-75">We couldn't wish for a better team to take off our project! Professional team that will help you bring your ideas to life in the most inspiring and overwhelming way. Looking forward working with you again! Thank you very much!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Testimonial -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Slick Slider plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick-carousel/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider Plugin) -->
<script>Codebase.helpersOnLoad(['jq-slick']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>