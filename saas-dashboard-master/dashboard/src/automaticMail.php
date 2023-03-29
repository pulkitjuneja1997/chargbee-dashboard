<?php

$id = isset( $_POST['id'] ) ? $_POST['id'] : 0;

$servername = "localhost";
$username = "root";
$password = "";
$database = 'saasDashboard';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT value FROM `saasDashboardData` WHERE `Option` ='clients_mails'";
$results = $conn->query($sql);
// // echo $results;
// print_r($results->fetch_assoc()); die('okkk');

$allMailIDs = ['pulkitjuneja@cedcommerce.com', 'admin@gmail.com', 'admin2@gmail.com']; 
require_once './clientsMails.php';
// print_r($clientsMails);
$to = "";

if( !empty( $allMailIDs ) ){
    foreach( $allMailIDs as $mailId ){
       if ( ! in_array( $mailId, $clientsMails ) ){
            $to .= $mailId . ',' ;
       }
    }
}

$subject = "HTML email";

$message = "<html>
                <head>
                  <title>HTML email</title>
                </head>
                <body>
                    <p>This email contains HTML Tags!</p>
                    <table>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                        </tr>
                    </table>
                </body>
            </html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <pulkitjuneja@cedcommerce.com>' . "\r\n";
$headers .= 'Cc: shivamsingh@cedcommerce.com' . "\r\n";

$retval = mail($to,$subject,$message,$headers);
       
if( $retval == true ) {
   echo "Message sent successfully...";
   $mailArray = explode(',', $to);
    if( !empty( $mailArray ) ){
       foreach( $mailArray as $mail ){

       }
    }
} else {
   echo "Message could not be sent...";
   if( !empty( $mailArray ) ){
    foreach( $mailArray as $mail ){

    }
 }
}

die;

?>