<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$cb->page_loader = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Loaders -->
  <h2 class="content-heading">Loaders</h2>

  <!-- Header Loader -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Header Loader</h3>
    </div>
    <div class="block-content">
      <p>You can use the layout API to start the header loader and stop it on demand. It is better to be used when the header is also set to fixed, so it is always visible. You can start or stop the header loader with JavaScript at any time by using <code>Codebase.layout('header_loader_on')</code> or <code>Codebase.layout('header_loader_off')</code> respectively.</p>
      <div class="text-center">
        <button type="button" class="btn btn-alt-success push" data-toggle="layout" data-action="header_loader_on">Start Header Loader</button>
        <button type="button" class="btn btn-alt-danger push" data-toggle="layout" data-action="header_loader_off">Stop Header Loader</button>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->

  <!-- Page Loader (functionality is initialized Template._uiHandlePageLoader()) -->
  <!-- Header Loader HTML markup can be found in the header (#page-header) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Page Loader</h3>
    </div>
    <div class="block-content">
      <p>You can add the following markup after the body tag and the loading screen will be enabled and auto hide once the page loads (you can add a <code>.bg-*</code> class for a custom background color):</p>
      <p>
        <code>&lt;div id=&QUOT;page-loader&QUOT; class=&QUOT;show&QUOT;&gt;&lt;/div&gt;</code>
      </p>
      <p>You can also show or hide the loading screen at any time by using <code>Codebase.loader('show')</code> or <code>Codebase.loader('hide')</code> respectively. If you like to add a custom background color, you can dynamically add a <code>.bg-*</code> class to your page loader, for example <code>Codebase.loader('show', 'bg-gd-leaf')</code></p>
      <p class="my-4 text-center">
        <button type="button" class="btn btn-alt-primary" onclick="Codebase.loader('show', 'bg-primary');
            setTimeout(function () {
              Codebase.loader('hide');
            }, 3000);">Preview Page Loader</button>
      </p>
      <div class="row items-push-3x">
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-dusk mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-dusk');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-cherry mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-cherry');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-aqua mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-aqua');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-emerald mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-emerald');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-sea mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-sea');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-leaf mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-leaf');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-lake mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-lake');
              setTimeout(function () {
                Codebase.loader('hide');
              }, 3000);"></a>
        </div>
        <div class="col-6 col-md-3">
          <a class="item item-circle bg-gd-sun mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-sun');setTimeout(function () {
                Codebase.loader('hide');}, 3000);"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Page Loader -->
  <!-- END Loaders -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
