<?php 

namespace app\core;

class View
{
  public string $title = '';

  public function renderView($view, $params = array())
  {
    $layoutContent = $this->layoutContent();
    $viewContent = $this->renderOnlyView($view, $params);
    $finalLayout = str_replace('{{content}}', $viewContent, $layoutContent);
    echo $finalLayout;
  }
  public function renderContent($viewContent)
  {
    $layoutContent = $this->layoutContent();
    $finalLayout = str_replace('{{content}}', $viewContent, $layoutContent);
    echo $finalLayout;
  }
  protected function layoutContent()
  {
    $layout = Application::$app->layout;
    if(Application::$app->controller){
      $layout = Application::$app->controller->layout;
    }
    ob_start();
    include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
    return ob_get_clean();
  }
  protected function renderOnlyView($view, $params)
  {
    foreach ($params as $key => $value) {
      $$key = $value;
    }
    ob_start();
    include_once Application::$ROOT_DIR . "/views/$view.php";
    return ob_get_clean();
  }
}