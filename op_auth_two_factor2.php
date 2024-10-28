<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="row mx-0 bg-pulse-op">
    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
      <div class="p-4">
        <p class="fs-3 fw-semibold text-white">
          <i class="fa fa-bell opacity-50"></i> You have <a class="link-fx text-white" href="javascript:void(0)">5 new notifications</a>!
        </p>
        <p class="text-white-75 fw-medium">
          Copyright &copy; <span data-toggle="year-copy"></span>
        </p>
      </div>
    </div>
    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light p-0">
      <div class="content content-full">
        <!-- Header -->
        <div class="py-4 text-center text-md-start">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">Lopherca</span>
          </a>
          <div class="mb-4 mt-5">
            <i class="si si-lock-open fa-3x"></i>
          </div>
          <h1 class="h3 fw-bold mb-2">Authenticate your account</h1>
          <h2 class="fs-5 lh-base fw-normal text-muted mb-0">Please confirm your account by entering the authorization code sent to your mobile number *******3235.</h2>
        </div>
        <!-- END Header -->

        <!-- Form -->
        <div class="text-center text-md-start">
          <form id="form-2fa" action="be_pages_auth_all.php" method="POST" class="py-4">
            <div class="d-flex items-center justify-content-center justify-content-md-start gap-2 mb-4">
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
          <p class="fs-sm text-muted py-4 mb-0">
            Haven't received it? <a href="javascript:void(0)">Resend a new code</a>
          </p>
        </div>
        <!-- END Form -->
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_two_factor.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>