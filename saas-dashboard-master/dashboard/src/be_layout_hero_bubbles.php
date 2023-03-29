<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->inc_footer = false;
$cb->l_sidebar_dark = true;
$cb->l_header_fixed = false;
$cb->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-body-extra-light hero-bubbles">
  <span class="hero-bubble hero-bubble-lg bg-primary" style="top: 5%; left: 20%;" style="top: 5%; left: 20%;"></span>
  <span class="hero-bubble bg-success" style="top: 5%; left: 90%;"></span>
  <span class="hero-bubble hero-bubble-sm bg-corporate" style="top: 10%; left: 40%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-pulse" style="top: 20%; left: 75%;"></span>
  <span class="hero-bubble bg-danger" style="top: 30%; left: 10%;"></span>
  <span class="hero-bubble bg-warning" style="top: 60%; left: 25%;"></span>
  <span class="hero-bubble bg-info" style="top: 60%; left: 75%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-flat" style="top: 80%; left: 50%;"></span>
  <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 75%; left: 10%;"></span>
  <span class="hero-bubble bg-elegance" style="top: 90%; left: 90%;"></span>
  <div class="hero">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="display-4 fw-bold mb-2">
          Codebase
        </h1>
        <h2 class="fw-normal text-muted mb-5">
          Imagine, Design and Create.
        </h2>
        <a class="btn btn-primary rounded-pill px-4 py-2" href="be_layout_hero_bubbles.php">
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