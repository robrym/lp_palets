<?php
/**
 * dashboards/classic/views/inc_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page
 *
 */
?>

<!-- Footer -->
<footer id="page-footer" class="bg-body-extra-light">
  <div class="content py-3">
    <div class="row fs-sm">
      <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
      </div>
      <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
        <a class="fw-semibold" href="https://pixelcave.com/products/codebase" target="_blank"><?php echo $cb->name . ' ' . $cb->version; ?></a> &copy; <span data-toggle="year-copy"></span>
      </div>
    </div>
  </div>
</footer>
<!-- END Footer -->