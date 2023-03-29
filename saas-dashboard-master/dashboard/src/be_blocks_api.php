<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Blocks API, functionality is initialized in Template._uiApiBlocks() -->
  <h2 class="content-heading">Blocks API</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Usage</h3>
    </div>
    <div class="block-content">
      <p>
        Using the blocks API is easy. You will just have to pass your block’s id as well as one of the available modes depending of what you would like to achieve:
      </p>
      <p>
        <code>Codebase.block('mode', '#blockId');</code>
      </p>
      <div class="row">
        <div class="col-md-7">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter">
              <thead>
                <tr>
                  <td style="min-width: 200px; width: 200px;">Live</th>
                  <th>Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('content_toggle', '#my-block');">Toggle Content</button>
                  </td>
                  <td>
                    <code>content_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('content_hide', '#my-block');">Hide Content</button>
                  </td>
                  <td>
                    <code>content_hide</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('content_show', '#my-block');">Show Content</button>
                  </td>
                  <td>
                    <code>content_show</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('state_toggle', '#my-block');">Toggle State</button>
                  </td>
                  <td>
                    <code>state_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('state_loading', '#my-block');">State Loading</button>
                  </td>
                  <td>
                    <code>state_loading</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('state_normal', '#my-block');">State Normal</button>
                  </td>
                  <td>
                    <code>state_normal</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('fullscreen_toggle', '#my-block');">Toggle Fullscreen</button>
                  </td>
                  <td>
                    <code>fullscreen_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('fullscreen_on', '#my-block');">Fullscreen On</button>
                  </td>
                  <td>
                    <code>fullscreen_on</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('fullscreen_off', '#my-block');">Fullscreen Off</button>
                  </td>
                  <td>
                    <code>fullscreen_off</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('pinned_toggle', '#my-block');">Toggle Pinned</button>
                  </td>
                  <td>
                    <code>pinned_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('pinned_on', '#my-block');">Pinned On</button>
                  </td>
                  <td>
                    <code>pinned_on</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('pinned_off', '#my-block');">Pinned Off</button>
                  </td>
                  <td>
                    <code>pinned_off</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('close', '#my-block');">Close</button>
                  </td>
                  <td>
                    <code>close</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary" onclick="Codebase.block('open', '#my-block');">Open</button>
                  </td>
                  <td>
                    <code>open</code>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-5">
          <div class="block block-bordered" id="my-block">
            <div class="block-header">
              <h3 class="block-title">Test Block</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <p>This is our test block with id <code>my-block</code></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Blocks API -->

  <!-- Interactivity, functionality is initialized in Template._uiApiBlocks() -->
  <!-- In fullscreen and content toggle buttons, icon classes are auto added in Template._uiApiBlocks() -->
  <h2 class="content-heading">Interactivity</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Toggle</h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Close</h3>
          <div class="block-options">
            <!-- To close a block, just add the following properties to your button: data-toggle="block-option" data-action="close" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Maximize</h3>
          <div class="block-options">
            <!-- To toggle fullscreen a block, just add the following properties to your button: data-toggle="block-option" data-action="fullscreen_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Refresh</h3>
          <div class="block-options">
            <!--
            To activate loading state to a block, just add the following properties to your button: data-toggle="block-option" data-action="state_toggle"
            If you also add the property data-action-mode="demo" the loading state will be disabled in 2 seconds for demostration purposes

            Without the demo mode, you can restore the block to its normal state by using the following JS code: Codebase.block('#yourBlockId','state_normal');
            You can use it after you've loaded successfully your data (please check Blocks API)
            -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pinned</h3>
          <div class="block-options">
            <!-- To toggle pinned position to a block, just add the following properties to your button: data-toggle="block-option" data-action="pinned_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-hidden">
        <div class="block-header block-header-default">
          <h3 class="block-title">Content <small>Hidden by default</small></h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">All Options</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
              <i class="si si-close"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('medium'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Interactivity Blocks -->

  <!-- Loading Indicators -->
  <h2 class="content-heading">Loading Indicators</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Cog</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-location">
        <div class="block-header block-header-default">
          <h3 class="block-title">Location</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-energy">
        <div class="block-header block-header-default">
          <h3 class="block-title">Energy</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-refresh">
        <div class="block-header block-header-default">
          <h3 class="block-title">Refresh</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-sun">
        <div class="block-header block-header-default">
          <h3 class="block-title">Sun</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-repeat">
        <div class="block-header block-header-default">
          <h3 class="block-title">Repeat</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $cb->get_text('small'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Loading Indicators -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
