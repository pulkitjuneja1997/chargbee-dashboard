<?php

  global $offsets; 
  $offsets = array();

   require './coreFunctions.php';
   $function = isset( $_POST['function'] ) ? $_POST['function'] : '';
  // echo $function;
   if( $function == 'tableFilters' ){
      tableFilters();
   } elseif( $function == 'controlCustomerSubscription' ){
      controlCustomerSubscription();
   } elseif( $function == 'preparePlan' ){
      preparePlan();
   } elseif( $function == 'conversionFilter' ){
      conversionFilter();
   } elseif( $function == 'graphFilter' ){
      graphFilter();
   } elseif( $function == 'headFilter' ){
      headFilter();
   } 

   
//    elseif(){

//    }elseif(){

//    }elseif(){

//    }else{

//    }


   function tableFilters(){

      // $woo_user_id     = isset( $_POST['woo_user_id'] ) ? sanitize_text_field( $_POST['woo_user_id'] ) : '';
      // $ebay_user_id    = isset( $_POST['ebay_user_id'] ) ? sanitize_text_field( $_POST['ebay_user_id'] ) : '';

      $section   = isset( $_POST['section'] )  ?  $_POST['section']  : '';
      $per_page  = isset( $_POST['per_page'] ) ?  $_POST['per_page'] : 1;
      $prev_off  = isset( $_POST['prev_off'] )  ?  $_POST['prev_off']  : '';
      $nxt_off   = isset( $_POST['nxt_off'] )  ?  $_POST['nxt_off']  : '';
      $cls       = isset( $_POST['cls'] )  ?  $_POST['cls']  : '';

      // $order_status    = isset( $_POST['order_status'] ) ? sanitize_text_field( $_POST['order_status'] ) : 0;  
      // $start_date      = isset( $_POST['start_date'] ) ? sanitize_text_field( $_POST['start_date'] ) : 0;  
      // $end_date        = isset( $_POST['end_date'] )   ? sanitize_text_field( $_POST['end_date'] ) : 0;

      session_start();
      $_SESSION['offsets'][] = $prev_off;
      // echo "<pre>";
      // print_r( $_SESSION['offsets']);
      // $offsets[] = $prev_off;

      // echo strpos( $cls, 'next-page'); 
      // echo strpos( $cls, 'previous-page');
      if( !empty( strpos( $cls, 'next-page') ) ) {
         $CurrentPageNum = $nxt_off;
         $off = $nxt_off;
      }

      if( !empty( strpos( $cls, 'previous-page') ) ) {
         $CurrentPageNum = $prev_off;
         $cnt = count($_SESSION['offsets']);
         $off = $_SESSION['offsets'][$cnt-2];
      }

      // echo $CurrentPageNum;

      require './remote/Ced_Chargebee_Send_HTTP_Request.php';
      $curl = new Ced_Chargebee_Send_HTTP_Request();

      $tableHtml = '';
      $allSubscriptions = $curl->ced_chargebee_get_all_subscription( $per_page, '', '', '', '', '', $CurrentPageNum );
      $allSubscriptions = json_decode( $allSubscriptions, true);

      //  $tableRows   = isset( $apiResponse['list'] ) ? $apiResponse['list'] : array();
    
      $tableHtml      = '';

      if( ! empty( $allSubscriptions['list'] ) ){
         foreach( $allSubscriptions['list'] as $subscription ){
            
            $subs_id       = isset( $subscription['subscription']['id'] ) ? $subscription['subscription']['id'] : '-';
            $subs_name     = isset( $subscription['subscription']['subscription_items'][0]['item_price_id'] ) ? $subscription['subscription']['subscription_items'][0]['item_price_id'] : '-'; ;
            
            $first_name    = isset( $subscription['customer']['first_name'] ) ? $subscription['customer']['first_name'] : '-';
            $last_name     = isset( $subscription['customer']['last_name'] )  ? $subscription['customer']['last_name'] : '-';

            $email         = isset( $subscription['customer']['email'] ) ? $subscription['customer']['email'] : '-';
            $company       = isset( $subscription['customer']['company'] ) ? $subscription['customer']['company'] : '-';
            $billing_date  = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000; 
            $creation_date = isset( $subscription['subscription']['created_at'] ) ? $subscription['subscription']['created_at'] : 0000000000; 
            

            $tableHtml .= '<tr class="customer_table" id="' . $subs_id . '" data-toggle="layout" data-action="side_overlay_toggle">
               <th class="text-center" scope="row">
                 <p>' . $subs_name . '</p>
                 <p>' . $subs_id . '</p>
               </th>
               <td >
                 <p>' . $first_name . ' ' . $last_name . '</p>
                 <p>' . $email . '</p>
               </td>
               <td >' . gmdate( 'Y-m-d', $billing_date ) . '</td> 
               <td >' . gmdate( 'Y-m-d', $creation_date ) . '</td> 
               <td>'  . $company . '</td>
            </tr>';
         }
      }

      $nextOffset = isset( $allSubscriptions['next_offset'] ) ? $allSubscriptions['next_offset'] : '';

      if( !empty( strpos( $cls, 'next-page') ) ) {
         $off2 = $nextOffset;
      }

      if( !empty( strpos( $cls, 'previous-page') ) ) {
         $off2 = $prev_off;
      }
      
      echo json_encode(
         array(
            'html' => $tableHtml,
            'nextOffset' => $off2,
            'previousOffset' => $off,
            'offsets' => $_SESSION['offsets']
         )
      ); 
      die;   

   }

   function controlCustomerSubscription(){

      $subscription_data = isset( $_POST['subscription_data'] ) ? $_POST['subscription_data'] : '';
      require './remote/Ced_Chargebee_Send_HTTP_Request.php';
      $curl = new Ced_Chargebee_Send_HTTP_Request();

      if( $subscription_data['pause'] ){
         $response = $curl->ced_chargebee_pause_subs( $subscription_data['customer_id'] );
         $response = json_decode( $response, true);
         print_r($response);
      }

      if( $subscription_data['delete'] ){
         $response = $curl->ced_chargebee_delete_subs( $subscription_data['customer_id'] );
         $response = json_decode( $response, true); 

         print_r($response);
      }
      die;
   }

   function preparePlan(){

      $planData  = isset( $_POST['planData'] ) ?  $_POST['planData']  : '';
      parse_str( $planData, $plan_data); 

      print_r($plan_data);
      die();
      
   }

   function conversionFilter(){

      $start_date = isset( $_POST['start_date'] ) ?  $_POST['start_date']  : '';
      $end_date   = isset( $_POST['end_date'] ) ?  $_POST['end_date']  : '';
      $conversion   = isset( $_POST['conversion'] ) ?  $_POST['conversion']  : '';
      
      echo $start_date, $end_date, $conversion;
      die();
      
   }

   function graphFilter(){

      $start_date  = isset( $_POST['start_date'] ) ?  $_POST['start_date']  : '';
      $end_date    = isset( $_POST['end_date'] ) ?  $_POST['end_date']  : '';
      $conversion  = isset( $_POST['conversion'] ) ?  $_POST['conversion']  : '';

      $date_format = '';

      if( 'year' == $conversion ){
         $date_format = 'Y';
      } elseif( 'day' == $conversion ){
             $date_format = 'Y-m-d';
      }else {
         $date_format = 'Y-m';
      } 

      require './remote/Ced_Chargebee_Send_HTTP_Request.php';
      $curl = new Ced_Chargebee_Send_HTTP_Request();

      $tableHtml = '';
      $allSubscriptions = $curl->ced_chargebee_get_all_subscription( '', 'in_trial', '', $start_date, $end_date );
      $allSubscriptions = json_decode( $allSubscriptions, true);

      $freeTrialSubsLineData = array();

      if( !empty( $allSubscriptions['list'] ) ){
         foreach( $allSubscriptions['list'] as $subscription ){

            $creation_date = isset( $subscription['subscription']['created_at'] ) ? $subscription['subscription']['created_at'] : 0000000000; 
            $formatted_date = gmdate( $date_format, $creation_date );
            $prevValue = isset( $freeTrialSubsLineData[$formatted_date]) ?  $freeTrialSubsLineData[$formatted_date] : 0;
            $freeTrialSubsLineData[$formatted_date] =  $prevValue + 1;
         
         }     
      }
      
      print_r( json_encode(
            array(
            'keys' => array_keys($freeTrialSubsLineData),
            'values' => array_values($freeTrialSubsLineData)
         ) 
      ));
      die();
      
   }


   function headFilter(){

      $section    = isset( $_POST['section'] ) ?  $_POST['section']  : ''; 
      $per_page   = isset( $_POST['per_page'] ) ?  $_POST['per_page']  : '';

      require './remote/Ced_Chargebee_Send_HTTP_Request.php';
      $curl = new Ced_Chargebee_Send_HTTP_Request();

      $tableHtml = '';

      if( $section == 'subscriptions' ){
         $marketplace  = isset( $_POST['marketplace'] ) ?  $_POST['marketplace']  : ''; 
         $customer_id  = isset( $_POST['customer_id'] ) ?  $_POST['customer_id']  : '';
         
         $allSubscriptions = $curl->ced_chargebee_get_all_subscription( $per_page, '', $marketplace, '', '', $customer_id );
         $allSubscriptions = json_decode( $allSubscriptions, true);

         if( !empty( $allSubscriptions['list'] ) ){
            foreach( $allSubscriptions['list'] as $subscription ){

               $subs_id    = isset( $subscription['subscription']['id'] ) ? $subscription['subscription']['id'] : '-';
               $subs_name  = isset( $subscription['subscription']['subscription_items'][0]['item_price_id'] ) ? $subscription['subscription']['subscription_items'][0]['item_price_id'] : '-'; ;
               
               $first_name = isset( $subscription['customer']['first_name'] ) ? $subscription['customer']['first_name'] : '-';
               $last_name  = isset( $subscription['customer']['last_name'] )  ? $subscription['customer']['last_name'] : '-';

               $email      = isset( $subscription['customer']['email'] ) ? $subscription['customer']['email'] : '-';
               $company    = isset( $subscription['customer']['company'] ) ? $subscription['customer']['company'] : '-';
               $billing_date = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000; 
               $creation_date = isset( $subscription['subscription']['created_at'] ) ? $subscription['subscription']['created_at'] : 0000000000; 
               

               $tableHtml .= '<tr class="customer_table" id="' . $subs_id . '" data-toggle="layout" data-action="side_overlay_toggle">
                  <th class="text-center" scope="row">
                    <p>' . $subs_name . '</p>
                    <p>' . $subs_id . '</p>
                  </th>
                  <td >
                    <p>' . $first_name . ' ' . $last_name . '</p>
                    <p>' . $email . '</p>
                  </td>
                  <td >' . gmdate( 'Y-m-d', $billing_date ) . '</td> 
                  <td >' . gmdate( 'Y-m-d', $creation_date ) . '</td> 
                  <td>'  . $company . '</td>
                </tr>';
              
            }     
         }else{
            $message = isset( $allSubscriptions['message'] ) ? $allSubscriptions['message'] : 'Please Enter correct value';
            $tableHtml .= '<tr > <td colspan=5>'  . $message . '</td> </tr>';
         }

         echo $tableHtml;
         die;
      }

      if( $section == 'customers' ){
         $key  = isset( $_POST['key'] ) ?  $_POST['key']  : '';
         $value  = isset( $_POST['value'] ) ?  $_POST['value']  : '';

         $allCustomers = $curl->ced_chargebee_get_all_customers( '', $value, $key );
         $allCustomers = json_decode( $allCustomers, true);

         // print_r($allCustomers); 
         $tableHtml = '';

         if( !empty( $allCustomers['list'] ) ){
            foreach( $allCustomers['list'] as $customer ){

               $cust_id    = isset( $customer['customer']['id'] ) ? $customer['customer']['id'] : '-';
               // $subs_name  = isset( $subscription['subscription']['subscription_items'][0]['item_price_id'] ) ? $subscription['subscription']['subscription_items'][0]['item_price_id'] : '-'; ;
               
               $first_name = isset( $customer['customer']['first_name'] ) ? $customer['customer']['first_name'] : '-';
               $last_name  = isset( $customer['customer']['last_name'] )  ? $customer['customer']['last_name'] : '-';

               $email      = isset( $customer['customer']['email'] ) ? $customer['customer']['email'] : '-';
               $company    = isset( $customer['customer']['company'] ) ? $customer['customer']['company'] : '-';
               // $billing_date = isset( $subscription['subscription']['next_billing_at'] ) ? $subscription['subscription']['next_billing_at'] : 0000000000; 
               $creation_date = isset( $customer['customer']['created_at'] ) ? $customer['customer']['created_at'] : 0000000000; 
               
               $line1 = isset( $customer['customer']['billing_address']['line1'] ) ? $customer['customer']['billing_address']['line1'] : '-';
               $line2 = isset( $customer['customer']['billing_address']['line2'] ) ? $customer['customer']['billing_address']['line2'] : '-';
               $city = isset( $customer['customer']['billing_address']['city'] ) ? $customer['customer']['billing_address']['city'] : '-';
               $zip = isset( $customer['customer']['billing_address']['zip'] ) ? $customer['customer']['billing_address']['zip'] : '-';
               $country = isset( $customer['customer']['billing_address']['country'] ) ? $customer['customer']['billing_address']['country'] : '-';
               $state = isset( $customer['customer']['billing_address']['state'] ) ? $customer['customer']['billing_address']['state'] : '-';
           
               $tableHtml .= ' <tr class="customer_table" id="'. $cust_id . '" data-toggle="layout" data-action="side_overlay_toggle">
               <th >
                 <p>' .$first_name . ' ' . $last_name .'</p>
                 <p>' .$email . '</p>
               </th>
               <th class="text-center" scope="row">
                 <p>'.'' .'</p>
                 <p>'. '' .'</p>
               </th>
               <td >' . gmdate( 'Y-m-d', $creation_date ) .'</td> 
               <td>' . $company .'</td>
               <td >' . $line1 . ' ' . $line2 . ' '. $city . ' '. $zip. ' ' . $country . ' ' . $state . '</td> 
               
             </tr>';
              
            }     
         }else{
             $tableHtml .= '<tr > <td colspan=5>PLease enter valid name or id </td> </tr>';
         }


      }
      
      //echo $start_date, $end_date, $conversion;
      echo $tableHtml;
      die();
      
   }


?>