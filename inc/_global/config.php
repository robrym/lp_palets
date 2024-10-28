<?php
/**
 * _global/config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

 //database
session_start();
require 'database.php';


// Include required classes
require 'inc/_classes/Template.php';


// **************************************************************************************************
// CODEBASE OBJECT
// **************************************************************************************************

//                              : Name, version and assets folder's name
$cb                             = new Template('Codebase', '5.9', 'assets');


// **************************************************************************************************
// GLOBAL META & OPEN GRAPH DATA
// **************************************************************************************************

//                              : The data is added in the <head> section of the page
$cb->author                     = 'Proyecta Informatica';
$cb->robots                     = 'index, follow';
$cb->title                      = 'Lopherca Logistica';
$cb->description                = 'Sistema de alta y gestión de Palets';

//                              : The url of your site, used in Open Graph Meta Data (eg 'https://example.com')
$cb->og_url_site                = '';

//                              : The url of your image/logo, used in Open Graph Meta Data (eg 'https://example.com/assets/media/your_logo.png')
$cb->og_url_image               = '';


// **************************************************************************************************
// GLOBAL GENERIC
// **************************************************************************************************

// ''                           : default color theme
// 'elegance'                   : elegance color theme
// 'pulse'                      : pulse color theme
// 'flat'                       : flat color theme
// 'corporate'                  : corporate color theme
// 'earth'                      : earth color theme
$cb->theme                      = 'corporate';

// true                         : Enables Page Loader screen
// false                        : Disables Page Loader screen
$cb->page_loader                = true;

// true                          : Remembers active color theme between pages using
//                                 localStorage when set through
//                                 - Theme helper buttons [data-toggle="theme"]
// false                         : Does not remember the active color theme
$cb->remember_theme             = true;


// **************************************************************************************************
// GLOBAL INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = '';
$cb->inc_sidebar                = '';
$cb->inc_header                 = '';
$cb->inc_footer                 = '';


// **************************************************************************************************
// GLOBAL SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

// true                         : Left Sidebar and right Side Overlay
// false                        : Right Sidebar and left Side Overlay
$cb->l_sidebar_left             = true;

// true                         : Mini hoverable Sidebar (screen width > 991px)
// false                        : Normal mode
$cb->l_sidebar_mini             = false;

// true                         : Visible Sidebar (screen width > 991px)
// false                        : Hidden Sidebar (screen width > 991px)
$cb->l_sidebar_visible_desktop  = true;

// true                         : Visible Sidebar (screen width < 992px)
// false                        : Hidden Sidebar (screen width < 992px)
$cb->l_sidebar_visible_mobile   = false;

// true                         : Dark themed Sidebar
// false                        : Light themed Sidebar
$cb->l_sidebar_dark             = true;

// true                         : Hoverable Side Overlay (screen width > 991px)
// false                        : Normal mode
$cb->l_side_overlay_hoverable   = false;

// true                         : Visible Side Overlay
// false                        : Hidden Side Overlay
$cb->l_side_overlay_visible     = false;

// true                         : Enables a visible clickable (closes Side Overlay) Page Overlay when Side Overlay opens
// false                        : Disables Page Overlay when Side Overlay opens
$cb->l_page_overlay             = true;

// true                         : Custom scrolling (screen width > 991px)
// false                        : Native scrolling
$cb->l_side_scroll              = true;


// **************************************************************************************************
// GLOBAL HEADER
// **************************************************************************************************

// true                         : Fixed Header
// false                        : Static Header
$cb->l_header_fixed             = false;

// ''                           : Classic Header style
// 'modern'                     : Modern Header style
// 'dark'                       : Dark themed Header (works only with classic Header style)
// 'light-glass'                : Light themed Header with transparency by default (absolute position,
//                                perfect for light images underneath - solid light background
//                                on scroll if the Header is also set as fixed)
// 'dark-glass'                 : Dark themed Header with transparency by default (absolute position,
//                                perfect for dark images underneath - solid dark background
//                                on scroll if the Header is also set as fixed)
$cb->l_header_style             = 'modern';


// **************************************************************************************************
// GLOBAL MAIN CONTENT
// **************************************************************************************************

// ''                           : Full width Main Content
// 'boxed'                      : Full width Main Content with a specific maximum width (screen width > 1200px)
// 'narrow'                     : Full width Main Content with a percentage width (screen width > 1200px)
$cb->l_m_content                = '';


// **************************************************************************************************
// GLOBAL MAIN MENU
// **************************************************************************************************

// It will get compared with the url of each menu link to make the link active and set up main menu accordingly
// If you are using query strings to load different pages, you can use the following value: basename($_SERVER['REQUEST_URI'])
$cb->main_nav_active            = basename($_SERVER['PHP_SELF']);

// You can use the following array to create your main menu
$cb->main_nav                   = array();
