<?php
    if(isset($_POST['submit-form']))
    {
        $name = $_REQUEST['username']; // Get Name value from HTML Form
        $email_id = $_REQUEST['email']; // Get Email Value
        $msg = $_POST['contact_message']; // Get Message Value
         
        $to = "karanmishra9478@gmail.com"; // You can change here your Email
        $subject = "'$name' has sent a mail from Absolute-Automations Website"; // This is your subject
         

         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/javascript;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <karanmishra9478@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
        $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>
