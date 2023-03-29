<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">
      Crypto Dashboard
    </h2>
    <h3 class="h5 text-muted mb-0">
      Welcome to your overview.
    </h3>
  </div>
  <!-- END Heading -->

  <!-- Coins -->
  <div class="block block-rounded overflow-hidden">
    <ul id="crypto-tabs" class="nav nav-tabs nav-tabs-block align-items-center" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link" id="crypto-coins-btc-tab" data-bs-toggle="tab" data-bs-target="#crypto-coins-btc" role="tab" aria-controls="crypto-coins-btc" aria-selected="false">
          <span class="d-sm-none">BTC</span>
          <span class="d-none d-sm-inline">Bitcoin <span class="fw-medium text-muted">$14000</span></span>
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="crypto-coins-eth-tab" data-bs-toggle="tab" data-bs-target="#crypto-coins-eth" role="tab" aria-controls="crypto-coins-eth" aria-selected="false">
          <span class="d-sm-none">ETH</span>
          <span class="d-none d-sm-inline">Ethereum <span class="fw-medium text-muted">$1100</span></span>
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="crypto-coins-ltc-tab" data-bs-toggle="tab" data-bs-target="#crypto-coins-ltc" role="tab" aria-controls="crypto-coins-ltc" aria-selected="false">
          <span class="d-sm-none">LTC</span>
          <span class="d-none d-sm-inline">Litecoin <span class="fw-medium text-muted">$250</span></span>
        </button>
      </li>
      <li class="nav-item ms-auto">
        <div class="block-options me-3">
          <div class="dropdown" role="group">
            <button type="button" class="btn-block-option" id="btnGroupTabs1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-calendar-alt me-1"></i>
              <i class="fa fa-angle-down opacity-50"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="btnGroupTabs1">
              <button type="button" class="btn btn-sm w-100 btn-alt-secondary mb-2" tabindex="-1">1 Hour</button>
              <button type="button" class="btn btn-sm w-100 btn-alt-secondary mb-2" tabindex="-1">1 Week</button>
              <button type="button" class="btn btn-sm w-100 btn-alt-secondary mb-2 active" tabindex="-1">1 Month</button>
              <button type="button" class="btn btn-sm w-100 btn-alt-secondary" tabindex="-1">1 Year</button>
              <div class="dropdown-divider"></div>
              <button type="button" class="btn btn-sm w-100 btn-alt-secondary" tabindex="-1">ALL</button>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <div class="block-content block-content-full tab-content">
      <div class="tab-pane" id="crypto-coins-btc" role="tabpanel" aria-labelledby="crypto-coins-btc-tab">
        <div class="row items-push text-center my-3">
          <div class="col-md-4">
            <div class="fs-3 fw-bold">$14.000</div>
            <div class="text-muted fw-semibold text-uppercase">Bitcoin Price</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-success">+</span> $3.500
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (USD)</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-success">+</span> 133%
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (%)</div>
          </div>
        </div>
        <hr class="my-4">
        <div>
          <!-- Bitcoin Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _js/pages/be_pages_crypto_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-bitcoin" height="300"></canvas>
        </div>
      </div>
      <div class="tab-pane" id="crypto-coins-eth" role="tabpanel" aria-labelledby="crypto-coins-eth-tab">
        <div class="row items-push text-center my-3">
          <div class="col-md-4">
            <div class="fs-3 fw-bold">$1.100</div>
            <div class="text-muted fw-semibold text-uppercase">Ethereum Price</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-success">+</span> $600
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (USD)</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-success">+</span> 210%
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (%)</div>
          </div>
        </div>
        <hr class="my-4">
        <div>
          <!-- Ethereum Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _js/pages/be_pages_crypto_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-ethereum" height="300"></canvas>
        </div>
      </div>
      <div class="tab-pane" id="crypto-coins-ltc" role="tabpanel" aria-labelledby="crypto-coins-ltc-tab">
        <div class="row items-push text-center my-3">
          <div class="col-md-4">
            <div class="fs-3 fw-bold">$250</div>
            <div class="text-muted fw-semibold text-uppercase">Litecoin Price</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-danger">-</span> $50
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (USD)</div>
          </div>
          <div class="col-md-4">
            <div class="fs-3 fw-bold">
              <span class="text-danger">-</span> 17%
            </div>
            <div class="text-muted fw-semibold text-uppercase">Since Last Month (%)</div>
          </div>
        </div>
        <hr class="my-4">
        <div>
          <!-- Litecoin Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _js/pages/be_pages_crypto_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-litecoin" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- END Coins -->

  <!-- Portfolio and Activity -->
  <div class="row items-push">
    <div class="col-lg-6">
      <!-- Portfolio -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Portfolio</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <tbody>
              <tr>
                <td style="width: 32px;">
                  <i class="fa fa-circle text-warning"></i>
                </td>
                <td style="width: 140px;">
                  <span class="fw-semibold">Bitcoin</span>
                </td>
                <td class="d-none d-sm-table-cell" style="width: 160px;">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                  </div>
                </td>
                <td class="text-end">
                  0.50 BTC
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  ~ $7.000
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-circle text-info"></i>
                </td>
                <td>
                  <span class="fw-semibold">Ethereum</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                  </div>
                </td>
                <td class="text-end">
                  3.00 ETH
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  ~ $3.300
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-circle text-muted"></i>
                </td>
                <td>
                  <span class="fw-semibold">Litecoin</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-muted" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
                  </div>
                </td>
                <td class="text-end">
                  10.00 LTC
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  ~ $2.500
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-circle text-danger"></i>
                </td>
                <td>
                  <span class="fw-semibold">US Dollars</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%"></div>
                  </div>
                </td>
                <td class="text-end">
                  2.000 USD
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  $2.000
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-circle text-success"></i>
                </td>
                <td>
                  <span class="fw-semibold">Euros</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                  </div>
                </td>
                <td class="text-end">
                  0 EUR
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  0€
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-circle text-elegance"></i>
                </td>
                <td>
                  <span class="fw-semibold">British Pounds</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-0" style="height: 10px;">
                    <div class="progress-bar bg-elegance" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                  </div>
                </td>
                <td class="text-end">
                  0 GBP
                </td>
                <td class="d-none d-sm-table-cell text-end text-muted">
                  £0
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="block-content block-content-full bg-body-light text-muted text-center fw-semibold">
          Total Balance ~ $14.800,00
        </div>
      </div>
      <!-- END Portfolio -->
    </div>
    <div class="col-lg-6">
      <!-- Recent Activity -->
      <div class="block block-rounded h-100 mb-0 d-flex flex-column">
        <div class="block-header block-header-default">
          <h3 class="block-title">Recent Activity</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content flex-grow-1">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <tbody>
              <tr>
                <td class="text-center" style="width: 50px;">
                  JAN<br>10
                </td>
                <td>
                  <span class="fw-semibold">Bought Bitcoin</span><br>
                  <span class="text-muted">Using USD wallet</span>
                </td>
                <td class="text-end text-success fw-semibold">
                  + 0.50 BTC
                </td>
                <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                  - $6.500
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 50px;">
                  JAN<br>05
                </td>
                <td>
                  <span class="fw-semibold">Bought Ethereum</span><br>
                  <span class="text-muted">Using USD wallet</span>
                </td>
                <td class="text-end text-success fw-semibold">
                  + 3.00 ETH
                </td>
                <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                  - $2.900
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 50px;">
                  JAN<br>02
                </td>
                <td>
                  <span class="fw-semibold">Bought Litecoin</span><br>
                  <span class="text-muted">Using USD wallet</span>
                </td>
                <td class="text-end text-success fw-semibold">
                  + 8.00 LTC
                </td>
                <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                  - $1.800
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 50px;">
                  JAN<br>01
                </td>
                <td>
                  <span class="fw-semibold">Bought Litecoin</span><br>
                  <span class="text-muted">Using USD wallet</span>
                </td>
                <td class="text-end text-success fw-semibold">
                  + 2.00 LTC
                </td>
                <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                  - $370
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="block-content block-content-full bg-body-light text-center fw-semibold">
          <a class="link-fx" href="be_pages_crypto_wallets.php">
            View Your Wallets <i class="fa fa-angle-right ms-1"></i>
          </a>
        </div>
      </div>
      <!-- END Recent Activity -->
    </div>
  </div>
  <!-- END Portfolio and Activity -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_crypto_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
