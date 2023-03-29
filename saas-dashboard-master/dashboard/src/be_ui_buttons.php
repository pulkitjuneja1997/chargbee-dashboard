<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Button Styles -->
  <h2 class="content-heading">Button Styles</h2>

  <!-- Contextual -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Contextual</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily style a button or a link by adding the base class <code>btn</code> and then by applying a color variation class.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary">Primary</button>
          <div class="mt-2">
            <code>btn-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success">Success</button>
          <div class="mt-2">
            <code>btn-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info">Info</button>
          <div class="mt-2">
            <code>btn-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning">Warning</button>
          <div class="mt-2">
            <code>btn-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger">Danger</button>
          <div class="mt-2">
            <code>btn-danger</code>
          </div>
        </div>
      </div>
      <p class="mb-4">You can also achieve outline styles for your buttons by using the related classes.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <div class="mt-2">
            <code>btn-outline-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-outline-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success">Success</button>
          <div class="mt-2">
            <code>btn-outline-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info">Info</button>
          <div class="mt-2">
            <code>btn-outline-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <div class="mt-2">
            <code>btn-outline-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <div class="mt-2">
            <code>btn-outline-danger</code>
          </div>
        </div>
      </div>
      <p class="mb-4">Finally, there is also an alternative style which you can use with your buttons.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary">Primary</button>
          <div class="mt-2">
            <code>btn-alt-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-alt-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success">Success</button>
          <div class="mt-2">
            <code>btn-alt-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info">Info</button>
          <div class="mt-2">
            <code>btn-alt-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning">Warning</button>
          <div class="mt-2">
            <code>btn-alt-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger">Danger</button>
          <div class="mt-2">
            <code>btn-alt-danger</code>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Contextual Styles -->

  <!-- Ripple Effect -->
  <!-- Ripple functionality ([data-toggle="click-ripple"] is initialized in Helpers.cbRipple()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Ripple Effect</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily add a ripple effect on click to any button you want by adding <code>data-toggle=&quot;click-ripple&quot;</code>.</p>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Ripple Effect -->

  <!-- Sizes -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sizes</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You might need various button sizes based on your content and context. Making your buttons smaller or larger is as easy as adding an extra size variation class. It can be applied along with any other color or shape variation class to create the button that fits you best.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-4">
          <button type="button" class="btn btn-sm btn-warning mb-2">Small</button><br>
          <button type="button" class="btn btn-sm btn-outline-warning mb-2">Small</button><br>
          <button type="button" class="btn btn-sm btn-alt-warning">Small</button>
          <p class="mt-2">
            <code>btn</code> <code>btn-sm</code>
          </p>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-info mb-2">Normal</button><br>
          <button type="button" class="btn btn-outline-info mb-2">Normal</button><br>
          <button type="button" class="btn btn-alt-info">Normal</button>
          <p class="mt-2">
            <code>btn</code>
          </p>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-lg btn-success mb-2">Large</button><br>
          <button type="button" class="btn btn-lg btn-outline-success mb-2">Large</button><br>
          <button type="button" class="btn btn-lg btn-alt-success">Large</button>
          <p class="mt-2">
            <code>btn</code> <code>btn-lg</code>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Sizes -->
  <!-- END Button Styles -->

  <!-- Button Variations -->
  <h2 class="content-heading">Button Variations</h2>

  <!-- Square -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Square</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily have a square button by adding the <code>rounded-0</code> class.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-0 btn-outline-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-0 btn-alt-primary">Primary</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-0 btn-outline-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-0 btn-alt-secondary">Secondary</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-0 btn-outline-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-0 btn-alt-success">Success</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-0 btn-outline-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-0 btn-alt-info">Info</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-0 btn-outline-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-0 btn-alt-warning">Warning</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-0 btn-outline-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-0 btn-alt-danger">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Square -->

  <!-- Rounded -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Rounded</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">The same way, by adding the <code>rounded-pill</code> class, you can have rounded buttons.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-pill btn-outline-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-pill btn-alt-primary">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-pill btn-outline-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-pill btn-alt-secondary">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-pill btn-outline-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-pill btn-alt-success">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-pill btn-outline-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-pill btn-alt-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-pill btn-outline-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-pill btn-alt-warning">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-pill btn-outline-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-pill btn-alt-danger">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Rounded -->

  <!-- Disabled -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Disabled</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">If you need to disable a button, just add the <code>disabled</code> attribute.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary mb-2" disabled>Primary</button><br>
          <button type="button" class="btn btn-outline-primary mb-2" disabled>Primary</button><br>
          <button type="button" class="btn btn-alt-primary" disabled>Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary mb-2" disabled>Secondary</button><br>
          <button type="button" class="btn btn-outline-secondary mb-2" disabled>Secondary</button><br>
          <button type="button" class="btn btn-alt-secondary" disabled>Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success mb-2" disabled>Success</button><br>
          <button type="button" class="btn btn-outline-success mb-2" disabled>Success</button><br>
          <button type="button" class="btn btn-alt-success" disabled>Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info mb-2" disabled>Info</button><br>
          <button type="button" class="btn btn-outline-info mb-2" disabled>Info</button><br>
          <button type="button" class="btn btn-alt-info" disabled>Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning mb-2" disabled>Warning</button><br>
          <button type="button" class="btn btn-outline-warning mb-2" disabled>Warning</button><br>
          <button type="button" class="btn btn-alt-warning" disabled>Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger mb-2" disabled>Danger</button><br>
          <button type="button" class="btn btn-outline-danger mb-2" disabled>Danger</button><br>
          <button type="button" class="btn btn-alt-danger" disabled>Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Disabled -->
  <!-- END Button Variations -->

  <!-- Buttons with Icons -->
  <h2 class="content-heading">Button with Icons</h2>

  <!-- Default -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Default</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can use any icon you like with your buttons! Prefer the ones that better represent the action of each button.</p>
      <div class="mb-2">
        <button type="button" class="btn btn-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i> Add User
        </button>
        <button type="button" class="btn btn-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i> Download
        </button>
        <button type="button" class="btn btn-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Are you sure?
        </button>
        <button type="button" class="btn btn-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i> Upload
        </button>
        <button type="button" class="btn btn-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i> Delete
        </button>
        <button type="button" class="btn btn-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
        </button>
        <button type="button" class="btn btn-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i> Play
        </button>
      </div>
      <div class="mb-2">
        <button type="button" class="btn btn-outline-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i>Add User
        </button>
        <button type="button" class="btn btn-outline-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i>Download
        </button>
        <button type="button" class="btn btn-outline-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>Are you sure?
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i>Upload
        </button>
        <button type="button" class="btn btn-outline-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Delete
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i>Like
        </button>
        <button type="button" class="btn btn-outline-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i>Play
        </button>
      </div>
      <div class="mb-2">
        <button type="button" class="btn btn-alt-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i>Add User
        </button>
        <button type="button" class="btn btn-alt-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i>Download
        </button>
        <button type="button" class="btn btn-alt-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>Are you sure?
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i>Upload
        </button>
        <button type="button" class="btn btn-alt-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Delete
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i>Like
        </button>
        <button type="button" class="btn btn-alt-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i>Play
        </button>
      </div>
    </div>
  </div>
  <!-- END Default -->

  <!-- Variations -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Variations</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="push">
        <p class="mb-4">You can use icons with any button variation you want, they will adjust accordingly.</p>
        <button type="button" class="btn rounded-0 btn-secondary me-1 mb-1">
          <i class="fa fa-wifi opacity-50 me-1"></i>Square
        </button>
        <button type="button" class="btn rounded-pill btn-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Rounded
        </button>
        <button type="button" class="btn btn-success me-1 mb-1">
          <i class="fa fa-check"></i>
        </button>
        <button type="button" class="btn btn-warning me-1 mb-1">
          <i class="fa fa-exclamation-circle"></i>
        </button>
        <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-1">
          <i class="fa fa-pencil-alt"></i>
        </button>
        <button type="button" class="btn btn-lg btn-secondary me-1 mb-1">
          <i class="fab fa-youtube opacity-50 me-1"></i>Large
        </button>
        <button type="button" class="btn btn-sm btn-primary me-1 mb-1">
          <i class="far fa-life-ring opacity-50 me-1"></i>Small
        </button>
        <button type="button" class="btn btn-sm btn-secondary me-1 mb-1">
          <i class="fa fa-wrench opacity-50 me-1"></i>Small
        </button>
        <button type="button" class="btn btn-lg btn-alt-warning me-1 mb-1">
          <i class="fa fa-tint opacity-50 me-1"></i>Large
        </button>
      </div>
    </div>
  </div>
  <!-- END Variations -->
  <!-- END Buttons with Icons -->

  <!-- Buttons Groups, Dropdowns and Toolbars -->
  <h2 class="content-heading">Button Groups, Dropdowns &amp; Toolbars</h2>

  <!-- Groups and Dropdowns -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Groups and Dropdowns</h3>
    </div>
    <div class="block-content">
      <div class="push">
        <p class="mb-4">Grouping buttons or creating dropdowns/dropups in various sizes is just a few lines away.</p>
        <div class="row items-push">
          <div class="col-xl-6">
            <div class="push">
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupDrop1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="push">
              <div class="btn-group btn-group-sm" role="group" aria-label="btnGroup1">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
            </div>
            <div class="push">
              <div class="btn-group" role="group" aria-label="btnGroup2">
                <button type="button" class="btn btn-info">Left</button>
                <button type="button" class="btn btn-info">Middle</button>
                <button type="button" class="btn btn-info">Right</button>
              </div>
            </div>
            <div class="push">
              <div class="btn-group btn-group-lg" role="group" aria-label="btnGroup3">
                <button type="button" class="btn btn-warning">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-warning">Right</button>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="push">
              <div class="btn-group" role="group" aria-label="Button group with nested dropup">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <div class="btn-group dropup" role="group">
                  <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupDrop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="push">
              <div class="btn-group btn-group-sm" role="group" aria-label="btnGroupIcons1">
                <button type="button" class="btn btn-secondary">
                  <i class="fa fa-play"></i>
                </button>
                <button type="button" class="btn btn-secondary">
                  <i class="fa fa-pause"></i>
                </button>
                <button type="button" class="btn btn-secondary">
                  <i class="fa fa-stop"></i>
                </button>
              </div>
            </div>
            <div class="push">
              <div class="btn-group" role="group" aria-label="btnGroupIcons2">
                <button type="button" class="btn btn-info">
                  <i class="fa fa-play"></i>
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-pause"></i>
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-stop"></i>
                </button>
              </div>
            </div>
            <div class="push">
              <div class="btn-group btn-group-lg" role="group" aria-label="btnGroupIcons3">
                <button type="button" class="btn btn-warning">
                  <i class="fa fa-play"></i>
                </button>
                <button type="button" class="btn btn-warning">
                  <i class="fa fa-pause"></i>
                </button>
                <button type="button" class="btn btn-warning">
                  <i class="fa fa-stop"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="push">
        <p class="mb-4">You can also have vertical button groups with dropdowns or dropups</p>
        <div class="row items-push">
          <div class="col-xl-6">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group with nested dropdown">
              <button type="button" class="btn btn-primary">Button</button>
              <button type="button" class="btn btn-primary">Button</button>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                  </a>
                </div>
              </div>
              <button type="button" class="btn btn-primary">Button</button>
              <div class="btn-group dropup" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group with nested dropdown">
              <button type="button" class="btn btn-secondary">Button</button>
              <button type="button" class="btn btn-secondary">Button</button>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                  </a>
                </div>
              </div>
              <button type="button" class="btn btn-secondary">Button</button>
              <div class="btn-group dropup" role="group">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Groups and Dropdowns -->

  <!-- Toolbars -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Toolbars</h3>
    </div>
    <div class="block-content">
      <div class="push">
        <p class="mb-4">
          Create toolbars by using icons and buttons.
        </p>
        <div class="push">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-1" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-align-left"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-align-center"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-align-right"></i>
              </button>
            </div>
            <div class="btn-group me-1" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-list-ul"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-list-ol"></i>
              </button>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
              <button type="button" class="btn btn-secondary dropdown-toggle" id="toolbarDrop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
              <div class="dropdown-menu" aria-labelledby="toolbarDrop">
                <h6 class="dropdown-header">Dropdown header</h6>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell opacity-50 me-1"></i>News
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-envelope opacity-50 me-1"></i>Messages
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i>Edit Profile
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="push">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-1" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-file"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="far fa-save"></i>
              </button>
            </div>
            <div class="btn-group" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-bold"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-italic"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-underline"></i>
              </button>
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-strikethrough"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="push">
        <p class="mb-4">You can also change toolbar’s size easily.</p>
        <div class="btn-toolbar push" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group btn-group-sm me-1" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-file"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="far fa-save"></i>
            </button>
          </div>
          <div class="btn-group btn-group-sm" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-bold"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-italic"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-underline"></i>
            </button>
          </div>
        </div>
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group btn-group-lg me-1" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">
              <i class="far fa-file"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="far fa-save"></i>
            </button>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-bold"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-italic"></i>
            </button>
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-underline"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Toolbars -->
  <!-- END Buttons Groups, Dropdowns and Toolbars -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>