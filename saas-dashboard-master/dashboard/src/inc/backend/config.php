<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *  
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

// $cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
//$cb->inc_header                 = 'inc/backend/views/inc_header.php';
// $cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-house-user',
        'url'   => 'be_pages_dashboard.php'
    ),
    array(
        'name'  => 'Subscriptions',
        'icon'  => 'fa fa-award',
        'url'   => 'be_pages_subscriptions.php'
        // 'sub'   => array(
        //     array(
        //         'name'  => 'Dashboards',
        //         'sub'   => array(
        //             array(
        //                 'name'  => 'Dashboard 2',
        //                 'url'   => 'be_pages_dashboard2.php'
        //             ),
        //             array(
        //                 'name'  => 'Dashboard 3',
        //                 'url'   => 'be_pages_dashboard3.php'
        //             ),
        //             array(
        //                 'name'  => 'Dashboard 4',
        //                 'url'   => 'be_pages_dashboard4.php'
        //             ),
        //         )
        //     ),
        //     array(
        //         'name'  => 'e-Commerce',
        //         'sub'   => array(
        //             array(
        //                 'name'  => 'Dashboard',
        //                 'url'   => 'be_pages_ecom_dashboard.php'
        //             ),
        //             array(
        //                 'name'  => 'Orders',
        //                 'url'   => 'be_pages_ecom_orders.php'
        //             ),
        //             array(
        //                 'name'  => 'Order',
        //                 'url'   => 'be_pages_ecom_order.php'
        //             ),
        //             array(
        //                 'name'  => 'Products',
        //                 'url'   => 'be_pages_ecom_products.php'
        //             ),
        //             array(
        //                 'name'  => 'Product Edit',
        //                 'url'   => 'be_pages_ecom_product_edit.php'
        //             ),
        //             array(
        //                 'name'  => 'Customer',
        //                 'url'   => 'be_pages_ecom_customer.php'
        //             )
        //         )
        //     ),
        // )
    ),
    array(
        'name'  => 'Customers',
        'icon'  => 'fa fa-users',
        'url'   => 'be_tables_styles.php'
    ),
    array(
        'name'  => 'Plans',
        'icon'  => 'fa fa-sticky-note',
        'url'   => 'be_pages_plans.php'
    )
    
);
