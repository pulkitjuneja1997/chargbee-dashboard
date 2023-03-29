<?php
/**
 * dashboards/medical/config.php
 *
 * Author: pixelcave
 *
 * Clean Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/medical/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/medical/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/medical/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/medical/views/inc_footer.php';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Overview',
        'icon'  => 'far fa-hospital',
        'url'   => 'db_medical.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Patients',
        'icon'  => 'far fa-user-circle',
        'sub'   => array(
            array(
                'name'  => 'Current',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Patient',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Appointments',
        'icon'  => 'fa fa-calendar-alt',
        'sub'   => array(
            array(
                'name'  => 'Active',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Appointment',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fab fa-paypal',
        'sub'   => array(
            array(
                'name'  => 'Pending',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Payment',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-pencil-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'fa fa-flag',
        'url'   => ''
    ),
    array(
        'name'  => 'Help',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Knowledge Base',
        'icon'  => 'fa fa-book',
        'url'   => ''
    ),
    array(
        'name'  => 'Hospital Forum',
        'icon'  => 'fa fa-comments',
        'url'   => ''
    )
);
