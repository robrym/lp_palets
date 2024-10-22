<?php
/**
 * dashboards/clean/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page
 *
 */
?>

<!-- Sidebar -->
<nav id="sidebar">
  <!-- Sidebar Content -->
  <div class="sidebar-content">
    <!-- Side Header -->
    <div class="content-header justify-content-lg-center">
      <!-- Logo -->
      <div>
        <span class="smini-visible fw-bold tracking-wide fs-lg">
          c<span class="text-primary">b</span>
        </span>
        <a class="link-fx fw-bold tracking-wide mx-auto" href="index.php">
          <span class="smini-hidden">
            <i class="fa fa-fire text-primary"></i>
            <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
          </span>
        </a>
      </div>
      <!-- END Logo -->

      <!-- Options -->
      <div>
        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
          <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Sidebar -->
      </div>
      <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
      <!-- New Account -->
      <div class="content-side content-side-full bg-body-light">
        <button type="button" class="btn w-100 btn-alt-primary" data-toggle="click-ripple">
          <i class="fa fa-user-plus opacity-50 me-1"></i> New Account
        </button>
      </div>
      <!-- END New Account -->

      <!-- Side Navigation -->
      <div class="content-side content-side-full">
        <ul class="nav-main">
          <?php $cb->build_nav(); ?>
        </ul>
      </div>
      <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
  </div>
  <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
