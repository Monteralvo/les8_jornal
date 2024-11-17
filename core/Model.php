<?php
  class Model {
    function __construct() {
      // Подклчение к БД, если не удается, вывод ошибки
      $this->mysqli = mysqli_connect(HOST, USER, USER_PASS, DATABASE) or
        die('ERROR: Could not connect. '.mysqli_connect_error());
    }

    public function executeQuery($query) {
      $res = $this->mysqli->query($query);
      return $res;
    }

    function __destruct() {
      $this->mysqli->close();
    }
  }
?>