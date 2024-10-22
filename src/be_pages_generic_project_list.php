<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-full">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Project List
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          All your latest projects in one place.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Navigation -->
  <div class="px-4 py-3 bg-body-extra-light rounded push">
    <ul class="nav nav-pills justify-content-center space-x-1">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void(0)">
          <i class="fa fa-fw fa-th-large opacity-50 me-1"></i> All
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">
          <i class="fa fa-fw fa-briefcase opacity-50 me-1"></i> Web App
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">
          <i class="fa fa-fw fa-camera opacity-50 me-1"></i> Photography
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">
          <i class="fa fa-fw fa-rocket opacity-50 me-1"></i> Logo
        </a>
      </li>
    </ul>
  </div>
  <!-- END Navigation -->

  <!-- Projects -->
  <div class="row items-push img-fluid-100">
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 1 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project 2 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project 3 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo4.png" alt="Project 4 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo5.png" alt="Project 5 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo6.png" alt="Project 6 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project 7 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 8 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo4.png" alt="Project 9 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 10 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo5.png" alt="Project 11 Promo">
      </a>
    </div>
    <div class="col-sm-6 col-md-3">
      <a class="img-link" href="be_pages_generic_project.php">
        <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project 12 Promo">
      </a>
    </div>
  </div>
  <!-- END Projects -->
    

  <!-- Quick Stats -->
  <div class="bg-body-extra-light rounded push p-3">
    <div class="row text-center">
      <div class="col-sm-4 py-4">
        <div class="fs-2 fw-extrabold">3</div>
        <div class="fs-sm fw-semibold text-muted text-uppercase">Active</div>
      </div>
      <div class="col-sm-4 py-4">
        <div class="fs-2 fw-extrabold">12</div>
        <div class="fs-sm fw-semibold text-muted text-uppercase">Projects</div>
      </div>
      <div class="col-sm-4 py-4">
        <div class="fs-2 fw-extrabold">9</div>
        <div class="fs-sm fw-semibold text-muted text-uppercase">Clients</div>
      </div>
    </div>
  </div>
  <!-- END Quick Stats -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>