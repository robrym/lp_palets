<?php
/**
 * page_start.php
 *
 * Author: pixelcave
 *
 * The start section of each page used in every page of the template
 *
 */
?>

<!-- Page Container -->
<!--
  Available classes for #page-container:

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-dark'                          Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container"<?php $cb->page_classes(); ?>>
  <?php if(isset($cb->page_loader) && $cb->page_loader) { ?>
  <!-- Page loader (functionality is initialized in Template._uiHandlePageLoader()) -->
  <!-- If #page-loader markup and also the "show" class is added, the loading screen will be enabled and auto hide once the page loads -->
  <!-- Default background color is the primary color but you can use a bg-* class for a custom bg color -->
  <div id="page-loader" class="show"></div>

  <?php } ?>
  <?php if(isset($cb->inc_side_overlay) && $cb->inc_side_overlay) { include($cb->inc_side_overlay); } ?>
  <?php if(isset($cb->inc_sidebar) && $cb->inc_sidebar) { include($cb->inc_sidebar); } ?>
  <?php if(isset($cb->inc_header) && $cb->inc_header) { include($cb->inc_header); } ?>

  <!-- Main Container -->
  <main id="main-container">
