<?php

namespace app\core;

/**
 * Summary of Application
 * @author MuendoKennedy
 * @copyright (c) 2023
 */
class Application
{
  public static string $ROOT_DIR;
  public Router $router;
  public Request $request;
  public Response $response;
  public static Application $app;
  public Controller $controller;
  public function __construct($rootPath)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
  }
  /**
   * Summary of run
   * @return void
   */
  public function run()
  {
    $this->router->resolve();
  }
  public function getController()
  {
    return $this->controller;
  }
  public function setController(Controller $controller)
  {
    $this->controller = $controller;
  }
}
