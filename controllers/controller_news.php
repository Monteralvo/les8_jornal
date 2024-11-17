<?php

class Controller_News extends Controller {

  function __construct() {
    $this->model = new Model_News();
    $this->view = new View();
  }

  function action_index($local_page_css_files) {
    $data = $this->model->get_data();

    $this->view->generate('news_view.php', 'template_view.php', $data, $local_page_css_files);
  }
}
?> 