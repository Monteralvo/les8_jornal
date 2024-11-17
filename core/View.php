<?php
  class View {
    function generate($content_view, $template_view, $data=null, $local_page_css_files=null) {
      include 'views/'.$template_view;
    }
  }
?>