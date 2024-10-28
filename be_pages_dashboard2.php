<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_m_content = 'narrow';
$cb->l_header_fixed = true;
$cb->l_header_style = '';
$cb->l_sidebar_dark = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-dusk">
          <div class="ribbon-box">750</div>
          <p class="mt-2 mb-3">
            <i class="si si-book-open fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Articles</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content bg-gd-primary">
          <p class="mt-2 mb-3">
            <i class="si si-plus fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">New Article</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_pages_forum_categories.php">
        <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-sea">
          <div class="ribbon-box">16</div>
          <p class="mt-2 mb-3">
            <i class="si si-bubbles fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Comments</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_pages_generic_search.php">
        <div class="block-content bg-gd-lake">
          <p class="mt-2 mb-3">
            <i class="si si-magnifier fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Search</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_comp_charts.php">
        <div class="block-content bg-gd-emerald">
          <p class="mt-2 mb-3">
            <i class="si si-bar-chart fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Statistics</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content bg-gd-corporate">
          <p class="mt-2 mb-3">
            <i class="si si-settings fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Settings</p>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row items-push">
    <!-- Row #2 -->
    <div class="col-xl-4">
      <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo24@2x.jpg');">
        <div class="block-content block-sticky-options pt-7 bg-black-50">
          <div class="block-options block-options-left text-white">
            <div class="block-options-item">
              <i class="si si-book-open text-white-75"></i>
            </div>
          </div>
          <div class="block-options text-white">
            <div class="block-options-item">
              <i class="si si-bubbles"></i> 15
            </div>
            <div class="block-options-item">
              <i class="si si-eye"></i> 3800
            </div>
          </div>
          <h2 class="h3 fw-bold text-white mb-1">Travel the world</h2>
          <h3 class="fs-base fw-medium text-white-75">Explore and achieve great things</h3>
        </div>
      </a>
    </div>
    <div class="col-sm-6 col-xl-4">
      <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo32@2x.jpg');">
        <div class="block-content block-sticky-options pt-7 bg-primary-dark-op">
          <div class="block-options block-options-left text-white">
            <div class="block-options-item">
              <i class="si si-book-open text-white-75"></i>
            </div>
          </div>
          <div class="block-options text-white">
            <div class="block-options-item">
              <i class="si si-bubbles"></i> 4
            </div>
            <div class="block-options-item">
              <i class="si si-eye"></i> 1680
            </div>
          </div>
          <h2 class="h3 fw-bold text-white mb-1">Inspiring Solutions</h2>
          <h3 class="fs-base fw-medium text-white-75">10 things you should do today</h3>
        </div>
      </a>
    </div>
    <div class="col-sm-6 col-xl-4">
      <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo10@2x.jpg');">
        <div class="block-content block-sticky-options pt-7 bg-primary-op">
          <div class="block-options block-options-left text-white">
            <div class="block-options-item">
              <i class="si si-book-open text-white-75"></i>
            </div>
          </div>
          <div class="block-options text-white">
            <div class="block-options-item">
              <i class="si si-bubbles"></i> 16
            </div>
            <div class="block-options-item">
              <i class="si si-eye"></i> 4450
            </div>
          </div>
          <h2 class="h3 fw-bold text-white mb-1">Alternative Road</h2>
          <h3 class="fs-base fw-medium text-white-75">Don't let anything disorient you</h3>
        </div>
      </a>
    </div>
    <!-- END Row #2 -->
  </div>
  <div class="row">
    <!-- Row #3 -->
    <div class="col-xl-8 d-flex align-items-stretch">
      <div class="block block-rounded block-themed block-mode-loading-dark block-transparent bg-image w-100" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
        <div class="block-header bg-black-50">
          <h3 class="block-title">
            Sales <small class="text-white">This week</small>
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-wrench"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-black-50 p-1">
          <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-dashboard-lines" style="height: 450px"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-4 d-flex align-items-stretch">
      <div class="block block-rounded block-transparent bg-primary-dark d-flex align-items-center w-100">
        <div class="block-content block-content-full">
          <div class="py-3 px-3 border-black-op-b d-flex justify-content-between align-items-center">
            <div>
              <div class="fs-3 fw-semibold text-success">750</div>
              <div class="fs-sm fw-semibold text-uppercase text-success-light">Articles</div>
            </div>
            <div class="mt-3 d-none d-sm-block">
              <i class="si si-book-open fa-2x text-success"></i>
            </div>
          </div>
          <div class="py-3 px-3 border-black-op-b d-flex justify-content-between align-items-center">
            <div>
              <div class="fs-3 fw-semibold text-danger">$980</div>
              <div class="fs-sm fw-semibold text-uppercase text-danger-light">Earnings</div>
            </div>
            <div class="mt-3 d-none d-sm-block">
              <i class="si si-wallet fa-2x text-danger"></i>
            </div>
          </div>
          <div class="py-3 px-3 border-black-op-b d-flex justify-content-between align-items-center">
            <div>
              <div class="fs-3 fw-semibold text-warning">38</div>
              <div class="fs-sm fw-semibold text-uppercase text-warning-light">Messages</div>
            </div>
            <div class="mt-3 d-none d-sm-block">
              <i class="si si-envelope-open fa-2x text-warning"></i>
            </div>
          </div>
          <div class="py-3 px-3 border-black-op-b d-flex justify-content-between align-items-center">
            <div>
              <div class="fs-3 fw-semibold text-info">260</div>
              <div class="fs-sm fw-semibold text-uppercase text-info-light">Online</div>
            </div>
            <div class="mt-3 d-none d-sm-block">
              <i class="si si-users fa-2x text-info"></i>
            </div>
          </div>
          <div class="py-3 px-3  d-flex justify-content-between align-items-center">
            <div>
              <div class="fs-3 fw-semibold text-elegance">59</div>
              <div class="fs-sm fw-semibold text-uppercase text-elegance-light">Themes</div>
            </div>
            <div class="mt-3 d-none d-sm-block">
              <i class="si si-drop fa-2x text-elegance"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Row #3 -->
  </div>
  <div class="row">
    <!-- Row #4 -->
    <div class="col-md-4">
      <div class="block block-rounded block-transparent bg-primary">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fa-envelope-open fa-4x text-primary-lighter"></i>
            </div>
            <div class="fs-4 fw-semibold text-white">19.5k Subscribers</div>
            <div class="text-white-75">Your main list is growing!</div>
            <div class="pt-3">
              <a class="btn btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-cog opacity-50 me-1"></i> Manage list
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded block-transparent bg-info">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fab fa-twitter fa-4x text-info-light"></i>
            </div>
            <div class="fs-4 fw-semibold text-white">+98 followers</div>
            <div class="text-white-75">You are doing great!</div>
            <div class="pt-3">
              <a class="btn btn-alt-info" href="javascript:void(0)">
                <i class="fa fa-users opacity-50 me-1"></i> Check them out
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="block block-rounded block-transparent bg-success">
        <div class="block-content block-content-full">
          <div class="py-3 text-center">
            <div class="mb-3">
              <i class="fa fa-check fa-4x text-success-light"></i>
            </div>
            <div class="fs-4 fw-semibold text-white">Personal Plan</div>
            <div class=" text-white-75">This is your current active plan</div>
            <div class="pt-3">
              <a class="btn btn-alt-success" href="javascript:void(0)">
                <i class="fa fa-arrow-up opacity-50 me-1"></i> Upgrade to VIP
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Row #4 -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.umd.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>