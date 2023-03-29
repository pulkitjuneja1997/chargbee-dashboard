<?php
/**
 * dashboards/clean/config.php
 *
 * Author: pixelcave
 *
 * Clean Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/clean/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/clean/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/clean/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/clean/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Home',
        'icon'  => 'fa fa-home',
        'badge' => array(3, 'primary'),
        'url'   => 'db_clean.php'
    ),
    array(
        'name'  => 'Projects',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Manage',
        'icon'  => 'fa fa-wrench',
        'url'   => ''
    ),
    array(
        'name'  => 'Clients',
        'icon'  => 'fa fa-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Team',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fa fa-wallet',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-fire',
        'url'   => ''
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-pencil-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'fa fa-flag',
        'url'   => ''
    ),
    array(
        'name'  => 'Password Update',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'Help',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Knowledge Base',
        'icon'  => 'fa fa-sticky-note',
        'url'   => ''
    ),
    array(
        'name'  => 'Contact Us',
        'icon'  => 'fa fa-envelope',
        'url'   => ''
    )
);
