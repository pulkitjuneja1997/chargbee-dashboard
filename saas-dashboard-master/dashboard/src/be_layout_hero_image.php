<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->inc_footer = false;
$cb->l_header_fixed = false;
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg');">
  <div class="hero bg-primary-dark-op">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="display-4 fw-bold text-white mb-2">
          Codebase
        </h1>
        <h2 class="fw-normal text-white-75 mb-5">
          It’s Time to Create Your Next Amazing Project
        </h2>
        <a class="btn btn-primary rounded-pill px-4 py-2" href="be_layout_hero_image.php">
          <i class="si si-energy opacity-50 me-1"></i> Get Started
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>