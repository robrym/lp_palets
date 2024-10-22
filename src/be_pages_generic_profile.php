<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- User Info -->
<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo13@2x.jpg');">
  <div class="bg-primary-dark-op py-4">
    <div class="content content-full text-center">
      <!-- Avatar -->
      <div class="mb-3">
        <a class="img-link" href="be_pages_generic_profile.php">
          <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
        </a>
      </div>
      <!-- END Avatar -->

      <!-- Personal -->
      <h1 class="h3 text-white fw-bold mb-2">
        John Smith
      </h1>
      <h2 class="h5 fw-medium text-white-75">
        Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
      </h2>
      <!-- END Personal -->

      <!-- Actions -->
      <button type="button" class="btn btn-primary me-1">
        <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
      </button>
      <a class="btn btn-alt-primary" href="be_pages_generic_profile_edit.php">
        <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
      </a>
      <!-- END Actions -->
    </div>
  </div>
</div>
<!-- END User Info -->

<!-- Main Content -->
<div class="content">
  <!-- Projects -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span class="fw-semibold"><i class="si si-briefcase me-1"></i> Projects</span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
  </h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
        <div class="ribbon-box">$2500</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-danger text-danger-light mx-auto my-3">
            <i class="fa fa-globe"></i>
          </div>
          <div class="text-warning">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1">Website Design</div>
          <div class="fs-sm fw-medium text-muted">https://example.com</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
        <div class="ribbon-box">$499</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-success text-success-light mx-auto my-3">
            <i class="fa fa-birthday-cake"></i>
          </div>
          <div class="text-warning">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1">Special Icon Set</div>
          <div class="fs-sm fw-medium text-muted">3000 icons</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
        <div class="ribbon-box">$2999</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-info text-info-light mx-auto my-3">
            <i class="fab fa-windows"></i>
          </div>
          <div class="text-warning">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1">Windows App</div>
          <div class="fs-sm fw-medium text-muted">Accounting Dashboard</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
        <div class="ribbon-box">$3999</div>
        <div class="block-content block-content-full">
          <div class="item item-circle bg-warning text-warning-light mx-auto my-3">
            <i class="fa fa-mobile-alt"></i>
          </div>
          <div class="text-warning">
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
            <i class="fa fa-fw fa-star"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1">iOS App</div>
          <div class="fs-sm fw-medium text-muted">Accounting Dashboard</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Projects -->

  <!-- Colleagues -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span class="fw-semibold"><i class="si si-users me-1"></i> Colleagues</span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
  </h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full">
          <?php $cb->get_avatar('', 'female'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1"><?php $cb->get_name('female'); ?></div>
          <div class="fs-sm fw-medium text-muted">Product Designer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-plus opacity-50 me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full">
          <?php $cb->get_avatar('', 'male'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1"><?php $cb->get_name('male'); ?></div>
          <div class="fs-sm fw-medium text-muted">Senior Developer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-plus opacity-50 me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full">
          <?php $cb->get_avatar('', 'male'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1"><?php $cb->get_name('male'); ?></div>
          <div class="fs-sm fw-medium text-muted">Junior Designer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-plus opacity-50 me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full">
          <?php $cb->get_avatar('', 'female'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold mb-1"><?php $cb->get_name('female'); ?></div>
          <div class="fs-sm fw-medium text-muted">Marketing</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-plus opacity-50 me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Colleagues -->

  <!-- Articles -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span class="fw-semibold"><i class="si si-note me-1"></i> Articles</span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
  </h2>
  <div class="push">
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
      <div class="block-content block-content-full">
        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">3 hours ago</p>
        <h4 class="fs-base text-primary mb-0">
          5 things I've learned working from home
        </h4>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
      <div class="block-content block-content-full">
        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">2 days ago</p>
        <h4 class="fs-base text-primary mb-0">
          Vue.js or React.js? Let's dive in!
        </h4>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
      <div class="block-content block-content-full">
        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">1 week ago</p>
        <h4 class="fs-base text-primary mb-0">
          10 important things I wish I knew
        </h4>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
      <div class="block-content block-content-full">
        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">2 weeks ago</p>
        <h4 class="fs-base text-primary mb-0">
          Bringing your productivity back
        </h4>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
      <div class="block-content block-content-full">
        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">1 month ago</p>
        <h4 class="fs-base text-primary mb-0">
          Creating a super smooth CSS animation
        </h4>
      </div>
    </a>
    <!-- END Articles -->
</div>
  <!-- END Main Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>