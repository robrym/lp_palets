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
          Icons
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-2">
          A huge collection of multi-purpose, uniquely designed, font icons.
        </h2>
      </div>

      <!-- Search Section -->
      <!-- Icon search functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <form class="js-form-icon-search mx-xl-10" action="be_ui_icons.php" method="POST">
        <div class="input-group input-group-lg">
          <input type="text" class="js-icon-search form-control" placeholder="Try arrow or close..">
          <span class="input-group-text">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Search Section -->
    </div>
  </div>
  <!-- END Heading -->
  
  <!-- Font Awesome Regular -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="regular-counter"></span>) Font Awesome Regular <small class="text-lowercase"><code>far fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="regular-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Regular -->

  <!-- Font Awesome Solid -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="solid-counter"></span>) Font Awesome Solid <small class="text-lowercase"><code>fa fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="solid-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Solid -->

  <!-- Font Awesome Brands -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="brands-counter"></span>) Font Awesome Brands <small class="text-lowercase"><code>fab fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="brands-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Brands -->

  <!-- Simple Line Icons -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(160) Simple Line Icons <small><code>si si-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <div class="js-icon-list row items-push-2x text-center">
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-action-redo fa-2x"></i></p>
          <code>si-action-redo</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-action-undo fa-2x"></i></p>
          <code>si-action-undo</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-anchor fa-2x"></i></p>
          <code>si-anchor</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-down fa-2x"></i></p>
          <code>si-arrow-down</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-left fa-2x"></i></p>
          <code>si-arrow-left</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-right fa-2x"></i></p>
          <code>si-arrow-right</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-up fa-2x"></i></p>
          <code>si-arrow-up</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-badge fa-2x"></i></p>
          <code>si-badge</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bag fa-2x"></i></p>
          <code>si-bag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-ban fa-2x"></i></p>
          <code>si-ban</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bar-chart fa-2x"></i></p>
          <code>si-bar-chart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-basket fa-2x"></i></p>
          <code>si-basket</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-basket-loaded fa-2x"></i></p>
          <code>si-basket-loaded</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bell fa-2x"></i></p>
          <code>si-bell</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-book-open fa-2x"></i></p>
          <code>si-book-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-briefcase fa-2x"></i></p>
          <code>si-briefcase</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bubble fa-2x"></i></p>
          <code>si-bubble</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bubbles fa-2x"></i></p>
          <code>si-bubbles</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bulb fa-2x"></i></p>
          <code>si-bulb</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-calculator fa-2x"></i></p>
          <code>si-calculator</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-calendar fa-2x"></i></p>
          <code>si-calendar</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-end fa-2x"></i></p>
          <code>si-call-end</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-in fa-2x"></i></p>
          <code>si-call-in</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-out fa-2x"></i></p>
          <code>si-call-out</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-camcorder fa-2x"></i></p>
          <code>si-camcorder</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-camera fa-2x"></i></p>
          <code>si-camera</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-check fa-2x"></i></p>
          <code>si-check</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-chemistry fa-2x"></i></p>
          <code>si-chemistry</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-clock fa-2x"></i></p>
          <code>si-clock</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-close fa-2x"></i></p>
          <code>si-close</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cloud-download fa-2x"></i></p>
          <code>si-cloud-download</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cloud-upload fa-2x"></i></p>
          <code>si-cloud-upload</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-compass fa-2x"></i></p>
          <code>si-compass</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-end fa-2x"></i></p>
          <code>si-control-end</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-forward fa-2x"></i></p>
          <code>si-control-forward</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-pause fa-2x"></i></p>
          <code>si-control-pause</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-play fa-2x"></i></p>
          <code>si-control-play</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-rewind fa-2x"></i></p>
          <code>si-control-rewind</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-start fa-2x"></i></p>
          <code>si-control-start</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-credit-card fa-2x"></i></p>
          <code>si-credit-card</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-crop fa-2x"></i></p>
          <code>si-crop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cup fa-2x"></i></p>
          <code>si-cup</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cursor fa-2x"></i></p>
          <code>si-cursor</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cursor-move fa-2x"></i></p>
          <code>si-cursor-move</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-diamond fa-2x"></i></p>
          <code>si-diamond</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-direction fa-2x"></i></p>
          <code>si-direction</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-directions fa-2x"></i></p>
          <code>si-directions</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-disc fa-2x"></i></p>
          <code>si-disc</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-dislike fa-2x"></i></p>
          <code>si-dislike</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-doc fa-2x"></i></p>
          <code>si-doc</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-docs fa-2x"></i></p>
          <code>si-docs</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-drawer fa-2x"></i></p>
          <code>si-drawer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-drop fa-2x"></i></p>
          <code>si-drop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-earphones fa-2x"></i></p>
          <code>si-earphones</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-earphones-alt fa-2x"></i></p>
          <code>si-earphones-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-emoticon-smile fa-2x"></i></p>
          <code>si-emoticon-smile</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-energy fa-2x"></i></p>
          <code>si-energy</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope fa-2x"></i></p>
          <code>si-envelope</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope-letter fa-2x"></i></p>
          <code>si-envelope-letter</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope-open fa-2x"></i></p>
          <code>si-envelope-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-equalizer fa-2x"></i></p>
          <code>si-equalizer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-eye fa-2x"></i></p>
          <code>si-eye</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-eyeglasses fa-2x"></i></p>
          <code>si-eyeglasses</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-feed fa-2x"></i></p>
          <code>si-feed</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-film fa-2x"></i></p>
          <code>si-film</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-fire fa-2x"></i></p>
          <code>si-fire</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-flag fa-2x"></i></p>
          <code>si-flag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-folder fa-2x"></i></p>
          <code>si-folder</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-folder-alt fa-2x"></i></p>
          <code>si-folder-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-frame fa-2x"></i></p>
          <code>si-frame</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-game-controller fa-2x"></i></p>
          <code>si-game-controller</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-ghost fa-2x"></i></p>
          <code>si-ghost</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-globe fa-2x"></i></p>
          <code>si-globe</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-globe-alt fa-2x"></i></p>
          <code>si-globe-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-graduation fa-2x"></i></p>
          <code>si-graduation</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-graph fa-2x"></i></p>
          <code>si-graph</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-grid fa-2x"></i></p>
          <code>si-grid</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-handbag fa-2x"></i></p>
          <code>si-handbag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-heart fa-2x"></i></p>
          <code>si-heart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-home fa-2x"></i></p>
          <code>si-home</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-hourglass fa-2x"></i></p>
          <code>si-hourglass</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-info fa-2x"></i></p>
          <code>si-info</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-key fa-2x"></i></p>
          <code>si-key</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-layers fa-2x"></i></p>
          <code>si-layers</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-like fa-2x"></i></p>
          <code>si-like</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-link fa-2x"></i></p>
          <code>si-link</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-list fa-2x"></i></p>
          <code>si-list</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-lock fa-2x"></i></p>
          <code>si-lock</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-lock-open fa-2x"></i></p>
          <code>si-lock-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-login fa-2x"></i></p>
          <code>si-login</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-logout fa-2x"></i></p>
          <code>si-logout</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-loop fa-2x"></i></p>
          <code>si-loop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magic-wand fa-2x"></i></p>
          <code>si-magic-wand</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnet fa-2x"></i></p>
          <code>si-magnet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier fa-2x"></i></p>
          <code>si-magnifier</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier-add fa-2x"></i></p>
          <code>si-magnifier-add</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier-remove fa-2x"></i></p>
          <code>si-magnifier-remove</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-map fa-2x"></i></p>
          <code>si-map</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-microphone fa-2x"></i></p>
          <code>si-microphone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-mouse fa-2x"></i></p>
          <code>si-mouse</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-moustache fa-2x"></i></p>
          <code>si-moustache</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-music-tone fa-2x"></i></p>
          <code>si-music-tone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-music-tone-alt fa-2x"></i></p>
          <code>si-music-tone-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-note fa-2x"></i></p>
          <code>si-note</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-notebook fa-2x"></i></p>
          <code>si-notebook</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-paper-clip fa-2x"></i></p>
          <code>si-paper-clip</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-paper-plane fa-2x"></i></p>
          <code>si-paper-plane</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pencil fa-2x"></i></p>
          <code>si-pencil</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-picture fa-2x"></i></p>
          <code>si-picture</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pie-chart fa-2x"></i></p>
          <code>si-pie-chart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pin fa-2x"></i></p>
          <code>si-pin</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-plane fa-2x"></i></p>
          <code>si-plane</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-playlist fa-2x"></i></p>
          <code>si-playlist</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-plus fa-2x"></i></p>
          <code>si-plus</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pointer fa-2x"></i></p>
          <code>si-pointer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-power fa-2x"></i></p>
          <code>si-power</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-present fa-2x"></i></p>
          <code>si-present</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-printer fa-2x"></i></p>
          <code>si-printer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-puzzle fa-2x"></i></p>
          <code>si-puzzle</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-question fa-2x"></i></p>
          <code>si-question</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-refresh fa-2x"></i></p>
          <code>si-refresh</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-reload fa-2x"></i></p>
          <code>si-reload</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-rocket fa-2x"></i></p>
          <code>si-rocket</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-desktop fa-2x"></i></p>
          <code>si-screen-desktop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-smartphone fa-2x"></i></p>
          <code>si-screen-smartphone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-tablet fa-2x"></i></p>
          <code>si-screen-tablet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-settings fa-2x"></i></p>
          <code>si-settings</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-share fa-2x"></i></p>
          <code>si-share</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-share-alt fa-2x"></i></p>
          <code>si-share-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-shield fa-2x"></i></p>
          <code>si-shield</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-shuffle fa-2x"></i></p>
          <code>si-shuffle</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-size-actual fa-2x"></i></p>
          <code>si-size-actual</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-size-fullscreen fa-2x"></i></p>
          <code>si-size-fullscreen</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-dribbble fa-2x"></i></p>
          <code>si-social-dribbble</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-dropbox fa-2x"></i></p>
          <code>si-social-dropbox</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-facebook fa-2x"></i></p>
          <code>si-social-facebook</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-tumblr fa-2x"></i></p>
          <code>si-social-tumblr</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-twitter fa-2x"></i></p>
          <code>si-social-twitter</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-youtube fa-2x"></i></p>
          <code>si-social-youtube</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-speech fa-2x"></i></p>
          <code>si-speech</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-speedometer fa-2x"></i></p>
          <code>si-speedometer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-star fa-2x"></i></p>
          <code>si-star</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-support fa-2x"></i></p>
          <code>si-support</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-symbol-female fa-2x"></i></p>
          <code>si-symbol-female</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-symbol-male fa-2x"></i></p>
          <code>si-symbol-male</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-tag fa-2x"></i></p>
          <code>si-tag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-target fa-2x"></i></p>
          <code>si-target</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-trash fa-2x"></i></p>
          <code>si-trash</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-trophy fa-2x"></i></p>
          <code>si-trophy</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-umbrella fa-2x"></i></p>
          <code>si-umbrella</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user fa-2x"></i></p>
          <code>si-user</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-female fa-2x"></i></p>
          <code>si-user-female</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-follow fa-2x"></i></p>
          <code>si-user-follow</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-following fa-2x"></i></p>
          <code>si-user-following</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-unfollow fa-2x"></i></p>
          <code>si-user-unfollow</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-users fa-2x"></i></p>
          <code>si-users</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-vector fa-2x"></i></p>
          <code>si-vector</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-1 fa-2x"></i></p>
          <code>si-volume-1</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-2 fa-2x"></i></p>
          <code>si-volume-2</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-off fa-2x"></i></p>
          <code>si-volume-off</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-wallet fa-2x"></i></p>
          <code>si-wallet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-wrench fa-2x"></i></p>
          <code>si-wrench</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Simple Line Icons -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_ui_icons.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>