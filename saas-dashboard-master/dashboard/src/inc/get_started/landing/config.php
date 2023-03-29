<?php

/**
 * get_started/landing/config.php
 *
 * Author: pixelcave
 *
 * Get Started Landing configuration file
 *
 */
// *************************7*************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_header                 = 'inc/get_started/landing/views/inc_header.php';
$cb->inc_sidebar                = 'inc/get_started/landing/views/inc_sidebar.php';
$cb->inc_footer                 = 'inc/get_started/landing/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$cb->l_sidebar_visible_desktop  = false;
$cb->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = 'light-glass';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav = array(
    array(
        'name' => 'Home',
        'icon' => 'fa fa-home',
        'url' => 'gs_landing.php'
    ),
    array(
        'name' => 'Heading',
        'type' => 'heading'
    ),
    array(
        'name' => 'Dropdown',
        'icon' => 'fa fa-puzzle-piece',
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
        'name' => 'Vital',
        'type' => 'heading'
    ),
    array(
        'name' => 'Page',
        'icon' => 'fa fa-wrench',
        'url' => 'javascript:void(0)'
    ),
    array(
        'name' => 'Page',
        'icon' => 'fa fa-wrench',
        'url' => 'javascript:void(0)'
    ),
    array(
        'name' => 'Page',
        'icon' => 'fa fa-wrench',
        'url' => 'javascript:void(0)'
    )
);
