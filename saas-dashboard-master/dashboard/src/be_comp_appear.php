<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Appear ([data-toggle="appear"] is initialized in Helpers.jqAppear()) -->
  <!-- For more info and examples you can check out https://github.com/bas2k/jquery.appear -->
  <h2 class="content-heading">Appear <small>Animate elements and make them visible on scrolling</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-primary text-white mx-auto">
              <i class="fa fa-car fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">By Car</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-elegance text-white mx-auto">
              <i class="fa fa-plane fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">By Aeroplane</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-corporate text-white mx-auto">
              <i class="fa fa-train fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">By Train</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Appear -->

  <!-- Animation Classes -->
  <h2 class="content-heading">Animated <small>You can use the animation classes of your choice</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-warning text-white mx-auto">
              <i class="si si-briefcase fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Projects</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-info text-white mx-auto">
              <i class="si si-game-controller fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Games</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flash">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-success text-white mx-auto">
              <i class="si si-music-tone fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Music</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Animation Classes -->

  <!-- Offset -->
  <h2 class="content-heading">Offset <small>You can add an offset, to make the element appear sooner or later</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-elegance-lighter text-white mx-auto">
              <i class="si si-directions text-elegance fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Directions</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="200">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-earth-lighter text-white mx-auto">
              <i class="si si-energy text-earth fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Energy</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-400">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-pulse-lighter text-white mx-auto">
              <i class="si si-chemistry text-pulse fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Lab</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Offset -->

  <!-- Timeouts -->
  <h2 class="content-heading">Timeouts <small>You can delay the animation, creating nice effects</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-success-light text-white mx-auto">
              <i class="si si-bar-chart text-success fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Statistics</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="200">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-danger-light text-white mx-auto">
              <i class="si si-book-open text-danger fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Books</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="400">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="item item-2x item-circle bg-primary-lighter text-white mx-auto">
              <i class="si si-badge text-primary fa-2x"></i>
            </div>
            <div class="h4 pt-3 mb-0">Awards</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Timeouts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Appear plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-appear/jquery.appear.min.js'); ?>

<!-- Page JS Helpers (jQuery Appear plugin) -->
<script>Codebase.helpersOnLoad(['jq-appear']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>