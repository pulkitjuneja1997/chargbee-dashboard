<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/social/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="row">
    <!-- User -->
    <div class="col-lg-4 col-xl-3">
      <!-- Account -->
      <div class="block block-rounded text-center fw-semibold">
        <div class="block-content block-content-full bg-gd-sea">
          <?php $cb->get_avatar(5, '', 64, true); ?>
        </div>
        <div class="block-content p-3">
          <div class="border-bottom pb-3 mb-3">
            Andrea Gardner<br>
            <a class="fs-sm fw-medium text-muted" href="javascript:void(0)">@andrea</a>
          </div>
          <div class="row g-sm">
            <div class="col-4">
              <div class="fs-xs text-muted">Updates</div>
              <a class="fs-lg" href="javascript:void(0)">750</a>
            </div>
            <div class="col-4">
              <div class="fs-xs text-muted">Following</div>
              <a class="fs-lg" href="javascript:void(0)">230</a>
            </div>
            <div class="col-4">
              <div class="fs-xs text-muted">Followers</div>
              <a class="fs-lg" href="javascript:void(0)">1,680</a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Account -->

      <!-- Worldwide Trends -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title fw-semibold">Worldwide Trends</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content p-3">
          <a class="fs-sm fw-semibold" href="javascript:void(0)">#laravelnews</a>
          <p class="fs-sm fw-medium text-muted">29.3k Updates</p>
          <a class="fs-sm fw-semibold" href="javascript:void(0)">#reactjs</a>
          <p class="fs-sm fw-medium text-muted">25.8k Updates</p>
          <a class="fs-sm fw-semibold" href="javascript:void(0)">#angular</a>
          <p class="fs-sm fw-medium text-muted">19.3k Updates</p>
          <a class="fs-sm fw-semibold" href="javascript:void(0)">#pcnews</a>
          <p class="fs-sm fw-medium text-muted">18.6k Updates</p>
          <a class="fs-sm fw-semibold" href="javascript:void(0)">#webdesign2018</a>
          <p class="fs-sm fw-medium text-muted mb-0">17.2k Updates</p>
        </div>
      </div>
      <!-- END Worldwide Trends -->
    </div>
    <!-- END User -->

    <!-- Updates -->
    <div class="col-lg-4 col-xl-6">
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-body-light">
          <form>
            <div class="input-group input-group-lg">
              <input type="text" class="form-control" placeholder="What’s happening?">
              <button type="submit" class="btn btn-primary">
                <i class="far fa-edit opacity-50 me-1"></i> Post
              </button>
            </div>
          </form>
        </div>
        <div class="block-content block-content-full">
          <div class="d-flex">
            <?php $cb->get_avatar(13, '', 48, false, 'flex-shrink-0 me-3'); ?>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)">Wayne Garcia</a>
                <a class="text-muted" href="javascript:void(0)">@waynegarcia</a>
                &bull; 30m
              </p>
              <p class="fs-sm">
                In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </p>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-comment"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="fa fa-fw fa-retweet"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-envelope"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full border-top">
          <div class="d-flex">
            <?php $cb->get_avatar(9, '', 48, false, 'flex-shrink-0 me-3'); ?>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)">John Smith</a>
                <a class="text-muted" href="javascript:void(0)">@j.smith</a>
                &bull; 35m
              </p>
              <p class="fs-sm">
                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </p>
              <?php $cb->get_photo(13, false, 'img-fluid push'); ?>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-comment"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="fa fa-fw fa-retweet"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-envelope"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full border-top">
          <div class="d-flex">
            <?php $cb->get_avatar(10, '', 48, false, 'flex-shrink-0 me-3'); ?>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)">John Doe</a>
                <a class="text-muted" href="javascript:void(0)">@j.doe</a>
                &bull; 50m
              </p>
              <p class="fs-sm">
                Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
              </p>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-comment"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="fa fa-fw fa-retweet"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-envelope"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full border-top">
          <div class="d-flex">
            <?php $cb->get_avatar(3, '', 48, false, 'flex-shrink-0 me-3'); ?>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)">Lisa Ray</a>
                <a class="text-muted" href="javascript:void(0)">@l.ray</a>
                &bull; 3d
              </p>
              <p class="fs-sm">
                Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <?php $cb->get_photo(3, false, 'img-fluid push'); ?>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-comment"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="fa fa-fw fa-retweet"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-envelope"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full border-top">
          <div class="d-flex">
            <?php $cb->get_avatar(2, '', 48, false, 'flex-shrink-0 me-3'); ?>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)">Laura Taylor</a>
                <a class="text-muted" href="javascript:void(0)">@l.taylor</a>
                &bull; 5d
              </p>
              <p class="fs-sm">
                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-comment"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="fa fa-fw fa-retweet"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary me-2">
                <i class="far fa-fw fa-envelope"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Updates -->

    <!-- Extra -->
    <div class="col-lg-4 col-xl-3">
      <!-- Who to follow -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title fw-semibold">Who to Follow</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content p-2">
          <ul class="nav-users">
            <li class="fs-sm">
              <a href="javascript:void(0)">
                <?php $cb->get_avatar(5); ?>
                <i class="fa fa-circle text-success"></i> Helen Jacobs
                <div class="fw-medium text-muted">Web Designer</div>
              </a>
            </li>
            <li class="fs-sm">
              <a href="javascript:void(0)">
                <?php $cb->get_avatar(6); ?>
                <i class="fa fa-circle text-success"></i> Carol Ray
                <div class="fw-medium text-muted">Photographer</div>
              </a>
            </li>
            <li class="fs-sm">
              <a href="javascript:void(0)">
                <?php $cb->get_avatar(11); ?>
                <i class="fa fa-circle text-success"></i> Justin Hunt
                <div class="fw-medium text-muted">Copywriter</div>
              </a>
            </li>
            <li class="fs-sm">
              <a href="javascript:void(0)">
                <?php $cb->get_avatar(9); ?>
                <i class="fa fa-circle text-success"></i> Thomas Riley
                <div class="fw-medium text-muted">UI Designer</div>
              </a>
            </li>
          </ul>
        </div>
        <div class="block-content p-3 border-top">
          <a class="fs-sm fw-medium" href="javascript:void(0)">
            <i class="fa fa-users opacity-50 me-1"></i> Find people you know
          </a>
        </div>
      </div>
      <!-- END Who to follow -->

      <!-- About -->
      <div class="block block-rounded">
        <div class="block-content p-3 text-muted fs-sm">
          &copy; <span data-toggle="year-copy"></span>
          <a class="fs-sm fw-medium text-muted ms-1" href="javascript:void(0)">About Us</a>
          <a class="fs-sm fw-medium text-muted ms-1" href="javascript:void(0)">Copyright</a>
        </div>
        <div class="block-content p-3 border-top">
          <a class="fs-sm fw-medium" href="javascript:void(0)">
            <i class="fa fa-external-link-square-alt opacity-50 me-1"></i> Advertise with Us
          </a>
        </div>
      </div>
      <!-- END About -->
    </div>
    <!-- END Extra -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>