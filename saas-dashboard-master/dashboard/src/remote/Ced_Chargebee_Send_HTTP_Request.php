<?php
class Ced_Chargebee_Send_HTTP_Request {

	

	public function __construct() {

		
	}

	
	/**
	 * sendHttpGetRequest
	 * This is the GET Request function for Chargebee
	 * @param  mixed $action
	 * @return void
	 */
	public function sendHttpGetRequest( $action = '' ) {

        if ( '' == $action ) {
            return false;
        }
        $store_name="krishnatest-test";
        $tokan="dGVzdF93U0dYalNibFR0eE1XNVhjS04yTWZscFVnaG82bGlhMQ==";
    
        $api_path="https://".$store_name.".chargebee.com/api/v2";

        $connection = curl_init();
        $url        = $api_path .'/'. $action;
       
        // echo $url;
        // echo '</br>';
        $headers    = $this->build_headers($tokan);
    
        curl_setopt( $connection, CURLOPT_URL, $url );
        curl_setopt( $connection, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $connection, CURLOPT_SSL_VERIFYHOST, 0 );
        curl_setopt( $connection, CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $connection, CURLOPT_RETURNTRANSFER, 1 );
    
        $response = curl_exec( $connection );
        curl_close( $connection );
        return $response;
    }
    
    /**
     * PostHttpRequest
     * This is the POST Request function for Chargebee
     * @param  mixed $action
     * @param  mixed $custom_plan_data
     * @return void
     */
    public function PostHttpRequest( $action = '', $custom_plan_data = array() ) {

        if ( '' == $action ) {   
            return false;
        }
    
        $store_name="krishnatest-test";
        $tokan="dGVzdF93U0dYalNibFR0eE1XNVhjS04yTWZscFVnaG82bGlhMQ==";
    
        $api_path="https://".$store_name.".chargebee.com/api/v2";
        $custom_url = http_build_query($custom_plan_data);
    
        $connection = curl_init();
        $url        = $api_path .'/'. $action.'?'.$custom_url;
        $headers    = $this->build_headers($tokan);
        curl_setopt( $connection, CURLOPT_URL, $url );
        curl_setopt( $connection, CURLOPT_POST, 1 );
        curl_setopt( $connection, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $connection, CURLOPT_FOLLOWLOCATION, 1 );
        curl_setopt( $connection, CURLOPT_SSL_VERIFYHOST, 0 );
        curl_setopt( $connection, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $connection, CURLOPT_HTTPHEADER, $headers );
        $response = curl_exec( $connection );
        curl_close( $connection );
        return $response; 
    }
    
    /**
     * build_headers
     *
     * @param  mixed $tokan
     * @return void
     */
    public function build_headers($tokan){
		
		$headers = array(
			'Authorization: Basic '.$tokan,
		);
		return $headers;
    }
    

    
  /**
   * Ced_chargebee_get_all_subscription
   * This function will give us the all the subscription
   * @param  mixed $limit
   * @return void
   */
  public function ced_chargebee_get_all_subscription( $limit='' , $status='', $marketplace='', $start_date='', $end_date='', $customer_id = '', $CurrentPageNum = '' ){

		$action ='subscriptions?';

    if( empty( $start_date ) ){
      $start   = 0000000000;
    } else{
      $start = strtotime($start_date);
    }

    if( empty( $end_date ) ){
      $end   = strtotime('now');
    } else{
      $end   = strtotime($end_date);
    }

    //echo $start, $end;
    $params = array( 
        'limit' => $limit, 
        'status[is]' => $status,
        'channel[is]' => $marketplace,
        'created_at[between]' => '[' . $start . ',' . $end . ']',
        'customer_id[is]' => $customer_id,
        'offset'  => $CurrentPageNum
    );
    // print_r($params);
    $nonEmptyParams = array();

    foreach( $params as $param_key => $param_value ){
      if( !empty( $params[$param_key] ) ){
        $nonEmptyParams[$param_key] = $param_value;
      }
         
    }

    if( !empty($nonEmptyParams) ){
      foreach( $nonEmptyParams as $param_key => $param_value ){
        if( !empty( $params[$param_key] ) ){
          $action = $action . $param_key . '=' . $param_value . '&';  
        }
           
      }
    }

    // if( !empty( $limit ) ){
    //     $action = $action . '?limit=' . $limit . '&';  
    // }

    // if( ( !empty( $status) ) ){
    //   $action = $action . '&status=' . $status ;  
    // }

		$response=$this->sendHttpGetRequest( $action);


		return $response;

	}
    
