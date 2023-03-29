<?php
require 'inc/_classes/Template.php';
$cb                             = new Template('Codebase', '5.1', 'assets');
$id = isset( $_POST['id'] ) ? $_POST['id'] : 0;
$section = isset( $_POST['section'] ) ? $_POST['section'] : '';
$cb->id = $id;  
$cb->customerName = $id;  

require 'inc/backend/views/inc_side_overlay.php';

// print_r($subscriptionsInfo); die;
// $activeSubscriptions = json_decode( $activeSubscriptions, true);
// $activeSubscriptionsCount = count($activeSubscriptions['list']);

die;

?>