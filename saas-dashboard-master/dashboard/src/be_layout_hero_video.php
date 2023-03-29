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
<!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
<div class="bg-video" data-vide-bg="<?php echo $cb->assets_folder; ?>/media/videos/city_night" data-vide-options="posterType: jpg">
  <div class="hero bg-black-50">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="display-4 fw-bold text-white mb-2">Codebase</h1>
        <h2 class="fw-normal text-white-75 mb-5">Amazing features to Get Started</h2>
        <a class="btn btn-primary rounded-pill px-4 py-2" href="be_layout_hero_video.php">
        <i class="si si-user opacity-50 me-1"></i> Apply to Join
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Vide plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-vide/jquery.vide.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>