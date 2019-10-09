<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n\n Message: $message";
$recipient = "artur@cwiklinski.me";
$subject = "cwiklinski.me - kontakt";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://cwiklinski.me')
echo 'scroll();'

}
?>


 <script>
        $(document).ready(function (){            
                $('html, body').animate({
                    scrollTop: $("#section5").offset().top
                }, 2000);
            });        
    </script>

