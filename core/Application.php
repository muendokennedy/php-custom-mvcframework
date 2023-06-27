<?php

namespace app\core;


/**
 * Summary of Application
 * @author MuendoKennedy
 * @copyright (c) 06/2023
 */
class Application
{
  /**
   * Summary of ROOT_DIR
   * @var string
   */
  public static string $ROOT_DIR;
  /**
   * Summary of router
   * @var Router
   */
  public Router $router;
  /**
   * Summary of request
   * @var Request
   */
  public Request $request;
  /**
   * Summary of response
   * @var Response
   */
  public Response $response;
  /**
   * Summary of db
   * @var Database
   */
  public Database $db;
  /**
   * Summary of app
   * @var Application
   */
  public static Application $app;
  /**
   * Summary of controller
   * @var Controller
   */
  public Controller $controller;
  /**
   * Summary of __construct
   * @param mixed $rootPath
   */
  public Session $session;

  public function __construct($rootPath, array $config)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->session = new Session();
    $this->router = new Router($this->request, $this->response);
    $this->db = new Database($config['db']);
  }
  /**
   * Summary of run
   * @return void
   */
  public function run()
  {
    $this->router->resolve();
  }
  /**
   * Summary of getController
   * @return Controller
   */
  public function getController()
  {
    return $this->controller;
  }
  /**
   * Summary of setController
   * @param \app\core\Controller $controller
   * @return void
   */
  public function setController(Controller $controller)
  {
    $this->controller = $controller;
  }
}