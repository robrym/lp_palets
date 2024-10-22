<?php
/**
 * landing/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="space-x-1 d-flex align-items-center space-x-2">
      <!-- Logo -->
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire text-primary"></i>
        <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
      </a>
      <!-- END Logo -->

      <!-- Version -->
      <span class="d-inline-block fs-xs fw-medium bg-primary-dark text-white rounded-pill py-1 px-2"><?php echo $cb->version; ?></span>
      <!-- END Version -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="d-flex align-items-center gap-2">
      <!-- Options -->
      <div class="dropdown">
        <button type="button" class="btn btn-alt-secondary" id="landing-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-brush"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end fs-sm p-0" aria-labelledby="landing-themes-dropdown">
          <div class="px-3 py-2 bg-body-light rounded-top">
            <h5 class="fs-sm text-center mb-0">
              Color Themes
            </h5>
          </div>
          <div class="p-2">
            <!-- Color Themes -->
            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default">
              <span>Default</span>
              <i class="fa fa-circle text-default"></i>
            </button>
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/elegance.min.css">
              <span>Elegance</span>
              <i class="fa fa-circle text-elegance"></i>
            </button>
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/pulse.min.css">
              <span>Pulse</span>
              <i class="fa fa-circle text-pulse"></i>
            </button>
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/flat.min.css">
              <span>Flat</span>
              <i class="fa fa-circle text-flat"></i>
            </button>
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/Corporate.min.css">
              <span>Corporate</span>
              <i class="fa fa-circle text-corporate"></i>
            </button>
            <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/earth.min.css">
              <span>Earth</span>
              <i class="fa fa-circle text-earth"></i>
            </button>
            <!-- END Color Themes -->
          </div>
          <div class="px-3 py-2 bg-body-light rounded-top">
            <h5 class="fs-sm text-center mb-0">
              Dark Mode
            </h5>
          </div>
          <div class="p-2">
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
            <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
              <i class="far fa-sun fa-fw opacity-50"></i>
              <span class="fs-sm fw-medium">Light</span>
            </button>
            <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_on" data-dark-mode="on">
              <i class="fa fa-moon fa-fw opacity-50"></i>
              <span class="fs-sm fw-medium">Dark</span>
            </button>
            <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_system" data-dark-mode="system">
              <i class="fa fa-desktop fa-fw opacity-50"></i>
              <span class="fs-sm fw-medium">System</span>
            </button>
            <!-- END Dark Mode -->
          </div>
        </div>
      </div>
      <!-- END Options -->

      <a class="btn btn-alt-success" href="https://pixelcave.com/products/codebase?purchase=true&ref=demo">
        <i class="fa fa-shopping-bag opacity-50"></i>
        <span class="ms-1 d-none d-sm-inline-block">Purchase</span>
      </a>
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->
</header>
<!-- END Header -->
