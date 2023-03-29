<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">Layout API <small>Powerful and simple to use</small></h2>

  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
  <p>You can either use <code>Codebase.layout('_mode_');</code> or enable it on a button with the attributes <code>data-toggle=&quot;layout&quot; data-action=&quot;_mode_&quot;</code></p>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-bordered mb-0">
          <thead>
            <tr>
              <th>Live</th>
              <th>Mode</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-active">
              <th colspan="2">Sidebar Visibility</th>
            </tr>
            <tr>
              <td style="min-width: 300px; width: 300px;">
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_toggle">Toggle Sidebar</button>
              </td>
              <td>
                <code>sidebar_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_open">Open Sidebar</button>
              </td>
              <td>
                <code>sidebar_open</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_close">Close Sidebar</button>
              </td>
              <td>
                <code>sidebar_close</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Mini Sidebar Mode <span class="fs-sm fw-normal text-muted">Screen width greater than 991px</span></th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_mini_toggle">Toggle Mini Sidebar Mode</button>
              </td>
              <td>
                <code>sidebar_mini_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_mini_on">Enable Mini Sidebar</button>
              </td>
              <td>
                <code>sidebar_mini_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_mini_off">Disable Mini Sidebar</button>
              </td>
              <td>
                <code>sidebar_mini_off</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Sidebar Style</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_style_toggle">Toggle Dark Style</button>
              </td>
              <td>
                <code>sidebar_style_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_style_dark">Enable Dark Style</button>
              </td>
              <td>
                <code>sidebar_style_dark</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_style_light">Disable Dark Style</button> (works with Dark Mode off)
              </td>
              <td>
                <code>sidebar_style_light</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Sidebar Position</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_pos_toggle">Toggle Sidebar Position</button>
              </td>
              <td>
                <code>sidebar_pos_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_pos_left">Left Sidebar Position</button>
              </td>
              <td>
                <code>sidebar_pos_left</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="sidebar_pos_right">Right Sidebar Position</button>
              </td>
              <td>
                <code>sidebar_pos_right</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Side Overlay Visibility</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="side_overlay_toggle">Toggle Side Overlay</button>
              </td>
              <td>
                <code>side_overlay_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="side_overlay_open">Open Side Overlay</button>
              </td>
              <td>
                <code>side_overlay_open</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="side_overlay_close">Close Side Overlay</button>
              </td>
              <td>
                <code>side_overlay_close</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Side Overlay Hover Mode <span class="fs-sm fw-normal text-muted">Screen width greater than 991px</span></th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary btn-success" data-toggle="layout" data-action="side_overlay_mode_hover_toggle">Toggle Side Overlay Hover Mode</button>
              </td>
              <td>
                <code>side_overlay_mode_hover_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary btn-success" data-toggle="layout" data-action="side_overlay_mode_hover_on">Enable Side Overlay Hover Mode</button>
              </td>
              <td>
                <code>side_overlay_mode_hover_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary btn-success" data-toggle="layout" data-action="side_overlay_mode_hover_off">Disable Side Overlay Hover Mode</button>
              </td>
              <td>
                <code>side_overlay_mode_hover_off</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Mode</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_mode_toggle">Toggle Header Fixed Mode</button>
              </td>
              <td>
                <code>header_mode_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_mode_fixed">Enable Header Fixed Mode</button>
              </td>
              <td>
                <code>header_mode_fixed</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_mode_static">Disable Header Fixed Mode</button>
              </td>
              <td>
                <code>header_mode_static</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Modern Variation</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_modern_toggle">Toggle Modern Variation</button>
              </td>
              <td>
                <code>header_modern_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_modern_on">Enable Modern Variation</button>
              </td>
              <td>
                <code>header_modern_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_modern_off">Disable Modern Variation</button>
              </td>
              <td>
                <code>header_modern_off</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Glass Variation</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_glass_toggle">Toggle Glass Variation</button>
              </td>
              <td>
                <code>header_glass_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_glass_on">Enable Glass Variation</button>
              </td>
              <td>
                <code>header_glass_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_glass_off">Disable Glass Variation</button>
              </td>
              <td>
                <code>header_glass_off</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Dark Style</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_style_toggle">Toggle Dark Style</button>
              </td>
              <td>
                <code>header_style_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_style_dark">Enable Dark Style</button>
              </td>
              <td>
                <code>header_style_dark</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_style_light">Disable Dark Style</button> (works with Dark Mode off)
              </td>
              <td>
                <code>header_style_light</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Search</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_search_on">Open Header Search</button>
              </td>
              <td>
                <code>header_search_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_search_off">Close Header Search</button>
              </td>
              <td>
                <code>header_search_off</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Header Loading</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_loader_on">Start Header Loader</button>
              </td>
              <td>
                <code>header_loader_on</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="header_loader_off">Stop Header Loader</button>
              </td>
              <td>
                <code>header_loader_off</code>
              </td>
            </tr>
            </tr>
            <tr class="table-active">
              <th colspan="2">Main Content Layout <span class="fs-sm fw-normal text-muted">Screen width greater than 1200px</span></th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="content_layout_toggle">Toggle all Layouts</button>
              </td>
              <td>
                <code>content_layout_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="content_layout_boxed">Boxed Layout</button>
              </td>
              <td>
                <code>content_layout_boxed</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="content_layout_narrow">Narrow Layout</button>
              </td>
              <td>
                <code>content_layout_narrow</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="content_layout_full_width">Full Width Layout</button>
              </td>
              <td>
                <code>content_layout_full_width</code>
              </td>
            </tr>
            <tr class="table-active">
              <th colspan="2">Dark Mode</th>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="dark_mode_toggle">Toggle Dark Mode</button>
              </td>
              <td>
                <code>dark_mode_toggle</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="dark_mode_off">Disables Dark Mode</button>
              </td>
              <td>
                <code>dark_mode_off</code>
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="layout" data-action="dark_mode_on">Enables Dark Mode</button>
              </td>
              <td>
                <code>dark_mode_on</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Layout API -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>