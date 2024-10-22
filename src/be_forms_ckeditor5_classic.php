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
          CKEditor 5
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Classic editor mode.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- CKEditor 5 Classic (js-ckeditor5-classic id is initialized in Helpers.jsCkeditor5()) -->
  <!-- For more info and examples you can check out http://ckeditor.com -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Full Editor</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <!-- CKEditor 5 Classic Container -->
          <div id="js-ckeditor5-classic">Hello classic CKEditor 5!</div>
        </div>
      </form>
    </div>
  </div>
  <!-- END CKEditor 5 Classic-->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/ckeditor5-classic/build/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>Codebase.helpersOnLoad(['js-ckeditor5']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>