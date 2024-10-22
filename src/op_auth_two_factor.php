<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-gd-dusk">
  <div class="hero-static content content-full bg-body-extra-light">
    <!-- Header -->
    <div class="d-flex align-items-center justify-content-center py-4 text-center">
      <div class="col-md-6">
        <a class="link-fx fw-bold" href="index.php">
          <i class="fa fa-fire"></i>
          <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
        </a>
        <div class="mb-4 mt-5">
          <i class="si si-lock-open fa-3x"></i>
        </div>
        <h1 class="h3 fw-bold mb-2">Authenticate your account</h1>
        <h2 class="fs-5 lh-base fw-normal text-muted mb-0">Please confirm your account by entering the authorization code sent to your mobile number *******3235.</h2>
      </div>
    </div>
    <!-- END Header -->

    <!-- Form -->
    <div class="row justify-content-center text-center">
      <div class="col-sm-8 col-md-6 col-xl-4">
        <form id="form-2fa" action="be_pages_auth_all.php" method="POST" class="py-4">
          <div class="d-flex items-center justify-content-center gap-2 mb-4">
            <input type="text" class="form-control form-control-lg text-center px-0" id="num1" name="num1" maxlength="1" style="width: 38px;">
            <input type="text" class="form-control form-control-lg text-center px-0" id="num2" name="num2" maxlength="1" style="width: 38px;">
            <input type="text" class="form-control form-control-lg text-center px-0" id="num3" name="num3" maxlength="1" style="width: 38px;">
            <span class="d-flex align-items-center">-</span>
            <input type="text" class="form-control form-control-lg text-center px-0" id="num4" name="num4" maxlength="1" style="width: 38px;">
            <input type="text" class="form-control form-control-lg text-center px-0" id="num5" name="num5" maxlength="1" style="width: 38px;">
            <input type="text" class="form-control form-control-lg text-center px-0" id="num6" name="num6" maxlength="1" style="width: 38px;">
          </div>
          <div>
            <button type="submit" class="btn btn-lg btn-alt-primary px-6 py-2 fw-semibold">
              Submit
            </button>
          </div>
        </form>
        <p class="fs-sm py-4 text-muted mb-0">
          Haven't received it? <a href="javascript:void(0)">Resend a new code</a>
        </p>
      </div>
    </div>
    <!-- END Form -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_two_factor.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>