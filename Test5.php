<?php
function password_generate($length) 
{
  $data = '!@#$%^&*()_+1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $length);
}
  echo password_generate(12)."\n";
?>