<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-body-dark">
  <div class="hero-static content content-full px-1">
    <div class="row mx-0 justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <!-- Header -->
        <div class="py-4 text-center">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">Palop</span><span class="fs-4 text-body-color"> Asesores</span>
          </a>
          <h1 class="h3 fw-bold mt-4 mb-1">
            Create New Account
          </h1>
          <h2 class="fs-5 lh-base fw-normal text-muted mb-0">
            We’re excited to have you on board!
          </h2>
        </div>
        <!-- END Header -->

        <!-- Sign Up Form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-signup" action="be_pages_auth_all.php" method="POST">
          <div class="block block-themed block-rounded block-fx-shadow">
            <div class="block-header bg-gd-emerald">
              <h3 class="block-title">Please add your details</h3>
            </div>
            <div class="block-content">
              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="signup-username" name="signup-username" placeholder="Enter your username">
                <label class="form-label" for="signup-username">Username</label>
              </div>
              <div class="form-floating mb-4">
                <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Enter your email">
                <label class="form-label" for="signup-email">Email</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Enter your password">
                <label class="form-label" for="signup-password">Password</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" placeholder="Confirm password">
                <label class="form-label" for="signup-password-confirm">Confirm Password</label>
              </div>
              <div class="row">
                <div class="col-sm-6 d-sm-flex align-items-center push">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms" value="1">
                    <label class="form-check-label" for="signup-terms">I agree to Terms</label>
                  </div>
                </div>
                <div class="col-sm-6 text-sm-end push">
                  <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                    Create Account
                  </button>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light d-flex justify-content-between">
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_signin3.php">
                <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
              </a>
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                <i class="fa fa-book opacity-50 me-1"></i> Read Terms
              </a>
            </div>
          </div>
        </form>
        <!-- END Sign Up Form -->
      </div>
    </div>
  </div>

  <!-- Terms Modal -->
  <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <h5 class="mb-2">1. General</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">2. Account</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">3. Service</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">4. Payments</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
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
  <!-- END Terms Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugins) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signup.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>