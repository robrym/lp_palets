<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_dark = true;
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-top content-full text-center">
      <div class="py-3">
        <h1 class="h2 fw-bold text-white mb-2">Orders</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">You are doing great, keep it up!</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-bottom">
  <div class="content py-1 text-center">
    <nav class="breadcrumb bg-body-light py-2 mb-0">
      <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
      <span class="breadcrumb-item active">Orders</span>
    </nav>
  </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
  <!-- Statistics -->
  <div class="content-heading d-flex justify-content-between align-items-center">
    <span>
      Statistics <small class="d-none d-sm-inline">Looking good!</small>
    </span>
    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-stats-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Today</span>
        <i class="fa fa-angle-down ms-1 opacity-50"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-stats-drop">
        <a class="dropdown-item active" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> Today
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)">
          <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Pending -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-spinner fa-spin text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">12</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Pending</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Pending -->

    <!-- Canceled -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-cherry" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-times text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">2</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Canceled</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Canceled -->

    <!-- Completed -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-check text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">21</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">Completed</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Completed -->

    <!-- All -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-archive text-white-75"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-white">35</div>
            <div class="fs-sm fw-semibold text-uppercase text-white-75">All</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END All -->
  </div>
  <!-- END Statistics -->

  <!-- Orders -->
  <div class="content-heading d-flex justify-content-between align-items-center">
    <span>
      Orders <small class="d-none d-sm-inline">(35)</small>
    </span>
    <div class="space-x-1">
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-filter-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>All</span>
          <i class="fa fa-angle-down ms-1 opacity-50"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-filter-drop">
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-spinner fa-spin text-warning me-1"></i> Pending
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-sync fa-spin text-info me-1"></i> Processing
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-times text-danger me-1"></i> Canceled
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-check text-success me-1"></i> Completed
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item active" href="javascript:void(0)">
            <i class="far fa-fw fa-circle me-1"></i> All
          </a>
        </div>
      </div>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>Today</span>
          <i class="fa fa-angle-down ms-1 opacity-50"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-drop">
          <a class="dropdown-item active" href="javascript:void(0)">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> Today
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content bg-body-light">
      <!-- Search -->
      <form action="be_pages_ecom_orders.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search orders..">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- END Search -->
    </div>
    <div class="block-content block-content-full">
      <!-- Orders Table -->
      <table class="table table-borderless table-striped">
        <thead>
          <tr>
            <th style="width: 100px;">ID</th>
            <th>Status</th>
            <th class="d-none d-sm-table-cell">Submitted</th>
            <th class="d-none d-sm-table-cell">Products</th>
            <th class="d-none d-sm-table-cell">Customer</th>
            <th class="d-none d-sm-table-cell text-end">Value</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 16; $i++) { ?>
            <tr>
              <td>
                <a class="fw-semibold" href="be_pages_ecom_order.php">ORD.<?php echo 1852 - $i; ?></a>
              </td>
              <td>
                <?php $cb->get_tag(true, true); ?>
              </td>
              <td class="d-none d-sm-table-cell">
                2024/10/<?php echo 28 - $i; ?>
              </td>
              <td class="d-none d-sm-table-cell">
                <a href="javascript:void(0)"><?php echo rand(1, 9); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <a href="be_pages_ecom_customer.php"><?php $cb->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell text-end">$<?php echo rand(100, 999); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- END Orders Table -->

      <!-- Navigation -->
      <nav aria-label="Orders navigation">
        <ul class="pagination justify-content-end mb-0">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0)">...</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">8</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">9</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END Navigation -->
    </div>
  </div>
  <!-- END Orders -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>