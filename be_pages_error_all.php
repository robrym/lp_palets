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
          Errors
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          All pages in one spot.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <div class="row">
    <div class="col-md-4">
      <!-- 400 -->
      <a class="block block-rounded block-link-shadow" href="op_error_400.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-warning fw-bold mb-0">400</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 400 -->
    </div>
    <div class="col-md-4">
      <!-- 401 -->
      <a class="block block-rounded block-link-shadow" href="op_error_401.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-info fw-bold mb-0">401</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 401 -->
    </div>
    <div class="col-md-4">
      <!-- 403 -->
      <a class="block block-rounded block-link-shadow" href="op_error_403.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-corporate fw-bold mb-0">403</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 403 -->
    </div>
    <div class="col-md-4">
      <!-- 404 -->
      <a class="block block-rounded block-link-shadow" href="op_error_404.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-danger fw-bold mb-0">404</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 404 -->
    </div>
    <div class="col-md-4">
      <!-- 500 -->
      <a class="block block-rounded block-link-shadow" href="op_error_500.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-flat fw-bold mb-0">500</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 500 -->
    </div>
    <div class="col-md-4">
      <!-- 503 -->
      <a class="block block-rounded block-link-shadow" href="op_error_503.php">
        <div class="block-content text-center">
          <div class="py-3">
            <p class="fs-1 text-elegance fw-bold mb-0">503</p>
            <p class="fw-medium text-muted">Error Page<p>
          </div>
        </div>
      </a>
      <!-- END 503 -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>