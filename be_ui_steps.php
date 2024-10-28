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
          Steps
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Elements for creating buttons for your form wizards.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Simple -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Simple</h3>
    </div>
    <div class="block-content block-content-full space-y-3">
      <nav class="d-flex flex-column flex-md-row items-center justify-content-between gap-2">
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
          <div>
            <div>Step 1</div>
            <div class="fw-normal">Registration</div>
          </div>
          <div class="text-primary">
            <i class="fa fa-fw fa-check"></i>
          </div>
        </a>
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
          <div>
            <div class="text-primary">Step 2</div>
            <div class="fw-normal">Personal Info</div>
          </div>
          <div class="opacity-25">
            <i class="fa fa-fw fa-check"></i>
          </div>
        </a>
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
          <div>
            <div>Step 3</div>
            <div class="fw-normal">Completion</div>
          </div>
          <div class="opacity-25">
            <i class="fa fa-fw fa-check"></i>
          </div>
        </a>
      </nav>
      <div class="rounded-2 py-8 bg-body-light text-muted fs-sm d-flex align-items-center justify-content-center">
        Content...
      </div>
    </div>
  </div>
  <!-- END Simple --> 

  <!-- Simple with progress -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Simple <small>with progress</small></h3>
    </div>
    <div class="block-content block-content-full space-y-3">
      <div>
        <div class="progress mb-2" style="height: 10px;" role="progressbar" aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar" style="width: 66.6%;"></div>
        </div>
        <nav class="d-flex flex-column flex-md-row items-center justify-content-between gap-2">
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
            <div>
              <div>Step 1</div>
              <div class="fw-normal">Registration</div>
            </div>
            <div class="text-primary">
              <i class="fa fa-fw fa-check"></i>
            </div>
          </a>
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
            <div>
              <div class="text-primary">Step 2</div>
              <div class="fw-normal">Personal Info</div>
            </div>
            <div class="opacity-25">
              <i class="fa fa-fw fa-check"></i>
            </div>
          </a>
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-2">
            <div>
              <div>Step 3</div>
              <div class="fw-normal">Completion</div>
            </div>
            <div class="opacity-25">
              <i class="fa fa-fw fa-check"></i>
            </div>
          </a>
        </nav>
      </div>
      <div class="rounded-2 py-8 bg-body-light text-muted fs-sm d-flex align-items-center justify-content-center">
        Content...
      </div>
    </div>
  </div>
  <!-- END Simple with progress -->

  <!-- Alternate -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Alternate</h3>
    </div>
    <div class="block-content block-content-full space-y-3">
      <nav class="d-flex flex-column flex-lg-row items-center justify-content-between gap-2">
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
          <div class="flex-grow-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
            <i class="fa fa-fw fa-check"></i>
          </div>
          <div class="flex-grow-1">
            <div>Registration</div>
            <div class="fw-normal">Email and password</div>
          </div>
        </a>
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
          <div class="flex-grow-0 rounded-circle border border-3 border-primary d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
            2
          </div>
          <div class="flex-grow-1">
            <div class="text-primary">Personal Info</div>
            <div class="fw-normal">Name and address</div>
          </div>
        </a>
        <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
          <div class="flex-grow-0 rounded-circle bg-body-dark d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
            3
          </div>
          <div class="flex-grow-1">
            <div>Completion</div>
            <div class="fw-normal">Preview your account</div>
          </div>
        </a>
      </nav>
      <div class="rounded-2 py-8 bg-body-light text-muted fs-sm d-flex align-items-center justify-content-center">
        Content...
      </div>
    </div>
  </div>
  <!-- END Alternate --> 

  <!-- Alternate with progress -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Alternate <small>with progress</small></h3>
    </div>
    <div class="block-content block-content-full space-y-3">
      <div>
        <div class="progress mb-2" style="height: 10px;" role="progressbar" aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar" style="width: 66.6%;"></div>
        </div>
        <nav class="d-flex flex-column flex-lg-row items-center justify-content-between gap-2">
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
            <div class="flex-grow-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
              <i class="fa fa-fw fa-check"></i>
            </div>
            <div class="flex-grow-1">
              <div>Registration</div>
              <div class="fw-normal">Email and password</div>
            </div>
          </a>
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
            <div class="flex-grow-0 rounded-circle border border-3 border-primary d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
              2
            </div>
            <div class="flex-grow-1">
              <div class="text-primary">Personal Info</div>
              <div class="fw-normal">Name and address</div>
            </div>
          </a>
          <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
            <div class="flex-grow-0 rounded-circle bg-body-dark d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
              3
            </div>
            <div class="flex-grow-1">
              <div>Completion</div>
              <div class="fw-normal">Preview your account</div>
            </div>
          </a>
        </nav>
      </div>
      <div class="rounded-2 py-8 bg-body-light text-muted fs-sm d-flex align-items-center justify-content-center">
        Content...
      </div>
    </div>
  </div>
  <!-- END Alternate with progress -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>