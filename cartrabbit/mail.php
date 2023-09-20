<?php
 
$fname = $_POST['fname'];
$email= $_POST['email'];

$number = $_POST['phone'];
$id = $_POST['proid'];

$order = $_POST['pmode'];


$to=$email;
$subject = "Mail For 4k";
$txt = " Order Has Been Successfully Placed.... \r\n Name = ". $fname . "\r\n  Email = " . $email . "\r\n number =" . $phone. "\r\n ID =" . $proid."\r\n order =" .$pmode;
$headers = "From: 4kcreationsns@gmail.com" . "\r\n" .
"CC: 4kcreationsns@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers); 
}
echo "<script>alert('Your 0rder placed successfully') </script>  ";
?>