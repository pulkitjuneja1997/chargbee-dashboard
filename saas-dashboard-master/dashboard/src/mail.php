<?php

$id = isset( $_POST['id'] ) ? $_POST['id'] : 0;

$to = "somebody@example.com, somebodyelse@example.com";
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
} else {
   echo "Message could not be sent...";
}

die;

?>