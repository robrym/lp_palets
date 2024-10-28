<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/pop/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="row">
    <!-- Row #1 -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-fx-shadow text-start" href="javascript:void(0)">
        <div class="block-content block-content-full text-end d-flex justify-content-between align-items-center">
          <div>
            <i class="si si-heart fa-2x text-gray"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold text-primary-light">18,490</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Likes</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-fx-shadow text-start" href="javascript:void(0)">
        <div class="block-content block-content-full text-end d-flex justify-content-between align-items-center">
          <div>
            <i class="si si-users fa-2x text-gray"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold text-primary-light">4,210</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Followers</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-fx-shadow text-start" href="javascript:void(0)">
        <div class="block-content block-content-full text-end d-flex justify-content-between align-items-center">
          <div>
            <i class="si si-bag fa-2x text-gray"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold text-primary-light">350</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-fx-shadow text-start" href="javascript:void(0)">
        <div class="block-content block-content-full text-end d-flex justify-content-between align-items-center">
          <div>
            <i class="si si-wallet fa-2x text-gray"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold text-primary-light">$2,970</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>
  <div class="row">
    <!-- Row #2 -->
    <div class="col-md-6">
      <div class="block block-rounded block-fx-shadow">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Sales <small>This week</small>
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Lines Chart Container functionality is initialized in js/pages/db_pop.min.js which was auto compiled from _js/pages/db_pop.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-pop-lines" style="height: 290px"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-fx-shadow">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Earnings <small>This week</small>
          </h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Lines Chart Container functionality is initialized in js/pages/db_pop.min.js which was auto compiled from _js/pages/db_pop.js -->
          <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
          <canvas id="js-chartjs-pop-lines2" style="height: 290px"></canvas>
        </div>
      </div>
    </div>
    <!-- END Row #2 -->
  </div>
  <div class="block block-rounded block-fx-shadow">
    <div class="block-content bg-body-light">
      <!-- Search -->
      <form>
        <div class="mb-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search orders..">
            <button type="submit" class="btn btn-secondary">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- END Search -->
    </div>
    <div class="block-content">
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
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1851</a>
            </td>
            <td>
              <span class="badge bg-info">Processing</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/27
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">1</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Jack Estrada</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$103</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1850</a>
            </td>
            <td>
              <span class="badge bg-info">Processing</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/26
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">7</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Jack Estrada</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$244</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1849</a>
            </td>
            <td>
              <span class="badge bg-info">Processing</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/25
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">2</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Carol Ray</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$561</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1848</a>
            </td>
            <td>
              <span class="badge bg-danger">Canceled</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/24
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">3</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Sara Fields</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$651</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1847</a>
            </td>
            <td>
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/23
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">7</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Betty Kelley</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$969</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1846</a>
            </td>
            <td>
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/22
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">4</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Carl Wells</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$621</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1845</a>
            </td>
            <td>
              <span class="badge bg-danger">Canceled</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/21
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">2</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Jose Mills</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$857</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1844</a>
            </td>
            <td>
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/20
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">8</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Jesse Fisher</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$433</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1843</a>
            </td>
            <td>
              <span class="badge bg-danger">Canceled</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/19
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">8</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Andrea Gardner</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$968</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1842</a>
            </td>
            <td>
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/18
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">1</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Jose Mills</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$336</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1841</a>
            </td>
            <td>
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/17
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">8</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Barbara Scott</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$327</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1840</a>
            </td>
            <td>
              <span class="badge bg-warning">Pending</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/16
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">3</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Andrea Gardner</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$326</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1839</a>
            </td>
            <td>
              <span class="badge bg-info">Processing</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/15
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">7</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Amanda Powell</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$522</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1838</a>
            </td>
            <td>
              <span class="badge bg-info">Processing</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/14
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">7</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Amanda Powell</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$822</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="javascript:void(0)">ORD.1837</a>
            </td>
            <td>
              <span class="badge bg-danger">Canceled</span>
            </td>
            <td class="d-none d-sm-table-cell">
              2024/10/13
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">5</a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="javascript:void(0)">Lisa Jenkins</a>
            </td>
            <td class="d-none d-sm-table-cell text-end">$971</td>
          </tr>
        </tbody>
      </table>
      <!-- END Orders Table -->

      <!-- Navigation -->
      <nav aria-label="Orders navigation">
        <ul class="pagination justify-content-end">
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
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chart.js/chart.umd.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_pop.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>