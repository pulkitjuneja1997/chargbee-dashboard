<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">Form Layouts</h2>

  <!-- Inline -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Inline</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Using an inline layout can come really handy for small forms
          </p>
        </div>
        <div class="col-lg-8 space-y-2">
          <!-- Form Inline - Default Style -->
          <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="col-12">
              <label class="visually-hidden" for="example-if-email">Email</label>
              <input type="email" class="form-control" id="example-if-email" name="example-if-email" placeholder="Email">
            </div>
            <div class="col-12">
              <label class="visually-hidden" for="example-if-password">Password</label>
              <input type="password" class="form-control" id="example-if-password" name="example-if-password" placeholder="Password">
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <!-- END Form Inline - Default Style -->

          <!-- Form Inline - Alternative Style -->
          <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="col-12">
              <label class="visually-hidden" for="example-if-email2">Email</label>
              <input type="email" class="form-control form-control-alt" id="example-if-email2" name="example-if-email2" placeholder="Email">
            </div>
            <div class="col-12">
              <label class="visually-hidden" for="example-if-password2">Password</label>
              <input type="password" class="form-control form-control-alt" id="example-if-password2" name="example-if-password2" placeholder="Password">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-secondary">Login</button>
            </div>
          </form>
          <!-- END Form Inline - Alternative Style -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Inline -->

  <!-- Labels on Top -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Labels on Top</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            An often used layout which is very easy to create with minimal markup
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <!-- Form Labels on top - Default Style -->
          <form class="mb-5" action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="example-ltf-email">Email</label>
              <input type="email" class="form-control" id="example-ltf-email" name="example-ltf-email" placeholder="Your Email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-ltf-password">Password</label>
              <input type="password" class="form-control" id="example-ltf-password" name="example-ltf-password" placeholder="Your Password..">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <!-- END Form Labels on top - Default Style -->

          <!-- Form Labels on top - Alternative Style -->
          <form action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="example-ltf-email2">Email</label>
              <input type="email" class="form-control form-control-alt" id="example-ltf-email2" name="example-ltf-email2" placeholder="Your Email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-ltf-password2">Password</label>
              <input type="password" class="form-control form-control-alt" id="example-ltf-password2" name="example-ltf-password2" placeholder="Your Password..">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-secondary">Login</button>
            </div>
          </form>
          <!-- END Form Labels on top - Alternative Style -->
        </div>
      </div>
      <!-- END Label on top Layout -->
    </div>
  </div>
  <!-- END Labels on Top -->

  <!-- Horizontal -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Horizontal</h3>
    </div>
    <div class="block-content">
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            A horizontal layout is perfect for bigger forms
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <!-- Form Horizontal - Default Style -->
          <form class="mb-5" action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <label class="col-sm-4 col-form-label" for="example-hf-email">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" placeholder="Your Email..">
              </div>
            </div>
            <div class="row mb-4">
              <label class="col-sm-4 col-form-label" for="example-hf-password">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="example-hf-password" name="example-hf-password" placeholder="Your Password..">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-8 ms-auto">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
          <!-- END Form Horizontal - Default Style -->

          <!-- Form Horizontal - Alternative Style -->
          <form action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <label class="col-sm-4 col-form-label" for="example-hf-email2">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control form-control-alt" id="example-hf-email2" name="example-hf-email2" placeholder="Your Email..">
              </div>
            </div>
            <div class="row mb-4">
              <label class="col-sm-4 col-form-label" for="example-hf-password2">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control form-control-alt" id="example-hf-password2" name="example-hf-password2" placeholder="Your Password..">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-8 ms-auto">
                <button type="submit" class="btn btn-secondary">Login</button>
              </div>
            </div>
          </form>
          <!-- END Form Horizontal - Alternative Style -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Horizontal -->

  <!-- Grid Based -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Grid Based</h3>
    </div>
    <div class="block-content">
      <div class="row push">
        <div class="col-lg-4">
          <p class="text-muted">
            Using the form grid you can create any input layout you could possibly imagine
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Form Grid -->
          <form action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
              <div class="col-8">
                <input type="text" class="form-control" placeholder="col-8">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <input type="text" class="form-control" placeholder="col-5">
              </div>
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
              <div class="col-3">
                <input type="text" class="form-control" placeholder="col-3">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-8">
                <input type="text" class="form-control form-control-alt" placeholder="col-8">
              </div>
              <div class="col-4">
                <input type="text" class="form-control form-control-alt" placeholder="col-4">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
              <div class="col-6">
                <input type="text" class="form-control form-control-alt" placeholder="col-6">
              </div>
              <div class="col-3">
                <input type="text" class="form-control form-control-alt" placeholder="col-3">
              </div>
            </div>
          </form>
          <!-- END Form Grid -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You could also include labels
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Form Grid with Labels -->
          <form action="be_forms_layouts.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-8">
                <label class="form-label">.col-8</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <label class="form-label">.col-5</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-8">
                <label class="form-label">.col-8</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-4">
                <label class="form-label">.col-4</label>
                <input type="text" class="form-control form-control-alt">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-6">
                <label class="form-label">.col-6</label>
                <input type="text" class="form-control form-control-alt">
              </div>
              <div class="col-3">
                <label class="form-label">.col-3</label>
                <input type="text" class="form-control form-control-alt">
              </div>
            </div>
          </form>
          <!-- END Form Grid with Labels -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Grid Based -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
