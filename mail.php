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
header('Location: http://cwiklinski.me/');

<script type='text/javascript'>
$(window).load(function() {
$('html, body').animate({ scrollTop: $('#section5').offset().top }, 0);
});

</script>
}
?>




<script type='text/javascript'>
document.getElementById('section5').scrollIntoView({
  behavior: 'smooth'
});
// $(window).load(function() {
// $('html, body').animate({ scrollTop: $('#section5').offset().top }, 0);
//  });

</script>

