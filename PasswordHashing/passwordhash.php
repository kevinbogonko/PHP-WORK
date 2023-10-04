<?php

//creating a hashed password

$password = 'Goodmorning Kenya';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);

//comparing the user and hashpassword


if(password_verify($password, $hashed_password)) {
  echo 'correct password';
}else{
  echo 'wrong password';
}
  

?>