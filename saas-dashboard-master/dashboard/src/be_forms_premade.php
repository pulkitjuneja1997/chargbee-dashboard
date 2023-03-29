<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Lock Forms -->
  <h2 class="content-heading">Lock Forms</h2>
  <div class="row items-push">
    <div class="col-md-6">
      <!-- Default Lock -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content block-content-full text-center bg-body-dark">
          <?php $cb->get_avatar(1, '', 96, 'img-thumb'); ?>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="lock1-password">Password</label>
              <input type="password" class="form-control" id="lock1-password" name="lock1-password" placeholder="Enter your password..">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-unlock opacity-50 me-1"></i> Unlock
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Default Lock -->
    </div>
    <div class="col-md-6">
      <!-- Floating Labels Lock -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Floating Labels</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content block-content-full text-center bg-body-dark">
          <?php $cb->get_avatar(8, '', 96, 'img-thumb'); ?>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="lock2-password" name="lock2-password" placeholder="Enter your password">
                <label class="form-label" for="lock2-password">Password</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-unlock opacity-50 me-1"></i> Unlock
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Floating Labels Lock -->
    </div>
  </div>
  <!-- END Lock Forms -->

  <!-- Login Forms -->
  <h2 class="content-heading">Login Forms</h2>
  <div class="row items-push">
    <div class="col-md-6">
      <!-- Default Login -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="login1-username">Username</label>
              <input type="text" class="form-control" id="login1-username" name="login1-username" placeholder="Enter your username..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="login1-password">Password</label>
              <input type="password" class="form-control" id="login1-password" name="login1-password" placeholder="Enter your password..">
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="login1-remember-me" name="login1-remember-me">
                <label class="form-check-label" for="login1-remember-me">Remember Me?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-arrow-right opacity-50 me-1"></i> Login
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Default Login -->
    </div>
    <div class="col-md-6">
      <!-- Floating Labels Login -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Floating Labels</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="login2-username" name="login2-username" placeholder="Enter your username">
                <label class="form-label" for="login2-username">Username</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="login2-password" name="login2-password" placeholder="Enter your password">
                <label class="form-label" for="login2-password">Password</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="login2-remember-me" name="login2-remember-me">
                <label class="form-check-label" for="login2-remember-me">Remember Me?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-arrow-right opacity-50 me-1"></i> Login
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Floating Labels Login -->
    </div>
  </div>
  <!-- END Login Forms -->

  <!-- Register Forms -->
  <h2 class="content-heading">Register Forms</h2>
  <div class="row items-push">
    <div class="col-md-6">
      <!-- Default Register -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="register1-username">Username</label>
              <input type="text" class="form-control" id="register1-username" name="register1-username" placeholder="Enter your username..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="register1-email">Email</label>
              <input type="email" class="form-control" id="register1-email" name="register1-email" placeholder="Enter your email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="register1-password">Password</label>
              <input type="password" class="form-control" id="register1-password" name="register1-password" placeholder="Enter your password..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="register1-password2">Confirm Password</label>
              <input type="password" class="form-control" id="register1-password2" name="register1-password2" placeholder="Confirm your password..">
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="register1-terms" name="register1-terms">
                <label class="form-check-label" for="register1-terms">Agree to terms?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus opacity-50 me-1"></i> Register
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Default Register -->
    </div>
    <div class="col-md-6">
      <!-- Floating Labels Register -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Floating Labels</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="register2-username" name="register2-username" placeholder="Enter your username">
                <label class="form-label" for="register2-username">Username</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="email" class="form-control" id="register2-email" name="register2-email" placeholder="Enter your email">
                <label class="form-label" for="register2-email">Email</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="register2-password" name="register2-password" placeholder="Enter your password">
                <label class="form-label" for="register2-password">Password</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="register2-password2" name="register2-password2" placeholder="Re-enter your password">
                <label class="form-label" for="register2-password2">Confirm Password</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="register2-terms" name="register2-terms">
                <label class="form-check-label" for="register2-terms">Agree to terms?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus opacity-50 me-1"></i> Register
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Floating Labels Register -->
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <!-- Default Register -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="register3-firstname">Firstname</label>
                <input type="text" class="form-control" id="register3-firstname" name="register3-firstname" placeholder="Enter your firstname..">
              </div>
              <div class="col-6">
                <label class="form-label" for="register3-lastname">Lastname</label>
                <input type="text" class="form-control" id="register3-lastname" name="register3-lastname" placeholder="Enter your lastname..">
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="register3-account">Company</label>
              <div class="input-group">
                <input type="text" class="form-control" id="register3-account" name="register3-account" placeholder="Company's name..">
                <span class="input-group-text">.example.com</span>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="register3-email">Email</label>
              <div class="input-group">
                <input type="email" class="form-control" id="register3-email" name="register3-email" placeholder="Enter your email..">
                <span class="input-group-text">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="register3-password">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="register3-password" name="register3-password" placeholder="Enter your password..">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="register3-password2">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="register3-password2" name="register3-password2" placeholder="Enter your password..">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="register3-terms" name="register3-terms">
                <label class="form-check-label" for="register3-terms">Agree to terms?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus opacity-50 me-1"></i> Register
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Default Register -->
    </div>
    <div class="col-xl-6">
      <!-- Floating Labels Register -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Floating Labels</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="register4-firstname" name="register4-firstname" placeholder="Enter your firstname">
                  <label class="form-label" for="register4-firstname">Firstname</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="register4-lastname" name="register4-lastname" placeholder="Enter your lastname">
                  <label class="form-label" for="register4-lastname">Lastname</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="register4-company" name="register4-company" placeholder="Enter your company">
                <label class="form-label" for="register4-company">Company</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="email" class="form-control" id="register4-email" name="register4-email" placeholder="Enter your email">
                <label class="form-label" for="register4-email">Email</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="register4-password" name="register4-password" placeholder="Enter your password">
                <label class="form-label" for="register4-password">Password</label>
              </div>
              </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="password" class="form-control" id="register4-password2" name="register4-password2" placeholder="Re-enter your password">
                <label class="form-label" for="register4-password2">Confirm Password</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="register4-terms" name="register4-terms">
                <label class="form-check-label" for="register4-terms">Agree to terms?</label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus opacity-50 me-1"></i> Register
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Floating Labels Register -->
    </div>
  </div>
  <!-- END Register Forms -->

  <!-- Contact Forms -->
  <h2 class="content-heading">Contact Forms</h2>
  <div class="row items-push">
    <div class="col-xl-6">
      <!-- Default Contact -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="contact1-firstname">Firstname</label>
                <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter your firstname..">
              </div>
              <div class="col-6">
                <label class="form-label" for="contact1-lastname">Lastname</label>
                <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter your lastname..">
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="contact1-email">Email</label>
              <div class="input-group">
                <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Enter your email..">
                <span class="input-group-text">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="contact1-subject">Where?</label>
              <select class="form-select" id="contact1-subject" name="contact1-subject" size="1">
                <option value="1">Support</option>
                <option value="2">Billing</option>
                <option value="3">Management</option>
                <option value="4">Feature Request</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="contact1-msg">Message</label>
              <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="7" placeholder="Enter your message.."></textarea>
              <div class="form-text text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-paper-plane opacity-50 me-1"></i> Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Default Contact -->
    </div>
    <div class="col-xl-6">
      <!-- Floating Labels Contact -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Floating Labels</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
            <div class="row mb-4">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="contact2-firstname" name="contact2-firstname" placeholder="Enter your firstname">
                  <label class="form-label" for="contact2-firstname">Firstname</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="contact2-lastname" name="contact2-lastname" placeholder="Enter your lastname">
                  <label class="form-label" for="contact2-lastname">Lastname</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating input-group">
                <input type="email" class="form-control" id="contact2-email" name="contact2-email" placeholder="Enter your email">
                <label class="form-label" for="contact2-email">Email</label>
                <span class="input-group-text">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <select class="form-select" id="contact2-subject" name="contact2-subject" size="1" placeholder="Enter your subject">
                  <option value="1">Support</option>
                  <option value="2">Billing</option>
                  <option value="3">Management</option>
                  <option value="4">Feature Request</option>
                </select>
                <label class="form-label" for="contact2-subject">Where?</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <textarea class="form-control" id="contact2-msg" name="contact2-msg" rows="7" placeholder="Enter your message"></textarea>
                <label class="form-label" for="contact2-msg">Message</label>
              </div>
              <div class="form-text text-muted text-end">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-paper-plane opacity-50 me-1"></i> Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Floating Labels Contact -->
    </div>
  </div>
  <!-- END Contact Forms -->

  <!-- Mega Form -->
  <h2 class="content-heading">Mega Form</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Multiple Columns</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_premade.php" method="POST" onsubmit="return false;">
        <div class="row">
          <div class="col-md-7">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="mega-firstname">Firstname</label>
                <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
              </div>
              <div class="col-6">
                <label class="form-label" for="mega-lastname">Lastname</label>
                <input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-4">
              <label class="form-label" for="mega-lastname">Username</label>
              <input type="text" class="form-control form-control-lg" id="mega-username" name="mega-username" placeholder="Enter your username..">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="mb-4">
              <label class="form-label" for="mega-bio">Bio</label>
              <textarea class="form-control form-control-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-4">
              <label class="form-label" for="mega-city">Where do you live?</label>
              <input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" placeholder="Enter your location..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="mega-skills">Skills</label>
              <select class="form-select" id="mega-skills" name="mega-skills" size="7" multiple>
                <option value="1">HTML</option>
                <option value="2">CSS</option>
                <option value="3">JavaScript</option>
                <option value="4">PHP</option>
                <option value="5">Ruby</option>
                <option value="6">Photoshop</option>
                <option value="7">Illustrator</option>
              </select>
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="mega-age">Age</label>
                <input type="text" class="form-control form-control-lg" id="mega-age" name="mega-age" placeholder="Enter your age..">
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label d-block">Gender</label>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="mega-gender-group-female" name="mega-gender-group">
                <label class="form-check-label" for="mega-gender-group-female">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="mega-gender-group-male" name="mega-gender-group">
                <label class="form-check-label" for="mega-gender-group-male">Male</label>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-4">
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-check opacity-50 me-1"></i> Complete Profile
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Mega Form -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>