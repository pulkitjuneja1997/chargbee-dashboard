<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Rounded Blocks -->
  <h2 class="content-heading">Rounded</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Rounded Blocks -->
  
  <!-- Square Blocks -->
  <h2 class="content-heading">Square</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Square Blocks -->

  <!-- Blocks with footer -->
  <h2 class="content-heading">Blocks with footer</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
  </div>
  <!-- END Simple Blocks -->

  <!-- Transparent Blocks -->
  <h2 class="content-heading">Transparent</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded block-transparent">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-transparent">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Transparent Blocks -->

  <!-- Link Blocks -->
  <h2 class="content-heading">Links</h2>
  <div class="row">
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Default opacity hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-rotate" href="javascript:void(0)">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Rotate hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Pop hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-header">
          <h3 class="block-title">Title</h3>
        </div>
        <div class="block-content">
          <p>Shadow hover effect..</p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Link Blocks -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>