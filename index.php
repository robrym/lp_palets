<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
 
<!-- Page Content -->
<div class="content">
  <div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">15</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Usuarios</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-wallet fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">14</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Activos</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-envelope-open fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">15</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Tickets</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-users fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">4252 €</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Faturaciones</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">
            Ingresos <small>Mes Actual</small>
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
        <div class="block-content p-1 bg-body-light">
          <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-dashboard-lines" style="height: 290px"></canvas>
        </div>
        <div class="block-content">
          <div class="row items-push">
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Mes</div>
              <div class="fs-4 fw-semibold">720</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +16%
              </div>
            </div>
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Semana</div>
              <div class="fs-4 fw-semibold">160</div>
              <div class="fw-semibold text-danger">
                <i class="fa fa-caret-down"></i> -3%
              </div>
            </div>
            <div class="col-12 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Promedio</div>
              <div class="fs-4 fw-semibold">24.3</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +9%
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">
            Por Pagar <small>Mes Acual</small>
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
        <div class="block-content p-1 bg-body-light">
          <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-dashboard-lines2" style="height: 290px"></canvas>
        </div>
        <div class="block-content">
          <div class="row items-push">
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Mes</div>
              <div class="fs-4 fw-semibold"> 6,540 €</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +4%
              </div>
            </div>
            <div class="col-6 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Semana</div>
              <div class="fs-4 fw-semibold"> 1,525 €</div>
              <div class="fw-semibold text-danger">
                <i class="fa fa-caret-down"></i> -7%
              </div>
            </div>
            <div class="col-12 col-sm-4 text-center text-sm-start">
              <div class="fs-sm fw-semibold text-uppercase text-muted">Balance</div>
              <div class="fs-4 fw-semibold"> 9,352 €</div>
              <div class="fw-semibold text-success">
                <i class="fa fa-caret-up"></i> +35%
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Row #2 -->
  </div>
 
  <div class="row">
    <!-- Row #4 -->
    <div class="col-md-6">
      <a class="block block-rounded block-link-shadow overflow-hidden" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <i class="si si-briefcase fa-2x opacity-25"></i>
          <div class="row g-5 py-3">
            <div class="col-6 text-end border-end">
              <div>
                <div class="fs-3 fw-semibold">32</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">Instalaciones</div>
              </div>
            </div>
            <div class="col-6">
              <div>
                <div class="fs-3 fw-semibold">97%</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">Activas</div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-shadow overflow-hidden" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="text-end">
            <i class="si si-users fa-2x opacity-25"></i>
          </div>
          <div class="row g-5 py-3">
            <div class="col-6 text-end border-end">
              <div>
                <div class="fs-3 fw-semibold text-info">15</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">Cuentas</div>
              </div>
            </div>
            <div class="col-6">
              <div>
                <div class="fs-3 fw-semibold text-success">97%</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">Activas</div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #4 -->
  </div>
  <div class="row">
    <!-- Row #5 -->
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_generic_inbox.php">
        <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
          <div class="ribbon-box">15</div>
          <p class="my-3">
            <i class="si si-envelope-letter fa-2x"></i>
          </p>
          <p class="fw-semibold">Inbox</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_generic_profile.php">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-user fa-2x"></i>
          </p>
          <p class="fw-semibold">Profile</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_forum_categories.php">
        <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
          <div class="ribbon-box">3</div>
          <p class="my-3">
            <i class="si si-bubbles fa-2x"></i>
          </p>
          <p class="fw-semibold">Forum</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_generic_search.php">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-magnifier fa-2x"></i>
          </p>
          <p class="fw-semibold">Search</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="be_comp_charts.php">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-bar-chart fa-2x"></i>
          </p>
          <p class="fw-semibold">Live Stats</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-settings fa-2x"></i>
          </p>
          <p class="fw-semibold">Settings</p>
        </div>
      </a>
    </div>
    <!-- END Row #5 -->
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
