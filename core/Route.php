<?php
class Route {
  static function getPathArray() {
    $BASE_URL = 'localhost:8080/lesson8/journal/';

    $pathArray = [];

    $currentPath = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($currentPath, $BASE_URL) >= 0) {
      $tmpPath = substr($currentPath, strlen($BASE_URL));
    }

    $tmpArray = explode("/", $tmpPath);

    $pathArray = array_values(array_filter($tmpArray, function ($element) {
      return !empty($element);
    }));

    return $pathArray;
  }

  static function start() {

    $controller_name = 'news';
    $action_name = 'index';

    $routes = self::getPathArray();

    if (!empty($routes[0])) {
      $controller_name = $routes[0];
    }

    if (!empty($routes[1])) {
      $action_name = $routes[1];
    }

    $model_name = 'Model_' . $controller_name;

    // Регулярное выражение для поиска CSS файлов по назначению страницы
    $pattern = "/src\/css\/".$controller_name."[\w]*.css/";

    $controller_name = 'Controller_' . $controller_name;
    $action_name = 'action_' . $action_name;

    $model_file = strtolower($model_name) . '.php';
    $model_path = "models/" . $model_file;
    if (file_exists($model_path)) {
      include "models/" . $model_file;
    }

    $controller_file = strtolower($controller_name) . '.php';
    $controller_path = "controllers/" . $controller_file;

    if (file_exists($controller_path)) {
      include "controllers/" . $controller_file;
    } else {
      Route::ErrorPage404();
      return null;
    }

    $controller = new $controller_name;
    $action = $action_name;

    // Переменная для локальных CSS файлов
    $local_page_css_files = [];
    
    if (method_exists($controller, $action)) {
      foreach (glob('src/css/*') as $item) {
        if (preg_match($pattern, $item)) {
          array_push($local_page_css_files, $item);
        }        
      };

      $controller->$action($local_page_css_files);
    }
  }

  static function ErrorPage404() {
    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/lesson8/journal/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    header('Location: '.$host.'404' );
  }
}
?>