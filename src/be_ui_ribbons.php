<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded mb-0">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Ribbons
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Easily add cool ribbons to your blocks.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Default Ribbon -->
  <h2 class="content-heading">Default Ribbon</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <!-- Default Position -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-primary">
          <div class="ribbon-box">$99</div>
          <div class="text-center py-4">
            <i class="fa fa-code fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Learn to code</h4>
          </div>
        </div>
      </div>
      <!-- END Default Position -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Right -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bottom ribbon-primary">
          <div class="ribbon-box">$99</div>
          <div class="text-center py-4">
            <i class="fa fa-code fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Learn to code</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Right -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-bottom">
          <div class="ribbon-box">$99</div>
          <div class="text-center py-4">
            <i class="fa fa-code fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Learn to code</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Top Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-primary">
          <div class="ribbon-box">$99</div>
          <div class="text-center py-4">
            <i class="fa fa-code fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Learn to code</h4>
          </div>
        </div>
      </div>
      <!-- END Top Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Success Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-success">
          <div class="ribbon-box">$49</div>
          <div class="text-center py-4">
            <i class="fab fa-wordpress fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Discover WP</h4>
          </div>
        </div>
      </div>
      <!-- END Success Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Info Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-info">
          <div class="ribbon-box">$49</div>
          <div class="text-center py-4">
            <i class="fab fa-wordpress fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Discover WP</h4>
          </div>
        </div>
      </div>
      <!-- END Info Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Warning Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-warning">
          <div class="ribbon-box">$49</div>
          <div class="text-center py-4">
            <i class="fab fa-wordpress fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Discover WP</h4>
          </div>
        </div>
      </div>
      <!-- END Warning Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Danger Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-danger">
          <div class="ribbon-box">$49</div>
          <div class="text-center py-4">
            <i class="fab fa-wordpress fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Discover WP</h4>
          </div>
        </div>
      </div>
      <!-- END Danger Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary ribbon ribbon-glass">
          <div class="ribbon-box">
            <i class="fa fa-check opacity-75 me-1"></i> Crystal
          </div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Perfect</h4>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Image -->
      <div class="block block-rounded overflow-hidden">
        <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-bottom ribbon-glass">
            <div class="ribbon-box">
              <i class="fa fa-check opacity-75 me-1"></i> Crystal
            </div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">New York</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Image -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-earth ribbon ribbon-left ribbon-glass">
          <div class="ribbon-box">
            <i class="fa fa-check opacity-75 me-1"></i> Crystal
          </div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Smooth</h4>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Image -->
      <div class="block block-rounded overflow-hidden">
        <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo24.jpg');">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-left ribbon-bottom ribbon-glass">
            <div class="ribbon-box">
              <i class="fa fa-check opacity-75 me-1"></i> Crystal
            </div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">Surfing</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Image -->
    </div>
  </div>
  <!-- END Default Ribbon -->

  <!-- Bookmark Ribbon -->
  <h2 class="content-heading">Bookmark Ribbon</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <!-- Default Position -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-birthday-cake fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Birthday</h4>
          </div>
        </div>
      </div>
      <!-- END Default Position -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Right -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bottom ribbon-bookmark ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-birthday-cake fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Birthday</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Right -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-bottom ribbon-bookmark ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-birthday-cake fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Birthday</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Top Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-bookmark ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-birthday-cake fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Birthday</h4>
          </div>
        </div>
      </div>
      <!-- END Top Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Success Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-success">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-university fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Education</h4>
          </div>
        </div>
      </div>
      <!-- END Success Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Info Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-info">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-university fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Education</h4>
          </div>
        </div>
      </div>
      <!-- END Info Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Warning Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-warning">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-university fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Education</h4>
          </div>
        </div>
      </div>
      <!-- END Warning Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Danger Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-danger">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="fa fa-university fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Education</h4>
          </div>
        </div>
      </div>
      <!-- END Danger Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-flat ribbon ribbon-bookmark ribbon-glass">
          <div class="ribbon-box">
            <i class="fa fa-check opacity-75 me-1"></i> Crystal
          </div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Nice</h4>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Image -->
      <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo14.jpg');">
        <div class="block block-transparent">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-bottom ribbon-bookmark ribbon-glass">
            <div class="ribbon-box">
              <i class="fa fa-check opacity-75 me-1"></i> Crystal
            </div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">Travel</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Image -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-elegance ribbon ribbon-left ribbon-bookmark ribbon-glass">
          <div class="ribbon-box">
            <i class="fa fa-check opacity-75 me-1"></i> Crystal
          </div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Exploration</h4>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Crystal on Background Image -->
      <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo19.jpg');">
        <div class="block block-transparent">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-left ribbon-bottom ribbon-bookmark ribbon-glass">
            <div class="ribbon-box">
              <i class="fa fa-check opacity-75 me-1"></i> Crystal
            </div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">Louvre</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Crystal on Background Image -->
    </div>
  </div>
  <!-- END Bookmark Ribbon -->

  <!-- Modern Ribbon -->
  <h2 class="content-heading">Modern Ribbon</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <!-- Default Position -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-copy fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Files</h4>
          </div>
        </div>
      </div>
      <!-- END Default Position -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Right -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-bottom ribbon-modern ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-copy fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Files</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Right -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Bottom Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-bottom ribbon-modern ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-copy fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Files</h4>
          </div>
        </div>
      </div>
      <!-- END Bottom Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Top Left -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-left ribbon-modern ribbon-primary">
          <div class="ribbon-box">
            <i class="far fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-copy fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Files</h4>
          </div>
        </div>
      </div>
      <!-- END Top Left -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Success Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-modern ribbon-success">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-image fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Photos</h4>
          </div>
        </div>
      </div>
      <!-- END Success Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Info Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-modern ribbon-info">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-image fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Photos</h4>
          </div>
        </div>
      </div>
      <!-- END Info Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Warning Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-modern ribbon-warning">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-image fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Photos</h4>
          </div>
        </div>
      </div>
      <!-- END Warning Color -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Danger Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger">
          <div class="ribbon-box">
            <i class="fa fa-fw fa-heart"></i>
          </div>
          <div class="text-center py-4">
            <i class="far fa-image fa-3x text-gray mb-3"></i>
            <h4 class="mb-0">Photos</h4>
          </div>
        </div>
      </div>
      <!-- END Danger Color -->
    </div>
    <div class="col-md-6">
      <!-- Modern on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-earth ribbon ribbon-modern ribbon-success">
          <div class="ribbon-box text-uppercase">Modern</div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Earth</h4>
          </div>
        </div>
      </div>
      <!-- END Modern on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Modern on Background Image -->
      <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg');">
        <div class="block block-transparent">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-bottom ribbon-modern ribbon-primary">
            <div class="ribbon-box text-uppercase">Modern</div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">Mountains</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Modern on Background Image -->
    </div>
    <div class="col-md-6">
      <!-- Modern on Background Color -->
      <div class="block block-rounded">
        <div class="block-content block-content-full bg-corporate ribbon ribbon-left ribbon-modern ribbon-info">
          <div class="ribbon-box text-uppercase">Modern</div>
          <div class="text-center py-5">
            <h4 class="fw-bold text-white text-uppercase mb-0">Incredible</h4>
          </div>
        </div>
      </div>
      <!-- END Modern on Background Color -->
    </div>
    <div class="col-md-6">
      <!-- Modern on Background Image -->
      <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo20.jpg');">
        <div class="block block-transparent">
          <div class="block-content block-content-full bg-black-50 ribbon ribbon-left ribbon-bottom ribbon-modern ribbon-primary">
            <div class="ribbon-box text-uppercase">Modern</div>
            <div class="text-center py-5">
              <h4 class="fw-bold text-white text-uppercase mb-0">Paris</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- END Modern on Background Image -->
    </div>
  </div>
  <!-- END Modern Ribbon -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>