<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="my-5 text-center">
    <h2 class="fw-bold mb-2">All Wallets</h2>
    <h3 class="h5 text-muted mb-0">All great, keep it up!</h3>
  </div>
  <div class="row">
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-warning-light fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-btc">
          <span class="text-warning">Bitcoin Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">0.50 BTC</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">~ $7.000</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-paper-plane opacity-50 me-1"></i> Send
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-qrcode opacity-50 me-1"></i> Receive
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-info-light fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-eth">
          <span class="text-info">Ethereum Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">3.00 ETH</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">~ $3.300</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-paper-plane opacity-50 me-1"></i> Send
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-qrcode opacity-50 me-1"></i> Receive
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-body-light fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-ltc">
          <span class="text-body-color">Litecoin Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">10.00 LTC</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">~ $2.500</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-paper-plane opacity-50 me-1"></i> Send
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-qrcode opacity-50 me-1"></i> Receive
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-danger-light fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-usd">
          <span class="text-danger">US Dollars Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">2.000 USD</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">$2.000</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-down opacity-50 me-1"></i> Deposit
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-up opacity-50 me-1"></i> Withdraw
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-success-light fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-eur">
          <span class="text-success">Euros Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">0 EUR</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">0€</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-down opacity-50 me-1"></i> Deposit
          </a>
          <a class="btn btn-sm btn-alt-secondary disabled" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-up opacity-50 me-1"></i> Withdraw
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <div class="block block-rounded text-center overflow-hidden">
        <a class="d-block bg-flat-lighter fw-semibold text-uppercase py-2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-crypto-wallet-gbp">
          <span class="text-flat-dark">British Pounds Wallet</span>
        </a>
        <div class="block-content block-content-full">
          <div class="pt-3 pb-4">
            <div class="fs-3 fw-bold">0 GBP</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">£0</div>
          </div>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-down opacity-50 me-1"></i> Deposit
          </a>
          <a class="btn btn-sm btn-alt-secondary disabled" href="javascript:void(0)">
            <i class="fa fa-arrow-circle-up opacity-50 me-1"></i> Withdraw
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xl-4">
      <a class="block block-rounded block-link-shadow overflow-hidden" href="javascript:void(0)">
        <div class="bg-primary-lighter pt-1"></div>
        <div class="block-content block-content-full text-center">
          <div class="pt-2 pb-3">
            <i class="fa fa-plus-circle fa-3x text-primary"></i>
          </div>
          <div class="fw-semibold text-uppercase">New Wallet</div>
        </div>
      </a>
    </div>
  </div>

  <!-- BTC Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-btc" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-btc" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-warning me-1"></i> Bitcoin Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
              <tbody>
                <tr>
                  <td class="text-center">
                    JAN<br>10
                  </td>
                  <td>
                    <strong>Bought Bitcoin</strong><br>
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
                  <td class="text-center">
                    JAN<br>05
                  </td>
                  <td>
                    <strong>Bought Bitcoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 0.50 BTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $6.800
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>02
                  </td>
                  <td>
                    <strong>Sold Bitcoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 0.25 BTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $3.470
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>01
                  </td>
                  <td>
                    <strong>Sold Bitcoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 0.50 BTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $6.800
                  </td>
                </tr>
              </tbody>
            </table>
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
  <!-- END BTC Wallet -->

  <!-- ETH Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-eth" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-eth" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-info me-1"></i> Ethereum Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
              <tbody>
                <tr>
                  <td class="text-center">
                    JAN<br>10
                  </td>
                  <td>
                    <strong>Bought Ethereum</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 2.50 ETH
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $2.405
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>05
                  </td>
                  <td>
                    <strong>Bought Ethereum</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 0.50 ETH
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $530
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>02
                  </td>
                  <td>
                    <strong>Sold Ethereum</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 0.25 ETH
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $260
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>01
                  </td>
                  <td>
                    <strong>Sold Ethereum</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 2.00 ETH
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $2.120
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    JAN<br>01
                  </td>
                  <td>
                    <strong>Bought Ethereum</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 1.00 ETH
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $1.000
                  </td>
                </tr>
              </tbody>
            </table>
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
  <!-- END ETH Wallet -->

  <!-- LTC Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-ltc" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-ltc" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-muted me-1"></i> Litecoin Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
              <tbody>
                <tr>
                  <td class="text-center">
                    DEC<br>26
                  </td>
                  <td>
                    <strong>Bought Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 2.50 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $769
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    DEC<br>24
                  </td>
                  <td>
                    <strong>Bought Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 0.50 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $124
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    DEC<br>15
                  </td>
                  <td>
                    <strong>Sold Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 0.25 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $68
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    DEC<br>14
                  </td>
                  <td>
                    <strong>Sold Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-danger fw-semibold">
                    - 2.00 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $515
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    DEC<br>03
                  </td>
                  <td>
                    <strong>Bought Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 1.00 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $260
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    DEC<br>01
                  </td>
                  <td>
                    <strong>Bought Litecoin</strong><br>
                    <span class="text-muted">Using USD wallet</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 2.00 LTC
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-danger fw-semibold">
                    - $760
                  </td>
                </tr>
              </tbody>
            </table>
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
  <!-- END LTC Wallet -->

  <!-- USD Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-usd" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-usd" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-danger me-1"></i> US Dollars Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
              <tbody>
                <tr>
                  <td class="text-center">
                    JAN<br>12
                  </td>
                  <td>
                    <strong>Deposited funds</strong><br>
                    <span class="text-muted">FROM BANK S.A. (000-000-000)</span>
                  </td>
                  <td class="text-end text-success fw-semibold">
                    + 2.000 USD
                  </td>
                  <td class="d-none d-sm-table-cell text-end text-success fw-semibold">
                    + $2.000
                  </td>
                </tr>
              </tbody>
            </table>
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
  <!-- END USD Wallet -->

  <!-- EUR Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-eur" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-eur" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-success me-1"></i> Euros Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <p class="text-muted text-center">
              No transactions yet!
            </p>
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
  <!-- END EUR Wallet -->

  <!-- GBP Wallet -->
  <div class="modal fade" id="modal-crypto-wallet-gbp" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-gbp" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wallet text-elegance me-1"></i> British Pounds Wallet
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <p class="text-muted text-center">
              No transactions yet!
            </p>
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
  <!-- END GBP Wallet -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
