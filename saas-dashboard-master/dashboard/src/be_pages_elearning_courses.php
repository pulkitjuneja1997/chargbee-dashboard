<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
        <h1 class="fw-bold text-white mb-2">Learn new creative skills today</h1>
        <h2 class="h4 fw-normal text-white-75">Join us today and gain access to over 15.000 online courses!</h2>
        <a class="btn rounded-pill btn-alt-success mb-2" href="javascript:void(0)">
          <i class="fa fa-user-circle me-1"></i> Subscribe from $19/month
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Courses -->
<div class="content">
  <!-- Featured Courses -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>
      <i class="fa fa-fw fa-star opacity-50 me-1"></i> Featured Courses
    </span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">
      View More..
    </button>
  </h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$14</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-pulse text-pulse-lighter mx-auto my-3">
            <i class="fab fa-html5"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            258 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">10 lessons &bull; 5 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Learn HTML5 in 10 easy steps</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$29</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-info text-info-light mx-auto my-3">
            <i class="fab fa-css3"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            75 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">15 lessons &bull; 11 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Be a pro with CSS3 in one week</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$24</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-corporate text-corporate-lighter mx-auto my-3">
            <i class="fa fa-video"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star-half-alt"></i>
          </div>
          <div class="fs-sm text-muted">
            985 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">8 lessons &bull; 3 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Be a Youtuber today</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$14</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-elegance text-elegance-lighter mx-auto my-3">
            <i class="fa fa-briefcase"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star-half-alt"></i>
          </div>
          <div class="fs-sm text-muted">
            325 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">25 lessons &bull; 17 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Marketing Tips 101</div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Featured Courses -->

  <!-- Latest Courses -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>
      <i class="fa fa-fw fa-book-open opacity-50 me-1"></i> Latest Courses
    </span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">
      View More..
    </button>
  </h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$34</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-corporate text-corporate-lighter mx-auto my-3">
            <i class="far fa-image"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star-half-alt"></i>
          </div>
          <div class="fs-sm text-muted">
            752 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">35 lessons &bull; 25 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">SVG Bible</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$9</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-info text-info-light mx-auto my-3">
            <i class="fa fa-video"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="far fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            125 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">7 lessons &bull; 3 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Better Screencasts in 3 hours</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$79</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-info text-info-light mx-auto my-3">
            <i class="fab fa-css3"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            1385 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">49 lessons &bull; 35 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">CSS3 for professionals</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$49</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-flat text-flat-lighter mx-auto my-3">
            <i class="fa fa-code"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star-half-alt"></i>
          </div>
          <div class="fs-sm text-muted">
            1485 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">28 lessons &bull; 23 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">React for beginners</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$26</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-gray-dark text-gray-lighter mx-auto my-3">
            <i class="fa fa-pencil-alt"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            582 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">29 lessons &bull; 16 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Marketing for bloggers</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$14</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-pulse text-pulse-lighter mx-auto my-3">
            <i class="fab fa-html5"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            789 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">12 lessons &bull; 7 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">HTML5 for accessibility</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$69</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-earth text-earth-lighter mx-auto my-3">
            <i class="far fa-money-bill-alt"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            1899 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">12 lessons &bull; 9 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Landing Page Conversions</div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center h-100 mb-0" href="be_pages_elearning_course.php">
        <div class="ribbon-box">$49</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-danger text-danger-light mx-auto my-3">
            <i class="fa fa-code"></i>
          </div>
          <div class="text-warning mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted">
            1258 reviews
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fs-sm text-muted">30 lessons &bull; 22 hours</div>
        </div>
        <div class="block-content block-content-full">
          <div class="fw-semibold">Angular from scratch</div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Latest Courses -->
</div>
<!-- END Courses -->

<!-- Courses -->
<div class="content">
  <h2 class="content-heading">
    <i class="fa fa-fw fa-users opacity-50 me-1"></i> Learn from the best instructors worldwide
  </h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(2); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-5 fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fs-6 text-muted">Web Designer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-fw fab fa-twitter"></i>
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
          <?php $cb->get_avatar(5); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-5 fw-semibold mb-0"><?php $cb->get_name('female'); ?></div>
          <div class="fs-6 text-muted">Web Developer</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-fw fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="block block-rounded text-center">
        <div class="block-content">
          <?php $cb->get_avatar(10); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="fs-5 fw-semibold mb-0"><?php $cb->get_name('male'); ?></div>
          <div class="fs-6 text-muted">Marketing</div>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-fw fab fa-twitter"></i>
          </a>
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Subscribe Today -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-white-90">
    <div class="content">
      <div class="py-5 text-center">
        <h3 class="fw-bold text-black-75 mb-2">Join Us Today</h3>
        <h4 class="fw-medium text-muted mb-4">Are you ready to get started?</h4>
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">Subscribe for only $19/month</a>
      </div>
    </div>
  </div>
</div>
<!-- END Subscribe Today -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
