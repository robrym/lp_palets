<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/select2/css/select2.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Form Validation
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          It’s never been easier to validate form values.
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _js/pages/be_forms_validation.js) -->
  <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
  <form class="js-validation" action="be_forms_validation.php" method="POST">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Example form</h3>
        <div class="block-options">
          <button type="button" class="btn-block-option">
            <i class="si si-wrench"></i>
          </button>
        </div>
      </div>
      <div class="block-content block-content-full">
        <!-- Regular -->
        <h2 class="content-heading">Regular</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Username, email and password validation made easy for your login/register forms
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="val-username">Username <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-email">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-password">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
            </div>
          </div>
        </div>
        <!-- END Regular -->

        <!-- Advanced -->
        <h2 class="content-heading">Advanced</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              You can easily validate any kind of data you like either it is in a normal input, a textarea or a select box
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
              <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
              <select class="form-select" id="val-skill" name="val-skill">
                <option value="">Please select</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="angular">Angular</option>
                <option value="react">React</option>
                <option value="vuejs">Vue.js</option>
                <option value="ruby">Ruby</option>
                <option value="php">PHP</option>
                <option value="asp">ASP.NET</option>
                <option value="python">Python</option>
                <option value="mysql">MySQL</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-website">Website <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-phoneus">Phone (US) <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-number">Number <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
            </div>
            <div class="mb-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">Terms &amp; Conditions</a> <span class="text-danger">*</span>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="val-terms" name="val-terms" value="1">
                <label class="form-check-label" for="val-terms">I agree</label>
              </div>
            </div>
          </div>
        </div>
        <!-- END Advanced -->

        <!-- Third Party Plugins -->
        <h2 class="content-heading">Third Party Plugins</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Check out how easy it is to enable the validation on third party plugins such as Select2
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="val-select2">Select2 <span class="text-danger">*</span></label>
              <select class="js-select2 form-select" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="angular">Angular</option>
                <option value="react">React</option>
                <option value="vuejs">Vue.js</option>
                <option value="ruby">Ruby</option>
                <option value="php">PHP</option>
                <option value="asp">ASP.NET</option>
                <option value="python">Python</option>
                <option value="mysql">MySQL</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
              <select class="js-select2 form-select" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="angular">Angular</option>
                <option value="react">React</option>
                <option value="vuejs">Vue.js</option>
                <option value="ruby">Ruby</option>
                <option value="php">PHP</option>
                <option value="asp">ASP.NET</option>
                <option value="python">Python</option>
                <option value="mysql">MySQL</option>
              </select>
            </div>
          </div>
        </div>
        <!-- END Third Party Plugins -->

        <!-- Submit -->
        <div class="row items-push">
          <div class="col-lg-7 offset-lg-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        <!-- END Submit -->
      </div>
    </div>
  </form>
  <!-- END jQuery Validation -->

  <!-- Terms Modal -->
  <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <h5 class="mb-2">1. General</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">2. Account</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">3. Service</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
            <h5 class="mb-2">4. Payments</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
            </p>
          </div>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
              Done
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Terms Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>Codebase.helpersOnLoad(['jq-select2']);</script>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_validation.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>