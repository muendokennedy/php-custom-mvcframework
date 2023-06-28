<?php

namespace app\core;

use app\core\Application;
use app\core\middlewares\BaseMiddleware;

class Controller
{
  /**
   * Summary of middlewares
   * @var \app\core\middlewares\BaseMiddleware[]
   */
  protected array $middlewares = [];
  public string $layout = 'main';
  public string $action = '';
  public function setLayout($layout)
  {
    $this->layout = $layout;
  }
  public function render($view, $params = array())
  {
    return Application::$app->router->renderView($view, $params);
  }
  public function registerMiddleware(BaseMiddleware $middleware)
  {
     $this->middlewares[] = $middleware;
  }
  

	/**
	 * Summary of middlewares
	 * @return array
	 */
	public function getMiddlewares(): array {
		return $this->middlewares;
	}
}