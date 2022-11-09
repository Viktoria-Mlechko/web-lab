<?php

if (!function_exists('clearField')) {
  function clearField($field) {
    return htmlspecialchars(stripslashes(trim($field)));
  }
}
if (!function_exists('isMoreAttempt')) {
  function isMoreAttempt() {
    if (!isset($_COOKIE['attempts'])) {
      return false;
    }
    
    $count = intval($_COOKIE["attempts"]);
    
    return $count >= 3;
  }
}
if (!function_exists('incrementAttempt')) {
  function incrementAttempt() {
    $count = 0;
    if (isset($_COOKIE['attempts'])) {
      $count = intval($_COOKIE["attempts"]);
    }
    if ($count < 3) {
      setcookie("attempts", ++$count, time() + 3600);
    }
  }
}

if (!function_exists('checkPassword')) {
  function checkPassword($email, $password) {
      [$db] = include __DIR__.'/boot.php';
    
      if (mysqli_connect_errno()) {
          throw new Exception('Ошибка подключения к БД');
      }

      $result = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");

      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
      if (!$row) {
        throw new Exception("Пользователь с таким email не найден");
      }
      $_password = $row['password'];

      if (isMoreAttempt()) {
        throw new Exception("Пользователь заблокирован. Попробуйте ввести пароль через час.");
      }
      
      if (!password_verify($password, $_password)) {
        incrementAttempt();
        throw new Exception("Пароль введён не правильно");
      }
      

      return [$row['id'], $row['email']];
  }
}

if (!function_exists('checkAuth')) {
  function checkAuth() {
    return $_SESSION && !empty($_SESSION) && isset($_SESSION['id']);
  }
}