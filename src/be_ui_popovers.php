<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Popovers
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Similar to the ones found on iOS.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Popovers -->
  <!-- Bootstrap Popover (data-bs-toggle="popover" and .js-popover class are initialized in Helpers.bsPopover()) -->
  <!-- For advanced Popover usage you can check out https://getbootstrap.com/docs/5.3/components/popovers/ -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Examples</h3>
    </div>
    <div class="block-content">
      <!-- Default -->
      <h2 class="content-heading">Default</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Show your popovers on hover
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="popover" data-bs-placement="top" title="Top Popover" data-bs-content="This is example content. You can put a description or more info here.">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="popover" data-bs-placement="right" title="Right Popover" data-bs-content="This is example content. You can put a description or more info here.">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="This is example content. You can put a description or more info here.">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-primary" data-bs-toggle="popover" data-bs-placement="left" title="Left Popover" data-bs-content="This is example content. You can put a description or more info here.">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Default -->

      <!-- Click Triggered -->
      <h2 class="content-heading">Click Triggered</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Show your popovers on click
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="top" title="Top Popover" data-bs-content="This is example content. You can put a description or more info here.">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" title="Right Popover" data-bs-content="This is example content. You can put a description or more info here.">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="This is example content. You can put a description or more info here.">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="left" title="Left Popover" data-bs-content="This is example content. You can put a description or more info here.">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Click Triggered -->

      <!-- Animation -->
      <h2 class="content-heading">Animation</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can enable a fade animation to your popovers
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="Top Popover" data-bs-content="This is example content. You can put a description or more info here.">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="right" title="Right Popover" data-bs-content="This is example content. You can put a description or more info here.">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="This is example content. You can put a description or more info here.">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="left" title="Left Popover" data-bs-content="This is example content. You can put a description or more info here.">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Animation -->

      <!-- HTML -->
      <h2 class="content-heading">HTML</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can add HTML in your popovers as well
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push text-center">
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="top" title="Popover Title" data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar10.jpg' alt=''></div>">Top</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="right" title="Popover Title" data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar2.jpg' alt=''></div>">Right</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="bottom" title="Popover Title" data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar5.jpg' alt=''></div>">Bottom</button>
            </div>
            <div class="col-sm-6 col-xl-3">
              <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="left" title="Popover Title" data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar16.jpg' alt=''></div>">Left</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END HTML -->
    </div>
  </div>
  <!-- END Popovers -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
