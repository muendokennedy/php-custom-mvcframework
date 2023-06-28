<?php 
use app\core\Application;
use app\core\middlewares\BaseMiddleware;

/**
 * Summary of AuthMiddleware
 * @author MuendoKennedy
 * @copyright (c) 06/2023
 */
class AuthMiddleware extends BaseMiddleware
{
  public array $actions;
  public function __construct(array $actions = [])
  {
     $this->actions = $actions;
  }
  public function execute()
  {
     if(Application::isGuest()){
      if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
        
      }
     }
  }
}