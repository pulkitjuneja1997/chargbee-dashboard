<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Chart.js Charts functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
  <h2 class="content-heading">Chart.js</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Lines Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Lines</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Lines Chart Container -->
          <canvas id="js-chartjs-lines"></canvas>
        </div>
      </div>
      <!-- END Lines Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Bars Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Bars</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Bars Chart Container -->
          <canvas id="js-chartjs-bars"></canvas>
        </div>
      </div>
      <!-- END Bars Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Pie Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pie</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Pie Chart Container -->
          <canvas id="js-chartjs-pie"></canvas>
        </div>
      </div>
      <!-- END Pie Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Donut Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Donut</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Donut Chart Container -->
          <canvas id="js-chartjs-donut"></canvas>
        </div>
      </div>
      <!-- END Donut Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Polar Area Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Polar Area</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Polar Area Chart Container -->
          <canvas id="js-chartjs-polar"></canvas>
        </div>
      </div>
      <!-- END Polar Area Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Radar Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Radar</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <!-- Radar Chart Container -->
          <canvas id="js-chartjs-radar"></canvas>
        </div>
      </div>
      <!-- END Radar Chart -->
    </div>
  </div>
  <!-- END Chart.js Charts -->

  <!-- Easy Pie Chart (.js-pie-chart class is initialized in Template._easyPieChart()) -->
  <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
  <!-- Randomize Values Buttons functionality initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
  <h2 class="content-heading">Easy Pie Chart</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Avatar -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Avatar</h3>
          <div class="block-options">
            <button type="button" class="js-pie-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="row items-push text-center">
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#dc2626" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#65a30d" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#dc2626" data-track-color="#e9e9e9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#65a30d" data-track-color="#e9e9e9">
                <span>
                  <?php $cb->get_avatar(); ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Avatar -->
    </div>
    <div class="col-xl-6">
      <!-- Simple -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Simple</h3>
          <div class="block-options">
            <button type="button" class="js-pie-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <div class="row items-push text-center">
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#dc2626" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>25mb<br><small class="text-muted">/100mb</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>50%</span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#65a30d" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>90<br><small class="text-muted">/100</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#dc2626" data-track-color="#e9e9e9">
                <span>25mb<br><small class="text-muted">/100mb</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                <span>50%</span>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#65a30d" data-track-color="#e9e9e9">
                <span>90<br><small class="text-muted">/100</small></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Simple -->
    </div>
  </div>
  <!-- END Easy Pie Chart -->

  <!-- jQuery Sparkline functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
  <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
  <h2 class="content-heading">Sparkline</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Lines -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Lines</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Line 1 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[9,5,2,4,6,1,3,5]"
                    data-line-color="#d97706"
                    data-fill-color="#d97706"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-medium mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Line 2 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[590,610,980,1100,480,1380,963,1258]"
                    data-line-color="#8dc451"
                    data-fill-color="#8dc451"
                    data-tooltip-prefix="$"></span>
              <div class="fw-medium mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Line 3 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[5,12,13,14,8,6,7,9]"
                    data-line-color="#0891b2"
                    data-fill-color="#0891b2"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-medium mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Lines -->
    </div>
    <div class="col-xl-6">
      <!-- Bars -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Bars</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Bar 1 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[9,5,2,4,6,1,3,5]"
                    data-bar-color="#d97706"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-medium mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Bar 2 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[590,610,980,1100,480,1380,963,1258]"
                    data-bar-color="#8dc451"
                    data-tooltip-prefix="$"></span>
              <div class="fw-medium mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Bar 3 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[5,12,13,14,8,6,7,9]"
                    data-bar-color="#0891b2"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-medium mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Bars -->
    </div>
    <div class="col-xl-6">
      <!-- Pie -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pie</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Pie 1 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[34,69,54,23]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-medium mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Pie 2 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[1350,1240,1100,950]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-prefix="$"></span>
              <div class="fw-medium mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Pie 3 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[590,475,385,314]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-medium mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Pie -->
    </div>
    <div class="col-xl-6">
      <!-- Tristate -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Tristate</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 1 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[1,0,1,0,-1,-1,1,1]"></span>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 2 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[-1,-1,1,1,1,0,1,-1]"></span>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 3 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[0,-1,0,1,-1,0,1,-1]"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- END Tristate -->
    </div>
  </div>
  <!-- END Sparkline Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Easy Pie Chart + jQuery Sparkline plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $cb->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_charts.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script>Codebase.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
