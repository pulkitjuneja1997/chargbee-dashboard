<?php
/**
 * dashboards/pop/config.php
 *
 * Author: pixelcave
 *
 * Pop Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/pop/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/pop/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/pop/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/pop/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$cb->theme                      = 'pulse';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_mini             = true;
$cb->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-coffee',
        'url'   => 'db_pop.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Projects',
        'icon'  => 'fa fa-briefcase',
        'url'   => ''
    ),
    array(
        'name'  => 'Clients',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Invoices',
        'icon'  => 'fa fa-file-invoice',
        'url'   => ''
    ),
    array(
        'name'  => 'Assets',
        'icon'  => 'fa fa-briefcase',
        'url'   => ''
    ),
    array(
        'name'  => 'Tickets',
        'icon'  => 'fa fa-shield-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'fa fa-flag',
        'url'   => ''
    ),
    array(
        'name'  => 'Help',
        'icon'  => 'fa fa-life-ring',
        'url'   => ''
    )
);
