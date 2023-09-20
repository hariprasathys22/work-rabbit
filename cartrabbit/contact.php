<?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "4kcreationsns@gmail.com";
$subject = "Mail For 4k";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: kaviyansnsctit@gmail.com" . "\r\n" .
"CC: p.kaviyan2002@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo "<script>alert('Your message has been sent') </script>  ";
?>