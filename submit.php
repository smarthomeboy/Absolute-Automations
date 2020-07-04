<?php
        $name = $_REQUEST['username']; // Get Name value from HTML Form
        $email_id = $_REQUEST['email']; // Get Email Value
        $msg = $_REQUEST['contact_message']; // Get Message Value

        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script type='text/javascript'>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script type='text/javascript'>
                    alert('EMAIL FAILED');
                </script>";
        }

        mail("karanmishra9478@gmail.com","Email Form",$message, "From: Absolute-Automations website by $name <$email>");
         

         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/javascript;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <karanmishra9478@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
        $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         

?>
