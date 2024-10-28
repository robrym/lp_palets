<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded mb-0">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Gallery
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Clean and easy way to showcase your images. Powered by Magnific plugin.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Simple Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
  <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
  <h2 class="content-heading">Simple</h2>
  <div class="row items-push js-gallery img-fluid-100">
    <?php for ($i = 17; $i < 29; $i++) { ?>
      <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
          <?php $cb->get_photo($i, false, 'img-fluid'); ?>
        </a>
      </div>
    <?php } ?>
  </div>
  <!-- END Simple Gallery -->

  <!-- Advanced Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
  <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
  <h2 class="content-heading">Advanced</h2>
  <div class="row items-push js-gallery">
    <?php for ($i = 16; $i > 4; $i--) { ?>
      <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
          <?php $cb->get_photo($i, false, 'img-fluid options-item'); ?>
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-1">Image</h3>
              <h4 class="h6 fw-normal text-white-75 mb-3">More Details</h4>
              <a class="btn btn-sm btn-alt-primary img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                <i class="fa fa-search-plus opacity-50 me-1"></i> View
              </a>
              <a class="btn btn-sm btn-alt-success" href="javascript:void(0)">
                <i class="fa fa-pencil-alt opacity-50 me-1"></i> Edit
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <!-- END Advanced Gallery -->
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