<?php

/**
 * get_started/rtl_backend_boxed/config.php
 *
 * Author: pixelcave
 *
 * Get Started RTL Backend Boxed configuration file
 *
 */
// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_header                 = 'inc/get_started/rtl_backend_boxed/views/inc_header.php';
$cb->inc_sidebar                = 'inc/get_started/rtl_backend_boxed/views/inc_sidebar.php';
$cb->inc_footer                 = 'inc/get_started/rtl_backend_boxed/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$cb->l_sidebar_left             = false;
$cb->l_sidebar_visible_desktop  = false;
$cb->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = 'dark';


// **************************************************************************************************
// RTL Support
// **************************************************************************************************

$cb->l_rtl                      = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav = array(
    array(
        'name' => 'Dashboard',
        'icon'  => 'fa fa-house-user',
        'url' => 'gs_backend_boxed.php'
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
            ),
            array(
                'name' => 'Dropdown',
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
        )
    ),
    array(
        'name' => 'More',
        'icon' => 'fa fa-rocket',
        'url' => 'javascript:void(0)'
    ),
);
