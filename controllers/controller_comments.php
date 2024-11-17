<?php
  class Controller_Comments extends Controller {
    function __construct() {
      $this->view = new View;
      $this->model = new Model_Comments;
    }

    function action_index($local_page_css_files) {
      $data = $this->model->get_data();
      $this->view->generate('comments_view.php', 'template_view.php', $data, $local_page_css_files);
      
      $this->model->close_connection();
    }
  }
?>