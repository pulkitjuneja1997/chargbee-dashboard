<?php

/**
 * get_started/rtl_backend/config.php
 *
 * Author: pixelcave
 *
 * Get Started RTL Backend configuration file
 *
 */
// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay   = 'inc/get_started/rtl_backend/views/inc_side_overlay.php';
$cb->inc_sidebar        = 'inc/get_started/rtl_backend/views/inc_sidebar.php';
$cb->inc_header         = 'inc/get_started/rtl_backend/views/inc_header.php';
$cb->inc_footer         = 'inc/get_started/rtl_backend/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_left     = false;


// **************************************************************************************************
// RTL Support
// **************************************************************************************************

$cb->l_rtl              = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav = array(
    array(
        'name' => 'Dashboard',
        'icon'  => 'fa fa-house-user',
        'url' => 'gs_backend.php'
    ),
    array(
        'name' => 'Heading',
        'type' => 'heading'
    ),
    array(
        'name' => 'Dropdown',
        'icon'  => 'fa fa-puzzle-piece',
        'sub' => array(
            array(
                'name' => 'Link #1',
                'url' => 'javascript:void(0)'
            ),
            array(
                'name' => 'Link #2',
                'url' => 'javascript:void(0)'
            )
        )
    )
);
