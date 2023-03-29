<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/highlightjs/styles/github-gist.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html@2x.png');">
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
        <h1 class="fw-bold text-white mb-2">Learn HTML5 in 10 easy steps</h1>
        <h2 class="h4 fw-normal text-white-75">10 lessons &bull; 5 hours</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
    <a class="breadcrumb-item" href="be_pages_elearning_courses.php">Courses</a>
    <a class="breadcrumb-item" href="be_pages_elearning_course.php">Learn HTML</a>
    <span class="breadcrumb-item active">1.1 HTML5 Intro</span>
  </nav>
  <div class="row">
    <div class="col-xl-4">
      <!-- Subscribe -->
      <div class="block block-rounded">
        <div class="block-content">
          <a class="btn btn-lg btn-primary w-100 mb-2" href="javascript:void(0)">Subscribe from $19/month</a>
          <p class="text-center">or <a class="link-fx" href="javascript:void(0)">buy this course for $14</a></p>
        </div>
      </div>
      <!-- END Subscribe -->

      <!-- Instructor -->
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <i class="fa fa-fw fa-graduation-cap opacity-50"></i>
            Instructor
          </h3>
        </div>
        <div class="block-content block-content-full">
          <div class="push">
            <?php $cb->get_avatar(10); ?>
          </div>
          <div class="fw-semibold mb-1">John Doe</div>
          <div class="fs-sm text-muted">Web Designer</div>
        </div>
      </a>
      <!-- END Instructor -->

      <!-- Course Info -->
      <div class="block block-rounded">
        <div class="block-header block-header-default text-center">
          <h3 class="block-title">
            <i class="fa fa-fw fa-info opacity-50"></i>
            About
          </h3>
        </div>
        <div class="block-content">
          <div class="text-warning text-center mb-1">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
          <div class="fs-sm text-muted text-center mb-3">
            258 reviews
          </div>
          <table class="table table-borderless table-striped">
            <tbody>
              <tr>
                <td>
                  <i class="fa fa-fw fa-heart opacity-50 me-2"></i>
                  <span class="fs-sm">456 Favorites</span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-fw fa-calendar-alt opacity-50 me-2"></i>
                  <span class="fs-sm">1 week ago</span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-fw fa-tags opacity-50 me-2"></i>
                  <a class="link-fx fs-sm fw-medium" href="javascript:void(0)">HTML</a>,
                  <a class="link-fx fs-sm fw-medium" href="javascript:void(0)">CSS</a>,
                  <a class="link-fx fs-sm fw-medium" href="javascript:void(0)">JavaScript</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Course Info -->
    </div>
    <div class="col-xl-8">
      <!-- Lesson -->
      <div class="fs-lg p-4 bg-earth rounded text-white text-center push">
        <div class="mb-2">
          <i class="fa fa-2x fa-gift opacity-50"></i>
        </div>
        <h4 class="mb-1">
          This is a free preview!
        </h4>
        <p class="fs-sm fw-medium text-white mb-0">
          If you like it, you can subscribe or purchase this course for only $14!
        </p>
      </div>
      <div class="block block-rounded">
        <div class="block-content">
          <h3 >1.1 HTML5 Intro (free preview)</h3>
          <?php echo $cb->get_text('medium', 2); ?>
          <pre class="pre-sh push"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
          <?php echo $cb->get_text('medium', 2); ?>
          <div class="alert alert-warning fw-semibold text-center">
            <i class="fa fa-exclamation-triangle"></i> This is an attention message.
          </div>
          <?php echo $cb->get_text('medium', 2); ?>
          <pre class="pre-sh push"><code class="html">&lt;div id=&quot;id-name&quot; class=&quot;class-name&quot;&gt;
    &lt;!-- This is a comment --&gt;
&lt;/div&gt;</code></pre>
          <p class="fw-semibold">Things to do:</p>
          <ul class="fa-ul list list-simple-mini push">
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Make sure you are always closing your tags.
            </li>
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Keep writing markup to become more familiar.
            </li>
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Create your own projects.
            </li>
          </ul>
          <p class="alert alert-success fw-semibold text-center">
            <i class="fa fa-thumbs-up"></i> Congrats! Let's head up to the next lesson.
          </p>
        </div>
      </div>
      <!-- END Lesson -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<!-- Subscribe Today -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html@2x.png');">
  <div class="bg-white-90">
    <div class="content">
      <div class="py-5 text-center">
        <h3 class="fw-bold text-black-75 mb-2">Join Us Today</h3>
        <h4 class="fw-medium text-muted mb-4">Are you ready to learn HTML in under 5 hours?</h4>
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">Subscribe for only $19 per month</a>
      </div>
    </div>
  </div>
</div>
<!-- END Subscribe Today -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>

<!-- Page JS Helpers (Highlight.js Plugin) -->
<script>Codebase.helpersOnLoad(['js-highlightjs']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
