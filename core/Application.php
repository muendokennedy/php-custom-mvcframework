<?php

namespace app\core;

use app\core\Request;

/**
 * Summary of Application
 * @author MuendoKennedy
 * @copyright (c) 2023
 */
class Application
{
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
   * Summary of __construct
   */
  public function __construct()
  {
    $this->request = new Request();
    $this->router = new Router($this->request);
  }
  /**
   * Summary of run
   * @return void
   */
  public function run()
  {
    $this->router->resolve();
  }
}
