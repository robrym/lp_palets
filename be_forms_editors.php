<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/simplemde/simplemde.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded mb-0">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Editors
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Text editing at its finest.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- SimpleMDE Editor (js-simplemde class is initialized in Helpers.jsSimpleMDE()) -->
  <!-- For more info and examples you can check out https://github.com/NextStepWebs/simplemde-markdown-editor -->
  <h2 class="content-heading">SimpleMDE</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Markdown Editor</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
        <!-- SimpleMDE Container -->
        <textarea class="js-simplemde" id="simplemde" name="simplemde">Hello SimpleMDE!</textarea>
      </form>
    </div>
  </div>
  <!-- END SimpleMDE Editor -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/simplemde/simplemde.min.js'); ?>

<!-- Page JS Helpers (SimpleMDE plugin) -->
<script>Codebase.helpersOnLoad(['js-simplemde']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>