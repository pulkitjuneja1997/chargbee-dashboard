<?php

function curlCall( $url, $headers, $method = 'GET', $params = array() ){

    // die('opppppppppppppppppppppppppp');

    if( $method == 'GET' ){
        $curlMethod = CURLOPT_HTTPGET; 
    } else{
        $curlMethod = CURLOPT_HTTPPOST; 
    }

    $connection = curl_init();
    curl_setopt( $connection, CURLOPT_URL, $url );
    curl_setopt( $connection, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt( $connection, CURLOPT_SSL_VERIFYHOST, 0 );
    curl_setopt( $connection, $curlMethod, $headers );
    curl_setopt( $connection, CURLOPT_HTTPGET, 1 );
    curl_setopt( $connection, CURLOPT_RETURNTRANSFER, 1 );
    $response = curl_exec( $connection );
    curl_close( $connection );
    
    // $response = json_decode( $response, true );
    return $response;

}


?>