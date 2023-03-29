<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-primary">
  <div class="bg-black-25">
    <div class="content content-top text-center">
      <div class="py-5">
        <h1 class="fw-bold text-white mb-2">Team</h1>
        <h2 class="h4 fw-normal text-white-75">Get to know our passionate team.</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
  <!-- Team -->
  <div class="row">
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(1, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fw-medium text-muted">Founder</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(10, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('male'); ?></div>
          <div class="fw-medium text-muted">Co-Founder</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(14, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('male'); ?></div>
          <div class="fw-medium text-muted">Marketing</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(12, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fw-medium text-muted">Developer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-github"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(13, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('male'); ?></div>
          <div class="fw-medium text-muted">Developer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-github"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(9, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('male'); ?></div>
          <div class="fw-medium text-muted">Designer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(6, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fw-medium text-muted">Designer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(3, '', 96); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fw-medium text-muted">Customer Support</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <img class="img-avatar img-avatar96" src="<?php echo $cb->assets_folder; ?>/media/avatars/avatar0.jpg" alt="Your photo">
        </div>
        <div class="block-content block-content-full">
          <div class="fs-lg fw-semibold mb-0">You!</div>
          <div class="fw-medium text-muted">Customer Support</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn rounded-pill btn-alt-primary" href="be_pages_generic_contact.php">
            <i class="fa fa-pencil-alt opacity-50 me-1"></i> Apply Today!
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Team -->

  <!-- Info -->
  <div class="block block-rounded">
    <div class="block-content">
      <div class="row">
        <div class="col-md-4 py-4">
          <h3 class="h4 fw-bold text-uppercase pb-2 border-bottom border-3">Who We <span class="text-primary">Are</span>.</h3>
          <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
        </div>
        <div class="col-md-4 py-4">
          <h3 class="h4 fw-bold text-uppercase pb-2 border-bottom border-3">What We <span class="text-primary">Do</span>.</h3>
          <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
        </div>
        <div class="col-md-4 py-4">
          <h3 class="h4 fw-bold text-uppercase pb-2 border-bottom border-3">Why Join <span class="text-primary">Us</span>.</h3>
          <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
        </div>
        <div class="col-md-12 py-4">
          <h3 class="h4 fw-bold text-uppercase text-center pb-2 border-bottom border-3 mb-0">Quick <span class="text-primary">Statistics</span>.</h3>

          <!-- Stats -->
          <div class="row text-center">
            <div class="col-sm-6 col-md-3 py-4">
              <div class="mb-3">
                <i class="si si-briefcase fa-3x text-primary"></i>
              </div>
              <div class="fs-1 fw-bold mb-1">9600+</div>
              <div class="fw-semibold text-muted text-uppercase">Projects</div>
            </div>
            <div class="col-sm-6 col-md-3 py-4">
              <div class="mb-3">
                <i class="si si-users fa-3x text-primary"></i>
              </div>
              <div class="fs-1 fw-bold mb-1">760+</div>
              <div class="fw-semibold text-muted text-uppercase">Clients</div>
            </div>
            <div class="col-sm-6 col-md-3 py-4">
              <div class="mb-3">
                <i class="si si-clock fa-3x text-primary"></i>
              </div>
              <div class="fs-1 fw-bold mb-1">88600+</div>
              <div class="fw-semibold text-muted text-uppercase">Hours</div>
            </div>
            <div class="col-sm-6 col-md-3 py-4">
              <div class="mb-3">
                <i class="si si-badge fa-3x text-primary"></i>
              </div>
              <div class="fs-1 fw-bold mb-1">60+</div>
              <div class="fw-semibold text-muted text-uppercase">Awards</div>
            </div>
          </div>
          <!-- END Stats -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Info -->
</div>
<!-- END Page Content -->

<!-- We are hiring -->
<div class="bg-body-dark">
  <div class="content">
    <div class="py-5 text-center">
      <h3 class="fw-bold mb-2">We Are Hiring!</h3>
      <h4 class="fw-normal text-muted mb-4">Would you like to join our team?</h4>
      <a class="btn btn-lg btn-primary" href="be_pages_generic_contact.php">Get In Touch</a>
    </div>
  </div>
</div>
<!-- END We are hiring -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>