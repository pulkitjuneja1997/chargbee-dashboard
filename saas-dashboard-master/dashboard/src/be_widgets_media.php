<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Image Cards Media Widgets -->
  <h2 class="content-heading">Media Widgets <small>Image Cards</small></h2>
  <div class="row">
    <!-- Row #1 -->
    <div class="col-md-6 col-xl-4">
      <a class="block shadow-none border-start border-5 border-primary bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-black-50">
          <div class="pt-7">
            <h3 class="h4 text-white fw-bold mb-3">
              10 ways to build your own business
            </h3>
            <h4 class="text-white-75 fw-medium fs-sm mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 15 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 240
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block shadow-none border-start border-5 border-success bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-black-50">
          <div class="pt-7">
            <h3 class="h4 text-white fw-bold mb-3">
              The most happy cities in the world
            </h3>
            <h4 class="text-white-75 fw-medium fs-sm mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 12 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 132
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block shadow-none border-start border-5 border-danger bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-black-50">
          <div class="pt-7">
            <h3 class="h4 text-white fw-bold mb-3">
              Learn Laravel in one week the easy way
            </h3>
            <h4 class="text-white-75 fw-medium fs-sm mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 20 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 420
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6 col-xl-4">
      <a class="block block-link-shadow shadow-none border-start border-5 border-info bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo25.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-white-90">
          <div class="pt-7">
            <h3 class="h4 fw-bold text-black-75 mb-2">An adventure of a lifetime to remember</h3>
            <h4 class="text-muted fw-medium fs-base mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 17 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 87
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block block-link-shadow shadow-none border-start border-5 border-warning bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-white-90">
          <div class="pt-7">
            <h3 class="h4 fw-bold text-black-75 mb-2">How to code like a professional coder</h3>
            <h4 class="text-muted fw-medium fs-base mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 16 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 25
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block block-link-shadow shadow-none border-start border-5 border-primary bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo32.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full bg-white-90">
          <div class="pt-7">
            <h3 class="h4 fw-bold text-black-75 mb-2">Learn Laravel in one week the easy way</h3>
            <h4 class="text-muted fw-medium fs-base mb-0">
              <span class="me-2">
                <i class="far fa-clock opacity-75 me-1"></i> 9 min
              </span>
              <span>
                <i class="far fa-comments opacity-75 me-1"></i> 12
              </span>
            </h4>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #2 -->
  </div>
  <!-- END Image Cards Media Widgets -->

  <!-- Simple Media Widgets -->
  <h2 class="content-heading">Media Widgets <small>Simple</small></h2>
  <div class="row">
    <!-- Row #1 -->
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-music text-primary"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold mb-0">
              14 Albums
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Pop
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-film text-warning"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold mb-0">
              73 Movies
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Horror
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-gamepad text-danger"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold mb-0">
              120 Games
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Adventure
            </p>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded shadow-none bg-primary" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-music text-black-50"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold text-white mb-0">
              24 Albums
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Jazz
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded shadow-none bg-warning" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-film text-black-50"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold text-white mb-0">
              50 Movies
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Biography
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block block-rounded shadow-none bg-danger" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="p-3">
            <i class="fa fa-2x fa-gamepad text-black-50"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold text-white mb-0">
              189 Games
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Puzzle
            </p>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #2 -->
  </div>
  <div class="row">
    <!-- Row #3 -->
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold mb-0">
              423 Games
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Steam
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-steam"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold mb-0">
              143 Videos
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Favorites
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-youtube text-pulse"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold mb-0">
              780 Playlists
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
              Spotify
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-spotify text-earth"></i>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #3 -->
  </div>
  <div class="row">
    <!-- Row #4 -->
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded shadow-none bg-black" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold text-white mb-0">
              89 Games
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Steam
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-steam text-white-75"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-4">
      <a class="block block-rounded shadow-none bg-pulse" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold text-white mb-0">
              542 Videos
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Watch Later
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-youtube text-black-50"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-4">
      <a class="block block-rounded shadow-none bg-earth" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div class="me-1">
            <p class="fs-lg fw-semibold text-white mb-0">
              238 Playlists
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              Spotify
            </p>
          </div>
          <div class="p-3">
            <i class="fab fa-2x fa-spotify text-black-50"></i>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #4 -->
  </div>
  <div class="row">
    <!-- Row #5 -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-steam"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            545 Games
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
            Steam
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-spotify text-earth"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            120 Albums
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
            Spotify
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-youtube text-pulse"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            14 Videos
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
            Youtube
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-medium fa-3x text-gray-dark"></i>
          </div>
          <p class="fs-lg fw-semibold mb-0">
            17 Stories
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
            Medium
          </p>
        </div>
      </a>
    </div>
    <!-- END Row #5 -->
  </div>
  <div class="row">
    <!-- Row #6 -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded shadow-none bg-black" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-steam text-white-75"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            545 Games
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Steam
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded shadow-none bg-earth" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-spotify text-black-50"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            120 Albums
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Spotify
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded shadow-none bg-pulse" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-youtube text-black-50"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            14 Videos
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Youtube
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded shadow-none bg-gray-dark" href="javascript:void(0)">
        <div class="block-content block-content-full text-center">
          <div class="p-3 mb-2">
            <i class="fab fa-medium fa-3x text-black-50"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            17 Stories
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Medium
          </p>
        </div>
      </a>
    </div>
    <!-- END Row #6 -->
  </div>
  <!-- END Simple Media Widgets -->

  <!-- Advanced Media Widgets -->
  <h2 class="content-heading">Media Widgets <small>Advanced</small></h2>
  <div class="row">
    <!-- Row #1 -->
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary">
          <div class="me-1">
            <p class="fs-lg fw-semibold text-white mb-0">
              Trip Gallery
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              6 Photos
            </p>
          </div>
          <div class="p-3">
            <i class="far fa-image fa-2x text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Simple Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
          <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
          <div class="row js-gallery img-fluid-100 g-sm">
            <?php for ($i = 23; $i < 29; $i++) { ?>
              <div class="col-6 col-lg-4 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                  <?php $cb->get_photo($i, false, 'img-fluid'); ?>
                </a>
              </div>
            <?php } ?>
          </div>
          <!-- END Simple Gallery -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary-dark">
          <div class="p-3">
            <i class="fa fa-2x fa-camera-retro text-white-75"></i>
          </div>
          <div class="ms-1 text-end">
            <p class="fs-lg fw-semibold text-white mb-0">
              Real Estate Gallery
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              6 Photos
            </p>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Simple Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
          <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
          <div class="row js-gallery img-fluid-100 g-sm">
            <?php for ($i = 36; $i < 42; $i++) { ?>
              <div class="col-6 col-lg-4 animated fadeIn">
                <a class="img-link img-link-simple img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                  <?php $cb->get_photo($i, false, 'img-fluid'); ?>
                </a>
              </div>
            <?php } ?>
          </div>
          <!-- END Simple Gallery -->
        </div>
      </div>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full text-center bg-gd-sea">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-steam text-white-75"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            Best Games
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Top 5
          </p>
        </div>
        <div class="block-content block-content-full">
          <table class="table table-borderless table-striped table-hover mb-0 fs-sm">
            <tbody>
              <tr>
                <td class="text-center" style="width: 40px;">01</td>
                <td class="fw-medium">
                  Half Life 2
                </td>
                <td class="text-center" style="width: 40px;">
                  <span class="fw-semibold text-success">9.6</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">02</td>
                <td class="fw-medium">
                  Grand Theft Auto V
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.6</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">03</td>
                <td class="fw-medium">
                  The Orange Box
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.6</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">04</td>
                <td class="fw-medium">
                  Half Life
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.6</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">05</td>
                <td class="fw-medium">
                  BioShock
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.6</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="far fa-eye opacity-50 me-1"></i> Show all..
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full text-center bg-gd-dusk">
          <div class="p-3 mb-2">
            <i class="fa fa-3x fa-film text-white-75"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            Best Movies
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Top 5
          </p>
        </div>
        <div class="block-content block-content-full">
          <table class="table table-borderless table-striped table-hover mb-0 fs-sm">
            <tbody>
              <tr>
                <td class="text-center" style="width: 40px;">01</td>
                <td class="fw-medium">
                  The Godfather
                </td>
                <td class="text-center" style="width: 40px;">
                  <span class="fw-semibold text-success">9.2</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">02</td>
                <td class="fw-medium">
                  The Shawshank Redemption
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.3</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">03</td>
                <td class="fw-medium">
                  Schindler's List 
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">8.9</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">04</td>
                <td class="fw-medium">
                  Raging Bull
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">8.2</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">05</td>
                <td class="fw-medium">
                  Casablanca
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">8.5</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="far fa-eye opacity-50 me-1"></i> Show all..
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="block block-rounded">
        <div class="block-content block-content-full text-center bg-gd-cherry">
          <div class="p-3 mb-2">
            <i class="fab fa-3x fa-youtube text-white-75"></i>
          </div>
          <p class="fs-lg fw-semibold text-white mb-0">
            Best TV Shows
          </p>
          <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
            Top 5
          </p>
        </div>
        <div class="block-content block-content-full">
          <table class="table table-borderless table-striped table-hover mb-0 fs-sm">
            <tbody>
              <tr>
                <td class="text-center" style="width: 40px;">01</td>
                <td class="fw-medium">
                  Planet Earth II
                </td>
                <td class="text-center" style="width: 40px;">
                  <span class="fw-semibold text-success">9.5</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">02</td>
                <td class="fw-medium">
                  Band of Brothers
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.5</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">03</td>
                <td class="fw-medium">
                  Planet Earth
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.5</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">04</td>
                <td class="fw-medium">
                  Game of Thrones
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.4</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">05</td>
                <td class="fw-medium">
                  Breaking Bad
                </td>
                <td class="text-center">
                  <span class="fw-semibold text-success">9.4</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <a class="btn btn-alt-primary" href="javascript:void(0)">
            <i class="far fa-eye opacity-50 me-1"></i> Show all..
          </a>
        </div>
      </div>
    </div>
    <!-- END Row #2 -->
  </div>
  <!-- END Advanced Media Widgets -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Codebase.helpersOnLoad(['jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
