<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */


require 'clientes.php';
require 'usuarios.php';
require 'almacenes.php';
require 'palets.php';
// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';

// **************************************************************************************************
// Login
// *


// Verificar si el usuario no ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de login
    header('Location: login.php');
    exit;
}


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Escritorio',
        'icon'  => 'fa fa-house-user',
        'url'   => 'index.php'
    ),
   
    array(
        'name'  => 'Administración',
        'type'  => 'heading'
    ),
    
   
    array(
        'name'  => 'Clientes',
        'icon'  => 'fa fa-list-alt',
        'sub'   => array(
           
            array(
                'name'  => 'Clientes',
                'url'   => 'clientes.php'
            ),
            array(
                'name'  => 'Usuarios',
                'url'   => 'usuarios.php'
            ),
            array(
                'name'  => 'Almacenes',
                'url'   => 'almacenes.php'
            ),
            array(
                'name'  => 'Palets',
                'url'   => 'palets.php'
            )
        )
    ),
    
    array(
        'name'  => 'Desarrollo',
        'type'  => 'heading'
    ),
    
    array(
        'name'  => 'Componentes (Desarrollo)',
        'icon'  => 'fa fa-cogs',
        'sub'   => array(
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Onboarding',
                'url'   => 'be_comp_onboarding.php'
            ),
            array(
                'name'  => 'Loaders',
                'url'   => 'be_comp_loaders.php'
            ),
            array(
                'name'  => 'Dialogs',
                'url'   => 'be_comp_dialogs.php'
            ),
            array(
                'name'  => 'Notifications',
                'url'   => 'be_comp_notifications.php'
            ),
            array(
                'name'  => 'Nestable',
                'url'   => 'be_comp_nestable.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Carousel',
                'url'   => 'be_comp_carousel.php'
            ),
            array(
                'name'  => 'Offcanvas',
                'url'   => 'be_comp_offcanvas.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'Calendario',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            )
        )
    ),
   
    array(
        'name'  => 'Adicional',
        'type'  => 'heading'
    ),
    
    array(
        'name'  => 'Autentificación',
        'icon'  => 'fa fa-user-lock',
        'sub'   => array(
         
            array(
                'name'  => 'Ingresar',
                'url'   => 'login.php'
            ),
         
            array(
                'name'  => 'Registro',
                'url'   => 'registro.php'
            ),
         
            
            array(
                'name'  => 'Bloquear Pantalla',
                'url'   => 'bloquear.php'
            ),
            array(
                'name'  => 'Recordar Contraseña',
                'url'   => 'recordar.php'
            ),
            
        )
    ),
    
    array(
        'name'  => 'Soporte',
        'icon'  => 'fa fa-coffee',
        'sub'   => array(
            array(
                'name'  => 'Ayuda',
                'url'   => '#'
            ),
          
        )
    )
);
