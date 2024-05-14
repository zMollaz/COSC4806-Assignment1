<?php
  $valid_username = "admin";
  $valid_password = "123";

  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Login success";
  } else {
    echo "Invalid username or password";
  }
?>