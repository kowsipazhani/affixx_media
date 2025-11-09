<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

print_r($_POST);
die;

//include 'mail.php';

$from=$_REQUEST['from'];
$enquiryfrom=$_REQUEST['enquiryfrom'];

// echo $from."<br>";
// echo $enquiryfrom."<br>";

// $secretKey = ""; // Replace with your reCAPTCHA Secret Key
// $responseToken = $_POST['g-recaptcha-response'];
// $remoteIP = $_SERVER['REMOTE_ADDR'];

// Verify the token with Google
// $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
// $response = file_get_contents($verifyURL . "?secret=" . $secretKey . "&response=" . $responseToken . "&remoteip=" . $remoteIP);
// $responseKeys = json_decode($response, true);


// Check verification result
//if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
    // Proceed with form processing logic (e.g., save to DB, send email)
    if( (isset($_REQUEST['from'])) && (isset($_REQUEST['enquiryfrom'])) && ($from!="") && ($enquiryfrom!="") ){

        /***** Get In Touch *****/
        if($from=="getintouch"){
            
            $Data=array();
            $Data['enquiryfrom']=$_REQUEST['enquiryfrom'];
            $Data['firstName']=$_POST['name'];
            $Data['emailaddress']=$_POST['email'];
            $Data['phoneno']=$_POST['mobile_number'];
            $Data['business_name']=$_POST['business_name'];
            $Data['service']=$_POST['service'];
            $Data['message']=$_POST['message'];
            //print_r($Data);
            
            $From = "affixxmedia@gmail.com";
            $FromName="Affixx Media";
            $EmailTo =  "kowsi02061997@gmail.com"; //Testing
            //$EmailTo =  "affixxmedia@gmail.com";
            $ToName =  "Affixx Media";
            $EmailToday=date('d/m/y');
            $Subject = "Affixx Media Enquiry - ".html_entity_decode(ucfirst($Data['enquiryfrom']),ENT_QUOTES);
                  
                  $Body = '<html>
                <body style="background-color: #f9f9f9; width: 600px; padding: 30px; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
                  <div style="text-align: center; margin-bottom: 20px;">
                    <img src="https://affixx-media-two.vercel.app/image/logo/footer_logo.png" alt="Logo" style="max-width: 150px;">
                  </div>
                  <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <p style="margin: 0 0 20px;font-weight: 600;font-size: 14px;">Dear Team,</p>
                    <p style="margin: 0 0 20px;font-weight: 600;font-size: 14px;">'
                    .html_entity_decode(ucfirst($Data['firstName']), ENT_QUOTES).
                    ' has contacted us. Please get back to them soon.</p>
                    <table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 14px; color: #555;">
                      <thead>
                        <tr style="background-color: #f2f2f2; text-align: left;">
                          <th style="padding: 12px; border-bottom: 2px solid #ddd;">Field</th>
                          <th style="padding: 12px; border-bottom: 2px solid #ddd;">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Enquiry for</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .html_entity_decode(ucfirst($Data['enquiryfrom']), ENT_QUOTES).
                          '</td>
                        </tr>
                        <tr style="background-color: #f9f9f9;">
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Name</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .html_entity_decode(ucfirst($Data['firstName']), ENT_QUOTES).
                          '</td>
                        </tr>
                        <tr>
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Email</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .$Data['emailaddress'].
                          '</td>
                        </tr>
                        <tr style="background-color: #f9f9f9;">
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Mobile</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .$Data['phoneno'].
                          '</td>
                        </tr>
                        <tr style="background-color: #f9f9f9;">
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Business Name</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .$Data['business_name'].
                          '</td>
                        </tr>
                        <tr style="background-color: #f9f9f9;">
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Service</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .$Data['service'].
                          '</td>
                        </tr>
                        <tr>
                          <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Message</td>
                          <td style="padding: 10px; border-bottom: 1px solid #eee;">'
                          .html_entity_decode($Data['message'], ENT_QUOTES).
                          '</td>
                        </tr>
                      </tbody>
                    </table>
                    <p style="margin: 20px 0 0; font-size: 13px; color: #888;">This is an automated email. Please do not reply to this email.</p>
                  </div>
                </body>
              </html>';

                  
              $AltBody= "This is an email for enquiry";
                
              $headers = "From: affixxmedia@gmail.com"; // Email Sender
              if(mail($EmailTo, $Subject, $Body, $headers)) {
                  echo 1;
              }else{
                  echo 0;
              }
        }
        
    }
// } else {
//     echo 0; // Verification failed
// }





?>
