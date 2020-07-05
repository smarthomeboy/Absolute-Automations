<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['username']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['contact_message']; // Get Message Value
         
        $mailTo = "karanmishra9478@gmail.com"; // You can change here your Email
        $subject = .$name" has sent a mail from Absolute-Automations Website"; // This is your subject
        $headers="From: ".$email_id;
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>";
            
        // HTML Message Ends here
         
        if(mail($mailTo,$subject,$message,$headers)){
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

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />    
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="submit.php" id="email-form" method="post">
<div class="form-group mb-0">
<div class="response"></div>
</div>

<div class="form-group"><label>Your Name (required)</label> <input class="username" name="username" type="text" /></div>

<div class="form-group"><label>Email (required)</label> <input class="email" name="email" type="email" /></div>

<div class="form-group"><label>Message</label><textarea name="contact_message"></textarea></div>

<div class="form-group"><button class="theme-btn btn-style-three" id="submit" name="submit" type="button">Send</button></div>
</form>
</body>
</html>
