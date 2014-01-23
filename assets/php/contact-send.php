<?php
if (isset($_POST['email']))
//if "email" is filled out, send email
  {
  //send email
  $name = $_POST['name'];
  $email = $_POST['email'] ;
  $subject = $_POST['subject'] ;
  $message = $_POST['message'] ;

  $headers='From: '.$name;
$headers.=”\r\n”; //email account on file with Go Daddy
$headers.='Reply-To:'.$email.'\r\n';
$headers.='Return-Path'.$email.'\r\n';

if (mail($to,$subject,$body,$headers)) {
echo ‘sent’;
}
  
  $value=mail("karthik@nusacm.org", $subject.$name,$email." ".$message);
  echo $value." "."Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "Incorrect fields!";
  }
?>
