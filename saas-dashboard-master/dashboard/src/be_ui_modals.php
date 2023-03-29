<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Bootstrap Modals -->
  <!-- For advanced modal usage you can check out https://getbootstrap.com/docs/4.6/components/modal/ -->
  <h2 class="content-heading">Bootstrap Modals</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Normal Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Normal</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-normal">Launch Modal</button>
        </div>
      </div>
      <!-- END Normal Modal -->
    </div>
    <div class="col-md-6">
      <!-- Fade In Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Fade In <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-fadein">Launch Modal</button>
        </div>
      </div>
      <!-- END Fade In Modal -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Small Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Small</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-small">Launch Modal</button>
        </div>
      </div>
      <!-- END Small Modal -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Large Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Large</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-large">Launch Modal</button>
        </div>
      </div>
      <!-- END Large Modal -->
    </div>
    <div class="col-xl-4">
      <!-- Extra Large Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Extra Large</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-extra-large">Launch Modal</button>
        </div>
      </div>
      <!-- END Extra Large Modal -->
    </div>
    <div class="col-md-6">
      <!-- Tabs in Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Tabs in Modal</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-tabs">Launch Modal</button>
        </div>
      </div>
      <!-- END Tabs in Modal -->
    </div>
    <div class="col-md-6">
      <!-- Alternative Tabs in Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Alternative Tabs in Modal</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-tabs-alternative">Launch Modal</button>
        </div>
      </div>
      <!-- END Alternative Tabs in Modal -->
    </div>
  </div>
  <!-- Bootstrap Modals -->

  <!-- Extra Modal Options -->
  <h2 class="content-heading">Extra Modal Options</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <!-- Top Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Top Position</h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-top">Launch Modal</button>
        </div>
      </div>
      <!-- END Top Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Pop In Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pop In <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-popin">Launch Modal</button>
        </div>
      </div>
      <!-- END Pop In Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Pop Out Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pop Out <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-popout">Launch Modal</button>
        </div>
      </div>
      <!-- END Pop Out Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Slide Up Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Slide Up <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-slideup">Launch Modal</button>
        </div>
      </div>
      <!-- END Slide Up Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Slide Right Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Slide Right <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-slideright">Launch Modal</button>
        </div>
      </div>
      <!-- END Slide Right Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Slide Left Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Slide Left <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-slideleft">Launch Modal</button>
        </div>
      </div>
      <!-- END Slide Left Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- From Right Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">From Right <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-fromright">Launch Modal</button>
        </div>
      </div>
      <!-- END From Right Modal -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- From Left Modal -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">From Left <small>Effect</small></h3>
        </div>
        <div class="block-content block-content-full">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-fromleft">Launch Modal</button>
        </div>
      </div>
      <!-- END From Left Modal -->
    </div>
  </div>
  <!-- Extra Modal Options -->

  <!-- Normal Modal -->
  <div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Normal Modal -->

  <!-- Fade In Modal -->
  <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Fade In Modal -->

  <!-- Small Modal -->
  <div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-labelledby="modal-small" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Small Modal -->

  <!-- Large Modal -->
  <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Large Modal -->

  <!-- Extra Large Modal -->
  <div class="modal" id="modal-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Extra Large Modal -->

  <!-- Tabs in Modal -->
  <div class="modal" id="modal-tabs" tabindex="-1" role="dialog" aria-labelledby="modal-tabs" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Block Tabs Default Style -->
        <div class="block block-rounded shadow-none mb-0 overflow-hidden">
          <ul class="nav nav-tabs nav-tabs-block" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" id="btabs-alt-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-home" role="tab" aria-controls="btabs-alt-static-home" aria-selected="true">
                Home
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" id="btabs-alt-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-profile" role="tab" aria-controls="btabs-alt-static-profile" aria-selected="false">
                Profile
              </button>
            </li>
            <li class="nav-item ms-auto">
              <button type="button" class="nav-link" id="btabs-alt-static-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-settings" role="tab" aria-controls="btabs-alt-static-settings" aria-selected="false">
                <i class="si si-settings"></i>
              </button>
            </li>
          </ul>
          <div class="block-content tab-content">
            <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel" aria-labelledby="btabs-alt-static-home-tab">
              <h5 class="fw-semibold">Home Content</h5>
              <p>...</p>
            </div>
            <div class="tab-pane" id="btabs-alt-static-profile" role="tabpanel" aria-labelledby="btabs-alt-static-profile-tab">
              <h5 class="fw-semibold">Profile Content</h5>
              <p>...</p>
            </div>
            <div class="tab-pane" id="btabs-alt-static-settings" role="tabpanel" aria-labelledby="btabs-alt-static-settings-tab">
              <h5 class="fw-semibold">Settings Content</h5>
              <p>...</p>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
        <!-- END Block Tabs Default Style -->
      </div>
    </div>
  </div>
  <!-- END Tabs in Modal -->

  <!-- Alternative Tabs in Modal -->
  <div class="modal" id="modal-tabs-alternative" tabindex="-1" role="dialog" aria-labelledby="modal-tabs-alternative" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Block Tabs Alternative Style -->
        <div class="block block-rounded shadow-none mb-0">
          <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home" aria-selected="true">
                Home
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile" aria-selected="false">
                Profile
              </button>
            </li>
            <li class="nav-item ms-auto">
              <button type="button" class="nav-link" id="btabs-static-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-settings" role="tab" aria-controls="btabs-static-settings" aria-selected="false">
                <i class="si si-settings"></i>
              </button>
            </li>
          </ul>
          <div class="block-content tab-content">
            <div class="tab-pane active" id="btabs-static-home" role="tabpanel" aria-labelledby="btabs-static-home-tab">
              <h5 class="fw-semibold">Home Content</h5>
              <p>...</p>
            </div>
            <div class="tab-pane" id="btabs-static-profile" role="tabpanel" aria-labelledby="btabs-static-profile-tab">
              <h5 class="fw-semibold">Profile Content</h5>
              <p>...</p>
            </div>
            <div class="tab-pane" id="btabs-static-settings" role="tabpanel" aria-labelledby="btabs-static-settings-tab">
              <h5 class="fw-semibold">Settings Content</h5>
              <p>...</p>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
        <!-- END Block Tabs Alternative Style -->
      </div>
    </div>
  </div>
  <!-- END Alternative Tabs in Modal -->

  <!-- Top Modal -->
  <div class="modal fade" id="modal-top" tabindex="-1" role="dialog" aria-labelledby="modal-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Top Modal -->

  <!-- Pop In Modal -->
  <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Pop In Modal -->

  <!-- Pop Out Modal -->
  <div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Pop Out Modal -->

  <!-- Slide Up Modal -->
  <div class="modal fade" id="modal-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Slide Up Modal -->

  <!-- Slide Right Modal -->
  <div class="modal fade" id="modal-slideright" tabindex="-1" role="dialog" aria-labelledby="modal-slideright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Slide Right Modal -->

  <!-- Slide Left Modal -->
  <div class="modal fade" id="modal-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Slide Left Modal -->

  <!-- From Right Modal -->
  <div class="modal fade" id="modal-fromright" tabindex="-1" role="dialog" aria-labelledby="modal-fromright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END From Right Modal -->

  <!-- From Left Modal -->
  <div class="modal fade" id="modal-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-fromleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromleft" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <?php $cb->get_text('small', 2); ?>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END From Left Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
