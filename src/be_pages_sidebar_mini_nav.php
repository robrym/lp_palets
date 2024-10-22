<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
$cb->inc_sidebar = 'inc/backend/views/inc_sidebar_mini_nav.php';

// Page specific configuration
$cb->l_sidebar_dark = false;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">
    Sidebar <small>with Mini Nav</small>
  </h2>

  <!-- Dummy content -->
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>