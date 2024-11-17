<?php
  define('HOST', '127.0.0.1');
  define('USER', 'monti');
  define('USER_PASS', 'admin');
  define('DATABASE', 'POSTS');
  define('BASE_URI', 'localhost:8080/lesson8/journal/');

  // Отключение отображения ошибок от PHP 
  error_reporting(0);
  // Отключение отображения ошибок и уведомлений от MYSQL
  mysqli_report(MYSQLI_REPORT_OFF);
?>