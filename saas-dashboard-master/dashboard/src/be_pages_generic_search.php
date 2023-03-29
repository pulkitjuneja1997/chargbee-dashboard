<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Search -->
  <form class="push" action="be_pages_generic_search.php" method="POST">
    <div class="input-group input-group-lg">
      <input type="text" class="form-control" placeholder="Search web app..">
      <button type="submit" class="btn btn-primary">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </form>
  <!-- END Search -->

  <!-- Results -->
  <div class="block block-rounded overflow-hidden">
    <ul class="nav nav-tabs nav-tabs-block" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" id="search-classic-tab" data-bs-toggle="tab" data-bs-target="#search-classic" role="tab" aria-controls="search-classic" aria-selected="true">
          Classic
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-photos-tab" data-bs-toggle="tab" data-bs-target="#search-photos" role="tab" aria-controls="search-photos" aria-selected="false">
          Photos
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">
          Users
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="false">
          Projects
        </button>
      </li>
    </ul>
    <div class="block-content block-content-full tab-content overflow-hidden">
      <!-- Classic -->
      <div class="tab-pane fade show active" id="search-classic" role="tabpanel" aria-labelledby="search-classic-tab">
        <div class="fs-3 fw-semibold py-4 mb-3 text-center border-bottom">
          <span class="text-primary fw-bold">10</span> sites found for <mark class="text-danger">codebase</mark>
        </div>
        <div class="row items-push">
          <?php for ($i = 1; $i < 6; $i++) { ?>
            <div class="col-lg-6">
              <h4 class="h5 mb-1">
                <a href="javascript:void(0)">Codebase - Bootstrap 5 UI Framework</a>
              </h4>
              <div class="fs-sm text-earth mb-1">https://pixelcave.com/</div>
              <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
            </div>
            <div class="col-lg-6">
              <h4 class="h5 mb-1">
                <a href="javascript:void(0)">Codebase - Bootstrap 5 UI Framework</a>
              </h4>
              <div class="fs-sm text-earth mb-1">https://pixelcave.com/</div>
              <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- END Classic -->

      <!-- Photos -->
      <div class="tab-pane fade" id="search-photos" role="tabpanel" aria-labelledby="search-photos-tab">
        <div class="fs-3 fw-semibold py-4 mb-3 text-center border-bottom">
          <span class="text-primary fw-bold">9</span> images found for <mark class="text-danger">mountain</mark>
        </div>
        <div class="row g-sm">
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo2.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo6.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo21.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo9.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo24.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 push">
            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo25.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- END Photos -->

      <!-- Users -->
      <div class="tab-pane fade" id="search-users" role="tabpanel" aria-labelledby="search-users-tab">
        <div class="fs-3 fw-semibold py-4 mb-3 text-center border-bottom">
          <span class="text-primary fw-bold">10</span> users found for <mark class="text-danger">client</mark>
        </div>
        <table class="table table-striped table-borderless table-hover table-vcenter">
          <thead class="thead-light">
            <tr>
              <th class="d-none d-sm-table-cell text-center" style="width: 40px;">#</th>
              <th class="text-center" style="width: 70px;"><i class="si si-user"></i></th>
              <th>Name</th>
              <th class="d-none d-sm-table-cell">Email</th>
              <th class="d-none d-lg-table-cell" style="width: 15%;">Access</th>
              <th class="text-center" style="width: 80px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $gender = array('male', 'female');

            for ($i = 1; $i < 11; $i++) {
              $gender_random = $gender[rand(0, 1)];
              ?>
              <tr>
                <td class="d-none d-sm-table-cell text-center fw-bold"><?php echo $i; ?></td>
                <td class="text-center">
                  <?php $cb->get_avatar(0, $gender_random, 48); ?>
                </td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)"><?php $cb->get_name($gender_random); ?></a>
                </td>
                <td class="d-none d-sm-table-cell">
                  client<?php echo $i; ?>@example.com
                </td>
                <td class="d-none d-lg-table-cell">
                  <?php $cb->get_tag(); ?>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Edit">
                      <i class="fa fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- END Users -->

      <!-- Projects -->
      <div class="tab-pane fade" id="search-projects" role="tabpanel" aria-labelledby="search-projects-tab">
        <div class="fs-3 fw-semibold py-4 mb-3 text-center border-bottom">
          <span class="text-primary fw-bold">6</span> projects found for <mark class="text-danger">creativity</mark>
        </div>
        <table class="table table-striped table-borderless table-hover table-vcenter">
          <thead class="thead-light">
            <tr>
              <th style="width: 50%;">Project</th>
              <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Status</th>
              <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Sales</th>
              <th class="text-center" style="width: 20%;">Earnings</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">Web Application Framework</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Your web applications have never been so easy to create and publish.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-success">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">1795</td>
              <td class="fs-4 text-center fw-semibold">$ 21,987</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">WP Theme</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Create a fully functional website with just a few clicks.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-warning">In Progress</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">1680</td>
              <td class="fs-4 text-center fw-semibold">$ 11,350</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">Dashboard Template</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Explore new designs with this new and fresh dashboard admin template.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-success">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">3500</td>
              <td class="fs-4 text-center fw-semibold">$ 16,218</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">Flaticon Set</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  A beatifully and and crafted icon set including more than 3000 icons.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-success">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">2500</td>
              <td class="fs-4 text-center fw-semibold">$ 18,800</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">iOS UI Kit</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Create your app wireframes easily with this new UI Kit featuring iOS based designs.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-danger">Cancelled</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">2690</td>
              <td class="fs-4 text-center fw-semibold">$ 10,002</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-1">
                  <a href="javascript:void(0)">Mobile App Framework</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Create your iOS and Android applications with this powerful and modern framework.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="badge bg-success">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell fs-4 text-center fw-semibold">1980</td>
              <td class="fs-4 text-center fw-semibold">$ 25,985</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- END Projects -->
    </div>
  </div>
  <!-- END Results -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>