<?php

    if(isset($_POST['booklet_sub']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $services = $_POST['services'];
        $message = $_POST['message'];
        
        $subject = "Message from Website";
        $headers = "MIME-Version: 1.0\n"
                   ."MIME-Version: 1.0".PHP_EOL
                   ."Reply-To: ".$email."\n"
                   ."From: $name \n"
                   ."Content-type: text/html; charset=iso-8859-1\n";
        $mail_to = "CoderXNk@gmail.com";
        
        $body = "<table>"
                    ."<tr>"
			."<td>Name : </td>"
			."<td>".$name."</td>"
                    ."</tr>"
                    ."<tr>"
			."<td>Emaile : </td>"
			."<td>".$email."</td>"
                    ."</tr>"
                    ."<tr>"
			."<td>Interested in : </td>"
			."<td>".$services."</td>"
                    ."</tr>"
                    ."<tr>"
			."<td>Message : </td>"
			."<td>".$message."</td>"
                    ."</tr>"
                    ."<tr>"
                ."</table>";
        
        if(mail($mail_to, $subject, $body, $headers))
        {
            $msg = 'Message Sent!';
        }
    }

?>
