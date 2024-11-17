<?php
  class Controller_About extends Controller {
    function __construct() {
      $this->model = new Model_About();
      $this->view = new View();
    }

    function action_index($local_page_css_files) {
      
      $data = $this->model->get_data();
      $this->view->generate('authors_view.php', 'template_view.php', $data, $local_page_css_files);
    }

    function action_author($local_page_css_files) {
      $id_author = $_GET['id'];
      $data = $this->model->get_data($id_author);
      $this->view->generate('author_view.php', 'template_view.php', $data, $local_page_css_files);
    }
  }
?>