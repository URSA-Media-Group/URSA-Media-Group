<?php

$name_error = $email_error =$phone_error = "";
$name_error = $email_error =$phone_error = $message =$success = "";

if ($_SERVER["REQUEST_METHOD"]) == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and spaces are allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    }
  }

  if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);

    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\s-]{0,2}?\d{3}[\s-]?\d {4}$/i",$phone)) {

    }
  }

  if (empty($_POST["message"])) {
    $message =""
  } else {
    $message = test_input($_POST["message"]);
  }

if($name_error == '' and $email_error == '' and $phone_error == '' ){
  $message_body = '';
  unset($_POST['submit']);
foreach($_POST as $key => $value){
  $message textarea .= "$key: $value\n";
    }
  $to = 'ursamediagroup@gmail.com'
  $subject = 'Contact Form Submit';
  if (mail($to, $subject,$message)){
      $success = "Message sent, thank you for contacting us."
      $name = $email = $phone = $message ='';
  }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
