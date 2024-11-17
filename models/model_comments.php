<?php
  class Model_Comments extends Model {
    function get_data() {
      $query = 'SELECT user, comment FROM feedback';
      $result = $this->executeQuery($query);
      return $result;
    }

    function close_connetcion() {
      $this->mysqli->close();
    }
  }
?>