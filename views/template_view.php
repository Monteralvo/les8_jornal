<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Главная</title>
  <link href='src/css/normalizer.css' rel=stylesheet>
  <link href='src/css/general.css' rel=stylesheet>
  <?php
  // Динамическая установка стилей в зависимости от страницы
    if (is_array($local_page_css_files)) {
      foreach ($local_page_css_files as $file) {
        echo "<link href='".$file."' rel=stylesheet>";
      }
    }
  ?>
</head>
<body>
  <?php include_once 'header.php'; ?>
  <?php include 'views/'.$content_view; ?>
  <?php include_once 'footer.php'; ?>
</body>
</html>