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
          Table Helpers
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Custom functionality to further enrich your tables.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->
  
  <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.cbTableToolsCheckable()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Checkable
        <code>.js-table-checkable</code>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
      <table class="js-table-checkable table table-hover table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 40px;">
              <div class="form-check d-inline-block">
                <input class="form-check-input" type="checkbox" value="" id="check-all" name="check-all">
                <label class="form-check-label" for="check-all"></label>
              </div>
            </th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
          </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < 6; $i++) { ?>
            <tr>
              <td class="text-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="row_<?php echo $i; ?>" name="row_<?php echo $i; ?>">
                  <label class="form-check-label" for="row_<?php echo $i; ?>"></label>
                </div>
              </td>
              <td>
                <p class="fw-semibold mb-1"><?php $cb->get_name(); ?></p>
                <p class="fs-sm text-muted mb-0">
                  Customer details and further information
                </p>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $cb->get_tag(); ?>
              </td>
              <td class="d-none d-sm-table-cell">
                November <?php echo rand(1, 28); ?>, 2024 13:17
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Checkable Table -->

  <!-- Table Sections (.js-table-sections class is initialized in Helpers.cbTableToolsSections()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Sections
        <code>.js-table-sections</code>
      </h3>
    </div>
    <div class="block-content block-content-full">
      <!--
      Separate your table content with multiple tbody sections. Add one row and add the class .js-table-sections-header to a
      tbody section to make it clickable. It will then toggle the next tbody section which can have multiple rows. Eg:

      <tbody class="js-table-sections-header">One row</tbody>
      <tbody>Multiple rows</tbody>
      <tbody class="js-table-sections-header">One row</tbody>
      <tbody>Multiple rows</tbody>
      <tbody class="js-table-sections-header">One row</tbody>
      <tbody>Multiple rows</tbody>

      You can also add the class .show in your tbody.js-table-sections-header to make the next tbody section visible by default
      -->
      <table class="js-table-sections table table-hover">
        <thead>
          <tr>
            <th style="width: 30px;"></th>
            <th>Name</th>
            <th style="width: 15%;">Access</th>
            <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
          </tr>
        </thead>
        <?php for ($i = 1; $i < 6; $i++) { ?>
          <tbody class="js-table-sections-header<?php
          if ($i == 1) {
            echo ' show table-active';
          }
          ?>">
            <tr>
              <td class="text-center">
                <i class="fa fa-angle-right"></i>
              </td>
              <td class="fw-semibold"><?php $cb->get_name(); ?></td>
              <td>
                <?php $cb->get_tag(); ?>
              </td>
              <td class="d-none d-sm-table-cell">
                October <?php echo rand(1, 28); ?>, 2024 12:16
              </td>
            </tr>
          </tbody>
          <tbody>
            <?php for ($j = 1; $j < 4; $j++) { ?>
              <tr>
                <td class="text-center"></td>
                <td class="fw-semibold text-success">+ $<?php echo rand(50, 300); ?>,00</td>
                <td class="fs-sm">Stripe</td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">October <?php echo rand(1, 28); ?>, 2024 12:16</span>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
  <!-- END Table Sections -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Helpers (Table Tools helpers) -->
<script>Codebase.helpersOnLoad(['cb-table-tools-checkable', 'cb-table-tools-sections']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>