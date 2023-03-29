<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Tooltips -->
  <!-- Bootstrap Tooltip (data-bs-toggle="tooltip" and .js-bs-tooltip class are initialized in Helpers.bsTooltip()) -->
  <!-- For advanced Tooltip usage you can check out https://getbootstrap.com/docs/5.0/components/tooltips/ -->
  <h2 class="content-heading">Tooltips</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Examples</h3>
    </div>
    <div class="block-content">
      <!-- Default -->
      <h2 class="content-heading">Default</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Show tooltips on hover
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top Tooltip">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Right Tooltip">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bottom Tooltip">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Left Tooltip">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Default -->

      <!-- Click Triggered -->
      <h2 class="content-heading">Click Triggered</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Show your tooltips on click
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="top" title="Top Tooltip">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="right" title="Right Tooltip">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="bottom" title="Bottom Tooltip">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="left" title="Left Tooltip">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Click Triggered -->

      <!-- Animation -->
      <h2 class="content-heading">Animation</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can enable a fade animation to your tooltips
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Top Tooltip">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="right" title="Right Tooltip">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="bottom" title="Bottom Tooltip">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="left" title="Left Tooltip">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Animation -->

      <!-- HTML -->
      <h2 class="content-heading">HTML</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can add HTML in your tooltips as well
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" title="<img class='img-avatar' src='assets/media/avatars/avatar10.jpg' alt=''>">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="<img class='img-avatar' src='assets/media/avatars/avatar2.jpg' alt=''>">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom" title="<img class='img-avatar' src='assets/media/avatars/avatar5.jpg' alt=''>">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="left" title="<img class='img-avatar' src='assets/media/avatars/avatar16.jpg' alt=''>">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END HTML -->
    </div>
  </div>
  <!-- END Tooltips -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
