<?php

//process_data.php

if(isset($_POST))
{
 $name = '';
 $phone = '';
 $mail = '';
 $texto = '';

 $name_error = '';
 $phone_error = '';
 $mail_error = '';
 $texto_error = '';
 $captcha_error = '';

 if(empty($_POST["name"]))
 {
  $name_error = 'Name is required';
 }
 else
 {
  $name = $_POST["name"];
 }

 if(empty($_POST["phone"]))
 {
  $phone_error = 'phone is required';
 }
 else
 {
  if(!filter_var($_POST["phone"]))
  {
   $phone_error = 'Invalid phone';
  }
  else
  {
   $phone = $_POST["phone"];
  }
 }

 if(empty($_POST["mail"]))
 {
  $mail_error = 'Mail is required';
 }
 else
 {
  if(!filter_var($_POST["mail"]))
  {
   $mail_error = 'Invalid mail';
  }
  else
  {
   $mail = $_POST["mail"];
  }
 }

 if(empty($_POST["texto"]))
 {
  $texto_error = 'texto is required';
 }
 else
 {
  if(!filter_var($_POST["texto"], FILTER_VALIDATE_texto))
  {
   $texto_error = 'Invalid texto';
  }
  else
  {
   $texto = $_POST["texto"];
  }
 }

 

 if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key = '6LfYEN4eAAAAAMaxgya2EOjIjaK1VslDpVAnOR3v';

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed';
  }
 }

 if($name_error == '' && $phone_error == '' && $mail_error == '' && $texto_error == '' && $captcha_error == '')
 {
  $data = array(
   'success'  => true
  );
 }
 else
 {
  $data = array(
   'name_error' => $name_error,
   'phone_error' => $phone_error,
   'mail_error'  => $email_error,
   'texto_error' => $texto_error,
   'captcha_error'  => $captcha_error
  );
 }

 echo json_encode($data);
}

?>