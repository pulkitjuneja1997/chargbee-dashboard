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
  <div class="block block-rounded">
    <div class="block-content text-center">
      <p>
        Your main content behind your onboarding modal..
      </p>
    </div>
  </div>

  <!-- Dummy content -->
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <!-- END Dummy content -->

  <!-- Onboarding Modal functionality is initialized in js/pages/be_comp_onboarding.min.js which was auto compiled from _js/pages/be_comp_onboarding.js -->
  <div class="modal fade" id="modal-onboarding" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header justify-content-end">
            <div class="block-options">
              <a class="fw-semibold text-danger" href="#" data-bs-dismiss="modal" aria-label="Close">
                Skip Intro
              </a>
            </div>
          </div>
          <div class="block-content block-content-full">
            <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
              <div class="pb-5">
                <div class="row justify-content-center text-center">
                  <div class="col-md-10 col-lg-8">
                    <i class="fa fa-fire fa-4x text-primary"></i>
                    <h3 class="fs-2 mt-3">Welcome to Codebase!</h3>
                    <p class="text-muted">
                      This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                    </p>
                    <button type="button" class="btn btn-alt-primary mb-2 mx-1" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                      <i class="fa fa-arrow-right opacity-50 me-1"></i>
                      Key features
                    </button>
                  </div>
                </div>
              </div>
              <div class="slick-slide pb-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-8">
                    <h3 class="fs-2 mb-2">Backup</h3>
                    <p class="text-muted">
                      Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                    </p>
                    <h3 class="fs-2 mb-2">Invoices</h3>
                    <p class="text-muted">
                      They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                    </p>
                    <div class="text-center">
                      <button type="button" class="btn btn-alt-primary mb-2 mx-1" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                        <i class="fa fa-arrow-right opacity-50 me-1"></i>  
                        Complete Profile
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slick-slide pb-5">
                <div class="row justify-content-center text-center">
                  <div class="col-md-10 col-lg-8">
                    <i class="si si-note fa-4x text-primary"></i>
                    <h3 class="fs-2 mt-3">Finally, let us know your name</h3>
                    <form class="push">
                      <input type="text" class="form-control form-control-lg py-3 border-2" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                    </form>
                    <button type="button" class="btn btn-primary mb-2 mx-1" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fa fa-check opacity-50 me-1"></i>  
                      Get Started
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Onboarding Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Slick Slider plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick-carousel/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_onboarding.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>