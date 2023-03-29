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
<div class="bg-primary">
  <div class="hero bg-black-5">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="display-4 fw-bold text-white mb-2">
          Codebase
        </h1>
        <h2 class="fw-normal text-white-75 mb-5">
          Imagine, Design and Create.
        </h2>
        <a class="btn btn-alt-primary rounded-pill px-4 py-2" href="be_layout_hero_color.php">
          <i class="fa fa-rocket opacity-50 me-1"></i> Let's go!
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>