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
          Buttons
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Custom buttons styles to fulfill any design approach.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Button Styles -->
  <h2 class="content-heading">Button Styles</h2>

  <!-- Contextual -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Contextual</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily style a button or a link by adding the base class <code>btn</code> and then by applying a color variation class.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary">Primary</button>
          <div class="mt-2">
            <code>btn-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success">Success</button>
          <div class="mt-2">
            <code>btn-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info">Info</button>
          <div class="mt-2">
            <code>btn-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning">Warning</button>
          <div class="mt-2">
            <code>btn-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger">Danger</button>
          <div class="mt-2">
            <code>btn-danger</code>
          </div>
        </div>
      </div>
      <p class="mb-4">You can also achieve outline styles for your buttons by using the related classes.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <div class="mt-2">
            <code>btn-outline-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-outline-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success">Success</button>
          <div class="mt-2">
            <code>btn-outline-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info">Info</button>
          <div class="mt-2">
            <code>btn-outline-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <div class="mt-2">
            <code>btn-outline-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <div class="mt-2">
            <code>btn-outline-danger</code>
          </div>
        </div>
      </div>
      <p class="mb-4">Finally, there is also an alternative style which you can use with your buttons.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary">Primary</button>
          <div class="mt-2">
            <code>btn-alt-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-alt-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success">Success</button>
          <div class="mt-2">
            <code>btn-alt-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info">Info</button>
          <div class="mt-2">
            <code>btn-alt-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning">Warning</button>
          <div class="mt-2">
            <code>btn-alt-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger">Danger</button>
          <div class="mt-2">
            <code>btn-alt-danger</code>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Contextual Styles -->

  <!-- Ripple Effect -->
  <!-- Ripple functionality ([data-toggle="click-ripple"] is initialized in Helpers.cbRipple()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Ripple Effect</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily add a ripple effect on click to any button you want by adding <code>data-toggle=&quot;click-ripple&quot;</code>.</p>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
      <div class="row items-push text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary" data-toggle="click-ripple">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" data-toggle="click-ripple">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success" data-toggle="click-ripple">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info" data-toggle="click-ripple">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning" data-toggle="click-ripple">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger" data-toggle="click-ripple">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Ripple Effect -->

  <!-- Sizes -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sizes</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You might need various button sizes based on your content and context. Making your buttons smaller or larger is as easy as adding an extra size variation class. It can be applied along with any other color or shape variation class to create the button that fits you best.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-4">
          <button type="button" class="btn btn-sm btn-warning mb-2">Small</button><br>
          <button type="button" class="btn btn-sm btn-outline-warning mb-2">Small</button><br>
          <button type="button" class="btn btn-sm btn-alt-warning">Small</button>
          <p class="mt-2">
            <code>btn</code> <code>btn-sm</code>
          </p>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-info mb-2">Normal</button><br>
          <button type="button" class="btn btn-outline-info mb-2">Normal</button><br>
          <button type="button" class="btn btn-alt-info">Normal</button>
          <p class="mt-2">
            <code>btn</code>
          </p>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-lg btn-success mb-2">Large</button><br>
          <button type="button" class="btn btn-lg btn-outline-success mb-2">Large</button><br>
          <button type="button" class="btn btn-lg btn-alt-success">Large</button>
          <p class="mt-2">
            <code>btn</code> <code>btn-lg</code>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Sizes -->
  <!-- END Button Styles -->

  <!-- Button Variations -->
  <h2 class="content-heading">Button Variations</h2>

  <!-- Square -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Square</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can easily have a square button by adding the <code>rounded-0</code> class.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-0 btn-outline-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-0 btn-alt-primary">Primary</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-0 btn-outline-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-0 btn-alt-secondary">Secondary</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-0 btn-outline-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-0 btn-alt-success">Success</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-0 btn-outline-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-0 btn-alt-info">Info</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-0 btn-outline-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-0 btn-alt-warning">Warning</button>
        </div>
        <div class="col-md-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-0 btn-outline-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-0 btn-alt-danger">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Square -->

  <!-- Rounded -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Rounded</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">The same way, by adding the <code>rounded-pill</code> class, you can have rounded buttons.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-pill btn-outline-primary mb-2">Primary</button><br>
          <button type="button" class="btn rounded-pill btn-alt-primary">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-pill btn-outline-secondary mb-2">Secondary</button><br>
          <button type="button" class="btn rounded-pill btn-alt-secondary">Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-pill btn-outline-success mb-2">Success</button><br>
          <button type="button" class="btn rounded-pill btn-alt-success">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-pill btn-outline-info mb-2">Info</button><br>
          <button type="button" class="btn rounded-pill btn-alt-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-pill btn-outline-warning mb-2">Warning</button><br>
          <button type="button" class="btn rounded-pill btn-alt-warning">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-pill btn-outline-danger mb-2">Danger</button><br>
          <button type="button" class="btn rounded-pill btn-alt-danger">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Rounded -->

  <!-- Disabled -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Disabled</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">If you need to disable a button, just add the <code>disabled</code> attribute.</p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary mb-2" disabled>Primary</button><br>
          <button type="button" class="btn btn-outline-primary mb-2" disabled>Primary</button><br>
          <button type="button" class="btn btn-alt-primary" disabled>Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary mb-2" disabled>Secondary</button><br>
          <button type="button" class="btn btn-outline-secondary mb-2" disabled>Secondary</button><br>
          <button type="button" class="btn btn-alt-secondary" disabled>Secondary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success mb-2" disabled>Success</button><br>
          <button type="button" class="btn btn-outline-success mb-2" disabled>Success</button><br>
          <button type="button" class="btn btn-alt-success" disabled>Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info mb-2" disabled>Info</button><br>
          <button type="button" class="btn btn-outline-info mb-2" disabled>Info</button><br>
          <button type="button" class="btn btn-alt-info" disabled>Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning mb-2" disabled>Warning</button><br>
          <button type="button" class="btn btn-outline-warning mb-2" disabled>Warning</button><br>
          <button type="button" class="btn btn-alt-warning" disabled>Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger mb-2" disabled>Danger</button><br>
          <button type="button" class="btn btn-outline-danger mb-2" disabled>Danger</button><br>
          <button type="button" class="btn btn-alt-danger" disabled>Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Disabled -->
  <!-- END Button Variations -->

  <!-- Buttons with Icons -->
  <h2 class="content-heading">Button with Icons</h2>

  <!-- Default -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Default</h3>
    </div>
    <div class="block-content">
      <p class="mb-4">You can use any icon you like with your buttons! Prefer the ones that better represent the action of each button.</p>
      <div class="mb-2">
        <button type="button" class="btn btn-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i> Add User
        </button>
        <button type="button" class="btn btn-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i> Download
        </button>
        <button type="button" class="btn btn-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Are you sure?
        </button>
        <button type="button" class="btn btn-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i> Upload
        </button>
        <button type="button" class="btn btn-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i> Delete
        </button>
        <button type="button" class="btn btn-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
        </button>
        <button type="button" class="btn btn-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i> Play
        </button>
      </div>
      <div class="mb-2">
        <button type="button" class="btn btn-outline-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i>Add User
        </button>
        <button type="button" class="btn btn-outline-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i>Download
        </button>
        <button type="button" class="btn btn-outline-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>Are you sure?
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i>Upload
        </button>
        <button type="button" class="btn btn-outline-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Delete
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i>Like
        </button>
        <button type="button" class="btn btn-outline-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i>Play
        </button>
      </div>
      <div class="mb-2">
        <button type="button" class="btn btn-alt-success me-1 mb-1">
          <i class="fa fa-plus opacity-50 me-1"></i>Add User
        </button>
        <button type="button" class="btn btn-alt-info me-1 mb-1">
          <i class="fa fa-download opacity-50 me-1"></i>Download
        </button>
        <button type="button" class="btn btn-alt-warning me-1 mb-1">
          <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>Are you sure?
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-1">
          <i class="fa fa-upload opacity-50 me-1"></i>Upload
        </button>
        <button type="button" class="btn btn-alt-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Delete
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-1">
          <i class="fa fa-thumbs-up opacity-50 me-1"></i>Like
        </button>
        <button type="button" class="btn btn-alt-secondary me-1 mb-1">
          <i class="fa fa-play opacity-50 me-1"></i>Play
        </button>
      </div>
    </div>
  </div>
  <!-- END Default -->

  <!-- Variations -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Variations</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="push">
        <p class="mb-4">You can use icons with any button variation you want, they will adjust accordingly.</p>
        <button type="button" class="btn rounded-0 btn-secondary me-1 mb-1">
          <i class="fa fa-wifi opacity-50 me-1"></i>Square
        </button>
        <button type="button" class="btn rounded-pill btn-danger me-1 mb-1">
          <i class="fa fa-times opacity-50 me-1"></i>Rounded
        </button>
        <button type="button" class="btn btn-success me-1 mb-1">
          <i class="fa fa-check"></i>
        </button>
        <button type="button" class="btn btn-warning me-1 mb-1">
          <i class="fa fa-exclamation-circle"></i>
        </button>
        <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-1">
          <i class="fa fa-pencil-alt"></i>
        </button>
        <button type="button" class="btn btn-lg btn-secondary me-1 mb-1">
          <i class="fab fa-youtube opacity-50 me-1"></i>Large
        </button>
        <button type="button" class="btn btn-sm btn-primary me-1 mb-1">
          <i class="far fa-life-ring opacity-50 me-1"></i>Small
        </button>
        <button type="button" class="btn btn-sm btn-secondary me-1 mb-1">
          <i class="fa fa-wrench opacity-50 me-1"></i>Small
        </button>
        <button type="button" class="btn btn-lg btn-alt-warning me-1 mb-1">
          <i class="fa fa-tint opacity-50 me-1"></i>Large
        </button>
      </div>
    </div>
  </div>
  <!-- END Variations -->
  <!-- END Buttons with Icons -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>