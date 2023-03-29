<?php
/**
 * dashboards/classic/config.php
 *
 * Author: pixelcave
 *
 * Classic Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = 'inc/dashboards/classic/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/classic/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/classic/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/classic/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$cb->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-coffee',
        'url'   => 'db_classic.php'
    ),
    array(
        'name'  => 'Headquarters',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Projects',
        'icon'  => 'fa fa-briefcase',
        'sub'   => array(
            array(
                'name'  => 'New',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Invoices',
        'icon'  => 'fa fa-file-invoice-dollar',
        'url'   => ''
    ),
    array(
        'name'  => 'Clients',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fa fa-wallet',
        'url'   => ''
    ),
    array(
        'name'  => 'Requests',
        'icon'  => 'fa fa-layer-group',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-sticky-note',
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    )
);
