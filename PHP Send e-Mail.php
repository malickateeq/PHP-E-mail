<h1> Send a Mail</h1>
<?php
   $to = "malickateeq@gmail.com, mailbox.usman91@gmail.com";
   $from = 'no-reply@ezsmart.co.uk';
   $fromName = 'EZSmart';
   $subject = "EZSmart Manager Files Deletes";
   $array = array("Volvo", "BMW", "Toyota");
   $message = "Following array members are added: ";
   $data = "<b> <br>";
   for ($i = 0; $i <= sizeof($array); $i++)
   {
       $data = $data.$array[$i].'<br>';
   }
   $data = $data.'<b>';
   $message = $message.$data;
   $htmlContent = '
   <html>
   <head>
       <title>Welcome to EZSmart alert system</title>
   </head>
   <body>
       <h1>Thanks you for joining with us!</h1>
       <p>'.$message.'</p>
   </body>
   </html>';
   // Set content-type header for sending HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   // Additional headers
   $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
   $headers .= 'Cc: welcome@example.com' . "\r\n";
   $headers .= 'Bcc: welcome2@example.com' . "\r\n";
   // Send email
   if(mail($to, $subject, $htmlContent, $headers)){
       echo 'Email has sent successfully.';
   }else{
   echo 'Email sending failed.';
   }
?>