  /**
   * Ced_chargebee_get_one_subscription
   * This Function will give us the data of one subscription by the help of subscription ID
   * @param  mixed $subscription_id
   * @return void
   */
  public function ced_chargebee_get_one_subscription( $subscription_id='', $customer_id='' ){

    //$subscription_id='16BXzGTCbOzsKGow';
    $action ='subscriptions?';

    $params = array( 
      'subscription_id' => $subscription_id, 
      'customer_id[is]' => $customer_id
    );

    $nonEmptyParams = array();

    foreach( $params as $param_key => $param_value ){
      if( !empty( $params[$param_key] ) ){
        $nonEmptyParams[$param_key] = $param_value;
      }
        
    }

    if( !empty($nonEmptyParams) ){
      foreach( $nonEmptyParams as $param_key => $param_value ){
        if( !empty( $params[$param_key] ) ){
          $action = $action . $param_key . '=' . $param_value . '&';  
        }
          
      }
    }

    $response=$this->sendHttpGetRequest( $action);
    return $response;
      
  }
    


    		
	/**
	 * Ced_chargebee_create_custom_plan
	 * This function will create one custom plan
	 * @param  mixed $plan_name
	 * @param  mixed $currency
	 * @param  mixed $period
	 * @param  mixed $price
	 * @return void
	 */
	public function ced_chargebee_create_custom_plan($plan_name='',$currency='',$period='',$price='',$period_unit=''){
		
		$action = "items";
		$plan_name="test basic plan ced18";
		$currency="USD";
		$period="1";
		$period_unit="month";
		$price   =100;
		$plan_id = preg_replace('/\s+/', '_', $plan_name);
		
		$custom_plan_data=array('id'=>$plan_id,'name'=>$plan_name,'type'=>'plan','item_family_id'=>'cbdemo_pf_crm ');
		
		
		$planed_created=$this->PostHttpRequest( $action, $custom_plan_data);

		$planed_created=json_decode($planed_created,true);

		if(isset($planed_created['item']['id'])){
			$action = "item_prices";
			$custom_plan_price_id=$plan_id."-".$currency."-".$period_unit;
			$custom_plan_name=$plan_id." ".$currency." ".$period_unit;
			$custom_plan_price=array('id'			=> $custom_plan_price_id,
									'item_id'		=> $plan_id,
									'name'			=> $custom_plan_name,
									'price'			=> $price,
									'period_unit'	=> $period_unit,
									'period'		=> $period);
			$custom_plan_price_created=$this->PostHttpRequest( $action, $custom_plan_price);
			$custom_plan_price_created_JSON=json_decode($custom_plan_price_created,true);
			
			return $custom_plan_price_created;
		}
		else{
			return $planed_created['message'];
		}
		
  }
    
    
    /**
     * Ced_chargebee_all_plans
     * This function will give us the all the plans
     * @param  mixed $limit
     * @return void
     */
    public function ced_chargebee_all_plans($limit=''){

      $action='items?limit='.$limit;

      $response=$this->sendHttpGetRequest( $action);

        return $response;
    }
    
    
    /**
     * Ced_chargebee_pause_subs
     * This will pause the one subscription
     * @param  mixed $subscription_id
     * @return void
     */
    public function ced_chargebee_pause_subs($subscription_id){

      $action ='subscriptions/'.$subscription_id;
      $pauses_subscription=array('pause_option'=>'end_of_term');
      $subscription_paused=$this->PostHttpRequest( $action, $pauses_subscription);
	  	return $subscription_paused;

    }
    

    
    /**
     * Ced_chargebee_delete_subs
     * This will delete the one subscription
     * @return void
     */
    public function ced_chargebee_delete_subs($subscription_id){

      $action ='subscriptions/'.$subscription_id.'/delete';
      $subscription_deleted=$this->PostHttpRequest( $action );
      return $subscription_deleted;
    }
    

    
    /**
     * Ced_chargebee_all_customers
     * This function will return all the list of the customers
     * @param  mixed $limit
     * @return void
     */
    public function ced_chargebee_get_all_customers( $limit='', $value='', $key=''){

      $action ='customers?';
      $mod_key = $key . '[is]';

      $params = array( 
        'limit' => $limit, 
        $mod_key => $value
      );

      $nonEmptyParams = array();

      foreach( $params as $param_key => $param_value ){
        if( !empty( $params[$param_key] ) ){
          $nonEmptyParams[$param_key] = $param_value;
        }
          
      }

      if( !empty($nonEmptyParams) ){
        foreach( $nonEmptyParams as $param_key => $param_value ){
          if( !empty( $params[$param_key] ) ){
            $action = $action . $param_key . '=' . $param_value . '&';  
          }
            
        }
      }

      $response=$this->sendHttpGetRequest( $action);
      return $response;

    }
    

    
    /**
     * Ced_chargebee_get_one_customer
     * This function will return data of one customer
     * @param  mixed $customer_id
     * @return void
     */
    public function ced_chargebee_get_one_customer($customer_id=''){

      $customer_id='16BXzGTCbOzsKGow';
      $action ='customers/'.$customer_id;
      $response=$this->sendHttpGetRequest( $action);
      return $response;
        
    }
}
