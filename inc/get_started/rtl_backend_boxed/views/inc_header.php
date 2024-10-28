<?php
/**
 * get_started/rtl_backend_boxed/views/inc_header.php
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
    <div class="space-x-1">
      <!-- Logo -->
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire text-primary"></i>
        <span class="fs-4 text-dual">Palop</span><span class="fs-4 text-black"> Asesores</span>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Left Section -->

    <!-- Middle Section -->
    <div class="d-none d-lg-block">
      <!-- Header Navigation -->
      <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
      <ul class="nav-main nav-main-horizontal nav-main-hover">
        <?php $cb->build_nav($cb->main_nav, true); ?>
      </ul>
      <!-- END Header Navigation -->
    </div>
    <!-- END Middle Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- Color Themes + A few of the many header options (used just for demonstration) -->
      <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-brush"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
        <div class="px-3 py-2 bg-body-light rounded-top">
            <h5 class="fs-sm text-center mb-0">
              Color Themes
            </h5>
          </div>
          <div class="p-3">
            <div class="row g-0 text-center">
              <div class="col-2">
                <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-elegance" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/elegance.min.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-pulse" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/pulse.min.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-flat" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/flat.min.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-corporate" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/corporate.min.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-earth" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/earth.min.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="px-3 py-2 bg-body-light rounded-top">
            <h5 class="fs-sm text-center mb-0">
              Dark Mode
            </h5>
          </div>
          <div class="px-2 py-3">
            <div class="row g-1 text-center">
              <div class="col-4">
                <button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
                  <i class="far fa-sun fa-fw opacity-50"></i>
                  <span class="fs-sm fw-medium">Light</span>
                </button>
              </div>
              <div class="col-4">
                <button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_on" data-dark-mode="on">
                  <i class="fa fa-moon fa-fw opacity-50"></i>
                  <span class="fs-sm fw-medium">Dark</span>
                </button>
              </div>
              <div class="col-4">
                <button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_system" data-dark-mode="system">
                  <i class="fa fa-desktop fa-fw opacity-50"></i>
                  <span class="fs-sm fw-medium">System</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Color Themes + A few of the many header options -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Close Search Section -->
          <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
          <button type="button" class="btn rounded-0 btn-secondary px-3" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Search Section -->
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <button type="submit" class="btn rounded-0 btn-secondary px-3">
            <i class="fa fa-fw fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="far fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
